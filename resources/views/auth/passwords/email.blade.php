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
                <div class="card-header" style="text-align: center;"><h3>{{ __('Reset Password') }}</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            

                            <div class="col">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('E-Mail Address') }}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col" style="display: flex; justify-content: center;">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
</div>
   

























@endsection
