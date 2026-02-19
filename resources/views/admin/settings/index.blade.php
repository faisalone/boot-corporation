<x-admin-layout title="Site Settings" header="Site Settings">

    @php
        $firstGroupKey = null;
        foreach ($groups as $groupKey => $groupLabel) {
            if (isset($settings[$groupKey])) {
                $firstGroupKey = $groupKey;
                break;
            }
        }
    @endphp

    <div class="bg-white rounded-xl border border-slate-200 p-4 mb-6">
        <div class="flex flex-wrap gap-2">
            @foreach($groups as $groupKey => $groupLabel)
                @if(isset($settings[$groupKey]))
                    <button
                        type="button"
                        id="tab-{{ $groupKey }}"
                        onclick="selectSettingsTab('{{ $groupKey }}')"
                        class="px-3 py-1.5 rounded-full text-xs font-semibold border transition {{ $groupKey === $firstGroupKey ? 'border-orange-200 bg-orange-50 text-orange-700' : 'border-slate-200 bg-slate-50 text-slate-600 hover:text-orange-600 hover:border-orange-200 hover:bg-orange-50' }}">
                        {{ $groupLabel }}
                    </button>
                @endif
            @endforeach
        </div>
    </div>

    <form method="POST" action="{{ route('admin.settings.update') }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        @foreach($groups as $groupKey => $groupLabel)
            @if(isset($settings[$groupKey]))
                <div id="panel-{{ $groupKey }}" class="settings-panel bg-white rounded-xl border border-slate-200 p-6 mb-6 {{ $groupKey === $firstGroupKey ? '' : 'hidden' }}">
                    <h3 class="text-sm font-bold text-slate-800 uppercase tracking-wider mb-5 pb-3 border-b border-slate-100">
                        <i class="fa-solid fa-folder-open text-orange-500 mr-2"></i> {{ $groupLabel }}
                    </h3>
                    <div class="space-y-5">
                        @foreach($settings[$groupKey] as $setting)
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-2">{{ $setting->label }}</label>

                                {{-- Special handling for JSON array settings --}}
                                @if($setting->key === 'about_motto_items' || $setting->key === 'about_core_values_items')
                                    @include('admin.settings.partials.json-editor', ['setting' => $setting])
                                
                                @elseif($setting->type === 'image' || $setting->type === 'file')
                                    @php
                                        $isFavicon = $setting->key === 'favicon';
                                        $isSitePreview = $setting->key === 'site_preview';
                                        $previewClass = $isFavicon ? 'w-10 h-10' : ($isSitePreview ? 'w-48 h-28' : 'w-16 h-16');
                                    @endphp
                                    <div class="flex flex-col gap-2">
                                        <div class="flex items-center gap-4">
                                            @if($setting->value_en)
                                                @if($setting->type === 'image')
                                                    <img src="{{ img_url($setting->value_en) }}"
                                                        class="{{ $previewClass }} object-contain rounded-lg border bg-slate-50 p-1">
                                                @else
                                                    <a href="{{ asset('storage/' . $setting->value_en) }}" target="_blank" class="text-sm text-orange-600 underline">
                                                        <i class="fa-solid fa-file-pdf mr-1"></i> View current file
                                                    </a>
                                                @endif
                                            @endif
                                            <input type="file" name="settings[{{ $setting->key }}]"
                                                class="text-sm text-slate-600 file:mr-3 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:bg-slate-100 file:text-slate-700 hover:file:bg-slate-200">
                                        </div>
                                        @if($setting->value_en)
                                            <button type="button" onclick="deleteFile('{{ route('admin.settings.file.destroy', $setting->key) }}')" class="text-xs text-red-500 hover:text-red-700 flex items-center">
                                                <i class="fa-solid fa-trash mr-1"></i> Delete current file
                                            </button>
                                        @endif
                                    </div>
                                @elseif($setting->type === 'textarea' || $setting->type === 'editor')
                                    {{-- Language tabs --}}
                                    <div class="border border-slate-200 rounded-lg overflow-hidden">
                                        <div class="flex bg-slate-50 border-b border-slate-200">
                                            <button type="button" onclick="switchTab(this, 'en')" class="lang-tab px-4 py-2 text-xs font-medium text-orange-600 border-b-2 border-orange-500">English</button>
                                            <button type="button" onclick="switchTab(this, 'bn')" class="lang-tab px-4 py-2 text-xs font-medium text-slate-500 border-b-2 border-transparent hover:text-slate-700">Bangla</button>
                                            <button type="button" onclick="switchTab(this, 'cn')" class="lang-tab px-4 py-2 text-xs font-medium text-slate-500 border-b-2 border-transparent hover:text-slate-700">Chinese</button>
                                        </div>
                                        <div class="p-3">
                                            <div class="lang-panel" data-lang="en">
                                                <textarea name="settings[{{ $setting->key }}][en]" rows="3"
                                                    class="{{ $setting->type === 'editor' ? 'rich-editor' : '' }} w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none"
                                                    placeholder="English">{{ old("settings.{$setting->key}.en", $setting->value_en) }}</textarea>
                                            </div>
                                            <div class="lang-panel hidden" data-lang="bn">
                                                <textarea name="settings[{{ $setting->key }}][bn]" rows="3"
                                                    class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none"
                                                    placeholder="Bangla (বাংলা)">{{ old("settings.{$setting->key}.bn", $setting->value_bn) }}</textarea>
                                            </div>
                                            <div class="lang-panel hidden" data-lang="cn">
                                                <textarea name="settings[{{ $setting->key }}][cn]" rows="3"
                                                    class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none"
                                                    placeholder="Chinese (中文)">{{ old("settings.{$setting->key}.cn", $setting->value_cn) }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    {{-- text / url --}}
                                    <div class="border border-slate-200 rounded-lg overflow-hidden">
                                        <div class="flex bg-slate-50 border-b border-slate-200">
                                            <button type="button" onclick="switchTab(this, 'en')" class="lang-tab px-4 py-2 text-xs font-medium text-orange-600 border-b-2 border-orange-500">English</button>
                                            <button type="button" onclick="switchTab(this, 'bn')" class="lang-tab px-4 py-2 text-xs font-medium text-slate-500 border-b-2 border-transparent hover:text-slate-700">Bangla</button>
                                            <button type="button" onclick="switchTab(this, 'cn')" class="lang-tab px-4 py-2 text-xs font-medium text-slate-500 border-b-2 border-transparent hover:text-slate-700">Chinese</button>
                                        </div>
                                        <div class="p-3 space-y-0">
                                            <div class="lang-panel" data-lang="en">
                                                <input type="text" name="settings[{{ $setting->key }}][en]"
                                                    value="{{ old("settings.{$setting->key}.en", $setting->value_en) }}"
                                                    class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none"
                                                    placeholder="English">
                                            </div>
                                            <div class="lang-panel hidden" data-lang="bn">
                                                <input type="text" name="settings[{{ $setting->key }}][bn]"
                                                    value="{{ old("settings.{$setting->key}.bn", $setting->value_bn) }}"
                                                    class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none"
                                                    placeholder="Bangla (বাংলা)">
                                            </div>
                                            <div class="lang-panel hidden" data-lang="cn">
                                                <input type="text" name="settings[{{ $setting->key }}][cn]"
                                                    value="{{ old("settings.{$setting->key}.cn", $setting->value_cn) }}"
                                                    class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none"
                                                    placeholder="Chinese (中文)">
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        @endforeach

        <div class="flex justify-end">
            <button type="submit" class="px-6 py-2.5 bg-orange-500 hover:bg-orange-600 text-white font-semibold rounded-lg shadow transition">
                <i class="fa-solid fa-check mr-2"></i> Save All Settings
            </button>
        </div>
    </form>

    <form id="delete-file-form" method="POST" class="hidden">
        @csrf
        @method('DELETE')
    </form>

    <script>
        function switchTab(btn, lang) {
            const container = btn.closest('.rounded-lg') || btn.closest('.border');
            container.querySelectorAll('.lang-tab').forEach(t => {
                t.classList.remove('text-orange-600', 'border-orange-500');
                t.classList.add('text-slate-500', 'border-transparent');
            });
            btn.classList.add('text-orange-600', 'border-orange-500');
            btn.classList.remove('text-slate-500', 'border-transparent');
            container.querySelectorAll('.lang-panel').forEach(p => {
                p.classList.toggle('hidden', p.dataset.lang !== lang);
            });
        }

        function deleteFile(url) {
            if(confirm('Are you sure you want to delete this file? This action cannot be undone.')) {
                const form = document.getElementById('delete-file-form');
                form.action = url;
                form.submit();
            }
        }

        function selectSettingsTab(groupKey) {
            document.querySelectorAll('.settings-panel').forEach(panel => {
                panel.classList.toggle('hidden', panel.id !== 'panel-' + groupKey);
            });

            const base = 'px-3 py-1.5 rounded-full text-xs font-semibold border transition';
            const active = base + ' border-orange-200 bg-orange-50 text-orange-700';
            const inactive = base + ' border-slate-200 bg-slate-50 text-slate-600 hover:text-orange-600 hover:border-orange-200 hover:bg-orange-50';

            document.querySelectorAll('[id^="tab-"]').forEach(tab => {
                tab.className = inactive;
            });

            const activeTab = document.getElementById('tab-' + groupKey);
            if(activeTab) {
                activeTab.className = active;
            }
        }
    </script>

</x-admin-layout>
