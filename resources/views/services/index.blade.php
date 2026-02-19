<x-app-layout :title="$page ? t($page, 'title') : __('Our Services')">

    <x-page-header
        :title="$page ? t($page, 'title') : __('Our Services')"
        :subtitle="$page ? t($page, 'summary') : __('Comprehensive financial solutions designed to help your business thrive.')"
    />

    <!-- Content Split -->
    <div class="container mx-auto px-6 py-16">
        <div class="flex flex-col lg:flex-row gap-12">

            <x-service-sidebar active="" />

            <!-- Main Content -->
            <main class="lg:w-3/4 space-y-16">

                @forelse($services as $service)
                <section id="{{ $service->slug }}" class="bg-white rounded-2xl shadow-xl border border-slate-100 overflow-hidden">
                    @if($service->image)
                    <div class="relative h-64">
                        <img src="{{ img_url($service->image) }}" alt="{{ t($service, 'title') }}" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent flex items-end">
                            <h2 class="text-3xl font-bold text-white p-8">
                                @if($service->icon)<i class="{{ $service->icon }} mr-2"></i>@endif
                                {{ t($service, 'title') }}
                            </h2>
                        </div>
                    </div>
                    @endif
                    <div class="p-8">
                        <p class="text-slate-600 leading-relaxed mb-6">{{ t($service, 'summary') }}</p>
                        <a href="{{ route('service.show', $service->slug) }}"
                            class="inline-flex items-center gap-2 px-6 py-3 bg-orange-500 hover:bg-orange-600 text-white rounded-full font-semibold transition-colors shadow-lg shadow-orange-500/20">
                            {{ __('Learn More') }} <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </section>
                @empty
                <div class="text-center py-20 text-slate-500">
                    <i class="fa-solid fa-briefcase text-4xl mb-4 text-slate-300"></i>
                    <p>Services information coming soon.</p>
                </div>
                @endforelse

            </main>
        </div>
    </div>

</x-app-layout>
