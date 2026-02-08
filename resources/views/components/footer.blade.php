<!-- Footer -->
<footer class="bg-slate-900 border-t border-slate-800 pt-16 pb-8 text-slate-400">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
            <!-- Brand -->
            <div class="space-y-6">
                <a href="{{ route('index') }}" class="flex items-center gap-2">
                    <div
                        class="w-10 h-10 bg-orange-500 rounded-lg flex items-center justify-center text-white font-bold text-xl">
                        B</div>
                    <span class="text-xl font-bold text-white">BOOT CORPORATION</span>
                </a>
                <p class="text-sm leading-relaxed">
                    Your trusted partner in tax, audit & consulting. We provide strategic financial solutions for
                    business growth.
                </p>
                <div class="flex gap-4">
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-orange-500 hover:text-white transition-all">
                        <i class="fa-brands fa-linkedin-in text-lg"></i>
                    </a>
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-orange-500 hover:text-white transition-all">
                        <i class="fa-brands fa-facebook-f text-lg"></i>
                    </a>
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-orange-500 hover:text-white transition-all">
                        <i class="fa-brands fa-twitter text-lg"></i>
                    </a>
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-orange-500 hover:text-white transition-all">
                        <i class="fa-brands fa-youtube text-lg"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-white font-bold mb-6">Quick Links</h4>
                <ul class="space-y-3">
                    <li><a href="{{ route('index') }}" class="hover:text-orange-500 transition-colors">Home</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-orange-500 transition-colors">About Us</a></li>
                    <li><a href="{{ route('service.index') }}" class="hover:text-orange-500 transition-colors">Our Services</a></li>
                    <li><a href="{{ route('gallery') }}" class="hover:text-orange-500 transition-colors">Gallery</a></li>
                    <li><a href="{{ route('publications') }}" class="hover:text-orange-500 transition-colors">Publications</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-orange-500 transition-colors">Contact</a></li>
                </ul>
            </div>

            <!-- Our Services -->
            <div>
                <h4 class="text-white font-bold mb-6">Our Services</h4>
                <ul class="space-y-3">
                    <li><a href="{{ route('service.registration') }}" class="hover:text-orange-500 transition-colors">Registration & Permits</a></li>
                    <li><a href="{{ route('service.bookkeeping') }}" class="hover:text-orange-500 transition-colors">Bookkeeping & Payroll</a></li>
                    <li><a href="{{ route('service.audit') }}" class="hover:text-orange-500 transition-colors">Audit & Assurance</a></li>
                    <li><a href="{{ route('service.tax') }}" class="hover:text-orange-500 transition-colors">Income Tax, VAT & TP</a></li>
                    <li><a href="{{ route('service.consultancy') }}" class="hover:text-orange-500 transition-colors">Secretarial & Consultancy</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h4 class="text-white font-bold mb-6">Contact Us</h4>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 mt-0.5 text-orange-500 shrink-0l="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Flat D1, House 35, Road 114, Gulshan 2, Dhaka 1212</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 mt-0.5 text-orange-500 shrink-0l="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <span>info@bootcorporation.com.bd</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 mt-0.5 text-orange-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span>+880 2 48814429</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="border-t border-slate-800 pt-8 text-center text-sm">
            <p>&copy; {{ date('Y') }} BOOT CORPORATION Chartered Accountants. All rights reserved.</p>
        </div>
    </div>
</footer>
