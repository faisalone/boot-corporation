<x-admin-layout title="Add User" header="Add New User">

    <div class="max-w-2xl">
        <form method="POST" action="{{ route('admin.users.store') }}" class="space-y-6">
            @csrf

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Name <span class="text-red-500">*</span>
                </label>
                <input type="text" name="name" value="{{ old('name') }}" required
                    class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none"
                    placeholder="Full name">
                @error('name') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Email <span class="text-red-500">*</span>
                </label>
                <input type="email" name="email" value="{{ old('email') }}" required
                    class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none"
                    placeholder="email@example.com">
                @error('email') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Password <span class="text-red-500">*</span>
                </label>
                <input type="password" name="password" required
                    class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none"
                    placeholder="Min 8 characters, mixed case, numbers & symbols">
                <p class="text-xs text-slate-400 mt-1">Must contain uppercase, lowercase, number and symbol</p>
                @error('password') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Confirm Password <span class="text-red-500">*</span>
                </label>
                <input type="password" name="password_confirmation" required
                    class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none"
                    placeholder="Re-enter password">
            </div>

            <div class="bg-orange-50 border border-orange-200 rounded-lg p-4">
                <div class="flex items-start gap-3">
                    <i class="fa-solid fa-shield-halved text-orange-500 mt-0.5"></i>
                    <div class="text-sm text-orange-800">
                        <p class="font-medium mb-1">Strong Password Required</p>
                        <ul class="text-xs space-y-0.5 text-orange-700">
                            <li>• At least 8 characters long</li>
                            <li>• Mix of uppercase and lowercase letters</li>
                            <li>• At least one number</li>
                            <li>• At least one special character (!, @, #, $, etc.)</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="flex gap-3 pt-4">
                <button type="submit" class="px-6 py-2.5 bg-orange-500 hover:bg-orange-600 text-white font-semibold rounded-lg shadow transition">
                    <i class="fa-solid fa-check mr-1"></i> Create User
                </button>
                <a href="{{ route('admin.users.index') }}" class="px-6 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 font-medium rounded-lg transition">Cancel</a>
            </div>
        </form>
    </div>

</x-admin-layout>
