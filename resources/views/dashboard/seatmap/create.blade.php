@extends('layouts.dashboard')

@section('title', 'Create New SeatMap')

@section('content')
    <div class="col-md-9" id="canvas-holder">
        <h2 class="dashboard-title">@yield('title')</h2>
        <canvas id="c" width="1040" height="800"></canvas>
    </div>
    <div class="col-md-3" style="background: #fff; margin-top: -20px;">
        <a href="#" class="btn btn-default">Load Venue</a>
    </div>
@stop

@section('footer.scripts')
    <script src="{{ asset('js/global/fabric.min.js') }}"></script>
    <script src="{{ asset('js/lib/zone.js') }}"></script>
    <script src="{{ asset('js/lib/seatByte.js') }}"></script>
    <script>
        seatByte({!! $json !!}, 'c', 150);
    </script>
@stop