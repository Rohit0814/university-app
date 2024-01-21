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


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::middleware(['admin','PreventBackHistory'])->name('admin.')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('dashboard');

    Route::prefix('admin')->group(function () {
        Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
        Route::get('/login',[AdminController::class,'login'])->name('login')->withoutMiddleware('admin');
        Route::post('/login', [AdminController::class, 'login_submit'])->name('login_submit')->withoutMiddleware('admin');
    });
});
// Route::get('faculty/dashboard',[FacultyController::class,'index'])->name('faculty.dashboard');

Route::middleware(['faculty','PreventBackHistory'])->name('faculty.')->group(function(){
    Route::get('faculty/dashboard',[FacultyController::class,'index'])->name('dashboard');

    Route::prefix('faculty')->group(function(){
        Route::post('/logout',[FacultyController::class,'logout'])->name('logout');
        Route::get('/login',[FacultyController::class,'login'])->name('login')->withoutMiddleware('faculty');
        Route::post('/login', [FacultyController::class, 'facultyLogin'])->name('login_submit')->withoutMiddleware('faculty');
    });
});



Route::middleware(['student','PreventBackHistory'])->name('student.')->group(function(){
    Route::get('student/dashboard',[StudentController::class,'index'])->name('dashboard');

    Route::prefix('student')->group(function(){
        // Route::get('/login',[StudentController::class,'login'])->name('student.login');
        Route::post('/logout',[StudentController::class,'logout'])->name('logout');
        Route::get('/login',[StudentController::class,'login'])->name('login')->withoutMiddleware('student');
        Route::post('/login', [StudentController::class, 'login_submit'])->name('login_submit')->withoutMiddleware('student');
    });
});
