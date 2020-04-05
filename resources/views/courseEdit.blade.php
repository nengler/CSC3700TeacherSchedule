@extends('layouts/master')
<h2>Editing Course</h2>
@section('content')
<form action="/courses" method='POST'>
    @csrf
    ID: {{$course->id}}
    Title: <input type="text" name='title' value="{{$course->course_title}}">
    Class ID: <input type="text" name='class_id' value="{{$course->class_id}}">
    <input type="submit" value="Update this Course">
</form>
@stop