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

Route::get('/departments', function () {
    return view('frontend/pages/departments/department');
})->name('departments');

Route::get('/department/{slug}', function ($slug) {
    $departments = [
        'assamese' => 'Assamese',
        'botany' => 'Botany',
        'biophysics' => 'Bio-Physics',
        'bba' => 'BBA',
        'bca' => 'BCA',
        'chemistry' => 'Chemistry',
        'computer-science' => 'Computer Science',
        'economics' => 'Economics',
        'education' => 'Education',
        'software-development' => 'Software Development and System Administration',
        'english' => 'English',
        'geography' => 'Geography',
        'history' => 'History',
        'mathematics' => 'Mathematics',
        'philosophy' => 'Philosophy',
        'physics' => 'Physics',
        'political-science' => 'Political Science',
        'statistics' => 'Statistics',
        'zoology' => 'Zoology',
        'food-processing' => 'Food Processing and Quality Management',
    ];
    
    if (!isset($departments[$slug])) {
        abort(404, 'Department not found');
    }
    
    return view('frontend/pages/departments/show', [
        'slug' => $slug,
        'department' => $departments[$slug]
    ]);
})->name('department.show');

Route::get('/teaching-staff', function () {
    return view('frontend/pages/staff/teaching_staff');
})->name('teaching-staff');

Route::get('/staff/{id}', function ($id) {
    // You can fetch staff details from database or use static data
    $staffMembers = [
        1 => [
            'name' => 'DR. BARNALI DEKA',
            'designation' => 'ASSISTANT PROFESSOR',
            'email' => 'barnali@pubkamrup.edu.in',
            'phone' => '+91 XXXXXXXXXX',
            'image' => 'online/attendence/upload/profile/1661410877Barnali Photo.jpeg',
            'department' => 'Assamese',
            'qualification' => 'PhD',
            'specialization' => 'Your specialization here',
        ],
        // Add more staff members here
    ];
    
    if (!isset($staffMembers[$id])) {
        abort(404, 'Staff member not found');
    }
    
    return view('frontend/pages/staff/show', [
        'staff' => $staffMembers[$id],
        'id' => $id
    ]);
})->name('staff.show');

Route::get('/non-teaching-staff', function () {
    return view('frontend/pages/staff/non_teaching_staff');
})->name('non-teaching-staff');