<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function showRegistrationForm()
    {
        return view('admin.register-user');
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'client_id' => 'required|unique:users,client_id',
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required|confirmed',
        ]);

        User::create([
            'client_id' => $request->client_id,
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'client'
        ]);

        return response()->json(['message' => 'User registered successfully']);
    }
}
