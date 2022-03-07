<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class LoginController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'exists:users'],
            'password' => ['required', Password::defaults()]
        ]);

        if (\Auth::attempt($request->only(['email', 'password']), true)) {
            return redirect()->route('home');
        }

        return redirect()->route('auth.login')->with([
            'error' => 'Account does not exist with following credentials'
        ]);
    }
}
