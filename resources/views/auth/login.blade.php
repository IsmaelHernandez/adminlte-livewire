@extends('layouts.app')

@section('content')
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-info text-black" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">
              <form class="form" action="{{ route('login') }}" method="post">
                @csrf
                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                <div class="form-outline form-white mb-4">
                  <input type="email" name="email" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" value="{{ old('email') }}" autocomplete="email" autofocus" />
                  <label class="form-label" for="email">Email</label>
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="password" name="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" value="{{ old('password') }}" autocomplete="current-password"" />
                  <label class="form-label" for="password">Password</label>
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                @if (Route::has('password.request'))
                  <p class="small mb-5 pb-lg-2"><a class="text-black" href="{{ route('password.request') }}">Forgot password?</a></p>
                @endif
                <button class="text-center btn btn-outline-light bg-red px-5" type="submit">{{ __('Login') }}</button>

                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                  <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                  <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                  <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                </div>
              </form>
            </div>

            <div>
              <p class="mb-0">Don't have an account? <a href="{{ route('register') }}" class="text-white-50 fw-bold">Sign Up</a></p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
