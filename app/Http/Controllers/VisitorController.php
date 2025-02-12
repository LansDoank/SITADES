<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function show ($id) {
        return view('user.form', ['id' => $id,'title' => 'Visitor Form']);
    }
}
