<x-admin-layout title="Central Site Settings">
    <div class="mb-8">
        <a href="{{ route('admin.dashboard') }}" class="text-slate-500 hover:text-orange-500 transition text-sm flex items-center gap-1 mb-4">
            <i class="fa-solid fa-arrow-left"></i> Back to Dashboard
        </a>
        <h1 class="text-3xl font-bold text-slate-900">Central Site Settings</h1>
        <p class="text-slate-500 mt-1">Update the main website's basic information (127.0.0.1:8000)</p>
    </div>

    @if(session('success'))
        <div class="bg-green-50 border border-green-200 rounded-xl p-4 mb-6">
            <p class="text-green-600 font-medium">{{ session('success') }}</p>
        </div>
    @endif

    @if($errors->any())
        <div class="bg-red-50 border border-red-200 rounded-xl p-4 mb-6">
            @foreach($errors->all() as $error)
                <p class="text-red-600 text-sm">{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form method="POST" action="{{ route('central.settings.update') }}" class="space-y-8">
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
                    <input type="url" name="map_embed_url" value="{{ old('map_embed_url', $settings['map_embed_url']) }}"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 outline-none transition"
                        placeholder="https://www.google.com/maps/embed?pb=...">
                </div>
            </div>
        </div>

        <!-- Social Media -->
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6">
            <h2 class="text-lg font-bold text-slate-900 mb-4 flex items-center gap-2">
                <i class="fa-solid fa-share-nodes text-orange-500"></i> Social Media Links
            </h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">LinkedIn</label>
                    <input type="url" name="social_linkedin" value="{{ old('social_linkedin', $settings['social_linkedin']) }}"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 outline-none transition"
                        placeholder="https://linkedin.com/...">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Facebook</label>
                    <input type="url" name="social_facebook" value="{{ old('social_facebook', $settings['social_facebook']) }}"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 outline-none transition"
                        placeholder="https://facebook.com/...">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Twitter</label>
                    <input type="url" name="social_twitter" value="{{ old('social_twitter', $settings['social_twitter']) }}"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 outline-none transition"
                        placeholder="https://twitter.com/...">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">YouTube</label>
                    <input type="url" name="social_youtube" value="{{ old('social_youtube', $settings['social_youtube']) }}"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 outline-none transition"
                        placeholder="https://youtube.com/...">
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6">
            <h2 class="text-lg font-bold text-slate-900 mb-4 flex items-center gap-2">
                <i class="fa-solid fa-align-left text-orange-500"></i> Footer Content
            </h2>
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">Footer Description</label>
                <textarea name="footer_description" rows="3"
                    class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 outline-none transition">{{ old('footer_description', $settings['footer_description']) }}</textarea>
            </div>
        </div>

        <div class="flex gap-4">
            <button type="submit" class="px-8 py-3 bg-orange-500 hover:bg-orange-600 text-white font-semibold rounded-xl transition shadow-lg shadow-orange-500/25 hover:shadow-orange-500/40">
                <i class="fa-solid fa-save mr-2"></i> Save Settings
            </button>
            <a href="{{ route('admin.dashboard') }}" class="px-8 py-3 bg-slate-200 hover:bg-slate-300 text-slate-700 font-semibold rounded-xl transition">
                Cancel
            </a>
        </div>
    </form>
</x-admin-layout>
