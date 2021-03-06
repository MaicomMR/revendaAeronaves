<?php

namespace App\Mail;

use App\BuyContactModel;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderContact extends Mailable
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
        return $this->view('mail.emailOrderContact')->with($this->data , $this->emailData)->subject('Contato Comprador');
        // ->attachFromStorage($this->photoPath);
    }
}
