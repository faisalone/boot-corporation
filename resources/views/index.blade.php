<x-app-layout title="Home">

    <!-- Hero Section with Slider -->
    <header class="relative min-h-screen flex items-center bg-slate-900 pt-20 md:pt-0" id="heroSlider">
        
        <!-- Image Slider Background -->
        <div class="absolute inset-0 z-0">
            @forelse($slides as $slide)
            <div class="hero-slide {{ $loop->first ? 'active' : '' }} absolute inset-0">
                <img src="{{ img_url($slide->image) }}" alt="{{ t($slide, 'title') }}" class="w-full h-full object-cover">
            </div>
            @empty
            <!-- Fallback slides -->
            <div class="hero-slide active absolute inset-0">
                <img src="{{ asset('images/padma-bridge-aecom-header.jpg') }}" alt="Padma Bridge" class="w-full h-full object-cover">
            </div>
            <div class="hero-slide absolute inset-0">
                <img src="{{ asset('images/ruppur-power-plant.jpg') }}" alt="Ruppur Power Plant" class="w-full h-full object-cover">
            </div>
            <div class="hero-slide absolute inset-0">
                <img src="{{ asset('images/metro_rail.png') }}" alt="Metro Rail" class="w-full h-full object-cover">
            </div>
            <div class="hero-slide absolute inset-0">
                <img src="{{ asset('images/cox-bazar.jpg') }}" alt="Cox's Bazar" class="w-full h-full object-cover">
            </div>
            <div class="hero-slide absolute inset-0">
                <img src="{{ asset('images/sundarban.jpg') }}" alt="Sundarban" class="w-full h-full object-cover">
            </div>
            @endforelse
            
            <div class="absolute inset-0 bg-linear-to-r from-slate-900/90 to-slate-900/40"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-2xl space-y-8 animate-fade-in-up">
                <h1 class="text-4xl md:text-6xl font-bold text-white leading-tight">
                    <span class="text-xl md:text-4xl font-medium block mb-2">{{ isset($site) ? $site->hero_title : 'Your Cost- Effective' }}</span>
                    <span class="text-transparent bg-clip-text bg-linear-to-r from-orange-400 to-amber-300">{{ isset($site) ? $site->hero_subtitle : 'Service Provider' }}</span>
                </h1>
                
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('about') }}"
                        class="px-8 py-4 bg-orange-500 hover:bg-orange-600 text-white rounded-full font-semibold shadow-xl shadow-orange-500/20 hover:-translate-y-1 transition-all text-center">
                        {{ __('Learn More') }}
                    </a>
                    <a href="{{ isset($site) && $site->hero_btn_url ? $site->hero_btn_url : route('service.index') }}"
                        class="px-8 py-4 bg-white/10 hover:bg-white/20 backdrop-blur-md text-white border border-white/30 rounded-full font-semibold hover:-translate-y-1 transition-all text-center">
                        {{ isset($site) && $site->hero_btn_text ? $site->hero_btn_text : __('Our Services') }}
                    </a>
                </div>
            </div>
        </div>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.hero-slide');
            let currentSlide = 0;
            
            function showSlide(index) {
                slides.forEach((slide, i) => {
                    if (i === index) {
                        slide.classList.add('active');
                    } else {
                        slide.classList.remove('active');
                    }
                });
            }
            
            function nextSlide() {
                currentSlide = (currentSlide + 1) % slides.length;
                showSlide(currentSlide);
            }
            
            // Change slide every 5 seconds
            if (slides.length > 1) {
                setInterval(nextSlide, 5000);
            }
        });
    </script>

</x-app-layout>
