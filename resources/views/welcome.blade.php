<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title', 'my laravel project')</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="asset/img/favicon.png" rel="icon">
  <link href="asset/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="asset/vendor/aos/aos.css" rel="stylesheet">
  <link href="asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="asset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="asset/css/main.css" rel="stylesheet">
</head>
<body>
    <!-- nav start -->

    <x-nav />

    <!-- nav end -->

    <!-- main start -->

    @yield('content')

    <!-- main end -->

    <!-- footer start -->

    <x-footer />

    <!-- footer end -->

    <div id="preloader"></div>
    
 <script src="asset/js/main.js"></script>
</body>
</html>