@extends('layouts.master')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<div class="container pt-4">
  <div>
    <h2>Add New Course By Semester</h2>
    <form method="post" action="{{ route('courses_by_semester.store') }}">
      @csrf
      <div class="form-row">

        <div class="form-group col-md-6">
          <label for="course_id">Course</label>
          <select name="course_id" class="form-control">
            @foreach($courses as $course)
            <option value={{$course->id}}>{{$course->course_title}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group col-md-4">
          <label for="semester">Semester:</label>
          <select name="semester" class="form-control">
            <option value="spring">Spring</option>
            <option value="fall">Fall</option>
          </select>
        </div>

      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="number_of_students">Location:</label>
          <input type="text" class="form-control" name="location" />
        </div>

        <div class="form-group col-sm-4">
          <label for="number_of_students">Number of students:</label>
          <input type="number" class="form-control" name="number_of_students" />
        </div>
      </div>


      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="teacher">Teacher:</label>
          <input type="text" class="form-control" name="teacher" />
        </div>


        <div class="form-group col-md-4">
          <label for="year">Year:</label>
          <input type="number" class="form-control" name="year" />
        </div>
      </div>


      <button type="submit" class="btn btn-primary">Add Course</button>
    </form>
    <div class="pt-3">
      <h2>Import CSV File</h2>

      <form method='post' action='/uploadFile' enctype='multipart/form-data'>
        {{ csrf_field() }}
        <input type='file' name='file'>
        <input type='submit' name='submit' value='Import'>
      </form>
    </div>
  </div>
</div>
</div>
@stop