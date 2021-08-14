<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Mail\TestMarkdownMail;
//use Validator;


class HomeController extends Controller
{
    public function home(){
        //return view('pages.Accueil'/*, compact("etudiants")*/);
        return view('pages.Accueil');
    }
    public function ct(Request $request){
        //return view('pages.Accueil'/*, compact("etudiants")*/);
        return view('pages.ajax');
    }
    
    public function ct2(Request $request){
        $validator = validator::make($request->all(),[
            "name"=>"required|min:2",
            "email"=>"email:rfc,dns",
            "subject"=>"required|min:2",
            "msg"=>"required|min:2", 
        ]); 
        
        if($validator->fails()){ //passes
            /*return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
            return back()->with("errorSend", "Error renvoyer Echec");*/
            /*return back()->withErrors($validator)
                        ->withInput();*/ //errors()->toArray()
            return response()->json(['status'=>0, 'error'=>$validator->messages()]);
        }
        else{
            $details = $request->all();
            //return response()->json(['status'=>1, 'message'=>'Email envoyé avec succée']);
            //return back()->with("successSend", "Email envoyer avec succée");
            Mail::to("jonathandoc411@gmail.com")->send(new ContactMail($details));
            //Mail::to("jonathandoc411@gmail.com")->send(new TestMarkdownMail($details));
                     
            return response()->json(['status'=>1, 'messages'=>'Email envoyé avec succée']);
        }
    }

    public function appelaprojet(){
        return redirect()->to(app('url')->previous(). '#Appel-aprojet');
    }

    public function rejoindreReseaux(){
        return redirect()->to(app('url')->previous(). '#rejoindreReseaux');
    }

    public function contact (Request $request){
        $validator = validator::make($request->all(),[
            "name"=>"required|min:2",
            "email"=>"required|email:rfc,dns",
            "subject"=>"required|min:2",
            "msg"=>"required|min:2", 
        ]);                 
        //return back()->with("successSend", "Email envoyer avec succée");
        //return redirect()->to(app('url')->previous(). '#rejoindreReseaux')->with("successSend", "Email envoyer avec succée");
        if($validator->fails()){ //passes
            /*return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
            return back()->with("errorSend", "Error renvoyer Echec");*/
            /*return back()->withErrors($validator)
                        ->withInput();*/ //errors()->toArray() my num airtel 097-11-52-092 / *1023*15#
            return response()->json(['status'=>0, 'error'=>$validator->messages()]);
        }
        else{
            $details = $request->all();
            //return response()->json(['status'=>1, 'message'=>'Email envoyé avec succée']);
            //return back()->with("successSend", "Email envoyer avec succée");
            Mail::to("kicprojet21@gmail.com")->send(new ContactMail($details));
            /*Mail::to("info@k-innovationcenter.com")->send(new ContactMail($details));
            Mail::to("info@ccsc.ch")->send(new ContactMail($details));*/
            //Mail::to("jonathandoc411@gmail.com")->send(new TestMarkdownMail($details));
                     
            return response()->json(['status'=>1, 'messages'=>'Email envoyé avec succée']);
        }
    }

}
