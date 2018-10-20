<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>@yield('title')</title>

<!-- Bootstrap core CSS-->
<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

<!-- Custom fonts for this template-->
<link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

<!-- Custom styles for this template-->
<link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">

<!--Stack styles from child -->
@stack('styles')

</head>

<body class="bg-dark">

    <div class="container">
        @yield('content')
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Stack child scripts -->
    @stack('scripts')
</body>