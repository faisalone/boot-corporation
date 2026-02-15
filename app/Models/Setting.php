<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Setting extends Model
{
    protected $fillable = ['key', 'group', 'label', 'value_en', 'value_bn', 'value_cn', 'type', 'order'];

    /**
     * Get a setting value by key.
     */
    public static function val(string $key, string $lang = 'en'): ?string
    {
        $settings = Cache::rememberForever('site_settings', fn () =>
            static::all()->keyBy('key')
        );

        $setting = $settings->get($key);
        if (! $setting) return null;

        $value = $setting->{"value_{$lang}"} ?? null;
        if ($value !== null && $value !== '') return $value;

        return $setting->value_en;
    }

    /**
     * Get all settings for a group.
     */
    public static function group(string $group): \Illuminate\Database\Eloquent\Collection
    {
        return static::where('group', $group)->orderBy('order')->get();
    }

    /**
     * Clear the settings cache.
     */
    public static function clearCache(): void
    {
        Cache::forget('site_settings');
    }
}
