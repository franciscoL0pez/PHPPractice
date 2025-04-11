<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    //validate user
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]

        , [
            'email.required' => 'The email is required.',
            'email.email' => 'The email must be a valid email address.',
            'password.required' => 'The password is required.',
            'password.min' => 'The password must be at least 6 characters.',
        ]);

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('messages')->with('success', 'Bienvenido de nuevo');
        }

        else {
            return back()->withErrors([
                'email' => 'The credentials do not match.',
            ])->onlyInput('email');
        }
    }
}
