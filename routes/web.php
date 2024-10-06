<?php

use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'lconfig'], function () {
    Auth::routes();
});

Route::get('/switch-language/{lang}', [LanguageController::class, 'switchLanguage'])->name('switch.language');
