@php
    $images = [
        [
            'id' => 'kantor-gedung',
            'src' => asset('images/mechatron_kantor_gedung.jpg'),
            'alt' => 'Gedung Kantor Mechatron',
        ],
        [
            'id' => 'kantor-interior',
            'src' => asset('images/mechatron_kantor_interior.jpg'),
            'alt' => 'Interior Kantor PT Bandung Mekatronika Teknologi',
        ],
        [
            'id' => 'pabrik-gudang',
            'src' => asset('images/mechatron_pabrik_gudang.jpg'),
            'alt' => 'Gudang & Fasilitas Mechatron',
        ],
    ];
@endphp

<section
    id="facility-gallery"
    class="relative w-full py-14 sm:py-24 bg-[#F8FAFC] overflow-x-clip select-none"
    style="background-image: radial-gradient(#cbd5e1 1.2px, transparent 1.2px); background-size: 24px 24px;"
    x-data="{
        currentIndex: 0,
        total: {{ count($images) }},
        images: {{ Js::from($images) }},
        isPaused: false,
        timer: null,
        touchStartX: null,
        touchEndX: null,
        isMobile: typeof window !== 'undefined' ? window.innerWidth < 640 : false,

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
                if (!this.isPaused) {
                    this.currentIndex = (this.currentIndex + 1) % this.total;
                }
            }, 4500);
        },
        restartTimer() {
            this.startTimer();
        },
        getCardTransform(index) {
            let diff = index - this.currentIndex;
            if (diff === -2) diff = 1;
            if (diff === 2) diff = -1;

            const isMob = this.isMobile;
            const xOffset = isMob ? 36 : 52;
            const zOffset = isMob ? -40 : -60;
            const rot = isMob ? 18 : 24;
            const scale = isMob ? 0.82 : 0.85;

            if (diff === 0) {
                return 'transform: translate3d(0%, 0, 0px) scale(1) rotateY(0deg); z-index: 30; opacity: 1; filter: brightness(100%); cursor: default;';
            } else if (diff === -1) {
                return `transform: translate3d(-${xOffset}%, 0, ${zOffset}px) scale(${scale}) rotateY(${rot}deg); z-index: 20; opacity: 0.85; filter: brightness(75%); cursor: pointer;`;
            } else if (diff === 1) {
                return `transform: translate3d(${xOffset}%, 0, ${zOffset}px) scale(${scale}) rotateY(-${rot}deg); z-index: 20; opacity: 0.85; filter: brightness(75%); cursor: pointer;`;
            } else {
                return 'opacity: 0; transform: translate3d(0%, 0, -250px) scale(0.5); z-index: 0; pointer-events: none;';
            }
        },
        init() {
            this.startTimer();
            window.addEventListener('resize', () => {
                this.isMobile = window.innerWidth < 640;
            });
            window.addEventListener('keydown', (e) => {
                if (e.key === 'ArrowLeft') this.prevSlide();
                if (e.key === 'ArrowRight') this.nextSlide();
            });
        }
    }"
    @mouseenter="isPaused = true"
    @mouseleave="isPaused = false"
>
    <!-- Section Title -->
    <div class="text-center max-w-2xl mx-auto px-4 mb-8 sm:mb-14">
        
        <h2 class="text-[26px] sm:text-[38px] md:text-[44px] font-bold text-gray-900 tracking-tight leading-tight">
            Kantor & Pabrik Mechatron
        </h2>
    </div>

    <!-- 3D Fan / Coverflow Gallery Stage -->
    <div
        class="relative w-full overflow-hidden py-4 sm:py-6"
        @touchstart="touchStartX = $event.touches[0].clientX"
        @touchend="touchEndX = $event.changedTouches[0].clientX; if (touchStartX - touchEndX > 45) nextSlide(); if (touchEndX - touchStartX > 45) prevSlide();"
    >
        <div
            class="relative mx-auto flex items-center justify-center h-[300px] xs:h-[340px] sm:h-[480px] md:h-[540px] max-w-[1300px]"
            style="perspective: 1200px; transform-style: preserve-3d;"
        >
            <template x-for="(item, index) in images" :key="item.id">
                <div
                    class="absolute w-[200px] xs:w-[230px] sm:w-[380px] md:w-[440px] h-[270px] xs:h-[310px] sm:h-[460px] md:h-[520px] rounded-[24px] sm:rounded-[42px] overflow-hidden shadow-2xl transition-all duration-500 ease-out select-none will-change-transform"
                    :style="getCardTransform(index)"
                    @click="if (index !== currentIndex) setSlide(index);"
                >
                    <!-- Pure Image Card with Rounded Corners, No Caption/Description -->
                    <div class="relative w-full h-full bg-neutral-900 rounded-[24px] sm:rounded-[42px] overflow-hidden border border-black/10 shadow-lg">
                        <img
                            :src="item.src"
                            :alt="item.alt"
                            class="w-full h-full object-cover object-center pointer-events-none"
                            loading="lazy"
                        />
                    </div>
                </div>
            </template>
        </div>
    </div>

    <!-- Bottom Pill Navigation Controls -->
    <div class="flex items-center justify-center mt-5 sm:mt-8">
        <div class="inline-flex items-center gap-3 sm:gap-4 bg-white/95 border border-gray-200/90 rounded-full px-4 sm:px-5 py-2 sm:py-2.5 shadow-md backdrop-blur-md">
            <!-- Left Arrow Chevron -->
            <button
                type="button"
                @click="prevSlide()"
                class="text-gray-500 hover:text-gray-900 transition-colors p-1 flex items-center justify-center cursor-pointer hover:scale-110 active:scale-95"
                title="Sebelumnya"
                aria-label="Previous Slide"
            >
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <!-- Dots & Active Elongated Pill (3 items) -->
            <div class="flex items-center gap-1.5 sm:gap-2">
                <template x-for="(item, idx) in images" :key="'dot-' + idx">
                    <button
                        type="button"
                        @click="setSlide(idx)"
                        class="transition-all duration-300 rounded-full cursor-pointer"
                        :class="currentIndex === idx
                            ? 'w-6 sm:w-8 h-2 bg-[#1e293b]'
                            : 'w-2 h-2 bg-gray-300 hover:bg-gray-400'"
                        :title="'Slide ' + (idx + 1)"
                        :aria-label="'Go to slide ' + (idx + 1)"
                    ></button>
                </template>
            </div>

            <!-- Right Arrow Chevron -->
            <button
                type="button"
                @click="nextSlide()"
                class="text-gray-500 hover:text-gray-900 transition-colors p-1 flex items-center justify-center cursor-pointer hover:scale-110 active:scale-95"
                title="Berikutnya"
                aria-label="Next Slide"
            >
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </div>
</section>
