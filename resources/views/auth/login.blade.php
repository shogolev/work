@extends('layouts.auth')
@section('title', 'Login')

@section('content')
<div class="card card-login mx-auto mt-5">
    <div class="card-header">Login</div>
    <div class="card-body">
      <form method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <div class="form-group">
          <div class="form-label-group">
            <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
            <label for="email">Email address</label>
          </div>
        </div>
        <div class="form-group">
          <div class="form-label-group">
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="required">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="form-group">
          <div class="checkbox">
            <label>
              <input type="checkbox" value="remember-me">
              Remember Password
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Login</button>
      </form>
      <div class="text-center">
        <a class="d-block small mt-3" href="{{ url('register') }}">Register an Account</a>
        <a class="d-block small" href="{{ url('reset') }}">Forgot Password?</a>
      </div>
    </div>
  </div>
@endsection