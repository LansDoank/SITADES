<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Visitor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login() {
        return view('admin.login',['title' => 'Login Form']);
    }

    public function dashboard() {
        return view('admin.dashboard',['username' => Auth::user()->username]);
    }

    public function tables() {
        return view('admin.tables',['users' => Visitor::all()]);
    }
}
