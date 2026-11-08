@extends('layouts.app')

@section('title', $service['title'] . ' | Mechatron Services')
@section('meta_description', $service['description'] ?? 'Layanan resmi Mechatron: ' . $service['title'])

@php
    $whatsappUrl = 'https://wa.me/6281112143111?text=' . urlencode('Halo Mechatron, saya tertarik untuk konsultasi mengenai Layanan ' . $service['title'] . '.');
@endphp

@section('content')
    <!-- 1. Hero Section (Seperti Gambar 1: Full-Screen Tesla Style Hero dengan Animasi Smooth) -->
    <section class="relative w-full h-screen min-h-[640px] flex items-center justify-center overflow-hidden bg-neutral-950">
        <!-- Background Image Edge-to-Edge with Gentle Zoom Effect -->
        <div class="absolute inset-0 z-0">
            @if(!empty($service['video']))
                <video
                    src="{{ $service['video'] }}"
                    @if(!empty($service['image'])) poster="{{ $service['image'] }}" @endif
                    autoplay
                    muted
                    loop
                    playsinline
                    class="w-full h-full object-cover object-center"
                ></video>
            @else
                <img
                    src="{{ $service['image'] }}"
                    alt="{{ $service['title'] }}"
                    class="w-full h-full object-cover object-center scale-100 transition-transform duration-1000 ease-out"
                    x-data="{ loaded: false }"
                    x-init="setTimeout(() => loaded = true, 50)"
                    :class="loaded ? 'scale-100' : 'scale-105'"
                />
            @endif
            <!-- Dark Vignette Overlay -->
            <div class="absolute inset-0 bg-black/45"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-black/75 via-transparent to-black/80"></div>
        </div>

        <!-- Center Content (Staggered Fade-in & Slide-up Animation) -->
        <div
            x-data="{ shown: false }"
            x-init="setTimeout(() => shown = true, 80)"
            class="relative z-10 max-w-4xl mx-auto px-6 text-center flex flex-col items-center pt-16 sm:pt-20"
        >
            <!-- Title -->
            <h1
                class="text-3xl sm:text-5xl md:text-6xl lg:text-[64px] font-bold text-white tracking-tight leading-tight text-center drop-shadow-md transition-all duration-700 ease-out transform"
                :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
            >
                {{ $service['title'] }}
            </h1>

            <!-- Subtitle -->
            @if(!empty($service['tagline']) || !empty($service['description']))
                <p
                    class="mt-4 sm:mt-5 text-sm sm:text-base md:text-lg text-white/90 max-w-2xl mx-auto leading-relaxed font-normal text-center drop-shadow transition-all duration-700 delay-150 ease-out transform"
                    :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                >
                    {{ $service['tagline'] ?? $service['description'] }}
                </p>
            @endif

            <!-- Button: Tesla-Style Rectangular with Rounded Corners & Interactive States -->
            <div
                class="mt-8 sm:mt-10 transition-all duration-700 delay-300 ease-out transform"
                :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
            >
                <a
                    href="{{ $whatsappUrl }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="inline-block bg-white hover:bg-neutral-100 hover:scale-[1.03] active:scale-[0.98] text-neutral-900 font-medium text-sm sm:text-[15px] px-8 sm:px-12 py-3 rounded-[4px] shadow-md hover:shadow-xl transition-all duration-300 text-center tracking-normal text-decoration-none"
                >
                    {{ __('Konsultasi Layanan') }}
                </a>
            </div>
        </div>

        <!-- Down Arrow Indicator (Scroll to Detail dengan Bounce Halus) -->
        <div
            x-data="{ shown: false }"
            x-init="setTimeout(() => shown = true, 500)"
            class="absolute bottom-6 sm:bottom-8 left-1/2 -translate-x-1/2 z-10 transition-all duration-700 transform"
            :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4'"
        >
            <a
                href="#penjelasan-detail"
                class="text-white/80 hover:text-white transition-all duration-300 inline-flex flex-col items-center group text-decoration-none hover:scale-110"
                aria-label="Gulir ke detail layanan"
            >
                <span class="text-[10px] sm:text-[11px] uppercase tracking-widest text-white/60 font-medium mb-1.5 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    {{ __('Detail Layanan') }}
                </span>
                <svg class="w-6 h-6 transition-transform duration-300 group-hover:translate-y-1 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </a>
        </div>
    </section>

    <!-- 2. Penjelasan Detail Service (Layout Gambar 2 dengan Background Putih Bersih & Scroll Reveal) -->
    <section id="penjelasan-detail" class="py-20 sm:py-28 lg:py-32 bg-white text-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Narrative Lead / Overview Intro (Fade-in saat di-scroll) -->
            @if(!empty($service['longDescription']))
                <div
                    x-data="{
                        visible: false,
                        init() {
                            const observer = new IntersectionObserver(([entry]) => {
                                if (entry.isIntersecting) {
                                    this.visible = true;
                                    observer.disconnect();
                                }
                            }, { threshold: 0.2 });
                            observer.observe(this.$el);
                        }
                    }"
                    class="max-w-3xl mx-auto text-center mb-16 sm:mb-24 transition-all duration-1000 ease-out transform"
                    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                >
                    <p class="text-base sm:text-lg text-slate-600 leading-relaxed font-normal">
                        {{ $service['longDescription'] }}
                    </p>
                </div>
            @endif

            <!-- Alternating Rows (Zig-Zag dengan Smooth Scroll Reveal) -->
            @php
                $features = $service['deepFeatures'] ?? [];
            @endphp

            @if(!empty($features))
                <div class="space-y-20 sm:space-y-28 lg:space-y-32">
                    @foreach($features as $index => $feature)
                        @if($index % 2 === 0)
                            {{-- Row Genap (0, 2): Text di KIRI, Image di KANAN --}}
                            <div
                                x-data="{
                                    visible: false,
                                    init() {
                                        const observer = new IntersectionObserver(([entry]) => {
                                            if (entry.isIntersecting) {
                                                this.visible = true;
                                                observer.disconnect();
                                            }
                                        }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });
                                        observer.observe(this.$el);
                                    }
                                }"
                                class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-14 items-center transition-all duration-1000 ease-out transform"
                                :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'"
                            >
                                <!-- Text Column (Kiri) -->
                                <div class="lg:col-span-5 order-2 lg:order-1 flex flex-col justify-center">
                                    <h2 class="text-2xl sm:text-3xl lg:text-[30px] font-bold text-slate-950 tracking-tight leading-snug mb-3 sm:mb-4">
                                        {{ $feature['title'] }}
                                    </h2>
                                    <p class="text-sm sm:text-base text-slate-600 leading-relaxed mb-5 font-normal">
                                        {{ $feature['description'] }}
                                    </p>

                                    @if(!empty($feature['bullets']))
                                        <ul class="space-y-2.5 mb-6">
                                            @foreach($feature['bullets'] as $bullet)
                                                <li class="flex items-start gap-2.5 text-xs sm:text-sm text-slate-700 hover:text-slate-950 transition-colors">
                                                    <span class="text-[#0070D5] font-bold shrink-0 mt-0.5">•</span>
                                                    <span>{{ $bullet }}</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif

                                    
                                </div>

                                <!-- Image Column (Kanan) -->
                                <div class="lg:col-span-7 order-1 lg:order-2">
                                    <div class="rounded-xl sm:rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl border border-slate-100 bg-slate-100 aspect-[16/10] group transition-all duration-500">
                                        <img
                                            src="{{ $feature['image'] ?? $service['image'] }}"
                                            alt="{{ $feature['title'] }}"
                                            class="w-full h-full object-cover object-center transform group-hover:scale-105 transition-transform duration-700 ease-out"
                                            loading="lazy"
                                        />
                                    </div>
                                </div>
                            </div>
                        @else
                            {{-- Row Ganjil (1, 3): Image di KIRI, Text di KANAN --}}
                            <div
                                x-data="{
                                    visible: false,
                                    init() {
                                        const observer = new IntersectionObserver(([entry]) => {
                                            if (entry.isIntersecting) {
                                                this.visible = true;
                                                observer.disconnect();
                                            }
                                        }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });
                                        observer.observe(this.$el);
                                    }
                                }"
                                class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-14 items-center transition-all duration-1000 ease-out transform"
                                :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'"
                            >
                                <!-- Image Column (Kiri) -->
                                <div class="lg:col-span-7 order-1 lg:order-1">
                                    <div class="rounded-xl sm:rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl border border-slate-100 bg-slate-100 aspect-[16/10] group transition-all duration-500">
                                        <img
                                            src="{{ $feature['image'] ?? $service['image'] }}"
                                            alt="{{ $feature['title'] }}"
                                            class="w-full h-full object-cover object-center transform group-hover:scale-105 transition-transform duration-700 ease-out"
                                            loading="lazy"
                                        />
                                    </div>
                                </div>

                                <!-- Text Column (Kanan) -->
                                <div class="lg:col-span-5 order-2 lg:order-2 flex flex-col justify-center">
                                    <h2 class="text-2xl sm:text-3xl lg:text-[30px] font-bold text-slate-950 tracking-tight leading-snug mb-3 sm:mb-4">
                                        {{ $feature['title'] }}
                                    </h2>
                                    <p class="text-sm sm:text-base text-slate-600 leading-relaxed mb-5 font-normal">
                                        {{ $feature['description'] }}
                                    </p>

                                    @if(!empty($feature['bullets']))
                                        <ul class="space-y-2.5 mb-6">
                                            @foreach($feature['bullets'] as $bullet)
                                                <li class="flex items-start gap-2.5 text-xs sm:text-sm text-slate-700 hover:text-slate-950 transition-colors">
                                                    <span class="text-[#0070D5] font-bold shrink-0 mt-0.5">•</span>
                                                    <span>{{ $bullet }}</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif

                                    
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    <!-- 3. Bottom Banner Penutup (Clean Light dengan Smooth Reveal) -->
    <section
        x-data="{
            visible: false,
            init() {
                const observer = new IntersectionObserver(([entry]) => {
                    if (entry.isIntersecting) {
                        this.visible = true;
                        observer.disconnect();
                    }
                }, { threshold: 0.2 });
                observer.observe(this.$el);
            }
        }"
        class="py-20 sm:py-24 bg-slate-50 text-slate-900 text-center border-t border-slate-200 transition-all duration-1000 ease-out transform"
        :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
    >
        <div class="max-w-3xl mx-auto px-6">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold tracking-tight mb-4 text-slate-950">
                {{ __('Mulai Konsultasi Layanan') }} {{ $service['title'] }}
            </h2>
            <p class="text-sm sm:text-base text-slate-600 max-w-xl mx-auto mb-8 leading-relaxed">
                {{ __('Diskusikan kebutuhan armada dan operasional Anda langsung bersama tim teknis resmi Mechatron.') }}
            </p>
            <a
                href="{{ $whatsappUrl }}"
                target="_blank"
                rel="noopener noreferrer"
                class="inline-flex items-center gap-2 bg-[#0070D5] hover:bg-[#005bb5] text-white text-sm sm:text-[15px] font-medium px-8 py-3.5 rounded-full shadow-md hover:shadow-xl transition-all duration-300 text-decoration-none hover:scale-105 active:scale-95"
            >
                <span>{{ __('Hubungi Kami via WhatsApp') }}</span>
                <span class="transition-transform duration-200 group-hover:translate-x-1">›</span>
            </a>
        </div>
    </section>
@endsection
