<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use function Laravel\Prompts\alert;

Route::get('/', function () {
    return Auth::check() ? redirect()->route('dashboard') : view('login.login');
});

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::view('/register', 'login.register');
Route::view('/login', 'login.login')->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('loginPost');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
    Route::resource('incomes', IncomeController::class);
    Route::resource('expenses', ExpenseController::class);
   
});
