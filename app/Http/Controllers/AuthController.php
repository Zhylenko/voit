<?php

namespace App\Http\Controllers;

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
        $user = User::where('email', '=', $request->email)->first();

        $request->password = $this->passwordGenerator();

        if($user == null) {

            $user = new User;
            $user->createNewUser($request);

        }else if($user !== null && $user->verified_at == null) {

            //Check last generating password
            $diff = time() - $user->updated_at->getTimestamp();

            if($diff >= config('auth.password_timeout')) {

                $user->updatePassword($request);

            }else {
                return 'timeout error';
            }

        }else {
            return 'user already exists';
        }

        Mail::to($request->email)
            ->send(new RegisterMail($request));
    }

    public function login(LoginRequest $request)
    {
        $user = User::where('email', '=', $request->email)->first();

        if(password_verify($request->password, $user->user)) {
            $user->verifyUser();
        }else{
            return 'wrong password';
        }
    }

    public function logout()
    {
        # code...
    }

    protected function passwordGenerator()
    {
        $alphabet   = "abcdefghijklmnopqrstuvwxyz";
        $numbers    = "0123456789";
        $password   = "";

        for ($i = 0; $i < 4; $i++) { 
            $password .= $numbers[mt_rand(0, strlen($numbers) - 1)];
        }

        for ($i = 0; $i < 2; $i++) { 
            $password .= $alphabet[mt_rand(0, strlen($alphabet) - 1)];
        }

        return $password;
    }
}
