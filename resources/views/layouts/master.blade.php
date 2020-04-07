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
    .bs-example {
      margin: 20px;
    }

    .content {
      text-align: center;
    }

    .full {
      width: 100%;
      height: auto;
    }

    .success {
      color: green;
      padding: 10px;
    }

    .title {
      font-size: 6rem;
    }

    a.active {
      background-color: #426ff5;
      color: white;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-md navbar-light bg-light">
    @if (Route::has('login'))
    <a href="#" class="navbar-brand">Brand</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>

    @auth
    <div class="collapse navbar-collapse" id="navbarCollapse">

      <div class="navbar-nav ml-auto">
        <a href="/home" class="nav-item nav-link {{ active('home') }}">Home</a>
        <a href="/reports" class="nav-item nav-link {{ active('reports') }}">Reports</a>
        <a href="/overview" class="nav-item nav-link {{ active('overview') }}">Overview</a>
      </div>

      <div class="navbar-nav ml-auto">
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

  @yield('content')

</body>

</html>