<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersCourse extends Model
{
    public function usersCourses()
    {
        return $this->hasManyThrough('App\Models\User', 'App\Models\Course');
    }
}
