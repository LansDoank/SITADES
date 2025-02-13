<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Visitor;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login() {
        return view('admin.login',['title' => 'Login Form']);
    }

    public function dashboard() {
        return view('admin.dashboard',['username' => Auth::user()->username]);
    }

    public function visitors() {
        return view('admin.tables',
        ['users' => Visitor::all(),'username' => Auth::user()->username]);
    }

    public function receptionist() {
        $receptionists = User::where('role_id','2')->get();
        return view('admin.receptionists',['username' => Auth::user()->username,'receptionists' => $receptionists]);
    }

    public function qrCode() {
        return view('admin.qrCode',['username' => Auth::user()->username]);
    }
}
