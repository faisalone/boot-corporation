@php
    $isMottoItems = $setting->key === 'about_motto_items';
    $isCoreValues = $setting->key === 'about_core_values_items';
    
    $itemsEn = json_decode($setting->value_en ?: '[]', true) ?: [];
    $itemsBn = json_decode($setting->value_bn ?: '[]', true) ?: [];
    $itemsCn = json_decode($setting->value_cn ?: '[]', true) ?: [];
@endphp

<div class="border border-slate-200 rounded-lg overflow-hidden" data-json-editor="{{ $setting->key }}">
    <div class="flex bg-slate-50 border-b border-slate-200">
        <button type="button" onclick="switchJsonTab(this, 'en')" class="json-lang-tab px-4 py-2 text-xs font-medium text-orange-600 border-b-2 border-orange-500">English</button>
        <button type="button" onclick="switchJsonTab(this, 'bn')" class="json-lang-tab px-4 py-2 text-xs font-medium text-slate-500 border-b-2 border-transparent hover:text-slate-700">Bangla</button>
        <button type="button" onclick="switchJsonTab(this, 'cn')" class="json-lang-tab px-4 py-2 text-xs font-medium text-slate-500 border-b-2 border-transparent hover:text-slate-700">Chinese</button>
    </div>
    
    <div class="p-4">
        {{-- Hidden textareas for actual form submission --}}
        <textarea name="settings[{{ $setting->key }}][en]" class="hidden json-output" data-lang="en"></textarea>
        <textarea name="settings[{{ $setting->key }}][bn]" class="hidden json-output" data-lang="bn"></textarea>
        <textarea name="settings[{{ $setting->key }}][cn]" class="hidden json-output" data-lang="cn"></textarea>

        @if($isMottoItems)
            {{-- Motto Items (BOOT) Editor --}}
            @foreach(['en', 'bn', 'cn'] as $lang)
                @php $items = ${'items' . ucfirst($lang)}; @endphp
                <div class="json-lang-panel space-y-4" data-lang="{{ $lang }}" style="{{ $lang !== 'en' ? 'display:none;' : '' }}">
                    @foreach($items as $idx => $item)
                        <div class="bg-slate-50 border border-slate-200 rounded-lg p-4">
                            <div class="flex items-center gap-2 mb-3">
                                <div class="w-10 h-10 bg-orange-100 text-orange-600 rounded-lg flex items-center justify-center font-bold">
                                    {{ $item['letter'] ?? '' }}
                                </div>
                                <div class="text-xs font-semibold text-slate-500 uppercase">Item {{ $idx + 1 }}</div>
                            </div>
                            <div class="space-y-3">
                                <div>
                                    <label class="block text-xs font-medium text-slate-600 mb-1">Letter</label>
                                    <input type="text" 
                                        class="json-field w-full px-3 py-2 border border-slate-200 rounded text-sm focus:ring-2 focus:ring-orange-500 outline-none"
                                        data-field="letter" data-idx="{{ $idx }}" maxlength="1"
                                        value="{{ $item['letter'] ?? '' }}">
                                </div>
                                <div>
                                    <label class="block text-xs font-medium text-slate-600 mb-1">Title</label>
                                    <input type="text"
                                        class="json-field w-full px-3 py-2 border border-slate-200 rounded text-sm focus:ring-2 focus:ring-orange-500 outline-none"
                                        data-field="title" data-idx="{{ $idx }}"
                                        value="{{ $item['title'] ?? '' }}">
                                </div>
                                <div>
                                    <label class="block text-xs font-medium text-slate-600 mb-1">Description</label>
                                    <textarea rows="2"
                                        class="json-field w-full px-3 py-2 border border-slate-200 rounded text-sm focus:ring-2 focus:ring-orange-500 outline-none"
                                        data-field="description" data-idx="{{ $idx }}">{{ $item['description'] ?? '' }}</textarea>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach

        @elseif($isCoreValues)
            {{-- Core Values Editor --}}
            @foreach(['en', 'bn', 'cn'] as $lang)
                @php $items = ${'items' . ucfirst($lang)}; @endphp
                <div class="json-lang-panel space-y-4" data-lang="{{ $lang }}" style="{{ $lang !== 'en' ? 'display:none;' : '' }}">
                    @foreach($items as $idx => $item)
                        <div class="bg-slate-50 border border-slate-200 rounded-lg p-4">
                            <div class="flex items-center gap-3 mb-3">
                                <div class="w-10 h-10 bg-orange-100 text-orange-600 rounded-lg flex items-center justify-center">
                                    <i class="{{ $item['icon'] ?? 'fa-solid fa-star' }} text-sm"></i>
                                </div>
                                <div class="text-xs font-semibold text-slate-500 uppercase">Value {{ $idx + 1 }}</div>
                            </div>
                            <div class="space-y-3">
                                <div>
                                    <label class="block text-xs font-medium text-slate-600 mb-1">Icon Class (Font Awesome)</label>
                                    <input type="text"
                                        class="json-field w-full px-3 py-2 border border-slate-200 rounded text-sm focus:ring-2 focus:ring-orange-500 outline-none font-mono text-xs"
                                        data-field="icon" data-idx="{{ $idx }}"
                                        value="{{ $item['icon'] ?? '' }}"
                                        placeholder="fa-solid fa-star">
                                </div>
                                <div>
                                    <label class="block text-xs font-medium text-slate-600 mb-1">Title</label>
                                    <input type="text"
                                        class="json-field w-full px-3 py-2 border border-slate-200 rounded text-sm focus:ring-2 focus:ring-orange-500 outline-none"
                                        data-field="title" data-idx="{{ $idx }}"
                                        value="{{ $item['title'] ?? '' }}">
                                </div>
                                <div>
                                    <label class="block text-xs font-medium text-slate-600 mb-1">Description</label>
                                    <textarea rows="3"
                                        class="json-field w-full px-3 py-2 border border-slate-200 rounded text-sm focus:ring-2 focus:ring-orange-500 outline-none"
                                        data-field="description" data-idx="{{ $idx }}">{{ $item['description'] ?? '' }}</textarea>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        @endif
    </div>
