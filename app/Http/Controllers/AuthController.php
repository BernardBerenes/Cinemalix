<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registerView() {
        return view('Authentication.Register');
    }

    public function register(Request $request) {
        $request->validate([
            'username' => 'required|string|min:3|max:20',
            'email' => 'required|string',
            'password' => 'required|string|min:8',
            'dob' => 'required|date',
            'confirm-password' => 'required|string'
        ]);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'dob' => $request->dob,
            'balance' => 0
        ]);

        return redirect(route('registerView'));
    }

    public function loginView() {
        return view('Authentication.Login');
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect(route('contactSupport'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.'
        ])->onlyInput('email');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('loginView'));
    }
}
