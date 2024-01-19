<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(Request $request){
        return view('admin.dashboard');
    }

    public function login(){
        return view('admin.auth.login');
    }

    public function login_submit(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
    
        if(Auth::guard('admin')->attempt($credentials)){
            return redirect()->route('admin.dashboard')->with('success', 'Login Successful');
        } else {
            return redirect()->route('admin.login')->with('error', 'Login Unsuccessful. Credentials do not match');
        }
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('success','Logout successfull');
    }
}
