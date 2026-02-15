<x-admin-layout title="{{ $menu->exists ? 'Edit Menu Item' : 'Add Menu Item' }}" header="{{ $menu->exists ? 'Edit Menu Item' : 'Add New Menu Item' }}">

    <div class="max-w-2xl">
        <form method="POST"
              action="{{ $menu->exists ? route('admin.menus.update', $menu) : route('admin.menus.store') }}"
              class="space-y-6">
            @csrf
            @if($menu->exists) @method('PUT') @endif

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">Parent Menu (leave empty for top‑level)</label>
                <select name="parent_id" class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none">
                    <option value="">— No Parent (Top Level) —</option>
                    @foreach($parents as $parent)
                        <option value="{{ $parent->id }}" {{ old('parent_id', $menu->parent_id) == $parent->id ? 'selected' : '' }}>
                            {{ $parent->title_en }}
                        </option>
                    @endforeach
                </select>
            </div>

            @include('admin.partials.lang-fields', ['name' => 'title', 'label' => 'Menu Label', 'type' => 'text', 'model' => $menu, 'required' => true])

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">URL (external link)</label>
                    <input type="text" name="url" value="{{ old('url', $menu->url) }}"
                        class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none"
                        placeholder="https://example.com">
                    <p class="text-xs text-slate-400 mt-1">Use for external links.</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Route Name (internal link)</label>
                    <input type="text" name="route_name" value="{{ old('route_name', $menu->route_name) }}"
                        class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none"
                        placeholder="e.g. about, service.index">
                    <p class="text-xs text-slate-400 mt-1">Laravel route name. Takes priority over URL.</p>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Icon (FontAwesome)</label>
                    <input type="text" name="icon" value="{{ old('icon', $menu->icon) }}"
                        class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none"
                        placeholder="fa-home">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Open In</label>
                    <select name="target" class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none">
                        <option value="_self" {{ old('target', $menu->target) === '_self' ? 'selected' : '' }}>Same Window</option>
                        <option value="_blank" {{ old('target', $menu->target) === '_blank' ? 'selected' : '' }}>New Tab</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Display Order</label>
                    <input type="number" name="order" value="{{ old('order', $menu->order ?? 0) }}"
                        class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none">
                </div>
            </div>

            <div>
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="hidden" name="is_active" value="0">
                    <input type="checkbox" name="is_active" value="1" {{ old('is_active', $menu->is_active ?? true) ? 'checked' : '' }}
                        class="w-4 h-4 text-orange-500 border-slate-300 rounded focus:ring-orange-500">
                    <span class="text-sm text-slate-700">Active (visible in navigation)</span>
                </label>
            </div>

            <div class="flex gap-3 pt-4">
                <button type="submit" class="px-6 py-2.5 bg-orange-500 hover:bg-orange-600 text-white font-semibold rounded-lg shadow transition">
                    <i class="fa-solid fa-check mr-1"></i> {{ $menu->exists ? 'Update' : 'Add Menu Item' }}
                </button>
                <a href="{{ route('admin.menus.index') }}" class="px-6 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 font-medium rounded-lg transition">Cancel</a>
            </div>
        </form>
    </div>

</x-admin-layout>
