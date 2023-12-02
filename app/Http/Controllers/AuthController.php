<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registerView() {
        return view('Authentication.Register');
    }

    public function register(Request $request) {
        $request->validate([
            'username' => 'string|required|min:3|max:20',
            'email' => 'string|required',
            'password' => 'string|required|min:8',
            'dob' => 'date|required'
        ]);

        User::create([
            'Username' => $request->username,
            'Email' => $request->email,
            'Password' => Hash::make($request->password),
            'DOB' => $request->dob,
            'Balance' => 0
        ]);

        return redirect(route('registerView'));
    }
}
