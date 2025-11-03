<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    $data = ['laptop', 'Laptop', 'Keyboard'];
    return view('home', compact('data'));
});

Route::get('/about', function () {
    return view('about');
});