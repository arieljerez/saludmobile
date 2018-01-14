<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RecuperarAcceso extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $documento;
    public $fecha_nacimiento;
    public $clave;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email,$documento,$fecha_nacimiento,$clave)
    {
        $this->email = $email;
        $this->documento = $documento;
        $this->fecha_nacimiento = $fecha_nacimiento;
        $this->clave = $clave;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.auth.recuperaracceso');
    }
}
