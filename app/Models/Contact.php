<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\ContactRequest;

class Contact extends Model
{
    public function create(ContactRequest $request)
    {
        $this->name = $request->name;
        $this->surname = $request->surname;
        $this->email = $request->email;
        $this->message = $request->message;
        $this->ip = $request->ip();

        $this->save();

        return $this;
    }
}
