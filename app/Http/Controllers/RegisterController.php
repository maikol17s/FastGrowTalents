<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'telephone' => 'required|numeric|unique:users',
            'email' => 'required|string|email|max:50|unique:users',
            'password' => 'required|string|min:8',
            'document_type' => 'required|in:CC,TI,CE,PA',
            'document_number' => 'required|numeric',
            'role_id' => '',
        ]);

        User::create([
            'name' => strtoupper($request->name),
            'last_name' => strtoupper($request->last_name),
            'telephone' => $request->telephone,
            'email' => strtolower($request->email),
            'password' => Hash::make($request->password),
            'document_type' => $request->document_type,
            'document_number' => $request->document_number,
            'profile_photo_path' => asset('/img/user-thumb.png'),
            'role_id' => 3,
        ]);

        return redirect('/login')->with('success', 'Successful registration! Please log in.');
    }
}
