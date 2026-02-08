<x-app-layout title="Secretarial & Consultancy">

    <x-page-header
        title="Secretarial & Consultancy"
        subtitle="Expert corporate secretarial services to ensure your business remains compliant and agile."
    />

    <!-- Content Split -->
    <div class="container mx-auto px-6 py-16">
        <div class="flex flex-col lg:flex-row gap-12">

            <x-service-sidebar active="consultancy" />

            <!-- Main Content -->
            <main class="lg:w-3/4">
                <section class="bg-white rounded-2xl shadow-xl border border-slate-100 overflow-hidden">
                    <div class="relative h-64">
                        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&auto=format&fit=crop&w=2069&q=80"
                            alt="Consultancy" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-linear-to-t from-slate-900/80 to-transparent flex items-end"></div>
                    </div>
                    <div class="p-8">
                        <h2 class="text-3xl font-bold text-slate-800 mb-6">Secretarial & Consultancy</h2>
                        <p class="text-slate-600 leading-relaxed mb-6">
                            We offer a wide range of corporate secretarial and management consultancy services to
                            support your business lifecycle, from formation to winding up.
                        </p>

                        <div class="space-y-4">
                            <details class="group bg-slate-50 rounded-xl" open>
                                <summary class="flex justify-between items-center font-medium cursor-pointer list-none p-4 text-slate-800">
                                    <span>RJSC Returns Filing</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                                    </span>
                                </summary>
                                <div class="text-slate-600 p-4 pt-0 leading-relaxed text-sm">
                                    Preparation and filing of annual returns, forms for change in directors, share
                                    transfers, and other statutory compliances with the RJSC.
                                </div>
                            </details>

                            <details class="group bg-slate-50 rounded-xl">
                                <summary class="flex justify-between items-center font-medium cursor-pointer list-none p-4 text-slate-800">
                                    <span>Share Transfer & Allotment</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                                    </span>
                                </summary>
                                <div class="text-slate-600 p-4 pt-0 leading-relaxed text-sm">
                                    Advising on and executing share transfers, allotments, and issuance of share
                                    certificates in compliance with the Companies Act.
                                </div>
                            </details>

                            <details class="group bg-slate-50 rounded-xl">
                                <summary class="flex justify-between items-center font-medium cursor-pointer list-none p-4 text-slate-800">
                                    <span>Winding Up Services</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                                    </span>
                                </summary>
                                <div class="text-slate-600 p-4 pt-0 leading-relaxed text-sm">
                                    Assistance with the voluntary winding up of companies, ensuring all legal and
                                    procedural requirements are met.
                                </div>
                            </details>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>

</x-app-layout>
