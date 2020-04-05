@extends('layouts.master')
@section('content')
<div class="row">
    <a href="courses/create" class="btn btn-success">
        <span>Add New Class</span></a>
</div>

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Class</th>
            <th>Class Id</th>
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