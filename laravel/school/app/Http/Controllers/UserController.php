<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Student;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use DB;

class UserController extends Controller
{
    public function show_register()
    {
        return view('register');
    }

    public function show_profile()
    {
        $student = Student::query()
            ->select('*')
            ->where('student_id', '=', Session::get('student_id'))
            ->get()
            ->first();

        $classes = Student::query()
            ->select('c.class_id', 'name', 'schedule', 'room')
            ->join('students_classes AS sc', 'sc.student_id', '=', 'students.student_id')
            ->join('classes AS c', 'c.class_id', '=', 'sc.class_id')
            ->join('subjects AS su', 'su.subject_id', '=', 'c.subject_id')
            ->where('students.student_id', '=', Session::get('student_id'))
            ->get();

        return view('profile', compact('student', 'classes'));
    }

    public function logout()
    {
        if (Session::has('user_id')) {
            Session::flush();
        }

        return redirect('login');
    }

    public function login(Request $r)
    {
        $user = User::where("email", "=", $r->email)
            ->first();

        if ($user) {
            if (Hash::check($r->pw, $user->password)) {
                Session::put('user_id', $user->user_id);
                Session::put('first_name', $user->first_name);
                Session::put('last_name', $user->last_name);
                Session::put('email', $user->email);
                Session::put('role', $user->role);
                Session::put('student_id', $user->student_id);
                if (Session::get('role') == 'admin') {
                    return redirect('/admin/students');
                } else if (Session::get('role') == 'user') {
                    return redirect('/profile');
                }
            }
        }
    }

    public function show_login()
    {
        return view('login');
    }
}
