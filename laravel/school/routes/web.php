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
Route::get('/classes', [ClassController::class, 'index']);
Route::get('/subjects', [SubjectController::class, 'index']);
Route::get('/faculties', [FacultyController::class, 'index']);
