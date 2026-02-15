<x-admin-layout title="Dashboard" header="Dashboard">

    {{-- Stats Cards --}}
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
        @php
            $cards = [
                ['label' => 'Hero Slides',   'count' => $counts['slides'],       'icon' => 'fa-images',     'color' => 'orange', 'route' => 'admin.slides.index'],
                ['label' => 'Pages',         'count' => $counts['pages'],        'icon' => 'fa-file-lines', 'color' => 'blue',   'route' => 'admin.pages.index'],
                ['label' => 'Services',      'count' => $counts['services'],     'icon' => 'fa-briefcase',  'color' => 'green',  'route' => 'admin.services.index'],
                ['label' => 'Partners',      'count' => $counts['partners'],     'icon' => 'fa-user-tie',   'color' => 'purple', 'route' => 'admin.partners.index'],
                ['label' => 'Gallery Photos','count' => $counts['photos'],       'icon' => 'fa-camera',     'color' => 'pink',   'route' => 'admin.photos.index'],
                ['label' => 'Publications',  'count' => $counts['publications'], 'icon' => 'fa-newspaper',  'color' => 'indigo', 'route' => 'admin.publications.index'],
                ['label' => 'Menu Items',    'count' => $counts['menus'],        'icon' => 'fa-bars',       'color' => 'teal',   'route' => 'admin.menus.index'],
            ];
        @endphp

        @foreach($cards as $card)
            <a href="{{ route($card['route']) }}" class="bg-white rounded-xl border border-slate-200 p-5 hover:shadow-md transition group">
                <div class="flex items-center justify-between mb-3">
                    <span class="text-2xl font-bold text-slate-800">{{ $card['count'] }}</span>
                    <span class="w-10 h-10 rounded-lg bg-{{ $card['color'] }}-50 text-{{ $card['color'] }}-500 flex items-center justify-center">
                        <i class="fa-solid {{ $card['icon'] }} text-sm"></i>
                    </span>
                </div>
                <p class="text-sm text-slate-500 group-hover:text-{{ $card['color'] }}-600 transition">{{ $card['label'] }}</p>
            </a>
        @endforeach
    </div>

    {{-- Quick Actions --}}
    <div class="bg-white rounded-xl border border-slate-200 p-6">
        <h3 class="text-sm font-bold text-slate-800 uppercase tracking-wider mb-4">Quick Actions</h3>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
            <a href="{{ route('admin.settings.index') }}" class="flex items-center gap-3 px-4 py-3 bg-slate-50 rounded-lg hover:bg-orange-50 hover:text-orange-600 transition text-sm text-slate-600">
                <i class="fa-solid fa-gear"></i> Edit Site Settings
            </a>
            <a href="{{ route('admin.slides.create') }}" class="flex items-center gap-3 px-4 py-3 bg-slate-50 rounded-lg hover:bg-orange-50 hover:text-orange-600 transition text-sm text-slate-600">
                <i class="fa-solid fa-plus"></i> Add Hero Slide
            </a>
            <a href="{{ route('admin.pages.create') }}" class="flex items-center gap-3 px-4 py-3 bg-slate-50 rounded-lg hover:bg-orange-50 hover:text-orange-600 transition text-sm text-slate-600">
                <i class="fa-solid fa-plus"></i> Create Page
            </a>
            <a href="{{ route('admin.services.create') }}" class="flex items-center gap-3 px-4 py-3 bg-slate-50 rounded-lg hover:bg-orange-50 hover:text-orange-600 transition text-sm text-slate-600">
                <i class="fa-solid fa-plus"></i> Add Service
            </a>
            <a href="{{ route('admin.partners.create') }}" class="flex items-center gap-3 px-4 py-3 bg-slate-50 rounded-lg hover:bg-orange-50 hover:text-orange-600 transition text-sm text-slate-600">
                <i class="fa-solid fa-plus"></i> Add Partner
            </a>
            <a href="{{ route('admin.photos.create') }}" class="flex items-center gap-3 px-4 py-3 bg-slate-50 rounded-lg hover:bg-orange-50 hover:text-orange-600 transition text-sm text-slate-600">
                <i class="fa-solid fa-plus"></i> Upload Photo
            </a>
            <a href="{{ route('admin.publications.create') }}" class="flex items-center gap-3 px-4 py-3 bg-slate-50 rounded-lg hover:bg-orange-50 hover:text-orange-600 transition text-sm text-slate-600">
                <i class="fa-solid fa-plus"></i> Add Publication
            </a>
            <a href="{{ route('admin.menus.create') }}" class="flex items-center gap-3 px-4 py-3 bg-slate-50 rounded-lg hover:bg-orange-50 hover:text-orange-600 transition text-sm text-slate-600">
                <i class="fa-solid fa-plus"></i> Add Menu Item
            </a>
        </div>
    </div>

</x-admin-layout>
