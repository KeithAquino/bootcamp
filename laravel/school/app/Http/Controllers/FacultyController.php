<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\FacultiesEduc;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function add_faculty_educ(Request $r, string $id)
    {
        $fe = new FacultiesEduc;
        $fe->faculty_id = $id;
        $fe->has_unders = $r->input("has_unders");
        $fe->unders_enrolled = $r->input("unders_enrolled");
        $fe->unders_year_received = $r->input("unders_year_received");
        $fe->has_masters = $r->input("has_masters");
        $fe->masters_enrolled = $r->input("masters_enrolled");
        $fe->masters_year_received = $r->input("masters_year_received");
        $fe->has_doctors = $r->input("has_doctors");
        $fe->doctors_enrolled = $r->input("doctors_enrolled");
        $fe->doctors_year_received = $r->input("doctors_year_received");
        $fe->academe_points = 0;
        $fe->save();

        return redirect('/admin/faculties/' . $id);
    }

    public function add_faculty_educ_form(string $id)
    {
        $faculty = Faculty::query()
            ->select('*')
            ->where('faculty_id', '=', $id)
            ->get()
            ->first();

        return view('faculty_educ', compact('faculty'));
    }

    public function delete_faculty(string $id)
    {
        $faculty = Faculty::where('faculty_id', '=', $id)->delete();

        return redirect('faculties');
    }

    public function edit_faculty(Request $r, string $id)
    {
        $faculty = Faculty::where('faculty_id', '=', $id)
            ->update(
                [
                    'first_name' => $r->input('first_name'),
                    'last_name' => $r->input('last_name'),
                    'birthdate' => $r->input('birthdate'),
                    'gender' => $r->input('gender'),
                    'mobile_number' => $r->input('mobile_number'),
                    'email_address' => $r->input('email_address'),
                    'position' => $r->input('position'),
                    'department' => $r->input('department'),
                ]
            );

        return redirect('faculties');
    }
    public function edit_faculty_form(string $id)
    {
        $faculty = Faculty::query()
            ->select('*')
            ->where('faculty_id', '=', $id)
            ->get()
            ->first();

        return view('faculty_edit', compact('faculty'));
    }

    public function show_faculty(string $id)
    {
        $faculty = Faculty::query()
            ->select('*')
            ->join('faculties_educ', 'faculties.faculty_id', '=', 'faculties_educ.faculty_id')
            ->where('faculties.faculty_id', '=', $id)
            ->get()
            ->first();

        return view('faculty_show', compact('faculty'));
    }

    public function add_faculty(Request $r)
    {
        $faculty = new Faculty;
        $faculty->first_name = $r->input('first_name');
        $faculty->last_name = $r->input('last_name');
        $faculty->birthdate = $r->input('birthdate');
        $faculty->gender = $r->input('gender');
        $faculty->mobile_number = $r->input('mobile_number');
        $faculty->email_address = $r->input('email_address');
        $faculty->date_entered = date('Y-m-d');
        $faculty->position = $r->input('position');
        $faculty->department = $r->input('department');
        $faculty->save();

        return redirect("admin/faculties");
    }

    public function add_faculty_form()
    {
        return view('faculty_create');
    }

    public function index()
    {
        $faculties = Faculty::query()
            ->select('faculty_id', 'first_name', 'last_name', 'department')
            ->orderBy('faculty_id', 'DESC')
            ->limit(25)
            ->get();

        $faculties_dept = Faculty::query()
            ->select('department', DB::raw('COUNT(*) AS total_faculty'))
            ->groupBy('department')
            ->get();

        $faculties_points = Faculty::query()
            ->select('first_name', 'last_name', 'academe_points')
            ->join('faculties_educ', 'faculties.faculty_id', '=', 'faculties_educ.faculty_id')
            ->where('academe_points', '>=', 1200)
            ->orderBy('last_name')
            ->limit(5)
            ->get();

        return view('faculty', compact('faculties', 'faculties_dept', 'faculties_points'));
    }
}
