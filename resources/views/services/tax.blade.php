<x-app-layout title="Income Tax, VAT & Transfer Pricing">

    <x-page-header
        title="Income Tax, VAT & Transfer Pricing"
        subtitle="Navigating the complexities of tax regulations to minimize liability and ensure compliance."
    />

    <!-- Content Split -->
    <div class="container mx-auto px-6 py-16">
        <div class="flex flex-col lg:flex-row gap-12">

            <x-service-sidebar active="tax" />

            <!-- Main Content -->
            <main class="lg:w-3/4">
                <section class="bg-white rounded-2xl shadow-xl border border-slate-100 overflow-hidden">
                    <div class="relative h-64">
                        <img src="https://images.unsplash.com/photo-1628109559962-16f315286595?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80"
                            alt="Tax" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-linear-to-t from-slate-900/80 to-transparent flex items-end"></div>
                    </div>
                    <div class="p-8">
                        <h2 class="text-3xl font-bold text-slate-800 mb-6">Income Tax, VAT & Transfer Pricing</h2>
                        <p class="text-slate-600 leading-relaxed mb-6">
                            Our tax experts provide strategic advice and practical solutions to help you manage your tax
                            obligations efficiently. We cover all aspects of Income Tax, Value Added Tax (VAT), and
                            Transfer Pricing (TP).
                        </p>

                        <div class="space-y-4">
                            <details class="group bg-slate-50 rounded-xl" open>
                                <summary class="flex justify-between items-center font-medium cursor-pointer list-none p-4 text-slate-800">
                                    <span>Corporate & Personal Tax</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                                    </span>
                                </summary>
                                <div class="text-slate-600 p-4 pt-0 leading-relaxed text-sm">
                                    Tax planning, preparation and filing of returns for companies and individuals,
                                    ensuring compliance and optimizing tax positions.
                                </div>
                            </details>

                            <details class="group bg-slate-50 rounded-xl">
                                <summary class="flex justify-between items-center font-medium cursor-pointer list-none p-4 text-slate-800">
                                    <span>Value Added Tax (VAT)</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                                    </span>
                                </summary>
                                <div class="text-slate-600 p-4 pt-0 leading-relaxed text-sm">
                                    Assistance with VAT registration, monthly return filing, record keeping, and
                                    advisory on VAT implications for business transactions.
                                </div>
                            </details>

                            <details class="group bg-slate-50 rounded-xl">
                                <summary class="flex justify-between items-center font-medium cursor-pointer list-none p-4 text-slate-800">
                                    <span>Transfer Pricing (TP)</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                                    </span>
                                </summary>
                                <div class="text-slate-600 p-4 pt-0 leading-relaxed text-sm">
                                    Advisory and compliance services related to Transfer Pricing regulations, including
                                    documentation and TP study reports.
                                </div>
                            </details>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>

</x-app-layout>
