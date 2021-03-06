@extends('page.base')

@section('title')
    Accueil 
@endsection

@section('contenu')
	<!-- ======= Hero Section ======= -->
	<section id="hero">
		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">			  
			 
			    <div class="carousel-item active">
			      <img src="{{ asset('images/slide/laptop.jpg') }}" class="d-block w-100" alt="...">
			      <div class="carousel-caption d-none d-md-block">
			        <h5></h5>
			        <p></p>
			      </div>
			    </div>
          <div class="carousel-item">
            <img src="{{ asset('images/slide/light-bulb-3104355.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>              
              <p></p>
            </div>
          </div>
			    <div class="carousel-item">
			      <img src="{{ asset('images/slide/KIC IMAGEA-min.png') }}" class="d-block w-100" alt="...">
			      <div class="carousel-caption d-none d-md-block">
			      </div>
			    </div>
          <div class="carousel-item">
            <img src="{{ asset('images/slide/APPEL A PROJET 2021 2-min.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/slide/Slide-5.png') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
			   
			  </div>
			  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Previous</span>
			  </button>
			  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Next</span>
			  </button>
		</div>    
  </section><!-- End Hero -->

  <main id="main">
  	<section id="welcome" class="welcome bienvenue_kic">
  		<div class="container">
  			<div class="row text-center">
  				<div class="col-sm-12">
  					<div class="section-title">
  						<h2 id="section-title1">Bienvenue ?? Kinshasa Innovation Center</h2>
  						<p>Kinshasa Innovation Center (KIC) est une initiative de la Chambre de commerce Suisse- RD Congo (CCSC) en partenariat avec les universit??s de Gen??ve et de Kinshasa. Il a pour but de promouvoir les jeunes entrepreneurs Congolais en les accompagnant avec des outils utiles et indispensables ?? la cr??ation d???entreprise. L???approche envisag??e est l???apprentissage et la mise en situation de cas pratiques avec l???assistance des mentors et chefs d???entreprises exp??riment??s. <!--span id="" class="dots">...</span-->

              <span id="more" class="">
                Pour cette nouvelle ??dition, nous avons le plaisir de renouveler notre partenariat avec l'Organisation Mondiale de la Propri??t?? Intellectuelle (OMPI) qui oeuvre pour l' investissement dans la recherche & d??veloppement, l'innovation, la cr??ation et la production culturelle. Nous sommes ??galement heureux de compter l' Office de Promotion des Petites et Moyennes Entreprises Congolaises (OPEC) comme nouveau partenaire du KIC
              </span>
              <!--span id="mybtn" onclick="read_more_less();">Lire la suite</span-->
               
              </p>
  					</div>  					
  				</div>
  			</div>
  			<div class="row justify-content-center bg-danger- text-center">
  				<div class="col-sm-3 fw-bold">
            <span>
              <img src="{{ asset('images/objectif.png')}}" width="100" alt=""><br/>
            </span> <br />
  					Nos objectifs
  					<p><br />
              <a href="{{ asset('css/style/pdf/Objectifs KIC 2021.pdf') }}" id="btn-learn-more" class="btn-learn-more">Lire la suite...</a></p>
  					
  				</div>
  				<div class="col-sm-3 fw-bold">
            <span>
              <img src="{{ asset('images/approche.png')}}" width="100" alt=""><br/>
            </span><br />
  					Notre approche
  					<p><br />
              <a href="{{ asset('css/style/pdf/Notre approche KIC 2021.pdf') }}" id="btn-learn-more" class="btn-learn-more">Lire la suite...</a></p>
  				</div>
  				<div class="col-sm-3 fw-bold">
            <span>
              <img src="{{ asset('images/activite.png')}}" width="100" alt=""><br/>
            </span><br />
  					Nos activit??s
  					<p><br />
  						<a href="{{ asset('css/style/pdf/Activite??s KIC 2021.pdf') }}" id="btn-learn-more" class="btn-learn-more">Lire la suite...</a>
  					</p>
  				</div>
  			</div>
  			<div id="video_page" class="row justify-content-center">
  				<div class="col-sm-12 ratio ratio-21x9 col-lg-8 text-center">
            <iframe src="https://www.youtube-nocookie.com/embed/EK3doKUWuI0?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; encrypted-media; picture-in-picture" allowfullscreen></iframe>
  				</div>
  			</div>
  		</div>
  	</section>        
   
  	<section id="story-intro" class="story-intro">
  		<div id="Appel-aprojet" class="container-fluid">
  	     <div class="row story-intro-ligne">
            <div id="Coluumn_carousel" class="col-sm-6 col-lg-6 Oorder-1 order-lg-22">
               <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('images/Appel-a-projets-1.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('images/Appel-a-projet-7.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('images/Appel-a-projets-3.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('images/Appel-a-projets5-.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('images/Appel-a-projets-6.jpg.png') }}" class="d-block w-100" alt="...">
            </div>
          </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
          </div>
          <div id="Appel-aprojetM" class="col-sm-6 text-light text-center">
            <div id="content_text">   
           
            <!--h2 id="title_appel_projet">Appel ?? projet (10 ao??t au 10 septembre 2021)</h2-->
            <h2 id="title_appel_projet">Appel ?? projet (Fin soumission 30 septembre 2021)</h2>
            <br />
            <p id="content">
              Vous ??tes ??tudiant(e), entrepreneur, chercheurs ou tout simplement passionn??(e) par l'innovation et la cr??ation d'entreprise ?
              <br /> 
              Voici pour vous l'opportunit?? de nous soumettre votre projet et ainsi b??n??ficier d'un accompagnement aussi bien pratique que th??orique, qui regroupera notamment les th??matiques suivantes: cr??ation d'un business plan, propri??t?? intellectuelle, sources de financement, ??thique des affaires.
              <br />
              Vous b??n??ficierez d'un acc??s aux incubateurs, ?? un espace de travail, des ??changes avec les anciens laur??at, participation au programme accelerate 2030  et bien plus encore! N'attendez plus et envoyez-nous votre dossier en cliquant ci-dessous.
            </p>
            <p>
              <p class="appel-a-projet"><a href="{{ asset('css/style/pdf/Eligibilit?? et charte des participants-1.pdf') }}">
                Lire la charte des participants et les conditions d'??ligibilit??</a>
              </p>
              <!-- a href="{{ route('formAppelaprojet') }}" id="btn-learn-more" class="btn-learn-more" data-bs-toggle="modalM" data-bs-target="#staticBackdropM">Je postule</a-->
              <p>
                <a href="#" id="btn-learn-more" class="btn-learn-more" data-bs-toggle="modalM" data-bs-target="#staticBackdropM">D??p??t des candidatures cl??tur?? </a>
              </p>
            </p>
            </div>
          </div> 
         </div>
  	</section>
    <section id="Ishango" class="Ishango bg-dangerM">
      <div class="container">
        <div class="row text-center h-100 align-items-center">
          <div class="col-sm-6 col-md-6 col-lg-6">
            <p class="fw-bold">
              Soumettez aussi ?? ISHANGO STARTUPS CENTER
            </p>
            <p>
              <a href="https://ishangostartupscenter.com/concours.php" class="btn-learn-more">Soumettre</a>
            </p>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-6">
            <img src="{{ asset('images/ISHANGO2021-09-22-520.png') }}" class="img-fluid" alt="Image Startups ISHANGO" />
          </div>
        </div>
      </div>
    </section>


    <!-- Section Equipe de Gestion -->
    <section id="equipe-de-gestion" class="equipe-de-gestion bg-danger-">
      <div class="container">
        <div class="section-title">
          <h2>Equipe de coordination</h2>
        </div>
          <div class="row">
            <div class="center slider">
              <div class="col-sm-12 col-md-3 col-lg-2 bg-danger-">
                <div class="single-box">
                  <div class="img-area"><img src="{{ asset('images/equipe/Dr-Gauthier-KALONJI.jpg') }}" class="w-100"></div>
                  <div class="img-text">
                    <h5>Dr Gauthier KALONJI</h5>
                    <p>Responsable formation</p>
                </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-3 col-lg-2">
                <div class="single-box">
                  <div class="img-area">
                    <img src="{{ asset('images/equipe/sacre.jpeg') }}" class="w-100"></div>
                  <div class="img-text">
                    <h5>Mr Sacr?? MBUMINA Beno??t</h5>
                    <p>Responsable Mentorat</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-3 col-lg-2">
                <div class="single-box">
                    <div class="img-area">
                      <img src="{{ asset('images/equipe/Mme-Giselle-Van-Muller.png') }}" class="w-100">
                    </div>
                    <div class="img-text">
                      <h5>Mme Giselle Van Muller</h5>
                      <p>Responsable communication</p>
                    </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-3 col-lg-2">
                <div class="single-box">
                  <div class="img-area">
                    <img src="{{ asset('images/equipe/Dr-Richard-MUKUNJI.png') }}" class="w-100">
                  </div>
                    <div class="img-text">
                      <h5>Dr Richard MUKUNDJI</h5>
                      <p>Coordonnateur</p>
                    </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-3 col-lg-2">
                <div class="single-box">
                  <div class="img-area">
                    <img src="{{ asset('images/equipe/Professeur-Crispin-MULAJI.png') }}" class="w-100">
                  </div>
                    <div class="img-text">
                      <h5>Professeur Crispin MULAJI</h5>
                      <p>Point focal partenariat UNIGE - UNIKIN</p>
                    </div>
                </div>              
              </div>
              <div class="col-sm-12 col-md-3 col-lg-2">
                <div class="single-box">
                  <div class="img-area">
                    <img src="{{ asset('images/equipe/Felly_Lukunga_Ngomba.png') }}" class="w-100">
                  </div>
                    <div class="img-text">
                      <h5>Mr Felly Lukunga Ngomba</h5>
                      <p>Relations universit??s et institutions acad??miques</p>
                    </div>
                </div>              
              </div>
              <div class="col-sm-12 col-md-3 col-lg-2">
                <div class="single-box">
                  <div class="img-area">
                    <img src="{{ asset('images/equipe/Mikobi_Cleophas.png') }}" class="w-100">
                  </div>
                    <div class="img-text">
                      <h5>Mr CLEOPHAS MIKOBI MALESHELA</h5>
                      <p>Responsable incubation</p>
                    </div>
                </div>              
              </div>
              
            </div>
          </div>
      </div>
    </section>

    <!-- ======= Nos partainer Section ======= -->
    <section id="recent-photos" class="recent-photos">
      <div class="container">

        <div class="section-title">
          <h2>Cliquez sur le logo et d??couvrez nos partenaires</h2>
        </div>
        <div class="recent-photos-slider swiper-container">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a href="https://www.ccsc.ch" class="glightbox Chambre de commerce"><img src="{{ asset('images/partainers/1-ccsc.webp') }}" class="img-fluid-" height="80" alt=""></a>
            </div>
            <div class="swiper-slide"><a href="https://www.unige.ch/" class="glightbox"><img src="{{ asset( 'images/partainers/1280px-Universit??_de_Gen??ve_(logo).svg.png') }}" class="img-fluid-" height="50" alt="Universit?? de Gen??ve"></a>
            </div>
            <div class="swiper-slide"><a href="https://www.opec.cd" class="glightbox"><img src="{{ asset( 'images/partainers/3-opec.png') }}" class="img-fluid-" height="80"  alt="OPEC"></a>
            </div>
            <div class="swiper-slide"><a href="https://www.yeccolapp.education" class="glightbox"><img src="{{ asset('images/partainers/4-LOGO-YECOLAPP.jpg') }}" class="img-fluid" alt="yeccolapp education"></a>
            </div>
            <div class="swiper-slide"><a href="https://www.unikin.ac.cd/" class="glightbox"><img src="{{ asset('images/partainers/5-Univerist??_de_Kinshasa_Blason.svg.png') }}" class="img-fluid-" height="80" alt="Universit?? de Kinshasa"></a>
            </div>
            <div class="swiper-slide"><a href="https://www.4ipgroup.org/" class="glightbox"><img src="{{ asset('images/partainers/6-group.png') }}" class="img-fluid-" height="80" alt="4ipGroup"></a>
            </div>
            <div class="swiper-slide"><a href="https://www.eda.admin.ch/countries/democratic-republic-congo/fr/home/actualite/nouveautes.html/content/countries/democratic-republic-congo/fr/meta/news/2020/11/novembre/Communique-de-presse-de-l%27ambassade-de-Suisse-en-RDC" target="_blank" class="glightboxM"><img src="{{ asset('images/partainers/7-logo7AMBASSADESUISSE.png') }}" class="img-fluid" title="AMbassade Suisse" alt="AMBASSADE SUISSE"></a>
            </div>
            <div class="swiper-slide"><a href="https://www.wipo.in/portal/fr/index.html" class="glightbox"><img src="{{ asset('images/partainers/8-logoWIPO.png') }}" class="img-fluid" alt="WIPO"></a>
            </div>
            <div class="swiper-slide"><a href="https://lusaka.impacthub.net/" class="glightbox"><img src="{{ asset('images/partainers/9-WhatsApp.jpeg') }}" class="img-fluid" alt="WIPO"></a>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section><!-- End Nos partainer Section -->

    <section id="contact-us" class="contact-us">
      <div class="container">
        <div class="section-title">
          <h2 id="rejoindreReseaux">CONTACT</h2>
        </div>
        <div class="row mt-5">

          <div class="col-lg-6">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Universit?? de Kinshasa</p>
                <p>Facult?? des Sciences, Local A26</p>
                <p>B.P.190,Kinshasa XI</p>
                <p>RD Congo.</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>Pour les informations g??n??rales: info@ccsc.ch </p>
                <p>Concernant la technique : info@k-innovationcenter.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+41 778 150 556 / +243 820 656 983</p>
              </div>

            </div>

          </div>

          <div class="col-lg-6 mt-5 mt-lg-0 text-center fw-bold">
            <form id="formSendContact" action="{{ route('contact.envoi') }}" method="POST" class="btM php-email-form">
              @csrf
              <div class="row">
                <div>
                  <h3 id="errorMessage" class="alert alert-success"></h3>
                </div>
                @if(session()->has('successSend'))
                    <div class="alert alert-success">
                        <h3>{{ session()->get('successSend') }}</h3>
                    </div>                    
                @endif 
                <div class="col-md-12 form-group">
                  <span>{{ $errors->has('name') }} {{ $errors->first('name') }}</span>
                  <span class="text-danger error-text name_error"></span>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom" value="{{ old('name') }}" />
                  @error('name')
                    <div class="validate text-danger">{{$message}}</div>
                  @enderror
                </div>
                <div class="col-md-12 form-group mt-3 mt-md-0">
                  <span>{{ $errors->has('email') }} {{ $errors->first('email') }}</span>
                  <span class="text-danger error-text email_error"></span>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" value="{{ old('email') }}"/>
                  @error('email')
                    <div class="validate text-danger">{{$message}}</div>
                  @enderror
                </div>
              </div>
              <div class="form-group mt-3">
                <span>{{ $errors->has('subject') }} {{ $errors->first('subject') }}</span>
                <span class="text-danger error-text subject_error"></span>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" data-rule="minlen:4" value="{{ old('subject') }}" />
                @error('subject')
                  <div class="validate text-danger">{{$message}}</div>
                @enderror
              </div>
              <div class="form-group mt-3">
                <span>{{ $errors->has('msg') }} {{ $errors->first('msg') }}</span>
                <span class="text-danger error-text msg_error"></span>
                <textarea class="form-control" name="msg" id="msg" rows="5" placeholder="Message">{{ old('msg') }}</textarea>
                @error('msg')
                  <div class="validate text-danger">{{$message}}</div>
                @enderror

              </div>
             
              <div class="text-center"><button id="btnContactSend" type="submit">Envoyer Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->
  </main><!-- End #main -->
@endsection