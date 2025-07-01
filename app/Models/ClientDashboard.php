<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientDashboard extends Model
{
    use HasFactory;
     protected $table = 'client_dashboard';
    public $timestamps = false;

    protected $fillable =[
        'client_code',
        'client_name',
        'investment_date',
        'total_value',
        'portfolio_value',
        'return_pct',
        'equity',
        'mf',
        're',
        'others',
    ];
}
