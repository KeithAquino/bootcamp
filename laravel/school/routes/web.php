<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\FacultyController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/create', [StudentController::class, 'add_student_form']);
Route::get('/students/edit/{id}', [StudentController::class, 'edit_student_form']);
Route::get('/students/{id}', [StudentController::class, 'show_student']);
Route::post('/students', [StudentController::class, 'add_student']);
Route::put('/students/{id}', [StudentController::class, 'edit_student']);
Route::delete('/students/{id}', [StudentController::class, 'delete_student']);

Route::get('/classes', [ClassController::class, 'index']);
Route::get('/subjects', [SubjectController::class, 'index']);
Route::get('/faculties', [FacultyController::class, 'index']);