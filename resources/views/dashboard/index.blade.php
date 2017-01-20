@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heding">
                <h2 class="dashboard-title">@yield('title')</h2>
            </div>
            <div class="panel-body">
                <p>Welcome</p>
            </div>
        </div>
    </div>
@stop