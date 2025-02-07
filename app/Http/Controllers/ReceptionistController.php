<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReceptionistController extends Controller
{
    public function login() {
        return view( 'receptionist.login',['title' => 'Login Form']);
    }
}
