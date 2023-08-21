<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        if (!$token = auth()->attempt(['email' => $request->email, 'password' => $request->password])){
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return response()->json([
           'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => 60,
//            'refresh_token' => auth()->refresh(),
        ]);

    }

    public function me()
    {
        return 'only login user can access this page';
    }

    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }

}
