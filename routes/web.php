<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminSettingController;
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

Route::get('/',[AdminController::class, 'home'])->middleware('PreventBackHistory')->name('home');


Route::middleware(['admin','PreventBackHistory'])->name('admin.')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('dashboard');

    Route::prefix('admin')->group(function () {
        Route::get('/setting',[AdminSettingController::class, 'setting'])->name('setting');
        Route::post('/color/change/{id}',[AdminSettingController::class, 'changeColors'])->name('change.color');
        Route::put('/general/setting', [AdminSettingController::class,'generalSetting'])->name('general.setting');
        Route::get('/color/setting',[AdminSettingController::class ,'colorSetting'])->name('setting.color');
        Route::get('/blog/setting',[AdminSettingController::class, 'blogSetting'])->name('blog.setting');
        Route::get('/theam/setting',[AdminSettingController::class, 'theamSetting'])->name('theam.setting');
        Route::get('/accessiblity/setting',[AdminSettingController::class, 'accessSetting'])->name('access.setting');
        Route::get('/roles/setting',[AdminSettingController::class, 'roleSetting'])->name('roles.setting');
        Route::get('/tools/setting',[AdminSettingController::class, 'toolSetting'])->name('tool.setting');
        Route::get('/domain/setting',[AdminSettingController::class, 'domainSetting'])->name('domain.setting');
        Route::get('/login',[AdminController::class,'login'])->name('login')->withoutMiddleware('admin');
        Route::post('/login', [AdminController::class, 'login_submit'])->name('login_submit')->withoutMiddleware('admin');
        Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
    });
});

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
        Route::post('/logout',[StudentController::class,'logout'])->name('logout');
        Route::get('/login',[StudentController::class,'login'])->name('login')->withoutMiddleware('student');
        Route::post('/login', [StudentController::class, 'login_submit'])->name('login_submit')->withoutMiddleware('student');
    });
});
