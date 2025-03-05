<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function getCredentials(Request $request) {
        $incomingFields = $request->validate([
            'name' => 'required',
            'email' => ['required', 'min:3'],
            'password' => ['required', 'min:3', 'max:255'],
        ]);

        $incomingFields['password'] = bcrypt($incomingFields['password']);

        $user = User::create($incomingFields);
        auth()->login($user);

        return redirect()->route('dashboard');
    }
}
