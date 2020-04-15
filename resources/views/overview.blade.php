@extends('layouts.master')
@section('content')
<<<<<<< HEAD
<html>
<head>
<title> OverView </title>
 <script type = "text/javascript">
    $(document).on('click','a',function(){
      $(this).addClass('active')
    });
 </script>
<div class="row">
    <a href="courses/create" class="btn btn-success">
        <span>Add New Class</span></a>
</div>
=======
<br />
<div class="container content">
    @if(session('success'))
    <h2 class="success">{{session('success')}}</h2>
    @endif
    <div class="row">
        <a href="courses/create" class="btn btn-success">
            <span>Add New Course</span></a>
    </div>
    <h2>Courses</h2>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
>>>>>>> 457618502ff46ba920c449d4e78898a4e5ff1c64

                <th>Class</th>
                <th>Class ID</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
        </thead>
        @foreach($courses as $course)
        <tr>

            <td>{{$course->course_title}}</td>
            <td>{{$course->course_id}}</td>
            <td>
                <form action="courses/{{$course->id}}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <button class="btn btn-danger" type="submit" value="Delete">Delete</button>
                </form>
            </td>
            <td>
                <form action="courses/{{$course->id}}/edit" method="get">
                    @csrf
                    <button class="btn btn-primary" type="submit" value="Edit">Edit</button>
                </form>
            </td>

        </tr>
<<<<<<< HEAD
    </thead>
   
</table>
</html>
=======
        @endforeach
    </table>

    <br />

    <div class="row">
        <a href="courses_by_semester/create" class="btn btn-success">
            <span>Add New Course In Semester</span></a>
    </div>
    <h2>Courses By Semester</h2>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Class</th>
                <th>Year</th>
                <th>Semester</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
        </thead>
        @foreach($courses_by_sem as $course)
        <tr>
            <td>{{$course->course_title}}</td>
            <td>{{$course->year}}</td>
            <td>{{$course->semester}}</td>
            <td>
                <form action="courses_by_semester/{{$course->id}}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <button class="btn btn-danger" type="submit" value="Delete">Delete</button>
                </form>
            </td>
            <td>
                <form action="courses_by_semester/{{$course->id}}/edit" method="get">
                    @csrf
                    <button class="btn btn-primary" type="submit" value="Edit">Edit</button>
                </form>
            </td>

        </tr>
        @endforeach
    </table>
</div>
>>>>>>> 457618502ff46ba920c449d4e78898a4e5ff1c64
@stop