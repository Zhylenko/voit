<?php

namespace App\Http\Middleware;

use Closure;

use App\Models\User;

use Illuminate\Support\Facades\Cookie;

class Auth
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
        $auth = Cookie::get('auth');

        if($auth != null){
            $id = $auth;
            $user = User::where('id', '=', $id)->first();
            $request->auth = $user->cookie_hash;
        }

        return $next($request);
    }
}
