<?php

namespace App\Http\Controllers\Auth;

use App\Enums\Role;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function show()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'unique:users'],
            'name' => 'required',
            'password' => ['required', 'confirmed', Password::defaults()]
        ]);

        $user = new User;

        $user->role = Role::Member;
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = \Hash::make($request->get('password'));

        $user->saveOrFail();

        return $user;
    }
}
