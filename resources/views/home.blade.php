@extends('layouts.master')
@section('content')

<body>

    <div class="content home-container">
        <div class="title home-centered">
            @if (Auth::check())
            Hi, {{Auth::user()->name}}!
            @endif
        </div>
        <img src="{{ asset('AU.jpeg') }}" alt="AU1" class="full">
    </div>




</body>

</html>
@stop