<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Http\Requests\RegisterRequest;

class User extends Model
{
    protected $casts = [
        'cookie_hash'   => 'array',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'verified_at',
    ];


    public function createNewUser(RegisterRequest $request)
    {
        $this->email        = $request->email;
        $this->password     = password_hash($request->password, PASSWORD_BCRYPT);
        $this->cookie_hash  = [];

        $this->save();
    }

    public function updatePassword(RegisterRequest $request)
    {
        $this->password     = password_hash($request->password, PASSWORD_BCRYPT);

        $this->save();
    }

    public function verifyUser()
    {
        $this->verified_at  = time();

        $this->save();
    }
}
