<x-admin-layout title="Photo Gallery" header="Photo Gallery">

    <div class="flex justify-between items-center mb-6">
        <p class="text-sm text-slate-500">Manage photos displayed in the gallery page.</p>
        <a href="{{ route('admin.photos.create') }}" class="px-4 py-2 bg-orange-500 hover:bg-orange-600 text-white text-sm font-semibold rounded-lg shadow transition">
            <i class="fa-solid fa-plus mr-1"></i> Upload Photo
        </a>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @forelse($photos as $photo)
            <div class="bg-white rounded-xl border border-slate-200 overflow-hidden group">
                <div class="aspect-square relative">
                    <img src="{{ img_url($photo->image) }}" class="w-full h-full object-cover">
                    @if(!$photo->is_active)
                        <span class="absolute top-2 left-2 px-2 py-0.5 bg-slate-800/70 text-white text-[10px] rounded-full">Hidden</span>
                    @endif
                </div>
                <div class="p-3">
                    <p class="text-sm font-medium text-slate-800 truncate">{{ $photo->title_en ?: 'Untitled' }}</p>
                    <p class="text-xs text-slate-400">Order: {{ $photo->order }}</p>
                    <div class="flex items-center justify-end gap-2 mt-3">
                        <a href="{{ route('admin.photos.edit', $photo) }}"
                            class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-semibold border border-slate-200 bg-slate-50 text-slate-700 hover:bg-slate-100 transition">
                            <i class="fa-solid fa-pen-to-square text-orange-600"></i> Edit
                        </a>
                        <form method="POST" action="{{ route('admin.photos.destroy', $photo) }}" class="inline-flex" onsubmit="return confirm('Delete this photo?')">
                            @csrf @method('DELETE')
                            <button type="submit"
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-semibold border border-red-200 bg-red-50 text-red-700 hover:bg-red-100 transition">
                                <i class="fa-solid fa-trash"></i> Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-full text-center py-12 text-slate-400">No photos yet. Upload your first photo.</div>
        @endforelse
    </div>

</x-admin-layout>
