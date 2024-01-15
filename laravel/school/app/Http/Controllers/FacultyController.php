<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Faculty;

use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function index() {
        $faculties = Faculty::query()
            ->select('faculty_id', 'first_name', 'last_name', 'department')
            ->orderBy('last_name')
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
