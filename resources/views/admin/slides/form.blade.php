<x-admin-layout title="{{ $slide->exists ? 'Edit Slide' : 'Add Slide' }}" header="{{ $slide->exists ? 'Edit Slide' : 'Add New Slide' }}">

    <div class="max-w-2xl">
        <form method="POST"
              action="{{ $slide->exists ? route('admin.slides.update', $slide) : route('admin.slides.store') }}"
              enctype="multipart/form-data" class="space-y-6">
            @csrf
            @if($slide->exists) @method('PUT') @endif

            @include('admin.partials.lang-fields', ['name' => 'title', 'label' => 'Slide Title (optional)', 'type' => 'text', 'model' => $slide])

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Slide Image @if(!$slide->exists)<span class="text-red-500">*</span>@endif
                </label>
                @if($slide->exists && $slide->image)
                    <img src="{{ img_url($slide->image) }}" class="w-40 h-24 object-cover rounded-lg border mb-3">
                @endif
                <input type="file" name="image" accept="image/*" {{ $slide->exists ? '' : 'required' }}
                    class="text-sm text-slate-600 file:mr-3 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-slate-100 file:text-slate-700 hover:file:bg-slate-200">
                <p class="text-xs text-slate-400 mt-1">Recommended: 1920×1080px, max 5MB</p>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Display Order</label>
                    <input type="number" name="order" value="{{ old('order', $slide->order ?? 0) }}"
                        class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none">
                </div>
                <div class="flex items-end">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="hidden" name="is_active" value="0">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', $slide->is_active ?? true) ? 'checked' : '' }}
                            class="w-4 h-4 text-orange-500 border-slate-300 rounded focus:ring-orange-500">
                        <span class="text-sm text-slate-700">Active (visible on website)</span>
                    </label>
                </div>
            </div>

            <div class="flex gap-3 pt-4">
                <button type="submit" class="px-6 py-2.5 bg-orange-500 hover:bg-orange-600 text-white font-semibold rounded-lg shadow transition">
                    <i class="fa-solid fa-check mr-1"></i> {{ $slide->exists ? 'Update Slide' : 'Add Slide' }}
                </button>
                <a href="{{ route('admin.slides.index') }}" class="px-6 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 font-medium rounded-lg transition">Cancel</a>
            </div>
        </form>
    </div>

</x-admin-layout>
