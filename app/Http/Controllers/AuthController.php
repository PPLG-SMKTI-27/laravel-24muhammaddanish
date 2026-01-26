<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $email = 'admin@portfolio.dev';
        $password = 'password123';

        if (
            $request->email === $email &&
            $request->password === $password
        ) {
            session([
                'is_logged_in' => true
            ]);

            return redirect('/about')->with('login_success', true);
        }

        return back()->withErrors([
            'login' => 'Email atau password salah'
        ]);
    }

    public function logout(Request $request)
    {
        Session::flush();
        return redirect('/login');
    }
    
}
