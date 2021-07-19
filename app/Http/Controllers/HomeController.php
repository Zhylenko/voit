<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Review;
use App\Models\Course;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $courses = Course::where('active', 1)->limit(3)->get();
        $reviews = Review::all();
        
        return view('home.index', [
            'auth'      => $request->auth,
            'courses'   => $courses,
            'reviews'   => $reviews,
        ]);
    }
}
