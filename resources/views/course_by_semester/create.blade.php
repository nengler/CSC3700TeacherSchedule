@extends('layouts.master')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div><br />
@endif
Import CSV File
<form method='post' action='/uploadFile' enctype='multipart/form-data' >
       {{ csrf_field() }}
       <input type='file' name='file' >
       <input type='submit' name='submit' value='Import'>
     </form>
<form method="post" action="{{ route('courses_by_semester.store') }}">

  @csrf
  <div class="form-group">
    <label for="course_id">Course</label>
    <select name="course_id" class="form-control">
      @foreach($courses as $course)
      <option value={{$course->id}}>{{$course->course_title}}</option>
      @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="number_of_students">Location:</label>
    <input type="text" class="form-control" name="location" />
  </div>

  <div class="form-group">
    <label for="number_of_students">Number of students:</label>
    <input type="number" class="form-control" name="number_of_students" />
  </div>

  <div class="form-group">
    <label for="teacher">Teacher:</label>
    <input type="text" class="form-control" name="teacher" />
  </div>

  <div class="form-group">
    <label for="semester">Semester:</label>
    <select name="semester" class="form-control">
      <option value="spring">Spring</option>
      <option value="fall">Fall</option>
    </select>
  </div>

  <div class="form-group">
    <label for="year">Year:</label>
    <input type="number" class="form-control" name="year" />
  </div>

  <button type="submit" class="btn btn-primary-outline">Add contact</button>
</form>
@stop