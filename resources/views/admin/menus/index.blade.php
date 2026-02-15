<x-admin-layout title="Menu Items" header="Menu Items">

    <div class="flex justify-between items-center mb-6">
        <p class="text-sm text-slate-500">Manage navigation menu items for the website header.</p>
        <a href="{{ route('admin.menus.create') }}" class="px-4 py-2 bg-orange-500 hover:bg-orange-600 text-white text-sm font-semibold rounded-lg shadow transition">
            <i class="fa-solid fa-plus mr-1"></i> Add Menu Item
        </a>
    </div>

    <div class="bg-white rounded-xl border border-slate-200 overflow-hidden">
        <table class="w-full text-sm">
            <thead class="bg-slate-50 border-b border-slate-200">
                <tr>
                    <th class="px-4 py-3 text-left font-medium text-slate-600">Order</th>
                    <th class="px-4 py-3 text-left font-medium text-slate-600">Title</th>
                    <th class="px-4 py-3 text-left font-medium text-slate-600">URL / Route</th>
                    <th class="px-4 py-3 text-left font-medium text-slate-600">Target</th>
                    <th class="px-4 py-3 text-left font-medium text-slate-600">Status</th>
                    <th class="px-4 py-3 text-right font-medium text-slate-600">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse($menus as $menu)
                    <tr class="hover:bg-slate-50">
                        <td class="px-4 py-3 text-slate-500">{{ $menu->order }}</td>
                        <td class="px-4 py-3 font-medium text-slate-800">
                            @if($menu->icon) <i class="fa-solid {{ $menu->icon }} text-orange-500 mr-1"></i> @endif
                            {{ $menu->title_en }}
                        </td>
                        <td class="px-4 py-3 text-slate-500 font-mono text-xs">{{ $menu->route_name ?: $menu->url ?: '—' }}</td>
                        <td class="px-4 py-3 text-slate-500">{{ $menu->target }}</td>
                        <td class="px-4 py-3">
                            <span class="px-2 py-1 rounded-full text-xs font-medium {{ $menu->is_active ? 'bg-green-50 text-green-700' : 'bg-slate-100 text-slate-500' }}">
                                {{ $menu->is_active ? 'Active' : 'Hidden' }}
                            </span>
                        </td>
                        <td class="px-4 py-3 text-right space-x-2">
                            <a href="{{ route('admin.menus.edit', $menu) }}" class="text-orange-600 hover:text-orange-700"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form method="POST" action="{{ route('admin.menus.destroy', $menu) }}" class="inline" onsubmit="return confirm('Delete this menu item and all its children?')">
                                @csrf @method('DELETE')
                                <button class="text-red-500 hover:text-red-700"><i class="fa-solid fa-trash-can"></i></button>
                            </form>
                        </td>
                    </tr>
                    {{-- Children --}}
                    @foreach($menu->children as $child)
                        <tr class="hover:bg-slate-50 bg-slate-50/50">
                            <td class="px-4 py-2 text-slate-400 pl-10">{{ $child->order }}</td>
                            <td class="px-4 py-2 text-slate-600 pl-10">
                                <span class="text-slate-300 mr-1">└</span>
                                @if($child->icon) <i class="fa-solid {{ $child->icon }} text-orange-400 mr-1 text-xs"></i> @endif
                                {{ $child->title_en }}
                            </td>
                            <td class="px-4 py-2 text-slate-400 font-mono text-xs">{{ $child->route_name ?: $child->url ?: '—' }}</td>
                            <td class="px-4 py-2 text-slate-400">{{ $child->target }}</td>
                            <td class="px-4 py-2">
                                <span class="px-2 py-1 rounded-full text-xs font-medium {{ $child->is_active ? 'bg-green-50 text-green-700' : 'bg-slate-100 text-slate-500' }}">
                                    {{ $child->is_active ? 'Active' : 'Hidden' }}
                                </span>
                            </td>
                            <td class="px-4 py-2 text-right space-x-2">
                                <a href="{{ route('admin.menus.edit', $child) }}" class="text-orange-600 hover:text-orange-700"><i class="fa-solid fa-pen-to-square"></i></a>
                                <form method="POST" action="{{ route('admin.menus.destroy', $child) }}" class="inline" onsubmit="return confirm('Delete this item?')">
                                    @csrf @method('DELETE')
                                    <button class="text-red-500 hover:text-red-700"><i class="fa-solid fa-trash-can"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @empty
                    <tr><td colspan="6" class="px-4 py-8 text-center text-slate-400">No menu items yet.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>

</x-admin-layout>
