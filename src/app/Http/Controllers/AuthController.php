<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        return response()->json([
            'messae' => 'hellow world'
        ]);
//        if (!$token = auth()->attempt(['email' => $request->email, 'password' => $request->password])){
//            return response()->json(['error' => 'Unauthorized'], 401);
//        }
//
//        return response()->json([
//           'access_token' => $token,
//            'token_type' => 'bearer',
//            'expires_in' => 60,
//        ]);

    }

    public function me()
    {
        return 'only login user can access this page';
    }

}
