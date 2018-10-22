@extends('layouts.app')
@section('title','Maps Api integration')

@push('styles')
    <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.0/mapsjs-ui.css?dp-version=1533195059" />
    <link rel="stylesheet" href="{{ asset('css/map.css') }}">
@endpush
@section('content')

<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{ url("/") }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Maps</li>
</ol>
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-chart-area"></i>
        Maps api integration
    </div>
    <div id="map" class="map"></div>
    <div id="panel" class="panel"></div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
    
@endsection
@push('scripts')
<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-core.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-service.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-ui.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-mapevents.js"></script>
<script src="{{ asset('js/map.js') }}"></script>
@endpush