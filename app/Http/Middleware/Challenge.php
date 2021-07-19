<?php

namespace App\Http\Middleware;

use Closure;

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
        if(isset($request->auth) && $request->auth === true) {
            return $next($request);
        }

        return response('', 403);
    }
}
