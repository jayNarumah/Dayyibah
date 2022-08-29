<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function login(Request $request)
    {
        $rules = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:30',
        ]);

        if (auth()->attempt($rules)) {
            $user = auth()->user();

            return response()->json([
                'user' => $user,
                'access_token' => $user->createToken('access_token')->plainTextToken,
                'token_type' => 'Bearer',
            ]);

            return response()->json(['error' => 'Can not login, please try again later'], 403);
        }
    }

    function logout()
    {
        auth()->user()->currentAccessToken()->delete();
    }
}
