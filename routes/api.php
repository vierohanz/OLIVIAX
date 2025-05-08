<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\usersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/login', [authController::class, 'login'])->name('login')->middleware('throttle:5,1');
//DINKES
Route::middleware(['auth:sanctum', 'role:1'])->group(function () {
    Route::get('/profileDinkes', [usersController::class, 'profileDinkes'])->name('profileDinkes');
});

//POSYANDU
Route::middleware(['auth:sanctum', 'role:2'])->group(function () {
    Route::get('/profilePosyandu', [usersController::class, 'profilePosyandu'])->name('profilePosyandu');
});

//IBU
Route::middleware(['auth:sanctum', 'role:3'])->group(function () {
    Route::get('/profileIbu', [usersController::class, 'profileIbu'])->name('profileIbu');
});
