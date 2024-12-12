<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login\LoginController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [LoginController::class, 'index']);
Route::middleware(['admin'])->group(function () {
    Route::get('/admin/users', [UserController::class, 'index']);
});