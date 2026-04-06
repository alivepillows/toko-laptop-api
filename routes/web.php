<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/client', function () {
    return redirect('/client/index.html');
});

Route::get('/client/index.html', function () {
    return response()->file(base_path('client/index.html'));
});
