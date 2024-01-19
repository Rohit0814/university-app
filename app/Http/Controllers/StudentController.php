<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index(Request $request){
        return view('student.dashboard');
    }

    public function login(){
        return view('student.auth.login');
    }

    public function login_submit(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = $request->only('email','password');

        if(Auth::guard('student')->attempt($credentials)){
            $user = Student::where('email',$request->input('email'))->first();
            Auth::guard('student')->login($user);
            return redirect()->route('student.dashboard')->with('success','Login Successfull');
        }
        else{
            return redirect()->route('student.auth.login')->with('error','Login Unsuccessfull');
        }
    }

    public function logout(){
        Auth::guard('student')->logout();
        return redirect()->route('student.auth.login')->with('success','Logout successfull');
    }
}
