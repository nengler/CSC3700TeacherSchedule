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

    public function edit($id)
    {
        $course_by_semester = course_by_semester::find($id);
        $courses = course::all();

        $data = ['courses' => $courses, 'course_by_semester' => $course_by_semester];
        return view('course_by_semester.edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        $course_by_semester = course_by_semester::find($id);
        $course_by_semester->course_id = $request->input("course_id");
        $course_by_semester->location = $request->input("class_location");
        $course_by_semester->number_of_students = $request->input("number_of_students");
        $course_by_semester->teacher = $request->input("teacher");
        $course_by_semester->semester = $request->input("semester");
        $course_by_semester->year = $request->input("year");
        $course_by_semester->save();

        return redirect('overview')->withSuccess("Course by Semester Updated!");
    }
    public function destroy($id)
    {
        $course = course_by_semester::find($id);
        $course->delete();

        return redirect("overview");
    }
}
