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

        <style media="screen">
          body {
            background: #15202B;
            overflow: hidden;
          }
        </style>

    </head>
    <body >
      <div id="app" class="container-fluid">
        <div class="row">
          <!-- Left Side Pub -->
          <div class="col-md-6">
            <div class="row">

            </div>
            <div style="display: flex; justify-content: center;align-items: flex-end; margin-top: 10%;">
              <img
                style="
                  height: 60px;
                  width: 60px;
                  margin-right: 5px;"
                src="/images/logo.svg"
                alt="">
              <h1 style="font-weight: bold;">COVIDZ-19</h1>
            </div>



          </div>

          <!-- Right side Banner -->
          <!--
              margin: 1% -40px;
              height: 655px;

              style=" right: 0;
                      position: absolute;
                      left: 730px;"
          -->
          <div class="col-md-6">
            <img
              style="border-radius: 17px; padding: 10px; margin: 1% 0"
              class="img-fluid"
              src="{{ asset('images/welcome-banner.jpg') }}"
              alt="">
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
