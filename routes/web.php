<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\ClientController;

Route::get('/', function () {
    return view('client/login');
});

Route::post('client/login', [ClientController::class, 'login']);
Route::get('client/logout', [ClientController::class, 'logout']);

Route::get('admin/login', [AdminAuthController::class, 'showLoginForm']);
Route::post('admin/login', [AdminAuthController::class, 'login']);
Route::get('admin/logout', [AdminAuthController::class, 'logout']);

Route::get('admin/register', [AdminAuthController::class, 'showRegisterForm']);
Route::post('admin/register', [AdminAuthController::class, 'register']);
