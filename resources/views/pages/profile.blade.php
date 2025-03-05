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
    <x-navbar/>
    <div class="container">
        <div class="row justify-content-center m-3 p-3">
            <div class="col col-8">
                <div class="card m-3 p-3">
                    @if(session('activeId'))
                    <div class="btn text-start">
                    <a href="{{route('update')}}{{$user->id}}"><button class="btn btn-success">Update</button></a>
                    <a href="{{route('chenge')}}"><button class="btn btn-success">Change Password</button></a>
                    <button class="btn btn-danger" type="button"><a class="text-light text-decoration-none fs-bold" href="">Remove</a></button>
                    </div>
                    @endif
                    <h1 class="row justify-content-center pb-3">user profile</h1>
                @if(!session('activeId'))
                <h1 class="text-danger text-center">User Data Not Found !..</h1>
                @else
                @if($user)
                <div class="text-center"><img class="rounded-circle" src="{{'background-img/'.$user->image}}" alt="view-img" width="100" height="100"></div>
                @else
                <i class="bi bi-person-circle text-light fs-3"></i>
                @endif
                        <div class="pt-3 d-flex justify-content-between align-items-center">
                             <div class="name">User Name :</div>
                             <div class="form-text">{{$user->name}}</div>
                        </div>
                        <div class="pt-3 d-flex justify-content-between align-items-center">
                             <div class="name">Age : </div>
                             <div class="form-text">{{$user->age}}</div>
                        </div>
                        <div class="pt-3 d-flex justify-content-between align-items-center">
                             <div class="name">Mobile No. : </div>
                             <div class="form-text">{{$user->mobile}}</div>
                        </div>
                        <div class="pt-3 d-flex justify-content-between align-items-center">
                             <div class="name">Gender : </div>
                             <div class="form-text">{{$user->gender}}</div>
                        </div>
                        <div class="pt-3 d-flex justify-content-between align-items-center">
                             <div class="name">Email Id : </div>
                             <div class="form-text">{{$user->email}}</div>
                        </div>
                      @endif
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>