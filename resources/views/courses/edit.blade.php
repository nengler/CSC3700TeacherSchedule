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
    <h2>Editing Course</h2>
    <form action="{{ route('courses.update', $course->id) }}" method='POST'>
        @method('PUT')
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Title: </label><input type="text" name='title' id='title' class="form-control" value="{{$course->course_title}}">

            </div>
            <div class="form-group col-md-6">
                <label for="class_id"> Class ID:</label> <input type="text" name='class_id' class="form-control" id="class_id" value="{{$course->course_id}}">
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</div>
@stop