<x-admin-layout title="Publications" header="Publications">

    <div class="flex justify-between items-center mb-6">
        <p class="text-sm text-slate-500">Manage publications, articles, and downloadable documents.</p>
        <a href="{{ route('admin.publications.create') }}" class="px-4 py-2 bg-orange-500 hover:bg-orange-600 text-white text-sm font-semibold rounded-lg shadow transition">
            <i class="fa-solid fa-plus mr-1"></i> Add Publication
        </a>
    </div>

    <div class="bg-white rounded-xl border border-slate-200 overflow-hidden">
        <table class="w-full text-sm">
            <thead class="bg-slate-50 border-b border-slate-200">
                <tr>
                    <th class="px-4 py-3 text-left font-medium text-slate-600">Order</th>
                    <th class="px-4 py-3 text-left font-medium text-slate-600">Title</th>
                    <th class="px-4 py-3 text-left font-medium text-slate-600">Category</th>
                    <th class="px-4 py-3 text-left font-medium text-slate-600">Published Date</th>
                    <th class="px-4 py-3 text-left font-medium text-slate-600">File</th>
                    <th class="px-4 py-3 text-left font-medium text-slate-600">Status</th>
                    <th class="px-4 py-3 text-right font-medium text-slate-600">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse($publications as $pub)
                    <tr class="hover:bg-slate-50">
                        <td class="px-4 py-3 text-slate-500">{{ $pub->order }}</td>
                        <td class="px-4 py-3 font-medium text-slate-800">{{ $pub->title_en }}</td>
                        <td class="px-4 py-3 text-slate-500">{{ $pub->category ?: '—' }}</td>
                        <td class="px-4 py-3 text-slate-500">{{ $pub->published_at?->format('M d, Y') ?: '—' }}</td>
                        <td class="px-4 py-3">
                            @if($pub->file)
                                <a href="{{ asset('storage/' . $pub->file) }}" target="_blank" class="text-orange-600 hover:underline text-xs">
                                    <i class="fa-solid fa-file-pdf mr-1"></i> View
                                </a>
                            @else — @endif
                        </td>
                        <td class="px-4 py-3">
                            <span class="px-2 py-1 rounded-full text-xs font-medium {{ $pub->is_active ? 'bg-green-50 text-green-700' : 'bg-slate-100 text-slate-500' }}">
                                {{ $pub->is_active ? 'Active' : 'Hidden' }}
                            </span>
                        </td>
                        <td class="px-4 py-3 text-right space-x-2">
                            <a href="{{ route('admin.publications.edit', $pub) }}" class="text-orange-600 hover:text-orange-700"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form method="POST" action="{{ route('admin.publications.destroy', $pub) }}" class="inline" onsubmit="return confirm('Delete this publication?')">
                                @csrf @method('DELETE')
                                <button class="text-red-500 hover:text-red-700"><i class="fa-solid fa-trash-can"></i></button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="7" class="px-4 py-8 text-center text-slate-400">No publications yet.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>

</x-admin-layout>
