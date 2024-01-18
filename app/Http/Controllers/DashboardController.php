<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request,$userType)
    {
        if($userType=='admin'){
            return redirect()->route('admin.dashboard');
        }
    }
}