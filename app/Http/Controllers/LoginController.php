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
        ]);

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('messages')->with('success', 'Bienvenido de nuevo');
        }

        else {
            return back()->withErrors([
                'email' => 'Las credenciales no son correctas.',
            ])->onlyInput('email');
        }
    }
}
