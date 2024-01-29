<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Student;
use App\Models\StudentsPhoto;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use DB;

class UserController extends Controller
{
    public function upload_profile_picture(Request $r)
    {
        $sp = new StudentsPhoto;
        $sp->student_id = Session::get('student_id');
        if ($r->file('profile_picture')) {
            $file = $r->file('profile_picture');
            $filename = date('YmdHiu') . $file->getClientOriginalName();
            $file->move(public_path('img/user_profiles'), $filename);
            $sp->image = $filename;
        }
        $sp->save();

        return redirect('/profile')->with('success', 'Profile picture updated!');
    }

    public function upload_profile_picture_form()
    {
        return view('profile_upload_picture');
    }

    public function register(Request $r)
    {
        $user = new User;
        $user->first_name = $r->input('first_name');
        $user->last_name = $r->input('last_name');
        $user->email = $r->input('email');
        $user->password = Hash::make($r->input('pw'));
        $user->role = $r->input('role');
        $user->student_id = $r->input('student_id');
        $user->save();

        return redirect("/register")->with('success', 'New user added!');
    }

    public function show_register()
    {
        return view('register');
    }

    public function show_profile(Request $request)
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

        $profile_picture = Student::query()
            ->select('image')
            ->join('students_photos', 'students.student_id', '=', 'students_photos.student_id')
            ->where('students.student_id', '=', Session::get('student_id'))
            ->get()
            ->last();

        return view('profile', compact('student', 'classes', 'profile_picture', 'request'));
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
                    return redirect('/admin/students')->with('success', 'Logged in as admin!');
                } else if (Session::get('role') == 'user') {
                    return redirect('/profile')->with('success', 'Welcome, ' . Session::get('first_name') . '!');
                }
            } else {
                return redirect('/login')->with('fail', 'Incorrect password.');
            }
        } else {
            return redirect('/login')->with('fail', 'An account with that email does not exist.');
        }
    }

    public function show_login()
    {
        return view('login');
    }
}
