<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            height:100vh;
            width: 100%;
        }
        .screenimg{
            /* width: 50%; */
            /* background-attachment: fixed; */
            background-image: url("./background-img/img-01.jpg");
            background-repeat:no-repeat;
            background-size:100% 100%;
            background-position-x:center;
            background-position-y:center;
            opacity: 2; 
        }
        </style>
</head>
<body class="screenimg">
    <div class="content text-center">
        <h1 class="text-primary fs-0.5 pt-5">Store Your Documents, Images and Videos</h1>
        <p class="text-success fs-3">Safe and Secure</p>
        <a href="/signup" class="fs-1 btn btn-success">Create Account</a>
       @if(Session('activeId'))
       <div class="text-center m-3"><a class="text-decoration-none btn btn-primary text-light" href="profileActive">Go Profile</a></div>
    @endif
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>