<?php

namespace App\Http\Middleware;

use Closure;

use App\Models\User;

use App\Http\Requests\LoginRequest;

class Auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(LoginRequest $request, Closure $next)
    {
        return $next($request);
    }
}
