<?php

<<<<<<< HEAD
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AdminController::class,'login'])->name('login.admin');

Route::get('/login/admin',[AdminController::class,'login'])->name('login.admin');
=======
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
>>>>>>> c46bcdc51dc4087b060f2b4066ecfac92e3972dd
