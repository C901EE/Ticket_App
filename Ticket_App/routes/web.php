<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::get('/concerts', function () {
    return view('concerts');
});

Route::get('/sports', function () {
    return view('sports');
});

Route::get('/arts', function () {
    return view('arts');
});

Route::get('/cities', function () {
    return view('cities');
});