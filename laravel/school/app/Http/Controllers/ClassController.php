<?php

namespace App\Http\Controllers;

use DB;

use App\Models\Classes;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index() {
        $classes = Classes::query()
            ->select('class_id', 'schedule', 'room', 'name')
            ->join('subjects', 'classes.subject_id', '=', 'subjects.subject_id')
            ->limit(20)
            ->get();

        return view('class', compact('classes'));
    }
}
