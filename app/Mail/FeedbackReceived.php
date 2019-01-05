<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FeedbackReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $comment;
    public function __construct($name, $comment)
    {
        $this->name = $name;
        $this->comment = $comment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('baba2box@gmail.com')
            ->view('emails.contact');
    }
}
