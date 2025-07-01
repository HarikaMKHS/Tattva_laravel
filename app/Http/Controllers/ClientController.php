<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientDashboard;

class ClientController extends Controller
{
   
public function dashboard()
{
    $clientCode = auth()->user()->client_id; // assuming login stores client_id

    $dashboardData = ClientDashboard::where('client_code', $clientCode)->first();

    return view('client.dashboard', compact('dashboardData'));
}
}
