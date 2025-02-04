<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AdminController::class,'login'])->name('login.admin');

Route::get('/login/admin',[AdminController::class,'login'])->name('login.admin');


