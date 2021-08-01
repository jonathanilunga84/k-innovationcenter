@extends('page.base')

@section('title')
    Accueil
@endsection
<!--style>
  #more-{
    display: none;
  }

</style-->

@section('contenu')
	<!-- ======= Hero Section ======= -->
	<section id="hero">
		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">			  
			 
			    <div class="carousel-item active">
			      <img src="{{ asset('images/slide/laptop.jpg') }}" class="d-block w-100" alt="...">
			      <div class="carousel-caption d-none d-md-block">
			        <h5></h5>
			        <!--h3 class="fw-bold">Formation, Incubation et Maturation des projets des jeunes étudiants et chercheurs en millieu Universitaire.</h3-->
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
			        <!--h3 class="fw-bold">Formation, Incubation et Maturation des projets des jeunes étudiants et chercheurs en millieu Universitaire.</h3-->
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
  	<section id="welcome" class="welcome">
  		<div class="container">
  			<div class="row text-center">
  				<div class="col-sm-12">
  					<div class="section-title">
  						<h2>Bienvenue à Kinshasa Innovation Center</h2>
  						<p>Kinshasa Innovation Center (KIC) est une initiative de la Chambre de commerce Suisse- RD Congo (CCSC) en partenariat avec les universités de Genève et de Kinshasa. Il a pour but de promouvoir les jeunes entrepreneurs Congolais en les accompagnant avec des outils utiles et indispensables à la création d’entreprise. L’approche envisagée est l’apprentissage et la mise en situation de cas pratiques avec l’assistance des mentors et chefs d’entreprises expérimentés. <!--span id="" class="dots">...</span-->

              <span id="more" class="">
                Pour cette nouvelle édition, nous avons le plaisir de renouveler notre partenariat avec l'Organisation Mondiale de la Propriété Intellectuelle (OMPI) qui oeuvre pour l' investissement dans la recherche & développement, l'innovation, la création et la production culturelle. Nous sommes également heureux de compter l' Office de Promotion des Petites et Moyennes Entreprises Congolaises (OPEC) comme nouveau partenaire du KIC
              </span>
              <!--span id="mybtn" onclick="read_more_less();">Lire la suite</span-->
               
              </p>
              <p>
               . 
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
  					Nos activités
  					<p><br />
  						<a href="{{ asset('css/style/pdf/Activités KIC 2021.pdf') }}" id="btn-learn-more" class="btn-learn-more">Lire la suite...</a>
  					</p>
  				</div>
  			</div>
  			<div id="video_page" class="row justify-content-center">
  				<div class="col-sm-12 ratio ratio-21x9 col-lg-8 text-center">
  					<!--iframe src="https://www.youtube.com/embed/EK3doKUWuI0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
  						
  					</iframe-->
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
      <img src="{{ asset('images/Appel-a-projet-4.png') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/Appel-a-projets-3.jpg') }}" class="d-block w-100" alt="...">
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
           
            <h2 id="title_appel_projet">Appel à projet 2021</h2>
            <br />
            <!--p id="content">
              Vous êtes étudiant, finaliste du secondaire, entrepreneur, chercheurs voici l'occasion vous est donnée pour soumettre vos projets et bénéficier d'un accompagnement (acquisition des compétences nécessaires, accès aux incubateurs, accès au financement, espace de travail, participation au programme accelerate 2030 pour l'atteinte des objectifs de développement durable)
            </p-->
            <p id="content">
              Vous êtes étudiant(e), entrepreneur, chercheurs ou tout simplement passionné(e) par l'innovation et la création d'entreprise ?
              <br /> <br />
              Voici pour vous l'opportunité de nous soumettre votre projet et ainsi bénéficier d'un accompagnement aussi bien pratique que théorique, qui regroupera notamment les thématiques suivantes: création d'un business plan, propriété intellectuelle, sources de financement, éthique des affaires.
              <br /> <br />
              Vous bénéficierez d'un accès aux incubateurs, à un espace de travail, des échanges avec les anciens lauréat, participation au programme accelerate 2030  et bien plus encore! N'attendez plus et envoyez-nous votre dossier en cliquant ci-dessous.
            </p>
            <p>
              <a href="appel-a-projet" id="btn-learn-more" class="btn-learn-more" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Je postule</a>
            </p>
            </div>
          </div> 
         </div>
  	</section>

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
                  <div class="img-area"><img src="{{ asset('images/equipe/sacre.jpeg') }}" class="w-100"></div>
                  <div class="img-text">
                    <h5>Mr Sacré MBUMINA Benoît</h5>
                    <p>Responsable Mentorat</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-3 col-lg-2">
                <div class="single-box">
                    <div class="img-area"><img src="{{ asset('images/equipe/Mme-Giselle-Van-Muller.png') }}" class="w-100"></div>
                    <div class="img-text">
                      <h5>Mme Giselle Van Muller</h5>
                      <p>Responsable communication</p>
                    </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-3 col-lg-2">
                <div class="single-box">
                  <div class="img-area"><img src="{{ asset('images/equipe/Dr-Richard-MUKUNJI.png') }}" class="w-100"></div>
                    <div class="img-text">
                      <h5>Dr Richard MUKUNDJI</h5>
                      <p>Coordonnateur</p>
                    </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-3 col-lg-2">
                <div class="single-box">
                  <div class="img-area"><img src="{{ asset('images/equipe/Professeur-Crispin-MULAJI.png') }}" class="w-100"></div>
                    <div class="img-text">
                      <h5>Professeur Crispin MULAJI</h5>
                      <p>Point focal partenariat UNIGE - UNIKIN</p>
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
          <h2>Cliquez sur le logo et découvrez nos partenaires</h2>
          <!--p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p-->
        </div>

        <div class="recent-photos-slider swiper-container">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a href="https://www.ccsc.ch" class="glightbox Chambre de commerce"><img src="{{ asset('images/partainers/1-ccsc.webp') }}" class="img-fluid-" height="80" alt=""></a>
            </div>
            <div class="swiper-slide"><a href="https://www.unige.ch/" class="glightbox"><img src="{{ asset( 'images/partainers/1280px-Université_de_Genève_(logo).svg.png') }}" class="img-fluid-" height="50" alt="Université de Genève"></a>
            </div>
            <div class="swiper-slide"><a href="https://www.opec.cd" class="glightbox"><img src="{{ asset( 'images/partainers/3-opec.png') }}" class="img-fluid-" height="80"  alt="OPEC"></a>
            </div>
            <div class="swiper-slide"><a href="https://www.yeccolapp.education" class="glightbox"><img src="{{ asset('images/partainers/4-LOGO-YECOLAPP.jpg') }}" class="img-fluid" alt="yeccolapp education"></a>
            </div>
            <div class="swiper-slide"><a href="https://www.unikin.ac.cd/" class="glightbox"><img src="{{ asset('images/partainers/5-Univeristé_de_Kinshasa_Blason.svg.png') }}" class="img-fluid-" height="80" alt="Université de Kinshasa"></a>
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
        <!--div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
        </div-->

        <div class="row mt-5">

          <div class="col-lg-6">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <!--p>A108 Adam Street, New York, NY 535022</p-->
                <p>Université de Kinshasa</p>
                <p>Faculté des Sciences, Local A26</p>
                <p>B.P.190,Kinshasa XI</p>
                <p>RD Congo.</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <!--p>info@example.com</p-->
                <p>Pour les informations générales: info@ccsc.ch </p>
                <p>Concernant la technique : info@k-innovationcenter.com</p>
                <!--p>info@ccsc.ch / Richard.mukundji@ccsc.ch / crispin.mulaji@unikin.ac.cd</p-->
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <!--p>+1 5589 55488 55s</p-->
                <!--p>+243 820 656 983 / +41 778 150 566 / +243 973 562 348</p-->
                <p>+41 778 150 556 / +243 820 656 983</p>
              </div>

            </div>

          </div>

          <div class="col-lg-6 mt-5 mt-lg-0 text-center fw-bold">
              <!--h6>Joindre le reseaux</h6-->
            <form action="{{ route('contact.envoi') }}" method="POST" class="php-email-form">
              @csrf
              <div class="row">
                @if(session()->has('successSend'))
                    <div class="alert alert-success">
                        <h3>{{ session()->get('successSend') }}</h3>
                    </div>                    
                @endif 
                <div class="col-md-12 form-group">
                  <span>{{ $errors->has('name') }} {{ $errors->first('name') }}</span>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom" value="{{ old('name') }}" required>
                  @error('name')
                    <div class="validate text-danger">{{$message}}</div>
                  @enderror
                  <div class="validate"></div>
                </div>
                <div class="col-md-12 form-group mt-3 mt-md-0">
                  <span>{{ $errors->has('email') }} {{ $errors->first('email') }}</span>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" value="{{ old('email') }}" required>
                  @error('email')
                    <div class="validate text-danger">{{$message}}</div>
                  @enderror
                </div>
              </div>
              <div class="form-group mt-3">
                <span>{{ $errors->has('subject') }} {{ $errors->first('subject') }}</span>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" data-rule="minlen:4" value="{{ old('subject') }}" required>
                @error('subject')
                  <div class="validate text-danger">{{$message}}</div>
                @enderror
              </div>
              <div class="form-group mt-3">
                <span>{{ $errors->has('msg') }} {{ $errors->first('msg') }}</span>
                <textarea class="form-control" name="msg" rows="5" placeholder="Message" required>{{ old('msg') }}</textarea>
                @error('msg')
                  <div class="validate text-danger">{{$message}}</div>
                @enderror

              </div>
              <!--div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div-->
              <div class="text-center"><button type="submit">Envoyer Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->
  </main><!-- End #main -->

  <!-- section formulaire appel a projet  -->
    <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content bg-lightM">
      <form id="appel_a_projet" action="{{ route('store.Add') }}" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="modal-header">
        <h3 class="modal-title fw-bold title_appel_aprojet" id="staticBackdropLabel">FORMULAIRE DE SOUMISSION DE PROJET EDITION 2021</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row justify-content-center bg-danger-">
             <!-- form -->
      
              <!-- sectionOne -->
              <section id="sectionOne" class="row justify-content-center sectionOne">
                <h4 class=""><span class="numerotation_section">I. </span>RENSEIGNEMENTS GENERAUX SUR LE PROJET</h4>
                <div class="col-sm12 col-md-8 col-lg-8">
                  <div class="form-group">
                    <label for="intitule_projet" class="form-label"><span class="title_input">1.</span>Intitulé du Projet</label>
                    @error('intitule_projet1')
                      <div class="text-danger">{{$message}}ddd</div>
                    @enderror
                    <input type="text" class="form-control" id="intitule_projet1" name="intitule_projet1" minlength="2" required/>
                    <!--div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div-->
                  </div>
                  <div class="form-group">
                    <br/>
                    <label for="Resume_projet_fr2" class="form-label fw-bold"><span class="title_input">2.</span>Résumé du rojet <!--span>max caratere (0/1200)</span--></label> 
                    <p class=""><span class="float-left"><strong>-</strong> En français</span> <!--span class="float-end text-danger">(0/1600)*</span--></p>
                    <textarea class="form-control" name="Resume_projet_fr2" id="Resume_projet_fr2" placeholder="nombre de caractère max 1600" style="height: 100px" maxlength="1600"></textarea>
                    <span id="g" class="form-text"></span>
                  </div>
                  <div class="form-group">
                    <!--label for="Resume_projet_us" class="form-label"><span class="title_input">.</span>Résumé du rojet <span>max caratere (0/1200)</span><br/> <span>- </span> En Anglais</label--> 
                    <p class="bg-successM">
                      <span class="float-left"><strong>-</strong> En Anglais</span> <!--span class="float-end text-danger">(0/1600)*
                      </span-->
                    </p>
                    <textarea class="form-control" placeholder="nombre de caractère max 1600" name="Resume_projet_us2" id="Resume_projet_us2" style="height: 100px" maxlength="1600"></textarea>
                  </div>
                  <div class="form-group">
                    <br/>
                    <label for="secteur_projet3" class="form-label"><span class="title_input">3.</span> Domaine/ secteur du projet et Objectifs de Développement Durable (ODD) correspondants</label> 
                    <!--span class="text-danger float-end"> (0/1200)*</span-->
                    <textarea class="form-control" name="secteur_projet3" id="secteur_projet3" style="height: 100px" placeholder="nombre de caractère max 1200" maxlength="1200"></textarea>
                  </div>
                  <div class="form-group">
                    <br/>
                    <label for="Localisation_projet4" class="form-label"><span class="title_input">4.</span>Localisation du Projet (éventuellement)
                    </label> 
                    <!--span class="text-danger float-end"> (0/200)*</span-->
                    <textarea class="form-control" name="Localisation_projet4" id="Localisation_projet4" style="height: 100px" placeholder="nombre de caractère max 200*" maxlength="200"></textarea>
                  </div>
                  <div class="form-group">
                    <br/>
                    <label for="Duree_projet5" class="form-label"><span class="title_input">5.</span>Durée du Projet (éventuellement)</label> 
                    <!--span class="float-end text-danger">(0/200)*</span-->
                    <input type="text" class="form-control" id="Duree_projet5" name="Duree_projet5" placeholder="nombre de caractère max 200*" maxlength="200" />
                  </div>
                  <div class="form-group">
                    <br/>
                    <label for="Financement_projet6" class="form-label"><span class="title_input">6.
                    </span>Financement du Projet (éventuellement) 
                    </label> 
                    <!--span class="text-danger float-end">(0/600)*</span-->
                    <textarea class="form-control" placeholder="nombre de caractère max 600" id="Financement_projet6" name="Financement_projet6" style="height: 100px" maxlength="600"></textarea>
                  </div>
                  <div class="form-group">
                    <br/>
                    <label for="Description_projet7" class="form-label"><span class="title_input">7.</span>Description du Projet</label> 
                    <!--span class="text-danger float-end">(0/1600)*</span-->
                    <textarea class="form-control" name="Description_projet7" id="Description_projet7" style="height: 100px" placeholder="nombre de caractère max 1600" maxlength="1600"></textarea>
                  </div>
                  <div class="form-group">
                    <br/>
                    <label for="Objectifs_projet8" class="form-label"><span class="title_input">8.</span>Objectifs généraux du Projet</label> 
                    <!--span class="text-danger float-end">(0/800)*</span-->
                    <textarea class="form-control" name="Objectifs_projet8" id="Objectifs_projet8" cols="30" rows="10" placeholder="nombre de caractère max 800" style="height: 100px" maxlength="800" required></textarea>
                  </div>
                  <div class="form-group">
                    <br/>
                    <label for="Objectifs_spécifiques_projet9" class="form-label"><span class="title_input">9.</span>Objectifs spécifiques du Projet</label>
                    <!--span class="text-danger float-end">(0/600)*</span--> 
                    <textarea class="form-control" name="Objectifs_spécifiques_projet9" id="Objectifs_spécifiques_projet8" style="height: 100px" placeholder="nombre de caractère max 600" maxlength="600"></textarea>
                  </div>
                  <br/>
                  <div class="row">
                    <h6 class="font-size"><span class="title_input">10.</span> Responsable principal(e) du Projet</h6>
                    <div class="col-sm-4">  
                      <div class="form-group">
                        <label for="prenom_responsable_principal10">Prénom</label>
                        <input type="text" class="form-control" id="prenom_responsable_principal10" name="prenom_responsable_principal10" placeholder="Obligatoire" required/>
                      </div>                    
                    </div>
                    <div class="col-sm-4">                      
                      <label for="nom_responsable_principal10">Nom</label>
                        <input type="text" class="form-control" id="nom_responsable_principal10" name="nom_responsable_principal10" required />
                    </div>
                    <div class="col-sm-4">                      
                      <label for="postnom_responsable_principal10">Postnom</label>
                      <input type="text" class="form-control" id="postnom_responsable_principal10" name="postnom_responsable_principal10"required />
                    </div>
                    <div class="col-sm-4"> 
                      <div class="form-group">
                        <label for="phone_responsable_principal10">Téléphone</label>
                        <input type="text" class="form-control" id="intitule_projet10" name="phone_responsable_principal10" required />
                      </div>                      
                    </div>
                    <div class="col-sm-4">                      
                      <label for="">E-mail</label>
                        <input type="email" class="form-control" id="emil_responsable_principal10" name="email_responsable_principal10" required />
                    </div> 
                  </div>
                  <br/>
                  <div class="row bg-dangerM">
                    <h6 class="form-label"><span class="title_input">11.</span>Autres associé(s) au Projet (éventuellement)</h6>
                    <h6><span class="title_input">1)</span></h6>
                    <div class="col-sm-4">                      
                      <label for="prenom_associe1">Prénom</label>
                        <input type="text" class="form-control" id="prenom_associe1" name="prenom_associe1" />
                    </div>
                    <div class="col-sm-4">                      
                      <label for="nom_associe1">Nom</label>
                        <input type="text" class="form-control" id="nom_associe1" name="nom_associe1" />
                    </div>
                    <div class="col-sm-4">                      
                      <label for="postnom_associe1">Postnom</label>
                      <input type="text" class="form-control" id="postnom_associe1" name="postnom_associe1" />
                    </div>
                    <div class="col-sm-4">                      
                      <label for="phone_associe1">Téléphone</label>
                        <input type="text" class="form-control" id="phone_associe1" name="phone_associe1" />
                    </div>
                    <div class="col-sm-4">                      
                      <label for="email_associe1">E-mail</label>
                        <input type="text" class="form-control" id="email_associe1" name="email_associe1" />
                        <br/>
                    </div> 

                    <h6><span class="title_input">2)</span></h6>
                    <div class="col-sm-4">                      
                      <label for="prenom_associe2">Prénom</label>
                        <input type="text" class="form-control" id="prenom_associe2" name="intitule_projet" />
                    </div>
                    <div class="col-sm-4">                      
                      <label for="nom_associe2">Nom</label>
                        <input type="text" class="form-control" id="nom_associe2" name="nom_associe2" />
                    </div>
                    <div class="col-sm-4">                      
                      <label for="postnom_associe2">Postnom</label>
                      <input type="text" class="form-control" id="postnom_associe2" name="postnom_associe2" />
                    </div>
                    <div class="col-sm-4">                      
                      <label for="phone_associe2">Téléphone</label>
                        <input type="text" class="form-control" id="phone_associe2" name="phone_associe2" />
                    </div>
                    <div class="col-sm-4">  
                      <div class="form-group">
                        <label for="email_associe2">E-mail</label>
                        <input type="text" class="form-control" id="email_associe2" name="email_associe2" />
                      </div>                    
                    </div>                   
                  </div>
                </div><!-- end div sectionOne -->
              </section><!-- end sectionOne -->

              <!-- sectionTwee -->
              <section id="sectionTwee" class="row justify-content-center sectionOne bg-successM">
                <h4><span class="numerotation_section">II. </span>RENSEIGNEMENTS SPECIFIQUES (IDENTIFICATION DES BESOINS D’INCUBATION DU PROJET )</h4>
                <div class="col-sm12 col-md-8 col-lg-8 bg-lightM">
                  <div class="row">
                      <div class="col-sm-8 title-">
                        <p>Business plan</p>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="Business_plan" id="Business_plan1" value="oui">
                          <label class="form-check-label" for="Business_plan1">OUI</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="Business_plan" id="Business_plan2" value="non">
                          <label class="form-check-label" for="Business_plan2">NON</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8 title-">
                        <p>Leadership entrepreneurial</p>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="Leadership" id="Leadership1" value="oui">
                          <label class="form-check-label" for="Leadership1">OUI</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="Leadership" id="Leadership2" value="non">
                          <label class="form-check-label" for="Leadership2">NON</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8 title-">
                        <p>Processus d’élaboration d’un projet entrepreneurial</p>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="Processus" id="Processus1" value="oui">
                          <label class="form-check-label" for="Processus1">OUI</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="Processus" id="Processus2" value="non">
                          <label class="form-check-label" for="Processus2">NON</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8 title-">
                        <p>Création d’entreprise en RD Congo</p>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="Creation" id="Creation1" value="oui">
                          <label class="form-check-label" for="Creation1">OUI</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="Creation" id="Creation2" value="non">
                          <label class="form-check-label" for="Creation2">NON</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8 title-">
                        <p>Propriété intellectuelle, innovation et transfert de technologie</p>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="propriete" id="propriete1" value="oui">
                          <label class="form-check-label" for="propriete1">OUI</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="propriete" id="propriete2" value="propriete2">
                          <label class="form-check-label" for="propriete2">NON</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8 title-">
                        <p>Analyse de marché et proposition de valeur</p>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="analyse" id="analyse1" value="oui">
                          <label class="form-check-label" for="analyse1">OUI</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="analyse" id="analyse2" value="non">
                          <label class="form-check-label" for="analyse2">NON</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8 title-">
                        <p>Développement de la productivité et de la compétitivité</p>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="developpement" id="developpement1" value="oui">
                          <label class="form-check-label" for="developpement1">OUI</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="developpement" id="developpement2" value="non2">
                          <label class="form-check-label" for="developpement2">NON</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8 title-">
                        <p>Marketing digital et usage des réseaux sociaux</p>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="marketing" id="marketing1" value="oui">
                          <label class="form-check-label" for="marketing1">OUI</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="marketing" id="marketing2" value="non">
                          <label class="form-check-label" for="marketing2">NON</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8 title-">
                        <p>Responsabilité de l’entrepreneur face à la réussite et à l’échec</p>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="responsabilite" id="responsabilite1" value="oui">
                          <label class="form-check-label" for="responsabilite1">OUI</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="responsabilite" id="responsabilite2" value="option2">
                          <label class="form-check-label" for="responsabilite2">NON</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8 title-">
                        <p>Ethique des affaires</p>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="ethique" id="ethique1" value="oui">
                          <label class="form-check-label" for="ethique1">OUI</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="ethique" id="ethique2" value="non">
                          <label class="form-check-label" for="ethique2">NON</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8 title-">
                        <p>Sources de financement d’un projet/une entreprise</p>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="sources" id="sources1" value="oui">
                          <label class="form-check-label" for="sources1">OUI</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="sources" id="sources2" value="non">
                          <label class="form-check-label" for="sources2">NON</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8 title-">
                        <p>Comptabilité et planification financière</p>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="comptabilite" id="comptabilite1" value="oui">
                          <label class="form-check-label" for="comptabilite1">OUI</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="comptabilite" id="comptabilite2" value="non">
                          <label class="form-check-label" for="comptabilite2">NON</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8 title-">
                        <p>Elémentaires du droit des affaires (Ohada)</p>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="elementaires" id="elementaires1" value="oui">
                          <label class="form-check-label" for="elementaires1">OUI</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="elementaires" id="elementaires2" value="non">
                          <label class="form-check-label" for="elementaires2">NON</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8 title-">
                        <p>Pitch d’un projet entrepreneurial</p>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="pitch" id="pitch1" value="oui">
                          <label class="form-check-label" for="pitch1">OUI</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="pitch" id="pitch2" value="non" />
                          <label class="form-check-label" for="pitch2">NON</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8 title-">
                        <p>Anglais des affaires</p>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="anglais" id="anglais1" value="oui">
                          <label class="form-check-label" for="anglais1">OUI</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="anglais" id="anglais2" value="non">
                          <label class="form-check-label" for="anglais2">NON</label>
                        </div>
                      </div>
                    </div>
                </div><!-- end div sectionTwee -->
              </section><!-- end sectionTwee -->

              <!-- sectionTree -->
              <section id="sectionTree" class="row justify-content-center sectionOne bg-lightM">
                <h4><span class="numerotation_section">III. </span>MOTIVATION A LA SOUMISSION DU PROJET</h4>
                <div class="col-sm12 col-md-8 col-lg-8 bg-lightM">
                  <div class="form-group">
                    <label for="etat_actual_du_projet13" class="form-label"><span class="title_input">13.</span>Quel est l’état actuel de réalisation/mise en œuvre/implémentation de votre Projet ?
                    </label> <!--span class="text-danger float-end">(0/600)*</span-->
                    <textarea class="form-control" placeholder="nombre de catratre Max (0/600)*" id="etat_actual_du_projet" name="etat_actual_du_projet13" style="height: 100px" maxlength="600"></textarea>
                  </div>
                  <div class="form-group">
                    <br/>
                    <label for="interet_en_soumettant14" class="form-label"><span class="title_input">14.</span>Quel intérêt portez-vous en soumettant votre projet à Kinshasa Innovation Center (KIC) ?</label>
                    <!--span class="text-danger float-end">max caratere (0/400)</span--> 
                    <textarea class="form-control" placeholder="nombre de catratre Max (0/600)*" id="interet_en_soumettant14" name="interet_en_soumettant14" interet_en_soumettant14style="height: 100px" maxlength="400" required></textarea>
                  </div>
                  <div class="form-group">
                    <br/>
                    <label for="projet_beneficie_de_financement15" class="form-label"><span class="title_input">15.</span>Votre projet bénéficie-t-il déjà d’un autre soutien ou encadrement (coaching, financement,          etc.) ? Si oui, par quel organisme ?</label> 
                    <!--span class="text-danger float-end">max caratere (0/1200)</span-->
                    <textarea class="form-control" name="projet_beneficie_de_financement15" id="projet_beneficie_de_financement15" placeholder="nombre de catratre Max (0/400)*" style="height: 100px" maxlength="400" required></textarea>
                  </div>
                  <div class="form-group">
                    <br/>
                    <label for="projet_pourrait_contribuer16" class="form-label"><span class="title_input">16. </span>En quoi votre Projet pourrait-il contribuer à la création de valeurs et/ou d’emplois dans le milieu d’implémentation en particulier et dans la ville de Kinshasa en général ?
                    </label>
                    <!--span class="text-danger float-end">max caratere (0/1200)</span--> 
                    <textarea class="form-control" placeholder="nombre de catratre Max (0/1200)*" id="projet_pourrait_contribuer16" name="projet_pourrait_contribuer16" style="height: 100px" maxlength="1200" required=""></textarea>
                  </div>
                  <br/>
                  <div class="row">
                    <div id="title_radio" class="col-sm-8 title_radio">
                        <p><span class="title_input">17. </span> Etes-vous le(la) concepteur(trice) du Projet ci-haut présenté ?</p>
                    </div>
                    <div class="col-sm-4 buttom_radio">
                      <div class="form-check form-check-inline text_radio">
                          <input class="form-check-input" type="radio" name="concepteur_du_projet17" id="concepteur_du_projet1" value="oui">
                          <label class="form-check-label" for="concepteur_du_projet1">OUI</label>
                      </div>
                      <div class="form-check form-check-inline text_radio">
                          <input class="form-check-input" type="radio" name="concepteur_du_projet17" id="concepteur_du_projet2" value="non">
                          <label class="form-check-label" for="concepteur_du_projet2">NON</label>
                      </div>
                    </div>
                  </div>
                   
                  <div class="row">
                    <div id="title_radio" class="col-sm-8 title_radio">
                        <p><span class="title_input">18. </span> Détiendrez-vous TOUS les droits de propriété intellectuelle liés au Projet présenté ?</p>
                    </div>
                    <div class="col-sm-4 buttom_radio">
                      <div class="form-check form-check-inline text_radio">
                          <input class="form-check-input" type="radio" name="propriete_intellectuelle18" id="propriete_intellectuelle1_18" value="oui">
                          <label class="form-check-label" for="propriete_intellectuelle1_18">OUI</label>
                      </div>
                      <div class="form-check form-check-inline text_radio">
                          <input class="form-check-input" type="radio" name="propriete_intellectuelle18" id="propriete_intellectuelle2_18" value="option2">
                          <label class="form-check-label" for="propriete_intellectuelle2_18">NON</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div id="title_radio" class="col-sm-8 title_radio">
                        <p><span class="title_input">19. </span> Seriez-vous disposé(e) à vous investir en temps et financièrement pour la participation sans paiement à TOUTES les sessions d’incubation organisées par le KIC (4 heures par semaines
                        durant 5 mois) ?</p>
                    </div>
                    <div class="col-sm-4 buttom_radio">
                      <div class="form-check form-check-inline text_radio">
                          <input class="form-check-input" type="radio" name="investir_en_temps19" id="investir_en_temps1_19" value="oui">
                          <label class="form-check-label" for="investir_en_temps1_19">OUI</label>
                      </div>
                      <div class="form-check form-check-inline text_radio">
                          <input class="form-check-input" type="radio" name="investir_en_temps19" id="investir_en_temps2_19" value="non">
                          <label class="form-check-label" for="investir_en_temps2_19">NON</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div id="title_radio" class="col-sm-8 title_radio">
                        <p><span class="title_input">20. </span> Seriez-vous disposé(e) à suivre certains modules de formation à distance, en ligne avec votre propre équipement ?</p>
                    </div>
                    <div class="col-sm-4 buttom_radio">
                      <div class="form-check form-check-inline text_radio">
                          <input class="form-check-input" type="radio" name="formation_a_distance20" id="formation_a_distance1_20" value="oui">
                          <label class="form-check-label" for="formation_a_distance1_20">OUI</label>
                      </div>
                      <div class="form-check form-check-inline text_radio">
                          <input class="form-check-input" type="radio" name="formation_a_distance20" id="formation_a_distance2_20" value="option2">
                          <label class="form-check-label" for="formation_a_distance2_20">NON</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div id="title_radio" class="col-sm-8 title_radio">
                        <p><span class="title_input">21. </span> A l’issue de la période d’incubation, ACCEPTERIEZ-VOUS que votre Projet apparaisse dans les pages internet de KIC et éventuellement de ses partenaires ?</p>
                    </div>
                    <div class="col-sm-4 buttom_radio">
                      <div class="form-check form-check-inline text_radio">
                          <input class="form-check-input" type="radio" name="periode_incubation21" id="periode_incubation1_21" value="oui">
                          <label class="form-check-label" for="periode_incubation1_21">OUI</label>
                      </div>
                      <div class="form-check form-check-inline text_radio">
                          <input class="form-check-input" type="radio" name="periode_incubation21" id="periode_incubation2_21" value="option2">
                          <label class="form-check-label" for="periode_incubation2_21">NON</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div id="title_radio" class="col-sm-8 title_radio">
                        <p><span class="title_input">22. </span> Avez-vous lu et approuvez-vous le règlement du programme KIC ?</p>
                    </div>
                    <div class="col-sm-4 buttom_radio">
                      <div class="form-check form-check-inline text_radio">
                          <input class="form-check-input" type="radio" name="approuve_le_reglement22" id="approuve_le_reglement1_22" value="oui">
                          <label class="form-check-label" for="approuve_le_reglement1_22">OUI</label>
                      </div>
                      <div class="form-check form-check-inline text_radio">
                          <input class="form-check-input" type="radio" name="approuve_le_reglement22" id="approuve_le_reglement2_22" value="oui">
                          <label class="form-check-label" for="approuve_le_reglement2_22">NON</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <br/>
                    <label for="" class="form-label"><span class="title_input">23. </span>Avez-vous une information supplémentaire et particulière pouvant soutenir votre candidature ? (En rapport avec les conditions d’éligibilité, votre niveau d’étude...)</label> 
                    <!--span class="text-danger float-end">max caratere (0/600)*</span-->
                    <textarea class="form-control" name="information_supplementaire23" id="information_supplementaire23" style="height: 100px" placeholder="text-danger float-end">max caratere (0/600)*" maxlength="600" required ></textarea>
                  </div>
                  <div class="form-group">
                    <br/>
                    <input type="checkbox" class="form-check-input" name="confirm_info" id="confirm_info">
                    <label for="confirm_info" class="form-label text_confirm">Je confirme que toutes les informations fournies dans ce formulaire sont exactes et véridiques</label> 
                  </div>
                  <div class="form-group">
                    <br/>
                    <p id="text_nb">NB : Associez dans ce formulaire votre portrait photo (haute définition), la copie de votre carte d’identité et votre curriculum vitae (CV).</p>
                    <!--label for="formFileSm" class="form-label">Small file input example</label-->
                    <div class="">
                      <span>votre portrait photo</span>
                      <input class="form-control form-control-sm" name="avatar1" id="document_lie" type="file">
                    </div>
                    <br/>
                    <div class="">
                      <span> la copie de votre carte d’identité </span>
                      <input class="form-control form-control-sm" name="carteIdent" id="document_lie" type="file">
                    </div><br/>
                    <div class="">
                      <span>curriculum vitae (CV)</span>
                      <input class="form-control form-control-sm" name="cv1" id="document_lie" type="file">
                    </div>
                  </div>
                </div><!-- end div sectionTree -->
              </section><!-- end sectionTree -->
            <!-- end form -->
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div class="container bg-danger-">
          <div class="row justify-content-center">
            <div class="col-sm-2 bg-light-">
              <button type="button" class="btn btn-secondary fw-bold" data-bs-dismiss="modal">X</button>
            </div>
            <div class="col-sm-10 text-center">

              <button type="submit" class="btn btn-primary w-100 fw-bold">SOUMETTRE</button>
            </div>
          </div>        
        </div>
      </div>
      </form>
    </div><!-- end content form -->
  </div>
</div>
  <!-- End section formulaire appel a projet  -->

@endsection
