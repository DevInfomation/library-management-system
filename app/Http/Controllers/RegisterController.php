<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function getCredentials(Request $request) {
        $incomingFields = $request->validate([
            'email' => ['required', Rule::unique('users', 'email')],
            'password' => ['required', 'min:3', 'max:30'],
        ]);

        
    }
}
