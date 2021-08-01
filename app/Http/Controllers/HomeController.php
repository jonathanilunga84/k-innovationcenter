<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;


class HomeController extends Controller
{
    public function home(){
        //return view('pages.Accueil'/*, compact("etudiants")*/);
        return view('pages.Accueil');
    }

    public function appelaprojet(){
        return redirect()->to(app('url')->previous(). '#Appel-aprojet');
    }
    public function rejoindreReseaux(){
        return redirect()->to(app('url')->previous(). '#rejoindreReseaux');
    }

    public function contact (Request $request){
        $details = $request->validate([
            "name"=>"required|min:2",
            "email"=>"email:rfc,dns",
            "subject"=>"required|min:2",
            "msg"=>"required|min:2"
        ]);
        //$details[] = $request;
        //var_dump($details['email']);
        Mail::to("jonathandoc411@gmail.com")->send(new ContactMail($details));
        /*Mail::to("info@k-innovationcenter.com")->send(new ContactMail($details));
        Mail::to("info@ccsc.ch")->send(new ContactMail($details));*/
        //return back('')->with("successSend", "Email envoyer avec succée");
        return redirect()->to(app('url')->previous(). '#rejoindreReseaux')->with("successSend", "Email envoyer avec succée");
    }

}
