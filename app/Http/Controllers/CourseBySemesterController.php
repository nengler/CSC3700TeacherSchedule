<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\course_by_semester;
use App\course;

class CourseBySemesterController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function overview()
    {
        $course_by_sem = course_by_semester::leftJoin('courses', 'courses.id', '=', 'course_by_semesters.course_id')
            ->select('courses.*', 'course_by_semesters.year', 'course_by_semesters.semester', 'course_by_semesters.id')->get();
        $courses = course::all();
        return \View::make('overview')->with('courses_by_sem', $course_by_sem)->with('courses', $courses);
    }
    public function create()
    {
        $data = course::all();
        return view('course_by_semester.create')->with('courses', $data);
    }

    public function store(Request $request)
    {
        $course_by_semester = course_by_semester::create($request->all());
        return redirect('overview')->withSuccess('Course by Semester Created!');
    }
    public function destroy($id)
    {
        $course = course_by_semester::find($id);
        $course->delete();
        print("inside destroy");
        return redirect("overview");
    }
}
