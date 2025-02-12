<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReceptionistController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisitorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class,'index'])->name('user.index');

Route::get('/login',[LoginController::class,'login'])->name('user.login');

Route::post('/login',[LoginController::class,'authentication']);

Route::get('/logout',[LoginController::class,'logout'])->name('admin.logout');

Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');

Route::get('/admin/tables',[AdminController::class,'tables'])->name('admin.tables');

Route::get('/form',[UserController::class,'form'])->name('user.form');

Route::get('/form/{id}',[VisitorController::class,'show'])->name('visitor.show');

Route::post('/form/create',[UserController::class,'addVisitor']);

// Route::get('/login/admin',[AdminController::class,'login'])->name('login.admin');

// Route::get('/login/receptionist',[ReceptionistController::class,'login'])->name('receptionist.admin');

