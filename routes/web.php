<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\WebSite\HomeConterller;



Route::middleware('guest')->name('home')->group(function () {
    Route::get('/', [HomeConterller::class, 'index'])->name('index');

    //Language
    Route::get('/website/change-language/{lang}', [LanguageController::class, 'changeLanguage'])->name('change.language');
});