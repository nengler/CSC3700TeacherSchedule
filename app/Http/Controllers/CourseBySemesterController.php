<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\course_by_semester;
use App\course;

class CourseBySemesterController extends Controller
{
    public function create()
    {
        $data = course::all();
        return view('course_by_semester.create')->with('courses', $data);
    }

    public function store(Request $request)
    {
        $course_by_semester = course_by_semester::create($request->all());

        print("saved boys");
    }
}
