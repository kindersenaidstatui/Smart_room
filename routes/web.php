<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [LoginController::class, 'login_html'])->name('login');
Route::post('/login', [LoginController::class, 'login_api'])->name('login.store');

Route::middleware('adm')->group(function () {
    Route::get('/admin', [LoginController::class, 'logado'])->name('admin');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
