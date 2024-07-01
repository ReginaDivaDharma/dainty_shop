@extends('navbar')
@section('title', 'Register')

@section('content')
<body class="text-center">
    
<main class="form-signup w-100 m-auto">
  <form action="/register" method="post">
    @csrf
    <h1 class="h3 mb-3 fw-normal text-nav" style="margin-top: 20px" >Register</h1>

    <div class="form-floating">
      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name" required>
      <label for="name">Name</label>

      @error('name')
          <div class="invalid-feedback">
          {{$message}}
          </div>
      @enderror
    </div>

    <div class="form-floating">
      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required>
      <label for="email">Email address</label>

      @error('email')
          <div class="invalid-feedback">
          {{$message}}
          </div>
      @enderror
    </div>

    <div class="form-floating">
      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="password">
      <label for="password">Password</label>

      @error('password')
          <div class="invalid-feedback">
          {{$message}}
          </div>
      @enderror
    </div>

    <div class="form-group">
      <label for="role">Role</label>
      {{-- <div class="form-role"> --}}
        <div class="form-check">
          <input class="form-check-input" type="radio" name="role" id="User" value="User">
          <label class="form-check-label" for="User">User</label>
        </div>

        <div class="form-check">
          <input class="form-check-input" type="radio" name="role" id="Admin" value="Admin">
          <label class="form-check-label" for="Admin">Admin</label>
        </div>
      {{-- </div> --}}
    
      
    @error('role')
        <div class="invalid-feedback">
        {{$message}}
        </div>
    @enderror
  </div>

    {{-- <div class="form-floating mb-2">
        <input type="date" id="dob" class="form-control @error('dob') is-invalid @enderror" name="dob" required>
        <label for="dob" class="col-form-label">Date of Birth</label>

      @error('dob')
          <div class="invalid-feedback">
          {{$message}}
          </div>
      @enderror
    </div> --}}

    {{-- <div class="form-group">
        <label for="country">Country</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="country" id="Indonesia" value="Indonesia">
            <label class="form-check-label" for="Indonesia">Indonesia</label>
          </div>
  
          <div class="form-check">
            <input class="form-check-input" type="radio" name="country" id="Singapore" value="Singapore">
            <label class="form-check-label" for="Singapore">Singapore</label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="radio" name="country" id="Malaysia" value="Malaysia">
            <label class="form-check-label" for="Malaysia">Malaysia</label>
          </div>

      @error('country')
          <div class="invalid-feedback">
          {{$message}}
          </div>
      @enderror
    </div> --}}

    <button class="w-100 btn btn-lg" style="background-color: #292A5E; color:white;" type="submit">Register</button>
    <div class="go-here"><p>Have an account? <a href="login" class="text-nav" style="font-weight: bold; text-decoration: none;">Login</a></p></div>
  </form>
</main>
</body>
@endsection