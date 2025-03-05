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
    <button class="btn"><a class="btn btn-primary text-light" href="/">Home</a></button>
    <div class="container">
        <div class="row justify-content-center m-3 p-3">
            <div class="col col-8">
               <div class="card m-3 p-3">
                <h1 class="row justify-content-center p-3">Uploads Your Images</h1>
                    <form action="{{route('uploadData')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">Choose Images : </label>
                           <input type="file" class="form-control" name="files[]" multiple>
                           <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">Descriptions : </label>
                           <input type="text" class="form-control" name="description" placeholder="Example as This is my best picture to Delhi" aria-describedby="emailHelp">
                           <div id="emailHelp" class="form-text"></div>
                        </div>
                        <input type="submit" class="form-control" value="upload">   
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>