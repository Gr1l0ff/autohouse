<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>Document</title>
</head>
<body>
  <nav class="main-nav">
    <ul>
      <li><a href="{{ route('/') }}">Home</a></li>
      <li id="nav-menu"><i class="fa fa-navicon"></i></li>
    </ul>
  </nav>

  <div id="mySidenav" class="sidenav">
    <p id="menu-remove"><i class="fa fa-remove"></i></p>
    <div>
  
       
   
      <a href="#">Servisi</a>
      <a href="{{ route('offer') }}">Ponudba</a>

      @guest
        <a href="{{ route('register') }}">Registracija</a>
        <a href="{{ route('login') }}">Prijava</a>
      @endguest
      @auth
        @if(auth()->user()->is_admin == 1)
          <a href="{{ route('cars') }}">Avtomobili</a>
      @endif
        <form action="{{ route('logout') }}" method="POST">
          @csrf
          <button class="submit">Odjava</button>
        </form>
      @endauth
    </div>
  </div>
@yield('content')



<footer>
  <h4 class="text-center">Copyright &copy; all rights reserved Grily</h4>
</footer>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>