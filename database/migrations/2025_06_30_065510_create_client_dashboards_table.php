<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('client_dashboard', function (Blueprint $table) {
        $table->id(); // primary key
        $table->string('client_code')->unique();
        $table->string('client_name');
        $table->date('investment_date')->nullable();
        $table->float('total_value')->nullable();
        $table->float('portfolio_value')->nullable();
        $table->float('return_pct')->nullable();
        $table->float('equity')->nullable();
        $table->float('mf')->nullable();
        $table->float('re')->nullable();
        $table->float('others')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_dashboards');
    }
};
