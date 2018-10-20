@extends('layouts.auth')
@section('title', 'Reset Password')
@section('content')
<div class="card card-login mx-auto mt-5">
  <div class="card-header">Reset Password</div>
  <div class="card-body">
    <div class="text-center mb-4">
      <h4>Forgot your password?</h4>
      <p>Enter your email address and we will send you instructions on how to reset your password.</p>
    </div>
    <form method="POST" action="{{ route('password.request') }}">
        {{ csrf_field() }}
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <div class="form-label-group">
                <input type="email" id="email" name="email" class="form-control" value="{{ $email or old('email') }}" placeholder="Enter email address" required="required" autofocus="autofocus">
                <label for="email">Enter email address</label>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <div class="form-label-group">
                <input type="password" id="password" name="password" class="form-control" placeholder="Enter new password" required="required" autofocus="autofocus">
                <label for="password">Enter new password</label>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <div class="form-label-group">
                <input type="password" id="password-confirm" name="password_confirmation" class="form-control" placeholder="Confirm Password" required="required" autofocus="autofocus">
                <label for="password-confirm">Confirm Password</label>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
    </form>
    <div class="text-center">
      <a class="d-block small mt-3" href="{{ url('register') }}">Register an Account</a>
      <a class="d-block small" href="{{ url('login') }}">Login Page</a>
    </div>
  </div>
</div>

@endsection
