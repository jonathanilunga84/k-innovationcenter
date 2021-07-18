<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('css/style/vd/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style/vd/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style/vd/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style/vd/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style/vd/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style/vd/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style/vd/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style/style.css') }}" rel="stylesheet">

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
    <!-- Button trigger modal -->
<!--button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button-->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title text-center" id="exampleModalLabel">Create Compte KIC</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div class="container">
         <div class="row">
          <div class="col-lg-12 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
               <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Nom" data-rule="minlen:4" required>
                <div class="validate"></div>
              </div>
               <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Postnom" data-rule="minlen:4" required>
                <div class="validate"></div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Prenom" data-rule="minlen:4" required>
                <div class="validate"></div>
              </div>
               <div class="form-group mt-3">
                <input type="mail" class="form-control" name="subject" id="subject" placeholder="Adrese mail" data-rule="minlen:4" required>
                <div class="validate"></div>
              </div>
               <div class="form-group mt-3">
                <input type="password" class="form-control" name="subject" id="subject" placeholder="Mot de passe" data-rule="minlen:4" required>
                <div class="validate"></div>
              </div>
              <div class="form-group mt-3">
                <input type="password" class="form-control" name="subject" id="subject" placeholder="Confirme Mot de passe" data-rule="minlen:4" required>
                <div class="validate"></div>
              </div>
              
              <div class="my-3">
                <!--div class="loading">Loading</div-->
                <!--div class="error-message"></div-->
                <!--div class="sent-message">Your message has been sent. Thank you!</div-->
              </div>
              <!--div class="text-center"><button type="submit">Envoyer Message</button></div-->
            </form>

          </div>
         </div>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button id="btn_createCompte" type="button" class="btn btn-primary">Créer Compte KIC</button>
      </div>
    </div>
  </div>
</div>
  <!-- End Creat Compte -->

  <!-- ======= Footer ======= -->
    @include('page.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('css/style/') }}"></script>
  <script src="{{ asset('css/style/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('css/style/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('css/style/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('css/style/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('css/style/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('css/style/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/js/main.js') }}"></script>
</body>

</html>