@props(['slides' => null])

@php
    if (!$slides) {
        $slides = [
            [
                'id' => 'agrikultur',
                'categorySlug' => 'agrikultur',
                'tickerLabel' => 'AGRIKULTUR',
                'titlePrefix' => 'AGRIKULTUR ',
                'titleSuffix' => 'SERIES',
                'tagline' => 'Solusi Drone Penyemprotan & Penebaran Pupuk Presisi untuk Perkebunan Skala Besar.',
                'image' => asset('images/heromecha1.jpg'),
            ],
            [
                'id' => 'fotografi',
                'categorySlug' => 'fotografi',
                'tickerLabel' => 'FOTOGRAFI',
                'titlePrefix' => 'FOTOGRAFI ',
                'titleSuffix' => 'SERIES',
                'tagline' => 'Drone Kamera Resolusi Tinggi 45MP & Gimbal Sinematik untuk Visual Udara Terbaik.',
                'image' => asset('images/matrice-400-hero.png'),
            ],
            [
                'id' => 'pengiriman',
                'categorySlug' => 'pengiriman',
                'tickerLabel' => 'PENGIRIMAN',
                'titlePrefix' => 'PENGIRIMAN ',
                'titleSuffix' => 'SERIES',
                'tagline' => 'Transportasi Kargo Berat Otonom & Kurir Cepat untuk Wilayah Terpencil dan Industri.',
                'image' => asset('images/cargo_drone_c50.jpg'),
            ],
            [
                'id' => 'suku-cadang',
                'categorySlug' => 'suku-cadang',
                'tickerLabel' => 'SUKU CADANG',
                'titlePrefix' => 'SUKU CADANG',
                'titleSuffix' => '',
                'tagline' => 'Baterai Cerdas, Generator Fast Charger Inverter, Remote GCS, & Suku Cadang Orisinal.',
                'image' => asset('images/featured_combo_kit.jpg'),
            ],
        ];
    }
@endphp

<section
    x-data="{
        currentIndex: 0,
        total: {{ count($slides) }},
        slides: {{ Js::from($slides) }},
        timer: null,
        touchStartX: null,
        dragOffset: 0,
        isDragging: false,
        nextSlide() {
            this.currentIndex = (this.currentIndex + 1) % this.total;
            this.restartTimer();
        },
        prevSlide() {
            this.currentIndex = (this.currentIndex - 1 + this.total) % this.total;
            this.restartTimer();
        },
        setSlide(idx) {
            this.currentIndex = idx;
            this.restartTimer();
        },
        startTimer() {
            if (this.timer) clearInterval(this.timer);
            this.timer = setInterval(() => {
                this.currentIndex = (this.currentIndex + 1) % this.total;
            }, 5500);
        },
        restartTimer() {
            this.startTimer();
        },
        init() {
            this.startTimer();
        },
        scrollToCatalog() {
            const el = document.getElementById('catalog');
            if (el) {
                el.scrollIntoView({ behavior: 'smooth' });
            }
        }
    }"
    class="relative w-full h-[100vh] min-h-[640px] sm:min-h-[680px] max-h-[1080px] bg-[#0A0E14] text-white overflow-hidden select-none cursor-grab active:cursor-grabbing"
    @touchstart="touchStartX = $event.touches[0].clientX; isDragging = true;"
    @touchmove="if (isDragging && touchStartX !== null) dragOffset = $event.touches[0].clientX - touchStartX;"
    @touchend="if (dragOffset < -50) nextSlide(); else if (dragOffset > 50) prevSlide(); touchStartX = null; isDragging = false; dragOffset = 0;"
    @mousedown="touchStartX = $event.clientX; isDragging = true;"
    @mousemove="if (isDragging && touchStartX !== null) dragOffset = $event.clientX - touchStartX;"
    @mouseup="if (dragOffset < -50) nextSlide(); else if (dragOffset > 50) prevSlide(); touchStartX = null; isDragging = false; dragOffset = 0;"
