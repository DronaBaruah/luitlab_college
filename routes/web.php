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

Route::get('/calender', function () {
    return view('frontend/pages/academic/academic_calender');
})->name('calender');

Route::get('/scholarships_and_awards', function () {
    return view('frontend/pages/academic/scholarships_and_awards');
})->name('scholarships');

Route::get('/rules_and_regulations', function () {
    return view('frontend/pages/academic/rules_regulations');
})->name('rules-and-regulations');

Route::get('/examinations', function () {
    return view('frontend/pages/academic/examination');
})->name('examinations');

Route::get('/syllabus', function () {
    return view('frontend/pages/academic/syllabus');
})->name('syllabus');

Route::get('/affiliation', function () {
    return view('frontend/pages/academic/affiliation');
})->name('affiliation');

Route::get('/research_and_innovation', function () {
    return view('frontend/pages/academic/research_and_innovation');
})->name('research_and_innovation');

Route::get('/results', function () {
    return view('frontend/pages/academic/results');
})->name('results');