<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Routing\Route;

class ResetPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($link = '')
    {
        $this->subject      = trans('mail.subjects.reset.password');
        $this->data         = $link;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data       = $this->data;
        $subject    = $this->subject;

        return $this->view('mail.auth.reset.password')
                    ->with([
                        'title'         => $subject,
                        'link'          => $data,
                    ])
                    ->subject($subject);
    }
}
