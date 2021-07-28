<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Models\UsersCourse;

class AccountController extends Controller
{
    public function index(Request $request)
    {
        $usersCourses = false;
        
        if ($request->auth === true) {
            $userId         = json_decode(Cookie::get('auth'), 1)['id'];
            $user           = User::where('id', $userId)->with('courses')->first();
            $usersCourses   = $user->courses;

            foreach ($usersCourses as $course) {
                $course->links;
            }
        }

        return view('account.index', [
            'auth'      => $request->auth,
            'courses'   => $usersCourses,
        ]);
    }
}
