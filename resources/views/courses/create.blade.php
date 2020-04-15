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
<div class="container" style="padding-top: 2rem">
  <h2>Add New Course</h2>
  <form method="post" action="{{ route('courses.store') }}">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="course_id">Course ID:</label>
        <input type="text" class="form-control" name="course_id" />
      </div>

      <div class="form-group col-md-6">
        <label for="course_title">Course Title:</label>
        <input type="text" class="form-control" name="course_title" />
      </div>
    </div>


    <button type="submit" class="btn btn-primary">Add Course</button>
  </form>
</div>
@stop