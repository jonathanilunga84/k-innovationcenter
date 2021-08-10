@extends('page.base')

@section('title')
    Accueil
@endsection

@section('contenu')
	<!-- section formulaire appel a projet  -->
    <!-- Modal -->
      
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
              @if(session()->has('successSend'))
                <div class="alert alert-success">
                  <h3>{{ session()->get('successSend') }}</h3>
                </div>                   
              @endif
              @if(session()->has('ValidationErrorM'))
                <div class="alert alert-success">
                  <h3 class="text-danger">{{ session()->get('ValidationError') }}</h3>
                </div>                   
              @endif
              @if ($errors->any())
                    <div class="alert alert-danger">
                         <h3 class="text-danger">Verifier bien les Champs une ou plusier n'est pas bien remplie"</h3>
                    </div>
                @endif
              <!-- sectionOne -->
              <section id="sectionOne" class="row justify-content-center sectionOne">
                <h4 class=""><span class="numerotation_section">I. </span>RENSEIGNEMENTS GENERAUX SUR LE PROJET</h4>
                <div class="col-sm12 col-md-8 col-lg-8">
                  <div class="form-group">
                    <label for="intitule_projet1" class="form-label"><span class="title_input">1.</span>Intitulé du Projet</label>
                    @error('intitule_projet1')
                      <div class="text-danger">{{$message}}</div>
                    @enderror
                    <input type="text" class="form-control" id="intitule_projet1" name="intitule_projet1" minlength="2" value="{{ old('intitule_projet1') }}" required/>
                    <!--div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div-->
                    <span class="text-danger error-text intitule_projet1-error"></span>
                  </div>
                  <div class="form-group">
                    <br/>
                    <label for="Resume_projet_fr2" class="form-label fw-boldM"><span class="title_input">2.</span>Résumé du rojet <!--span>max caratere (0/1200)</span--></label> 
                    @error('Resume_projet_fr2')
                      <div class="text-danger">{{$message}}</div>
                    @enderror
                    <p class=""><span class="float-left"><strong>-</strong> En français</span> <!--span class="float-end text-danger">(0/1600)*</span--></p>
                    <textarea class="form-control" name="Resume_projet_fr2" id="Resume_projet_fr2" placeholder="nombre de caractère max 1600" style="height: 100px" maxlength="1600">{{ old('Resume_projet_fr2') }}</textarea>
                    <span id="g" class="form-text"></span>
                  </div>
                  <div class="form-group">
                    <!--label for="Resume_projet_us" class="form-label"><span class="title_input">.</span>Résumé du rojet <span>max caratere (0/1200)</span><br/> <span>- </span> En Anglais</label--> 
                    <p class="bg-successM">
                      <span class="float-left"><strong>-</strong> En Anglais</span> <!--span class="float-end text-danger">(0/1600)*
                      </span-->
                    </p>
                     @error('Resume_projet_us2')
                      <div class="text-danger">{{$message}}ddd</div>
                    @enderror
                    <textarea class="form-control" placeholder="nombre de caractère max 1600" name="Resume_projet_us2" id="Resume_projet_us2" style="height: 100px" maxlength="1600">{{ old('Resume_projet_us2') }}</textarea>
                  </div>
                  <div class="form-group">
                    <br/>
                    <label for="secteur_projet3" class="form-label"><span class="title_input">3.</span> Domaine/ secteur du projet et Objectifs de Développement Durable (ODD) correspondants</label> 
                    @error('secteur_projet3')
                      <div class="text-danger">{{$message}}</div>
                    @enderror
                    <textarea class="form-control" name="secteur_projet3" id="secteur_projet3" style="height: 100px" placeholder="nombre de caractère max 1200" maxlength="1200" required>{{ old('secteur_projet3') }}</textarea>
                  </div>
                  <div class="form-group">
                    <br/>
                    <label for="Localisation_projet4" class="form-label"><span class="title_input">4.</span>Localisation du Projet (éventuellement)
                    </label> 
                    @error('Localisation_projet4')
                      <div class="text-danger">{{$message}}</div>
                    @enderror
                    <!--span class="text-danger float-end"> (0/200)*</span-->
                    <textarea class="form-control" name="Localisation_projet4" id="Localisation_projet4" style="height: 100px" placeholder="nombre de caractère max 200*" maxlength="200" required>{{ old('Localisation_projet4') }}</textarea>
                  </div>
                  <div class="form-group">
                    <br/>
                    <label for="Duree_projet5" class="form-label"><span class="title_input">5.</span>Durée du Projet (éventuellement)</label> 
                    @error('Duree_projet5')
                      <div class="text-danger">{{$message}}</div>
                    @enderror
                    <input type="text" class="form-control" id="Duree_projet5" name="Duree_projet5" placeholder="nombre de caractère max 200*" maxlength="200" value="{{ old('Duree_projet5') }}" required />
                  </div>
                  <div class="form-group">
                    <br/>
                    <label for="Financement_projet6" class="form-label"><span class="title_input">6.
                    </span>Financement du Projet (éventuellement) 
                    </label> 
                    @error('Financement_projet6')
                      <div class="text-danger">{{$message}}</div>
                    @enderror
                    <textarea class="form-control" placeholder="nombre de caractère max 600" id="Financement_projet6" name="Financement_projet6" style="height: 100px" maxlength="600" required>{{ old('Financement_projet6') }}</textarea>
                  </div>
                  <div class="form-group">
                    <br/>
                    <label for="Description_projet7" class="form-label"><span class="title_input">7.</span>Description du Projet</label> 
                    @error('Description_projet7')
                      <div class="text-danger">{{$message}}</div>
                    @enderror
                    <textarea class="form-control" name="Description_projet7" id="Description_projet7" style="height: 100px" placeholder="nombre de caractère max 1600" maxlength="1600" required>{{ old('Description_projet7') }}</textarea>
                  </div>
                  <div class="form-group">
                    <br/>
                    <label for="Objectifs_projet8" class="form-label"><span class="title_input">8.</span>Objectifs généraux du Projet</label> 
                    @error('Objectifs_projet8')
                      <div class="text-danger">{{$message}}</div>
                    @enderror
                    <textarea class="form-control" name="Objectifs_projet8" id="Objectifs_projet8" cols="30" rows="10" placeholder="nombre de caractère max 800" style="height: 100px" maxlength="800" required>{{ old('Objectifs_projet8') }}</textarea>
                  </div>
                  <div class="form-group">
                    <br/>
                    <label for="Objectifs_spécifiques_projet9" class="form-label"><span class="title_input">9.</span>Objectifs spécifiques du Projet</label>
                    @error('Objectifs_spécifiques_projet9')
                      <div class="text-danger">{{$message}}</div>
                    @enderror
                    <textarea class="form-control" name="Objectifs_spécifiques_projet9" id="Objectifs_spécifiques_projet8" style="height: 100px" placeholder="nombre de caractère max 600" maxlength="600" required>{{ old('Objectifs_spécifiques_projet9') }}</textarea>
                  </div>
                  <br/>
                  <div class="row">
                    <h6 class="font-size"><span class="title_input">10.</span> Responsable principal(e) du Projet</h6>
                    <div class="col-sm-4">  
                      <div class="form-group">
                        <label for="prenom_responsable_principal10">Prénom</label>
                        @error('prenom_responsable_principal10')
                          <div class="text-danger">{{$message}}</div>
                        @enderror
                        <input type="text" class="form-control" id="prenom_responsable_principal10" name="prenom_responsable_principal10" placeholder="Obligatoire" value="{{ old('prenom_responsable_principal10') }}" required/>
                      </div>                    
                    </div>
                    <div class="col-sm-4">                      
                      <label for="nom_responsable_principal10">Nom</label>
                        @error('nom_responsable_principal10')
                          <div class="text-danger">{{$message}}</div>
                        @enderror
                        <input type="text" class="form-control" id="nom_responsable_principal10" name="nom_responsable_principal10" value="{{ old('nom_responsable_principal10') }}"  required />
                    </div>
                    <div class="col-sm-4">                      
                      <label for="postnom_responsable_principal10">Postnom</label>
                        @error('postnom_responsable_principal10')
                          <div class="text-danger">{{$message}}</div>
                        @enderror
                      <input type="text" class="form-control" id="postnom_responsable_principal10" name="postnom_responsable_principal10" value="{{ old('postnom_responsable_principal10') }}" required />
                    </div>
                    <div class="col-sm-4"> 
                      <div class="form-group">
                        <label for="phone_responsable_principal10">Téléphone</label>
                        @error('phone_responsable_principal10')
                          <div class="text-danger">{{$message}}</div>
                        @enderror
                        <input type="text" class="form-control" id="intitule_projet10" name="phone_responsable_principal10" value="{{ old('phone_responsable_principal10') }}" required />
                      </div>                      
                    </div>
                    <div class="col-sm-4">                      
                      <label for="">E-mail</label>
                        @error('email_responsable_principal10')
                          <div class="text-danger">{{$message}}</div>
                        @enderror
                        <input type="email" class="form-control" id="emil_responsable_principal10" name="email_responsable_principal10" value="{{ old('email_responsable_principal10') }}" required />
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
                        <input type="text" class="form-control" id="prenom_associe2" name="prenom_associe2" />
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
                        @error('Business_plan')
                          <div class="text-danger">{{$message}}</div>
                        @enderror
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
                        @error('Leadership')
                          <div class="text-danger">{{$message}}</div>
                        @enderror
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
                        @error('Processus')
                          <div class="text-danger">{{$message}}</div>
                        @enderror
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
                        @error('Creation')
                          <div class="text-danger">{{$message}}</div>
                        @enderror
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
                        @error('propriete')
                          <div class="text-danger">{{$message}}</div>
                        @enderror
                        <p>Propriété intellectuelle, innovation et transfert de technologie</p>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="propriete" id="propriete1" value="oui">
                          <label class="form-check-label" for="propriete1">OUI</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="propriete" id="propriete2" value="non">
                          <label class="form-check-label" for="propriete2">NON</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8 title-">
                        <p>Analyse de marché et proposition de valeur</p>
                        @error('analyse')
                          <div class="text-danger">{{$message}}</div>
                        @enderror
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
                        @error('developpement')
                          <div class="text-danger">{{$message}}</div>
                        @enderror
                        <p>Développement de la productivité et de la compétitivité</p>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="developpement" id="developpement1" value="oui">
                          <label class="form-check-label" for="developpement1">OUI</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="developpement" id="developpement2" value="non">
                          <label class="form-check-label" for="developpement2">NON</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8 title-">
                        @error('marketing')
                          <div class="text-danger">{{$message}}</div>
                        @enderror
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
                        @error('responsabilite')
                          <div class="text-danger">{{$message}}</div>
                        @enderror
                        <p>Responsabilité de l’entrepreneur face à la réussite et à l’échec</p>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="responsabilite" id="responsabilite1" value="oui">
                          <label class="form-check-label" for="responsabilite1">OUI</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="responsabilite" id="responsabilite2" value="non">
                          <label class="form-check-label" for="responsabilite2">NON</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8 title-">
                        @error('ethique')
                          <div class="text-danger">{{$message}}</div>
                        @enderror
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
                        @error('sources')
                          <div class="text-danger">{{$message}}</div>
                        @enderror
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
                        @error('comptabilite')
                          <div class="text-danger">{{$message}}</div>
                        @enderror
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
                        @error('elementaires')
                          <div class="text-danger">{{$message}}</div>
                        @enderror
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
                        @error('pitch')
                          <div class="text-danger">{{$message}}</div>
                        @enderror
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
                        @error('anglais')
                          <div class="text-danger">{{$message}}</div>
                        @enderror
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
                    
                </div><!-- end div sectionTwee -->
              </section><!-- end sectionTwee -->

              <!-- sectionTree -->
              <section id="sectionTree" class="row justify-content-center sectionOne bg-lightM">
                <h4><span class="numerotation_section">III. </span>MOTIVATION A LA SOUMISSION DU PROJET</h4>
                <div class="col-sm12 col-md-8 col-lg-8 bg-lightM">
                  <div class="form-group">
                    <label for="etat_actual_du_projet13" class="form-label"><span class="title_input">13.</span>Quel est l’état actuel de réalisation/mise en œuvre/implémentation de votre Projet ?
                    </label> 
                    @error('etat_actual_du_projet13')
                      <div class="text-danger">{{$message}}</div>
                    @enderror
                    <textarea class="form-control" placeholder="nombre de caratére Max (0/600)*" id="etat_actual_du_projet" name="etat_actual_du_projet13" style="height: 100px" maxlength="600">{{ old("etat_actual_du_projet13")}}</textarea>
                  </div>
                  <div class="form-group">
                    <br/>
                    <label for="interet_en_soumettant14" class="form-label"><span class="title_input">14.</span>Quel intérêt portez-vous en soumettant votre projet à Kinshasa Innovation Center (KIC) ?</label>
                    @error('interet_en_soumettant14')
                      <div class="text-danger">{{$message}}</div>
                    @enderror 
                    <textarea class="form-control" placeholder="nombre de catratre Max (0/600)*" id="interet_en_soumettant14" name="interet_en_soumettant14" interet_en_soumettant14style="height: 100px" maxlength="400" required>{{old("interet_en_soumettant14")}}</textarea>
                  </div>
                  <div class="form-group">
                    <br/>
                    <label for="projet_beneficie_de_financement15" class="form-label"><span class="title_input">15.</span>Votre projet bénéficie-t-il déjà d’un autre soutien ou encadrement (coaching, financement,          etc.) ? Si oui, par quel organisme ?</label>
                    @error('projet_beneficie_de_financement15')
                      <div class="text-danger">{{$message}}</div>
                    @enderror  
                    <textarea class="form-control" name="projet_beneficie_de_financement15" id="projet_beneficie_de_financement15" placeholder="nombre de catratre Max (0/400)*" style="height: 100px" maxlength="400" required>{{old("projet_beneficie_de_financement15")}}</textarea>
                  </div>
                  <div class="form-group">
                    <br/>
                    <label for="projet_pourrait_contribuer16" class="form-label"><span class="title_input">16. </span>En quoi votre Projet pourrait-il contribuer à la création de valeurs et/ou d’emplois dans le milieu d’implémentation en particulier et dans la ville de Kinshasa en général ?
                    </label>
                    @error('projet_pourrait_contribuer16')
                      <div class="text-danger">{{$message}}</div>
                    @enderror  
                    <textarea class="form-control" placeholder="nombre de catratre Max (0/1200)*" id="projet_pourrait_contribuer16" name="projet_pourrait_contribuer16" style="height: 100px" maxlength="1200" required="">{{old("etat_actual_du_projet13")}}</textarea>
                  </div>
                  <br/>
                  <div class="row">
                    <div id="title_radio" class="col-sm-8 title_radio">
                    @error('projet_pourrait_contribuer16')
                      <div class="text-danger">{{$message}}</div>
                    @enderror  
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
                    @error('propriete_intellectuelle18')
                      <div class="text-danger">{{$message}}</div>
                    @enderror
                        <p><span class="title_input">18. </span> Détiendrez-vous TOUS les droits de propriété intellectuelle liés au Projet présenté ?</p>
                    </div>
                    <div class="col-sm-4 buttom_radio">
                      <div class="form-check form-check-inline text_radio">
                          <input class="form-check-input" type="radio" name="propriete_intellectuelle18" id="propriete_intellectuelle1_18" value="oui">
                          <label class="form-check-label" for="propriete_intellectuelle1_18">OUI</label>
                      </div>
                      <div class="form-check form-check-inline text_radio">
                          <input class="form-check-input" type="radio" name="propriete_intellectuelle18" id="propriete_intellectuelle2_18" value="non">
                          <label class="form-check-label" for="propriete_intellectuelle2_18">NON</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div id="title_radio" class="col-sm-8 title_radio">
                      @error('investir_en_temps19')
                        <div class="text-danger">{{$message}}</div>
                      @enderror
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
                      @error('formation_a_distance20')
                        <div class="text-danger">{{$message}}</div>
                      @enderror
                        <p><span class="title_input">20. </span> Seriez-vous disposé(e) à suivre certains modules de formation à distance, en ligne avec votre propre équipement ?</p>
                    </div>
                    <div class="col-sm-4 buttom_radio">
                      <div class="form-check form-check-inline text_radio">
                          <input class="form-check-input" type="radio" name="formation_a_distance20" id="formation_a_distance1_20" value="oui">
                          <label class="form-check-label" for="formation_a_distance1_20">OUI</label>
                      </div>
                      <div class="form-check form-check-inline text_radio">
                          <input class="form-check-input" type="radio" name="formation_a_distance20" id="formation_a_distance2_20" value="non">
                          <label class="form-check-label" for="formation_a_distance2_20">NON</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div id="title_radio" class="col-sm-8 title_radio">
                    @error('periode_incubation21')
                      <div class="text-danger">{{$message}}</div>
                    @enderror
                        <p><span class="title_input">21. </span> A l’issue de la période d’incubation, ACCEPTERIEZ-VOUS que votre Projet apparaisse dans les pages internet de KIC et éventuellement de ses partenaires ?</p>
                    </div>
                    <div class="col-sm-4 buttom_radio">
                      <div class="form-check form-check-inline text_radio">
                          <input class="form-check-input" type="radio" name="periode_incubation21" id="periode_incubation1_21" value="oui">
                          <label class="form-check-label" for="periode_incubation1_21">OUI</label>
                      </div>
                      <div class="form-check form-check-inline text_radio">
                          <input class="form-check-input" type="radio" name="periode_incubation21" id="periode_incubation2_21" value="non">
                          <label class="form-check-label" for="periode_incubation2_21">NON</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div id="title_radio" class="col-sm-8 title_radio">
                    @error('approuve_le_reglement22')
                      <div class="text-danger">{{$message}}</div>
                    @enderror
                        <p><span class="title_input">22. </span> Avez-vous lu et approuvez-vous le règlement du programme KIC ?</p>
                    </div>
                    <div class="col-sm-4 buttom_radio">
                      <div class="form-check form-check-inline text_radio">
                          <input class="form-check-input" type="radio" name="approuve_le_reglement22" id="approuve_le_reglement22" value="oui">
                          <label class="form-check-label" for="approuve_le_reglement22">OUI</label>
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
                    @error('information_supplementaire23')
                      <div class="text-danger">{{$message}}</div>
                    @enderror
                    <textarea class="form-control" name="information_supplementaire23" id="information_supplementaire23" style="height: 100px" placeholder="nombre de caractère max (0/600)*" maxlength="600" required >{{old('information_supplementaire23')}}</textarea>
                  </div>
                  <div class="form-group">
                    <br/>
                    @error('confirm_info')
                      <div class="text-danger">{{$message}}</div>
                    @enderror

                    <input type="checkbox" class="form-check-input" name="confirm_info" id="confirm_info" required />
                    <label for="confirm_info" class="form-label text_confirm">Je confirme que toutes les informations fournies dans ce formulaire sont exactes et véridiques</label> 
                  </div>
                  <div class="form-group">
                    <br/>
                    <p id="text_nb">NB : Associez dans ce formulaire votre portrait photo (haute définition), et votre curriculum vitae (CV).</p>
                    <!--label for="formFileSm" class="form-label">Small file input example</label-->
                    <!--div class="">
                      <span>votre portrait photo</span>
                      <input class="form-control form-control-sm" name="avatar1" id="document_lie" type="file">
                    </div-->
                    <!--br/-->
                    <!--div class="">
                      <span> la copie de votre carte d’identité </span>
                      <input class="form-control form-control-sm" name="carteIdent" id="document_lie" type="file">
                    </div--><!--br/-->
                    <div class="">
                      <span>curriculum vitae (CV) et portrait photo</span>
                      <input class="form-control form-control-sm" name="cv1[]"  id="document_lie" type="file" accept="image/*.pdf" multiple required />
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
            <div class="col-sm-8 text-center">

              <button type="submit" class="btn btn-primary w-100 fw-bold">SOUMETTRE</button>
            </div>
          </div>        
        </div>
      </div>
      </form>
    <!-- end content form -->
  
  <!-- End section formulaire appel a projet  -->

@endsection
