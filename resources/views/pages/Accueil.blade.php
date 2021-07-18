@extends('page.base')

@section('title')
    Accueil
@endsection

@section('contenu')
	<!-- ======= Hero Section ======= -->
	<section id="hero">
		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
			  <div class="carousel-indicators">
			    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
			    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
			  </div>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="{{ asset('images/slide/bg_header.jpeg') }}" class="d-block w-100" alt="...">
			      <div class="carousel-caption d-none d-md-block">
			        <h5></h5>
			        <h6>Formation, Incubation et Maturation des projets des jeunes étudiants et chercheurs en millieu Universitaire.</h6>
			        <p></p>
			      </div>
			    </div>
			    <div class="carousel-item">
			      <img src="{{ asset('images/slide/KIC IMAGEA-min.png') }}" class="d-block w-100" alt="...">
			      <div class="carousel-caption d-none d-md-block">
			        <h6>Formation, Incubation et Maturation des projets des jeunes étudiants et chercheurs en millieu Universitaire.</h6>
			      </div>
			    </div>
			    <div class="carousel-item">
			      <img src="{{ asset('images/slide/light-bulb-3104355.jpg') }}" class="d-block w-100" alt="...">
			      <div class="carousel-caption d-none d-md-block">
			        <h5></h5>
			        <h6>Formation, Incubation et Maturation des projets des jeunes étudiants et chercheurs en millieu Universitaire.</h6>
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
  						<p>Kinshasa Innovation Center (KIC) est une initiative de la Chambre de commerce Suisse- RD Congo (CCSC) en partenariat avec les universités de Genève et de Kinshasa. Il a pour but de promouvoir les jeunes entrepreneurs Congolais en les accompagnant avec des outils utiles et indispensables à la création d’entreprise. L’approche envisagée est l’apprentissage et la mise en situation de cas pratiques avec l’assistance des mentors et chefs d’entreprises expérimentés.</p>
  					</div>  					
  				</div>
  			</div>
  			<div class="row justify-content-center bg-danger- text-center">
  				<div class="col-sm-3 fw-bold">
            <span>
              <img src="{{ asset('images/objectif.png')}}" width="100" alt=""><br/>
            </span> <br />
  					Nos Objectifs.
  					<p><br />
              <a href="assets/pdf/Objectifs KIC.pdf" id="btn-learn-more" class="btn-learn-more">Lire la suite...</a></p>
  					
  				</div>
  				<div class="col-sm-3 fw-bold">
            <span>
              <img src="{{ asset('images/approche.png')}}" width="100" alt=""><br/>
            </span><br />
  					APPROCHE.
  					<p><br />
              <a href="assets/pdf/Objectifs KIC.pdf" id="btn-learn-more" class="btn-learn-more">Lire la suite...</a></p>
  				</div>
  				<div class="col-sm-3 fw-bold">
            <span>
              <img src="{{ asset('images/activite.png')}}" width="100" alt=""><br/>
            </span><br />
  					Activité.
  					<p><br />
  						<a href="assets/pdf/Objectifs KIC.pdf" id="btn-learn-more" class="btn-learn-more">Lire la suite...</a>
  					</p>
  				</div>
  			</div>
  			<div id="video_page" class="row justify-content-center">
  				<div class="col-sm-12 col-lg-12 text-center">
  					<iframe width="900" height="500" src="https://www.youtube.com/embed/EK3doKUWuI0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
  						
  					</iframe>
  				</div>
  			</div>
  		</div>
  	</section>
  	<section id="story-intro" class="story-intro">
  		<div class="container-fluid">
  	     <div class="row">
          <div class="col-sm-6 col-lg-6 Oorder-1 order-lg-22">
            <img src="{{ asset('images/img-appel-aprojet.jpg') }}" class="img-fluid" alt="" />
          </div>
          <div class="col-sm-6 text-light text-center">
            <h2>Appel à projet 2021</h2>
            <br />
            <p class="fst-italic">Etudiant, Entrepreuneur et Chercheurs</p>
            <p>
              <a href="assets/pdf/Objectifs KIC.pdf" id="btn-learn-more" class="btn-learn-more">Je postule</a>
            </p>
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
          <h2>NOS PARTENAIRES</h2>
          <!--p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p-->
        </div>

        <div class="recent-photos-slider swiper-container">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a href="https://www.ccsc.ch" class="Chambre de commerce"><img src="{{ asset('images/partainers/1-ccsc.webp') }}" class="img-fluid-" height="80" alt=""></a>
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
            <div class="swiper-slide"><a href="https://www.eda.admin.ch/kinshasa" class="glightbox"><img src="{{ asset('images/partainers/7-logo7AMBASSADESUISSE.png') }}" class="img-fluid" alt="AMBASSADE SUISSE"></a>
            </div>
            <div class="swiper-slide"><a href="https://www.wipo.in/portal/fr/index.html" class="glightbox"><img src="{{ asset('images/partainers/8-logoWIPO.png') }}" class="img-fluid" alt="WIPO"></a>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section><!-- End Nos partainer Section -->

    <section id="contact-us" class="contact-us">
      <div class="container">
        <div class="section-title">
          <h2>CONTACT</h2>
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
                <p>info@ccsc.ch / Richard.mukundji@ccsc.ch / crispin.mulaji@unikin.ac.cd</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <!--p>+1 5589 55488 55s</p-->
                <p>+243 820 656 983 / +41 778 150 566 / +243 973 562 348</p>
              </div>

            </div>

          </div>

          <div class="col-lg-6 mt-5 mt-lg-0">

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
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Envoyer Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->
  </main><!-- End #main -->
@endsection
