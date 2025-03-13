<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\WebSite\HomeConterller;
use App\Http\Controllers\Dashboard\Auth\AdminLoginController;



// Route::middleware('web')->name('home')->group(function () {
//     Route::get('/', [HomeConterller::class, 'index'])->name('index');

//     //Language
//     Route::get('change-language/{lang}', [LanguageController::class, 'changeLanguage'])->name('change.language');
// });





Route::get('/', function () {
    return view('dashboard.index');
})->middleware(['auth:admin', 'verified'])->name('index');




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