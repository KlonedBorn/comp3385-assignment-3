<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User; // Import the User model
use Illuminate\Support\Facades\Auth; // Import the Auth facade

class AuthController extends Controller
{
    function create()
    {
        return view('login');
    }
    /**
     * S
     */
    function store(Request $request): RedirectResponse
    {
        $creds = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($creds)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        return redirect('dashboard');
        // return back()->withErrors([
        //     'error' => 'Invalid credentials. Check the email address and password entered.',
        // ])->withInput($request->only('email'));
    }
}
