<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('tugas1/login');
});

Route::get('/menu', function () {
    return view('tugas1/menu');
});

Route::get('/about', function () {
    return view('tugas1/about');
});

Route::get('/contactus', function () {
    return view('tugas1/contactus');
});