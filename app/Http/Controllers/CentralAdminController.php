<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CentralAdminController extends Controller
{
    public function dashboard()
    {
        $tenants = Tenant::with('domains')->get();
        return view('central.dashboard', compact('tenants'));
    }

    public function createTenant()
    {
        return view('central.create-tenant');
    }

    public function storeTenant(Request $request)
    {
        $request->validate([
            'id' => 'required|string|unique:tenants,id|alpha_dash|max:50',
            'domain' => 'required|string|unique:domains,domain',
            'company_name' => 'required|string|max:255',
            'company_tagline' => 'nullable|string|max:255',
            'logo_letter' => 'nullable|string|max:5',
            'phone_1' => 'nullable|string|max:50',
            'phone_2' => 'nullable|string|max:50',
            'email_1' => 'nullable|email|max:255',
            'email_2' => 'nullable|email|max:255',
            'address' => 'nullable|string',
            'admin_name' => 'required|string|max:255',
            'admin_email' => 'required|email|max:255',
            'admin_password' => 'required|string|min:8',
        ]);

        $tenant = Tenant::create([
            'id' => $request->id,
            'company_name' => $request->company_name,
            'company_tagline' => $request->company_tagline ?? 'Chartered Accountants',
            'logo_letter' => $request->logo_letter ?? substr($request->company_name, 0, 1),
            'phone_1' => $request->phone_1,
            'phone_2' => $request->phone_2,
            'email_1' => $request->email_1,
            'email_2' => $request->email_2,
            'address' => $request->address,
            'footer_description' => 'Your trusted partner in tax, audit & consulting.',
        ]);

        // Strip port from domain (e.g. faisal.localhost:8000 → faisal.localhost)
        $domain = parse_url('http://' . $request->domain, PHP_URL_HOST) ?? $request->domain;

        $tenant->domains()->create([
            'domain' => $domain,
        ]);

        // Create admin user inside tenant database
        $tenant->run(function () use ($request) {
            \App\Models\User::create([
                'name' => $request->admin_name,
                'email' => $request->admin_email,
                'password' => Hash::make($request->admin_password),
            ]);
        });

        return redirect()->route('admin.dashboard')->with('success', "Tenant '{$request->company_name}' created successfully!");
    }

    public function editTenant(Tenant $tenant)
    {
        $tenant->load('domains');
        return view('central.edit-tenant', compact('tenant'));
    }

    public function updateTenant(Request $request, Tenant $tenant)
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
            'is_active' => 'boolean',
        ]);

        $tenant->update($request->only([
            'company_name', 'company_tagline', 'logo_letter',
            'phone_1', 'phone_2', 'email_1', 'email_2',
            'address', 'map_embed_url',
            'social_linkedin', 'social_facebook', 'social_twitter', 'social_youtube',
            'footer_description', 'is_active',
        ]));

        return redirect()->route('admin.dashboard')->with('success', "Tenant '{$tenant->company_name}' updated!");
    }

    public function deleteTenant(Tenant $tenant)
    {
        $name = $tenant->company_name;
        $tenant->delete();
        return redirect()->route('admin.dashboard')->with('success', "Tenant '{$name}' deleted!");
    }

    public function settings()
    {
        $settings = config('site.central');
        return view('central.settings', compact('settings'));
    }

    public function updateSettings(Request $request)
    {
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'company_tagline' => 'nullable|string|max:255',
            'logo_letter' => 'nullable|string|max:5',
            'phone_1' => 'nullable|string|max:50',
            'phone_2' => 'nullable|string|max:50',
            'email_1' => 'nullable|email|max:255',
            'email_2' => 'nullable|email|max:255',
            'address' => 'nullable|string',
            'map_embed_url' => 'nullable|url',
            'social_linkedin' => 'nullable|url',
            'social_facebook' => 'nullable|url',
            'social_twitter' => 'nullable|url',
            'social_youtube' => 'nullable|url',
            'footer_description' => 'nullable|string',
        ]);

        // Store settings in config/site.php
        $configPath = config_path('site.php');
        $configContent = "<?php\n\nreturn " . var_export(['central' => $validated], true) . ";\n";
        file_put_contents($configPath, $configContent);

        return redirect()->route('central.settings')->with('success', 'Central site settings updated successfully!');
    }
}
