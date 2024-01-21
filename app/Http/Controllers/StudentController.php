<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class StudentController extends Controller
{
    public function index(Request $request){
        return view('student.dashboard');
    }

    public function login(){
        if (Auth::guard('student')->check()) {
            return redirect()->route('student.dashboard');
        }
        return view('student.auth.login');
    }

    public function login_submit(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::guard('student')->attempt($credentials)) {
        // return redirect()->route('student.dashboard')->with('success', 'Login Successful');
        return redirect()->route('home');
    } else {
        return redirect()->route('student.login')->with('error', 'Login Unsuccessful Credentials not Match');
    }
}


    public function logout(){
        Auth::guard('student')->logout();
        return redirect()->route('student.login');
    }
}
