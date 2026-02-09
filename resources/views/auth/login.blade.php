<x-app-layout title="Login">
    <section class="min-h-screen flex items-center justify-center py-32 px-6">
        <div class="w-full max-w-md">
            <div class="bg-white rounded-2xl shadow-xl border border-slate-200 p-8">
                <div class="text-center mb-8">
                    <div class="w-16 h-16 bg-slate-900 rounded-2xl flex items-center justify-center text-white font-black text-2xl mx-auto mb-4 ring-2 ring-orange-500/20">
                        {{ $site['logo_letter'] }}
                    </div>
                    <h1 class="text-2xl font-bold text-slate-900">Welcome Back</h1>
                    <p class="text-slate-500 mt-1">Sign in to your account</p>
                </div>

                @if($errors->any())
                    <div class="bg-red-50 border border-red-200 rounded-xl p-4 mb-6">
                        @foreach($errors->all() as $error)
                            <p class="text-red-600 text-sm">{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}" class="space-y-5">
                    @csrf
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" required autofocus
                            class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 outline-none transition">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Password</label>
                        <input type="password" name="password" required
                            class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 outline-none transition">
                    </div>
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="remember" id="remember" class="rounded border-slate-300 text-orange-500 focus:ring-orange-500">
                        <label for="remember" class="text-sm text-slate-600">Remember me</label>
                    </div>
                    <button type="submit"
                        class="w-full py-3 bg-linear-to-r from-orange-500 to-orange-600 text-white font-bold rounded-xl hover:from-orange-600 hover:to-orange-700 transition-all shadow-lg shadow-orange-500/25">
                        Sign In
                    </button>
                </form>
            </div>
        </div>
    </section>
</x-app-layout>
