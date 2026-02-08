<x-app-layout title="Registration & Permits">

    <x-page-header
        title="Registration & Permits"
        subtitle="Simplified solutions for all your business registration and licensing needs."
    />

    <!-- Content Split -->
    <div class="container mx-auto px-6 py-16">
        <div class="flex flex-col lg:flex-row gap-12">

            <x-service-sidebar active="registration" />

            <!-- Main Content -->
            <main class="lg:w-3/4">
                <section class="bg-white rounded-2xl shadow-xl border border-slate-100 overflow-hidden">
                    <div class="relative h-64">
                        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=2072&q=80"
                            alt="Registration" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-linear-to-t from-slate-900/80 to-transparent flex items-end"></div>
                    </div>
                    <div class="p-8">
                        <h2 class="text-3xl font-bold text-slate-800 mb-6">Registration & Permits</h2>
                        <p class="text-slate-600 leading-relaxed mb-6">
                            Initiating the registrations and permits is a vital journey for businesses. At BOOT CORPORATION,
                            we excel in simplifying this complicated process, providing a suite of comprehensive
                            registration and permits services meticulously crafted to meet your unique requirements.
                        </p>

                        <div class="space-y-4">
                            <details class="group bg-slate-50 rounded-xl" open>
                                <summary class="flex justify-between items-center font-medium cursor-pointer list-none p-4 text-slate-800">
                                    <span>Registering a Limited Liability Company</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                                    </span>
                                </summary>
                                <div class="text-slate-600 p-4 pt-0 leading-relaxed text-sm">
                                    Limited Liability Company must register with the Registrar of Joint Stock Companies
                                    and Firms (RJSC) in Bangladesh. In the process of incorporating a company, our
                                    dedicated services involve engaging in comprehensive discussions. We actively
                                    contribute to the preparation of the Memorandum and Articles of Association,
                                    including other necessary documents and prescribed forms.
                                </div>
                            </details>

                            <details class="group bg-slate-50 rounded-xl">
                                <summary class="flex justify-between items-center font-medium cursor-pointer list-none p-4 text-slate-800">
                                    <span>Permission for a Branch or Liaison Office</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                                    </span>
                                </summary>
                                <div class="text-slate-600 p-4 pt-0 leading-relaxed text-sm">
                                    We assist foreign companies in establishing Branch or Liaison offices in Bangladesh
                                    through BIDA and other relevant authorities.
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
                                    Assistance in obtaining and renewing trade licenses from local authorities, ensuring
                                    your business operates legally within its jurisdiction.
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
                                    Complete support for Business Identification Number (BIN) and Taxpayer
                                    Identification Number (TIN) registration processes.
                                </div>
                            </details>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>

</x-app-layout>
