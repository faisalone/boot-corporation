<?php

use App\Http\Controllers\Admin;
use App\Models\Partner;
use App\Models\Photo;
use App\Models\Publication;
use App\Models\Service;
use App\Models\Slide;
use Illuminate\Support\Facades\Route;

// ─── Language Switcher ───────────────────────────────────────────────
Route::get('/lang/{locale}', function (string $locale) {
    if (in_array($locale, ['en', 'bn', 'cn'])) {
        session()->put('locale', $locale);
    }
    return redirect()->back();
})->name('lang.switch');

// ─── Public Website Routes ──────────────────────────────────────────
Route::get('/', function () {
    return view('index', [
        'slides' => Slide::where('is_active', true)->orderBy('order')->get(),
    ]);
})->name('index');

Route::get('/about', function () {
    return view('about', [
        'partners' => Partner::where('is_active', true)->orderBy('order')->get(),
    ]);
})->name('about');

Route::group(['prefix' => 'services', 'as' => 'service.'], function () {
	Route::get('/', function () {
		return view('services.index', [
			'services' => Service::where('is_active', true)->orderBy('order')->get(),
		]);
	})->name('index');
	Route::get('/{service:slug}', function (Service $service) {
		abort_unless($service->is_active, 404);
		return view('services.show', compact('service'));
	})->name('show');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/gallery', function () {
    return view('gallery', [
        'photos' => Photo::where('is_active', true)->orderBy('order')->get(),
    ]);
})->name('gallery');

Route::get('/publications', function () {
    return view('publications', [
        'publications' => Publication::where('is_active', true)->orderBy('order')->get(),
    ]);
})->name('publications');

Route::get('/schedule-of-rate', function () {
    return view('schedule-of-rate');
})->name('schedule-of-rate');

// ─── Admin Routes ───────────────────────────────────────────────────
Route::prefix('admin')->name('admin.')->group(function () {

    // Auth (guest only)
    Route::middleware('guest')->group(function () {
        Route::get('login', [Admin\AuthController::class, 'showLogin'])->name('login');
        Route::post('login', [Admin\AuthController::class, 'login'])->name('login.submit');
    });

    // Protected admin panel
    Route::middleware('admin')->group(function () {
        Route::post('logout', [Admin\AuthController::class, 'logout'])->name('logout');
        Route::get('/', Admin\DashboardController::class)->name('dashboard');

        // Site Settings
        Route::get('settings', [Admin\SettingController::class, 'index'])->name('settings.index');
        Route::put('settings', [Admin\SettingController::class, 'update'])->name('settings.update');
        Route::get('settings/about', [Admin\SettingController::class, 'about'])->name('settings.about');
        Route::put('settings/about', [Admin\SettingController::class, 'updateAbout'])->name('settings.about.update');

        // Resource routes
        Route::resource('slides',       Admin\SlideController::class)->except('show');
        Route::resource('pages',        Admin\PageController::class)->except('show');
        Route::resource('services',     Admin\ServiceController::class)->except('show');
        Route::resource('partners',     Admin\PartnerController::class)->except('show');
        Route::resource('photos',       Admin\PhotoController::class)->except('show');
        Route::resource('publications', Admin\PublicationController::class)->except('show');
        Route::resource('menus',        Admin\MenuController::class)->except('show');
    });
});
