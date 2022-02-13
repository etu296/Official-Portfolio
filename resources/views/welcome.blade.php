
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Etu Mahmuda Era</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{url('assets/img/favicon.png')}}" rel="icon">
  <link href="{{url('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{url('assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal - v4.7.0
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1><a href="index.html">Etu Mahmuda Era</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2>I'm a passionate <span>Web Developer</span> from Bangladesh</h2>

    
     @include('Etu\fixed\navbar')
     <!-- .navbar -->

      <div class="social-links">
        <a href="https://twitter.com/EtuMahmuda" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/etu.mahmuda" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://github.com/etu296" class="instagram"><i class="bi bi-github"></i></a>
        <a href="https://www.linkedin.com/in/etu-mahmuda-era-3656761b6" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header>
  <!-- End Header -->

  <!-- ======= About Section ======= -->
  @include('Etu\pages\about')
  <!-- End About Me -->

    <!-- End About Section -->

  <!-- ======= Resume Section ======= -->
  @include('Etu\pages\resume')

  <!-- End Resume Section -->

  <!-- ======= Services Section ======= -->
  @include('Etu\pages\service')
  <!-- End Services Section -->

  <!-- ======= Portfolio Section ======= -->
  @include('Etu\pages\portfolio')
  <!-- End Portfolio Section -->

  <!-- ======= Contact Section ======= -->
  @include('Etu\pages\contact')
  <!-- End Contact Section -->

  

  <!-- Vendor JS Files -->
  <script src="{{url('assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{url('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{url('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{url('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{url('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{url('assets/js/main.js')}}"></script>

</body>

</html>