@extends('layouts.master')

@section('content')

@if (session('failure'))
<div class="alert alert-error">
  {{ session('failure') }}
</div>
@endif

<h2 class="text-center p-4">Report Page</h3>

  <form method="post" action="/process_report">
    @CSRF
    <label for="class_name">Chose a class</label>
    <select name="class_id" class="form-control" onchange="myFunction({{$courses}})">
      @foreach($courses as $course)
      <option value={{$course->id}}>{{$course->course_id}}</option>
      @endforeach
    </select>

    <div class="row py-4">


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
    <button class="btn btn-primary">Click me </button>

  </form>

  @stop