<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

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

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'store'])->name('store');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');





                    //  ==============================       ADMIN PANEL   =================================
Route::middleware(['admin'])->group(function () {

    Route::get('/admin/dashboard', function () {
        return view('admin-panel.dashboard');
    })->name('admin.dashboard');

    Route::get('/admin/admins', function () {
        return view('admin-panel.admin.index');
    })->name('admin.admin');

    Route::get('/admin/teachers', function () {
        return view('admin-panel.teacher.index');
    })->name('admin.teacher');

    Route::get('/admin/students', function () {
        return view('admin-panel.student.index');
    })->name('admin.student');

    Route::get('/admin/parents', function () {
        return view('admin-panel.parent.index');
    })->name('admin.parent');



});

































                    //  ==============================       TEACHER PANEL   =================================

Route::middleware(['teacher'])->group(function () {

    Route::get('/teacher/dashboard', function () {
        return view('teacher-panel.dashboard');
    })->name('teacher.dashboard');



});




                    //  ==============================       STUDENT PANEL   =================================

Route::middleware(['student'])->group(function () {

    Route::get('/student/dashboard', function () {
        return view('student-panel.dashboard');
    })->name('student.dashboard');

});






                    //  ==============================       PARENT PANEL   =================================

Route::middleware(['parent'])->group(function () {

    Route::get('/parent/dashboard', function () {
        return view('parent-panel.dashboard');
    })->name('parent.dashboard');

});

























