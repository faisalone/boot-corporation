<x-app-layout title="Schedule of Rate">

    <x-page-header
        title="Schedule of Rate"
        subtitle="Transparent pricing for our professional services"
        image="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80"
    />

    <!-- Content -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16">
                    <span class="text-orange-500 font-bold tracking-wider uppercase text-xs">Pricing Guide</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mt-2 mb-4">Our Service Rates</h2>
                    <p class="text-slate-600">Competitive and transparent pricing for quality professional services</p>
                </div>

                <!-- Service Categories -->
                <div class="space-y-8">
                    <!-- Registration & Permits -->
                    <div class="bg-slate-50 rounded-2xl border border-slate-200 overflow-hidden">
                        <div class="bg-gradient-to-r from-orange-500 to-orange-600 px-6 py-4">
                            <h3 class="text-xl font-bold text-white">Registration & Permits</h3>
                        </div>
                        <div class="p-6">
                            <div class="space-y-4">
                                <div class="flex justify-between items-center py-3 border-b border-slate-200">
                                    <span class="text-slate-700">Company Registration (Private Limited)</span>
                                    <a href="{{ route('contact', ['service' => 'Company Registration']) }}" class="font-bold text-orange-600 hover:text-orange-700 underline">Contact for Quote</a>
                                </div>
                                <div class="flex justify-between items-center py-3 border-b border-slate-200">
                                    <span class="text-slate-700">Trade License Processing</span>
                                    <a href="{{ route('contact', ['service' => 'Trade License Processing']) }}" class="font-bold text-orange-600 hover:text-orange-700 underline">Contact for Quote</a>
                                </div>
                                <div class="flex justify-between items-center py-3 border-b border-slate-200">
                                    <span class="text-slate-700">TIN & BIN Registration</span>
                                    <a href="{{ route('contact', ['service' => 'TIN & BIN Registration']) }}" class="font-bold text-orange-600 hover:text-orange-700 underline">Contact for Quote</a>
                                </div>
                                <div class="flex justify-between items-center py-3">
                                    <span class="text-slate-700">Import/Export License</span>
                                    <a href="{{ route('contact', ['service' => 'Import/Export License']) }}" class="font-bold text-orange-600 hover:text-orange-700 underline">Contact for Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bookkeeping & Payroll -->
                    <div class="bg-slate-50 rounded-2xl border border-slate-200 overflow-hidden">
                        <div class="bg-gradient-to-r from-orange-500 to-orange-600 px-6 py-4">
                            <h3 class="text-xl font-bold text-white">Bookkeeping & Payroll</h3>
                        </div>
                        <div class="p-6">
                            <div class="space-y-4">
                                <div class="flex justify-between items-center py-3 border-b border-slate-200">
                                    <span class="text-slate-700">Monthly Bookkeeping Services</span>
                                    <a href="{{ route('contact', ['service' => 'Monthly Bookkeeping']) }}" class="font-bold text-orange-600 hover:text-orange-700 underline">Contact for Quote</a>
                                </div>
                                <div class="flex justify-between items-center py-3 border-b border-slate-200">
                                    <span class="text-slate-700">Payroll Processing</span>
                                    <a href="{{ route('contact', ['service' => 'Payroll Processing']) }}" class="font-bold text-orange-600 hover:text-orange-700 underline">Contact for Quote</a>
                                </div>
                                <div class="flex justify-between items-center py-3">
                                    <span class="text-slate-700">Financial Reporting</span>
                                    <a href="{{ route('contact', ['service' => 'Financial Reporting']) }}" class="font-bold text-orange-600 hover:text-orange-700 underline">Contact for Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Audit & Assurance -->
                    <div class="bg-slate-50 rounded-2xl border border-slate-200 overflow-hidden">
                        <div class="bg-gradient-to-r from-orange-500 to-orange-600 px-6 py-4">
                            <h3 class="text-xl font-bold text-white">Audit & Assurance</h3>
                        </div>
                        <div class="p-6">
                            <div class="space-y-4">
                                <div class="flex justify-between items-center py-3 border-b border-slate-200">
                                    <span class="text-slate-700">Statutory Audit</span>
                                    <a href="{{ route('contact', ['service' => 'Statutory Audit']) }}" class="font-bold text-orange-600 hover:text-orange-700 underline">Contact for Quote</a>
                                </div>
                                <div class="flex justify-between items-center py-3 border-b border-slate-200">
                                    <span class="text-slate-700">Internal Audit</span>
                                    <a href="{{ route('contact', ['service' => 'Internal Audit']) }}" class="font-bold text-orange-600 hover:text-orange-700 underline">Contact for Quote</a>
                                </div>
                                <div class="flex justify-between items-center py-3">
                                    <span class="text-slate-700">Special Purpose Audit</span>
                                    <a href="{{ route('contact', ['service' => 'Special Purpose Audit']) }}" class="font-bold text-orange-600 hover:text-orange-700 underline">Contact for Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tax Services -->
                    <div class="bg-slate-50 rounded-2xl border border-slate-200 overflow-hidden">
                        <div class="bg-gradient-to-r from-orange-500 to-orange-600 px-6 py-4">
                            <h3 class="text-xl font-bold text-white">Income Tax, VAT & Transfer Pricing</h3>
                        </div>
                        <div class="p-6">
                            <div class="space-y-4">
                                <div class="flex justify-between items-center py-3 border-b border-slate-200">
                                    <span class="text-slate-700">Corporate Tax Return</span>
                                    <a href="{{ route('contact', ['service' => 'Corporate Tax Return']) }}" class="font-bold text-orange-600 hover:text-orange-700 underline">Contact for Quote</a>
                                </div>
                                <div class="flex justify-between items-center py-3 border-b border-slate-200">
                                    <span class="text-slate-700">VAT Registration & Compliance</span>
                                    <a href="{{ route('contact', ['service' => 'VAT Registration']) }}" class="font-bold text-orange-600 hover:text-orange-700 underline">Contact for Quote</a>
                                </div>
                                <div class="flex justify-between items-center py-3 border-b border-slate-200">
                                    <span class="text-slate-700">Transfer Pricing Documentation</span>
                                    <a href="{{ route('contact', ['service' => 'Transfer Pricing']) }}" class="font-bold text-orange-600 hover:text-orange-700 underline">Contact for Quote</a>
                                </div>
                                <div class="flex justify-between items-center py-3">
                                    <span class="text-slate-700">Tax Advisory & Planning</span>
                                    <a href="{{ route('contact', ['service' => 'Tax Advisory']) }}" class="font-bold text-orange-600 hover:text-orange-700 underline">Contact for Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Consultancy Services -->
                    <div class="bg-slate-50 rounded-2xl border border-slate-200 overflow-hidden">
                        <div class="bg-gradient-to-r from-orange-500 to-orange-600 px-6 py-4">
                            <h3 class="text-xl font-bold text-white">Secretarial & Consultancy</h3>
                        </div>
                        <div class="p-6">
                            <div class="space-y-4">
                                <div class="flex justify-between items-center py-3 border-b border-slate-200">
                                    <span class="text-slate-700">Company Secretarial Services</span>
                                    <a href="{{ route('contact', ['service' => 'Company Secretarial']) }}" class="font-bold text-orange-600 hover:text-orange-700 underline">Contact for Quote</a>
                                </div>
                                <div class="flex justify-between items-center py-3 border-b border-slate-200">
                                    <span class="text-slate-700">Business Consultancy</span>
                                    <a href="{{ route('contact', ['service' => 'Business Consultancy']) }}" class="font-bold text-orange-600 hover:text-orange-700 underline">Contact for Quote</a>
                                </div>
                                <div class="flex justify-between items-center py-3">
                                    <span class="text-slate-700">Compliance Management</span>
                                    <a href="{{ route('contact', ['service' => 'Compliance Management']) }}" class="font-bold text-orange-600 hover:text-orange-700 underline">Contact for Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact CTA -->
                <div class="mt-12 bg-gradient-to-r from-orange-500 to-orange-600 rounded-2xl p-8 text-center text-white">
                    <h3 class="text-2xl font-bold mb-4">Need a Custom Quote?</h3>
                    <p class="mb-6">Contact us today for a personalized pricing proposal based on your specific requirements.</p>
                    <a href="{{ route('contact') }}" class="inline-block px-8 py-3 bg-white text-orange-600 font-bold rounded-full hover:bg-slate-100 transition-colors">
                        Contact Us Now
                    </a>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
