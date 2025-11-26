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

Route::get('/contact', function () {
    return view('frontend/pages/contact/contact_us');
})->name('contact');

Route::get('/ug_course', function () {
    return view('frontend/pages/courses/ug_course');
})->name('ug-course');

Route::get('/pg_course', function () {
    return view('frontend/pages/courses/pg_course');
})->name('pg-course');

Route::get('/hs_course', function () {
    return view('frontend/pages/courses/hs_course');
})->name('hs-course');

Route::get('/certificate_course', function () {
    return view('frontend/pages/courses/certificate_course');
})->name('certificate-course');

Route::get('/self_finance_course', function () {
    return view('frontend/pages/courses/self_finance_course');
})->name('self-finance-course');

Route::get('/kkhsou', function () {
    return view('frontend/pages/courses/kkhsou');
})->name('kkhsou');

Route::get('/facilities', function () {
    return view('frontend/pages/about/facilities');
})->name('facilities');