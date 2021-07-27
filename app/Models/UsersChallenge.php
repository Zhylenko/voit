<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersChallenge extends Model
{
    public function saveResult(User $user, Challenge $challenge, Result $result, $score)
    {
        $this->user_id      = $user->id;
        $this->challenge_id = $challenge->id;
        $this->result_id    = $result->id;
        $this->score        = $score;

        $this->save();

        return $this;
    }

    public function result()
    {
        return $this->belongsTo('App\Models\Result');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function challenge()
    {
        return $this->belongsTo('App\Models\Challenge');
    }
}
