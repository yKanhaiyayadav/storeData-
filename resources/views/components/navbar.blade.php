<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="/profileActive">Your Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="/upload">Upload</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="{{route('getImage')}}">Gallary/Images</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="{{route('getDocument')}}">Documents</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="{{route('getVideo')}}">Videos</a>
        </li>
      </ul>
      <div class="d-flex gap-3 align-items-center">
        @if(session('userName'))
        <h4 class="text-light">Welcome : {{session('userName')}}</h4>
        <img class="rounded-circle" src="{{'background-img/'.session('userimg')}}" alt="view img" width="50" height="50">
        @else
        <i class="bi bi-person-circle text-light fs-3"></i>
        @endif
        @if(session('activeId'))
        <a class="text-light text-decoration-none fs-bold" href="{{route('logout')}}"><button class="btn btn-primary" type="button">Logout</button></a>
        @else
        <a class="text-light text-decoration-none fs-bold" href="{{route('login')}}"><button class="btn btn-primary" type="button">Login</button></a>
       @endif
    </div>
    </div>
  </div>
</nav>