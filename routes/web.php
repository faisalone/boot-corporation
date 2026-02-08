<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/publications', function () {
    return view('publications');
})->name('publications');

// Service Routes
Route::get('/services/registration', function () {
    return view('service-registration');
})->name('service.registration');

Route::get('/services/bookkeeping', function () {
    return view('service-bookkeeping');
})->name('service.bookkeeping');

Route::get('/services/audit', function () {
    return view('service-audit');
})->name('service.audit');

Route::get('/services/tax', function () {
    return view('service-tax');
})->name('service.tax');

Route::get('/services/consultancy', function () {
    return view('service-consultancy');
})->name('service.consultancy');
