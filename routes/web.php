<?php

use App\Http\Controllers\Certificate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseInformation;
use App\Http\Controllers\OApplication;
use App\Http\Controllers\Reports;
use App\Http\Controllers\Student;
use App\Http\Controllers\StudentPayments;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('admin.users');
    Route::get('courseinfo', [CourseInformation::class, 'index'])->name('admin.courseinfo');
    Route::get('application', [OApplication::class, 'index'])->name('admin.oapplication');
    Route::get('certificate', [Certificate::class, 'index'])->name('admin.certificate');
    Route::get('reports', [Reports::class, 'index'])->name('admin.reports');
    Route::get('studentreg', [Student::class, 'registration'])->name('admin.studentregistration');
    Route::get('sprofile', [Student::class, 'profile'])->name('admin.studprofile');
    Route::get('studentprofile', [StudentPayments::class, 'index'])->name('admin.payments');
      
    //  logout
    Route::get('logout', 'Auth\LoginController@logout')->name('logout');
    

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
