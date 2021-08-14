<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\appelAprojet;
use Illuminate\Support\Facades\Mail;

class AppelaprojetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //.php-email-form
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.formAp');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$validation 
        $details = $request->validate([  
            "intitule_projet1"=>"required|min:2",
            "Resume_projet_fr2"=>"required|min:2|max:1600",
            "Resume_projet_us2"=>"required|min:2|max:1600",
            "email_responsable_principal10"=>"email:rfc,dns", 
            "confirm_info"=> "required",
            "secteur_projet3"=>"required|min:2|max:1200",
            "Localisation_projet4"=>"required|min:2|max:200",
            "Duree_projet5"=>"required|min:2|max:200",
            "Financement_projet6"=>"required|min:2|max:600",
            "Description_projet7"=>"required|min:2|max:1600",
            "Objectifs_projet8"=>"required|min:2|max:800",
            "Objectifs_spécifiques_projet9"=>"required|min:2|max:600",
            "nom_responsable_principal10"=>"required|min:2",
            "prenom_responsable_principal10"=>"required|min:2",
            "postnom_responsable_principal10"=>"required|min:2",
            "phone_responsable_principal10"=>"required|min:2",
            "prenom_associe1"=>"nullable",
            "nom_associe1"=>"nullable",
            "postnom_associe1"=>"nullable",
            "phone_associe1"=>"nullable",
            "email_associe1"=>"nullable",
            "prenom_associe2"=>"nullable",
            "nom_associe2"=>"nullable",
            "postnom_associe2"=>"nullable",
            "phone_associe2"=>"nullable",
            "email_associe2"=>"nullable",
            "Business_plan"=> "required|in:oui,non",
            'Leadership'=> 'required|in:oui,non',
            'Processus'=> 'required|in:oui,non',
            'Creation'=> 'required|in:oui,non',
            'propriete'=> 'required|in:oui,non',
            'analyse'=> 'required|in:oui,non',
            'developpement'=> 'required|in:oui,non',
            'marketing'=> 'required|in:oui,non',
            'responsabilite'=> 'required|in:oui,non',
            'ethique'=> 'required|in:oui,non',
            'sources'=> 'required|in:oui,non',
            'comptabilite'=> 'required|in:oui,non',
            'elementaires'=> 'required|in:oui,non',
            'pitch'=> 'required|in:oui,non',
            'anglais'=> 'required|in:oui,non',
            "etat_actual_du_projet13"=>"required|min:2|max:600",
            "interet_en_soumettant14"=>"required|min:2|max:1600",
            "projet_beneficie_de_financement15"=>"required|min:2|max:400",
            "projet_pourrait_contribuer16"=>"required|min:2|max:1200",
            "information_supplementaire23"=>"required|min:2|max:600",
            'concepteur_du_projet17'=> 'required|in:oui,non',
            'propriete_intellectuelle18'=> 'required|in:oui,non',
            'investir_en_temps19'=> 'required|in:oui,non',
            'formation_a_distance20'=> 'required|in:oui,non',
            'periode_incubation21'=> 'required|in:oui,non',
            'approuve_le_reglement22'=> 'required|in:oui,non',
            "cv1"=>"required",

        ]);

        //
        if($request->has('confirm_info') ){
            //Mail::to("jonathandoc411@gmail.com")->send(new appelAprojet($details));
            return back()->with("successSend", "Votre projet est bien envoyer");
        }
           

      
        //"cv1"=>"required",
        //echo "ok". $details['periode_incubation21'];//"confirm_info"=>"required",
        //var_dump($request->file('cv1'));
        //var_dump($details['confirm_info']);
        //'checkbox' =>'accepted'
        /*if(!$details->passes()){
            return response()->json(['status'=>0, 'error'=>$details->errors()->toArray()]);
        }else{
            return response()->json(['status'=>1, 'msg'=>'Le projet est envoyer avec Success']);
        }*/
        ///Mail::to("jonathandoc411@gmail.com")->send(new appelAprojet($details));
       // Mail::to("jonathandoc411@gmail.com")->send(new appelAprojet($details));
            //return redirect()->to(app('url')->previous(). '#rejoindreReseaux')->with("successSend", "Email envoyer avec succée");
      /* return back()->with("successSend", "Si les errreur en rouge n'est sont pas visible donc les information sont bien envoyer");*/

      return back()->with("ValidationError", "Verifier bien les Champs une ou plusier n'est pas bien remplie");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
