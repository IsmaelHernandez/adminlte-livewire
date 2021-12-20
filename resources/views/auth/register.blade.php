@extends('layouts.app')

@section('content')
<section class="">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card bg-info" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="fw-bold mb-2 text-uppercase text-center">Create User</h2>
  
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-outline mb-4">
                        <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name"" />
                        <label class="form-label text-white" for="name">Name</label>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
  
                  <div class="form-outline mb-4">
                    <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"" />
                    <label class="form-label text-white" for="email">E-Mail Address</label>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
  
                  <div class="form-outline mb-4">
                    <input type="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" />
                    <label class="form-label text-white" for="password">Password</label>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
  
                  <div class="form-outline mb-4">
                    <input id="password-confirm" type="password" class="form-control form-control-lg " name="password_confirmation" required autocomplete="new-password"/>
                    <label class="form-label text-white" for="password-confirm">Confirm Password</label>
                  </div>
  
                  <div class="d-flex justify-content-center">
                    <button type="submit" class="text-center btn btn-outline-light bg-red px-5">Register</button>
                  </div>  
                </form>
  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection