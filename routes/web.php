<?php

Route::get('/', function () {
    return view('layouts.app');
});

Auth::routes();

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::get('/', 'DashboardController@index');
    Route::resource('/event', 'EventController');
    Route::resource('/seatmap', 'SeatmapController');
});

