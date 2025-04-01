@extends('welcome')

@section('title')Login Page @endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col col-8">
          <h1 class="row justify-content-center p-3">Sign Up</h1>
            <div class="card p-3 m-3">
            <form action="{{route('/login')}}" method="post" enctype="multipart/form-data">
              @csrf
                 <div class="mb-3">
                   <label for="exampleInputEmail1" class="form-label">User Email Id<span class="text-danger">*</span> :</label>
                   <input type="email" class="form-control" name="userId">
                   <div id="emailHelp" class="error-alert"></div>
                 </div>
                 <div class="mb-3">
                   <label for="exampleInputPassword1" class="form-label">Password : <span class="text-danger">*</span> :</label>
                   <input type="password" class="form-control" name="passwords">
                   <div id="emailHelp" class="error-alert"></div>
                 </div>
                 <div class="mb-3">
                   <label for="exampleInputPassword1" class="form-label">Confirm Password : <span class="text-danger">*</span> :</label>
                   <input type="date" class="form-control" name="confirm_passwords">
                   <div id="emailHelp" class="error-alert"></div>
                 </div>
                 <div class="mb-3 form-check">
                   <input type="checkbox" class="form-check-input" id="exampleCheck1">
                   <label class="form-check-label" for="exampleCheck1">Check me out</label>
                 </div>
                 <div class="d-flex justify-content-between">
                   <button type="submit" class="btn btn-primary">Signin</button>
                   <button type="button" class="btn btn-warning">Create New Account <a class="text-light" href="/register">Signup</a></button>
                 </div>
               </form>
            </div>
        </div>
    </div>
</div>

@endsection