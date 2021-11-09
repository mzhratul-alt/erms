<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //Dashboard
    public function index()
    {
        return view('index');
    }

    //Login View
    public function login()
    {
        return view('login');
    }

    //Login Process
    public function submitLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $checkAdmin = Admin::where(['username'=>$request->username, 'password'=>$request->password])->count();

        if ($checkAdmin > 0) {
            session(['adminLogin',true]);
            return redirect('admin');
        } else {
            return back()->with('msg', 'Invalid username or password.');
        }
    }

    public function logout(){
        session()->forget('adminLogin');
        return redirect('admin/login');
    }
}
