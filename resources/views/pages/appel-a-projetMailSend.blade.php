<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>View appel a projet</title>
	<link href="{{ asset('css/style/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<style>
		body{
			background-color: red;
		}
	</style>
</head>
<body>
	
	<h3 class=""><span class="numerotation_section">I. </span>RENSEIGNEMENTS GENERAUX SUR LE PROJET</h3>

	<h4>1. Intitulé du Projet</h4>
		<h5 class="text-danger">{{ $details['intitule_projet1'] }}</h5>

	<h4>2. Résumé du rojet</h4>
		<h5>- En français</h5>
		<p>{{ $details['Resume_projet_fr2'] }}</p>
		<h5>- En Anglais</h5>
		<p>{{ $details['Resume_projet_us2'] }}</p>

	<h4>3. Domaine/ secteur du projet et Objectifs de Développement Durable (ODD) correspondants</h4>
		<p>{{ $details['secteur_projet3'] }}</p>

	<h4>4. Localisation du Projet (éventuellement)</h4>
		<p>{{ $details['Localisation_projet4'] }}</p>

	<h4>5.Durée du Projet (éventuellement)</h4>
		<p>{{ $details['Duree_projet5'] }}</p>

	<h4>6. Financement du Projet (éventuellement)</h4>
		<p>{{ $details['Financement_projet6'] }}</p>

	<h4>7. Description du Projet</h4>
		<p>{{ $details['Description_projet7'] }}</p>

	<h4>8. Objectifs généraux du Projet</h4>
		<p>{{ $details['Objectifs_projet8'] }}</p>

	<h4>9. Objectifs spécifiques du Projet</h4>
		<p>{{ $details['Objectifs_spécifiques_projet9'] }}</p>

	<h4>9. Objectifs spécifiques du Projet</h4>
		<p>{{ $details['Objectifs_spécifiques_projet9'] }}</p>

	<h4>10. Responsable principal(e) du Projet</h4>
		<table class="table">
			<thead>
		    	<tr>
			      <th scope="col">Prénom</th>
			      <th scope="col">Nom</th>
			      <th scope="col">Postnom</th>
			      <th scope="col">Téléphone</th>
			      <th scope="col">E-mail</th>
		    	</tr>
			</thead>
		  	<tbody>
			    <tr>
			      <th scope="row">{{ $details['prenom_responsable_principal10'] }}</th>
			      <td>{{ $details['nom_responsable_principal10'] }}</td>
			      <td>{{ $details['postnom_responsable_principal10'] }}</td>
			      <td>{{ $details['phone_responsable_principal10'] }}</td>
			      <td>{{ $details['email_responsable_principal10'] }}</td>
			    </tr>
			</tbody>
		</table>

	<h4>11. Autres associé(s) au Projet (éventuellement)</h4>
		<p>1)</p>
		<table class="table">
			<thead>
		    	<tr>
			      <th scope="col">Prénom</th>
			      <th scope="col">Nom</th>
			      <th scope="col">Postnom</th>
			      <th scope="col">Téléphone</th>
			      <th scope="col">E-mail</th>
		    	</tr>
			</thead>
		  	<tbody>
			    <tr>
			      <th scope="row">{{ $details['prenom_associe1'] }}</th>
			      <td>{{ $details['nom_associe1'] }}</td>
			      <td>{{ $details['postnom_associe1'] }}</td>
			      <td>{{ $details['phone_associe1'] }}</td>
			      <td>{{ $details['email_associe1'] }}</td>
			    </tr>
			</tbody>
		</table>
		<p>2)</p>
		<table class="table">
			<thead>
		    	<tr>
			      <th scope="col">Prénom</th>
			      <th scope="col">Nom</th>
			      <th scope="col">Postnom</th>
			      <th scope="col">Téléphone</th>
			      <th scope="col">E-mail</th>
		    	</tr>
			</thead>
		  	<tbody>
			    <tr>
			      <th scope="row">{{ $details['prenom_associe2'] }}</th>
			      <td>{{ $details['nom_associe2'] }}</td>
			      <td>{{ $details['postnom_associe2'] }}</td>
			      <td>{{ $details['phone_associe2'] }}</td>
			      <td>{{ $details['email_associe2'] }}</td>
			    </tr>
			</tbody>
		</table>

	<h4>II. RENSEIGNEMENTS SPECIFIQUES (IDENTIFICATION DES BESOINS D’INCUBATION DU PROJET )</h4>
		<p>Business plan <span> {{ $details['Business_plan'] }}</span></p>
		<p>Leadership entrepreneurial <span> {{ $details['Leadership'] }}</span></p>
		<p>Processus d’élaboration d’un projet entrepreneurial <span> {{ $details['Leadership'] }}</span></p>
		<p>Création d’entreprise en RD Congo <span> {{ $details['Creation'] }}</span></p>
		<p>Propriété intellectuelle, innovation et transfert de technologie <span> {{ $details['propriete'] }}</span></p>
		<p>Analyse de marché et proposition de valeur <span> {{ $details['analyse'] }}</span></p>
		<p>Développement de la productivité et de la compétitivité <span> {{ $details['developpement'] }}</span></p>
		<p>Marketing digital et usage des réseaux sociaux<span> {{ $details['marketing'] }}</span></p>
		<p>Responsabilité de l’entrepreneur face à la réussite et à l’échec<span> {{ $details['responsabilite'] }}</span></p>
		<p>Ethique des affaires /<span> {{ $details['responsabilite'] }}</span></p>
		<p>Sources de financement d’un projet/une entreprise /<span> {{ $details['sources'] }}</span></p>
		<p>Comptabilité et planification financière /<span> {{ $details['comptabilite'] }}</span></p>
		<p>Pitch d’un projet entrepreneurial /<span> {{ $details['pitch'] }}</span></p>
		<p>Anglais des affaires /<span> {{ $details['anglais'] }}</span></p>

	<h3>III. MOTIVATION A LA SOUMISSION DU PROJET</h3>

		<h4>13. Quel est l’état actuel de réalisation/mise en œuvre/implémentation de votre Projet ?</h4>
			<p>{{ $details['etat_actual_du_projet13'] }}</p>

		<h4>14. Quel intérêt portez-vous en soumettant votre projet à Kinshasa Innovation Center (KIC) ?</h4>
			<p>{{ $details['interet_en_soumettant14'] }}</p>

		<h4>15. Votre projet bénéficie-t-il déjà d’un autre soutien ou encadrement (coaching, financement, etc.) ? Si oui, par quel organisme ?</h4>
			<p>{{ $details['projet_beneficie_de_financement15'] }}</p>

		<h4>16. En quoi votre Projet pourrait-il contribuer à la création de valeurs et/ou d’emplois dans le milieu d’implémentation en particulier et dans la ville de Kinshasa en général ?</h4>
			<p>{{ $details['projet_pourrait_contribuer16'] }}</p>

		<p>17. Etes-vous le(la) concepteur(trice) du Projet ci-haut présenté ? <span> {{ $details['concepteur_du_projet17'] }}</span></p>
		<p>18. Détiendrez-vous TOUS les droits de propriété intellectuelle liés au Projet présenté ? <span> {{ $details['propriete_intellectuelle18'] }}</span></p>
		<p>19. Seriez-vous disposé(e) à vous investir en temps et financièrement pour la participation sans paiement à TOUTES les sessions d’incubation organisées par le KIC (4 heures par semaines durant 5 mois) ?<span> {{ $details['investir_en_temps19'] }}</span></p>
		<p>20. Seriez-vous disposé(e) à suivre certains modules de formation à distance, en ligne avec votre propre équipement ?<span> {{ $details['formation_a_distance20'] }}</span></p>
		<p>21. A l’issue de la période d’incubation, ACCEPTERIEZ-VOUS que votre Projet apparaisse dans les pages internet de KIC et éventuellement de ses partenaires ? <span> {{ $details['periode_incubation21'] }}</span></p>
		<p>22. Avez-vous lu et approuvez-vous le règlement du programme KIC ? <span> {{ $details['approuve_le_reglement22'] }}</span></p>
		<p>23. Avez-vous une information supplémentaire et particulière pouvant soutenir votre candidature ? (En rapport avec les conditions d’éligibilité, votre niveau d’étude...) <span> {{ $details['information_supplementaire23'] }}</span></p>
		<p>OUI/ Je confirme que toutes les informations fournies dans ce formulaire sont exactes et véridiques </p>
</body>
</html>