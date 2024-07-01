<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    {{-- CSS --}}
    <link href="/css/style.css" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    {{-- Fonts --}}
    <style>
        @import url('https://fonts.cdnfonts.com/css/poppins');
        body{
            font-family: 'Poppins', sans-serif;
        }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg" style="background-color: #f8dee8;">
        <div class="container-fluid">
          <a class="navbar-brand text-nav" href="/"><img src="{{ asset('/storage/image/logo.png') }}" style="height: 50px" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-nav" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Categories
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item text-nav" href="/category/1">Make Up</a></li>
                      <li><a class="dropdown-item text-nav" href="/category/2">Skin Care</a></li>
                      <li><a class="dropdown-item text-nav" href="/category/3">Body Care</a></li>
                    </ul>
                </li>

                  @auth
                    @if(Auth::user()->role == 'Admin')
                      <li class="nav-item">
                        <a class="nav-link text-nav" href="/manage">Manage Product</a>
                      </li>
                    @endif

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-nav" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{auth()->user()->name}}
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item text-nav" href="/profile">Profile</a></li>
                        @if(Auth::user()->role == 'User')
                          <li><a class="dropdown-item text-nav" href="/history/{{Auth::user()->id}}">History</a></li>
                        @endif
                        <li><a class="dropdown-item text-nav" href="/logout">Logout</a></li>
                      </ul>
                    </li>
                  </span>

                  @if(Auth::user()->role == 'User')
                    <li class="nav-item">
                      <a class="nav-link" style="color:#292A5E;" href="/cart/{{Auth::user()->id}}"><i class="bi bi-cart-fill"></i></a>
                    </li>
                  @endif
      
                  @else
                  <li class="nav-item">
                    <a class="nav-link text-nav" href="/login">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-nav" href="/register">Register</a>
                  </li>
                  
                  @endauth
            </ul>

            <div class="search">
              <form class="form-inline my-2 my-lg-0" action="/">
                <input class="form-control mr-sm-2" style="border-color:#292A5E;" type="search" placeholder="Search" aria-label="Search" id="search" name="search">
                <button class="btn btn-colors my-2 my-sm-0" type="submit"><i class="bi bi-search-heart-fill"></i></button>
              </form>
            </div>
          </div>
        </div>
      </nav>

      @yield('content')
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> --}}
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>