<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function issueANewToken()
    {
        $user = auth()->user();
        $token = $user->createToken('auth_token')->plainTextToken;

        return view('tokens', ['token' => $token]);
    }

    public function getToken()
    {
        $user = auth()->user();
        $token = $user->currentAccessToken();

        return view('tokens', ['token' => $token]);
    }
}
