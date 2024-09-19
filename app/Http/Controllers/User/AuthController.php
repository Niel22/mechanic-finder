<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register()
    {
        if (Auth::guard('mechanic')->check()) {
            return redirect()->route('mechanic.home');
        } else {
            return view('user.pages.auth.register');
        }
    }

    public function login()
    {
        if (Auth::guard('mechanic')->check()) {
            return redirect()->route('mechanic.home');
        } else {
            return view('user.pages.auth.login');
        }
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return back();
    }
}
