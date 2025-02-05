<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReceptionistController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AdminController::class,'login'])->name('admin.login');

Route::get('/login',[UserController::class,'login'])->name('user.login');

Route::get('/login/admin',[AdminController::class,'login'])->name('login.admin');

Route::get('/login/receptionist',[ReceptionistController::class,'login'])->name('receptionist.admin');

