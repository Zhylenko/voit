<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function characteristics()
    {
        return $this->hasMany('App\Models\Characteristic');
    }

    public function courseLinks()
    {
        return $this->hasMany('App\Models\CourseLink');
    }
}
