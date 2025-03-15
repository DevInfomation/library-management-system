<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class LoginController extends Controller
{
    public function login(Request $request) {
        $incomingFields = $request->validate([
            'name' => 'nullable|string',
            'email' => 'required',
            'password' => 'required',
        ]);

        if (auth()->attempt(['email' => $incomingFields['email'], 'password' => $incomingFields['password']])) {
            $request->session()->regenerate();
        }

        return redirect()->route('dashboard');
    }

    public function logout() {
        auth()->logout();
        return redirect()->route('home');
    }
}
