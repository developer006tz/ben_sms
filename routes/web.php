<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\SchoolownerController;
use App\Http\Controllers\SystemownerController;

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

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('/')
    ->middleware('auth')
    ->group(function () {
        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class);

        Route::get('students', [StudentController::class, 'index'])->name(
            'students.index'
        );
        Route::post('students', [StudentController::class, 'store'])->name(
            'students.store'
        );
        Route::get('students/create', [
            StudentController::class,
            'create',
        ])->name('students.create');
        Route::get('students/{student}', [
            StudentController::class,
            'show',
        ])->name('students.show');
        Route::get('students/{student}/edit', [
            StudentController::class,
            'edit',
        ])->name('students.edit');
        Route::put('students/{student}', [
            StudentController::class,
            'update',
        ])->name('students.update');
        Route::delete('students/{student}', [
            StudentController::class,
            'destroy',
        ])->name('students.destroy');

        Route::get('teachers', [TeacherController::class, 'index'])->name(
            'teachers.index'
        );
        Route::post('teachers', [TeacherController::class, 'store'])->name(
            'teachers.store'
        );
        Route::get('teachers/create', [
            TeacherController::class,
            'create',
        ])->name('teachers.create');
        Route::get('teachers/{teacher}', [
            TeacherController::class,
            'show',
        ])->name('teachers.show');
        Route::get('teachers/{teacher}/edit', [
            TeacherController::class,
            'edit',
        ])->name('teachers.edit');
        Route::put('teachers/{teacher}', [
            TeacherController::class,
            'update',
        ])->name('teachers.update');
        Route::delete('teachers/{teacher}', [
            TeacherController::class,
            'destroy',
        ])->name('teachers.destroy');

        Route::get('schoolowners', [
            SchoolownerController::class,
            'index',
        ])->name('schoolowners.index');
        Route::post('schoolowners', [
            SchoolownerController::class,
            'store',
        ])->name('schoolowners.store');
        Route::get('schoolowners/create', [
            SchoolownerController::class,
            'create',
        ])->name('schoolowners.create');
        Route::get('schoolowners/{schoolowner}', [
            SchoolownerController::class,
            'show',
        ])->name('schoolowners.show');
        Route::get('schoolowners/{schoolowner}/edit', [
            SchoolownerController::class,
            'edit',
        ])->name('schoolowners.edit');
        Route::put('schoolowners/{schoolowner}', [
            SchoolownerController::class,
            'update',
        ])->name('schoolowners.update');
        Route::delete('schoolowners/{schoolowner}', [
            SchoolownerController::class,
            'destroy',
        ])->name('schoolowners.destroy');

        Route::get('users', [UserController::class, 'index'])->name(
            'users.index'
        );
        Route::post('users', [UserController::class, 'store'])->name(
            'users.store'
        );
        Route::get('users/create', [UserController::class, 'create'])->name(
            'users.create'
        );
        Route::get('users/{user}', [UserController::class, 'show'])->name(
            'users.show'
        );
        Route::get('users/{user}/edit', [UserController::class, 'edit'])->name(
            'users.edit'
        );
        Route::put('users/{user}', [UserController::class, 'update'])->name(
            'users.update'
        );
        Route::delete('users/{user}', [UserController::class, 'destroy'])->name(
            'users.destroy'
        );

        Route::get('systemowners', [
            SystemownerController::class,
            'index',
        ])->name('systemowners.index');
        Route::post('systemowners', [
            SystemownerController::class,
            'store',
        ])->name('systemowners.store');
        Route::get('systemowners/create', [
            SystemownerController::class,
            'create',
        ])->name('systemowners.create');
        Route::get('systemowners/{systemowner}', [
            SystemownerController::class,
            'show',
        ])->name('systemowners.show');
        Route::get('systemowners/{systemowner}/edit', [
            SystemownerController::class,
            'edit',
        ])->name('systemowners.edit');
        Route::put('systemowners/{systemowner}', [
            SystemownerController::class,
            'update',
        ])->name('systemowners.update');
        Route::delete('systemowners/{systemowner}', [
            SystemownerController::class,
            'destroy',
        ])->name('systemowners.destroy');
    });
