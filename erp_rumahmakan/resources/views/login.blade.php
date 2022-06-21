@extends('layouts.main')
@section('content')

<div class="row  justify-content-center pt-5 mt-5">
  <div class="col-md-4">
    {{-- allert  --}}
    @if (session()->has('success'))
        
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>{{ session('success') }}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif 
    @if (session()->has('loginError'))
        
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>{{ session('loginError') }}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif 

        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Please log in</h1>
            <form action="/login" method="POST">
              @csrf          
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror

              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
            </form>
          </main>
        
    </div>
</div>
@endsection