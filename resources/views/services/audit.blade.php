<x-app-layout title="Audit & Assurance">

    <x-page-header
        title="Audit & Assurance"
        subtitle="Independent and objective assurance services to enhance the reliability of your information."
    />

    <!-- Content Split -->
    <div class="container mx-auto px-6 py-16">
        <div class="flex flex-col lg:flex-row gap-12">

            <x-service-sidebar active="audit" />

            <!-- Main Content -->
            <main class="lg:w-3/4">
                <section class="bg-white rounded-2xl shadow-xl border border-slate-100 overflow-hidden">
                    <div class="relative h-64">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80"
                            alt="Audit" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-linear-to-t from-slate-900/80 to-transparent flex items-end"></div>
                    </div>
                    <div class="p-8">
                        <h2 class="text-3xl font-bold text-slate-800 mb-6">Audit & Assurance</h2>
                        <p class="text-slate-600 leading-relaxed mb-6">
                            We provide comprehensive audit and assurance services that go beyond compliance. Our
                            approach is designed to provide you with insights into your business, helping you manage
                            risk and improve performance.
                        </p>

                        <div class="space-y-4">
                            <details class="group bg-slate-50 rounded-xl" open>
                                <summary class="flex justify-between items-center font-medium cursor-pointer list-none p-4 text-slate-800">
                                    <span>Statutory Audit</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                                    </span>
                                </summary>
                                <div class="text-slate-600 p-4 pt-0 leading-relaxed text-sm">
                                    Independent examination of financial information to ensure accuracy and compliance
                                    with applicable laws and regulations.
                                </div>
                            </details>

                            <details class="group bg-slate-50 rounded-xl">
                                <summary class="flex justify-between items-center font-medium cursor-pointer list-none p-4 text-slate-800">
                                    <span>Internal Audit</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                                    </span>
                                </summary>
                                <div class="text-slate-600 p-4 pt-0 leading-relaxed text-sm">
                                    Evaluation of internal controls, risk management, and governance processes to
                                    improve operational efficiency.
                                </div>
                            </details>

                            <details class="group bg-slate-50 rounded-xl">
                                <summary class="flex justify-between items-center font-medium cursor-pointer list-none p-4 text-slate-800">
                                    <span>Special Purpose Audit</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                                    </span>
                                </summary>
                                <div class="text-slate-600 p-4 pt-0 leading-relaxed text-sm">
                                    Tailored audits for specific requirements, such as donor-funded projects, due
                                    diligence, or fraud investigation.
                                </div>
                            </details>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>

</x-app-layout>
