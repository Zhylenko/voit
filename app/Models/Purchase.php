<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo('App\Http\Models\User');
    }

    public function course()
    {
        return $this->belongsTo('App\Http\Models\Course');
    }

    public function createPurchase(User $user, Course $course, $status = '')
    {
        $this->user_id      = $user->id;
        $this->course_id    = $course->id;
        $this->order_id     = time();
        $this->price        = $course->price;
        $this->status       = $status;

        $this->save();

        return $this;
    }

    public function updateStatus($status)
    {
        $this->status       = $status;
        
        $this->save();

        return $this;
    }
}
