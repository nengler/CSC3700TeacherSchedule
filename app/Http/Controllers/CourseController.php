<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\course;

class CourseController extends Controller
{
    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $course = course::create($request->all());

        print("saved boys");
    }
}
