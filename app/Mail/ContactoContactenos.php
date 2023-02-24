<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactoContactenos extends Mailable
{
    use Queueable, SerializesModels;

    public $datosFormulario;


    public function __construct($datosFormulario)
    {
        $this->datosFormulario = $datosFormulario;
    }

    public function build()
    {
        return $this->subject('Solicitud formulario contáctenos')->view('mails.contactoContactanos');
    }
}