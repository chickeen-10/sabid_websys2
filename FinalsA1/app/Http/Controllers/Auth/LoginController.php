<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('dashboard')->with('success', 'Login Successful!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Log out the user
    
        $request->session()->invalidate(); // Invalidate the session
        $request->session()->regenerateToken(); // Regenerate CSRF token
    
        return redirect()->route('login.form')->with('success', 'You have been logged out.');
    }
    
}
