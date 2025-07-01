<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;


class ContactController extends Controller
{
    public function form() {
        return view('contact.form');
    }

    public function sendContactForm(Request $request)
{
    $data = $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'message' => 'required|string'
    ]);

    Mail::to('ask@tattvainvestmentadvisory.com')->send(new ContactFormMail($data));

    return redirect()->route('contact.form')->with('success', 'Message sent successfully!');
}
}
