<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'postRegister'])->name('register');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'postLogin'])->name('login');

Route::get('/home', [AuthController::class, 'home'])->name('home');
Route::get('/home/{id}/edit', [AuthController::class, 'edit'])->name('edit');
Route::put('/home/{id}/edit', [AuthController::class, 'update'])->name('update');
Route::get('/home/{id}/delete', [AuthController::class, 'delete'])->name('delete');



