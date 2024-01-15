<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index() 
    {
        $subjects = Subject::query()
        ->select('subject_id', 'name', 'department')
        ->limit(10)
        ->get();

        return view('subject', compact('subjects'));
    }
}
