<x-admin-layout title="Create Tenant">
    <div class="mb-8">
        <a href="{{ route('admin.dashboard') }}" class="text-slate-500 hover:text-orange-500 transition text-sm flex items-center gap-1 mb-4">
            <i class="fa-solid fa-arrow-left"></i> Back to Dashboard
        </a>
        <h1 class="text-3xl font-bold text-slate-900">Create New Tenant</h1>
        <p class="text-slate-500 mt-1">Set up a new website with its own database</p>
    </div>

    @if($errors->any())
        <div class="bg-red-50 border border-red-200 rounded-xl p-4 mb-6">
            @foreach($errors->all() as $error)
                <p class="text-red-600 text-sm">{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form method="POST" action="{{ route('central.tenants.store') }}" class="space-y-8">
        @csrf

        <!-- Tenant Identity -->
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6">
            <h2 class="text-lg font-bold text-slate-900 mb-4 flex items-center gap-2">
                <i class="fa-solid fa-fingerprint text-orange-500"></i> Tenant Identity
            </h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Tenant ID (slug)</label>
                    <input type="text" name="id" value="{{ old('id') }}" required placeholder="e.g. bootcorp"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 outline-none transition">
                    <p class="text-slate-400 text-xs mt-1">Unique identifier. Used in database naming.</p>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Domain</label>
                    <input type="text" name="domain" value="{{ old('domain') }}" required placeholder="e.g. client1.boot-corp.faisal.one"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 outline-none transition">
                    <p class="text-slate-400 text-xs mt-1">The domain this tenant's website will be accessible on.</p>
                </div>
            </div>
        </div>

        <!-- Company Info -->
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6">
            <h2 class="text-lg font-bold text-slate-900 mb-4 flex items-center gap-2">
                <i class="fa-solid fa-building text-orange-500"></i> Company Information
            </h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Company Name</label>
                    <input type="text" name="company_name" value="{{ old('company_name') }}" required
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 outline-none transition">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Tagline</label>
                    <input type="text" name="company_tagline" value="{{ old('company_tagline', 'Chartered Accountants') }}"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 outline-none transition">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Logo Letter</label>
                    <input type="text" name="logo_letter" value="{{ old('logo_letter') }}" maxlength="5" placeholder="B"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 outline-none transition">
                </div>
            </div>
        </div>

        <!-- Contact Info -->
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6">
            <h2 class="text-lg font-bold text-slate-900 mb-4 flex items-center gap-2">
                <i class="fa-solid fa-address-book text-orange-500"></i> Contact Details
            </h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Phone 1</label>
                    <input type="text" name="phone_1" value="{{ old('phone_1') }}"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 outline-none transition">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Phone 2</label>
                    <input type="text" name="phone_2" value="{{ old('phone_2') }}"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 outline-none transition">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Email 1</label>
                    <input type="email" name="email_1" value="{{ old('email_1') }}"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 outline-none transition">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Email 2</label>
                    <input type="email" name="email_2" value="{{ old('email_2') }}"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 outline-none transition">
                </div>
                <div class="md:col-span-2">
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Address</label>
                    <textarea name="address" rows="2"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 outline-none transition">{{ old('address') }}</textarea>
                </div>
            </div>
        </div>

        <!-- Admin User -->
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6">
            <h2 class="text-lg font-bold text-slate-900 mb-4 flex items-center gap-2">
                <i class="fa-solid fa-user-shield text-orange-500"></i> Tenant Admin User
            </h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Admin Name</label>
                    <input type="text" name="admin_name" value="{{ old('admin_name') }}" required
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 outline-none transition">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Admin Email</label>
                    <input type="email" name="admin_email" value="{{ old('admin_email') }}" required
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 outline-none transition">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Admin Password</label>
                    <input type="password" name="admin_password" required
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 outline-none transition">
                </div>
            </div>
        </div>

        <div class="flex justify-end">
            <button type="submit"
                class="px-8 py-3 bg-linear-to-rrom-orange-500 to-orange-600 text-white font-bold rounded-xl hover:from-orange-600 hover:to-orange-700 transition-all shadow-lg shadow-orange-500/25">
                <i class="fa-solid fa-rocket mr-2"></i> Create Tenant
            </button>
        </div>
    </form>
</x-admin-layout>
