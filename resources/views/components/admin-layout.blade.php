<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Admin' }} | {{ $site['company_name'] ?? 'Boot Corp' }} Admin</title>
    @vite(['resources/css/app.css'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-slate-100 min-h-screen">
    <!-- Top Nav -->
    <nav class="bg-slate-900 text-white shadow-xl">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 bg-orange-500 rounded-lg flex items-center justify-center font-black text-lg">
                    {{ $site['logo_letter'] ?? 'B' }}
                </div>
                <div>
                    <span class="font-bold text-lg">{{ $site['company_name'] ?? 'Admin' }}</span>
                    <span class="text-slate-400 text-sm ml-2">
                        @if(tenant())
                            Tenant Panel
                        @else
                            Central Admin
                        @endif
                    </span>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <span class="text-slate-300 text-sm">{{ Auth::user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-slate-400 hover:text-red-400 transition text-sm">
                        <i class="fa-solid fa-right-from-bracket mr-1"></i> Logout
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main class="max-w-7xl mx-auto px-6 py-8">
        @if(session('success'))
            <div class="bg-green-50 border border-green-200 text-green-700 rounded-xl p-4 mb-6">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="bg-red-50 border border-red-200 text-red-700 rounded-xl p-4 mb-6">
                {{ session('error') }}
            </div>
        @endif

        {{ $slot }}
    </main>
</body>
</html>
