<?php

namespace App\Http\Controllers;

use DB;

use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function index() {
        $faculties = Faculty::query()
            ->select('last_name', 'first_name', 'department', 'faculty_id')
            ->orderBy('last_name')
            ->limit(25)
            ->get();
        $faculty_data = Faculty::query()
            ->select('department', DB::raw('COUNT(*) AS total'))
            ->groupBy('department')
            ->orderBy('department')
            ->get();
        $faculty_points = Faculty::query()
            ->select('last_name', 'first_name', 'academe_points')
            ->join('faculties_educ', 'faculties_educ.faculty_id', '=', 'faculties.faculty_id')
            ->where('academe_points', '>=', '1200')
            ->orderBy('last_name')
            ->limit(5)
            ->get();

        return view('faculties', compact('faculties', 'faculty_data', 'faculty_points'));
    }
}
