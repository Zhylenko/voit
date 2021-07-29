<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Cookie;

use App\Models\Answer;
use App\Models\Challenge;
use App\Models\Question;
use App\Models\Result;
use App\Models\User;
use App\Models\UsersChallenge;


class ChallengeController extends Controller
{
    public function get(Request $request)
    {
        if ($request->passed === true) {
            $json = [
                'message' => '',
                'errors' => [
                    'question' => trans('challenge.passed'),
                ]
            ];
            return response()->json($json, 403);
        }

        if ($request->answer === null && $request->question  === null) {
            //First question
            $challenge       = Challenge::where('active', 1)->first();
            $nextQuestion    = Question::where('challenge_id', $challenge->id)
                                        ->with('answers')
                                        ->where('first', 1)
                                        ->first();

            $scoreCookie     = $this->createScoreCookie();
        } else {
            $question      = Question::where('question', $request->question)->first();
            $answer          = Answer::where([['answer', $request->answer], ['question_id', $question->id]])->first();

            if ($answer === null) {
                $json = [
                    'message' => '',
                    'errors' => [
                        'question' => trans('challenge.not.exists'),
                    ]
                ];
                return response()->json($json, 403);
            }

            $questionId  = $answer->question_id;
            $scoreCookie = json_decode(Cookie::get('score', '[]'), 1);

            if (array_key_exists($questionId, $scoreCookie)) {
                $json = [
                    'message' => '',
                    'errors' => [
                        'question' => trans('challenge.answered'),
                    ]
                ];
                return response()->json($json, 403);
            }

            $scoreCookie[$questionId] = $answer->score;
            $scoreCookie = $this->createScoreCookie($scoreCookie);

            if ($answer->next_question_id !== null) {
                $nextQuestion    = Question::where('id', $answer->next_question_id)->with('answers')->first();
            } else {
                $result = $this->createResult();

                $json = [
                    'message' => '',
                    'result' => $result->name,
                ];
                return response()
                    ->json($json, 200)
                    ->withCookie(Cookie::forget('score'));
            }
        }

        return response()
            ->json($nextQuestion, 200)
            ->withCookie($scoreCookie);
    }

    protected function createResult()
    {
        $authCookie     = json_decode(Cookie::get('auth'), 1);

        $user           = User::where('id', $authCookie['id'])->first();
        $challenge      = Challenge::where('active', 1)->first();
        $score          = $this->getScore();
        return response()->json($score, 200);
        $result         = $this->calculateResult($score);

        $usersChallenge = new UsersChallenge;

        $usersChallenge->saveResult($user, $challenge, $result, $score);

        return $result;
    }

    protected function getAnsweredQuestions()
    {
        $scoreCookie    = json_decode(Cookie::get('score'), 1);
        $result         = array_keys($scoreCookie);

        return $result;
    }

    protected function getScore()
    {
        $scoreCookie    = json_decode(Cookie::get('score'), 1);
        $result         = array_values($scoreCookie);
        $result         = array_sum($result);

        return $result;
    }

    protected function calculateResult($score = 0)
    {
        $results        = Result::all();
        $resultsCount   = count($results);

        for ($i = 0; $i < $resultsCount; $i++) {
            if (($i + 1) != $resultsCount) {
                if ($score >= $results[$i]->score && $score < $results[$i + 1]->score) {
                    $result = $results[$i];
                    break;
                }
            } else {
                $result = $results[$i];
            }
        }

        return $result;
    }

    protected function createScoreCookie($array = [])
    {
        return Cookie::make('score', json_encode($array), config('challenge.cookie_life'));
    }
}
