<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index() {
        return view('admin.admin_login');
    }

    public function show_dashboard() {
        return view('admin.dashboard');
    }

    public function dashboard(Request $request) {
        $admin_email = $request->admin_email;
        $admin_password = $request->admin_password;

        $result = DB::table('admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
        return view('admin.dashboard');
    }
}
