<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin/login',[AdminController::class,'login'])->name('admin.login');
Route::get('/faculty/login',[FacultyController::class,'login'])->name('faculty.login');
Route::get('/student/login',[StudentController::class,'login'])->name('student.login');

Route::middleware('admin')->group(function(){
    Route::get('admin/dashboard',[AdminController::class,'index'])->name('admin.dashboard');

    Route::prefix('admin')->group(function(){
        // Route::get('/login',[AdminController::class,'login'])->name('admin.login');
        Route::post('/logout',[AdminController::class,'logout'])->name('admin.logout');
        Route::post('/login',[AdminController::class,'login_submit'])->name('admin.login_submit');
    });
});


Route::middleware('faculty')->group(function(){
    Route::get('faculty/dashboard',[FacultyController::class,'index'])->name('faculty.dashboard');

    Route::prefix('faculty')->group(function(){
        // Route::get('/login',[FacultyController::class,'login'])->name('faculty.login');
        Route::get('/logout',[FacultyController::class,'logout'])->name('faculty.logout');
        Route::post('/login',[FacultyController::class,'login_submit'])->name('faculty.login_submit');
    });
});


Route::middleware('student')->group(function(){
    Route::get('student/dashboard',[StudentController::class,'index'])->name('student.dashboard');

    Route::prefix('student')->group(function(){
        // Route::get('/login',[StudentController::class,'login'])->name('student.login');
        Route::get('/logout',[StudentController::class,'logout'])->name('student.logout');
        Route::post('/login',[StudentController::class,'login_submit'])->name('student.login_submit');
    });
});
