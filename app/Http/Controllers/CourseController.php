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
    }
    //public function index()
    //{
    //    $data = course::all();
    //    return \View::make('overview')->with('courses', $data);
    //}
    public function create()
    {
        return view('courses.create');
    }
    public function store(Request $request)
    {
        $course = course::create($request->all());

        print("saved boys");
        //return redirect('/courses')->with('success', 'course created!');
    }
    public function show()
    {
    }
    public function edit($id)
    {
        print("inside edit");
        $course = course::find($id);
        return \View::make("courseEdit")->with('course', $course);
    }
    public function update()
    {
    }
    public function destroy($id)
    {
    }
}
