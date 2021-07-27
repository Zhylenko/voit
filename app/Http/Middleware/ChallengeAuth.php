<?php

namespace App\Http\Middleware;

use Closure;

class ChallengeAuth
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
            return $next($request);
        }

        $json = [
            'message' => '',
            'errors' => [
                'answer' => trans('challenge.not.auth'),
            ]
        ];
        return response()->json($json, 403);
    }
}
