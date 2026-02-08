@props(['title', 'subtitle' => '', 'image' => ''])

<header class="relative pt-32 pb-20 bg-slate-900 border-b border-slate-800">
    @if($image)
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute inset-0 bg-[url('{{ $image }}')] bg-cover bg-center opacity-10"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent"></div>
    </div>
    @endif
    <div class="container mx-auto px-6 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">{{ $title }}</h1>
        @if($subtitle)
        <p class="text-lg text-slate-300 max-w-2xl mx-auto">{{ $subtitle }}</p>
        @endif
    </div>
</header>
