<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FacultyController extends Controller
{
    public function index(Request $request){
        return view('faculty.dashboard');
    }

    public function login(){
        return view('faculty.auth.login');
    }

    public function login_submit(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = $request->only('email','password');

        if(Auth::guard('faculty')->attempt($credentials)){
            $user = Faculty::where('email',$request->input('email'))->first();
            Auth::guard('faculty')->login($user);
            return redirect()->route('faculty.dashboard')->with('success','Login Successfull');
        }
        else{
            return redirect()->route('faculty.auth.login')->with('error','Login Unsuccessfull');
        }
    }

    public function logout(){
        Auth::guard('faculty')->logout();
        return redirect()->route('faculty.auth.login')->with('success','Logout successfull');
    }
}
