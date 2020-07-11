<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class MyControllers extends Controller
{
    public function index(){
        $users = User::all();
        //dd($users);

        return view('eloquent',[
            'users' => $users
        ]);
    }
}
