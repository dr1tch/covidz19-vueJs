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
          .signup:hover, .login:hover {
            background-position: right center;
          }
        </style>

    </head>
    <body >
      <div id="app" class="container-fluid">
        <div class="row">
          <!-- Left Side Pub -->
          <div class="col-md-6">
            <!-- Logo Part -->
            <div style="display: flex; justify-content: center;align-items: flex-end; margin-top: 8%;">
              <img
                style="
                  height: 60px;
                  width: 60px;
                  margin-right: 5px;"
                src="/images/logo.svg"
                alt="">
              <h1 style="font-weight: bold;">COVIDZ-19</h1>
            </div>

            <!-- Header welcome sentence -->

            <div style="margin: auto;
                        margin-top: 8%;
                        width: 70%;
                        margin-left: 19%;">
                <h1 style="font-weight: 600;">Let’s
                    <span style="font-size: 48px; color: #FE4F60;">Fight</span>
                    <span style="font-size: 48px; color: #51BFA6;">COVID-19</span>
                    in Algeria
                    <span style="font-size: 48px; color: #FE4F60;">TOGETHER</span> .</h1>
            </div>

            <!-- Join Us Part -->

            <div style="margin: 8% auto;
                        width: 70%;
                        margin-left: 19%;">
                        <h1 style="font-weight: 600; color: #BE6E2D;">Join Us Now</h1>
            </div>

            <!-- Login And Sign up buttons -->

            <div style="display: block;
                        margin: 9% auto;
                        width: 70%;
                        margin-left: 19%;">
                        <div class="row">
                          <a class="login"
                            style="
                              background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%);
                              box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                              border-radius: 10px;
                              width: 86%;
                              text-align: center;
                              padding: 8px;
                              margin: auto;
                              font-size: 22px;
                              font-weight: 600;
                              color: #15202B;
                              background-size: 200% auto;
                              transition: 0.5s;
                              "
                            href="{{ route('login') }}">Log In</a>
                        </div>
                        <div class="row">
                          @if (Route::has('register'))
                              <a class="signup"
                              style="
                              background-image: linear-gradient(to right, #fbc2eb 0%, #a6c1ee 51%, #fbc2eb 100%);
                              /*linear-gradient(to right, #895cf2 0%, #ffabf4 50%, #895cf2 100%);*/
                              box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                              border-radius: 10px;
                              width: 86%;
                              text-align: center;
                              padding: 8px;
                              margin: auto;
                              margin-top: 6%;
                              font-size: 22px;
                              font-weight: 600;
                              color: #15202B;
                              background-size: 200% auto;
                              transition: 0.5s;
                              "
                               href="{{ route('register') }}">Sign Up</a>
                          @endif
                        </div>

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
