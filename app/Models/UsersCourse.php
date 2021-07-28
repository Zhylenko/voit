<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersCourse extends Model
{
    public function addUser(User $user, Course $course)
    {
        $this->user_id   = $user->id;
        $this->course_id = $course->id;

        $this->save();
    }
}
