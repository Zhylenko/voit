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
        $request->password = $this->passGenerator();

        $user = new User;
        $user->create($request);

        return Mail::to($request->email)
                    ->send(new RegisterMail($request));
    }

    public function login(LoginRequest $request)
    {
        # code...
    }

    public function logout()
    {
        # code...
    }

    //Generates random password
    protected function passGenerator()
    {
        $alphabet   = "abcdefghijklmnopqrstuvwxyz";
        $numbers    = "0123456789";
        $password   = "";

        for ($i = 0; $i < 4; $i++) { 
            $password .= $numbers[mt_rand(0, strlen($numbers))];
        }

        for ($i = 0; $i < 2; $i++) { 
            $password .= $alphabet[mt_rand(0, strlen($alphabet))];
        }

        return $password;
    }

    //Save login
    protected function saveCookies(User $user)
    {
        # code...
    }
}
