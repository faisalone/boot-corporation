<x-admin-layout title="Partners" header="Partners">

    <div class="flex justify-between items-center mb-6">
        <p class="text-sm text-slate-500">Manage partner/team profiles shown on the About page.</p>
        <a href="{{ route('admin.partners.create') }}" class="px-4 py-2 bg-orange-500 hover:bg-orange-600 text-white text-sm font-semibold rounded-lg shadow transition">
            <i class="fa-solid fa-plus mr-1"></i> Add Partner
        </a>
    </div>

    <div class="bg-white rounded-xl border border-slate-200 overflow-hidden">
        <table class="w-full text-sm">
            <thead class="bg-slate-50 border-b border-slate-200">
                <tr>
                    <th class="px-4 py-3 text-left font-medium text-slate-600">Order</th>
                    <th class="px-4 py-3 text-left font-medium text-slate-600">Photo</th>
                    <th class="px-4 py-3 text-left font-medium text-slate-600">Name</th>
                    <th class="px-4 py-3 text-left font-medium text-slate-600">Designation</th>
                    <th class="px-4 py-3 text-left font-medium text-slate-600">Status</th>
                    <th class="px-4 py-3 text-right font-medium text-slate-600">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse($partners as $partner)
                    <tr class="hover:bg-slate-50">
                        <td class="px-4 py-3 text-slate-500">{{ $partner->order }}</td>
                        <td class="px-4 py-3">
                            @if($partner->photo)
                                <img src="{{ img_url($partner->photo) }}" class="w-10 h-10 object-cover rounded-full border">
                            @else
                                <div class="w-10 h-10 bg-slate-200 rounded-full flex items-center justify-center text-slate-400 text-xs">N/A</div>
                            @endif
                        </td>
                        <td class="px-4 py-3 font-medium text-slate-800">{{ $partner->name_en }}</td>
                        <td class="px-4 py-3 text-slate-500">{{ $partner->designation_en ?: '—' }}</td>
                        <td class="px-4 py-3">
                            <span class="px-2 py-1 rounded-full text-xs font-medium {{ $partner->is_active ? 'bg-green-50 text-green-700' : 'bg-slate-100 text-slate-500' }}">
                                {{ $partner->is_active ? 'Active' : 'Hidden' }}
                            </span>
                        </td>
                        <td class="px-4 py-3 text-right space-x-2">
                            <a href="{{ route('admin.partners.edit', $partner) }}" class="text-orange-600 hover:text-orange-700"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form method="POST" action="{{ route('admin.partners.destroy', $partner) }}" class="inline" onsubmit="return confirm('Delete this partner?')">
                                @csrf @method('DELETE')
                                <button class="text-red-500 hover:text-red-700"><i class="fa-solid fa-trash-can"></i></button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="6" class="px-4 py-8 text-center text-slate-400">No partners yet.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>

</x-admin-layout>
