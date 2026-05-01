<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\StoreSessionsRequest;
use Illuminate\Validation\Rules\Password;

class SessionsController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            return redirect('/');
        }

        return back()->withErrors([
            'password' => 'Email or password is incorrect',
        ]);
    }

    public function destroy() 
    {
        Auth::logout();

        return redirect('/');
    }
}
