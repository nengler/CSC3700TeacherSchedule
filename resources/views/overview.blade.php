@extends('layouts.master')
@section('content')
@foreach($courses as $course)
<tr>
    <td>{{$course->id}}</td>
    <td>{{$course->course_title}}</td>
    <td>{{$course->course_id}}</td>
    <td>
        <form action="course/{{$course->id}}" method="post"></form>
        @csrf
        {{method_field('DELETE')}}
        <input type="submit" value="Delete">
    </td>
    <td>
        <form action="course/{{$course->id}}/edit" method="get"></form>
        @csrf
        <input type="submit" value="Edit">
    </td>

</tr>
@endforeach

@stop