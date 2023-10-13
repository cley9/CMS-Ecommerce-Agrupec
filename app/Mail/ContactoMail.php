<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactoMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $remitName;
    public $remitMail;
    public $remitAsunto;
    public $remitMensaje;

    public function __construct($remitenteName,$remitenteMail,$remitenteAsunto,$remitenteMensaje)
    {
        // $this->asunto=$asunto;
        // $this->msg=$msg;
        $this->remitName = $remitenteName;
        $this->remitMail = $remitenteMail;
        $this->remitAsunto = $remitenteAsunto;
        $this->remitMensaje = $remitenteMensaje;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            // asunto
            from: new Address($this->remitMail, $this->remitName),
            // this is statico el correo
            // from: new Address('Agrupec@gmail.com', 'Agrupec.com'),
            subject: 'Contacto Email',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            // "this is a prueba",
            view: 'Mail.contactoAgrupec',
        );
        // view('Admin.Mail.body');
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
