<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Colour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function index(Request $request){
        $colours = Colour::all();
        $data = compact('colours');
        // dd('Middleware executing', Auth::getDefaultDriver());
        return view('admin.dashboard')->with($data);
    }

    public function login(){
        // dd($data);
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard');
        }
        if(Auth::guard('faculty')->check() || Auth::guard('student')->check()){
            return redirect()->route('home');
        }
        return view('admin.auth.login');
    }

    public function home(){
        return view('welcome');
    }

    public function login_submit(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::guard('admin')->attempt($credentials)) {
        return redirect()->route('home');
    } else {
        return redirect()->route('admin.login')->with('error', 'Login Unsuccessful Credentials not Match');
    }
}

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
