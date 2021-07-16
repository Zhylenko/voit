<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Question;

class ChallengeController extends Controller
{
    public function get(Request $request)
    {
        //dd($request->auth);
        $questions = Question::where('id', $request->id)->first();
        $questions->answers;
        return json_encode($questions);
    }
}
