<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CountryController;
use App\Http\Controllers\Api\DoctorTitleController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(DoctorTitleController::class)->prefix('doctor_titles')->group(function () {
    Route::get('/',  'index');
    Route::get('/{title}', 'show');
    Route::post('/', 'store');
    Route::put('/{title}', 'edit');
    Route::delete('/{title}', 'destroy');
});



Route::controller(CountryController::class)->prefix('countries')->group(function () {
    Route::get('/', 'index');
    Route::get('/{countries}', 'show');
    Route::post('/', 'store');
    Route::put('/{countries}', 'edit');
    Route::delete('/{countries}', 'destroy');
});