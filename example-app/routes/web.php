<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/help', function () {
    return view('help');
});

Route::get('/coursesection', function () {
    return view('coursesection');
});

Route::get('/teacher', function () {
    return view('teacher');
});

Route::get('/room', function () {
    return view('room');
});

Route::get('/table', function () {
    return view('table');
});
