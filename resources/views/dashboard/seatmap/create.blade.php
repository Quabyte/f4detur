@extends('layouts.dashboard')

@section('title', 'Create New SeatMap')

@section('content')
    <div class="col-md-9">
        <h2 class="dashboard-title">@yield('title')</h2>
        <div class="canvas-wrapper">
            <canvas id="c" width="1080px" height="600px"></canvas>
        </div>
    </div>
    <div class="col-md-3">
        <ul class="nav nav-pills nav-stacked">
            <li>Add</li>
        </ul>
    </div>
@stop