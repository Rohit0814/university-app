<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class FacultyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd(Auth::guard('faculty')->check());
        // dd(auth('admin')->check());
        // dd('Middleware executing', Auth::guard('faculty')->user());
        // dd(Auth::guard()->getName());
        // dd('Middleware executing', Auth::getDefaultDriver());
        // dd(Auth::guard('faculty')->user()->Name);
        
        if(!Auth::guard('faculty')->check()){
            return redirect()->route('faculty.login')->with('error','You do not have access of Faculty panel');
        }


        return $next($request);
    }
}
