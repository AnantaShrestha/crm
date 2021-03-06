<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailable extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.

     *
     * @return void
     */
    public $data;
    public function __construct($data)
    {
        $this->data = $data;
        

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        return $this->from('yo@gmail.com','IMS')
        ->subject($this->data['subject'])
        
        ->view('emails.custom')->with('data');
        
        

    }
}
