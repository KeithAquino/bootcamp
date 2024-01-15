<?php

namespace App\Http\Controllers;

use DB;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function add_student(Request $r)
    {
        $student = new Student;
        $student->first_name = $r->input('first_name');
        $student->last_name = $r->input('last_name');
        $student->birthdate = $r->input('birthdate');
        $student->year_level = $r->input('year_level');
        $student->gender = $r->input('gender');
        $student->mobile_number = $r->input('mobile_number');
        $student->email_address = $r->input('email_address');
        $student->date_enrolled = date('Y-m-d');
        $student->province = $r->input('province');
        $student->save();

        return redirect("students");
    }

    public function add_student_form()
    {
        return view('student_create');
    }

    public function show_student(string $id)
    {
        $student = Student::query()
            ->select('*')
            ->where('student_id', '=', $id)
            ->get()
            ->first();

        return view('student_show', compact('student'));
    }

    public function index()
    {
        $students = Student::query()
            ->select('student_id', 'first_name', 'last_name', 'year_level', 'province')
            ->orderBy('student_id', 'DESC')
            ->orderBy('first_name')
            ->limit(20)
            ->get();
        $total_student = Student::query()
            ->select(DB::raw('COUNT(*) AS total'))
            ->get()
            ->first();
        $students_male = Student::query()
            ->select('first_name', 'last_name', 'gender', 'province')
            ->where('gender', '=', 'Male')
            ->where('province', '=', 'La Union')
            ->where('first_name', 'LIKE', 'C%')
            ->orderBy('last_name')
            ->orderBy('first_name')
            ->limit(5)
            ->get();
        return view('student', compact('total_student', 'students', 'students_male'));
    }
}
