<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Share site-wide data with all frontend views (not admin)
        View::composer(['index', 'about', 'contact', 'gallery', 'publications', 'schedule-of-rate', 'services.*', 'components.*'], function ($view) {
            if (! Schema::hasTable('settings')) {
                return;
            }

            $view->with('site', new class {
                public function __get($key) {
                    return Setting::val($key, app()->getLocale());
                }
                public function __isset($key) {
                    $v = Setting::val($key, app()->getLocale());
                    return $v !== null && $v !== '';
                }
            });

            // Share active services for sidebar / footer
            try {
                $view->with('siteServices', Service::where('is_active', true)->orderBy('order')->get());
            } catch (\Exception $e) {
                $view->with('siteServices', collect());
            }

            // Share useful links for navigation
            try {
                $usefulLinksMenu = Menu::where('title_en', 'Useful Links')->where('is_active', true)->first();
                $view->with('usefulLinks', $usefulLinksMenu ? $usefulLinksMenu->children()->where('is_active', true)->orderBy('order')->get() : collect());
            } catch (\Exception $e) {
                $view->with('usefulLinks', collect());
            }
        });
    }
}
