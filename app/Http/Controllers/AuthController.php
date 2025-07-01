<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginClientForm() {
        return view('auth.login-client');
    }

    public function loginEmployeeForm() {
        return view('auth.login-employee');
    }

    public function loginBPForm() {
        return view('auth.login-bp');
    }
}
