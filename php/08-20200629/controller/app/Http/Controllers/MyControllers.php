<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyControllers extends Controller
{
    public function index() {
        return view('gi-cung-duoc');
    }
}
