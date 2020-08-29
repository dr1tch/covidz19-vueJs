<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

        <!-- Styles -->
        <link href = {{ asset("/css/app.css") }} rel="stylesheet" />
        <link href = {{ asset("/css/style.css") }} rel="stylesheet" />

    </head>
    <body >
      <div id="app" class="container-fluid" style="height: 100%">
        <div class="row">
          <!-- Left Side Pub -->
          <div class="col-lg-6 left-side">


            <!-- Logo Part -->
            <div class="logo-container">
              <img class="logo-img"  src="/images/logo.svg" alt="">
              <h1 class="header-logo-text" style="font-weight: bold;">COVIDZ-19</h1>
            </div>

            <!-- Header welcome sentence -->

            <div class="header-title">
                <h1 class="h1-header" style="font-weight: 600;">Let’s
                    <span class="span-header" style=" color: #FE4F60;">Fight</span>
                    <span class="span-header" style=" color: #51BFA6;">COVID-19</span>
                    in Algeria
                    <span class="span-header" style=" color: #FE4F60;">TOGETHER</span> .</h1>
            </div>

            <!-- Join Us Part -->

            <div class="tweet-button-container">
                        <div class="row">
                          <a href="/home" class="discover-ideas">Discover Our Ideas to fight it!</a>
                        </div>

            </div>
            <hr class="line-separator">

            <!-- Login And Sign up buttons -->

            <div class="auth-buttons">
                        <div class="row">
                          <a class="login" href="{{ route('login') }}">Log In</a>
                        </div>
                        <div class="row">
                          @if (Route::has('register'))
                              <a class="signup" href="{{ route('register') }}">Sign Up</a>
                          @endif
                        </div>

            </div>



          </div>

          <!-- Right side Banner -->

          <div class="col-lg-6 right-side right-side-welcome img-fluid">
            <!-- <img
              style="border-radius: 17px; padding: 10px; margin: 1% 0"
              class="img-fluid"
              src="{{ asset('images/welcome-banner.jpg') }}"
              alt=""> -->
          </div>

        </div>
        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


        </div> -->
      </div>
      <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
