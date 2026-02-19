<x-app-layout :title="$page ? t($page, 'title') : __('Publications')">

    <x-page-header
        :title="$page ? t($page, 'title') : __('Publications')"
        :subtitle="$page ? t($page, 'summary') : __('Insights, updates, and thought leadership on tax, audit, and business advisory.')"
        image="https://images.unsplash.com/photo-1513475303663-5246c545422b?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80"
    />

    <!-- Publications List -->
    <div class="container mx-auto px-6 py-16">
        <div class="grid gap-8">
            @forelse($publications as $pub)
            <div class="bg-white rounded-2xl shadow-lg border border-slate-100 overflow-hidden hover:shadow-xl transition-shadow flex flex-col md:flex-row">
                <div class="md:w-1/4 bg-slate-100 flex items-center justify-center p-8">
                    @if($pub->file && str_ends_with($pub->file, '.pdf'))
                    <i class="fa-regular fa-file-pdf text-6xl text-red-500"></i>
                    @else
                    <i class="fa-regular fa-file-lines text-6xl text-blue-500"></i>
                    @endif
                </div>
                <div class="p-8 md:w-3/4 flex flex-col justify-between">
                    <div>
                        <span class="text-xs font-bold tracking-wider text-orange-500 uppercase mb-2 block">{{ $pub->category ?? 'Publication' }}</span>
                        <h3 class="text-2xl font-bold text-slate-800 mb-3">{{ t($pub, 'title') }}</h3>
                        @if(t($pub, 'summary'))
                        <p class="text-slate-600 leading-relaxed mb-6">{{ t($pub, 'summary') }}</p>
                        @endif
                    </div>
                    <div class="flex items-center justify-between mt-auto pt-6 border-t border-slate-50">
                        <span class="text-sm text-slate-500">
                            <i class="fa-regular fa-calendar mr-2"></i>
                            {{ $pub->published_at ? $pub->published_at->format('M d, Y') : $pub->created_at->format('M d, Y') }}
                        </span>
                        @if($pub->file)
                        <a href="{{ asset('storage/' . $pub->file) }}" target="_blank" class="px-6 py-2 rounded-full border border-orange-500 text-orange-600 font-medium hover:bg-orange-50 transition-colors text-sm">
                            <i class="fa-regular fa-eye mr-2"></i> {{ __('View Publication') }}
                        </a>
                        @endif
                    </div>
                </div>
            </div>
            @empty
            <div class="text-center py-12">
                <i class="fa-solid fa-newspaper text-4xl text-slate-300 mb-4"></i>
                <p class="text-slate-500">Publications coming soon.</p>
            </div>
            @endforelse
        </div>
    </div>

</x-app-layout>
