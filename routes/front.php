<?php

use App\Http\Controllers\Front\DashboardController as FrontDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => config('app.admin_url'), 'as' => 'admin.', 'middleware' => ['auth']], function() {
    Route::get('/dashboard', [FrontDashboardController::class, 'index'])->name('dashboard');
});
