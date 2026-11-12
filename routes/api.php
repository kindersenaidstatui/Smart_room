<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LoginController;


Route::post('/login', [LoginController::class, 'login_api'])->name('login.store');
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
