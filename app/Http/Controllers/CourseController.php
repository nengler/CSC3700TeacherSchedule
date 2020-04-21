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
        if (empty($request->input("course_id")) || empty($request->input("course_title"))) {
            return redirect('courses/create')->withErrors("Please Fill out all fields");
        }
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
        $course->course_by_semesters()->delete();
        $course->delete();

        return redirect("overview");
    }

    public function report()
    {
        $courses = course::all();
        $coursesBySemester = course_by_semester::all();
        return \View::make("report")->with('courses', $courses)->with('coursesBySemester', $coursesBySemester);
    }

    public function process_class_report(Request $req)
    {
        if (empty($req->input("start_year")) || empty($req->input("end_year")) || empty($req->input("class_id"))) {
            return redirect('report');
        }
        $startYear = $req->input("start_year");
        $endYear = $req->input("end_year");
        if ($startYear > $endYear) {
            return redirect('report')->with('failure', 'End year has to be greater than start year');
        }
        $courseId = $req->input("class_id");
        $courses = course_by_semester::where('course_id', $courseId)->whereBetween('year', [$startYear, $endYear])->orderBy('year', 'ASC')->get();
        $selectedCourse = course::where('id', $courseId)->first();
        $data = [
            'courses' => $courses,
            'selectedCourse' => $selectedCourse,
            'startYear' => $startYear,
            'endYear' => $endYear,
        ];
        return \View::make("process_class_report")->with($data);
    }

    public function process_semester_report(Request $req)
    {
        if (empty($req->input("year")) || empty($req->input("semester"))) {
            return redirect('report');
        }
        $year = $req->input("year");
        $semester = $req->input("semester");
        //$courses = course_by_semester::where('year', $year)->where('semester', $semester)->get();
        $courses = course_by_semester::join('courses', 'courses.id', '=', 'course_by_semesters.course_id')
            ->select(
                'courses.course_title',
                'courses.course_id',
                'course_by_semesters.teacher',
                'course_by_semesters.location',
                'course_by_semesters.number_of_students'
            )
            ->where('year', $year)->where('semester', $semester)->get();
        $data = [
            'year' => $year,
            'courses' => $courses,
            'semester' => $semester,
        ];
        return \View::make("process_semester_report")->with($data);
    }
}
