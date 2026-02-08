<!-- Navigation -->
<nav class="fixed w-full z-50 transition-all duration-300 glass border-b border-white/20">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <a href="{{ route('index') }}" class="flex items-center gap-3 group">
            <div
                class="w-10 h-10 bg-slate-900 rounded-lg flex items-center justify-center text-white font-black text-xl shadow-lg group-hover:rotate-3 transition-transform duration-300 ring-2 ring-orange-500/20">
                B</div>
            <div class="flex flex-col">
                <span
                    class="text-xl font-black tracking-tighter text-slate-900 group-hover:text-orange-600 transition-colors uppercase">BOOT
                    CORPORATION</span>
                <span class="text-[0.65rem] font-bold text-slate-500 tracking-[0.2em] uppercase">Chartered
                    Accountants</span>
            </div>
        </a>

        <div class="hidden md:flex items-center gap-8 font-medium text-slate-600">
            <a href="{{ route('index') }}"
                class="{{ request()->routeIs('index') ? 'text-orange-600' : 'hover:text-orange-500' }} transition-colors">Home</a>
            <a href="{{ route('about') }}"
                class="{{ request()->routeIs('about') ? 'text-orange-600' : 'hover:text-orange-500' }} transition-colors">About</a>

            <div class="relative group h-full flex items-center">
                <a href="{{ route('service.index') }}"
                    class="{{ request()->routeIs('services') || request()->routeIs('service.*') ? 'text-orange-600' : 'hover:text-orange-500' }} transition-colors flex items-center gap-1 py-4">
                    Services <i class="fa-solid fa-chevron-down text-xs"></i>
                </a>
                <div
                    class="dropdown-content absolute top-full left-0 w-64 bg-white rounded-xl shadow-xl border border-slate-100 overflow-hidden z-50">
                    <a href="{{ route('service.registration') }}"
                        class="block px-4 py-3 hover:bg-orange-50 hover:text-orange-600 transition-colors border-b border-slate-50 {{ request()->routeIs('service.registration') ? 'bg-orange-50 text-orange-600 font-semibold' : '' }}">Registration
                        & Permits</a>
                    <a href="{{ route('service.bookkeeping') }}"
                        class="block px-4 py-3 hover:bg-orange-50 hover:text-orange-600 transition-colors border-b border-slate-50 {{ request()->routeIs('service.bookkeeping') ? 'bg-orange-50 text-orange-600 font-semibold' : '' }}">Bookkeeping
                        & Payroll</a>
                    <a href="{{ route('service.audit') }}"
                        class="block px-4 py-3 hover:bg-orange-50 hover:text-orange-600 transition-colors border-b border-slate-50 {{ request()->routeIs('service.audit') ? 'bg-orange-50 text-orange-600 font-semibold' : '' }}">Audit
                        & Assurance</a>
                    <a href="{{ route('service.tax') }}"
                        class="block px-4 py-3 hover:bg-orange-50 hover:text-orange-600 transition-colors border-b border-slate-50 {{ request()->routeIs('service.tax') ? 'bg-orange-50 text-orange-600 font-semibold' : '' }}">Income
                        Tax, VAT & TP</a>
                    <a href="{{ route('service.consultancy') }}"
                        class="block px-4 py-3 hover:bg-orange-50 hover:text-orange-600 transition-colors {{ request()->routeIs('service.consultancy') ? 'bg-orange-50 text-orange-600 font-semibold' : '' }}">Secretarial
                        & Consultancy</a>
                </div>
            </div>

            <div class="relative group h-full flex items-center">
                <a href="#"
                    class="{{ request()->routeIs('gallery') || request()->routeIs('publications') ? 'text-orange-600' : 'hover:text-orange-500' }} flex items-center gap-1 py-4 transition-colors">
                    Resources <i class="fa-solid fa-chevron-down text-xs"></i>
                </a>
                <div
                    class="dropdown-content absolute top-full left-0 w-64 bg-white rounded-xl shadow-xl border border-slate-100 overflow-visible z-50">
                    <div class="relative group/sub">
                        <a href="#"
                            class="flex px-4 py-3 hover:bg-orange-50 hover:text-orange-600 transition-colors border-b border-slate-50 justify-between items-center rounded-t-xl">
                            <span><i class="fa-solid fa-link mr-2 text-xs"></i> Useful Links</span>
                            <i class="fa-solid fa-chevron-right text-xs"></i>
                        </a>
                        <div
                            class="dropdown-sub-content absolute left-full top-0 w-72 bg-white rounded-xl shadow-xl border border-slate-100 overflow-hidden z-50 ml-2">
                            <a href="https://www.icab.org.bd/" target="_blank"
                                class="block px-4 py-3 hover:bg-orange-50 hover:text-orange-600 transition-colors border-b border-slate-50 text-sm">
                                <i class="fa-solid fa-landmark mr-2 text-xs text-slate-400"></i> ICAB</a>
                            <a href="https://nbr.gov.bd/" target="_blank"
                                class="block px-4 py-3 hover:bg-orange-50 hover:text-orange-600 transition-colors border-b border-slate-50 text-sm">
                                <i class="fa-solid fa-building-columns mr-2 text-xs text-slate-400"></i> National
                                Board of Revenue (NBR)</a>
                            <a href="http://bida.gov.bd/" target="_blank"
                                class="block px-4 py-3 hover:bg-orange-50 hover:text-orange-600 transition-colors border-b border-slate-50 text-sm">
                                <i class="fa-solid fa-globe mr-2 text-xs text-slate-400"></i> BIDA</a>
                            <a href="https://www.bepza.gov.bd/" target="_blank"
                                class="block px-4 py-3 hover:bg-orange-50 hover:text-orange-600 transition-colors border-b border-slate-50 text-sm">
                                <i class="fa-solid fa-industry mr-2 text-xs text-slate-400"></i> BEPZA</a>
                            <a href="https://www.beza.gov.bd/" target="_blank"
                                class="block px-4 py-3 hover:bg-orange-50 hover:text-orange-600 transition-colors border-b border-slate-50 text-sm">
                                <i class="fa-solid fa-city mr-2 text-xs text-slate-400"></i> BEZA</a>
                            <a href="https://www.bb.org.bd/" target="_blank"
                                class="block px-4 py-3 hover:bg-orange-50 hover:text-orange-600 transition-colors border-b border-slate-50 text-sm">
                                <i class="fa-solid fa-university mr-2 text-xs text-slate-400"></i> Bangladesh
                                Bank</a>
                            <a href="http://www.roc.gov.bd/" target="_blank"
                                class="block px-4 py-3 hover:bg-orange-50 hover:text-orange-600 transition-colors border-b border-slate-50 text-sm">
                                <i class="fa-solid fa-file-contract mr-2 text-xs text-slate-400"></i> RJSC</a>
                            <a href="https://thefinancialexpress.com.bd/" target="_blank"
                                class="block px-4 py-3 hover:bg-orange-50 hover:text-orange-600 transition-colors border-b border-slate-50 text-sm">
                                <i class="fa-solid fa-newspaper mr-2 text-xs text-slate-400"></i> The
                                Financial Express</a>
                            <a href="https://www.thedailystar.net/" target="_blank"
                                class="block px-4 py-3 hover:bg-orange-50 hover:text-orange-600 transition-colors text-sm">
                                <i class="fa-solid fa-newspaper mr-2 text-xs text-slate-400"></i> The
                                Daily Star</a>
                        </div>
                    </div>
                    <a href="{{ route('gallery') }}"
                        class="block px-4 py-3 hover:bg-orange-50 hover:text-orange-600 transition-colors border-b border-slate-50 {{ request()->routeIs('gallery') ? 'bg-orange-50 text-orange-600 font-semibold' : '' }}">
                        <i class="fa-solid fa-images mr-2 text-xs"></i> Photo Gallery</a>
                    <a href="{{ route('publications') }}"
                        class="block px-4 py-3 hover:bg-orange-50 hover:text-orange-600 transition-colors {{ request()->routeIs('publications') ? 'bg-orange-50 text-orange-600 font-semibold' : '' }}">
                        <i class="fa-solid fa-book mr-2 text-xs"></i> Publications</a>
                </div>
            </div>

            <a href="{{ route('contact') }}"
                class="{{ request()->routeIs('contact') ? 'text-orange-600' : 'hover:text-orange-500' }} transition-colors">Contact</a>
            <a href="{{ route('contact') }}"
                class="px-6 py-2.5 bg-linear-to-r from-orange-500 to-orange-600 text-white rounded-full shadow-lg shadow-orange-500/30 hover:shadow-orange-500/50 hover:-translate-y-0.5 transition-all text-sm font-semibold">
                Request Consultation
            </a>
        </div>

        <button id="mobile-menu-btn" class="md:hidden text-slate-600 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu"
        class="hidden md:hidden bg-white border-t border-slate-100 absolute top-full left-0 w-full shadow-lg h-screen overflow-y-auto pb-20">
        <div class="flex flex-col p-4 space-y-2">
            <a href="{{ route('index') }}"
                class="px-4 py-3 {{ request()->routeIs('index') ? 'bg-orange-50 text-orange-600' : 'hover:bg-orange-50 hover:text-orange-600 text-slate-600' }} rounded-lg font-medium transition-colors">Home</a>
            <a href="{{ route('about') }}"
                class="px-4 py-3 {{ request()->routeIs('about') ? 'bg-orange-50 text-orange-600' : 'hover:bg-orange-50 hover:text-orange-600 text-slate-600' }} rounded-lg font-medium transition-colors">About</a>

            <!-- Mobile Services Dropdown -->
            <div>
                <button
                    class="mobile-dropdown-toggle w-full px-4 py-3 hover:bg-orange-50 hover:text-orange-600 rounded-lg font-medium text-slate-600 transition-colors flex justify-between items-center text-left">
                    Services <i class="fa-solid fa-chevron-down text-xs transition-transform duration-300"></i>
                </button>
                <div class="hidden pl-4 space-y-1 bg-slate-50 rounded-lg mt-1">
                    <a href="{{ route('service.registration') }}"
                        class="block px-4 py-2 text-sm text-slate-600 hover:text-orange-600">Registration &
                        Permits</a>
                    <a href="{{ route('service.bookkeeping') }}"
                        class="block px-4 py-2 text-sm text-slate-600 hover:text-orange-600">Bookkeeping &
                        Payroll</a>
                    <a href="{{ route('service.audit') }}"
                        class="block px-4 py-2 text-sm text-slate-600 hover:text-orange-600">Audit & Assurance</a>
                    <a href="{{ route('service.tax') }}"
                        class="block px-4 py-2 text-sm text-slate-600 hover:text-orange-600">Income Tax, VAT &
                        TP</a>
                    <a href="{{ route('service.consultancy') }}"
                        class="block px-4 py-2 text-sm text-slate-600 hover:text-orange-600">Secretarial &
                        Consultancy</a>
                </div>
            </div>

            <!-- Mobile Resources Dropdown -->
            <div>
                <button
                    class="mobile-dropdown-toggle w-full px-4 py-3 hover:bg-orange-50 hover:text-orange-600 rounded-lg font-medium text-slate-600 transition-colors flex justify-between items-center text-left">
                    Resources <i class="fa-solid fa-chevron-down text-xs transition-transform duration-300"></i>
                </button>
                <div class="hidden pl-4 space-y-1 bg-slate-50 rounded-lg mt-1">
                    <!-- Mobile Useful Links Dropdown -->
                    <div>
                        <button
                            class="mobile-sub-dropdown-toggle w-full px-4 py-2 text-sm text-slate-600 hover:text-orange-600 flex justify-between items-center text-left">
                            Useful Links <i class="fa-solid fa-chevron-down text-xs transition-transform duration-300"></i>
                        </button>
                        <div class="hidden pl-4 space-y-1 mt-1">
                            <a href="https://www.icab.org.bd/" target="_blank"
                                class="block px-4 py-2 text-sm text-slate-600 hover:text-orange-600">ICAB</a>
                            <a href="https://nbr.gov.bd/" target="_blank"
                                class="block px-4 py-2 text-sm text-slate-600 hover:text-orange-600">NBR</a>
                            <a href="http://bida.gov.bd/" target="_blank"
                                class="block px-4 py-2 text-sm text-slate-600 hover:text-orange-600">BIDA</a>
                            <a href="https://www.bepza.gov.bd/" target="_blank"
                                class="block px-4 py-2 text-sm text-slate-600 hover:text-orange-600">BEPZA</a>
                            <a href="https://www.beza.gov.bd/" target="_blank"
                                class="block px-4 py-2 text-sm text-slate-600 hover:text-orange-600">BEZA</a>
                            <a href="https://www.bb.org.bd/" target="_blank"
                                class="block px-4 py-2 text-sm text-slate-600 hover:text-orange-600">Bangladesh Bank</a>
                            <a href="http://www.roc.gov.bd/" target="_blank"
                                class="block px-4 py-2 text-sm text-slate-600 hover:text-orange-600">RJSC</a>
                            <a href="https://thefinancialexpress.com.bd/" target="_blank"
                                class="block px-4 py-2 text-sm text-slate-600 hover:text-orange-600">The Financial Express</a>
                            <a href="https://www.thedailystar.net/" target="_blank"
                                class="block px-4 py-2 text-sm text-slate-600 hover:text-orange-600">The Daily Star</a>
                        </div>
                    </div>
                    <a href="{{ route('gallery') }}"
                        class="block px-4 py-2 text-sm text-slate-600 hover:text-orange-600">Photo Gallery</a>
                    <a href="{{ route('publications') }}"
                        class="block px-4 py-2 text-sm text-slate-600 hover:text-orange-600">Publications</a>
                </div>
            </div>

            <a href="{{ route('contact') }}"
                class="px-4 py-3 {{ request()->routeIs('contact') ? 'bg-orange-50 text-orange-600' : 'hover:bg-orange-50 hover:text-orange-600 text-slate-600' }} rounded-lg font-medium transition-colors">Contact</a>
            <a href="{{ route('contact') }}"
                class="mt-4 w-full text-center px-6 py-3 bg-linear-to-r from-orange-500 to-orange-600 text-white rounded-full shadow-lg shadow-orange-500/30 hover:shadow-orange-500/50 hover:-translate-y-0.5 transition-all font-semibold">
                Request Consultation
            </a>
        </div>
    </div>
</nav>
