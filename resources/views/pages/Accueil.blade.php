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

    <!-- ======= NOS OBJECTIFS  Section ======= -->
    <!--section id="story-intro" class="story-intro">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="assets/img/bg-objectif.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>NOS OBJECTIFS.</h3>
            <div>
              <h6 class="title-sous"><span>1</span> INNOVATION</h6>
              <p class="fst-italic">
              Stimuler et promouvoir l'innovation ainsi que la créativité en Republique Démocratique du Congo(RDC) et favoriser la culture entrepreneuriale en place des modules de formation.
              </p>
            </div>            
            <div>
              <h6 class="title-sous"><span>2</span>INCUBATION</h6>
              <p class="fst-italic">
              Permettre l'identification, l'incubation et la maturation des idées innovantes.
              </p>
            </div>
            <div>
              <h6 class="title-sous"><span>3</span>EXPERTISE</h6>
              <p>
              Favoriser le tranfert de technologie et expertise entre l'Univerité de Géneve et les institutions académiques congolaises
              </p>
            </div>
             <a href="assets/pdf/Objectifs KIC.pdf" id="btn-learn-more" class="btn-learn-more">Lire la suite...</a>
          </div>
        </div>

      </div>
    </section--><!-- End Story Intro Section -->

    <!-- ======= Featured Members Section ======= -->
    <!--section id="featured-members" class="featured-members">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <img src="assets/img/bg-approche.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-3 pt-lg-0">
            <h3>APPROCHE.</h3>
            <p class="fst-italic">
              
            </p>
            <ul>
              <li><i class="bi bi-check-circle-fill"></i> <span>Identifier les besoins de la region </span> pour circoncire les sujets d'innovation et restreindre les besoins et compétences nécessaires pour atteindre l'objectif poursuivi.</li>
              <li><i class="bi bi-check-circle-fill"></i> <span>Recruter les participants à l'incubateur </span> ésidant dans la région:</li>
              <li><i class="bi bi-check-circle-fill"></i> Diplômés universitaires: les penseurs.</li>
               <li><i class="bi bi-check-circle-fill"></i> Diplômés technique: les développeurs.</li>
                <li><i class="bi bi-dash-circle-fill"></i> Diplômés secondaires: les pratiques.</li>
            </ul>
            <a href="assets/pdf/Approche KIC.pdf " id="btn-learn-more" class="btn-learn-more">Lire la suite...</a>
          </div>
        </div>

        <div class="row content">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="assets/img/bg-activite.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 order-2 order-lg-1 pt-3 pt-lg-0">
            <h3>ACTIVITE.</h3>
            <h6>ACQUÉRIR LES COMPÉTENCES ENTREPRENEURIALES.</h6>
            <ul>
              <li class="fst-italic"><i class="bi bi-dash-circle-fill"></i>Business plan</li>
              <li class="fst-italic"><i class="bi bi-dash-circle-fill"></i>Notion de comptabilité</li>
              <li class="fst-italic"><i class="bi bi-dash-circle-fill"></i>Création d'entreprise en RDC</li>
              <li class="fst-italic"><i class="bi bi-dash-circle-fill"></i>Propriété intellectuelle et innovation: mécanismes de protection nationale et internationale</li>
            </ul>
            <a href="assets/pdf/Activités KIC.pdf" id="btn-learn-more" class="btn-learn-more">Lire la suite...</a>
          </div>
        </div>
      </div>
    </section--><!-- End Featured Members Section -->

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
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom" required>
                  <div class="validate"></div>
                </div>
                <div class="col-md-12 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" required>
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" data-rule="minlen:4" required>
                <div class="validate"></div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                <div class="validate"></div>
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
      <form action="">
      <div class="modal-header">
        <h3 class="modal-title fw-bold" id="staticBackdropLabel">FORMULAIRE DE SOUMISSION DE PROJET EDITION 2021</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row justify-content-center bg-danger-">
             <!-- form -->
              <div class="col-sm12 col-md-12 col-lg-10 bg-successM">
                
              </div>
              <!-- sectionOne -->
              <section id="sectionOne" class="row justify-content-center sectionOne bg-dangerM">
                <h4 class=""><span class="numerotation_section">I. </span>RENSEIGNEMENTS GENERAUX SUR LE PROJET</h4>
                <div class="col-sm12 col-md-8 col-lg-8">
                  <div class="form-group">
                    <label for="intitule_projet" class="form-label"><span class="title_input">1.</span>Intitulé du Projet</label>
                    <input type="text" class="form-control" id="intitule_projet" name="intitule_projet" required/>
                    <!--div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div-->
                  </div>
                  <div class="form-group">
                    <br/>
                    <label for="Resume_projet_fr" class="form-label fw-bold"><span class="title_input">2.</span>Résumé du rojet <!--span>max caratere (0/1200)</span--></label> 
                    <p class=""><span class="float-left"><strong>-</strong> En français</span> <span class="float-end text-danger">(0/1600)*</span></p>
                    <textarea class="form-control" placeholder="" id="Resume_projet_fr" aria-describedby="g" style="height: 100px"></textarea>
                    <span id="g" class="form-text">
    </span>
                  </div>
                  <div class="form-group">
                    <label for="Resume_projet_us" class="form-label"><span class="title_input">.</span>Résumé du rojet <span>max caratere (0/1200)</span><br/> <span>- </span> En Anglais</label> 
                    <textarea class="form-control" placeholder="" id="Resume_projet_us" style="height: 100px"></textarea>
                  </div>
                  <div class="form-group">
                    <br/>
                    <label for="secteur_projet" class="form-label"><span class="title_input">3.</span> Domaine/ secteur du projet et Objectifs du Développement Durable (ODD) correspondant<span> (0/1200)</span></label> 
                    <textarea class="form-control" placeholder="" id="secteur_projet" style="height: 100px"></textarea>
                  </div>
                  <div class="form-group">
                    <br/>
                    <label for="Localisation_projet" class="form-label"><span class="title_input">4.</span>Localisation du Projet (éventuellement)<span> (0/200)</span></label> 
                    <textarea class="form-control" placeholder="" id="Localisation_projet" style="height: 100px"></textarea>
                  </div>
                  <div class="form-group">
                    <br/>
                    <label for="Duree_projet" class="form-label"><span class="title_input">5.</span>Durée du Projet (éventuellement) <span>(0/200)</span></label> 
                    <input type="text" class="form-control" id="Duree_projet" name="Duree_projet" />
                  </div>
                  <div class="form-group">
                    <br/>
                    <label for="Financement_projet" class="form-label"><span class="title_input">6.</span>Financement du Projet (éventuellement) <span>(0/600)</span></label> 
                    <textarea class="form-control" placeholder="" id="Financement_projet" style="height: 100px"></textarea>
                  </div>
                  <div class="form-group">
                    <br/>
                    <label for="Description_projet" class="form-label"><span class="title_input">7.</span>Description du Projet<span>(0/1600)</span></label> 
                    <textarea class="form-control" placeholder="" id="Description_projet" style="height: 100px"></textarea>
                  </div>
                  <div class="form-group">
                    <br/>
                    <label for="Objectifs_projet" class="form-label"><span class="title_input">8.</span>Objectifs généraux du Projet<span>(0/800)</span></label> 
                    <textarea class="form-control" placeholder="" id="Objectifs_projet" style="height: 100px"></textarea>
                  </div>
                  <div class="form-group">
                    <br/>
                    <label for="Objectifs_spécifiques_projet" class="form-label"><span class="title_input">9.</span>Objectifs spécifiques du Projet<span>(0/600)</span></label> 
                    <textarea class="form-control" placeholder="" id="Objectifs_spécifiques_projet" style="height: 100px"></textarea>
                  </div>
                  <br/>
                  <div class="row">
                    <h6 class=""><span class="title_input">10.</span> Responsable principal(e) du Projet</h6>
                    <div class="col-sm-4">  
                      <div class="form-group">
                        <label for="">Prénom</label>
                        <input type="text" class="form-control" id="intitule_projet" name="intitule_projet" />
                      </div>                    
                    </div>
                    <div class="col-sm-4">                      
                      <label for="">Nom</label>
                        <input type="text" class="form-control" id="intitule_projet" name="intitule_projet" />
                    </div>
                    <div class="col-sm-4">                      
                      <label for="">Postnom</label>
                      <input type="text" class="form-control" id="intitule_projet" name="intitule_projet" />
                    </div>
                    <div class="col-sm-4"> 
                      <div class="form-group">
                        <label for="">Téléphone</label>
                        <input type="text" class="form-control" id="intitule_projet" name="intitule_projet" />
                      </div>                      
                    </div>
                    <div class="col-sm-4">                      
                      <label for="">E-mail</label>
                        <input type="email" class="form-control" id="intitule_projet" name="intitule_projet" />
                    </div> 
                  </div>

                  <div class="row bg-dangerM">
                    <h6 for="exampleInputEmail1" class="form-label"><span class="title_input">11.</span>Autre associé(s) au Projet (éventuellement)</h6>
                    <h6><span class="title_input">1)</span></h6>
                    <div class="col-sm-4">                      
                      <label for="">Prénom</label>
                        <input type="text" class="form-control" id="intitule_projet" name="intitule_projet" />
                    </div>
                    <div class="col-sm-4">                      
                      <label for="">Nom</label>
                        <input type="text" class="form-control" id="intitule_projet" name="intitule_projet" />
                    </div>
                    <div class="col-sm-4">                      
                      <label for="">Postnom</label>
                      <input type="text" class="form-control" id="intitule_projet" name="intitule_projet" />
                    </div>
                    <div class="col-sm-4">                      
                      <label for="">Téléphone</label>
                        <input type="text" class="form-control" id="intitule_projet" name="intitule_projet" />
                    </div>

                    <div class="col-sm-4">                      
                      <label for="">E-mail</label>
                        <input type="email" class="form-control" id="intitule_projet" name="intitule_projet" />
                        <br/>
                    </div> 

                    <h6><span class="title_input">2)</span></h6>
                    <div class="col-sm-4">                      
                      <label for="">Prénom</label>
                        <input type="text" class="form-control" id="intitule_projet" name="intitule_projet" />
                    </div>
                    <div class="col-sm-4">                      
                      <label for="">Nom</label>
                        <input type="text" class="form-control" id="intitule_projet" name="intitule_projet" />
                    </div>
                    <div class="col-sm-4">                      
                      <label for="">Postnom</label>
                      <input type="text" class="form-control" id="intitule_projet" name="intitule_projet" />
                    </div>
                    <div class="col-sm-4">                      
                      <label for="">Téléphone</label>
                        <input type="text" class="form-control" id="intitule_projet" name="intitule_projet" />
                    </div>
                    <div class="col-sm-4">  
                      <div class="form-group">
                        <label for="">E-mail</label>
                        <input type="email" class="form-control" id="intitule_projet" name="intitule_projet" />
                      </div>                    
                    </div>                   
                  </div>
                </div><!-- end div sectionOne -->
              </section><!-- end sectionOne -->

              <!-- sectionTwee -->
              <section id="sectionTwee" class="row justify-content-center sectionOne bg-successM">
                <h4><span class="numerotation_section">II. </span>RENSEIGNEMENTS SPECIFIQUES (IDENTIFICATION DES BESOINS D’INCUBATION DU PROJET)</h4>
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
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                          <label class="form-check-label" for="inlineRadio1">OUI</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                          <label class="form-check-label" for="inlineRadio2">NON</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8 title-">
                        <p>Processus d’élaboration d’un projet entrepreneurial</p>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                          <label class="form-check-label" for="inlineRadio1">OUI</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                          <label class="form-check-label" for="inlineRadio2">NON</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8 title-">
                        <p>Création d’entreprise en RD Congo</p>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                          <label class="form-check-label" for="inlineRadio1">OUI</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                          <label class="form-check-label" for="inlineRadio2">NON</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8 title-">
                        <p>Propriété intellectuelle, innovation et transfert de technologie</p>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                          <label class="form-check-label" for="inlineRadio1">OUI</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                          <label class="form-check-label" for="inlineRadio2">NON</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8 title-">
                        <p>Analyse de marché et proposition de valeur</p>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                          <label class="form-check-label" for="inlineRadio1">OUI</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                          <label class="form-check-label" for="inlineRadio2">NON</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8 title-">
                        <p>Développement de la productivité et de la compétitivité</p>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                          <label class="form-check-label" for="inlineRadio1">OUI</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                          <label class="form-check-label" for="inlineRadio2">NON</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8 title-">
                        <p>Marketing digital et usage des réseaux sociaux</p>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                          <label class="form-check-label" for="inlineRadio1">OUI</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                          <label class="form-check-label" for="inlineRadio2">NON</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8 title-">
                        <p>Responsabilité de l’entrepreneur face à la réussite et à l’échec</p>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                          <label class="form-check-label" for="inlineRadio1">OUI</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                          <label class="form-check-label" for="inlineRadio2">NON</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8 title-">
                        <p>Ethique des affaires</p>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                          <label class="form-check-label" for="inlineRadio1">OUI</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                          <label class="form-check-label" for="inlineRadio2">NON</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8 title-">
                        <p>Sources de financement d’un projet/une entreprise</p>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                          <label class="form-check-label" for="inlineRadio1">OUI</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                          <label class="form-check-label" for="inlineRadio2">NON</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8 title-">
                        <p>Comptabilité et planification financière</p>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                          <label class="form-check-label" for="inlineRadio1">OUI</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                          <label class="form-check-label" for="inlineRadio2">NON</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8 title-">
                        <p>Elémentaires du droit des affaires (Ohada)</p>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                          <label class="form-check-label" for="inlineRadio1">OUI</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                          <label class="form-check-label" for="inlineRadio2">NON</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8 title-">
                        <p>Pitch d’un projet entrepreneurial</p>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                          <label class="form-check-label" for="inlineRadio1">OUI</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                          <label class="form-check-label" for="inlineRadio2">NON</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8 title-">
                        <p>Anglais des affaires</p>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                          <label class="form-check-label" for="inlineRadio1">OUI</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                          <label class="form-check-label" for="inlineRadio2">NON</label>
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
                    <label for="Resume_projet_fr" class="form-label"><span class="title_input">13.</span>Quel est l’état actuel de réalisation/mise en œuvre/implémentation de votre Projet ? <span>max caratere (0/600)</span> <br/> <span>- </span> En français</label> 
                    <textarea class="form-control" placeholder="" id="Resume_projet_fr" style="height: 100px"></textarea>
                  </div>
                  <div class="form-group">
                    <br/>
                    <label for="Resume_projet_fr" class="form-label"><span class="title_input">14.</span>Quel est l’intérêt portez-vous en soumettant votre Projet à Kinshasa Innovation Center (KIC) ?<span>max caratere (0/400)</span> <br/> <span>- </span> En français</label> 
                    <textarea class="form-control" placeholder="" id="Resume_projet_fr" style="height: 100px"></textarea>
                  </div>
                  <div class="form-group">
                    <br/>
                    <label for="Resume_projet_fr" class="form-label"><span class="title_input">15.</span>Votre projet bénéficie-t-il déjà d’un autre soutien ou encadrement (coaching, financement,          etc.) ? Si oui, par quel organisme ?<span>max caratere (0/400)</span> <br/> <span>- </span> En français</label> 
                    <textarea class="form-control" placeholder="" id="Resume_projet_fr" style="height: 100px"></textarea>
                  </div>
                  <div class="form-group">
                    <br/>
                    <label for="Resume_projet_fr" class="form-label"><span class="title_input">16. </span>En quoi votre Projet pourrait-il contribuer à la création de valeurs et/ou d’emplois dans le milieu d’implémentation en particulier et dans la ville de Kinshasa en général ?<span>max caratere (0/1200)</span> <br/> <span>- </span> En français</label> 
                    <textarea class="form-control" placeholder="" id="Resume_projet_fr" style="height: 100px"></textarea>
                  </div>
                  <br/>
                  <div class="row">
                    <div id="title_radio" class="col-sm-8 title_radio">
                        <p><span class="title_input">17. </span> Etes-vous le(la) concepteur(trice) du Projet ci-haut présenté ?</p>
                    </div>
                    <div class="col-sm-4 buttom_radio">
                      <div class="form-check form-check-inline text_radio">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                          <label class="form-check-label" for="inlineRadio1">OUI</label>
                      </div>
                      <div class="form-check form-check-inline text_radio">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                          <label class="form-check-label" for="inlineRadio2">NON</label>
                      </div>
                    </div>
                  </div>
                   
                  <div class="row">
                    <div id="title_radio" class="col-sm-8 title_radio">
                        <p><span class="title_input">18. </span> Détiendrez-vous TOUS les droits de propriété intellectuelle liés au Projet présenté ?</p>
                    </div>
                    <div class="col-sm-4 buttom_radio">
                      <div class="form-check form-check-inline text_radio">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                          <label class="form-check-label" for="inlineRadio1">OUI</label>
                      </div>
                      <div class="form-check form-check-inline text_radio">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                          <label class="form-check-label" for="inlineRadio2">NON</label>
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
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                          <label class="form-check-label" for="inlineRadio1">OUI</label>
                      </div>
                      <div class="form-check form-check-inline text_radio">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                          <label class="form-check-label" for="inlineRadio2">NON</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div id="title_radio" class="col-sm-8 title_radio">
                        <p><span class="title_input">20. </span> Seriez-vous disposé(e) à suivre certains modules de formation à distance, en ligne avec votre propre équipement ?</p>
                    </div>
                    <div class="col-sm-4 buttom_radio">
                      <div class="form-check form-check-inline text_radio">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                          <label class="form-check-label" for="inlineRadio1">OUI</label>
                      </div>
                      <div class="form-check form-check-inline text_radio">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                          <label class="form-check-label" for="inlineRadio2">NON</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div id="title_radio" class="col-sm-8 title_radio">
                        <p><span class="title_input">21. </span> A l’issue de la période d’incubation, ACCEPTERIEZ-VOUS que votre Projet apparaisse dans les pages internet de KIC et éventuellement de ses partenaires ?</p>
                    </div>
                    <div class="col-sm-4 buttom_radio">
                      <div class="form-check form-check-inline text_radio">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                          <label class="form-check-label" for="inlineRadio1">OUI</label>
                      </div>
                      <div class="form-check form-check-inline text_radio">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                          <label class="form-check-label" for="inlineRadio2">NON</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div id="title_radio" class="col-sm-8 title_radio">
                        <p><span class="title_input">22. </span> Avez -vous lu et approuvés-vous le règlement du programme KIC ?</p>
                    </div>
                    <div class="col-sm-4 buttom_radio">
                      <div class="form-check form-check-inline text_radio">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                          <label class="form-check-label" for="inlineRadio1">OUI</label>
                      </div>
                      <div class="form-check form-check-inline text_radio">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                          <label class="form-check-label" for="inlineRadio2">NON</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <br/>
                    <label for="Resume_projet_fr" class="form-label"><span class="title_input">23. </span>Avez-vous une information supplémentaire et particulière pouvant soutenir votre candidature ? (En rapport avec les conditions d’éligibilité, votre niveau d’étude...)<span>max caratere (0/600)</span> <br/> <span>- </span> En français</label> 
                    <textarea class="form-control" placeholder="" id="Resume_projet_fr" style="height: 100px"></textarea>
                  </div>
                  <div class="form-group">
                    <br/>
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label for="Resume_projet_fr" class="form-label text_confirm">Je confirme que toutes les informations fournies dans ce formulaire sont exactes et véridiques</label> 
                  </div>
                  <div class="form-group">
                    <br/>
                    <p id="text_nb">NB : Associez dans ce formulaire votre portrait photo (haute définition), la copie de votre carte d’identité et votre curriculum vitae (CV).</p>
                    <!--label for="formFileSm" class="form-label">Small file input example</label-->
                    <input class="form-control form-control-sm" id="formFileSm" type="file">
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
