@extends('layouts.app')

@section('content')


<div class="row">
    <div class="col-lg-6 right-side img-fluid right-side-login">
      <!-- <img
         style="border-radius: 17px; padding: 10px; margin: 1% 0"
         class="img-fluid"
         src="{{ asset('images/welcome-banner.jpg') }}"
         alt=""> -->
   </div>
<!-- Left Side Pub -->
<div class="col-lg-6 left-side">
   <!-- Logo Part -->
   <div class="logo-container">
      <img class="logo-img"  src="/images/logo.svg" alt="">
      <h1 class="header-logo-text" style="font-weight: bold;">COVIDZ-19</h1>
   </div>
   <!-- TODO: Make the Buttons responsive -->
   <div class="header-title">
      <button class="btn" style="background-color: #E5E5E5; "><img style="width: 25px; height: 25px;" src="/images/google.svg">Sign in with Google </button>
      <button class="btn" style="background-color: #3B5999;">fb</button>
      <button class="btn" style="background-color: #50ABF1">twitter</button>
   </div>
   <div style="margin: 3% auto;"><span style="margin: auto; display: table;">Or</span></div>
   <div class="auth-buttons" style="margin: 6% auto;">
      <form method="POST" action="{{ route('login') }}">
         @csrf            
           <div class="form-group row">
              <div class="col">
                 <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                 @error('email')
                 <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
                 </span>
                 @enderror
              </div>
           </div>
           <div class="form-group row">
              <div class="col">
                 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                 @error('password')
                 <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
                 </span>
                 @enderror
              </div>
           </div>
           <div class="form-group row">
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
                <div class="col">
                    @if (Route::has('password.request'))
                        <a  class="btn btn-link forget-pwd" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                 <button style="width: 40%;margin: auto;" type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>
            </div>
        </form>
    </div>
    <div class="row" style="margin: auto;">
        <p style="margin: auto;">You don't have An account! <a class="login-link" href="{{ route('register') }}">Signup</a> here</p> 
    </div>
</div>
@endsection
