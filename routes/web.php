<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReceptionistController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class,'index'])->name('user.index');

Route::get('/login',[LoginController::class,'login'])->name('user.login');

Route::post('/login',[LoginController::class,'authentication']);

Route::get('/logout',[LoginController::class,'logout'])->name('admin.logout');

Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');

Route::get('/login/admin',[AdminController::class,'login'])->name('login.admin');

Route::get('/login/receptionist',[ReceptionistController::class,'login'])->name('receptionist.admin');

