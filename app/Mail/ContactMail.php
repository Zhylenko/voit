<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use App\Http\Requests\ContactRequest;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;

    protected $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ContactRequest $request)
    {
        $this->subject  = trans('mail.subjects.contact');
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

        return $this->view('mail.contact.index')
                    ->with([
                        'title'     => $subject,
                        'name'      => $data->name,
                        'surname'   => $data->surname,
                        'email'     => $data->email,
                        'text'      => $data->message,
                    ])
                    ->subject($subject);
    }
}
