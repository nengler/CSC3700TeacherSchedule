@extends('layouts.master')
@section('content')
<div class="row">
    <a href="courses/create" class="btn btn-success">
        <span>Add New Class</span></a>
</div>

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
                {{$course->id}}
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

@stop