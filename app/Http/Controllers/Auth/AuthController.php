<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AuthRequest;

class AuthController extends Controller
{

    public function login(AuthRequest $request)
    {
        $token = Auth::attempt($request->validated());

        if (!$token) return response()->errorResponse(null, 404);

        return response()->successResponse([
            'user' => Auth::user(),
            'token' => $token,
        ]);
    }

    public function logout()
    {
        return response()->successResponse(Auth::logout());
    }

}
