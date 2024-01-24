<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

//PUBLIC SIDE
Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/register', [UserController::class, 'show_register']);
Route::post('/register', [UserController::class, 'register']);

Route::get('/login', [UserController::class, 'show_login']);
Route::post('/login', [UserController::class, 'login']);

Route::get('/logout', [UserController::class, 'logout']);

//USER SIDE
Route::get('/profile', [UserController::class, 'show_profile']);

//ADMIN SIDE
Route::get('/admin/students', [StudentController::class, 'index']);
Route::get('/admin/students/create', [StudentController::class, 'add_student_form']);
Route::get('/admin/students/edit/{id}', [StudentController::class, 'edit_student_form']);
Route::get('/admin/students/{id}', [StudentController::class, 'show_student']);
Route::post('/admin/students', [StudentController::class, 'add_student']);
Route::put('/admin/students/{id}', [StudentController::class, 'edit_student']);
Route::delete('/admin/students/{id}', [StudentController::class, 'delete_student']);

Route::get('/admin/faculties', [FacultyController::class, 'index']);
Route::get('/admin/faculties/create', [FacultyController::class, 'add_faculty_form']);
Route::get('/admin/faculties/edit/{id}', [FacultyController::class, 'edit_faculty_form']);
Route::get('/admin/faculties/{id}', [FacultyController::class, 'show_faculty']);
Route::post('/admin/faculties', [FacultyController::class, 'add_faculty']);
Route::put('/admin/faculties/{id}', [FacultyController::class, 'edit_faculty']);
Route::delete('/admin/faculties/{id}', [FacultyController::class, 'delete_faculty']);

Route::get('/admin/classes', [ClassController::class, 'index']);
Route::get('/admin/subjects', [SubjectController::class, 'index']);

Route::resource('admin/products', ProductController::class);
