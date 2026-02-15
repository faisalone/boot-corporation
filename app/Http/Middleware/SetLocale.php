<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Supported locales.
     */
    public const LOCALES = ['en', 'bn', 'cn'];

    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->session()->get('locale', config('app.locale', 'en'));

        if (in_array($locale, self::LOCALES)) {
            app()->setLocale($locale);
        }

        return $next($request);
    }
}
