@extends('layouts.master')

@section('content')

<h3 class="text-center p-3">Selected {{$selectedCourse->course_id}} between {{$startYear}} & {{$endYear}}</h3>

<table class="table table-striped">
  <thead class=" thead-dark">
    <tr>
      <th>Semester</th>
      <th>Year</th>
      <th>Teacher</th>
      <th>Location</th>
      <th>Students</th>
    </tr>
  </thead>
  <tbody>
    @foreach($courses as $course)
    <tr>
      <td>{{$course->semester}}</td>
      <td>{{$course->year}}</td>
      <td>{{$course->teacher}}</td>
      <td>{{$course->location}}</td>
      <td>{{$course->number_of_students}}</td>
    </tr>
    @endforeach
  </tbody>

</table>
<a href="{{ URL::previous() }}">Back</a>


@stop