>
    <!-- Background Slides Track -->
    @foreach($slides as $idx => $slide)
        <div
            x-show="currentIndex === {{ $idx }}"
            x-transition:enter="transition-opacity duration-700 ease-in-out"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity duration-700 ease-in-out"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="absolute inset-0 z-0"
            style="display: none;"
        >
            <div class="relative w-full h-full overflow-hidden bg-slate-950">
                <img
                    src="{{ $slide['image'] }}"
                    alt="{{ $slide['titlePrefix'] }}{{ $slide['titleSuffix'] }}"
                    class="w-full h-full object-cover object-center filter brightness-[0.84] contrast-[1.03]"
                />
                <!-- Cinematic Vignette Gradients for Text Legibility -->
                <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-black/35 to-black/85 pointer-events-none z-10"></div>
            </div>
        </div>
    @endforeach

    <!-- Hero Content - Positioned higher up (Desktop & Mobile) -->
    <div class="absolute inset-0 z-20 flex flex-col items-center justify-start pt-28 sm:pt-32 md:pt-36 lg:pt-40 px-4 sm:px-6 md:px-8 text-center pointer-events-none">
        @foreach($slides as $idx => $slide)
            <div
                x-show="currentIndex === {{ $idx }}"
                x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 translate-y-3"
                x-transition:enter-end="opacity-100 translate-y-0"
                class="w-full max-w-4xl mx-auto flex flex-col items-center justify-start text-center pointer-events-auto"
                style="display: none;"
            >
                <!-- Hero Title with unbolded "SERIES" -->
                <h1 class="text-[22px] xs:text-[24px] sm:text-[30px] md:text-[36px] lg:text-[42px] text-white tracking-[-0.01em] leading-[1.15] mb-2 sm:mb-2.5 drop-shadow-2xl text-center uppercase">
                    <span class="font-extrabold">{{ $slide['titlePrefix'] }}</span>@if(!empty($slide['titleSuffix']))<span class="font-light text-white/90">{{ $slide['titleSuffix'] }}</span>@endif
                </h1>

                <!-- Tagline Subtitle -->
                <p class="text-[12px] sm:text-[13px] md:text-[14px] lg:text-[15px] font-medium text-[#EDEDED] tracking-normal mb-4 sm:mb-5 drop-shadow-md max-w-xl leading-relaxed text-center">
                    {{ $slide['tagline'] }}
                </p>
            </div>
        @endforeach
    </div>

    <!-- Slide Navigation Arrow Left -->
    <button
        type="button"
        @click="prevSlide()"
        aria-label="Previous Slide"
        class="hidden md:flex absolute left-4 lg:left-8 top-1/2 -translate-y-1/2 z-30 w-12 h-14 sm:w-14 sm:h-16 items-center justify-center text-white/60 hover:text-white transition-all duration-300 focus:outline-none cursor-pointer group hover:scale-110 active:scale-90"
    >
        <svg class="w-8 h-8 sm:w-10 sm:h-10 transition-transform duration-300 group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
    </button>

    <!-- Slide Navigation Arrow Right -->
    <button
        type="button"
        @click="nextSlide()"
        aria-label="Next Slide"
        class="hidden md:flex absolute right-4 lg:right-8 top-1/2 -translate-y-1/2 z-30 w-12 h-14 sm:w-14 sm:h-16 items-center justify-center text-white/60 hover:text-white transition-all duration-300 focus:outline-none cursor-pointer group hover:scale-110 active:scale-90"
    >
        <svg class="w-8 h-8 sm:w-10 sm:h-10 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
    </button>

    <!-- Bottom Area: Ticker + Center Animated Scroll Indicator + Mobile Progress -->
    <div class="absolute bottom-0 left-0 right-0 z-20 w-full pb-6 sm:pb-8 px-6 sm:px-12 md:px-16 flex items-end justify-between pointer-events-none">
        <!-- Desktop Left Switcher Ticker (4 Kategori) -->
        <div class="hidden md:flex flex-col space-y-1.5 text-left pointer-events-auto">
            @foreach($slides as $idx => $slide)
                <button
                    type="button"
                    @click="setSlide({{ $idx }})"
                    :class="currentIndex === {{ $idx }} ? 'text-white font-semibold' : 'text-[#8B939B] hover:text-white/80 font-normal'"
                    class="text-[13px] sm:text-[14px] text-left transition-all duration-300 cursor-pointer flex items-center gap-2"
                >
                    <span x-show="currentIndex === {{ $idx }}" class="inline-block w-[2px] h-[14px] bg-white rounded-full animate-fadeIn"></span>
                    <span>{{ $slide['tickerLabel'] }}</span>
                </button>
            @endforeach
        </div>

        <!-- Center: Animated Scroll Down Indicator -->
        <div class="absolute left-1/2 -translate-x-1/2 bottom-5 sm:bottom-7 pointer-events-auto z-30 flex flex-col items-center">
            <a
                href="#catalog"
                @click.prevent="scrollToCatalog()"
                class="group flex flex-col items-center gap-1.5 text-white/80 hover:text-white transition-all duration-300 text-decoration-none cursor-pointer select-none"
                aria-label="Scroll ke Katalog Produk"
            >
                <span class="text-[10px] sm:text-[11px] font-semibold uppercase tracking-[0.2em] text-white/75 group-hover:text-white transition-colors">
                    Scroll
                </span>
                <!-- Mouse scroll animation box -->
                <div class="w-5 h-8 sm:w-5.5 sm:h-9 rounded-full border-2 border-white/70 group-hover:border-white flex items-start justify-center p-1 transition-colors shadow-sm">
                    <div class="w-1.5 h-2.5 rounded-full bg-white product-hero-scroll-dot"></div>
                </div>
                <!-- Subtle chevron -->
                <svg class="w-3.5 h-3.5 text-white/70 group-hover:text-white transition-transform duration-300 group-hover:translate-y-0.5 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" />
                </svg>
            </a>
        </div>

        <!-- Mobile Slide Indicator Progress Bar -->
        <div class="md:hidden w-full flex items-center justify-center gap-2 pb-2 pointer-events-auto">
            @foreach($slides as $idx => $slide)
                <button
                    type="button"
                    @click="setSlide({{ $idx }})"
                    aria-label="Go to slide {{ $idx + 1 }}"
                    class="relative h-[3px] w-7 bg-[#555555]/60 hover:bg-[#777777] rounded-full overflow-hidden cursor-pointer focus:outline-none p-0 transition-colors"
                >
                    <span
                        x-show="currentIndex === {{ $idx }}"
                        :key="'bar-' + currentIndex"
                        class="absolute inset-y-0 left-0 bg-white rounded-full hero-progress-fill"
                    ></span>
                </button>
            @endforeach
        </div>
    </div>
</section>

<style>
@keyframes productHeroScrollAnim {
    0% {
        transform: translateY(0);
        opacity: 1;
    }
    50% {
        transform: translateY(8px);
        opacity: 0.8;
    }
    100% {
        transform: translateY(0);
        opacity: 0.3;
    }
}
.product-hero-scroll-dot {
    animation: productHeroScrollAnim 1.7s cubic-bezier(0.65, 0, 0.35, 1) infinite;
}
</style>
