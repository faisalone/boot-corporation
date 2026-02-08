<x-app-layout title="Publications">

    <x-page-header
        title="Publications"
        subtitle="Insights, updates, and thought leadership on tax, audit, and business advisory."
        image="https://images.unsplash.com/photo-1513475303663-5246c545422b?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80"
    />

    <!-- Publications List -->
    <div class="container mx-auto px-6 py-16">
        <div class="grid gap-8">

            <div class="bg-white rounded-2xl shadow-lg border border-slate-100 overflow-hidden hover:shadow-xl transition-shadow flex flex-col md:flex-row">
                <div class="md:w-1/4 bg-slate-100 flex items-center justify-center p-8">
                    <i class="fa-regular fa-file-pdf text-6xl text-red-500"></i>
                </div>
                <div class="p-8 md:w-3/4 flex flex-col justify-between">
                    <div>
                        <span class="text-xs font-bold tracking-wider text-orange-500 uppercase mb-2 block">Tax Update</span>
                        <h3 class="text-2xl font-bold text-slate-800 mb-3">Finance Act 2025: Key Highlights</h3>
                        <p class="text-slate-600 leading-relaxed mb-6">
                            A comprehensive overview of the changes in the Finance Act 2025 and its implications for
                            businesses and individuals in Bangladesh.
                        </p>
                    </div>
                    <div class="flex items-center justify-between mt-auto pt-6 border-t border-slate-50">
                        <span class="text-sm text-slate-500"><i class="fa-regular fa-calendar mr-2"></i> July 10, 2025</span>
                        <button class="px-6 py-2 rounded-full border border-orange-500 text-orange-600 font-medium hover:bg-orange-50 transition-colors text-sm">
                            <i class="fa-solid fa-download mr-2"></i> Download PDF
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-lg border border-slate-100 overflow-hidden hover:shadow-xl transition-shadow flex flex-col md:flex-row">
                <div class="md:w-1/4 bg-slate-100 flex items-center justify-center p-8">
                    <i class="fa-regular fa-file-lines text-6xl text-blue-500"></i>
                </div>
                <div class="p-8 md:w-3/4 flex flex-col justify-between">
                    <div>
                        <span class="text-xs font-bold tracking-wider text-blue-500 uppercase mb-2 block">Audit Insight</span>
                        <h3 class="text-2xl font-bold text-slate-800 mb-3">Navigating New Financial Reporting Standards</h3>
                        <p class="text-slate-600 leading-relaxed mb-6">
                            Understanding the latest amendments to International Financial Reporting Standards (IFRS)
                            and how they impact your financial statements.
                        </p>
                    </div>
                    <div class="flex items-center justify-between mt-auto pt-6 border-t border-slate-50">
                        <span class="text-sm text-slate-500"><i class="fa-regular fa-calendar mr-2"></i> May 22, 2025</span>
                        <button class="px-6 py-2 rounded-full border border-orange-500 text-orange-600 font-medium hover:bg-orange-50 transition-colors text-sm">
                            <i class="fa-solid fa-eye mr-2"></i> Read Article
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-lg border border-slate-100 overflow-hidden hover:shadow-xl transition-shadow flex flex-col md:flex-row">
                <div class="md:w-1/4 bg-slate-100 flex items-center justify-center p-8">
                    <i class="fa-regular fa-newspaper text-6xl text-slate-500"></i>
                </div>
                <div class="p-8 md:w-3/4 flex flex-col justify-between">
                    <div>
                        <span class="text-xs font-bold tracking-wider text-green-600 uppercase mb-2 block">Newsletter</span>
                        <h3 class="text-2xl font-bold text-slate-800 mb-3">BOOT CORPORATION Quarterly: Q1 2025</h3>
                        <p class="text-slate-600 leading-relaxed mb-6">
                            Our quarterly newsletter featuring updates on the firm, compliance deadlines, and expert
                            commentary on the economic landscape.
                        </p>
                    </div>
                    <div class="flex items-center justify-between mt-auto pt-6 border-t border-slate-50">
                        <span class="text-sm text-slate-500"><i class="fa-regular fa-calendar mr-2"></i> April 05, 2025</span>
                        <button class="px-6 py-2 rounded-full border border-orange-500 text-orange-600 font-medium hover:bg-orange-50 transition-colors text-sm">
                            <i class="fa-solid fa-download mr-2"></i> Download PDF
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>

</x-app-layout>
