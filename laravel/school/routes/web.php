<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\CheckSessionAdmin;

//PUBLIC SIDE
Route::middleware(['updateNotifications'])->group(function () {
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
});

//USER SIDE
Route::middleware(['checkSessionUser', 'updateNotifications'])->group(function () {
    Route::get('/profile', [UserController::class, 'show_profile']);
    Route::get('/profile/upload', [UserController::class, 'upload_profile_picture_form']);
    Route::post('/profile/upload', [UserController::class, 'upload_profile_picture']);

    Route::post('/cafeteria', [OrderController::class, 'place_order']);
    Route::get('/orders', [OrderController::class, 'view_orders']);
    Route::get('/orders/{id}', [OrderController::class, 'view_order']);
    Route::put('/orders/receive/{id}', [OrderController::class, 'receive_order']);
    Route::put('/orders/cancel/{id}', [OrderController::class, 'cancel_order']);

    Route::get('/notifications', [UserController::class, 'view_notifications']);
    Route::get('/notifications/{id}', [UserController::class, 'view_notification']);
    Route::put('/notifications/seen', [UserController::class, 'seen_notification']);
    Route::delete('/notifications/{id}', [UserController::class, 'delete_notification']);
});

//ADMIN SIDE
Route::middleware(['checkSessionAdmin', 'updateNotifications'])->group(function () {
    Route::get('/admin/students', [StudentController::class, 'index']);
    Route::get('/admin/students/create', [StudentController::class, 'add_student_form']);
    Route::get('/admin/students/edit/{id}', [StudentController::class, 'edit_student_form']);
    Route::get('/admin/students/{id}', [StudentController::class, 'show_student']);
    Route::post('/admin/students', [StudentController::class, 'add_student']);
    Route::put('/admin/students/{id}', [StudentController::class, 'edit_student']);
    Route::delete('/admin/students/{id}', [StudentController::class, 'delete_student']);

    Route::get('/admin/classes', [ClassController::class, 'index']);
    Route::get('/admin/subjects', [SubjectController::class, 'index']);

    Route::get('/admin/faculties', [FacultyController::class, 'index']);
    Route::get('/admin/faculties/create', [FacultyController::class, 'add_faculty_form']);
    Route::get('/admin/faculties/edit/{id}', [FacultyController::class, 'edit_faculty_form']);
    Route::get('/admin/faculties/{id}', [FacultyController::class, 'show_faculty']);
    Route::post('/admin/faculties', [FacultyController::class, 'add_faculty']);
    Route::put('/admin/faculties/{id}', [FacultyController::class, 'edit_faculty']);
    Route::delete('/admin/faculties/{id}', [FacultyController::class, 'delete_faculty']);
    Route::get('/admin/faculties/educ/{id}', [FacultyController::class, 'add_faculty_educ_form']);
    Route::post('/admin/faculties/educ/{id}', [FacultyController::class, 'add_faculty_educ']);

    Route::resource('/admin/products', ProductController::class);

    Route::get('/admin/orders', [OrderController::class, 'show_all_orders']);
    Route::get('/admin/orders/{id}', [OrderController::class, 'show_order']);
    Route::put('/admin/orders/accept/{id}', [OrderController::class, 'accept_order']);
    Route::put('/admin/orders/status/{id}', [OrderController::class, 'update_order_status']);
});
