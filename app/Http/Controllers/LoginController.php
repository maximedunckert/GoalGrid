<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validate the request data
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Attempt to log the user in
        if (auth()->attempt($request->only('email', 'password'))) {
            // Redirect to the home page on success
            return redirect()->route('home');
        }

        // Redirect back with an error message on failure
        return back()->withErrors(['email' => 'Invalid credentials.']);
    }
    public function index()
    {
        return view('login');
    }
}
