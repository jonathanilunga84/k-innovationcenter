<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <!--h1 class="logo"><a href="index.html">Me &amp; Family</a></h1-->
      <h1 class="logo text-center"><a href="{{ route('Home')}} "><span>KINSHASA</span> <br /> <span>INNOVATION</span><br /><span>CENTER</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="{{ route('Home')}}">ACCUEIL</a></li>
          <li><a href="">Appel à projet 2021</a></li>
          <!--li><a href="quiSommesNous.php">QUI SOMME NOUS</a></li-->
          <!--li><a href="">EDITIONS</a></li-->
          <li class="dropdown"><a href="#"><span>EDITIONS</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="https://www.ccsc.ch/kinshasa-innovation-center">Edition 2020</a></li>
              <!--li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li-->
              <!--li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li-->
            </ul>
          </li>
          <li><a href="">REJOINDRE LE RESEAUX</a></li>
          <li><a href="https://www.ccsc.ch/blog">Blog</a></li>
          <!--li><a id="createCompte" data-bs-toggle="modal" data-bs-target="#exampleModal">CRÉER UN COMPTE</a></li-->
         
             @if (Route::has('login'))
                
                    @auth
                         <li> <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a></li>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline"></a>

                        @if (Route::has('register'))
                            <li><a id="createCompte" data-bs-toggle="modal" data-bs-target="#exampleModal">CRÉER UN COMPTE</a></li>
                        @endif
                    @endauth
               
            @endif
          
          <!--li><a href="contact.html">Contact</a></li-->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->