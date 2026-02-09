<x-admin-layout title="Site Settings">
    <div class="mb-8">
        <a href="{{ route('admin.dashboard') }}" class="text-slate-500 hover:text-orange-500 transition text-sm flex items-center gap-1 mb-4">
            <i class="fa-solid fa-arrow-left"></i> Back to Dashboard
        </a>
        <h1 class="text-3xl font-bold text-slate-900">Site Settings</h1>
        <p class="text-slate-500 mt-1">Customize your website's information</p>
    </div>

    @if($errors->any())
        <div class="bg-red-50 border border-red-200 rounded-xl p-4 mb-6">
            @foreach($errors->all() as $error)
                <p class="text-red-600 text-sm">{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form method="POST" action="{{ route('tenant.admin.settings.update') }}" class="space-y-8">
        @csrf
        @method('PUT')

        <!-- Company Info -->
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6">
            <h2 class="text-lg font-bold text-slate-900 mb-4 flex items-center gap-2">
                <i class="fa-solid fa-building text-orange-500"></i> Company Information
            </h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Company Name</label>
                    <input type="text" name="company_name" value="{{ old('company_name', $settings['company_name']) }}" required
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 outline-none transition">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Tagline</label>
                    <input type="text" name="company_tagline" value="{{ old('company_tagline', $settings['company_tagline']) }}"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 outline-none transition">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Logo Letter</label>
                    <input type="text" name="logo_letter" value="{{ old('logo_letter', $settings['logo_letter']) }}" maxlength="5"
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
                    <input type="text" name="phone_1" value="{{ old('phone_1', $settings['phone_1']) }}"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 outline-none transition">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Phone 2</label>
                    <input type="text" name="phone_2" value="{{ old('phone_2', $settings['phone_2']) }}"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 outline-none transition">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Email 1</label>
                    <input type="email" name="email_1" value="{{ old('email_1', $settings['email_1']) }}"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 outline-none transition">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Email 2</label>
                    <input type="email" name="email_2" value="{{ old('email_2', $settings['email_2']) }}"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 outline-none transition">
                </div>
                <div class="md:col-span-2">
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Address</label>
                    <textarea name="address" rows="2"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 outline-none transition">{{ old('address', $settings['address']) }}</textarea>
                </div>
                <div class="md:col-span-2">
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Google Map Embed URL</label>
                    <input type="text" name="map_embed_url" value="{{ old('map_embed_url', $settings['map_embed_url']) }}"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 outline-none transition"
                        placeholder="https://www.google.com/maps/embed?...">
                </div>
            </div>
        </div>

        <!-- Social Links -->
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6">
            <h2 class="text-lg font-bold text-slate-900 mb-4 flex items-center gap-2">
                <i class="fa-solid fa-share-nodes text-orange-500"></i> Social Media Links
            </h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2"><i class="fa-brands fa-linkedin text-blue-600 mr-1"></i> LinkedIn</label>
                    <input type="text" name="social_linkedin" value="{{ old('social_linkedin', $settings['social_linkedin']) }}"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 outline-none transition">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2"><i class="fa-brands fa-facebook text-blue-500 mr-1"></i> Facebook</label>
                    <input type="text" name="social_facebook" value="{{ old('social_facebook', $settings['social_facebook']) }}"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 outline-none transition">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2"><i class="fa-brands fa-twitter text-sky-500 mr-1"></i> Twitter</label>
                    <input type="text" name="social_twitter" value="{{ old('social_twitter', $settings['social_twitter']) }}"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 outline-none transition">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2"><i class="fa-brands fa-youtube text-red-500 mr-1"></i> YouTube</label>
                    <input type="text" name="social_youtube" value="{{ old('social_youtube', $settings['social_youtube']) }}"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 outline-none transition">
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6">
            <h2 class="text-lg font-bold text-slate-900 mb-4 flex items-center gap-2">
                <i class="fa-solid fa-paragraph text-orange-500"></i> Footer
            </h2>
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">Footer Description</label>
                <textarea name="footer_description" rows="3"
                    class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 outline-none transition">{{ old('footer_description', $settings['footer_description']) }}</textarea>
            </div>
        </div>

        <div class="flex justify-end">
            <button type="submit"
                class="px-8 py-3 bg-linear-to-r from-orange-500 to-orange-600 text-white font-bold rounded-xl hover:from-orange-600 hover:to-orange-700 transition-all shadow-lg shadow-orange-500/25">
                <i class="fa-solid fa-save mr-2"></i> Save Settings
            </button>
        </div>
    </form>
</x-admin-layout>
