@props(['products' => []])

@php
    $slides = [
        [
            'id' => 'agri-h30',
            'tickerLabel' => 'AGRI H-30',
            'title' => 'MECHATRON AGRI H-30',
            'tagline' => 'Heavy Payload, Maximum Field Productivity.',
            'image' => asset('images/heromecha1.jpg'),
            'productInfo' => $products['agri-h30'] ?? [
                'id' => 'agri-h30',
                'modelCode' => 'BMT-1525',
                'title' => 'MECHATRON AGRI H-30 (BMT-1525)',
                'tagline' => '30-Litre Hexacopter Agriculture Drone',
                'image' => asset('images/heromecha1.jpg'),
            ],
        ],
        [
            'id' => 'agri-h15',
            'tickerLabel' => 'AGRI H-15',
            'title' => 'MECHATRON AGRI H-15',
            'tagline' => 'Agile, Foldable & High Efficiency.',
            'image' => asset('images/heromecha2.jpg'),
            'productInfo' => $products['agri-h15'] ?? [
                'id' => 'agri-h15',
                'modelCode' => 'BMT-1323',
                'title' => 'MECHATRON AGRI H-15 (BMT-1323)',
                'tagline' => '15-Litre Hexacopter Agriculture Drone',
                'image' => asset('images/heromecha2.jpg'),
            ],
        ],
        [
            'id' => 'agri-series',
            'tickerLabel' => 'MECHATRON AGRI',
            'title' => 'MECHATRON AGRI SERIES',
            'tagline' => 'AGRI H-30 & AGRI H-15: Inovasi Pertanian Modern',
            'image' => asset('images/heromecha3.jpg'),
            'productInfo' => $products['agri-h30'] ?? [
                'id' => 'agri-h30',
                'modelCode' => 'BMT-1525',
                'title' => 'MECHATRON AGRI SERIES (H-30 & H-15)',
                'tagline' => 'Solusi Drone Pertanian Presisi Menyeluruh Masa Depan Indonesia',
                'image' => asset('images/heromecha3.jpg'),
            ],
        ],
    ];
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
            }, 5000);
        },
        restartTimer() {
            this.startTimer();
        },
        init() {
            this.startTimer();
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
            <div class="relative w-full h-full overflow-hidden">
                <img
                    src="{{ $slide['image'] }}"
                    alt="{{ $slide['title'] }}"
                    class="w-full h-full object-cover object-center filter brightness-[0.88] contrast-[1.02]"
                />
                <!-- Cinematic Vignette Gradients for Text Legibility -->
                <div class="absolute inset-0 bg-gradient-to-b from-black/75 via-black/25 to-black/85 pointer-events-none z-10"></div>
            </div>
        </div>
    @endforeach

    <!-- Hero Content - Perfectly Centered in Dead Middle (Desktop & Mobile) -->
    <div class="absolute inset-0 z-20 flex flex-col items-center justify-center px-4 sm:px-6 md:px-8 text-center pointer-events-none">
        @foreach($slides as $idx => $slide)
            <div
                x-show="currentIndex === {{ $idx }}"
                x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 translate-y-3"
                x-transition:enter-end="opacity-100 translate-y-0"
                class="w-full max-w-2xl mx-auto flex flex-col items-center justify-center text-center pointer-events-auto"
                style="display: none;"
            >
                <h1 class="text-[32px] xs:text-[38px] sm:text-[48px] md:text-[58px] lg:text-[64px] font-extrabold text-white tracking-[-0.02em] leading-[1.08] mb-2 sm:mb-2.5 drop-shadow-2xl text-center">
                    {{ $slide['title'] }}
                </h1>
                <p class="text-[14px] sm:text-[17px] md:text-[19px] font-medium text-[#EDEDED] tracking-normal mb-5 sm:mb-6 drop-shadow-md max-w-xl leading-relaxed text-center">
                    {{ $slide['tagline'] }}
                </p>

                <!-- Action Buttons -->
                <div class="flex flex-wrap items-center justify-center gap-3 sm:gap-4">
                    <a
                        href="https://wa.me/6281112143111?text={{ urlencode('Halo Mechatron, saya tertarik untuk konsultasi dan pemesanan unit ' . $slide['title'] . '. Mohon informasi ketersediaan unit dan jadwal demo lapangan.') }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex items-center gap-2 px-7 sm:px-9 py-2.5 sm:py-3.5 rounded-full bg-[#0070D5] hover:bg-[#005bb5] text-white text-[13px] sm:text-[15px] font-semibold transition-all duration-300 shadow-xl hover:scale-105 active:scale-95 cursor-pointer text-decoration-none"
                    >
                        <span>Pesan via WhatsApp</span>
                        <span>›</span>
                    </a>

                    <button
                        type="button"
                        @click="$store.productModal.show(slides[{{ $idx }}].productInfo)"
                        class="inline-flex items-center gap-2 px-7 sm:px-9 py-2.5 sm:py-3.5 rounded-full bg-white/10 hover:bg-white/20 text-white border border-white/40 hover:border-white backdrop-blur-md text-[13px] sm:text-[15px] font-semibold transition-all duration-300 shadow-lg hover:scale-105 active:scale-95 cursor-pointer"
                    >
                        <span>Lihat Spesifikasi</span>
                    </button>
                </div>
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

    <!-- Bottom Area -->
    <div class="absolute bottom-0 left-0 right-0 z-20 w-full pb-6 sm:pb-10 px-6 sm:px-12 md:px-16 flex items-end justify-between pointer-events-none">
        <!-- Desktop Left Switcher Ticker -->
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

        <!-- Mobile Slide Indicator Progress Bar -->
        <div class="md:hidden w-full flex items-center justify-center gap-2 pb-2 pointer-events-auto">
            @foreach($slides as $idx => $slide)
                <button
                    type="button"
                    @click="setSlide({{ $idx }})"
                    aria-label="Go to slide {{ $idx + 1 }}"
                    class="relative h-[3px] w-8 bg-[#555555]/60 hover:bg-[#777777] rounded-full overflow-hidden cursor-pointer focus:outline-none p-0 transition-colors"
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
