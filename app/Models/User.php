<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Http\Requests\RegisterRequest;

class User extends Model
{
    protected $casts = [
        'cookie_hash' => 'array'
    ];

    public function create(RegisterRequest $request)
    {
        $this->email        = $request->email;
        $this->password     = password_hash($request->password, PASSWORD_BCRYPT);
        $this->cookie_hash  = [];

        $this->save();
    }
}
