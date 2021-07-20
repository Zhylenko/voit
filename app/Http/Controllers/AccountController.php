<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Models\UsersCourse;

class AccountController extends Controller
{
    public function index(Request $request)
    {
        $userId         = json_decode(Cookie::get('auth'), 1)['id'];
        //$usersCourses   = UsersCourse::where([['id', $userId], ['active', 1]])->with('links')->get();
        $usersCourses   = Course::with('links')->get();

        return view('account.index', [
            'auth'      => $request->auth,
            'courses'   => $usersCourses,
        ]);
    }
}
