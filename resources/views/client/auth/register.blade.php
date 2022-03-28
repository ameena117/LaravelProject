@extends('client.layouts.app')

@section('content')
<div class="container-fluid" style="background: rgb(210,216,241);
    background: linear-gradient(90deg, rgba(210,216,241,1) 0%, rgba(251,217,168,1) 65%); ">
<div class="register-box" style="background: #ffffff; padding: 20px; margin-top: 8%; margin-bottom: 8%; margin-left: auto; padding: 20px; ">
  <div class="register-logo">
  <img src="https://i.postimg.cc/59BTJw4D/logo.png" alt="" class="me-5 m-4" style=" width: 70%;">
    <a href="../../welcome"><b>Library</b>User</a>
  </div>  <div class="register-box-body">
    <p class="login-box-msg text-bold">Register a new membership</p>
                    <form method="POST" action="{{ route('client.register') }}">
                        @csrf

                        <div class="form-group has-feedback">
                                <input id="name" type="text" class="form-control fa fa-google-plus" @error('name') is-invalid @enderror placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                @error('name')
                                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group has-feedback">
                                <input id="email" type="email" class="form-control" @error('email') is-invalid @enderror placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                @error('email')
                                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group has-feedback">
                                <input id="password" type="password" class="form-control" @error('password') is-invalid @enderror placeholder="password" name="password" required autocomplete="new-password">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                @error('password')
                                    <span class="invalid-feedback alert-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group has-feedback">
                                <input id="password-confirm" type="password" class="form-control" placeholder="confirme password" name="password_confirmation" required autocomplete="new-password">
                                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                            </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                   <a href="login" class="text-center">I already have a membership</a>
                </div>
</div>
@endsection
