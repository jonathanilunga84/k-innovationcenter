<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('pages.Accueil'/*, compact("etudiants")*/);
    }

    public function appelaprojet(){
        return redirect()->to(app('url')->previous(). '#Appel-aprojet');
    }
    public function rejoindreReseaux(){
        return redirect()->to(app('url')->previous(). '#rejoindreReseaux');
    }

}
