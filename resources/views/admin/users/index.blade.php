<x-admin-layout title="Users" header="User Management">

    <div class="flex justify-between items-center mb-6">
        <p class="text-sm text-slate-500">Manage admin users and update passwords.</p>
        <a href="{{ route('admin.users.create') }}" class="px-4 py-2 bg-orange-500 hover:bg-orange-600 text-white text-sm font-semibold rounded-lg shadow transition">
            <i class="fa-solid fa-plus mr-1"></i> Add User
        </a>
    </div>

    <div class="bg-white rounded-xl border border-slate-200 overflow-hidden">
        <table class="w-full text-sm">
            <thead class="bg-slate-50 border-b border-slate-200">
                <tr>
                    <th class="px-4 py-3 text-left font-medium text-slate-600">Name</th>
                    <th class="px-4 py-3 text-left font-medium text-slate-600">Email</th>
                    <th class="px-4 py-3 text-left font-medium text-slate-600">Created</th>
                    <th class="px-4 py-3 text-right font-medium text-slate-600">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse($users as $user)
                    <tr class="hover:bg-slate-50">
                        <td class="px-4 py-3">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 bg-orange-100 text-orange-600 rounded-full flex items-center justify-center text-xs font-bold">
                                    {{ strtoupper(substr($user->name, 0, 1)) }}
                                </div>
                                <span class="text-slate-800 font-medium">{{ $user->name }}</span>
                                @if($user->id === auth()->id())
                                    <span class="px-2 py-0.5 rounded-full text-xs font-medium bg-blue-50 text-blue-700">You</span>
                                @endif
                            </div>
                        </td>
                        <td class="px-4 py-3 text-slate-600">{{ $user->email }}</td>
                        <td class="px-4 py-3 text-slate-500">{{ $user->created_at->diffForHumans() }}</td>
                        <td class="px-4 py-3 text-right space-x-2">
                            <a href="{{ route('admin.users.edit', $user) }}" class="text-orange-600 hover:text-orange-700">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            @if($user->id !== auth()->id())
                                <form method="POST" action="{{ route('admin.users.destroy', $user) }}" class="inline" onsubmit="return confirm('Delete this user?')">
                                    @csrf @method('DELETE')
                                    <button class="text-red-500 hover:text-red-700"><i class="fa-solid fa-trash-can"></i></button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="4" class="px-4 py-8 text-center text-slate-400">No users yet.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($users->hasPages())
        <div class="mt-4">
            {{ $users->links() }}
        </div>
    @endif

</x-admin-layout>
