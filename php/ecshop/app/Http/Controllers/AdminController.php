<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\ThrottlesLogins;

class AdminController extends Controller
{
    public function loginAdmin()
    {
        if(auth()->check()){
            return Redirect()->route('home');
        }
        return view('login');
    }

    public function postLoginAdmin(Request $request)
    {
        $remember = $request->has('remember-me') ? true : false;
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials,$remember)){
            return Redirect()->route('home');
        }
        return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
    }
}
