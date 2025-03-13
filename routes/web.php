<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\WebSite\HomeConterller;
use App\Http\Controllers\WebSite\AboutUSController;
use App\Http\Controllers\WebSite\ContactUSController;



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