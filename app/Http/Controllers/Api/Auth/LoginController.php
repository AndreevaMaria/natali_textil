<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    public function login(Request $request) 
    {
        $creds = $request->only(['email', 'password']);
        if(!$token = auth()->attempt($creds)) {
            return responce()->json(['error' => true, 'message' => 'Неверный логин/пароль'], 401);
        }
        return responce()->json(['token' => $token]);
    }
}
