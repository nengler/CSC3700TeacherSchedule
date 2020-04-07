@extends('layouts.master')

@section('content')

@if($courses->isEmpty())
<h3 class="text-center p-3">No Classes during {{$year}} {{$semester}}</h3>
@else

<h3 class="text-center p-3">Selected {{$year}} {{ucfirst($semester)}}</h3>

<table class="table table-striped">
  <thead class=" thead-dark">
    <tr>
      <th>Teacher</th>
      <th>Location</th>
      <th>Number of Students</th>
    </tr>
  </thead>
  <tbody>
    @foreach($courses as $course)
    <tr>
      <td>{{$course->teacher}}</td>
      <td>{{$course->location}}</td>
      <td>{{$course->number_of_students}}</td>
    </tr>
    @endforeach
  </tbody>

</table>

@endif
<a href="{{ URL::previous() }}">Back</a>


@stop