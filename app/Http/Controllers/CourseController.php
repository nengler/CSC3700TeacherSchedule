<?php

namespace App\Http\Controllers;

use App\course;

use Illuminate\Http\Request;

class CourseController extends Controller
{
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

        print("saved boys");
        //return redirect('/courses')->with('success', 'course created!');
    }
    public function show()
    {
    }
    public function edit()
    {
    }
    public function update()
    {
    }
    public function destory()
    {
    }
}
