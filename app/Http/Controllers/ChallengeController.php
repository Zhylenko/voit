<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Question;

class ChallengeController extends Controller
{
    public function get(Request $request)
    {
        $questions = Question::where('id', $request->id)->first();
        $questions->answers;
        $json = $questions;

        return response()->json($json, 200);
    }
}
