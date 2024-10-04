<?php

use App\Http\Controllers\Back\AdminMaintenanceController;
use App\Http\Controllers\Back\Auth\AdminAuthController;
use App\Http\Controllers\Back\ConfigController;
use App\Http\Controllers\Back\DashboardController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => config('app.super_admin_url'), 'as' => 'super.'], function() {
    Route::get('/maintenance/on', [AdminMaintenanceController::class, 'enableMaintenance'])->name('maintenance.on');
    Route::get('/aintenance/off', [AdminMaintenanceController::class, 'disableMaintenance'])->name('maintenance.off');
});

Route::group(['prefix' => config('app.super_admin_url'), 'as' => 'super.'], function() {
    Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AdminAuthController::class, 'login'])->name('login.submit');
    Route::post('logout', [AdminAuthController::class, 'logout'])->name('logout');
});

Route::group(['prefix' => config('app.super_admin_url'), 'as' => 'super.', 'middleware' => ['super']], function() {
    Route::get('/migrate', [ConfigController::class, 'migrate'])->name('migrate');
    Route::get('/clear', [ConfigController::class, 'clear'])->name('clear');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});