@extends('admin.layouts.app')

@section('content')
<div class="container-fluid" style="background: rgb(210,216,241);
    background: linear-gradient(90deg, rgba(210,216,241,1) 0%, rgba(251,217,168,1) 65%); ">
<div class="login-box" style="background: #ffffff; padding: 20px; margin-top: 8%; margin-bottom: 15%; margin-left: auto; padding: 20px; ">
  <div class="login-logo">
  <img src="https://i.postimg.cc/59BTJw4D/logo.png" alt="" class="me-5 m-4" style=" width: 70%;">
    <a href="../../welcome"><b>Library</b>Admin</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body" style="padding: 30px;">
    <p class="login-box-msg">Sign in and enjoy adding books</p>

    <form method="POST" action="{{ route('admin.login') }}" aria-label="{{ __('Login') }}">
                        @csrf
      <div class="form-group has-feedback @error('email') has error @enderror">
        <input type="email" class="form-control" name="email" placeholder="Email" >
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @error('email')
            <span class="invalid-feedback alert-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="form-group has-feedback @error('password') has error @enderror">
        <input type="password" class="form-control" name="password" placeholder="Password ">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @error('password')
            <span class="invalid-feedback alert-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
      <p class="text-muted p-3 mt-3">don't have an account? <a href="register">Register now!</a></p>

    </form>

  </div>
  <!-- /.login-box-body -->
</div>

</div>




@endsection