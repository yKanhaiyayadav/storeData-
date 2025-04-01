<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userModel;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function register(Request $requset)
    {
        $requset->validate([
            'name' => 'required|string',
            'mobile' => 'required|string',
            'age' => 'required|string',
            'gender' => 'required|string',
            'email' => 'required|email|string',
            'state' => 'required|string',
            'dist' => 'required|string',
            'passwords' => 'required|string',
            'image' => 'required'
            
        ]);

        $user = new userModel();

        $user->name = $requset->name;
        $user->mobile = $requset->mobile;
        $user->age = $requset->age;
        $user->gender = $requset->gender;
        $user->email = $requset->email;
        $user->state = $requset->state;
        $user->dist = $requset->dist;
        $user->pass = Hash::make($requset->passwords);
        $image_name = time().$requset->file('image')->getClientOriginalName();
        $user->image = $image_name;
        $user->save();
        $requset->file('image')->move(public_path('picture'), $image_name);

        return "<script>alert('Registration Successfully...');window.location.href='/login'</script>";

    }
}
