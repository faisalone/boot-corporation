<!-- Footer -->
<footer class="bg-slate-900 border-t border-slate-800 pt-16 pb-8 text-slate-400">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
            <!-- Brand -->
            <div class="space-y-6">
                <a href="{{ route('index') }}" class="inline-flex items-center gap-2 bg-white p-3 rounded-xl shadow-lg">
                    <img src="{{ asset('jv-logo.png') }}" alt="boot-corporation" class="h-12 md:h-14 w-auto object-contain">
                </a>
                @if(isset($site))
                <p class="text-sm text-slate-400 leading-relaxed">{{ $site->footer_description }}</p>
                @endif
                <div class="flex gap-4">
                    <a href="{{ isset($site) ? ($site->social_linkedin ?: '#') : '#' }}" target="_blank"
                        class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-orange-500 hover:text-white transition-all">
                        <i class="fa-brands fa-linkedin-in text-lg"></i>
                    </a>
                    <a href="{{ isset($site) ? ($site->social_facebook ?: '#') : '#' }}" target="_blank"
                        class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-orange-500 hover:text-white transition-all">
                        <i class="fa-brands fa-facebook-f text-lg"></i>
                    </a>
                    <a href="{{ isset($site) ? ($site->social_twitter ?: '#') : '#' }}" target="_blank"
                        class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-orange-500 hover:text-white transition-all">
                        <i class="fa-brands fa-twitter text-lg"></i>
                    </a>
                    <a href="{{ isset($site) ? ($site->social_youtube ?: '#') : '#' }}" target="_blank"
                        class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-orange-500 hover:text-white transition-all">
                        <i class="fa-brands fa-youtube text-lg"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-white font-bold mb-6">{{ __('Quick Links') }}</h4>
                <ul class="space-y-3">
                    <li><a href="{{ route('index') }}" class="hover:text-orange-500 transition-colors">{{ __('Home') }}</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-orange-500 transition-colors">{{ __('About Us') }}</a></li>
                    <li><a href="{{ route('service.index') }}" class="hover:text-orange-500 transition-colors">{{ __('Our Services') }}</a></li>
                    <li><a href="{{ route('gallery') }}" class="hover:text-orange-500 transition-colors">{{ __('Gallery') }}</a></li>
                    <li><a href="{{ route('publications') }}" class="hover:text-orange-500 transition-colors">{{ __('Publications') }}</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-orange-500 transition-colors">{{ __('Contact') }}</a></li>
                </ul>
            </div>

            <!-- Our Services -->
            <div>
                <h4 class="text-white font-bold mb-6">{{ __('Our Services') }}</h4>
                <ul class="space-y-3">
                    @if(isset($siteServices) && $siteServices->count())
                        @foreach($siteServices as $svc)
                            <li><a href="{{ route('service.show', $svc->slug) }}" class="hover:text-orange-500 transition-colors">{{ t($svc, 'title') }}</a></li>
                        @endforeach
                    @else
                        <li><a href="{{ route('service.index') }}" class="hover:text-orange-500 transition-colors">Our Services</a></li>
                    @endif
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h4 class="text-white font-bold mb-6">{{ __('Contact Us') }}</h4>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 mt-0.5 text-orange-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>{{ isset($site) ? $site->address : 'Level 13, UTC Building, 8 Panthapath, Dhaka 1215' }}</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 mt-0.5 text-orange-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <span>{{ isset($site) ? $site->email_1 : 'bootcorporation3@gmail.com' }}</span>
                    </li>
                    @if(isset($site) && $site->phone_1)
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 mt-0.5 text-orange-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span>{{ $site->phone_1 }}</span>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
        <div class="border-t border-slate-800 pt-8 text-center text-sm">
            <p>{{ isset($site) && $site->footer_copyright ? $site->footer_copyright : '© ' . date('Y') . ' BOOT CORPORATION • JV Partner with Masih Muhith Haque & Co. (RSM Bangladesh).' }}</p>
        </div>
    </div>
</footer>
