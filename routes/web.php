<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\ReceptionistController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisitorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('user.index');

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::post('/login', [LoginController::class, 'authentication']);

Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/admin/visitor', [AdminController::class, 'visitors'])->name('admin.visitors');

    Route::get('/admin/visitor/add',[VisitorController::class,'add'])->name('visitor.add');

    Route::get('/admin/visitor/delete/{id}', [VisitorController::class, 'delete'])->name('visitor.delete');

    Route::get('/admin/receptionist', [AdminController::class, 'receptionist'])->name('admin.receptionists');

    Route::get('/admin/receptionist/add', [ReceptionistController::class, 'addReceptionist'])->name('receptionist.addReceptionist');

    Route::post('/admin/receptionist/create', [ReceptionistController::class, 'add']);

    Route::get('/admin/receptionist/delete/{id}', [ReceptionistController::class, 'delete'])->name('receptionist.delete');

    Route::get('/admin/qr_code', [AdminController::class, 'qrCode'])->name('admin.qrCode');

    Route::get('/admin/qr_code/add', [QrCodeController::class, 'add'])->name('qrcode.add');

    Route::post('/admin/qr_code/create', [QrCodeController::class, 'create']);
});


Route::get('/form', [VisitorController::class, 'form'])->name('visitor.form');

Route::get('/form/{id}', [VisitorController::class, 'show'])->name('visitor.show');

Route::post('/form/create', [VisitorController::class, 'addVisitor']);


// Route::get('/login/admin',[AdminController::class,'login'])->name('login.admin');

// Route::get('/login/receptionist',[ReceptionistController::class,'login'])->name('receptionist.admin');
