@extends('client.layouts.app')

@section('content')

<div class="container-fluid" style="background: rgb(210,216,241);
    background: linear-gradient(90deg, rgba(210,216,241,1) 0%, rgba(251,217,168,1) 65%); ">
<div class="login-box" style="background: #ffffff; padding: 20px; margin-top: 8%; margin-bottom: 8%; margin-left: auto; padding: 20px; ">
  <div class="login-logo">
  <img src="https://i.postimg.cc/59BTJw4D/logo.png" alt="" class="me-5 m-4" style=" width: 70%;">
    <a href="../../welcome"><b>Library</b>User</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body" style="padding: 30px;">
    <p class="login-box-msg">Sign in and enjoy reading books</p>

    <form method="POST" action="{{ route('client.login') }}" aria-label="{{ __('Login') }}">
                        @csrf
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="Email" @error('email') is-invalid @enderror>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @error('email')
            <span class="invalid-feedback alert-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password" @error('passworsd') is-invalid @enderror>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @error('password')
            <span class="invalid-feedback alert-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
      </div>
    </form>
    <a href="register" class="text-center">Register a new membership</a>
  </div>
</div>
<div>
@endsection
