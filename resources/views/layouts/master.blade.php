<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Teacher Schedule</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style type="text/css">
<<<<<<< HEAD
    .bs-example {
      margin: 20px;}
      a.active {  
  background-color: #426ff5;
  color: white;
}
=======
    html,
    body {
      width: 100%;
    }

    .content {
      text-align: center;
    }

    .full {
      width: 100%;
      height: auto;
    }

    .home-container {
      position: relative;
      text-align: center;
      color: white;
    }

    .home-centered {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .navbar {
      background-color: white;
      -webkit-box-shadow: 0 8px 6px -6px #999;
      -moz-box-shadow: 0 8px 6px -6px #999;
      box-shadow: 0 8px 6px -6px #999;
      width: 100%;
    }

    .navbar a {
      color: #5b5b5b;
      float: left;
      padding: 12px;
      text-align: center;
      width: 10rem;
    }

    .navbar a:hover {
      background-color: #A9A9A9;
      color: white;
    }

    .navbar button {
      color: black;
    }

    .navbar img {
      width: 4rem;
      height: 4rem;
    }

    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0,0,0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
    }

    .success {
      color: green;
      padding: 10px;
    }

    .title {
      font-size: 5vw;
      font-family: geneva;
      text-shadow: 4px 4px 6px #000000
    }

    a.active {
      background-color: #426ff5;
      color: white;
    }

    .navbar-togger-icon {
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,102,203, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
    }
>>>>>>> 457618502ff46ba920c449d4e78898a4e5ff1c64
  </style>

</head>

<body>

  <nav class="navbar navbar-expand-md sticky-top">
    @if (Route::has('login'))

    <img src="club-logo.png" alt="logo" />

    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
<<<<<<< HEAD
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav">
      
        <a href="/home" class="nav-item nav-link {{ active('home') }}">Home</a> 
        <a href="/reports" class="nav-link {{ active('reports') }}">Reports</a></li> 
        <a href="/overview" class="nav-item nav-link {{ active('overview') }}">Overview</a>
      
      </div>
=======

    @auth
    <div class="collapse navbar-collapse" id="navbarCollapse">

>>>>>>> 457618502ff46ba920c449d4e78898a4e5ff1c64
      <div class="navbar-nav ml-auto">
        <a href="/home" class="nav-item nav-link {{ active('home') }}">Home</a>
        <a href="/report" class="nav-item nav-link {{ active('report') }}">Reports</a>
        <a href="/overview" class="nav-item nav-link {{ active('overview') }}">Overview</a>

        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
        @else
        <a href="{{ route('login') }}">Login</a>
        @if (Route::has('register'))
        <a href="{{ route('register') }}">Register</a>
        @endif
      </div>

    </div>
    @endauth
    @endif
  </nav>
<<<<<<< HEAD

  <div class="container">
  <p id="output"></p>

    @yield('content')

  </div>
=======
  @yield('content')
>>>>>>> 457618502ff46ba920c449d4e78898a4e5ff1c64

</body>

</html>