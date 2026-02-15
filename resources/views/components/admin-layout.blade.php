@props(['title' => 'Admin', 'header' => 'Dashboard'])

<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }} | BOOT CORPORATION</title>
    @vite(['resources/css/app.css'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.1/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.1/dist/summernote-lite.min.js"></script>
    <style>
        .sidebar-link.active { background-color: rgb(249 115 22 / 0.1); color: rgb(234 88 12); font-weight: 600; }
        .sidebar-link:hover { background-color: rgb(241 245 249); }
        .sidebar-link.active:hover { background-color: rgb(249 115 22 / 0.15); }
    </style>
</head>
<body class="h-full bg-slate-50">
    <div class="flex h-full">
        {{-- Sidebar --}}
        <aside id="sidebar" class="fixed inset-y-0 left-0 z-30 w-64 bg-white border-r border-slate-200 flex flex-col transform -translate-x-full md:translate-x-0 transition-transform">
            <div class="flex items-center gap-3 px-5 py-4 border-b border-slate-100">
                <div class="w-9 h-9 bg-orange-500 rounded-lg flex items-center justify-center">
                    <span class="text-white font-bold text-sm">B</span>
                </div>
                <div>
                    <h1 class="text-sm font-bold text-slate-800 leading-tight">BOOT CORP</h1>
                    <p class="text-[10px] text-slate-400 uppercase tracking-wider">Admin Panel</p>
                </div>
            </div>

            <nav class="flex-1 overflow-y-auto px-3 py-4 space-y-1">
                <a href="{{ route('admin.dashboard') }}"
                   class="sidebar-link flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm text-slate-600 transition {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i class="fa-solid fa-gauge-high w-5 text-center text-xs"></i> Dashboard
                </a>

                <p class="px-3 pt-5 pb-1 text-[10px] font-bold text-slate-400 uppercase tracking-wider">Content</p>

                <a href="{{ route('admin.settings.index') }}"
                   class="sidebar-link flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm text-slate-600 transition {{ request()->routeIs('admin.settings.index') ? 'active' : '' }}">
                    <i class="fa-solid fa-gear w-5 text-center text-xs"></i> Site Settings
                </a>
                <a href="{{ route('admin.settings.about') }}"
                   class="sidebar-link flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm text-slate-600 transition {{ request()->routeIs('admin.settings.about') ? 'active' : '' }}">
                    <i class="fa-solid fa-user-group w-5 text-center text-xs"></i> About Settings
                </a>
                <a href="{{ route('admin.slides.index') }}"
                   class="sidebar-link flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm text-slate-600 transition {{ request()->routeIs('admin.slides.*') ? 'active' : '' }}">
                    <i class="fa-solid fa-images w-5 text-center text-xs"></i> Hero Slides
                </a>
                <a href="{{ route('admin.pages.index') }}"
                   class="sidebar-link flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm text-slate-600 transition {{ request()->routeIs('admin.pages.*') ? 'active' : '' }}">
                    <i class="fa-solid fa-file-lines w-5 text-center text-xs"></i> Pages
                </a>
                <a href="{{ route('admin.services.index') }}"
                   class="sidebar-link flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm text-slate-600 transition {{ request()->routeIs('admin.services.*') ? 'active' : '' }}">
                    <i class="fa-solid fa-briefcase w-5 text-center text-xs"></i> Services
                </a>
                <a href="{{ route('admin.partners.index') }}"
                   class="sidebar-link flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm text-slate-600 transition {{ request()->routeIs('admin.partners.*') ? 'active' : '' }}">
                    <i class="fa-solid fa-user-tie w-5 text-center text-xs"></i> Partners
                </a>
                <a href="{{ route('admin.photos.index') }}"
                   class="sidebar-link flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm text-slate-600 transition {{ request()->routeIs('admin.photos.*') ? 'active' : '' }}">
                    <i class="fa-solid fa-camera w-5 text-center text-xs"></i> Photo Gallery
                </a>
                <a href="{{ route('admin.publications.index') }}"
                   class="sidebar-link flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm text-slate-600 transition {{ request()->routeIs('admin.publications.*') ? 'active' : '' }}">
                    <i class="fa-solid fa-newspaper w-5 text-center text-xs"></i> Publications
                </a>
                <a href="{{ route('admin.menus.index') }}"
                   class="sidebar-link flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm text-slate-600 transition {{ request()->routeIs('admin.menus.*') ? 'active' : '' }}">
                    <i class="fa-solid fa-bars w-5 text-center text-xs"></i> Menu Items
                </a>
            </nav>

            <div class="border-t border-slate-100 px-3 py-3 space-y-1">
                <a href="{{ route('index') }}" target="_blank"
                   class="sidebar-link flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm text-slate-600 transition">
                    <i class="fa-solid fa-arrow-up-right-from-square w-5 text-center text-xs"></i> View Website
                </a>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="sidebar-link w-full flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm text-red-500 transition hover:!bg-red-50">
                        <i class="fa-solid fa-right-from-bracket w-5 text-center text-xs"></i> Logout
                    </button>
                </form>
            </div>
        </aside>

        {{-- Main Content --}}
        <div class="flex-1 md:ml-64 flex flex-col min-h-full">
            <header class="sticky top-0 z-20 bg-white border-b border-slate-200 px-6 py-3 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <button id="sidebar-toggle" class="md:hidden text-slate-600">
                        <i class="fa-solid fa-bars text-lg"></i>
                    </button>
                    <h2 class="text-lg font-semibold text-slate-800">{{ $header }}</h2>
                </div>
                <div class="flex items-center gap-3">
                    <span class="text-sm text-slate-500 hidden sm:inline">{{ auth()->user()->name }}</span>
                    <div class="w-8 h-8 bg-orange-100 text-orange-600 rounded-full flex items-center justify-center text-xs font-bold">
                        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                    </div>
                </div>
            </header>

            @if(session('success'))
                <div class="mx-6 mt-4 p-3 bg-green-50 border border-green-200 rounded-lg text-green-700 text-sm flex items-center gap-2">
                    <i class="fa-solid fa-check-circle"></i> {{ session('success') }}
                </div>
            @endif
            @if(session('error'))
                <div class="mx-6 mt-4 p-3 bg-red-50 border border-red-200 rounded-lg text-red-700 text-sm flex items-center gap-2">
                    <i class="fa-solid fa-exclamation-circle"></i> {{ session('error') }}
                </div>
            @endif
            @if($errors->any())
                <div class="mx-6 mt-4 p-3 bg-red-50 border border-red-200 rounded-lg text-red-700 text-sm">
                    <ul class="list-disc list-inside space-y-1">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <main class="flex-1 p-6">
                {{ $slot }}
            </main>

            <footer class="px-6 py-3 border-t border-slate-100 text-center text-xs text-slate-400">
                &copy; {{ date('Y') }} BOOT CORPORATION
            </footer>
        </div>
    </div>

    <div id="sidebar-overlay" class="fixed inset-0 bg-black/40 z-20 hidden md:hidden"></div>

    <script>
        const sidebar = document.getElementById('sidebar');
        const toggle = document.getElementById('sidebar-toggle');
        const overlay = document.getElementById('sidebar-overlay');
        toggle?.addEventListener('click', () => { sidebar.classList.toggle('-translate-x-full'); overlay.classList.toggle('hidden'); });
        overlay?.addEventListener('click', () => { sidebar.classList.add('-translate-x-full'); overlay.classList.add('hidden'); });

        document.addEventListener('DOMContentLoaded', () => {
            // Initialize Summernote for all rich editors
            document.querySelectorAll('.rich-editor').forEach(el => {
                $(el).summernote({
                    height: 250,
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'italic', 'underline', 'strikethrough', 'clear']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['table', ['table']],
                        ['insert', ['link', 'picture', 'hr']],
                        ['view', ['codeview', 'fullscreen', 'undo', 'redo']]
                    ],
                    styleTags: ['p', 'h3', 'h4', 'h5', 'h6'],
                    callbacks: {
                        onChange: function(contents) {
                            $(this).val(contents);
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>
