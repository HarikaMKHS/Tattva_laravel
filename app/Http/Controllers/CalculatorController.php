<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function sip() {
        return view('calculators.sip');
    }

    public function retirement() {
        return view('calculators.retirement');
    }
}
