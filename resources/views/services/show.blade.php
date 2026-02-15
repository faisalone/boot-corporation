<x-app-layout :title="t($service, 'title')">

    <x-page-header
        :title="t($service, 'title')"
        :subtitle="t($service, 'summary')"
        :image="img_url($service->image)"
    />

    <!-- Content Split -->
    <div class="container mx-auto px-6 py-16">
        <div class="flex flex-col lg:flex-row gap-12">

            <x-service-sidebar :active="$service->slug" />

            <!-- Main Content -->
            <main class="lg:w-3/4">
                <article class="bg-white rounded-2xl shadow-xl border border-slate-100 overflow-hidden">
                    @if($service->image)
                    <div class="relative h-72">
                        <img src="{{ img_url($service->image) }}" alt="{{ t($service, 'title') }}" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent flex items-end">
                            <div class="p-8">
                                @if($service->icon)
                                <i class="{{ $service->icon }} text-orange-400 text-2xl mb-3"></i>
                                @endif
                                <h2 class="text-3xl font-bold text-white">{{ t($service, 'title') }}</h2>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="p-8 lg:p-10">
                        @if(t($service, 'summary'))
                        <p class="text-lg text-slate-600 leading-relaxed mb-8 border-l-4 border-orange-500 pl-4">
                            {{ t($service, 'summary') }}
                        </p>
                        @endif
                        <div class="prose prose-slate prose-lg max-w-none prose-headings:text-slate-800 prose-h4:text-orange-600 prose-a:text-orange-600 prose-strong:text-slate-800">
                            {!! t($service, 'content') !!}
                        </div>
                    </div>
                </article>

                <!-- CTA -->
                <div class="mt-10 bg-gradient-to-r from-orange-500 to-orange-600 rounded-2xl p-8 text-center shadow-xl">
                    <h3 class="text-2xl font-bold text-white mb-3">{{ __('Need Help with') }} {{ t($service, 'title') }}?</h3>
                    <p class="text-orange-100 mb-6">{{ __('Our experts are ready to assist you. Get in touch for a free consultation.') }}</p>
                    <a href="{{ route('contact', ['service' => t($service, 'title')]) }}"
                        class="inline-flex items-center gap-2 px-8 py-3 bg-white text-orange-600 rounded-full font-bold hover:bg-orange-50 transition-colors shadow-lg">
                        <i class="fa-solid fa-phone"></i> {{ __('Contact Us') }}
                    </a>
                </div>
            </main>
        </div>
    </div>

</x-app-layout>
