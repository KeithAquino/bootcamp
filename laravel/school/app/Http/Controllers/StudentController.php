<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\Student;
use Illuminate\Http\Request;
use Kyslik\ColumnSortable\Sortable;

class StudentController extends Controller
{
    use Sortable;


    public function delete_student(string $id)
    {
        $student = Student::where('student_id', '=', $id)
            ->delete();

        return redirect('/admin/students')
            ->with('success', 'Successfully deleted.');
    }

    public function edit_student(Request $r, string $id)
    {
        $student = Student::where('student_id', '=', $id)
            ->update(
                [
                    'first_name' => $r->input('first_name'),
                    'last_name' => $r->input('last_name'),
                    'birthdate' => $r->input('birthdate'),
                    'year_level' => $r->input('year_level'),
                    'gender' => $r->input('gender'),
                    'mobile_number' => $r->input('mobile_number'),
                    'email_address' => $r->input('email_address'),
                    'province' => $r->input('province'),
                ]
            );

        // return redirect('students/' . $id);
        return redirect('/admin/students')
            ->with('success', 'Successfully edited.');
    }

    public function edit_student_form(string $id)
    {
        $student = Student::query()
            ->select('*')
            ->where('student_id', '=', $id)
            ->get()
            ->first();

        return view('student_edit', compact('student'));
    }

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

        return redirect("/admin/students")
            ->with('success', 'Successfully added');
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

    public function index(Request $r)
    {
        $students = Student::query()
            ->select('student_id', 'first_name', 'last_name', 'year_level', 'province');
        // ->orderBy('student_id', 'DESC')
        // ->orderBy('first_name');

        if ($r->filled("search")) {
            $students->where(function ($query) use ($r) {
                $query->where('first_name', 'LIKE', '%' . $r->input('search') . '%')
                    ->orWhere('last_name', 'LIKE', '%' . $r->input('search') . '%')
                    ->orWhere('province', 'LIKE', '%' . $r->input('search') . '%');
            });
        }

        if ($r->filled('year_level')) {
            $students->where('year_level', '=', $r->input('year_level'));
        }
        if ($r->filled('gender')) {
            $students->where('gender', '=', $r->input('gender'));
        }

        $students = $students
            ->sortable()->paginate(20);
        $students->appends($r->except('page'));

        // $total_student = DB::select("SELECT COUNT(*) AS total FROM students");
        // $students = DB::select("SELECT first_name, last_name, year_level, province FROM students ORDER BY last_name LIMIT 20");

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
