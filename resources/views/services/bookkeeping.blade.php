<x-app-layout title="Bookkeeping & Payroll">

    <x-page-header
        title="Bookkeeping & Payroll"
        subtitle="Accurate financial records and streamlined payroll processing for your peace of mind."
    />

    <!-- Content Split -->
    <div class="container mx-auto px-6 py-16">
        <div class="flex flex-col lg:flex-row gap-12">

            <x-service-sidebar active="bookkeeping" />

            <!-- Main Content -->
            <main class="lg:w-3/4">
                <section class="bg-white rounded-2xl shadow-xl border border-slate-100 overflow-hidden">
                    <div class="relative h-64">
                        <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2072&q=80"
                            alt="Bookkeeping" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-linear-to-t from-slate-900/80 to-transparent flex items-end"></div>
                    </div>
                    <div class="p-8">
                        <h2 class="text-3xl font-bold text-slate-800 mb-6">Bookkeeping & Payroll</h2>
                        <p class="text-slate-600 leading-relaxed mb-6">
                            We offer professional bookkeeping and payroll solutions to ensure financial transparency and
                            compliance. Our team assists you in meticulously maintaining books of accounts, preparing
                            financial statements, and delivering comprehensive management reporting to help you make
                            informed decisions.
                        </p>

                        <div class="grid md:grid-cols-2 gap-6 mt-8">
                            <div class="p-6 bg-slate-50 rounded-xl border border-slate-100 hover:border-orange-100 transition-colors">
                                <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center text-orange-500 shadow-sm mb-4">
                                    <i class="fa-solid fa-file-invoice-dollar text-xl"></i>
                                </div>
                                <h3 class="text-xl font-bold text-slate-800 mb-3">Bookkeeping</h3>
                                <p class="text-slate-600 text-sm leading-relaxed">
                                    Recording daily financial transactions, maintaining ledgers, and reconciling bank
                                    statements to ensure your financial data is accurate and up-to-date.
                                </p>
                            </div>
                            <div class="p-6 bg-slate-50 rounded-xl border border-slate-100 hover:border-orange-100 transition-colors">
                                <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center text-orange-500 shadow-sm mb-4">
                                    <i class="fa-solid fa-users-gear text-xl"></i>
                                </div>
                                <h3 class="text-xl font-bold text-slate-800 mb-3">Payroll Processing</h3>
                                <p class="text-slate-600 text-sm leading-relaxed">
                                    Complete payroll management including salary calculation, tax deductions, payslip
                                    generation, and compliance with local labor laws.
                                </p>
                            </div>
                            <div class="p-6 bg-slate-50 rounded-xl border border-slate-100 hover:border-orange-100 transition-colors">
                                <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center text-orange-500 shadow-sm mb-4">
                                    <i class="fa-solid fa-chart-line text-xl"></i>
                                </div>
                                <h3 class="text-xl font-bold text-slate-800 mb-3">Financial Reporting</h3>
                                <p class="text-slate-600 text-sm leading-relaxed">
                                    Preparation of monthly, quarterly, and annual financial statements in accordance
                                    with International Financial Reporting Standards (IFRS) and Bangladesh Financial
                                    Reporting Standards (BFRS).
                                </p>
                            </div>
                            <div class="p-6 bg-slate-50 rounded-xl border border-slate-100 hover:border-orange-100 transition-colors">
                                <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center text-orange-500 shadow-sm mb-4">
                                    <i class="fa-solid fa-briefcase text-xl"></i>
                                </div>
                                <h3 class="text-xl font-bold text-slate-800 mb-3">CFO Services</h3>
                                <p class="text-slate-600 text-sm leading-relaxed">
                                    Strategic financial guidance, budgeting, and forecasting services to help you
                                    navigate complex financial challenges and drive growth.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>

</x-app-layout>
