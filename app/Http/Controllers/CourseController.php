<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\course;

class CourseController extends Controller
{
    public function create(Request $request)
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        print("init boys");
        /*
        $request->validate([
            'course_id' => 'required',
            'course_title' => 'required'
        ]);

        $course = new course([
            'course_id' => $request->get('course_id'),
            'course_title' => $request->get('course_title')
        ]);*/

        $course = course::create($request->all());

        //$course->save();

        print("saved boys");
        //return redirect('/courses')->with('success', 'course created!');
    }
}
