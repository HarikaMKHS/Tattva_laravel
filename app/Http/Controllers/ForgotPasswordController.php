<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Mail\SendOtpMail;


class ForgotPasswordController extends Controller
{
   
public function sendOtp(Request $request)
{
    $request->validate(['email' => 'required|email']);

    $otp = rand(100000, 999999);
    DB::table('password_otps')->insert([
        'email' => $request->email,
        'otp' => $otp,
        'created_at' => now()
    ]);

    // Send OTP via email
    Mail::to($request->email)->send(new SendOtpMail($otp));

    return response()->json(['success' => true, 'message' => 'OTP sent successfully']);
}

public function resetPassword(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'otp' => 'required',
        'new_password' => 'required|min:6|confirmed',
    ]);

    $validOtp = DB::table('password_otps')
        ->where('email', $request->email)
        ->where('otp', $request->otp)
        ->where('created_at', '>=', now()->subMinutes(10)) // valid for 10 min
        ->first();

    if (!$validOtp) {
        return response()->json(['success' => false, 'message' => 'Invalid or expired OTP']);
    }

    DB::table('users')
        ->where('email', $request->email)
        ->update(['password' => bcrypt($request->new_password)]);

    DB::table('password_otps')
        ->where('email', $request->email)
        ->delete();

    return response()->json(['success' => true, 'message' => 'Password reset successful']);
}
}
