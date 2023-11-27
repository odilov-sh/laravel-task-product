<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use Spatie\FlareClient\Api;

class AuthApiController extends Controller
{
    public function login(LoginRequest $request)
    {
        $request->authenticate();
        return response()->json([
            'user' => $request->user(),
            'token' => $request->user()->createToken('user')->plainTextToken,
        ]);
    }
}
