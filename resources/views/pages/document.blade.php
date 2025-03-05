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
    <h1>Documents</h1>
    <div class="col-12 d-flex gap-2 m-3 justify-content-center justify-evenly flex-wrap shrink-0">
    @foreach($user as $img)
    <div class="card" style="width: 18rem;">
        <a href="{{'picture/'.$img->document}}">{{$img->document}} View</a>
            <div class="card-body">
              <p class="card-text">{{$img->description}}</p>
            </div>
    </div>
    @endforeach
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>