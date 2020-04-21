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
    <h2>Editing Course By Semester</h2>
    <form action="{{ route('courses_by_semester.update', $course_by_semester->id) }}" method='POST'>
        @method('PUT')
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="class_names">Title:</label>
                <select id='class_names' name="course_id" class="form-control">
                    @foreach($courses as $course)
                    print($course);
                    @if($course_by_semester->course_id == $course->id)
                    <option value="{{$course->id}}" selected>{{$course->course_title}}</option>
                    @else
                    <option value="{{$course->id}}">{{$course->course_title}}</option>
                    @endif @endforeach
                </select>
            </div>
            <div class="form-group  col-md-4">
                <label for="semester">Semester:</label>
                <select name="semester" class="form-control">
                    @if($course_by_semester->semester == 'spring')
                    <option value="spring" selected>Spring</option>
                    <option value="fall">Fall</option>
                    @else
                    <option value="fall" selected>Fall</option>
                    <option value="spring">Spring</option>
                    @endif
                </select>
            </div>

        </div>
        <div class="form-row">
            <div class="form-group  col-md-6">
                <label for="class_location">Location:</label>
                <input class="form-control" type="text" name='class_location' value="{{$course_by_semester->location}}">
            </div>
            <div class="form-group col-sm-4">
                <label for="number_of_students">Number of Students</label>
                <input type="number" class="form-control" name="number_of_students" value="{{$course_by_semester->number_of_students}}" />
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="teacher">Teacher:</label>
                <input type="text" class="form-control" name="teacher" value="{{$course_by_semester->teacher}}" />
            </div>

            <div class="form-group  col-md-4">
                <label for="year">Year:</label>
                <input type="number" class="form-control" name="year" value="{{$course_by_semester->year}}" />
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</div>
@stop