<?php

// ✅ Do NOT import Route manually — it's auto-loaded in Laravel 10+

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\DashboardController;



//Route::view('/', 'index');
Route::view('/aboutus', 'aboutus');
Route::view('/services', 'services');
Route::view('/careers', 'careers');
Route::view('/contact', 'contact');
Route::view('/login-employee', 'login-employee');
Route::view('/login-client', 'login-client');
Route::view('/login-partner', 'login-partner');


// HOME
Route::get('/', fn () => view('home.index'));

// Calculators
Route::get('/calculators/sip', function () {
    return view('calculators.sip');
});

Route::get('/calculators/retirement', function () {
    return view('calculators.retirement');
});

Route::get('/careers', function () {
    return view('career.coming-soon');
});


// Research Access
Route::get('/research-report', function () {
    return view('career.coming-soon');
});

Route::get('/book-appointment', function () {
    return view('contact.form');
});

Route::post('/contact', [ContactController::class, 'sendContactForm'])->name('contact.send');



/*Route::get('/contact', [ContactController::class, 'form'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'sendMail'])->name('contact.send');*/


// LOGIN ROUTES
Route::get('/login/client', [AuthController::class, 'loginClientForm']);
Route::get('/login/employee', [AuthController::class, 'loginEmployeeForm']);
Route::get('/login/bp', [AuthController::class, 'loginBPForm']);

// Employee Login Page
Route::get('/login-employee', function () {
    return view('Auth.login-employee');  // path is resources/views/Auth/login-employee.blade.php
})->name('login.employee');

// Business Partner Login Page
Route::get('/login-bp', function () {
    return view('Auth.login-bp');  // path is resources/views/Auth/login-bp.blade.php
})->name('login.bp');



// ADMIN & DASHBOARD
//Route::get('/admin/register', [AdminController::class, 'registerUserForm']);
Route::get('/admin/register-user', [AdminController::class, 'showRegistrationForm']);
Route::post('/admin/register-user', [AdminController::class, 'storeUser']);
Route::get('/dashboard/client', [ClientController::class, 'dashboard']);

/* CALCULATORS
Route::get('/calculators/sip', [CalculatorController::class, 'sip']);
Route::get('/calculators/retirement', [CalculatorController::class, 'retirement']);

// CONTACT / CAREERS
Route::get('/contact', [ContactController::class, 'form']);
Route::get('/career', fn () => view('career.coming-soon'));*/

Route::get('/env-test', function () {
    return env('DATABASE_URL');
});
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);

/*Route::get('/dashboard', function () {
    return view('dashboard'); // create a dashboard.blade.php later
})->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'show'])->middleware('auth');*/
Route::middleware(['auth'])->get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');




Route::post('/send-otp', [ForgotPasswordController::class, 'sendOtp']);
Route::post('/reset-password', [ForgotPasswordController::class, 'resetPassword']);