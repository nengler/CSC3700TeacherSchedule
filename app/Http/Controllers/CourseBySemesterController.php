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
    public function index()
    {
        $course = course_by_semester::leftJoin('courses', 'courses.id', '=', 'course_by_semesters.course_id')
            ->select('courses.*', 'course_by_semesters.year', 'course_by_semesters.semester', 'course_by_semesters.id')->get();
        print($course);
        return \View::make('overview')->with('courses', $course);
    }
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
    public function destroy($id)
    {
        $course = course_by_semester::find($id);
        $course->delete();
        print("inside destroy");
        return redirect("courses");
    }
}
