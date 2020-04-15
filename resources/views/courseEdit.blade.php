@extends('layouts/master')

@section('content')
<div class="container">
    <h2>Editing Course</h2>
    <form action="/courses" method='POST'>
        <div class="form-group">
            @csrf
            ID: {{$course->id}}
            Title: <input type="text" name='title' value="{{$course->course_title}}">
            Class ID: <input type="text" name='class_id' value="{{$course->class_id}}">
        </div>
        <button class="btn btn-primary">Submit</button>
    </form>
</div>
@stop