<x-app-layout title="About Us">

    <!-- Page Header -->
    <x-page-header
        :title="__('About Us')"
        :subtitle="__('We are dedicated to fostering relationships, building personal connections, and delivering uncompromising excellence.')"
        image="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2069&q=80"
    />

    <!-- Section 1: Our Motto -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="order-1 lg:order-1">
                    <span class="text-orange-500 font-bold tracking-wider uppercase text-xs">{{ __('Our Foundation') }}</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mt-2 mb-8">{{ __('Our Motto is') }} <span class="text-orange-600">BOOT</span></h2>
                    <div class="space-y-6">
                        @php $mottoItems = json_decode($site->about_motto_items ?? '[]', true) ?: []; @endphp
                        @foreach($mottoItems as $item)
                        <div class="flex gap-4 items-start group">
                            <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center shrink-0 shadow-lg group-hover:scale-110 transition-transform">
                                <span class="text-white font-bold text-xl">{{ $item['letter'] }}</span>
                            </div>
                            <div class="pt-2">
                                <h3 class="text-lg font-bold text-slate-800 mb-1">{{ $item['title'] }}</h3>
                                <p class="text-sm text-slate-600">{{ $item['description'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="order-2 lg:order-2">
                    <img src="{{ img_url($site->about_motto_image ?? '') }}"
                        alt="Our Motto" class="w-full h-96 object-cover rounded-2xl shadow-2xl border border-slate-100">
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Our Core Values -->
    <section class="py-24 bg-gradient-to-br from-slate-50 to-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <span class="text-orange-500 font-bold tracking-wider uppercase text-xs">{{ __('What Drives Us') }}</span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mt-2 mb-4">{{ __('Our Core Values') }}</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">{{ __('These principles guide every decision we make and every action we take.') }}</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php $coreValues = json_decode($site->about_core_values_items ?? '[]', true) ?: []; @endphp
                @foreach($coreValues as $value)
                <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm hover:shadow-xl transition-all group">
                    <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-lg">
                        <i class="{{ $value['icon'] }} text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3">{{ $value['title'] }}</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">{{ $value['description'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Section 3: Partner Profiles -->
    <section id="partners" class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-24">
                <span class="text-orange-500 font-bold tracking-wider uppercase text-xs">{{ __('Leadership') }}</span>
                <h2 class="text-3xl md:text-5xl font-bold text-slate-800 mt-3 mb-12">{{ __('Our Partners') }}</h2>
            </div>

            @forelse($partners as $partner)
            <div class="w-full mb-24 bg-white rounded-3xl border border-slate-200 p-8 lg:p-10 shadow-sm relative overflow-hidden">
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-16 items-start">
                    <div class="flex flex-col gap-6">
                        <div class="flex flex-col md:flex-row gap-6 md:items-start">
                             <div class="shrink-0">
                                <div class="w-32 h-32 rounded-2xl border border-slate-200 overflow-hidden shadow-sm">
                                    @if($partner->photo)
                                    <img src="{{ img_url($partner->photo) }}" alt="{{ t($partner, 'name') }}" class="w-full h-full object-cover">
                                    @else
                                    <div class="w-full h-full bg-orange-100 flex items-center justify-center">
                                        <span class="text-orange-600 text-3xl font-bold">{{ strtoupper(substr(t($partner, 'name'), 0, 1)) }}</span>
                                    </div>
                                    @endif
                                </div>
                             </div>
                             <div class="grow">
                                <h3 class="text-3xl font-bold text-slate-900 mb-2">{{ t($partner, 'name') }}</h3>
                                <div class="flex flex-wrap items-center gap-3 mb-3">
                                    <span class="text-orange-600 font-bold text-xs tracking-wide uppercase bg-orange-50 px-2 py-1 rounded">{{ t($partner, 'designation') }}</span>
                                    @if($partner->credentials)
                                    <span class="text-xs text-slate-400">|</span>
                                    <p class="text-sm text-slate-500 font-medium">{{ $partner->credentials }}</p>
                                    @endif
                                </div>
                                <div class="flex flex-wrap gap-3">
                                    @if($partner->email)
                                    <a href="mailto:{{ $partner->email }}" class="inline-flex items-center gap-2 text-xs font-semibold text-slate-600 hover:text-orange-600 transition-colors bg-slate-50 px-3 py-1.5 rounded-lg border border-slate-200 hover:border-orange-200">
                                        <i class="fa-solid fa-envelope text-orange-500"></i> {{ $partner->email }}
                                    </a>
                                    @endif
                                    @if($partner->linkedin)
                                    <a href="{{ $partner->linkedin }}" target="_blank" class="inline-flex items-center gap-2 text-xs font-semibold text-slate-600 hover:text-[#0077b5] transition-colors bg-slate-50 px-3 py-1.5 rounded-lg border border-slate-200 hover:border-[#0077b5]">
                                        <i class="fa-brands fa-linkedin text-[#0077b5]"></i> LinkedIn
                                    </a>
                                    @endif
                                </div>
                             </div>
                        </div>
                        @if(t($partner, 'bio'))
                        <div class="mt-2 prose prose-sm prose-slate max-w-none">
                            {!! t($partner, 'bio') !!}
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            @empty
            <p class="text-center text-slate-500">Partner profiles coming soon.</p>
            @endforelse
        </div>
    </section>
</x-app-layout>
