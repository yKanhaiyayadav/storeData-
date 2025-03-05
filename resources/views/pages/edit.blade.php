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
    <button class="btn"><a class="btn btn-primary" href="/">Home</a></button>
    <div class="container">
        <div class="row justify-content-center m-3 p-3">
            <div class="col col-8">
               <div class="card m-3 p-3">
                <h1 class="row justify-content-center">Update Here</h1>
                @if(!$data)
                <h1>Data not Found !</h1>
                @else
                <form action="{{route('updateData', $data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">Name : </label>
                           <input type="text" class="form-control" value="{{$data->name}}" name="name" id="fieldName">
                        </div>
                        <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">Contact No. : </label>
                           <input type="text" max-length="10" pattern="^\d{10}$" value="{{$data->mobile}}" class="form-control" name="mobile">
                        </div>
                        <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">Age : </label>
                           <input type="date" class="form-control" value="{{$data->age}}" name="age">
                        </div>
                        <div class="mb-3">
                           <label for="gender" class="form-label">Gender : </label>
                           @if($data->gender == "male")
                           <input type="radio" value="male" checked="true" name="gender">Male
                           <input type="radio" value="female" name="gender">Female  
                           @else
                           <input type="radio" value="male" name="gender">Male
                           <input type="radio" value="female" checked="true" name="gender">Female
                        @endif
                        </div>
                        <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">email : </label>
                           <input type="email" class="form-control" value="{{$data->email}}" name="email" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">Choose Picture : </label>
                           <input type="file" class="form-control" name="image">
                        </div>
                        @endif
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <input type="submit" class="form-control" value="update">   
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>