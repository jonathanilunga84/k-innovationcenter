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
        //
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
        $details = $request->validate([
            "intitule_projet"=>"required|min:2",
            "Resume_projet_fr2"=>"required|min:2|max:1600"
        ]);
        //var_dump($details);

        /*if(!$details->passes()){
            return response()->json(['status'=>0, 'error'=>$details->errors()->toArray()]);
        }else{
            return response()->json(['status'=>1, 'msg'=>'Le projet est envoyer avec Success']);
        }*/
       // Mail::to("jonathandoc411@gmail.com")->send(new appelAprojet($details));
            //return redirect()->to(app('url')->previous(). '#rejoindreReseaux')->with("successSend", "Email envoyer avec succée");
        //return back()->with("successSend", "Email envoyer avec succée");
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
