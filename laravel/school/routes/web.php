<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

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

Route::get('/cafeteria', [OrderController::class, 'index']);

//USER SIDE
Route::middleware('checkSessionUser')->get('/profile', [UserController::class, 'show_profile']);
Route::middleware('checkSessionUser')->post('/cafeteria', [OrderController::class, 'place_order']);

//ADMIN SIDE
Route::middleware('checkSessionAdmin')->get('/admin/students', [StudentController::class, 'index']);
Route::middleware('checkSessionAdmin')->get('/admin/students/create', [StudentController::class, 'add_student_form']);
Route::middleware('checkSessionAdmin')->get('/admin/students/edit/{id}', [StudentController::class, 'edit_student_form']);
Route::middleware('checkSessionAdmin')->get('/admin/students/{id}', [StudentController::class, 'show_student']);
Route::middleware('checkSessionAdmin')->post('/admin/students', [StudentController::class, 'add_student']);
Route::middleware('checkSessionAdmin')->put('/admin/students/{id}', [StudentController::class, 'edit_student']);
Route::middleware('checkSessionAdmin')->delete('/admin/students/{id}', [StudentController::class, 'delete_student']);

Route::middleware('checkSessionAdmin')->get('/admin/faculties', [FacultyController::class, 'index']);
Route::middleware('checkSessionAdmin')->get('/admin/faculties/create', [FacultyController::class, 'add_faculty_form']);
Route::middleware('checkSessionAdmin')->get('/admin/faculties/edit/{id}', [FacultyController::class, 'edit_faculty_form']);
Route::middleware('checkSessionAdmin')->get('/admin/faculties/{id}', [FacultyController::class, 'show_faculty']);
Route::middleware('checkSessionAdmin')->post('/admin/faculties', [FacultyController::class, 'add_faculty']);
Route::middleware('checkSessionAdmin')->put('/admin/faculties/{id}', [FacultyController::class, 'edit_faculty']);
Route::middleware('checkSessionAdmin')->delete('/admin/faculties/{id}', [FacultyController::class, 'delete_faculty']);

Route::middleware('checkSessionAdmin')->get('/admin/classes', [ClassController::class, 'index']);
Route::middleware('checkSessionAdmin')->get('/admin/subjects', [SubjectController::class, 'index']);

Route::middleware('checkSessionAdmin')->resource('admin/products', ProductController::class);
