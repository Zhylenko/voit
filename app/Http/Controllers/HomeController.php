<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Review;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $reviews = Review::all();
        
        return view('home.index', ['reviews' => $reviews]);
    }
}
