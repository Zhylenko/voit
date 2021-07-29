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
        $request->auth = false;

        if(Cookie::get('auth') !== null && Cookie::get('device') !== null) {

            $cookieAuth    = json_decode(Cookie::get('auth'), 1);
            $cookieDevice  = Cookie::get('device');

            $id      = $cookieAuth['id'];
            $hash    = $cookieAuth['hash'];

            $user       = User::where('id', $id)->first();
            $cookieHash = $user->cookie_hash;

            if($cookieHash[$cookieDevice] == $hash){
                //Create new hash
                $newHash = password_hash($user->email, PASSWORD_BCRYPT);

                $cookieHash[$cookieDevice] = $newHash;

                $user->updateCookieHash($cookieHash);

                $cookieData = json_encode([
                    'id'    => $user->id,
                    'hash'  => $newHash,
                ]);
                $cookieAuth = Cookie::make('auth', $cookieData, config('auth.cookie_life'));

                $request->auth = true;

            }else{
                return redirect(Route('auth-logout'));
            }
            return $next($request)
                ->withCookie($cookieAuth);
        }

        return $next($request);
    }
}
