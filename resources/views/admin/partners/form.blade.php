<x-admin-layout title="{{ $partner->exists ? 'Edit Partner' : 'Add Partner' }}" header="{{ $partner->exists ? 'Edit Partner' : 'Add New Partner' }}">

    <div class="max-w-4xl">
        <form method="POST"
              action="{{ $partner->exists ? route('admin.partners.update', $partner) : route('admin.partners.store') }}"
              enctype="multipart/form-data" class="space-y-6">
            @csrf
            @if($partner->exists) @method('PUT') @endif

            @include('admin.partials.lang-fields', ['name' => 'name', 'label' => 'Full Name', 'type' => 'text', 'model' => $partner, 'required' => true])

            @include('admin.partials.lang-fields', ['name' => 'designation', 'label' => 'Designation / Title', 'type' => 'text', 'model' => $partner])

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">Professional Credentials</label>
                <input type="text" name="credentials" value="{{ old('credentials', $partner->credentials) }}"
                    class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none"
                    placeholder="e.g. FCA (ICAB, ICAEW), FCCA">
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Email Address</label>
                    <input type="email" name="email" value="{{ old('email', $partner->email) }}"
                        class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none"
                        placeholder="partner@example.com">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">LinkedIn Profile URL</label>
                    <input type="url" name="linkedin" value="{{ old('linkedin', $partner->linkedin) }}"
                        class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none"
                        placeholder="https://linkedin.com/in/...">
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">Profile Photo</label>
                @if($partner->exists && $partner->photo)
                    <img src="{{ img_url($partner->photo) }}" class="w-20 h-20 object-cover rounded-full border mb-3">
                @endif
                <input type="file" name="photo" accept="image/*"
                    class="text-sm text-slate-600 file:mr-3 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-slate-100 file:text-slate-700 hover:file:bg-slate-200">
            </div>

            @include('admin.partials.lang-fields', ['name' => 'bio', 'label' => 'Biography / About (Rich Text)', 'type' => 'editor', 'model' => $partner])

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Display Order</label>
                    <input type="number" name="order" value="{{ old('order', $partner->order ?? 0) }}"
                        class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none">
                </div>
                <div class="flex items-end">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="hidden" name="is_active" value="0">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', $partner->is_active ?? true) ? 'checked' : '' }}
                            class="w-4 h-4 text-orange-500 border-slate-300 rounded focus:ring-orange-500">
                        <span class="text-sm text-slate-700">Active (visible on website)</span>
                    </label>
                </div>
            </div>

            <div class="flex gap-3 pt-4">
                <button type="submit" class="px-6 py-2.5 bg-orange-500 hover:bg-orange-600 text-white font-semibold rounded-lg shadow transition">
                    <i class="fa-solid fa-check mr-1"></i> {{ $partner->exists ? 'Update' : 'Add Partner' }}
                </button>
                <a href="{{ route('admin.partners.index') }}" class="px-6 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 font-medium rounded-lg transition">Cancel</a>
            </div>
        </form>
    </div>

</x-admin-layout>
