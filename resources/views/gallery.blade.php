<x-app-layout :title="$page ? t($page, 'title') : __('Photo Gallery')">

    <x-page-header
        :title="$page ? t($page, 'title') : __('Photo Gallery')"
        :subtitle="$page ? t($page, 'summary') : __('Glimpses of our life at BOOT CORPORATION, events, and community engagements.')"
    />

    <!-- Gallery Grid -->
    <div class="container mx-auto px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($photos as $photo)
            <div class="group relative aspect-4/3 rounded-2xl overflow-hidden cursor-pointer">
                <img src="{{ img_url($photo->image) }}"
                    alt="{{ t($photo, 'title') }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-linear-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <h3 class="text-white font-semibold text-lg">{{ t($photo, 'title') }}</h3>
                </div>
            </div>
            @empty
            <div class="col-span-3 text-center py-12">
                <i class="fa-solid fa-camera text-4xl text-slate-300 mb-4"></i>
                <p class="text-slate-500">Photos coming soon.</p>
            </div>
            @endforelse
        </div>
    </div>

</x-app-layout>
