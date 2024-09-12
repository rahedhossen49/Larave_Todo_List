<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo Application @yield('title')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  @notifyCss

  <style>
    .notify {
      z-index: 999999;
    }
  </style>
</head>
<body>
  <x:notify::notify />
<nav class="navbar navbar-expand-lg bg-dark navbar-dark mt-15">
  <div class="container">
<h5 class="text-light">Todo Application</h5>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item ">
          <a class="nav-link text-light" aria-current="page" href="{{route('todo.form')}}">Add Todo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-light" aria-current="page" href="{{route('todo.all')}}">All Todos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>





   {{-- Dynamic Content start  --}}


    @yield('content')


   {{-- Dynamic Content End --}}




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@notifyJs
</body>
</html>