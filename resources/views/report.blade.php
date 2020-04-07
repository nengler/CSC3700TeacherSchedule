@extends('layouts.master')

@section('content')

<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">

@if (session('failure'))
<div class="alert alert-error">
  {{ session('failure') }}
</div>
@endif

<h2 class="text-center p-4">Report Page</h3>

  <input type="radio" name="type-of-report" onchange="myFunction()" value="by-class" checked> By Class</input>
  <input type="radio" name="type-of-report" onchange="myFunction()" value="by-semester"> By Semester</input>

  <?php

  if (isset($_POST['type-of-report'])) {

    $heyo =  $_POST['type-of-report'];
    echo $heyo;
  }
  ?>

  <form method="post" action="/process_class_report" class="do-show" id="by-class-form">
    @method('GET')
    @CSRF
    <div class="py-2">
      <label for="class_name">Chose a class</label>
      <select name="class_id" class="form-control" onchange="myFunction({{$courses}})">
        @foreach($courses as $course)
        <option value={{$course->id}}>{{$course->course_id}}</option>
        @endforeach
      </select>
    </div>

    <div class="row py-2">


      <div class="col-6">
        <label for="start_year">Start Year</label>
        <select name="start_year" class="form-control" id="start_year">
          @for($i = 2010; $i <= now()->year; $i++)
            <option value={{$i}}>{{$i}}</option>
            @endfor
        </select>
      </div>

      <div class="col-6">
        <label for="end_year">End Year</label>
        <select id="end_year" class="form-control" name="end_year">
          @for($i = 2010; $i <= now()->year; $i++)
            <option value={{$i}}>{{$i}}</option>
            @endfor
        </select>
      </div>
    </div>
    <div class="py-2">
      <button class="btn btn-primary">Click me </button>
    </div>

  </form>

  <form method="post" action="/process_semester_report" class="do-not-show" id="by-semester-form">
    @method('GET')
    @CSRF
    <div class="py-2">
      <label>Select Year</label>
      <select name="year" class="form-control">
        @for($i = 2010; $i <= now()->year; $i++)
          <option value={{$i}}>{{$i}}</option>
          @endfor
      </select>
    </div>
    <div class="py-2">
      <label>Select Semester</label>
      <select name="semester" class="form-control">
        <option value="spring">Spring</option>
        <option value="fall">Fall</option>
      </select>
    </div>
    <div class="py-2">
      <button class="btn btn-primary">Click me </button>
    </div>
  </form>

  <script>
    function myFunction() {
      let classForm = document.getElementById("by-class-form");
      let semesterForm = document.getElementById("by-semester-form");
      if (event.target.value === "by-class") {
        classForm.className = ("do-show");
        semesterForm.className = ("do-not-show");

      } else if (event.target.value === "by-semester") {
        classForm.className = ("do-not-show");
        semesterForm.className = ("do-show");
      }
    }
  </script>

  @stop