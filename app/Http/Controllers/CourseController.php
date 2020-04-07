<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\course;
use App\course_by_semester;

class CourseController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data = course::all();
        return \View::make('overview')->with('courses', $data);
    }
    public function create()
    {
        return view('courses.create');
    }
    public function store(Request $request)
    {
        $course = course::create($request->all());
        return redirect('overview')->withSuccess('Course Created!');
    }
    public function show()
    {
    }
    public function edit($id)
    {
        $course = course::find($id);
        //return \View::make("courseEdit")->with('course', $course);
        return view('courses.edit')->with('course', $course);
    }
    public function update(Request $request, $id)
    {
        $course = course::find($id);
        $course->course_title = $request->input("title");
        $course->course_id = $request->input("class_id");
        $course->save();
        return redirect('overview')->withSuccess("Course Updated!");
    }
    public function destroy($id)
    {
        $course = course::find($id);
        $course->delete();

        return redirect("overview");
    }
}
