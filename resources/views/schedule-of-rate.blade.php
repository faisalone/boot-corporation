<x-app-layout title="Schedule of Rate">

    <x-page-header
        :title="__('Schedule of Rate')"
        :subtitle="__('Transparent pricing for our professional services')"
        image="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80"
    />

    <!-- PDF Viewer Section -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <span class="text-orange-500 font-bold tracking-wider uppercase text-xs">{{ __('Pricing Guide') }}</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mt-2 mb-4">{{ __('Our Service Rates') }}</h2>
                    <p class="text-slate-600">{{ __('Download or view our comprehensive schedule of rates below.') }}</p>
                </div>

                @if(isset($site) && $site->schedule_pdf)
                    @php $pdfUrl = asset('storage/' . $site->schedule_pdf); @endphp

                    <!-- PDF Embed -->
                    <div class="rounded-2xl border border-slate-200 overflow-hidden shadow-lg mb-8">
                        <iframe src="{{ $pdfUrl }}" class="w-full" style="height: 80vh;" frameborder="0"></iframe>
                    </div>

                    <!-- Download Button -->
                    <div class="text-center">
                        <a href="{{ $pdfUrl }}" target="_blank"
                            class="inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-orange-500 to-orange-600 text-white font-bold rounded-full shadow-xl shadow-orange-500/20 hover:-translate-y-1 transition-all">
                            <i class="fa-solid fa-download text-lg"></i> {{ __('Download Schedule of Rates (PDF)') }}
                        </a>
                    </div>
                @else
                    <!-- No PDF Uploaded -->
                    <div class="bg-slate-50 rounded-2xl border border-slate-200 p-16 text-center">
                        <i class="fa-regular fa-file-pdf text-6xl text-slate-300 mb-6"></i>
                        <h3 class="text-2xl font-bold text-slate-700 mb-3">{{ __('Schedule of Rates Coming Soon') }}</h3>
                        <p class="text-slate-500 mb-8 max-w-lg mx-auto">{{ __('Our comprehensive schedule of rates is being prepared. Please contact us directly for a custom quotation tailored to your requirements.') }}</p>
                        <a href="{{ route('contact') }}"
                            class="inline-flex items-center gap-2 px-8 py-3 bg-orange-500 hover:bg-orange-600 text-white rounded-full font-semibold transition-colors shadow-lg shadow-orange-500/20">
                            <i class="fa-solid fa-phone"></i> {{ __('Contact Us for a Quote') }}
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </section>

</x-app-layout>
