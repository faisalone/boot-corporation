@php $__locales = supported_locales(); $__currentLocale = current_locale(); @endphp
<!-- Navigation -->
<nav class="fixed w-full z-50 transition-all duration-300 border-b border-white/20" style="background-color: #cee9c0;">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <a href="{{ route('index') }}" class="flex items-center gap-3 group">
            <img src="{{ (isset($site) && $site->logo_image) ? img_url($site->logo_image) : asset('jv-logo.png') }}"
                alt="{{ isset($site) && $site->company_name ? $site->company_name : 'BOOT CORPORATION' }}"
                class="h-14 md:h-16 w-auto object-contain">
        </a>

        <div class="hidden md:flex items-center gap-8 font-medium text-slate-600">
            <a href="{{ route('index') }}"
                class="{{ request()->routeIs('index') ? 'text-orange-600' : 'hover:text-orange-500' }} transition-colors">{{ __('Home') }}</a>
            <a href="{{ route('about') }}"
                class="{{ request()->routeIs('about') ? 'text-orange-600' : 'hover:text-orange-500' }} transition-colors">{{ __('About') }}</a>

            <div class="relative group h-full flex items-center">
                <a href="{{ route('service.index') }}"
                    class="{{ request()->routeIs('services') || request()->routeIs('service.*') ? 'text-orange-600' : 'hover:text-orange-500' }} transition-colors flex items-center gap-1 py-4">
                    {{ __('Services') }} <i class="fa-solid fa-chevron-down text-xs"></i>
                </a>
                <div
                    class="dropdown-content absolute top-full left-0 w-64 bg-white rounded-xl shadow-xl border border-slate-100 overflow-hidden z-50">
                    @if(isset($siteServices) && $siteServices->count())
                        @foreach($siteServices as $svc)
                        <a href="{{ route('service.show', $svc->slug) }}"
                            class="block px-4 py-3 hover:bg-orange-50 hover:text-orange-600 transition-colors border-b border-slate-50 {{ request()->is('services/' . $svc->slug) ? 'bg-orange-50 text-orange-600 font-semibold' : '' }}">{{ t($svc, 'title') }}</a>
                        @endforeach
                    @endif
                </div>
            </div>

            <div class="relative group h-full flex items-center">
                <a href="#"
                    class="{{ request()->routeIs('gallery') || request()->routeIs('publications') ? 'text-orange-600' : 'hover:text-orange-500' }} flex items-center gap-1 py-4 transition-colors">
                    {{ __('Resources') }} <i class="fa-solid fa-chevron-down text-xs"></i>
                </a>
                <div
                    class="dropdown-content absolute top-full left-0 w-64 bg-white rounded-xl shadow-xl border border-slate-100 overflow-visible z-50">
                    <div class="relative group/sub">
                        <a href="#"
                            class="flex px-4 py-3 hover:bg-orange-50 hover:text-orange-600 transition-colors border-b border-slate-50 justify-between items-center rounded-t-xl">
                            <span><i class="fa-solid fa-link mr-2 text-xs"></i> {{ __('Useful Links') }}</span>
                            <i class="fa-solid fa-chevron-right text-xs"></i>
                        </a>
                        <div
                            class="dropdown-sub-content absolute left-full top-0 w-72 bg-white rounded-xl shadow-xl border border-slate-100 overflow-hidden z-50 ml-2">
                            @if(isset($usefulLinks) && $usefulLinks->count())
                                @foreach($usefulLinks as $link)
                                <a href="{{ $link->url }}" target="{{ $link->target ?? '_blank' }}"
                                    class="block px-4 py-3 hover:bg-orange-50 hover:text-orange-600 transition-colors {{ !$loop->last ? 'border-b border-slate-50' : '' }} text-sm">
                                    @if($link->icon)<i class="{{ $link->icon }} mr-2 text-xs text-slate-400"></i>@endif {{ t($link, 'title') }}</a>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <a href="{{ route('gallery') }}"
                        class="block px-4 py-3 hover:bg-orange-50 hover:text-orange-600 transition-colors border-b border-slate-50 {{ request()->routeIs('gallery') ? 'bg-orange-50 text-orange-600 font-semibold' : '' }}">
                        <i class="fa-solid fa-images mr-2 text-xs"></i> {{ __('Photo Gallery') }}</a>
                    <a href="{{ route('publications') }}"
                        class="block px-4 py-3 hover:bg-orange-50 hover:text-orange-600 transition-colors {{ request()->routeIs('publications') ? 'bg-orange-50 text-orange-600 font-semibold' : '' }}">
                        <i class="fa-solid fa-book mr-2 text-xs"></i> {{ __('Publications') }}</a>
                </div>
            </div>

            <a href="{{ route('schedule-of-rate') }}"
                class="{{ request()->routeIs('schedule-of-rate') ? 'text-orange-600' : 'hover:text-orange-500' }} transition-colors">{{ __('Schedule of Rate') }}</a>

            <a href="{{ route('contact') }}"
                class="{{ request()->routeIs('contact') ? 'text-orange-600' : 'hover:text-orange-500' }} transition-colors">{{ __('Contact') }}</a>

            <!-- Language Switcher (Desktop) -->
            <div class="relative group h-full flex items-center">
                <button class="flex items-center gap-1.5 py-2 px-3 rounded-lg hover:bg-white/50 transition-colors text-sm">
                    <span>{{ $__locales[$__currentLocale]['flag'] }}</span>
                    <span class="uppercase font-semibold">{{ $__currentLocale }}</span>
                    <i class="fa-solid fa-chevron-down text-[10px]"></i>
                </button>
                <div class="dropdown-content absolute top-full right-0 w-44 bg-white rounded-xl shadow-xl border border-slate-100 overflow-hidden z-50">
                    @foreach($__locales as $code => $locale)
                    <a href="{{ route('lang.switch', $code) }}"
                        class="block px-4 py-3 hover:bg-orange-50 hover:text-orange-600 transition-colors text-sm {{ $code === $__currentLocale ? 'bg-orange-50 text-orange-600 font-semibold' : '' }} {{ !$loop->last ? 'border-b border-slate-50' : '' }}">
                        <span class="mr-2">{{ $locale['flag'] }}</span> {{ $locale['native'] }}
                    </a>
                    @endforeach
                </div>
            </div>

            <a href="{{ route('contact') }}"
                class="px-6 py-2.5 bg-gradient-to-r from-orange-500 to-orange-600 text-white rounded-full shadow-lg shadow-orange-500/30 hover:shadow-orange-500/50 hover:-translate-y-0.5 transition-all text-sm font-semibold">
                {{ __('Request Consultation') }}
            </a>
        </div>

        <div class="flex items-center gap-3 md:hidden">
            <!-- Language Switcher (Mobile - compact) -->
            <div class="relative" x-data="{ open: false }">
                <button id="mobile-lang-btn" class="flex items-center gap-1 px-2 py-1.5 rounded-lg hover:bg-white/50 transition-colors text-sm text-slate-600">
                    <span>{{ $__locales[$__currentLocale]['flag'] }}</span>
                    <span class="uppercase font-semibold text-xs">{{ $__currentLocale }}</span>
                </button>
                <div id="mobile-lang-dropdown" class="hidden absolute right-0 top-full mt-2 w-40 bg-white rounded-xl shadow-xl border border-slate-100 overflow-hidden z-50">
                    @foreach($__locales as $code => $locale)
                    <a href="{{ route('lang.switch', $code) }}"
                        class="block px-4 py-3 hover:bg-orange-50 hover:text-orange-600 transition-colors text-sm {{ $code === $__currentLocale ? 'bg-orange-50 text-orange-600 font-semibold' : '' }} {{ !$loop->last ? 'border-b border-slate-50' : '' }}">
                        <span class="mr-2">{{ $locale['flag'] }}</span> {{ $locale['native'] }}
                    </a>
                    @endforeach
                </div>
            </div>
            <button id="mobile-menu-btn" class="text-slate-600 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu"
        class="hidden md:hidden bg-white border-t border-slate-100 absolute top-full left-0 w-full shadow-lg h-screen overflow-y-auto pb-20">
        <div class="flex flex-col p-4 space-y-2">
            <a href="{{ route('index') }}"
                class="px-4 py-3 {{ request()->routeIs('index') ? 'bg-orange-50 text-orange-600' : 'hover:bg-orange-50 hover:text-orange-600 text-slate-600' }} rounded-lg font-medium transition-colors">{{ __('Home') }}</a>
            <a href="{{ route('about') }}"
                class="px-4 py-3 {{ request()->routeIs('about') ? 'bg-orange-50 text-orange-600' : 'hover:bg-orange-50 hover:text-orange-600 text-slate-600' }} rounded-lg font-medium transition-colors">{{ __('About') }}</a>

            <!-- Mobile Services Dropdown -->
            <div>
                <button
                    class="mobile-dropdown-toggle w-full px-4 py-3 hover:bg-orange-50 hover:text-orange-600 rounded-lg font-medium text-slate-600 transition-colors flex justify-between items-center text-left">
                    {{ __('Services') }} <i class="fa-solid fa-chevron-down text-xs transition-transform duration-300"></i>
                </button>
                <div class="hidden pl-4 space-y-1 bg-slate-50 rounded-lg mt-1">
                    @if(isset($siteServices) && $siteServices->count())
                        @foreach($siteServices as $svc)
                        <a href="{{ route('service.show', $svc->slug) }}"
                            class="block px-4 py-2 text-sm text-slate-600 hover:text-orange-600">{{ t($svc, 'title') }}</a>
                        @endforeach
                    @endif
                </div>
            </div>

            <!-- Mobile Resources Dropdown -->
            <div>
                <button
                    class="mobile-dropdown-toggle w-full px-4 py-3 hover:bg-orange-50 hover:text-orange-600 rounded-lg font-medium text-slate-600 transition-colors flex justify-between items-center text-left">
                    {{ __('Resources') }} <i class="fa-solid fa-chevron-down text-xs transition-transform duration-300"></i>
                </button>
                <div class="hidden pl-4 space-y-1 bg-slate-50 rounded-lg mt-1">
                    <!-- Mobile Useful Links Dropdown -->
                    <div>
                        <button
                            class="mobile-sub-dropdown-toggle w-full px-4 py-2 text-sm text-slate-600 hover:text-orange-600 flex justify-between items-center text-left">
                            {{ __('Useful Links') }} <i class="fa-solid fa-chevron-down text-xs transition-transform duration-300"></i>
                        </button>
                        <div class="hidden pl-4 space-y-1 mt-1">
                            @if(isset($usefulLinks) && $usefulLinks->count())
                                @foreach($usefulLinks as $link)
                                <a href="{{ $link->url }}" target="{{ $link->target ?? '_blank' }}"
                                    class="block px-4 py-2 text-sm text-slate-600 hover:text-orange-600">{{ t($link, 'title') }}</a>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <a href="{{ route('gallery') }}"
                        class="block px-4 py-2 text-sm text-slate-600 hover:text-orange-600">{{ __('Photo Gallery') }}</a>
                    <a href="{{ route('publications') }}"
                        class="block px-4 py-2 text-sm text-slate-600 hover:text-orange-600">{{ __('Publications') }}</a>
                </div>
            </div>

            <a href="{{ route('schedule-of-rate') }}"
                class="block px-6 py-3 hover:bg-orange-50 hover:text-orange-600 transition-colors border-b border-slate-100 {{ request()->routeIs('schedule-of-rate') ? 'bg-orange-50 text-orange-600 font-semibold' : '' }}">
                <i class="fa-solid fa-file-invoice-dollar mr-2 text-xs"></i> {{ __('Schedule of Rate') }}
            </a>

            <a href="{{ route('contact') }}"
                class="px-4 py-3 {{ request()->routeIs('contact') ? 'bg-orange-50 text-orange-600' : 'hover:bg-orange-50 hover:text-orange-600 text-slate-600' }} rounded-lg font-medium transition-colors">{{ __('Contact') }}</a>
            <a href="{{ route('contact') }}"
                class="mt-4 w-full text-center px-6 py-3 bg-linear-to-r from-orange-500 to-orange-600 text-white rounded-full shadow-lg shadow-orange-500/30 hover:shadow-orange-500/50 hover:-translate-y-0.5 transition-all font-semibold">
                {{ __('Request Consultation') }}
            </a>
        </div>
    </div>
</nav>

<script>
    // Mobile language dropdown toggle
    document.getElementById('mobile-lang-btn')?.addEventListener('click', function(e) {
        e.stopPropagation();
        document.getElementById('mobile-lang-dropdown')?.classList.toggle('hidden');
    });
    document.addEventListener('click', function() {
        document.getElementById('mobile-lang-dropdown')?.classList.add('hidden');
    });
</script>
