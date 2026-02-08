<x-app-layout title="Home">

    <!-- Hero Section -->
    <header class="relative min-h-screen flex items-center bg-slate-900 pt-20 md:pt-0">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80"
                alt="Team Success" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-linear-to-r from-slate-900/90 to-slate-900/40"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10 grid md:grid-cols-2 gap-12 items-center pb-16 md:pb-0">
            <div class="space-y-8 animate-fade-in-up">
                <h1 class="text-5xl md:text-6xl font-bold text-white leading-tight">
                    Solutions-Based Support for <span
                        class="text-transparent bg-clip-text bg-linear-to-r from-orange-400 to-amber-300">Unleashing
                        Prosperities</span>
                </h1>
                <p class="text-lg text-slate-200 leading-relaxed max-w-xl">
                    At the core of our philosophy lies a commitment to providing strategic financial solutions that
                    extend beyond conventional services.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('about') }}"
                        class="px-8 py-4 bg-orange-500 hover:bg-orange-600 text-white rounded-full font-semibold shadow-xl shadow-orange-500/20 hover:-translate-y-1 transition-all text-center">
                        Learn More
                    </a>
                    <a href="{{ route('service.index') }}"
                        class="px-8 py-4 bg-white/10 hover:bg-white/20 backdrop-blur-md text-white border border-white/30 rounded-full font-semibold hover:-translate-y-1 transition-all text-center">
                        Our Services
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Values Section -->
    <section class="py-16 md:py-24 bg-slate-50">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div
                    class="group bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl hover:shadow-orange-500/10 transition-all duration-300 hover:-translate-y-2 border border-slate-100">
                    <div
                        class="w-16 h-16 bg-orange-50 rounded-2xl flex items-center justify-center mb-6 group-hover:rotate-6 transition-transform text-orange-500">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-800 mb-4 group-hover:text-orange-600 transition-colors">Our
                        Ambition</h3>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        To create long-term value as the most trusted, distinctive professional services organization in
                        Bangladesh. We create client value, people value, social value and financial value.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3 text-sm text-slate-500">
                            <span class="mt-1 w-5 h-5 rounded-full bg-green-100 text-green-600 flex items-center justify-center shrink-0">✓</span>
                            Create long-term value
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-500">
                            <span class="mt-1 w-5 h-5 rounded-full bg-green-100 text-green-600 flex items-center justify-center shrink-0">✓</span>
                            Trusted professional services
                        </li>
                    </ul>
                </div>

                <!-- Card 2 -->
                <div
                    class="group bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl hover:shadow-orange-500/10 transition-all duration-300 hover:-translate-y-2 border border-slate-100">
                    <div
                        class="w-16 h-16 bg-orange-50 rounded-2xl flex items-center justify-center mb-6 group-hover:rotate-6 transition-transform text-orange-500">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-800 mb-4 group-hover:text-orange-600 transition-colors">Our
                        Belief</h3>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        We believe in fostering relationships by building personal connections with the client and by
                        never compromising on timelines and expectations.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3 text-sm text-slate-500">
                            <span class="mt-1 w-5 h-5 rounded-full bg-green-100 text-green-600 flex items-center justify-center shrink-0">✓</span>
                            Personal connections
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-500">
                            <span class="mt-1 w-5 h-5 rounded-full bg-green-100 text-green-600 flex items-center justify-center shrink-0">✓</span>
                            Never compromising
                        </li>
                    </ul>
                </div>

                <!-- Card 3 -->
                <div
                    class="group bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl hover:shadow-orange-500/10 transition-all duration-300 hover:-translate-y-2 border border-slate-100">
                    <div
                        class="w-16 h-16 bg-orange-50 rounded-2xl flex items-center justify-center mb-6 group-hover:rotate-6 transition-transform text-orange-500">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-800 mb-4 group-hover:text-orange-600 transition-colors">Our
                        Purpose</h3>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        We simplify client's problem to succeed. The insights and quality services we provide help build
                        trust and confidence to the clients.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3 text-sm text-slate-500">
                            <span class="mt-1 w-5 h-5 rounded-full bg-green-100 text-green-600 flex items-center justify-center shrink-0">✓</span>
                            Simplify complexity
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-500">
                            <span class="mt-1 w-5 h-5 rounded-full bg-green-100 text-green-600 flex items-center justify-center shrink-0">✓</span>
                            Build trust & confidence
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Expertise Section -->
    <section class="py-24 bg-slate-900 relative overflow-hidden">
        <div
            class="absolute inset-0 opacity-20 bg-[url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80')] bg-cover bg-fixed bg-center">
        </div>
        <div class="absolute inset-0 bg-linear-to-r from-slate-900 via-slate-900/95 to-slate-900/80"></div>

        <div class="container mx-auto px-6 relative z-10 grid lg:grid-cols-2 gap-16 items-center">
            <div class="space-y-8">
                <h2 class="text-4xl md:text-5xl font-bold text-white leading-tight">
                    Experienced Chartered Accountants & <span class="text-orange-500">Trusted Advisors</span>
                </h2>
                <div class="space-y-6 text-slate-300 leading-relaxed">
                    <p>
                        We are BOOT CORPORATION (H&A), Chartered Accountants, a highly accomplished firm with over a
                        decade of expertise in providing top-notch financial solutions and strategic insights to businesses in
                        Bangladesh.
                    </p>
                    <p>
                        With an extensive background in the leading advisory firms, we have honed our skills in
                        partnership and leadership roles for assurance, direct tax, indirect tax, accounting,
                        consulting, and transfer pricing services.
                    </p>
                </div>

                <div class="bg-slate-800/50 backdrop-blur-sm p-6 rounded-2xl border border-slate-700/50">
                    <h3 class="text-xl font-semibold text-white mb-4">Professional Accreditations</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3 text-slate-300">
                            <span class="w-6 h-6 rounded-full bg-orange-500/20 text-orange-500 flex items-center justify-center">✓</span>
                            Institute of Chartered Accountants of Bangladesh (ICAB)
                        </li>
                        <li class="flex items-center gap-3 text-slate-300">
                            <span class="w-6 h-6 rounded-full bg-orange-500/20 text-orange-500 flex items-center justify-center">✓</span>
                            Institute of Chartered Accountants in England and Wales (ICAEW)
                        </li>
                        <li class="flex items-center gap-3 text-slate-300">
                            <span class="w-6 h-6 rounded-full bg-orange-500/20 text-orange-500 flex items-center justify-center">✓</span>
                            Association of Chartered Certified Accountants (ACCA)
                        </li>
                    </ul>
                </div>
            </div>

            <div class="relative">
                <div class="absolute -inset-4 bg-orange-500/20 blur-2xl rounded-full"></div>
                <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80"
                    alt="Financial Analysis"
                    class="relative rounded-2xl shadow-2xl border border-slate-700/50 transform hover:scale-105 transition-transform duration-500">
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-4xl font-bold text-slate-800 mb-4">Why Choose Us</h2>
                <div class="w-24 h-1 bg-linear-to-r from-orange-500 to-orange-300 mx-auto rounded-full"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-x-12 gap-y-12">
                <div class="flex gap-6 group">
                    <div class="shrink-0 w-16 h-16 bg-orange-50 rounded-2xl flex items-center justify-center text-orange-500 group-hover:bg-orange-500 group-hover:text-white transition-all duration-300 shadow-lg shadow-orange-500/10">
                        <span class="text-2xl font-bold">01</span>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-slate-800 mb-2 group-hover:text-orange-600 transition-colors">Extensive Experience</h3>
                        <p class="text-slate-600 leading-relaxed">
                            With over 16 years in the industry, we have amassed invaluable experience in various
                            financial domains, enabling us to provide well-rounded solutions.
                        </p>
                    </div>
                </div>

                <div class="flex gap-6 group">
                    <div class="shrink-0 w-16 h-16 bg-orange-50 rounded-2xl flex items-center justify-center text-orange-500 group-hover:bg-orange-500 group-hover:text-white transition-all duration-300 shadow-lg shadow-orange-500/10">
                        <span class="text-2xl font-bold">02</span>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-slate-800 mb-2 group-hover:text-orange-600 transition-colors">Client-centric Approach</h3>
                        <p class="text-slate-600 leading-relaxed">
                            Our practice revolves around understanding your unique business needs, providing
                            personalized solutions, and building long-term relationships.
                        </p>
                    </div>
                </div>

                <div class="flex gap-6 group">
                    <div class="shrink-0 w-16 h-16 bg-orange-50 rounded-2xl flex items-center justify-center text-orange-500 group-hover:bg-orange-500 group-hover:text-white transition-all duration-300 shadow-lg shadow-orange-500/10">
                        <span class="text-2xl font-bold">03</span>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-slate-800 mb-2 group-hover:text-orange-600 transition-colors">Global Expertise</h3>
                        <p class="text-slate-600 leading-relaxed">
                            As members of ICAB, ICAEW, and ACCA, we possess a global perspective and stay updated with
                            international best practices.
                        </p>
                    </div>
                </div>

                <div class="flex gap-6 group">
                    <div class="shrink-0 w-16 h-16 bg-orange-50 rounded-2xl flex items-center justify-center text-orange-500 group-hover:bg-orange-500 group-hover:text-white transition-all duration-300 shadow-lg shadow-orange-500/10">
                        <span class="text-2xl font-bold">04</span>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-slate-800 mb-2 group-hover:text-orange-600 transition-colors">Innovation & Compliance</h3>
                        <p class="text-slate-600 leading-relaxed">
                            We blend innovation with strict adherence to regulatory requirements, ensuring you receive
                            cutting-edge financial solutions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
