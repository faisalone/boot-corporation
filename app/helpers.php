<?php

/**
 * Resolve an image path to its public URL.
 * Handles: CDN URLs, public/ paths, and storage/ paths.
 */
function img_url(?string $path): string
{
    if (! $path) return '';
    if (str_starts_with($path, 'http://') || str_starts_with($path, 'https://')) return $path;
    if (file_exists(public_path($path))) return asset($path);
    return asset('storage/' . $path);
}

/**
 * Get a locale-aware field from a model.
 * Usage: t($service, 'title') returns title_bn if locale is bn, falls back to title_en.
 */
function t($model, string $field): string
{
    if (! $model) return '';
    $locale = app()->getLocale();
    $value  = $model->{"{$field}_{$locale}"} ?? '';
    if ($value !== '' && $value !== null) return $value;
    return $model->{"{$field}_en"} ?? '';
}

/**
 * Get current locale code.
 */
function current_locale(): string
{
    return app()->getLocale();
}

/**
 * Get all supported locales with labels and flags.
 */
function supported_locales(): array
{
    return [
        'en' => ['label' => 'English',  'flag' => '🇬🇧', 'native' => 'English'],
        'bn' => ['label' => 'বাংলা',    'flag' => '🇧🇩', 'native' => 'বাংলা'],
        'cn' => ['label' => '中文',      'flag' => '🇨🇳', 'native' => '中文'],
    ];
}
