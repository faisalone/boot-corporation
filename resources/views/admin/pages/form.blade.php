<x-admin-layout title="{{ $page->exists ? 'Edit Page' : 'Create Page' }}" header="{{ $page->exists ? 'Edit Page' : 'Create New Page' }}">

    <div class="max-w-4xl">
        <form method="POST"
              action="{{ $page->exists ? route('admin.pages.update', $page) : route('admin.pages.store') }}"
              enctype="multipart/form-data" class="space-y-6">
            @csrf
            @if($page->exists) @method('PUT') @endif

            @include('admin.partials.lang-fields', ['name' => 'title', 'label' => 'Page Title', 'type' => 'text', 'model' => $page, 'required' => true])

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">URL Slug</label>
                <input type="text" name="slug" value="{{ old('slug', $page->slug) }}"
                    class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none font-mono"
                    placeholder="auto-generated-from-title">
                <p class="text-xs text-slate-400 mt-1">Leave empty to auto-generate from title.</p>
            </div>

            @include('admin.partials.lang-fields', ['name' => 'summary', 'label' => 'Short Summary', 'type' => 'textarea', 'model' => $page])

            @include('admin.partials.lang-fields', ['name' => 'content', 'label' => 'Full Content (Rich Text)', 'type' => 'editor', 'model' => $page])

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">Cover Image</label>
                @if($page->exists && $page->image)
                    <img src="{{ img_url($page->image) }}" class="w-40 h-24 object-cover rounded-lg border mb-3">
                @endif
                <input type="file" name="image" accept="image/*"
                    class="text-sm text-slate-600 file:mr-3 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-slate-100 file:text-slate-700 hover:file:bg-slate-200">
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Display Order</label>
                    <input type="number" name="order" value="{{ old('order', $page->order ?? 0) }}"
                        class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none">
                </div>
                <div class="flex items-end">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="hidden" name="is_active" value="0">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', $page->is_active ?? true) ? 'checked' : '' }}
                            class="w-4 h-4 text-orange-500 border-slate-300 rounded focus:ring-orange-500">
                        <span class="text-sm text-slate-700">Active (visible on website)</span>
                    </label>
                </div>
            </div>

            <div class="flex gap-3 pt-4">
                <button type="submit" class="px-6 py-2.5 bg-orange-500 hover:bg-orange-600 text-white font-semibold rounded-lg shadow transition">
                    <i class="fa-solid fa-check mr-1"></i> {{ $page->exists ? 'Update Page' : 'Create Page' }}
                </button>
                <a href="{{ route('admin.pages.index') }}" class="px-6 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 font-medium rounded-lg transition">Cancel</a>
            </div>
        </form>
    </div>

</x-admin-layout>
