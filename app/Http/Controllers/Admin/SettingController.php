<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index()
    {
        $groups = [
            'general'  => 'General Information',
            'hero'     => 'Hero Section (Home Page)',
            'contact'  => 'Contact Information',
            'social'   => 'Social Media Links',
            'footer'   => 'Footer Content',
            'schedule' => 'Schedule of Rate',
        ];

        $settings = Setting::whereNotIn('group', ['about'])->orderBy('group')->orderBy('order')->get()->groupBy('group');

        return view('admin.settings.index', compact('groups', 'settings'));
    }

    public function about()
    {
        $groups = [
            'about' => 'About Page Settings',
        ];

        $settings = Setting::where('group', 'about')->orderBy('order')->get()->groupBy('group');

        return view('admin.settings.about', compact('groups', 'settings'));
    }

    public function updateAbout(Request $request)
    {
        return $this->update($request);
    }

    public function update(Request $request)
    {
        $settings = Setting::all();

        foreach ($settings as $setting) {
            if ($setting->type === 'image' || $setting->type === 'file') {
                // Handle file uploads
                if ($request->hasFile("settings.{$setting->key}")) {
                    // Delete old file
                    if ($setting->value_en && Storage::disk('public')->exists($setting->value_en)) {
                        Storage::disk('public')->delete($setting->value_en);
                    }
                    $path = $request->file("settings.{$setting->key}")->store('settings', 'public');
                    $setting->value_en = $path;
                }
            } else {
                $setting->value_en = $request->input("settings.{$setting->key}.en", $setting->value_en);
                $setting->value_bn = $request->input("settings.{$setting->key}.bn", $setting->value_bn);
                $setting->value_cn = $request->input("settings.{$setting->key}.cn", $setting->value_cn);
            }
            $setting->save();
        }

        Setting::clearCache();

        return back()->with('success', 'Settings saved successfully.');
    }

    public function destroyFile($key)
    {
        $setting = Setting::where('key', $key)->firstOrFail();

        if ($setting->value_en && Storage::disk('public')->exists($setting->value_en)) {
            Storage::disk('public')->delete($setting->value_en);
        }

        $setting->update(['value_en' => null]);

        return back()->with('success', 'File deleted successfully.');
    }
}
