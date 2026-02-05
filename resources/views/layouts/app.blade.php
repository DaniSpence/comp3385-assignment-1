<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>COMP3385 - Lab 1</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>
    <header>
      <h1>COMP3385 - Lab 1</h1>
    </header>
    <main>
      @yield('content')
      <img src="{{ url('images/image.png') }}" alt = "Wedding photo"/>
    </main>
    <footer>
      <p>Copyright 2026 COMP338 Inc.</p>
    </footer>
  </body>
</html>