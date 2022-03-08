<?php

namespace App\Http\Controllers;

use App\Enums\Role;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        if (auth()->user()->role === Role::Member) {
            return 'member';
        }

        return redirect()->route('home.admin');
    }

    public function admin()
    {
        return view('admin');
    }

    public function logout()
    {
        \Auth::logout();

        return redirect()->route('auth.login');
    }
}
