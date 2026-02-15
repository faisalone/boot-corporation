<x-admin-layout title="{{ $publication->exists ? 'Edit Publication' : 'Add Publication' }}" header="{{ $publication->exists ? 'Edit Publication' : 'Add New Publication' }}">

    <div class="max-w-4xl">
        <form method="POST"
              action="{{ $publication->exists ? route('admin.publications.update', $publication) : route('admin.publications.store') }}"
              enctype="multipart/form-data" class="space-y-6">
            @csrf
            @if($publication->exists) @method('PUT') @endif

            @include('admin.partials.lang-fields', ['name' => 'title', 'label' => 'Publication Title', 'type' => 'text', 'model' => $publication, 'required' => true])

            @include('admin.partials.lang-fields', ['name' => 'summary', 'label' => 'Short Summary', 'type' => 'textarea', 'model' => $publication])

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Category</label>
                    <select name="category" class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none">
                        <option value="">— Select Category —</option>
                        <option value="Tax Update" {{ old('category', $publication->category) === 'Tax Update' ? 'selected' : '' }}>Tax Update</option>
                        <option value="Audit Insight" {{ old('category', $publication->category) === 'Audit Insight' ? 'selected' : '' }}>Audit Insight</option>
                        <option value="Newsletter" {{ old('category', $publication->category) === 'Newsletter' ? 'selected' : '' }}>Newsletter</option>
                        <option value="Advisory" {{ old('category', $publication->category) === 'Advisory' ? 'selected' : '' }}>Advisory</option>
                        <option value="Regulatory" {{ old('category', $publication->category) === 'Regulatory' ? 'selected' : '' }}>Regulatory</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Published Date</label>
                    <input type="date" name="published_at" value="{{ old('published_at', $publication->published_at?->format('Y-m-d')) }}"
                        class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none">
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">Document / PDF File</label>
                @if($publication->exists && $publication->file)
                    <a href="{{ asset('storage/' . $publication->file) }}" target="_blank" class="inline-flex items-center gap-2 text-sm text-orange-600 hover:underline mb-3">
                        <i class="fa-solid fa-file-pdf"></i> View current file
                    </a>
                @endif
                <input type="file" name="file" accept=".pdf,.doc,.docx"
                    class="text-sm text-slate-600 file:mr-3 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-slate-100 file:text-slate-700 hover:file:bg-slate-200">
                <p class="text-xs text-slate-400 mt-1">Accepts PDF, DOC, DOCX. Max 10MB.</p>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Display Order</label>
                    <input type="number" name="order" value="{{ old('order', $publication->order ?? 0) }}"
                        class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none">
                </div>
                <div class="flex items-end">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="hidden" name="is_active" value="0">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', $publication->is_active ?? true) ? 'checked' : '' }}
                            class="w-4 h-4 text-orange-500 border-slate-300 rounded focus:ring-orange-500">
                        <span class="text-sm text-slate-700">Active (visible on website)</span>
                    </label>
                </div>
            </div>

            <div class="flex gap-3 pt-4">
                <button type="submit" class="px-6 py-2.5 bg-orange-500 hover:bg-orange-600 text-white font-semibold rounded-lg shadow transition">
                    <i class="fa-solid fa-check mr-1"></i> {{ $publication->exists ? 'Update' : 'Add Publication' }}
                </button>
                <a href="{{ route('admin.publications.index') }}" class="px-6 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 font-medium rounded-lg transition">Cancel</a>
            </div>
        </form>
    </div>

</x-admin-layout>
