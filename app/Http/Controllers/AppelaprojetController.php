<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppelaprojetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $details = $request->validate([
            "intitule_projet"=>"required|min:2",
            //"email"=>"email:rfc,dns",
            "Resume_projet_fr2"=>"required|min:2|max:1600",
            "Resume_projet_us2"=>"required|min:2|max:1600",
            "secteur_projet3"=>"required|min:2|max:1200",
            "Localisation_projet4"=>"required|min:2|max:200",
            "Duree_projet5"=>"required|min:2|max:200",
            "Financement_projet6"=>"required|min:2|max:600",
            "Description_projet7"=>"required|min:2|max:1600",
            "Objectifs_projet8"=>"required|min:2|max:800",
            "Objectifs_spécifiques_projet9"=>"required|min:2|max:600",
            "nom_responsable_principal10"=>"required|min:2|alpha",
            "prenom_responsable_principal10"=>"required|min:2|alpha",
            "postnom_responsable_principal10"=>"required|min:2|alpha",
            "phone_responsable_principal10"=>"required|min:2|alpha",
            "email_responsable_principal10"=>"email:rfc,dns",
            "prenom_associe1"=>"min:2|alpha",
            "nom_associe1"=>"min:2|alpha",
            "postnom_associe1"=>"min:2|alpha",
            "phone_associe1"=>"min:2|alpha",
            "email_associe1"=>"min:2|alpha",
            "prenom_associe2"=>"min:2|alpha",
            "nom_associe2"=>"min:2|alpha",
            "postnom_associe2"=>"min:2|alpha",
            "phone_associe2"=>"min:2",
            "email_associe2"=>"min:2|alpha",


            //""=>"required|min:2|max:200",
        ]);
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
