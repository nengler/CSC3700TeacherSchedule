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
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <a href="#" class="navbar-brand">Brand</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav">
        <a href="/home" class="nav-item nav-link">Home</a>
        <a href="/reports" class="nav-item nav-link">Reports</a>
        <a href="/overview" class="nav-item nav-link">Overview</a>
      </div>
      <div class="navbar-nav ml-auto">
        <a href="#" class="nav-item nav-link">Login</a>
      </div>
    </div>
  </nav>

  <div class="container">

    <tbody>
      @yield('content')
    </tbody>

  </div>

</body>

</html>