<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Review;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        //return $request->auth;
        $reviews = Review::all();
        
        return view('home.index', [
            'auth'      => $request->auth,
            'reviews'   => $reviews,
        ]);
    }
}
