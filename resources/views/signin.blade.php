<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .bgcolor{
            background-color: rgb(220, 238, 239);
        }
    </style>
</head>
<body class="bgcolor">
@if($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <strong>{{$message}}</strong>
    </div>
    @endif
    <button class="btn"><a class="btn btn-primary text-light" href="/">Home</a></button>
    <div class="container">
        <div class="row justify-content-center m-3 p-3">
            <div class="col col-8">
               <div class="card m-3 p-3">
                <h1 class="row justify-content-center">Signin Here</h1>
                    <form onsubmit="return submitForm()" action="{{route('signin')}}" method="post">
                    @csrf
                        <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">User Id<span class="text-danger">*</span> : </label>
                           <div class="d-flex form-control">
                               <i class="bi bi-person-circle fs-3"></i>
                               <input type="email" class="form-control border-0 outlin-none validation" name="email" aria-describedby="emailHelp">
                            </div>
                            <div class="errorCheck"></div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Password<span class="text-danger">*</span> : </label>
                            <div class="d-flex form-control">
                               <i class="bi bi-lock-fill fs-5"></i>
                           <input type="password" class="form-control border-0 validation" name="pass">
                           </div>
                           <div class="errorCheck"></div>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <input type="submit" class="form-control" value="submit">   
                    </form>
                    <div class="text-start d-flex justify-content-between">
                        <div><span>Have an Account <a href="signup" class="text-danger text-decoration-none fs-5">Signup</a></span></div>
                        <div class="">
                        <a href="forget" class="text-danger text-decoration-none fs-5">Forget Password</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('./js/validation.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>