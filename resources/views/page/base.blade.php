<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!--meta name="csrf-token" content="{{ csrf_token() }}"-->

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('css/style/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style/vendor/slick-1.8.1/slick/slick.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style/vendor/slick-1.8.1/slick/slick-theme.css') }}" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
    <link href="{{ asset('css/style/') }}" rel="stylesheet">
  * Template Name: MeFamily - v4.2.0
  * Template URL: https://bootstrapmade.com/family-multipurpose-html-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
    @include('page.navigation')
  <!-- End Header -->

  <!-- ======= Content ======= -->
    <div class="container-fluid-">
       @yield('contenu')
      
    </div>
  <!-- End Content -->

  <!-- modal Creat Compte -->

  <!-- ======= Footer ======= -->
    @include('page.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  <script src="{{ asset('css/style/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('css/style/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('css/style/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('css/style/vendor/slick-1.8.1/slick/slick.min.js') }}"></script>
  
  <script src="{{ asset('css/style/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <!-- Template Main JS File -->

  <script src="{{ asset('js/js/main.js') }}"></script>
   <script>
       $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });

       $(".center").slick({
        dots: true,
        infinite: true,
        autoplay: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 3

      });
  </script>
  <script>
  </script>
</body>

</html>