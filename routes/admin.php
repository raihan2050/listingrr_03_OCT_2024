<?php

use App\Http\Controllers\Back\AdminMaintenanceController;
use App\Http\Controllers\Back\AjaxController as AdminAjaxController;
use App\Http\Controllers\Back\Auth\AdminAuthController;
use App\Http\Controllers\Back\ConfigController;
use App\Http\Controllers\Back\DashboardController as AdminDashboardController;
use App\Http\Controllers\Back\CouponController as AdminCouponController;
use App\Http\Controllers\Back\TaxController as AdminTaxController;
use App\Http\Controllers\Back\CurrencyController as AdminCurrencyController;
use App\Http\Controllers\Back\SystemSetting;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => config('app.super_admin_url'), 'as' => 'super.'], function() {
    Route::get('/maintenance/on', [AdminMaintenanceController::class, 'enableMaintenance'])->name('maintenance.on');
    Route::get('/aintenance/off', [AdminMaintenanceController::class, 'disableMaintenance'])->name('maintenance.off');
});

Route::group(['prefix' => config('app.super_admin_url'), 'as' => 'super.', 'middleware' => ['lconfig']], function() {
    Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AdminAuthController::class, 'login'])->name('login.submit');
    Route::post('logout', [AdminAuthController::class, 'logout'])->name('logout');
});

Route::group(['prefix' => config('app.super_admin_url'), 'as' => 'super.', 'middleware' => ['super', 'lconfig']], function() {
    Route::get('/migrate', [ConfigController::class, 'migrate'])->name('migrate');
    Route::get('/clear', [ConfigController::class, 'clear'])->name('clear');

    Route::post('/ajax', [AdminAjaxController::class, 'index'])->name('ajax');

    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    Route::prefix('payment-config')->name('payment_config.')->group(function () {
        Route::get('coupons/list', [AdminCouponController::class, 'list'])->name('coupon.list');
        Route::get('tax/regular', [AdminTaxController::class, 'taxGeneral'])->name('txt.regular');
        Route::get('tax/state', [AdminTaxController::class, 'taxState'])->name('txt.state');
        Route::get('currency', [AdminCurrencyController::class, 'list'])->name('currency.list');
    });

    Route::get('/setting/system', [SystemSetting::class, 'index'])->name('system.settings');
});
