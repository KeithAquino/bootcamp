<?php

namespace App\Http\Controllers;

use DB;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // $total_student = DB::select("SELECT COUNT(*) as total FROM students");
        // $students = DB::select("SELECT first_name, last_name, year_level, province FROM students ORDER BY last_name LIMIT 20");

        $students = Student::query()
            ->select('first_name', 'last_name', 'year_level', 'province')
            ->orderBy('last_name', 'DESC')
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
