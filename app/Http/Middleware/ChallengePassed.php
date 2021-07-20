<?php

namespace App\Http\Middleware;

use App\Models\Challenge as ModelsChallenge;
use App\Models\UsersChallenge;

use Closure;
use Illuminate\Support\Facades\Cookie;

class ChallengePassed
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
        $request->passed = false;

        if (isset($request->auth) && $request->auth === true) {

            $authCookie = json_decode(Cookie::get('auth'), 1);
            $challenge  = ModelsChallenge::where('active', 1)->first();

            $usersChallenge = UsersChallenge::where([['user_id', $authCookie['id']], ['challenge_id', $challenge->id]])->first();

            if ($usersChallenge !== null) {
                $request->passed = true;
            }
        }

        return $next($request);
    }
}
