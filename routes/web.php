<?php

use Illuminate\Support\Facades\Route;

// ─── Public Website Routes (shared by central + tenant domains) ──────
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::group(['prefix' => 'services', 'as' => 'service.'], function () {
	Route::get('/', fn() => view('services.index'))->name('index');
	Route::get('/registration', fn() => view('services.registration'))->name('registration');
	Route::get('/bookkeeping', fn() => view('services.bookkeeping'))->name('bookkeeping');
	Route::get('/audit', fn() => view('services.audit'))->name('audit');
	Route::get('/tax', fn() => view('services.tax'))->name('tax');
	Route::get('/consultancy', fn() => view('services.consultancy'))->name('consultancy');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/publications', function () {
    return view('publications');
})->name('publications');

Route::get('/schedule-of-rate', function () {
    return view('schedule-of-rate');
})->name('schedule-of-rate');
