<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

//
use Symfony\Component\Mime\Email;
class recuperacionMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
    //     $this->view('mail.recupacionMail');
    //     // return $this->view('mail.recupacionMail');

    //     // $this->view('emails.orders.shipped');

    // $this->withSymfonyMessage(function (Email $message) {
    //     $message->getHeaders()->addTextHeader(
    //         'Custom-Header', 'Header Value'
    //     );
    // });
    // return $this;
    return $this->from('Agrupec@agrupec.com', 'AgrupecVentas')
                ->view('mail.recupacionMail');



    }
}
