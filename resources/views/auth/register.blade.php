@extends('style.index')
<style type="text/css">
button a.social-signin {
  margin-bottom: 20px;
  width: 220px;
  height: 36px;
  border: none;
  border-radius: 2px;
  color: #FFF;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  transition: 0.2s ease;
  cursor: pointer;
}

</style>
@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('refugee/images/login.jpg')}});" data-stellar-background-ratio="0.5">
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
        <form>
        {!! csrf_field() !!}
        @if(!empty($name))
            <input type="text" name="username" placeholder="Username" value="{{$name}}" required autofocus/>
        @else
            <input type="text" name="username" placeholder="Username" value="{{old('name')}}" required autofocus/>
        @endif


        @if(!empty($email))
            <input type="text" name="email" placeholder="E-mail" value="{{ $email }}" required autofocus/>
        @else
            <input type="text" name="email" placeholder="E-mail" value="{{ old('email') }}" required autofocus/>
        @endif

        <input type="password" name="password" placeholder="Password" required/>
        <input type="password" name="password2" placeholder="Retype password" />
        
        <input type="submit" name="signup_submit" value="Sign me up" />
      </div>
      </form>
      <div class="right">
        <span class="loginwith">Sign in with<br />social network</span>
        
        <button class="social-signin facebook"><a class="social-signin twitter" href="{{url('/login/facebook')}}">Log in with facebook</button></a>
        
        <button class="social-signin twitter" href="{{url('/login/twitter')}}">Log in with Twitter</button>
        <button class="social-signin google"><a class="social-signin google" href="{{url('/login/google')}}">Log in with Google+</button></a>
      </div>
      <div class="or">OR</div>
    </div>

@endsection