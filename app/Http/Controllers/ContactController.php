<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Http\Requests\ContactRequest;

use App\Models\Contact;

use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        //Contact page
    }

    public function send(ContactRequest $request)
    {
        $contact = new Contact;
        $contact->new($request);

        Mail::to('zhylenko.vlad@gmail.com')
                ->send(new ContactMail($request));
    }
}
