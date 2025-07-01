<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ClientDashboard; 

class DashboardController extends Controller
{
   
public function showDashboard()
{
    $clientId = Auth::user()->client_id;  // Make sure this is not null

    $clientData = ClientDashboard::where('client_code', $clientId)->first();

    if (!$clientData) {
        return view('client.dashboard')->with('message', 'No data found for this client.');
    }

   return view('client.dashboard', ['client_data' => $clientData]);
}
}
