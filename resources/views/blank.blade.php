@extends('layouts.app')

@section('title', 'Blank-page')

@section('content')

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ url("/") }}">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Blank Page</li>
    </ol>

    <!-- Page Content -->
    <h1>Blank Page</h1>
    <hr>
    <p>This is a great starting point for new custom pages.</p>

@endsection