</div>

<script>
(function() {
    const container = document.querySelector('[data-json-editor="{{ $setting->key }}"]');
    if (!container) return;

    function updateJsonOutput() {
        ['en', 'bn', 'cn'].forEach(lang => {
            const panel = container.querySelector(`.json-lang-panel[data-lang="${lang}"]`);
            const output = container.querySelector(`.json-output[data-lang="${lang}"]`);
            if (!panel || !output) return;

            const items = [];
            const fields = panel.querySelectorAll('.json-field');
            const itemCount = Math.max(...Array.from(fields).map(f => parseInt(f.dataset.idx) || 0)) + 1;

            for (let i = 0; i < itemCount; i++) {
                const item = {};
                panel.querySelectorAll(`.json-field[data-idx="${i}"]`).forEach(field => {
                    item[field.dataset.field] = field.value;
                });
                items.push(item);
            }

            output.value = JSON.stringify(items);
        });
    }

    // Update JSON on field change
    container.querySelectorAll('.json-field').forEach(field => {
        field.addEventListener('input', updateJsonOutput);
        field.addEventListener('change', updateJsonOutput);
    });

    // Initial update
    updateJsonOutput();

    // Update before form submission
    const form = container.closest('form');
    if (form) {
        form.addEventListener('submit', function(e) {
            updateJsonOutput();
        });
    }
})();

function switchJsonTab(btn, lang) {
    const container = btn.closest('[data-json-editor]');
    container.querySelectorAll('.json-lang-tab').forEach(t => {
        t.classList.remove('text-orange-600', 'border-orange-500');
        t.classList.add('text-slate-500', 'border-transparent');
    });
    btn.classList.add('text-orange-600', 'border-orange-500');
    btn.classList.remove('text-slate-500', 'border-transparent');
    container.querySelectorAll('.json-lang-panel').forEach(p => {
        p.style.display = p.dataset.lang === lang ? 'block' : 'none';
    });
}
</script>
