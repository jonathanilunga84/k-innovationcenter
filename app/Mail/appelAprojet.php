<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

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
        var_dump(details['email_responsable_principal10']);
        $email = $this->details['email_responsable_principal10'];
        return $this->from($email,$email)
                    ->subject($this->details['intitule_projet'])->view('pages.appel-a-projetMailSend');
    }
}
