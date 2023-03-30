<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeacherAuthController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminTrainingController;

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


//Admin Section
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


    //Category section
    Route::get('/add-category', [CategoryController::class, 'index'])->name('add.category');
    Route::post('/add-category', [CategoryController::class, 'create'])->name('create.category');
    Route::get('/manage-category', [CategoryController::class, 'manage'])->name('manage.category');
    Route::get('/edit-category/{id}', [CategoryController::class, 'edit'])->name('edit.category');
    Route::post('/update-category/{id}', [CategoryController::class, 'update'])->name('update.category');
    Route::post('/delete-category/{id}', [CategoryController::class, 'delete'])->name('delete.category');



    ///Training control section
    Route::get('/admin-training', [AdminTrainingController::class, 'index'])->name('admin.training');
    Route::get('/status-update/{id}', [AdminTrainingController::class, 'statusUpdate'])->name('training.status');


});



//Teacher Section
Route::get('/teacher/login', [TeacherAuthController::class, 'index'])->name('teacher.login');
Route::post('/teacher/login', [TeacherAuthController::class, 'login'])->name('teacher.login');

Route::middleware(['teacher.auth'])->group(function () {

Route::get('/teacher/dashboard', [TeacherAuthController::class, 'dashboard'])->name('teacher.dashboard');
Route::get('/teacher/logout', [TeacherAuthController::class, 'logout'])->name('teacher.logout');


Route::get('/teacher/training', [TrainingController::class, 'index'])->name('teacher.training');
Route::post('/teacher/create-training', [TrainingController::class, 'create'])->name('create.training');
Route::get('/teacher/manage-training', [TrainingController::class, 'manage'])->name('manage.training');
Route::get('/teacher/detail-training/{id}', [TrainingController::class, 'detail'])->name('detail.training');
Route::get('/teacher/edit-training/{id}', [TrainingController::class, 'edit'])->name('edit.training');
Route::post('/teacher/update-training/{id}', [TrainingController::class, 'update'])->name('update.training');
Route::post('/teacher/delete-training/{id}', [TrainingController::class, 'delete'])->name('delete.training');


});
