/**
* Template Name: MeFamily - v4.2.0
* Template URL: https://bootstrapmade.com/family-multipurpose-html-bootstrap-template-free/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let header = select('#header')
    let offset = header.offsetHeight

    if (!header.classList.contains('header-scrolled')) {
      offset -= 16
    }

    let elementPos = select(el).offsetTop
    window.scrollTo({
      top: elementPos - offset,
      behavior: 'smooth'
    })
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function(e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Mobile nav dropdowns activate
   */
  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  on('click', '.scrollto', function(e) {
    if (select(this.hash)) {
      e.preventDefault()

      let navbar = select('#navbar')
      if (navbar.classList.contains('navbar-mobile')) {
        navbar.classList.remove('navbar-mobile')
        let navbarToggle = select('.mobile-nav-toggle')
        navbarToggle.classList.toggle('bi-list')
        navbarToggle.classList.toggle('bi-x')
      }
      scrollto(this.hash)
    }
  }, true)

  /**
   * Hero carousel indicators
   */
  let heroCarouselIndicators = select("#hero-carousel-indicators")
  let heroCarouselItems = select('#heroCarousel .carousel-item', true)

  heroCarouselItems.forEach((item, index) => {
    (index === 0) ?
    heroCarouselIndicators.innerHTML += "<li data-bs-target='#heroCarousel' data-bs-slide-to='" + index + "' class='active'></li>":
      heroCarouselIndicators.innerHTML += "<li data-bs-target='#heroCarousel' data-bs-slide-to='" + index + "'></li>"
  });

  /**
   * Clients Slider
   */
  new Swiper('.recent-photos-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      640: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      992: {
        slidesPerView: 3,
        spaceBetween: 20
      },
      1200: {
        slidesPerView: 5,
        spaceBetween: 20
      }
    }
  });

  /**
   * Gallery isotope and filter
   */
  window.addEventListener('load', () => {
    let galelryContainer = select('.gallery-container');
    if (galelryContainer) {
      let galleryIsotope = new Isotope(galelryContainer, {
        itemSelector: '.gallery-item',
      });

      let galleryFilters = select('#gallery-flters li', true);

      on('click', '#gallery-flters li', function(e) {
        e.preventDefault();
        galleryFilters.forEach(function(el) {
          el.classList.remove('filter-active');
        });
        this.classList.add('filter-active');

        galleryIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });

      }, true);
    }

  });

  /**
   * Initiate glightbox 
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

})();

(function($){ 

  //if($("#formSendContact").length > 0) {    
    $("#formSendContact").validate({
      rules : {
        name : {
          required : true,
          minlength : 2
        },
        email : {
          required : true,
          maxlength : 50,
          email : true 
        },
        subject : {
          required : true,
          minlength : 2,
          maxlength : 200,
        },
        msg : {
          required : true,
          minlength: 2,
          maxlength: 1000
        }
      },
      messages : {
        name : {
          required : 'Le Nom est Obligatoire',
          minlength : 'Le Nom doit avoir au minimun 2 caractère'
        },
        email : {
          required : 'Le Mail est Obligatoire',
          maxlength : 'Le Mail doit avoir au maximun 50 caractère',
          email : 'entrer un Mail valide'
        },
        subject : {
          required : 'Le sujet est Obligatoire',
          minlength : 'Le sujet doit avoir au minimun 2 caractère',
          maxlength : 'Le sujet doit avoir au maximun 200 caractère'
        },
        msg : {
          required : 'Le Message est Obligatoire',
          minlength: 'Le Message doit avoir au minimun 2 caractère',
          maxlength: 'Le Message doit avoir au maximun 200 caractère'
        }
      },
      submitHandler: function(form){

  // Pour le formulaire de contact 
  //$("#formSendContact").on('submit',function(e){
    //e.preventDefault();
    let name = $('#name').val();
    let email = $('#email').val();
    let subject = $('#subject').val();
    let msg = $('#msg').val();
    let _token = $('input[type="hidden"]').attr('value'); 
    //let myUrl = $(this).attr('action');
    //let myMethode = $(this).attr('method');
    let myUrl = $("#formSendContact").attr('action');
    let myMethode = $("#formSendContact").attr('method');

    //let dt = new FormData(this);
    //console.log('myMethode '+myMethode);
    $('#btnContactSend').attr({disabled:true});
    $('#btnContactSend').css('backgroundColor','black');
    $('#btnContactSend').html('En cour d\'envoi...');
    $.ajax({
      url:myUrl,
      method:myMethode,
      data:{
        _token,
        name,
        email,
        subject,
        msg
      },
      dataType:'json',
      //processData:false,
      //contentType:false,
      beforeSend:function(){
        //$(document).find('s')
        //console.log('vidange du span');
        $(document).find('span.error-text').text('');
      },
      success:function(data){
        if(data.status == 0){
          console.log(data.error);
          
          $.each(data.error, function(prefix, val){
            console.log("var prefix "+prefix+" ::valeur "+val);
            $('span.'+prefix+'_error').text(val[0]);
          });
          $('#btnContactSend').html('Envoyer Message');
          $('#btnContactSend').attr('disabled',false);
          $('#btnContactSend').css('backgroundColor','');
        }else{
          $('#formSendContact')[0].reset();
          console.log(data.messages);
          alert('le message est bien envoyé');
          $('#btnContactSend').html('Envoyer Message');
          $('#btnContactSend').attr('disabled',false);
          $('#btnContactSend').css('backgroundColor','');
        }
      },
      error:function(error){
        console.log(error.responseText);
      }
    });                
  //});//fin ajax

  }
    });//fin validate
    //}

  // Pour le formulaire d'appel a projet
  //if($("#appel_A_projet").length > 0) {
    $("#appel_a_projet").validate({
      rules : {
        intitule_projet1 : {
          required : true,
          minlength : 2
        },
        Resume_projet_fr2 : {
          required : true,
          minlength : 2,
          maxlength : 1600
        },
        Resume_projet_us2 : {
          required : true,
          minlength : 2,
          maxlength : 1600
        },
        secteur_projet3 : {
          required : true,
          minlength : 3,
          maxlength : 1200
        },
        Localisation_projet4 : {
          required : true,
          minlength : 3,
          maxlength : 200
        },
        Duree_projet5 : {
          required : true,
          minlength : 3,
          maxlength : 200
        },
        Financement_projet6 : {
          required : true,
          minlength : 3,
          maxlength : 600
        },
        Description_projet7 : {
          required : true,
          minlength : 3,
          maxlength : 1600
        },
        Objectifs_projet8 : {
          required : true,
          minlength : 3,
          maxlength : 800
        },
        Objectifs_spécifiques_projet9 : {
          required : true,
          minlength : 2,
          maxlength : 600
        },
        prenom_responsable_principal10 : {
          required : true,
          minlength : 2
        },
        nom_responsable_principal10 : {
          required : true,
          minlength : 2
        },
        postnom_responsable_principal10 : {
          required : true,
          minlength : 2
        },
        phone_responsable_principal10 : {
          required : true,
          minlength : 5
        },
        email_responsable_principal10 : {
          required : true,
          minlength : 2
        },
        prenom_associe1 : {
          minlength : 2
        },
        nom_associe1 : {
          minlength : 2
        },
        postnom_associe1 : {
          minlength : 2
        },
        phone_associe1 : {
          minlength : 5
        },
        email_associe1 : {
          minlength : 2
        },
        prenom_associe2 : {
          minlength : 2
        },
        nom_associe2 : {
          minlength : 2
        },
        postnom_associe2 : {
          minlength : 2
        },
        phone_associe2 : {
          minlength : 5
        },
        email_associe2 : {
          minlength : 2
        },
        Business_plan : {
          required : true
        },
        Leadership : {
          required : true
        },
        Processus : {
          required : true
        },
        Creation : {
          required : true
        },
        propriete : {
          required : true
        },
        analyse : {
          required : true
        },
        developpement : {
          required : true
        },
        marketing : {
          required : true
        },
        responsabilite : {
          required : true
        },
        ethique : {
          required : true
        },
        sources : {
          required : true
        },
        comptabilite : {
          required : true
        },
        elementaires : {
          required : true
        },
        pitch : {
          required : true
        },
        anglais : {
          required : true
        }, 
        etat_actual_du_projet13 : {
          required : true,
          minlength : 3,
          maxlength : 600
        },
        interet_en_soumettant14 : {
          required : true,
          minlength : 3,
          maxlength : 600
        },
        projet_beneficie_de_financement15 : {
          required : true,
          minlength : 3,
          maxlength : 400
        },
        projet_pourrait_contribuer16 : {
          required : true,
          minlength : 3,
          maxlength : 1200
        },
        concepteur_du_projet17 : {
          required : true
        },
        propriete_intellectuelle18 : {
          required : true
        },
        investir_en_temps19 : {
          required : true
        },
        formation_a_distance20 : {
          required : true
        },
        periode_incubation21 : {
          required : true
        },
        approuve_le_reglement22 : {
          required : true
        },
        information_supplementaire23 : {
          required : true
        },
        confirm_info : {
          required : true
        },
        'cv1[]' : {
          required : true
        }      
      },
      messages : {
        intitule_projet1 : {
          required : 'Le Nom est Obligatoire',
          minlength : 'Le Nom doit avoir au minimun 2 caractère'
        },
        Resume_projet_fr2 : {
          required : 'Le resumé du projet est Obligatoire',
          minlength : 'Le minimum pour le resumé du projet en français (2) caractère',
          maxlength : 'Le maximum pour le resumé du projet 1600 caractère'
        },
        Resume_projet_us2 : {
          required : 'Le resumé du projet est Obligatoire',
          minlength : 'Le minimum pour le resumé du projet en anglais (2) caractère',
          maxlength : 'Le maximum pour le resumé du projet en anglais (1600) caractère'
        },
        secteur_projet3 : {
          required : 'Le Domaine/secteur du projet est Obligatoire',
          minlength : 'Le minimum pour le Domaine/secteur du projet (3) caractère',
          maxlength : 'Le maximum pour le Domaine/secteur du projet (1200) caractère'
        },
        Localisation_projet4 : {
          required : 'La localisation du projet est Obligatoire',
          minlength : 'Le minimum pour la localisation du projet (3) caractère',
          maxlength : 'Le maximum pour la localisation du projet (200) caractère'
        },
        Duree_projet5 : {
          required : 'La Durée du projet est Obligatoire',
          minlength : 'Le minimum pour la Durée du projet (3) caractère',
          maxlength : 'Le maximum pour la Durée du projet (200) caractère'
        },
        Financement_projet6 : {
          required : 'Le Financement du projet est Obligatoire',
          minlength : 'Le minimum pour le Financement du projet (3) caractère',
          maxlength : 'Le maximum pour le Financement du projet (600) caractère'
        },
        Description_projet7 : {
          required : 'La Description du projet est Obligatoire',
          minlength : 'Le minimum pour la Description du projet (3) caractère',
          maxlength : 'Le maximum pour la Description du projet (1600) caractère'
        },
        Objectifs_projet8 : {
          required : 'Le Objectifs du projet est Obligatoire',
          minlength : 'Le minimum pour le Objectifs du projet (3) caractère',
          maxlength : 'Le maximum pour le Objectifs du projet (800) caractère'
        },
        Objectifs_spécifiques_projet9 : {
          required : 'Le Objectifs spécifiques du projet est Obligatoire',
          minlength : 'Le minimum pour le Objectifs spécifiques du projet (3) caractère',
          maxlength : 'Le maximum pour le Objectifs spécifiques du projet (600) caractère'
        },
        prenom_responsable_principal10 : {
          required : 'Le prenom est Obligatoire',
          minlength : 'Le minimum pour le prenom est (2) caractère',
        },
        nom_responsable_principal10 : {
          required : 'Le nom est Obligatoire',
          minlength : 'Le minimum pour le nom est (2) caractère',
        },
        postnom_responsable_principal10 : {
          required : 'Le postnom est Obligatoire',
          minlength : 'Le minimum pour le postnom est (2) caractère',
        },
        phone_responsable_principal10 : {
          required : 'Le phone est Obligatoire',
          minlength : 'Le minimum pour le phone est (5) caractère',
        },
        email_responsable_principal10 : {
          required : 'Le email est Obligatoire',
          minlength : 'Le minimum pour le email est (2) caractère',
        },
        prenom_associe1 : {
          //required : 'Le prenom est Obligatoire',
          minlength : 'Le minimum pour le prenom est (2) caractère'
        },
        nom_associe1 : {
          //required : 'Le nom est Obligatoire',
          minlength : 'Le minimum pour le nom est (2) caractère'
        },
        postnom_associe1 : {
          //required : 'Le postnom est Obligatoire',
          minlength : 'Le minimum pour le postnom est (2) caractère'
        },
        phone_associe1 : {
          //required : 'Le phone est Obligatoire',
          minlength : 'Le minimum pour le phone est (5) caractère'
        },
        email_associe1 : {
          //required : 'Le email est Obligatoire',
          minlength : 'Le minimum pour le phone est (2) caractère'
        },
        prenom_associe2 : {
          //required : 'Le prenom est Obligatoire',
          minlength : 'Le minimum pour le prenom est (2) caractère'
        },
        nom_associe2 : {
          //required : 'Le nom est Obligatoire',
          minlength : 'Le minimum pour le nom est (2) caractère',
        },
        postnom_associe2 : {
          //required : 'Le postnom est Obligatoire',
          minlength : 'Le minimum pour le postnom est (2) caractère',
        },
        phone_associe2 : {
          //required : 'Le phone est Obligatoire',
          minlength : 'Le minimum pour le phone est (5) caractère',
        },
        email_associe2 : {
          //required : 'Le email est Obligatoire',
          minlength : 'Le minimum pour le phone est (2) caractère',
        },
        Business_plan : {
          required : 'L\'un deux bouton doit etre coché',
        },
        Leadership : {
          required : 'L\'un deux bouton doit etre coché'
        },
        Processus : {
          required : 'L\'un deux bouton doit etre coché'
        },
        Creation : {
          required : 'L\'un deux bouton doit etre coché'
        },
        propriete : {
          required : 'L\'un deux bouton doit etre coché'
        },
        analyse : {
          required : 'L\'un deux bouton doit etre coché'
        },
        developpement : {
          required : 'L\'un deux bouton doit etre coché'
        },
        marketing : {
          required : 'L\'un deux bouton doit etre coché'
        },
        responsabilite : {
          required : 'L\'un deux bouton doit etre coché'
        },
        ethique : {
          required : 'L\'un deux bouton doit etre coché'
        },
        sources : {
          required : 'L\'un deux bouton doit etre coché'
        },
        comptabilite : {
          required : 'L\'un deux bouton doit etre coché'
        },
        elementaires : {
          required : 'L\'un deux bouton doit etre coché'
        },
        pitch : {
          required : 'L\'un deux bouton doit etre coché'
        },
        anglais : {
          required : 'L\'un deux bouton doit etre coché'
        },
        etat_actual_du_projet13 : {
          required : 'l’état actuel de réalisation est Obligatoire',
          minlength : 'Le minimum pour l’état actuel de réalisation du projet est (3) caractère',
          maxlength : 'Le maximum pour l’état actuel de réalisation du projet est (600) caractère'
        },
        interet_en_soumettant14 : {
          required : 'intérêt portez-vous en soumettant votre projet est Obligatoire',
          minlength : 'Le minimum est de (3) caractère',
          maxlength : 'Le maximum est de (600) caractère'
        },
        projet_beneficie_de_financement15 : {
          required : 'Votre projet bénéficie-t-il déjà d’un autre soutien Obligatoire',
          minlength : 'Le minimum est de (3) caractère',
          maxlength : 'Le maximum est de (400) caractère'
        },
        projet_pourrait_contribuer16 : {
          required : 'La question 16 est Obligatoire',
          minlength : 'Le minimum est de (3) caractère',
          maxlength : 'Le maximum est de (1200) caractère'
        },
        concepteur_du_projet17 : {
          required : 'L\'un deux bouton doit etre coché'
        },
        propriete_intellectuelle18 : {
          required : 'L\'un deux bouton doit etre coché'
        },
        investir_en_temps19 : {
          required : 'L\'un deux bouton doit etre coché'
        },
        formation_a_distance20 : {
          required : 'L\'un deux bouton doit etre coché'
        },
        periode_incubation21 : {
          required : 'L\'un deux bouton doit etre coché'
        },
        approuve_le_reglement22 : {
          required : 'L\'un deux bouton doit etre coché'
        },
        information_supplementaire23 : {
          required : 'L\'information supplémentaire et particulière est Obligatoire'
        },
        confirm_info : {
          required : 'Conforme si les Informations sont exactes et véridiques'
        },
        'cv1[]' : {
          required : 'Le curriculum vitae (CV) et portrait photo sont Obligatoire'
        }
      },
      submitHandler: function(form) {
        let intitule_projet1 = $('#intitule_projet1').val();
        let Resume_projet_fr2 = $('#Resume_projet_fr2').val();
        let Resume_projet_us2 = $('#Resume_projet_us2').val();
        let secteur_projet3 = $('#secteur_projet3').val();
        let Localisation_projet4 = $('#Localisation_projet4').val();
        let Duree_projet5 = $('#Duree_projet5').val();
        let Financement_projet6 = $('#Financement_projet6').val();
        let Description_projet7 = $('#Description_projet7').val();
        let Objectifs_projet8 = $('#Objectifs_projet8').val();
        let Objectifs_spécifiques_projet9 = $('#Objectifs_spécifiques_projet9').val();
        //responsamble principale
        let prenom_responsable_principal10 = $('#prenom_responsable_principal10').val();
        let nom_responsable_principal10 = $('#nom_responsable_principal10').val();
        let postnom_responsable_principal10 = $('#postnom_responsable_principal10').val();
        let phone_responsable_principal10 = $('#phone_responsable_principal10').val();
        let email_responsable_principal10 = $('#email_responsable_principal10').val();
        //associe1
        let prenom_associe1 = $('#prenom_associe1').val();
        let nom_associe1 = $('#nom_associe1').val();
        let postnom_associe1 = $('#postnom_associe1').val();
        let phone_associe1 = $('#phone_associe1').val();
        let email_associe1 = $('#email_associe1').val();
        //associe2
        let prenom_associe2 = $('#prenom_associe2').val();
        let nom_associe2 = $('#nom_associe2').val();
        let postnom_associe2 = $('#postnom_associe2').val();
        let phone_associe2 = $('#phone_associe2').val();
        let email_associe2 = $('#email_associe2').val();
        //sectionTwee
        let Business_plan = $("input[name='Business_plan']:checked").val();
        let Leadership = $("input[name='Leadership']:checked").val();
        let Processus = $("input[name='Processus']:checked").val();
        let Creation = $("input[name='Creation']:checked").val();
        let propriete = $("input[name='propriete']:checked").val();
        let analyse = $("input[name='analyse']:checked").val();
        let developpement = $("input[name='developpement']:checked").val();
        let marketing = $("input[name='marketing']:checked").val();
        let responsabilite = $("input[name='responsabilite']:checked").val();
        let ethique = $("input[name='ethique']:checked").val();
        let sources = $("input[name='sources']:checked").val();
        let comptabilite = $("input[name='comptabilite']:checked").val();
        let elementaires = $("input[name='elementaires']:checked").val();
        let pitch = $("input[name='pitch']:checked").val();
        let anglais = $("input[name='anglais']:checked").val();
        let etat_actual_du_projet13 = $('#etat_actual_du_projet13').val();
        let interet_en_soumettant14 = $('#interet_en_soumettant14').val();
        let projet_beneficie_de_financement15 = $('#projet_beneficie_de_financement15').val();
        let projet_pourrait_contribuer16 = $('#projet_pourrait_contribuer16').val();
        let concepteur_du_projet17 = $("input[name='concepteur_du_projet17']:checked").val();
        let propriete_intellectuelle18 = $("input[name='propriete_intellectuelle18']:checked").val();
        let investir_en_temps19 = $("input[name='investir_en_temps19']:checked").val();
        let formation_a_distance20 = $("input[name='formation_a_distance20']:checked").val();
        let periode_incubation21 = $("input[name='periode_incubation21']:checked").val();
        let approuve_le_reglement22 = $("input[name='approuve_le_reglement22']:checked").val();
        let information_supplementaire23 = $('#information_supplementaire23').val();
        let confirm_info = $('#confirm_info').val();
        let cv1 = $('#cv1').val();
        let _token = $('input[type="hidden"]').attr('value');
        let myUrl = $("#appel_a_projet").attr('action');
        let myMethode = $("#appel_a_projet").attr('method');

        $('#btnappel_A_projet').attr({disabled:true});
        $('#btnappel_A_projet').css('backgroundColor','black');
        $('#btnappel_A_projet').html('En cour d\'envoi...');
        $.ajax({
          url:myUrl,
          method:myMethode,
          data:{
            _token,
            intitule_projet1,
            Resume_projet_fr2,
            Resume_projet_us2,
            secteur_projet3,
            Localisation_projet4,
            Duree_projet5,
            Financement_projet6,
            Description_projet7,
            Objectifs_projet8,
            Objectifs_spécifiques_projet9,
            prenom_responsable_principal10,
            nom_responsable_principal10,
            postnom_responsable_principal10,
            phone_responsable_principal10,
            email_responsable_principal10,
            prenom_associe1,
            nom_associe1,
            postnom_associe1,
            phone_associe1,
            email_associe1,
            prenom_associe2,
            nom_associe2,
            postnom_associe2,
            phone_associe2,
            email_associe2,
            Business_plan,
            Leadership,
            Processus,
            Creation,
            propriete,
            analyse,
            developpement,
            marketing,
            responsabilite, 
            ethique, 
            sources,
            comptabilite,
            elementaires,
            pitch,
            anglais,
            etat_actual_du_projet13,
            interet_en_soumettant14,
            projet_beneficie_de_financement15,
            projet_pourrait_contribuer16,
            concepteur_du_projet17,
            propriete_intellectuelle18,
            investir_en_temps19,
            formation_a_distance20,
            periode_incubation21,
            approuve_le_reglement22,
            information_supplementaire23,
            cv1,
            confirm_info,
            myUrl,
            myMethode,
          },
          dataType:'json',
          //processData:false,
          //contentType:false,
          beforeSend:function(){
            //$(document).find('s')
            //console.log('vidange du span');
            $(document).find('span.error-text').text('');
          },
          success:function(data){
            if(data.status == 0){
              console.log(data.error);              
              $.each(data.error, function(prefix, val){
                console.log("var prefix "+prefix+" ::valeur "+val);
                //console.log("VALEUR CHAMP "+ Objectifs_spécifiques_projet9);
                console.log("VALEUR CHAMP Radio "+ email_responsable_principal10);
                $('span.'+prefix+'_error').text(val[0]);

              });
              $('#btnappel_A_projet').html('Votre projet est bien envoyer');
              $('#btnappel_A_projet').attr('disabled',false);
              $('#btnappel_A_projet').css('backgroundColor','');
            }else{
              $('#appel_a_projet')[0].reset();
              console.log(data.messages);
              alert('Votre projet est bien envoyer');
              $('#btnappel_A_projet').html('Votre projet est bien envoyer');
              $('#btnappel_A_projet').attr('disabled',false);
              $('#btnappel_A_projet').css('backgroundColor','');
            }
          },
          error:function(error){
            console.log(error.responseText);
          }
        });   
        //return true;
      }
    });
  //}
})(jQuery);

