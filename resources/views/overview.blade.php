@extends('layouts.master')
@section('content')
<div class="row">
    <a href="courses/create" class="btn btn-success">
        <span>Add New Class</span></a>
</div>
<h2>Courses By Semester</h2>
<table class="table">
    <thead>
        <tr>
            <th>Class</th>
            <th>Year</th>
            <th>Semester</th>
        </tr>
    </thead>
    @foreach($courses as $course)
    <tr>
        <td>{{$course->course_title}}</td>
        <td>{{$course->year}}</td>
        <td>{{$course->semester}}</td>
        <td>
            <form action="courses_by_semester/{{$course->id}}" method="post">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit" value="Delete">
            </form>
        </td>
        <td>
            <form action="courses_by_semester/{{$course->id}}/edit" method="get">
                @csrf
                <input type="submit" value="Edit">
            </form>
        </td>

    </tr>
    @endforeach
</table>

<h2>Courses</h2>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Class</th>
            <th>Class ID</th>
        </tr>
    </thead>
    @foreach($courses as $course)
    <tr>
        <td>{{$course->id}}</td>
        <td>{{$course->course_title}}</td>
        <td>{{$course->course_id}}</td>
        <td>
            <form action="courses/{{$course->id}}" method="post">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit" value="Delete">
            </form>
        </td>
        <td>
            <form action="courses/{{$course->id}}/edit" method="get">
                @csrf
                <input type="submit" value="Edit">
            </form>
        </td>

    </tr>
    @endforeach
</table>

@stop