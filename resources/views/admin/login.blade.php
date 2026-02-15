<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | BOOT CORPORATION</title>
    @vite(['resources/css/app.css'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="h-full bg-slate-100 flex items-center justify-center">
    <div class="w-full max-w-md mx-4">
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-orange-500 rounded-2xl shadow-lg mb-4">
                <span class="text-white font-bold text-2xl">B</span>
            </div>
            <h1 class="text-2xl font-bold text-slate-800">BOOT CORPORATION</h1>
            <p class="text-slate-500 text-sm mt-1">Admin Panel</p>
        </div>

        <div class="bg-white rounded-2xl shadow-xl border border-slate-200 p-8">
            <h2 class="text-lg font-semibold text-slate-800 mb-6">Sign in to your account</h2>

            @if($errors->any())
                <div class="mb-4 p-3 bg-red-50 border border-red-200 rounded-lg text-red-700 text-sm">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('admin.login.submit') }}" class="space-y-5">
                @csrf
                <div>
                    <label for="username" class="block text-sm font-medium text-slate-700 mb-1.5">Username</label>
                    <input type="text" id="username" name="username" value="{{ old('username') }}" required autofocus
                        class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition text-slate-800"
                        placeholder="Enter your username">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-slate-700 mb-1.5">Password</label>
                    <input type="password" id="password" name="password" required
                        class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition text-slate-800"
                        placeholder="Enter your password">
                </div>
                <div class="flex items-center">
                    <input type="checkbox" id="remember" name="remember" class="w-4 h-4 text-orange-500 border-slate-300 rounded focus:ring-orange-500">
                    <label for="remember" class="ml-2 text-sm text-slate-600">Remember me</label>
                </div>
                <button type="submit" class="w-full py-2.5 bg-orange-500 hover:bg-orange-600 text-white font-semibold rounded-lg shadow-lg transition">
                    Sign In
                </button>
            </form>
        </div>

        <p class="text-center text-xs text-slate-400 mt-6">&copy; {{ date('Y') }} BOOT CORPORATION</p>
    </div>
</body>
</html>
