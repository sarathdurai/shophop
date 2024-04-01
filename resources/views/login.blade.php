@extends('layout.default')

@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<div class="container h-100">
    <div class="row justify-content-center">
        <div class="login-register-form">
          <div class="login-reg-panel">
            <div class="login-info-box">
              <h2>Have an account?</h2>
              <p>Lorem ipsum dolor sit amet</p>
              <label id="label-register" for="log-reg-show">Login</label>
              <input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
            </div>
                      
            <div class="register-info-box">
              <h2>Don't have an account?</h2>
              <p>Lorem ipsum dolor sit amet</p>
              <label id="label-login" for="log-login-show">Register</label>
              <input type="radio" name="active-log-panel" id="log-login-show">
            </div>
                      
            <div class="white-panel">
              <div class="login-show">
                <form action="{{route('signin')}}" method="post">
                  @csrf
                  <h2>LOGIN</h2>
                  <input name="email" type="email" placeholder="Email">
                  <input name="password" type="password" placeholder="Password">
                  <input type="submit" value="Login">
                  <a href="">Forgot password?</a>
                </form>
              </div>
              <div class="register-show">
                <form action="{{route('register')}}" method="post">
                  @csrf
                  <h2>REGISTER</h2>
                  <input name="name" type="text" placeholder="Name">
                  <input name="email" type="email" placeholder="Email">
                  <input name="password" type="password" placeholder="Password">
                  <input name="cpassword" type="password" placeholder="Confirm Password">
                  <input type="submit" value="Register">
                </form>
              </div>
            </div>
        </div>
        </div>        
    </div>
</div>


@stop