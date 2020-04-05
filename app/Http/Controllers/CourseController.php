<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\course;
use App\course_by_semester;

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
    public function index()
    {
        $course = course_by_semester::leftJoin('courses', 'courses.id', '=', 'course_by_semesters.course_id')
            ->select('courses.*', 'course_by_semesters.*')->first();
        print($course);
    }
}
