<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComunicacaoController;

Route::get('/login', [LoginController::class, 'login_html'])->name('login');
Route::post('/login', [LoginController::class, 'login_action'])->name('login.store');

Route::middleware('adm')->group(function () {
    Route::get('/admin', [LoginController::class, 'logado'])->name('admin');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::fallback(function () {
    return redirect('/admin');
});

Route::get('/luz', [App\Http\Controllers\ComunicacaoController::class, 'luz'])->name('luz');