<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\CourseMail;

use App\Models\Course;
use App\Models\User;
use App\Models\UsersCourse;

class CourseController extends Controller
{
    public function payment(Request $request)
    {
        $course_id   = $request->id;
        $course      = Course::where('id', $course_id)->with('links')->first();

        $userId      = 1;
        $user        = User::where('id', $userId)->first();

        $usersCourse = new UsersCourse();
        $usersCourse->addUser($user, $course);

        Mail::to(config('personal.mail.to'))
            ->send(new CourseMail($course, $user));
    }
}
