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
<form method="post" action="{{ route('courses.store') }}">
  @csrf
  <div class="form-group">
    <label for="course_id">Course ID:</label>
    <input type="text" class="form-control" name="course_id" />
  </div>

  <div class="form-group">
    <label for="course_title">Course Title:</label>
    <input type="text" class="form-control" name="course_title" />
  </div>

  <button type="submit" class="btn btn-primary-outline">Add contact</button>
</form>
@stop