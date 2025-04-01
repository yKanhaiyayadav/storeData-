@extends('welcome')

@section('title')MY FIRST LARAVEL PROJECT @endsection

@section('content')

<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <!-- start image -->

      <!-- Make sure the image path is correct -->
<img src="asset/img/hero-bg.jpg" alt="Background image for hero section" data-aos="fade-in">

<!-- Include AOS CSS and JS if not already included -->

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

<!-- Initialize AOS -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    AOS.init();
  });
</script>


      <!-- end image -->

      <div class="container text-center" data-aos="zoom-out" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h2>Safe and Secure</h2>
            <p>I'm a professional illustrator from San Francisco</p>
            <a href="/register" class="btn-get-started">Create Account</a>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

  </main>

@endsection