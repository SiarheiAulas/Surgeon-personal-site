<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class Feedback extends Mailable
{
    use Queueable, SerializesModels;

    public $header;
    public $email;
    public $sender;
    public $text;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->header=$request->input('header');
        $this->email=$request->input('email');
        $this->sender=$request->input('sender');
        $this->text=$request->input('text');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('siarhei.aulas@gmail.com','Feedback')->replyTo($this->email)->subject($this->header)->markdown('email.feedback');
    }
}
