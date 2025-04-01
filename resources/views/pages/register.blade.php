@extends('welcome')

@section('title')Registration Page @endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col col-8">
          <h1 class="row justify-content-center p-3">Sign Up</h1>
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
                   <label for="state" class="form-label">Select State : <span class="text-danger">*</span> :</label>
                   <select name="state" class="form-control">
                    <option>-- Select State --</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="New Delhi">New Delhi</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Hariyana">Hariyana</option>
                   </select>
                   <div id="emailHelp" class="error-alert"></div>
                 </div>
                 <div class="mb-3">
                  <label for="district" class="form-label">
                      Select District : <span class="text-danger">*</span> :
                  </label>
                  <select name="dist" class="form-control">
                      <option value="">-- Select District --</option>
                      <option value="Gorakhpur">Gorakhpur</option>
                      <option value="Maharajganj">Maharajganj</option>
                      <option value="Basti">Basti</option>
                      <option value="Khalilabad">Khalilabad</option>
                  </select>
                 <div class="mb-3">
                   <label for="exampleInputPassword1" class="form-label">Make Password<span class="text-danger">*</span> :</label>
                   <input type="Password" class="form-control" name="passwords">
                   <div id="emailHelp" class="error-alert"></div>
                 </div>
                 <div class="mb-3">
                   <label for="exampleInputPassword1" class="form-label">Confirm Password<span class="text-danger">*</span> :</label>
                   <input type="text" class="form-control" name="confirm_passwords">
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
                 <div class="d-flex justify-content-between">
                   <button type="submit" class="btn btn-primary">Submit</button>
                   <button type="button" class="btn btn-warning">Have an Account <a class="text-light" href="/login">Login</a></button>
                 </div>
               </form>
            </div>
        </div>
    </div>
</div>

@endsection