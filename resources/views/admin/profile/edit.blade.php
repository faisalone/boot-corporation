<x-admin-layout title="My Profile" header="My Profile">

    <div class="max-w-3xl">
        {{-- Profile Card --}}
        <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
            <div class="flex items-center gap-4">
                <div class="w-20 h-20 bg-gradient-to-br from-orange-500 to-orange-600 text-white rounded-full flex items-center justify-center text-2xl font-bold shadow-lg">
                    {{ strtoupper(substr($user->name, 0, 1)) }}
                </div>
                <div>
                    <h2 class="text-xl font-bold text-slate-800">{{ $user->name }}</h2>
                    <p class="text-sm text-slate-500">{{ $user->email }}</p>
                    <p class="text-xs text-slate-400 mt-1">Member since {{ $user->created_at->format('F Y') }}</p>
                </div>
            </div>
        </div>

        {{-- Update Form --}}
        <form method="POST" action="{{ route('admin.profile.update') }}" class="bg-white rounded-xl border border-slate-200 p-6 space-y-6">
            @csrf
            @method('PUT')

            <div>
                <h3 class="text-lg font-semibold text-slate-800 mb-4">
                    <i class="fa-solid fa-user-pen text-orange-500 mr-2"></i> Update Information
                </h3>
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Full Name <span class="text-red-500">*</span>
                </label>
                <input type="text" name="name" value="{{ old('name', $user->name) }}" required
                    class="w-full px-3 py-2.5 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none"
                    placeholder="Your full name">
                @error('name') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">
                    Email Address <span class="text-red-500">*</span>
                </label>
                <input type="email" name="email" value="{{ old('email', $user->email) }}" required
                    class="w-full px-3 py-2.5 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none"
                    placeholder="your.email@example.com">
                @error('email') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
            </div>

            <div class="border-t border-slate-200 pt-6">
                <h3 class="text-sm font-semibold text-slate-800 mb-4">
                    <i class="fa-solid fa-key text-orange-500 mr-2"></i> Change Password
                </h3>
                <p class="text-xs text-slate-500 mb-4">Leave blank if you don't want to change your password</p>

                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">
                            New Password
                        </label>
                        <input type="password" name="password" autocomplete="new-password"
                            class="w-full px-3 py-2.5 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none"
                            placeholder="Enter new password (optional)">
                        <p class="text-xs text-slate-400 mt-1">Min 8 characters with uppercase, lowercase, number & symbol</p>
                        @error('password') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">
                            Confirm New Password
                        </label>
                        <input type="password" name="password_confirmation" autocomplete="new-password"
                            class="w-full px-3 py-2.5 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none"
                            placeholder="Confirm new password">
                    </div>
                </div>

                <div class="bg-slate-50 border border-slate-200 rounded-lg p-4 mt-4">
                    <div class="flex items-start gap-3">
                        <i class="fa-solid fa-shield-halved text-slate-500 mt-0.5"></i>
                        <div class="text-xs text-slate-600">
                            <p class="font-medium mb-1.5">Strong Password Requirements:</p>
                            <ul class="space-y-0.5">
                                <li>✓ At least 8 characters</li>
                                <li>✓ Uppercase & lowercase letters</li>
                                <li>✓ At least one number</li>
                                <li>✓ At least one symbol (!, @, #, $, etc.)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex gap-3 pt-4">
                <button type="submit" class="px-6 py-2.5 bg-orange-500 hover:bg-orange-600 text-white font-semibold rounded-lg shadow transition">
                    <i class="fa-solid fa-check mr-1"></i> Save Changes
                </button>
                <a href="{{ route('admin.dashboard') }}" class="px-6 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 font-medium rounded-lg transition">
                    Cancel
                </a>
            </div>
        </form>
    </div>

</x-admin-layout>
