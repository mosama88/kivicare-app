<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\WebSite\HomeConterller;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\Auth\AdminLoginController;
use App\Http\Controllers\Dashboard\SettingController;

// Route::middleware('web')->name('home')->group(function () {
//     Route::get('/', [HomeConterller::class, 'index'])->name('index');

//     //Language
//     Route::get('change-language/{lang}', [LanguageController::class, 'changeLanguage'])->name('change.language');
// });

var_dump("fifth Step => <h6 class='text-danger'>" . realpath(__DIR__) . '\\' . basename(__FILE__) . "</h6>   ||| ");





Route::middleware(['dashboard', 'auth:admin', 'verified'])->group(function () {
    //---------------------------------------------------- dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('index');

    Route::resource('settings', SettingController::class);

    //---------------------------------------------------- Language
    Route::get('/change-language/{lang}', [LanguageController::class, 'changeLanguage'])->name('change.language');
});
// dd(app()->getLocale());


//---------------------------------------------------- Auth
Route::middleware('guest:admin')->group(function () {
    //---------------------------------------------------- login
    Route::get('login', [AdminLoginController::class, 'create'])
        ->name('login');

    Route::post('login', [AdminLoginController::class, 'store']);
});


Route::middleware('auth:admin')->group(function () {
    //---------------------------------------------------- logout
    Route::post('logout', [AdminLoginController::class, 'destroy'])
        ->name('logout');
});
