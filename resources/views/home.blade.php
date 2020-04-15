@extends('layouts.master')
@section('content')

<body>
<<<<<<< HEAD
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="/home">Home</a>
            <a href="/reports"> Reports </a>
            <a href="/overview"> Overview </a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @else
            <a href="{{ route('login') }}">Login</a>
=======
>>>>>>> 457618502ff46ba920c449d4e78898a4e5ff1c64

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