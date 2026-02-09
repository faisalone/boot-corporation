<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TenantAdminController extends Controller
{
    public function dashboard()
    {
        $tenant = tenant();
        $settings = $tenant->getSettings();
        return view('tenant-admin.dashboard', compact('tenant', 'settings'));
    }

    public function settings()
    {
        $tenant = tenant();
        $settings = $tenant->getSettings();
        return view('tenant-admin.settings', compact('tenant', 'settings'));
    }

    public function updateSettings(Request $request)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'company_tagline' => 'nullable|string|max:255',
            'logo_letter' => 'nullable|string|max:5',
            'phone_1' => 'nullable|string|max:50',
            'phone_2' => 'nullable|string|max:50',
            'email_1' => 'nullable|email|max:255',
            'email_2' => 'nullable|email|max:255',
            'address' => 'nullable|string',
            'map_embed_url' => 'nullable|string',
            'social_linkedin' => 'nullable|string|max:255',
            'social_facebook' => 'nullable|string|max:255',
            'social_twitter' => 'nullable|string|max:255',
            'social_youtube' => 'nullable|string|max:255',
            'footer_description' => 'nullable|string',
        ]);

        $tenant = tenant();
        $tenant->update($request->only([
            'company_name', 'company_tagline', 'logo_letter',
            'phone_1', 'phone_2', 'email_1', 'email_2',
            'address', 'map_embed_url',
            'social_linkedin', 'social_facebook', 'social_twitter', 'social_youtube',
            'footer_description',
        ]));

        return redirect()->route('tenant.admin.settings')->with('success', 'Settings updated successfully!');
    }
}
