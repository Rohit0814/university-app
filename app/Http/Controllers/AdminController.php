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
        // dd('Middleware executing', Auth::getDefaultDriver());
        return view('admin.dashboard');
    }

    public function login(){
        $colour = Colour::all();
        $data = compact('colour');
        // dd($data);
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard')->with($data);
        }
        if(Auth::guard('faculty')->check() || Auth::guard('student')->check()){
            return redirect()->route('home');
        }
        return view('admin.auth.login');
    }

    public function setting(){
        return view('admin.setting');
    }

    public function colorSetting(){
        return view('admin.color-setting');
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
        // return redirect()->route('admin.dashboard')->with('success', 'Login Successful');
        return redirect()->route('home');
    } else {
        return redirect()->route('admin.login')->with('error', 'Login Unsuccessful Credentials not Match');
    }
}

public function generalSetting(Request $request){
    // return redirect()->route('admin.dashboard');
    $admin = Admin::find(Auth::guard('admin')->user()->id);
    $admin->name= Auth::guard('admin')->user()->name;
    $admin->Institution_Name = $request['instituionName'];
    $admin->Tag_line = $request['tagLine'];
    $admin->URL = $request['URL'];
    $admin->email=$request['email'];
    $admin->password = $request['password'];
    $admin->Time_Zone = $request['timeZone'];
    $admin->Address = $request['address'];
    $admin->save();
    return redirect()->route('admin.setting');
}


    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
