<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\usersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/login', [authController::class, 'login'])->name('login')->middleware('throttle:5,1');
//SUPERADMIN
Route::middleware(['auth:sanctum', 'role:1'])->group(function () {
    Route::get('/profileSuperAdmin', [usersController::class, 'profileSuperAdmin'])->name('profileSuperAdmin');
});

//ADMIN
Route::middleware(['auth:sanctum', 'role:2'])->group(function () {
    Route::get('/profileAdmin', [usersController::class, 'profileAdmin'])->name('profileAdmin');
});
