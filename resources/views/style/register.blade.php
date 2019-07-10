@extends('style.index')
@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h2 class="mb-3 bread">Keep In Touch</h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Login <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    
    <div id="login-box">
      <div class="left">
        <h1>Sign up</h1>
        
        <input type="text" name="username" placeholder="Username" />
        <input type="text" name="email" placeholder="E-mail" />
        <input type="password" name="password" placeholder="Password" />
        <input type="password" name="password2" placeholder="Retype password" />
        
        <input type="submit" name="signup_submit" value="Sign me up" />
      </div>
      
      <div class="right">
        <span class="loginwith">Sign in with<br />social network</span>
        
        <button class="social-signin facebook">Log in with facebook</button>
        <button class="social-signin twitter">Log in with Twitter</button>
        <button class="social-signin google">Log in with Google+</button>
      </div>
      <div class="or">OR</div>
    </div>

@endsection