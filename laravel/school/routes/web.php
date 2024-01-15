<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\UserController;

//PUBLIC SIDE
Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', [UserController::class, 'login']);

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