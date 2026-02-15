<x-admin-layout title="Site Settings" header="Site Settings">

    <form method="POST" action="{{ route('admin.settings.update') }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        @foreach($groups as $groupKey => $groupLabel)
            @if(isset($settings[$groupKey]))
                <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
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
                                    <div class="flex items-center gap-4">
                                        @if($setting->value_en)
                                            @if($setting->type === 'image')
                                                <img src="{{ asset('storage/' . $setting->value_en) }}" class="w-16 h-16 object-cover rounded-lg border">
                                            @else
                                                <a href="{{ asset('storage/' . $setting->value_en) }}" target="_blank" class="text-sm text-orange-600 underline">
                                                    <i class="fa-solid fa-file-pdf mr-1"></i> View current file
                                                </a>
                                            @endif
                                        @endif
                                        <input type="file" name="settings[{{ $setting->key }}]"
                                            class="text-sm text-slate-600 file:mr-3 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:bg-slate-100 file:text-slate-700 hover:file:bg-slate-200">
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
    </script>

</x-admin-layout>
