<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    <button class="btn"><a class="btn btn-primary" href="/">Home</a></button>
    <div class="container">
        <div class="row justify-content-center m-3 p-3">
            <div class="col col-8">
               <div class="card m-3 p-3">
                <h1 class="row justify-content-center">Signup Here</h1>
                    <form onsubmit="return submitForm()" action="{{route('create')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">Name<span class="text-danger">*</span> : </label>
                           <input type="text" class="form-control validation" name="name" id="fieldName">
                           <div class="errorCheck"></div>
                        </div>
                        <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">Contact No.<span class="text-danger">*</span> : </label>
                           <input type="text" max-length="10" pattern="^\d{10}$" class="form-control validation" name="mobile">
                           <div class="errorCheck"></div>
                        </div>
                        <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">Age<span class="text-danger">*</span> : </label>
                           <input type="date" class="form-control validation" name="age">
                           <div class="errorCheck"></div>
                        </div>
                        <div class="mb-3">
                           <label for="gender" class="form-label">Gender<span class="text-danger">*</span> : </label>
                           <input type="radio" value="male" name="gender" class="validation">Male
                           <input type="radio" value="female" name="gender" class="validation">Female
                           <div class="errorCheck"></div>
                           <div class="errorCheck"></div>
                        </div>
                        <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">email<span class="text-danger">*</span> : </label>
                           <input type="email" class="form-control validation" name="email" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" aria-describedby="emailHelp">
                           <div class="errorCheck"></div>
                        </div>
                        <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">Make Password<span class="text-danger">*</span> : </label>
                           <input type="password" class="form-control validation" name="pass" aria-describedby="emailHelp">
                           <div class="errorCheck"></div>
                        </div>
                        <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">Confirm Password<span class="text-danger">*</span> : </label>
                           <input type="password" class="form-control validation" name="pass1" aria-describedby="emailHelp">
                           <div class="errorCheck"></div>
                        </div>
                        <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">Choose Picture<span class="text-danger">*</span> : </label>
                           <input type="file" class="form-control validation" name="image">
                           <div class="errorCheck"></div>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input validation" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            <div class="errorCheck"></div>
                        </div>
                        <input type="submit" class="form-control" value="submit">   
                    </form>
                    <div class="text-end">
                    <span>Have an Account <a href="login" class="text-danger text-decoration-none fs-5">Signin</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('./js/validation.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>