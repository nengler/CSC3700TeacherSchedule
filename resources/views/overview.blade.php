@extends('layouts.master')
@section('content')
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

<table class="table">
    <thead>
        <tr>
            <th>Class</th>
            <th>Year</th>
            <th>Semester</th>
        </tr>
    </thead>
   
</table>
</html>
@stop