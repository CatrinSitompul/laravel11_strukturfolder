<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Tugas2Controller;

// Route::get('/', function () {
//     return view('tugas1/login');
// });

// Route::get('/menu', function () {
//     return view('tugas1/menu');
// });

// Route::get('/about', function () {
//     return view('tugas1/about');
// });

// Route::get('/contactus', function () {
//     return view('tugas1/contactus');
// });


    Route::get('/logintugas2', [Tugas2Controller::class,'login']);

    Route::get('/hometugas2', [Tugas2Controller::class,'home']);

    Route::get('/abouttugas2', [Tugas2Controller::class,'about']);

    Route::get('/contacttugas2', [Tugas2Controller::class,'contact']);
