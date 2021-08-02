<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Str;

class appelAprojet extends Mailable
{
    use Queueable, SerializesModels;
     public $details;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   
        /*$veg = $this->details['cv1']->getClientOriginalName();
        echo $veg;*/
       // var_dump(details['email_responsable_principal10']);
        $email = $this->details['email_responsable_principal10'];
       $mailss = $this->from($email,$email)
                    ->subject($this->details['intitule_projet1'])
                    ->view('pages.appel-a-projetMailSend');
                    //->attach($this->details['cv1']->getClientOriginalName());
                    //->attach(public_path('images/Appel-a-projets-1.jpg'));
        foreach($this->details['cv1'] as $value) {
            //$extension = $value->getClientOriginalExtension();//." <br />";
           //$filenames = 'Appleaprojet_'.str::random(3).'_'.time().'.'.$extension;
           //echo $name =  $value->getClientOriginalName();
            //$name =  $value->getRealPath().'_'.$extension;
            //$email->attach($value->getRealPath());
            //echo $value." <br />";

            $mailss->attach($value->getRealPath(),[
                'as' => $value->getClientOriginalName()
            ]);
        }
        return $mailss;
    }
}
