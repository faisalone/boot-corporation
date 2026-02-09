<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CentralAdminController;
use App\Http\Controllers\TenantAdminController;
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

// ─── Auth Routes (hidden from UI, work on both central + tenant) ─────
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ─── Admin Panel (context-aware: central or tenant) ──────────────────
Route::middleware('auth')->prefix('admin')->group(function () {
    // These routes work on both central and tenant domains.
    // Controllers check tenant() to decide behavior.
    Route::get('/', function () {
        if (tenant()) {
            return app(TenantAdminController::class)->dashboard();
        }
        return app(CentralAdminController::class)->dashboard();
    })->name('admin.dashboard');

    // Central-only routes - settings
    if (!tenant()) {
        Route::get('/settings', [CentralAdminController::class, 'settings'])->name('central.settings');
        Route::put('/settings', [CentralAdminController::class, 'updateSettings'])->name('central.settings.update');
    }
    
    // Central-only routes - tenants
    Route::get('/tenants/create', [CentralAdminController::class, 'createTenant'])->name('central.tenants.create');
    Route::post('/tenants', [CentralAdminController::class, 'storeTenant'])->name('central.tenants.store');
    Route::get('/tenants/{tenant}/edit', [CentralAdminController::class, 'editTenant'])->name('central.tenants.edit');
    Route::put('/tenants/{tenant}', [CentralAdminController::class, 'updateTenant'])->name('central.tenants.update');
    Route::delete('/tenants/{tenant}', [CentralAdminController::class, 'deleteTenant'])->name('central.tenants.destroy');

    // Tenant-only routes
    if (tenant()) {
        Route::get('/settings', [TenantAdminController::class, 'settings'])->name('tenant.admin.settings');
        Route::put('/settings', [TenantAdminController::class, 'updateSettings'])->name('tenant.admin.settings.update');
    }
});
