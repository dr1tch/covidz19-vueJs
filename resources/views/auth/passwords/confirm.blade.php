@extends('layouts.app')

@section('content')

<div style="margin: auto; height: 100%">
    <div class="row justify-content-center" style="margin: auto;">
        <div class="col-md-8">
        <div class="logo-container">
          <img class="logo-img"  src="/images/logo.svg" alt="">
          <h1 class="header-logo-text" style="font-weight: bold;">COVIDZ-19</h1>
       </div>
       <div class="card">
                <div class="card-header" style="text-align: center;">{{ __('Confirm Password') }}</div>

                <div class="card-body">
                    <p style="text-align: center;">{{ __('Please confirm your password before continuing.') }}</p>

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="form-group row">
                            

                            <div class="col">
                               <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" autocomplete="{{ __('Password') }}">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col" style="display: inline;">
                                <button style="float: left;" type="submit" class="btn btn-primary">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a style="float: right;" class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
</div>

@endsection
