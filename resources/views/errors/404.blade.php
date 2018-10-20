@extends('layouts.app')

@section('title', 'Page not found')

@section('content')
    
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ url('/') }}">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">404 Error</li>
    </ol>

    <!-- Page Content -->
    <h1 class="display-1">404</h1>
    <p class="lead">Page not found. You can
      <a href="javascript:history.back()">go back</a>
      to the previous page, or
      <a href="{{ url('/') }}">return home</a>.</p>
      
@endsection

   