@extends('layouts.dashboard')

@section('title', 'Create New Event')

@section('content')
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heding">
                <h2 class="dashboard-title">@yield('title')</h2>
            </div>
            <div class="panel-body">
                <a href="{{ action('SeatmapController@create') }}" class="btn btn-primary">
                    <i class="icon md-seat"></i> Create New Seat Map
                </a>
            </div>
        </div>
    </div>
@stop