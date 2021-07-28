<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cookie;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;

use App\Models\User;

use App\Mail\RegisterMail;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        $request->password = $this->passwordGenerator();

        if($user == null) {

            $user = new User;
            $user->createNewUser($request);

        }else if($user !== null && $user->verified_at === null) {

            //Check last generating password
            $diff = time() - $user->updated_at->getTimestamp();

            if($diff >= config('auth.password_timeout')) {

                $user->updatePassword($request);

            }else {
                $json = [
                    'message' => '',
                    'errors' => [
                        'timeout' => trans('auth.timeout'),
                    ]
                ];
                return response()->json($json, 403);
            }

        }else {
            $json = [
                'message' => '',
                'errors' => [
                    'email' => trans('auth.exists'),
                ]
            ];
            return response()->json($json, 403);
        }

        Mail::to($request->email)
            ->send(new RegisterMail($request));
    }

    public function login(LoginRequest $request)
    {
        $user = User::where('email', '=', $request->email)->first();

        if(!password_verify($request->password, $user->password)) {
            $json = [
                'message' => '',
                'errors' => [
                    'email' => trans('auth.failed'),
                ]
            ];
            return response()->json($json, 403);
        }

        if ($user->verified_at === null) {
            $user->verifyUser();
        }

        $hash   = password_hash($user->email, PASSWORD_BCRYPT);
        $device = substr($hash, -6);

        $cookieHash = $user->cookie_hash;
        $cookieHash[$device] = $hash;

        $user->updateCookieHash($cookieHash);

        $cookieData = json_encode([
            'id'    => $user->id,
            'hash'  => $hash,
        ]);

        $cookieAuth     = Cookie::make('auth', $cookieData, config('auth.cookie_life'));
        $cookieDevice   = Cookie::make('device', $device, config('auth.cookie_life'));

        return response('')
                    ->withCookie($cookieAuth)
                    ->withCookie($cookieDevice);
    }

    public function logout(Request $request)
    {
        if(Cookie::get('auth') !== null && Cookie::get('device') !== null) {
            $auth    = json_decode(Cookie::get('auth'), 1);
            $device  = Cookie::get('device');

            $id      = $auth['id'];
            $hash    = $auth['hash'];

            $user       = User::where('id', $id)->first();
            $cookieHash = $user->cookie_hash;

            $cookieHash = array_diff($cookieHash, [$device => $hash]);

            $user->updateCookieHash($cookieHash);
        }
        
        return redirect()
                    ->back()
                    ->withCookie(Cookie::forget('device'))
                    ->withCookie(Cookie::forget('auth'));
    }

    protected function passwordGenerator()
    {
        $alphabet   = "abcdefghijklmnopqrstuvwxyz";
        $alphabetLength = strlen($alphabet);
        $numbers    = "0123456789";
        $numbersLength = strlen($numbers);
        $password   = "";

        for ($i = 0; $i < 4; $i++) { 
            $password .= $numbers[mt_rand(0, $numbersLength - 1)];
        }

        for ($i = 0; $i < 2; $i++) { 
            $password .= $alphabet[mt_rand(0, $alphabetLength - 1)];
        }

        return $password;
    }
}
