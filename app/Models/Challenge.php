<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    public function questions()
    {
        return $this->hasManyThrough('App\Models\Answer', 'App\Models\Question');
    }
}
