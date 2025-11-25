<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend/home/home');
})->name('home');
Route::get('/about', function () {
    return view('frontend/pages/about/about');
})->name('about');
Route::get('/vision-and-mission', function () {
    return view('frontend/pages/vision/vision');
})->name('vision-and-mission');
Route::get('/admission', function () {
    return view('frontend/pages/academic/admission_procedure');
})->name('admission');
Route::get('/general-instructions', function () {
    return view('frontend/pages/instructions/general_instructions');
})->name('instructions');

Route::get('/fee-details', function () {
    return view('frontend/pages/fee_details/fee_details');
})->name('fee-details');