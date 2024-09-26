<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        $user = User::where('email', $credentials['email'])->first();

        if(!$user) {
            return response(['message' => 'Неверный адрес электронной почты!'], 401);
        }

        if(!Hash::check($credentials['password'], $user->password)) {
            return response(['message' => 'Неверный пароль!'], 401);
        }

        $token = $user->createToken($credentials['email'])->plainTextToken;
        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function logout(Request $request) {
        $request->user()->tokens()->delete();
        return response([
            'message' => 'Вы успешно вышли из системы.'
        ]);
    }

}
