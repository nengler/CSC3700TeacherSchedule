@extends('layouts.master')
@section('content')

<body>

    <div class="content">
        <div class="title">
            @if (Auth::check())
            Hi, {{Auth::user()->name}}!
            @endif
        </div>
    </div>

    <img src="{{ asset('AU.jpeg') }}" alt="AU1" class="full">



</body>

</html>
@stop