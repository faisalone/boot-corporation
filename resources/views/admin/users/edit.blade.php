<x-admin-layout title="Edit User" header="Edit User: {{ $user->name }}">

    <div class="max-w-2xl">
        <form method="POST" action="{{ route('admin.users.update', $user) }}" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Name <span class="text-red-500">*</span>
                </label>
                <input type="text" name="name" value="{{ old('name', $user->name) }}" required
                    class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none"
                    placeholder="Full name">
                @error('name') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Email <span class="text-red-500">*</span>
                </label>
                <input type="email" name="email" value="{{ old('email', $user->email) }}" required
                    class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none"
                    placeholder="email@example.com">
                @error('email') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
            </div>

            <div class="border-t border-slate-200 pt-6">
                <h3 class="text-sm font-semibold text-slate-800 mb-4">
                    <i class="fa-solid fa-key text-orange-500 mr-2"></i> Change Password
                </h3>
                <p class="text-xs text-slate-500 mb-4">Leave blank to keep current password</p>

                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">
                            New Password
                        </label>
                        <input type="password" name="password"
                            class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none"
                            placeholder="Min 8 characters, mixed case, numbers & symbols">
                        <p class="text-xs text-slate-400 mt-1">Must contain uppercase, lowercase, number and symbol</p>
                        @error('password') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">
                            Confirm New Password
                        </label>
                        <input type="password" name="password_confirmation"
                            class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none"
                            placeholder="Re-enter new password">
                    </div>
                </div>

                <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mt-4">
                    <div class="flex items-start gap-3">
                        <i class="fa-solid fa-circle-info text-blue-500 mt-0.5"></i>
                        <div class="text-sm text-blue-800">
                            <p class="font-medium mb-1">Password Requirements</p>
                            <ul class="text-xs space-y-0.5 text-blue-700">
                                <li>• At least 8 characters long</li>
                                <li>• Mix of uppercase and lowercase letters</li>
                                <li>• At least one number</li>
                                <li>• At least one special character (!, @, #, $, etc.)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex gap-3 pt-4">
                <button type="submit" class="px-6 py-2.5 bg-orange-500 hover:bg-orange-600 text-white font-semibold rounded-lg shadow transition">
                    <i class="fa-solid fa-check mr-1"></i> Update User
                </button>
                <a href="{{ route('admin.users.index') }}" class="px-6 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 font-medium rounded-lg transition">Cancel</a>
            </div>
        </form>
    </div>

</x-admin-layout>
