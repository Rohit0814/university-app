<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Admin;
use App\Providers\RouteServiceProvider;

use App\Providers\AdminServiceProvider;
use App\Providers\StudentServiceProvider;
use App\Providers\FacultyServiceProvider;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    // public function create(Request $request): View
    // {
    //     return view('auth.login');
    // }

    public function student(Request $request, $userType): View
    {
        $d=$userType;
        $data=compact('userType');
        return view('auth.login')->with($data);
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request,$userType): RedirectResponse
    {
        $request->authenticate();
        $request->session()->regenerate();
        if($userType=='admin'){
            return redirect()->intended(AdminServiceProvider::ADMINHOME);
        }
        else if($userType=='student'){
            return redirect()->intended(StudentServiceProvider::STUDENTHOME);
        }
        else if($userType=='teacher'){
            return redirect()->intended(FacultyServiceProvider::FACULTYHOME);
        }
        else{
            return view('/');
        }

            
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}