@extends('navbar')
@section('title', 'Login')

@section('content')
<body class="text-center">

  @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{session('success')}}
    </div> 
  @elseif(session()->has('successLogOut'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{session('successLogOut')}}
    </div> 
  @endif
    
  <main class="form-login w-100 m-auto">
    <form action="/login" method="post">
      @csrf
      <h1 class="h3 mb-3 fw-normal text-nav" style="margin-top: 20px">Login</h1>

      <div class="form-floating">
        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
        <label for="email">Email address</label>
      </div>

      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        <label for="password">Password</label>
      </div>

      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="remember_me" name="remember_me">
        <label class="form-check-label" for="remember_me">Remember me</label>
      </div>
        
      </div>
        <button class="w-100 btn btn-lg" style="background-color: #292A5E; color:white;" type="submit">Login</button>
        <div class="go-here">
          <p>Don't have an account? <a href="register" class="text-nav" style="font-weight: bold; text-decoration: none;">Register</a></p>
        </div>
    </form>
  </main>

</body>
</html>
@endsection
