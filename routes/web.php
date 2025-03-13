<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\WebSite\HomeConterller;
use App\Http\Controllers\WebSite\AboutUSController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\WebSite\ContactUSController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;



Route::middleware('guest')->name('website.')->group(function () {
    //---------------------------------------------------- Home
    Route::get('/', [HomeConterller::class, 'index'])->name('index');

    //---------------------------------------------------- About US
    Route::get('/about', [AboutUSController::class, 'index'])->name('about');

    //---------------------------------------------------- About US
    Route::get('/contact', [ContactUSController::class, 'index'])->name('contact');

    //---------------------------------------------------- Language
    Route::get('/website/change-language/{lang}', [LanguageController::class, 'changeLanguage'])->name('change.language');
});


Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});