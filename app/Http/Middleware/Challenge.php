<?php

namespace App\Http\Middleware;

use App\Models\Challenge as ModelsChallenge;
use App\Models\UsersChallenge;

use Closure;
use Illuminate\Support\Facades\Cookie;

class Challenge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (isset($request->auth) && $request->auth === true) {

            $authCookie = json_decode(Cookie::get('auth'), 1);
            $challenge  = ModelsChallenge::where('active', 1)->first();

            if ($challenge === null) {
                return redirect()->back();
            }

            $usersChallenge = UsersChallenge::where([['user_id', $authCookie['id']], ['challenge_id', $challenge->id]])->first();

            if ($usersChallenge !== null) {
                $json = [
                    'message' => '',
                    'errors' => [
                        'answer' => trans('challenge.passed'),
                    ]
                ];
                return response()->json($json, 403);
            }

            return $next($request);
        }

        return response('', 403);
    }
}
