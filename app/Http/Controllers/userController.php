<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

Session::put('username', 'JohnDoe');

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\userModel;
use App\Models\user_image;
use App\Models\user_document;
use App\Models\user_video;

class userController extends Controller
{
    public function saveData(Request $req)
    {
        if(userModel::WHERE('email', $req->email)->exists())
        {
            return "<script>alert('This Email Allready exists ?...');window.location.href='/signup';</script>";    
        }

        $req->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'required|string|max:10',
            'age' => 'required|string',
            'gender' => 'required|string',
            'email' => 'required|string|max:255',
            'pass' => 'required|string|max:255',
            'image' => 'required|mimes:jpg,jpeg,png|max:2048',
        ]);

        $user = new userModel();

        $user->name = $req->name;
        $user->mobile = $req->mobile;
        $user->age = $req->age;
        $user->gender = $req->gender;
        $user->email = $req->email;
        $user->password = Hash::make($req->pass);
        $user->image = time()."_".$req->file('image')->getClientOriginalName();
        $req->file('image')->move(public_path('background-img'), $user->image);

        $user->save();

        return "<script>alert('Registration Successfully...');window.location.href='/login';</script>";
    }

     public function login(Request $req)
     {
        if(Session('activeId')){
            return "<script>alert('You Have an Allready Login');window.location.href='profileActive';";
        }else{
            $req->validate(['email' => 'required|string', 'pass' => 'required']);

       if($user = userModel::WHERE('email', $req->email)->first()){
           if(Hash::check($req->pass, $user->password)){
               
            Session::put('userimg', $user->image);
            Session::put('userName', $user->name);
             Session::put('activeId', $user->id);
            
             // return view('pages.profile', compact('user'));
            return "<script>alert('Login Successfully...');window.location.href='/profileActive';</script>"; 
        }else{
            return "<script>alert('password invalide !!');window.location.href='/login';</script>";
        }
       }else{
        return "<script>alert('user id invalide !!');window.location.href='/login';</script>";
       }
        }
    }
    
    public function logout()
     {
        if(!session('activeId')){
            echo "<script>alert('User Allready Logout !...');window.location.href='/login';</script>";
        }else{
            Session::flush();
            echo "<script>alert('Logout Successfully...');window.location.href='/login';</script>";
        }
     }

     public function uploadData(Request $req)
     {
        
    // Validate input (fix key from 'images.*' to 'files.*')
    // $req->validate([
        //     'files.*' => 'required|image|mimes:jpg, jpeg, png, gif, svg, doc, docx, txt, pdf, mp4, avi, mkv, mov'
        // ]);
        
        
        
        // Ensure 'picture' directory exists
        $uploadPath = public_path('picture');
        
        
        // Check if multiple files are uploaded
        if ($req->hasFile('files')) {
            foreach ($req->file('files') as $my_img) {
                $fileEx = $my_img->extension(); // Get original file extension
                $fileName = time()."".rand(1000, 9999) . "_" .$my_img->getClientOriginalName(); // Unique file name
                
                
                // Move each file
                
                if($fileEx == "jpg" || $fileEx == "jpeg" || $fileEx == "png" || $fileEx == "gif"){
                    $userImage = new user_image();
                    $userImage->description = $req->description;
                    $userImage->image = $fileName;
                    $my_img->move($uploadPath, $userImage->image);
                    $userImage->save();
                }else{
                    if($fileEx == "pdf" || $fileEx == "doc" || $fileEx == "docx" || $fileEx == "txt"){
                    $userDocument = new user_document();
                    $userDocument->description = $req->description;
                    $userDocument->document = $fileName;
                    $my_img->move($uploadPath, $userDocument->document);
                    $userDocument->save();
                    // echo $fileName." PDF File <br>";
                }else{
                    if($fileEx == "mp4" || $fileEx == "avi" || $fileEx == "mov"){
                        $userVideo = new user_video();
                        $userVideo->description = $req->description;
                        $userVideo->video = $fileName;
                        $my_img->move($uploadPath, $userVideo->video);
                        $userVideo->save();
                        // echo $fileName." Video File <br>";
                    }
                }
            }
            
        }
    }
    $id  = session('activeId');
      $user = userModel::WHERE('id', $id)->first();
      echo "<script>alert('File Uploaded Successfully..')</script>";
    return view('pages.profile', compact('user'));

     }

     public function getImage()
     {
        if(session('activeId')){
            $user = user_image::all();
            return view('pages.gallary', compact('user'));
        }else{
            return view('signin');
        }
     }

     public function getDocument()
     {
        if(session('activeId')){
            $user = user_document::all();
            return view('pages.document', compact('user'));
        }else{
            return view('signin');
        }
     }

     public function getVideo()
     {
        if(session('activeId')){
            $user = user_video::all();
            return view('pages.video', compact('user'));
        }else{
            return view('signin');
        }
     }

     public function update($id){
        $data = userModel::WHERE('id', $id)->first();
        // dd($data->name);
        return view('pages.edit', compact('data'));
     }

     public function updateData(Request $req, $id){
         $user = userModel::find($id);
        if($user){
            if($req->file('image')){
                $user->update([
                    $user->name = $req->name,
                    $user->mobile = $req->mobile,
                    $user->age = $req->age,
                    $user->gender = $req->gender,
                    $user->email = $req->email,
                    unlink(public_path('background-img/'.$user->image)),
                    $user->image = time()."_".$req->file('image')->getClientOriginalName(),
                    $req->file('image')->move(public_path('background-img'), $user->image)
                ]);
                return view('pages.profile', compact('user'));
            }else{
                $user->update([
                    'name' => $req->name,
                    'mobile' => $req->mobile,
                    'age' => $req->age,
                    'gender' => $req->gender,
                    'email' => $req->email,
                    'image' => $user->image,
                ]);
                echo "<script>alert('updated Successfully..')</script>";
                return view('pages.profile', compact('user'));
            }
        }
     }

     public function chenged(Request $req){
        // dd($req->oldpass);
         
        $id  = session('activeId');
        $user = userModel::find($id);
        if($user){
            if(Hash::check($req->oldpass, $user->password)){
                $user->update(['password' => Hash::make($req->pass)]);
                echo "<script>alert('Your Password Changed Successfully...');window.location.href='/';</script>";
            }else{
                echo "<script>alert('Old Password is wrong !');window.location.href='chenge';</script>";
            }
        }else{
            echo "<script>alert('User Does Not exist !');window.location.href='chenge';</script>";
        }
     }

     public function profileActive(){
        $id = Session('activeId');
        if($id){
            $user = userModel::find($id);
            return view('pages.profile', compact('user'));
        }else{
            return "<script>alert('Please Login');window.location.href='signin';</script>";
        }

     }

     public function forgetpass(Request $req){
        $email = $req->email;
        $user = userModel::WHERE('email', $email)->first();
        // dd($user);
        if($user){
            if($user->name === $req->name && $user->mobile === $req->mobile){
                Session::put('id', $user->id);
                return "<script>alert('Your Data Have Verified !');window.location.href='forget-password';</script>";
            }else{
                return "<script>alert('name or mobile not matched !');window.location.href='forget';</script>";
            }
        }else{
            return "<script>alert('Your Email Address not matched !');window.location.href='forget';</script>";
        }

    }

    public function forgetPassword(Request $req){
        $id = Session('id');
        if($id){
            $user = userModel::find($id);
            $user->update(['password' => Hash::make($req->pass)]);
            return "<script>alert('Forget Password Successfully...');window.location.href='signin';</script>";
        }else{
            return "<script>alert('Your Account Have Not verified !');window.location.href='forget';</script>";
        }
    }
}
