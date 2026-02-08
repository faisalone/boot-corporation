<x-app-layout title="Our Services">

    <x-page-header
        title="Our Services"
        subtitle="Comprehensive financial solutions designed to help your business thrive."
    />

    <!-- Content Split -->
    <div class="container mx-auto px-6 py-16">
        <div class="flex flex-col lg:flex-row gap-12">

            <x-service-sidebar active="" />

            <!-- Main Content -->
            <main class="lg:w-3/4 space-y-16">

                <!-- Registration & Permits -->
                <section id="registration" class="bg-white rounded-2xl shadow-xl border border-slate-100 overflow-hidden">
                    <div class="relative h-64">
                        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=2072&q=80"
                            alt="Registration" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent flex items-end">
                            <h2 class="text-3xl font-bold text-white p-8">Registration & Permits</h2>
                        </div>
                    </div>
                    <div class="p-8">
                        <p class="text-slate-600 leading-relaxed mb-6">
                            Initiating the registrations and permits is a vital journey for businesses. At BOOT CORPORATION,
                            we excel in simplifying this complicated process, providing a suite of comprehensive
                            registration and permits services meticulously crafted to meet your unique requirements.
                        </p>
                        <div class="space-y-4">
                            <details class="group bg-slate-50 rounded-xl">
                                <summary class="flex justify-between items-center font-medium cursor-pointer list-none p-4 text-slate-800">
                                    <span>Registering a Limited Liability Company</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                                    </span>
                                </summary>
                                <div class="text-slate-600 p-4 pt-0 leading-relaxed text-sm">
                                    We assist with RJSC registration, Memorandum and Articles of Association preparation, name clearance, and bank account opening for fund infusion.
                                </div>
                            </details>
                            <details class="group bg-slate-50 rounded-xl">
                                <summary class="flex justify-between items-center font-medium cursor-pointer list-none p-4 text-slate-800">
                                    <span>Trade License</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                                    </span>
                                </summary>
                                <div class="text-slate-600 p-4 pt-0 leading-relaxed text-sm">
                                    Assistance in obtaining and renewing trade licenses from local authorities.
                                </div>
                            </details>
                            <details class="group bg-slate-50 rounded-xl">
                                <summary class="flex justify-between items-center font-medium cursor-pointer list-none p-4 text-slate-800">
                                    <span>Tax & VAT Registration</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                                    </span>
                                </summary>
                                <div class="text-slate-600 p-4 pt-0 leading-relaxed text-sm">
                                    Complete support for BIN and TIN registration processes.
                                </div>
                            </details>
                        </div>
                    </div>
                </section>

                <!-- Bookkeeping -->
                <section id="bookkeeping" class="bg-white rounded-2xl shadow-xl border border-slate-100 overflow-hidden">
                    <div class="relative h-64">
                        <img src="https://images.unsplash.com/photo-1586281380349-632531db7ed4?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80"
                            alt="Bookkeeping" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent flex items-end">
                            <h2 class="text-3xl font-bold text-white p-8">Bookkeeping & Payroll</h2>
                        </div>
                    </div>
                    <div class="p-8">
                        <p class="text-slate-600 leading-relaxed mb-6">
                            Our accounting and bookkeeping services encompass a range of vital functions to ensure
                            financial transparency and compliance.
                        </p>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="bg-orange-50 p-4 rounded-xl border border-orange-100">
                                <h4 class="font-bold text-slate-800 mb-2">Payroll Processing</h4>
                                <p class="text-sm text-slate-500">Accurate and timely payroll management ensuring compliance with labor laws.</p>
                            </div>
                            <div class="bg-orange-50 p-4 rounded-xl border border-orange-100">
                                <h4 class="font-bold text-slate-800 mb-2">CFO Services</h4>
                                <p class="text-sm text-slate-500">High-level financial strategy and guidance without the cost of a full-time CFO.</p>
                            </div>
                        </div>
                    </div>
                </section>

            </main>
        </div>
    </div>

</x-app-layout>
