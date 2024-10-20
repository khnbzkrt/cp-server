<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('/auth')->group(function () {
    Route::post("/register", [AuthController::class, 'register']);
    Route::post("/login", [AuthController::class, 'login']);
});

Route::middleware(['auth:api', 'role:admin'])->group(function () {
    Route::resource('users', UserController::class)->except(['create', 'store', 'edit']);
});

Route::middleware(['auth:api', 'role:customer'])->group(function () {
});

Route::middleware(['auth:api', 'role:user'])->group(function () {
});
