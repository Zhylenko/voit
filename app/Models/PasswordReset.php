<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function add(User $user, $hash = '')
    {
        $this->user_id      = $user->id;
        $this->old_password = $user->password;
        $this->hash = $hash;

        $this->save();

        return $this;
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function updateNewPassword($password)
    {
        $this->new_password = password_hash($password, PASSWORD_BCRYPT);

        $this->save();
    }
}
