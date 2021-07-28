<?php

namespace App\Http\Middleware;

use App\Models\Challenge as ModelsChallenge;

use Closure;

class ChallengeExists
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
        $challenge  = ModelsChallenge::where('active', 1)->first();

        if ($challenge === null) {
            return redirect()->back();
        }

        return $next($request);
    }
}
