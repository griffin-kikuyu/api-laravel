<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signup(Request $request)
    {
        $user = new User();
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        // Assuming there is a 'password' field in the User model
        $user->password = bcrypt($request->input('password'));
        $user->save();

        return response()->json(['message' => 'User registered successfully'], 201);
    }
    public function login(Request $request)
        {
            $credentials = $request->only(['username', 'password']);
            if (Auth::attempt($credentials)){
                return response()->json(['message', 'login succeful'], 200);
            }
            else{
                return response()->json (['message', 'invalid credentials'], 401);
            }
        }
}
