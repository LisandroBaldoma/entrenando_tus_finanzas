<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('sections.home');
});

Route::get('/membresia', function () {
    return view('sections.membresia');
});
