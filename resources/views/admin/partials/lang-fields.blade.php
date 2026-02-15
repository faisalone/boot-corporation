{{-- Tri-lingual field component: @include('admin.partials.lang-fields', ['name' => 'title', 'label' => 'Title', 'type' => 'text', 'model' => $page]) --}}
@props([])
@php
    $type = $type ?? 'text';
    $required = $required ?? false;
    $enVal = old("{$name}_en", $model->{"{$name}_en"} ?? '');
    $bnVal = old("{$name}_bn", $model->{"{$name}_bn"} ?? '');
    $cnVal = old("{$name}_cn", $model->{"{$name}_cn"} ?? '');
    $uid = 'lf_' . str_replace('.', '_', $name) . '_' . rand(1000,9999);
@endphp

<div>
    <label class="block text-sm font-medium text-slate-700 mb-2">{{ $label }} @if($required)<span class="text-red-500">*</span>@endif</label>
    <div class="border border-slate-200 rounded-lg overflow-hidden">
        <div class="flex bg-slate-50 border-b border-slate-200">
            <button type="button" onclick="switchLangTab(this, 'en', '{{ $uid }}')" class="lang-tab-{{ $uid }} px-4 py-2 text-xs font-medium text-orange-600 border-b-2 border-orange-500">English</button>
            <button type="button" onclick="switchLangTab(this, 'bn', '{{ $uid }}')" class="lang-tab-{{ $uid }} px-4 py-2 text-xs font-medium text-slate-500 border-b-2 border-transparent hover:text-slate-700">Bangla</button>
            <button type="button" onclick="switchLangTab(this, 'cn', '{{ $uid }}')" class="lang-tab-{{ $uid }} px-4 py-2 text-xs font-medium text-slate-500 border-b-2 border-transparent hover:text-slate-700">Chinese</button>
        </div>
        <div class="p-3">
            @if($type === 'text' || $type === 'url')
                <div class="lang-panel-{{ $uid }}" data-lang="en">
                    <input type="{{ $type }}" name="{{ $name }}_en" value="{{ $enVal }}" {{ $required ? 'required' : '' }}
                        class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none"
                        placeholder="English">
                </div>
                <div class="lang-panel-{{ $uid }} hidden" data-lang="bn">
                    <input type="text" name="{{ $name }}_bn" value="{{ $bnVal }}"
                        class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none"
                        placeholder="Bangla (বাংলা)">
                </div>
                <div class="lang-panel-{{ $uid }} hidden" data-lang="cn">
                    <input type="text" name="{{ $name }}_cn" value="{{ $cnVal }}"
                        class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none"
                        placeholder="Chinese (中文)">
                </div>
            @elseif($type === 'textarea')
                <div class="lang-panel-{{ $uid }}" data-lang="en">
                    <textarea name="{{ $name }}_en" rows="3"
                        class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none"
                        placeholder="English">{{ $enVal }}</textarea>
                </div>
                <div class="lang-panel-{{ $uid }} hidden" data-lang="bn">
                    <textarea name="{{ $name }}_bn" rows="3"
                        class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none"
                        placeholder="Bangla (বাংলা)">{{ $bnVal }}</textarea>
                </div>
                <div class="lang-panel-{{ $uid }} hidden" data-lang="cn">
                    <textarea name="{{ $name }}_cn" rows="3"
                        class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none"
                        placeholder="Chinese (中文)">{{ $cnVal }}</textarea>
                </div>
            @elseif($type === 'editor')
                <div class="lang-panel-{{ $uid }}" data-lang="en">
                    <textarea name="{{ $name }}_en" rows="6" class="rich-editor"
                        placeholder="English">{{ $enVal }}</textarea>
                </div>
                <div class="lang-panel-{{ $uid }} hidden" data-lang="bn">
                    <textarea name="{{ $name }}_bn" rows="6" class="rich-editor"
                        placeholder="Bangla (বাংলা)">{{ $bnVal }}</textarea>
                </div>
                <div class="lang-panel-{{ $uid }} hidden" data-lang="cn">
                    <textarea name="{{ $name }}_cn" rows="6" class="rich-editor"
                        placeholder="Chinese (中文)">{{ $cnVal }}</textarea>
                </div>
            @endif
        </div>
    </div>
</div>

<script>
    function switchLangTab(btn, lang, uid) {
        document.querySelectorAll('.lang-tab-' + uid).forEach(t => {
            t.classList.remove('text-orange-600', 'border-orange-500');
            t.classList.add('text-slate-500', 'border-transparent');
        });
        btn.classList.add('text-orange-600', 'border-orange-500');
        btn.classList.remove('text-slate-500', 'border-transparent');
        document.querySelectorAll('.lang-panel-' + uid).forEach(p => {
            p.classList.toggle('hidden', p.dataset.lang !== lang);
            // Initialize Summernote for newly visible rich editors
            if (p.dataset.lang === lang) {
                p.querySelectorAll('.rich-editor').forEach(el => {
                    if (!$(el).next('.note-editor').length) {
                        $(el).summernote({
                            height: 250,
                            toolbar: [
                                ['style', ['style']],
                                ['font', ['bold', 'italic', 'underline', 'strikethrough', 'clear']],
                                ['para', ['ul', 'ol', 'paragraph']],
                                ['table', ['table']],
                                ['insert', ['link', 'picture', 'hr']],
                                ['view', ['codeview', 'fullscreen', 'undo', 'redo']]
                            ],
                            styleTags: ['p', 'h3', 'h4', 'h5', 'h6'],
                            callbacks: {
                                onChange: function(contents) { $(this).val(contents); }
                            }
                        });
                    }
                });
            }
        });
    }
</script>
