<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Page;
use App\course;
use App\course_by_semester;

class PagesController extends Controller
{

  public function index()
  {
    return view('index');
  }

  public function uploadFile(Request $request)
  {

    if ($request->input('submit') != null) {

      $file = $request->file('file');

      // File Details 
      $filename = $file->getClientOriginalName();
      $extension = $file->getClientOriginalExtension();
      $tempPath = $file->getRealPath();
      $fileSize = $file->getSize();
      $mimeType = $file->getMimeType();

      // Valid File Extensions
      $valid_extension = array("csv");

      // 2MB in Bytes
      $maxFileSize = 2097152;

      // Check file extension
      if (in_array(strtolower($extension), $valid_extension)) {

        // Check file size
        if ($fileSize <= $maxFileSize) {

          // File upload location
          $location = 'uploads';

          // Upload file
          $file->move($location, $filename);

          // Import CSV to Database
          $filepath = public_path($location . "/" . $filename);

          // Reading file
          $file = fopen($filepath, "r");

          $importData_arr = array();
          $i = 0;

          while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
            $num = count($filedata);

            // Skip first row (Remove below comment if you want to skip the first row)
            /*if($i == 0){
                $i++;
                continue; 
             }*/
            for ($c = 0; $c < $num; $c++) {
              $importData_arr[$i][] = $filedata[$c];
            }
            $i++;
          }
          fclose($file);

          // Insert to MySQL database
          foreach ($importData_arr as $importData) {
            $course = course::where('course_id', $importData[1])->first();
            if (empty($course)) {
              $course = course::create([
                "course_title" => $importData[7],
                "course_id" => $importData[1],
              ]);
            }
            course_by_semester::create([
              "course_id" => $course->id,
              "location" => $importData[2],
              "number_of_students" => $importData[3],
              "teacher" => $importData[4],
              "semester" => $importData[5],
              "year" => $importData[6],
            ]);
          }

          Session::flash('message', 'Import Successful.');
        } else {
          Session::flash('message', 'File too large. File must be less than 2MB.');
        }
      } else {
        Session::flash('message', 'Invalid File Extension.');
      }
    }

    // Redirect to index
    $course_by_sem = course_by_semester::leftJoin('courses', 'courses.id', '=', 'course_by_semesters.course_id')
      ->select('courses.*', 'course_by_semesters.year', 'course_by_semesters.semester', 'course_by_semesters.id')->get();
    $courses = course::all();
    return redirect('overview')->withSuccess('Course by Semester Created!');
  }
}
