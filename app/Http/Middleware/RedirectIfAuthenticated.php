<?php

namespace App\Http\Middleware;

use App\Providers\AdminServiceProvider;
use App\Providers\FacultyServiceProvider;
use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        // $guards = empty($guards) ? [null] : $guards;
        $guards = ['admin', 'faculty', 'student'];
        foreach ($guards as $guard) {
            if(Auth::guard($guard)->check()){
                
                if($guard == 'admin'){
                    return redirect()->route('admin.dashboard');
                }
                elseif($guard == 'faculty'){
                    return redirect()->route('faculty.dashboard');
                }
                elseif($guard == 'student'){
                    return redirect()->route('student.dashboard');
                }
            }
        }

        return $next($request);
    }
}
