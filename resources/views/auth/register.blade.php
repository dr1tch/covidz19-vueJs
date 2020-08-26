@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-6 right-side img-fluid right-side-signup">
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
      <button class="btn" style="background-color: #E5E5E5; "><img style="width: 25px; height: 25px;" src="/images/google.svg">Join with Google </button>
      <button class="btn" style="background-color: #3B5999;">fb</button>
      <button class="btn" style="background-color: #50ABF1">twitter</button>
   </div>
   <div style="margin: 3% auto;"><span style="margin: auto; display: table;">Or</span></div>
   <div class="auth-buttons" style="margin: 6% auto;">
      <form method="POST" action="{{ route('register') }}">
         @csrf
         <div id="st-step">
            <div class="form-group row">
               <div class="col">
                  <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="Username">
                  @error('username')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>
            </div>
            <div class="form-group row">
               <div class="col">
                  <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="nom" autofocus placeholder="Lastname">
                  @error('lname')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>
            </div>
            <div class="form-group row">
               <div class="col">
                  <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autofocus autocomplete="prenom" placeholder="Firstname">
                  @error('fname')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>
            </div>
            <div class="form-group row">
                            <div class="col">
                                <select class="form-control @error('gender') is-invalid @enderror" name="gender" id="gender" required>
                                    <!-- <option value="2" disabled selected>Gender</option> -->
                                    <option value="0">Male</option>
                                    <option value="1">Female</option>
                                </select>
                                @error('gender')
                                  <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                            </div>
                        </div>
            <div class="form-group row">
               <div class="col">
                  <button style="width: 20%;" onclick="toggle_menu('next')" id="next" type="button" class="btn btn-success right">
                  Next <!-- <span style="margin: auto; font-size: 120%; font-weight: 600"> > </span> -->
                  </button>
               </div>
            </div>
            </div>
            <div id="nd-step" style="display: none;">
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
                     <input id="password-confirm" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                     @error('password_confirmation')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
               </div>
               <div class="row inline-group">
                <div class="col">
                  <button style="width: 40%;" id="back" onclick="toggle_menu('back')" type="button" class="btn btn-warning">Back</button>
                  </div>
                  <div class="col">
                     <button style="width: 40%;" type="submit" class="btn btn-success right">
                     {{ __('Sign Up') }}
                     </button>   
                     </div>               
                 </div>
               </div>
            
      </form>
      </div>
      <div class="row" style="margin: auto;">
         <p style="margin: auto;">Already Have an account! <a class="login-link" href="{{ route('login') }}">Log In</a> here</p> 
      </div>
   </div>
   <!-- Right side Banner -->
   
   <script type="text/javascript">
       function toggle_menu(e) {
            var d = document.getElementById(e);
            var stStep = document.getElementById("st-step");
            var ndStep = document.getElementById("nd-step");
            if(e === "next"){
                ndStep.style.display='block';
                stStep.style.display='none';
            } else if(e === "back") {
                ndStep.style.display='none';
                stStep.style.display='block';
            }


            // if(d.style.display == 'none') {
            //     d.style.display = 'block';
            // } else {
            //     d.style.display = 'none';
            // }
        }
   </script>
   
@endsection