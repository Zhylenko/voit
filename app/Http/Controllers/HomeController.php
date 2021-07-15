<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Review;
use App\Models\Question;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        //dd($request->auth);
        $questions = new Question;
        $reviews = Review::all();
        
        return view('home.index', [
            'auth'      => $request->auth,
            'reviews'   => $reviews,
        ]);
    }
}
