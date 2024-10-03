<?php

use App\Http\Controllers\ConfigController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth'])
    ->group(function () {
        Route::get('/migrate', [ConfigController::class, 'migrate'])->name('migrate');
        Route::get('/clear', [ConfigController::class, 'clear'])->name('clear');
        Route::get('/down', [ConfigController::class, 'down'])->name('down');
        Route::get('/up', [ConfigController::class, 'up'])->name('up');
    });

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
