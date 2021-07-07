<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use App\Http\Requests\RegisterRequest;

class RegisterMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;

    protected $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(RegisterRequest $request)
    {
        $this->subject  = trans('mail.subjects.register');
        $this->data     = $request;
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

        return $this->view('mail.auth.register.index')
                    ->with([
                        'title'         => $subject,
                        'password'      => $data->password,
                    ])
                    ->subject($subject);
    }
}
