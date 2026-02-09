<x-admin-layout title="Dashboard">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-slate-900">Welcome, {{ Auth::user()->name }}</h1>
        <p class="text-slate-500 mt-1">Manage your website from here</p>
    </div>

    <div class="grid md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center">
                    <i class="fa-solid fa-building text-orange-500 text-xl"></i>
                </div>
                <div>
                    <p class="text-slate-500 text-sm">Company</p>
                    <p class="text-lg font-bold text-slate-900">{{ $settings['company_name'] }}</p>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                    <i class="fa-solid fa-globe text-blue-500 text-xl"></i>
                </div>
                <div>
                    <p class="text-slate-500 text-sm">Domain</p>
                    <p class="text-lg font-bold text-slate-900">{{ $tenant->domains->first()->domain ?? 'N/A' }}</p>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                    <i class="fa-solid fa-circle-check text-green-500 text-xl"></i>
                </div>
                <div>
                    <p class="text-slate-500 text-sm">Status</p>
                    <p class="text-lg font-bold text-green-600">Active</p>
                </div>
            </div>
        </div>
    </div>

    <div class="grid md:grid-cols-2 gap-6">
        <a href="{{ route('tenant.admin.settings') }}"
            class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6 hover:shadow-md transition group">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-slate-100 rounded-xl flex items-center justify-center group-hover:bg-orange-100 transition">
                    <i class="fa-solid fa-gear text-slate-500 group-hover:text-orange-500 text-xl transition"></i>
                </div>
                <div>
                    <h3 class="font-bold text-slate-900">Site Settings</h3>
                    <p class="text-slate-500 text-sm">Update company info, contact details, social links</p>
                </div>
            </div>
        </a>
        <a href="{{ route('index') }}"
            class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6 hover:shadow-md transition group">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-slate-100 rounded-xl flex items-center justify-center group-hover:bg-blue-100 transition">
                    <i class="fa-solid fa-eye text-slate-500 group-hover:text-blue-500 text-xl transition"></i>
                </div>
                <div>
                    <h3 class="font-bold text-slate-900">View Website</h3>
                    <p class="text-slate-500 text-sm">See your public website</p>
                </div>
            </div>
        </a>
    </div>
</x-admin-layout>
