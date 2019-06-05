<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MessageToOrderEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $emailData;
    public function __construct($data, $emailData)
    {

        $emailData = $emailData;
        $data = $data;

        $this->data = $data;
        $this ->emailData = $emailData;

    }

    public function build()
    {
        // dd($this->photoPath);
        return $this->view('mail.emailToOrderContact')->with($this->data , $this->emailData)->subject('Contato AeroSul');
        // ->attachFromStorage($this->photoPath);
    }
}
