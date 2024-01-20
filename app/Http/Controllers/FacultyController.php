<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class FacultyController extends Controller
{
    public function index(Request $request){
        return view('faculty.dashboard');
    }

    public function login(){
        if (Auth::guard('faculty')->check()) {
            return redirect()->route('faculty.dashboard');
        }
        return view('faculty.auth.login');
    }

    public function login_submit(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::guard('faculty')->attempt($credentials)) {
        return redirect()->route('faculty.dashboard')->with('success', 'Login Successful');
    } else {
        return redirect()->route('faculty.login')->with('error', 'Login Unsuccessful Credentials not Match');
    }
}


    public function logout(){
        Auth::guard('faculty')->logout();
        return redirect()->route('faculty.login')->with('success','Logout successfull');
    }
}
