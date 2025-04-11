<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ProfileController extends Controller
{

    public function show():View
    {

        $user = Auth::user();

        return view('profile.profile', compact('user'));
    }

    public function edit():View
    {
        $user = Auth::user();
        return view('profile.edit_profile', compact('user'));
    }


    public function update(Request $request):RedirectResponse
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
        ]);

        $user->update($request->only('name', 'email'));

        return redirect()->route('profile')->with('success', 'Perfil actualizado correctamente.');
    }


}
