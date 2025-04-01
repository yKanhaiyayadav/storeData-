@extends('welcome')

@section('title')Registration Page @endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col col-8">
            <div class="card p-3 m-3">
            <form action="{{route('/formRegister')}}" method="post" enctype="multipart/form-data">
              @csrf
                 <div class="mb-3">
                   <label for="exampleInputEmail1" class="form-label">Full Name<span class="text-danger">*</span> :</label>
                   <input type="text" class="form-control" name="name">
                   <div id="emailHelp" class="error-alert"></div>
                 </div>
                 <div class="mb-3">
                   <label for="exampleInputPassword1" class="form-label">Contact No.<span class="text-danger">*</span> :</label>
                   <input type="number" class="form-control" name="mobile">
                   <div id="emailHelp" class="error-alert"></div>
                 </div>
                 <div class="mb-3">
                   <label for="exampleInputPassword1" class="form-label">Age<span class="text-danger">*</span> :</label>
                   <input type="date" class="form-control" name="age">
                   <div id="emailHelp" class="error-alert"></div>
                 </div>
                 <div class="mb-3">
                   <label for="gender" class="form-label">Gender<span class="text-danger">*</span> :</label>
                   <input type="radio" name="gender" value="male">Male
                   <input type="radio" name="gender" value="female">Female
                   <div id="emailHelp" class="error-alert"></div>
                 </div>
                 <div class="mb-3">
                   <label for="exampleInputPassword1" class="form-label">Email Address<span class="text-danger">*</span> :</label>
                   <input type="email" class="form-control" name="email">
                   <div id="emailHelp" class="error-alert"></div>
                 </div>
                 <div class="mb-3">
                   <label for="exampleInputPassword1" class="form-label">Select State<span class="text-danger">*</span> :</label>
                   <select name="" class="form-control" name="state">
                    <option value="up">-- Select State --</option>
                    <option value="up">Uttar Pradesh</option>
                    <option value="up">Uttar Pradesh</option>
                    <option value="up">Uttar Pradesh</option>
                    <option value="up">Uttar Pradesh</option>
                   </select>
                   <div id="emailHelp" class="error-alert"></div>
                 </div>
                 <div class="mb-3">
                   <label for="exampleInputPassword1" class="form-label">Select District<span class="text-danger">*</span> :</label>
                   <select name="" class="form-control" name="dist">
                    <option value="up">-- Select District --</option>
                    <option value="up">Gorakhpur</option>
                    <option value="up">Maharajganj</option>
                    <option value="up">Basti</option>
                    <option value="up">Khalilabad</option>
                   </select>
                   <div id="emailHelp" class="error-alert"></div>
                 </div>
                 <div class="mb-3">
                   <label for="exampleInputPassword1" class="form-label">Make Password<span class="text-danger">*</span> :</label>
                   <input type="Password" class="form-control" name="pass">
                   <div id="emailHelp" class="error-alert"></div>
                 </div>
                 <div class="mb-3">
                   <label for="exampleInputPassword1" class="form-label">Confirm Password<span class="text-danger">*</span> :</label>
                   <input type="text" class="form-control" name="pass1">
                   <div id="emailHelp" class="error-alert"></div>
                 </div>
                 <div class="mb-3">
                   <label for="exampleInputPassword1" class="form-label">Select Picture<span class="text-danger">*</span> :</label>
                   <input type="file" class="form-control" name="image">
                   <div id="emailHelp" class="error-alert"></div>
                 </div>
                 <div class="mb-3 form-check">
                   <input type="checkbox" class="form-check-input" id="exampleCheck1">
                   <label class="form-check-label" for="exampleCheck1">Check me out</label>
                 </div>
                 <button type="submit" class="btn btn-primary">Submit</button>
               </form>
            </div>
        </div>
    </div>
</div>

@endsection