<x-admin-layout title="Central Dashboard">
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-3xl font-bold text-slate-900">Tenants Dashboard</h1>
            <p class="text-slate-500 mt-1">Manage all your tenant websites from here</p>
        </div>
        <div class="flex gap-3">
            <a href="{{ route('central.settings') }}"
                class="px-6 py-3 bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold rounded-xl transition-all flex items-center gap-2">
                <i class="fa-solid fa-gear"></i> Site Settings
            </a>
            <a href="{{ route('central.tenants.create') }}"
                class="px-6 py-3 bg-linear-to-r from-orange-500 to-orange-600 text-white font-bold rounded-xl hover:from-orange-600 hover:to-orange-700 transition-all shadow-lg shadow-orange-500/25 flex items-center gap-2">
                <i class="fa-solid fa-plus"></i> New Tenant
            </a>
        </div>
    </div>

    @if($tenants->isEmpty())
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-12 text-center">
            <div class="w-20 h-20 bg-slate-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fa-solid fa-building text-3xl text-slate-400"></i>
            </div>
            <h3 class="text-xl font-bold text-slate-700 mb-2">No Tenants Yet</h3>
            <p class="text-slate-500 mb-6">Create your first tenant to get started</p>
            <a href="{{ route('central.tenants.create') }}"
                class="inline-flex items-center gap-2 px-6 py-3 bg-orange-500 text-white rounded-xl hover:bg-orange-600 transition font-semibold">
                <i class="fa-solid fa-plus"></i> Create First Tenant
            </a>
        </div>
    @else
        <div class="grid gap-6">
            @foreach($tenants as $tenant)
                <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6 hover:shadow-md transition">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 bg-slate-900 rounded-xl flex items-center justify-center text-white font-black text-xl ring-2 ring-orange-500/20">
                                {{ $tenant->logo_letter ?? 'T' }}
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-slate-900">{{ $tenant->company_name }}</h3>
                                <p class="text-slate-500 text-sm">{{ $tenant->company_tagline }}</p>
                                <div class="flex items-center gap-3 mt-1">
                                    @foreach($tenant->domains as $domain)
                                        <a href="http://{{ $domain->domain }}" target="_blank"
                                            class="text-orange-500 text-sm hover:underline flex items-center gap-1">
                                            <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
                                            {{ $domain->domain }}
                                        </a>
                                    @endforeach
                                    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-semibold {{ $tenant->is_active ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                                        {{ $tenant->is_active ? 'Active' : 'Inactive' }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <a href="{{ route('central.tenants.edit', $tenant) }}"
                                class="px-4 py-2 bg-slate-100 text-slate-700 rounded-xl hover:bg-slate-200 transition text-sm font-semibold">
                                <i class="fa-solid fa-pen-to-square mr-1"></i> Edit
                            </a>
                            <form method="POST" action="{{ route('central.tenants.destroy', $tenant) }}"
                                onsubmit="return confirm('Are you sure? This will delete the tenant and its database!')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="px-4 py-2 bg-red-50 text-red-600 rounded-xl hover:bg-red-100 transition text-sm font-semibold">
                                    <i class="fa-solid fa-trash mr-1"></i> Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</x-admin-layout>
