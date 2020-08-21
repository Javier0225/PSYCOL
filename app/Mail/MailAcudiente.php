<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailAcudiente extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Importante";
    public $msgs;
    public function __construct($msgs)
    {
        $this-> msgs = $msgs;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mensajes.acudiente');
    }
}
