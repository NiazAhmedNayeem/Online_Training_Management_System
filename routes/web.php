<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeacherAuthController;

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

Route::get('/', [WebsiteController::class, 'index'])->name('website.home');

Route::middleware(['login:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/add-admin', [AdminAuthController::class, 'index'])->name('add.admin');
    Route::post('/create-admin', [AdminAuthController::class, 'create'])->name('create.admin');
    Route::get('/manage-admin', [AdminAuthController::class, 'manage'])->name('admin.manage');



    Route::get('/teacher', [TeacherController::class, 'index'])->name('teacher');
    Route::post('/create-teacher', [TeacherController::class, 'create'])->name('create.teacher');
    Route::get('/manage-teacher', [TeacherController::class, 'manage'])->name('manage.teacher');
    Route::get('/edit-teacher/{id}', [TeacherController::class, 'edit'])->name('edit.teacher');
    Route::post('/update-teacher/{id}', [TeacherController::class, 'update'])->name('update.teacher');
    Route::post('/delete-teacher/{id}', [TeacherController::class, 'delete'])->name('delete.teacher');


});

Route::get('/teacher/login', [TeacherAuthController::class, 'index'])->name('teacher.login');
Route::post('/teacher/login', [TeacherAuthController::class, 'login'])->name('teacher.login');

Route::middleware(['teacher.auth'])->group(function () {

Route::get('/teacher/dashboard', [TeacherAuthController::class, 'dashboard'])->name('teacher.dashboard');
Route::get('/teacher/logout', [TeacherAuthController::class, 'logout'])->name('teacher.logout');

});
