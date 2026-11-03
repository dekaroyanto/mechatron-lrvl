@php
    $images = [
        [
            'src' => asset('images/mechatron_kantor_gedung.jpg'),
            'alt' => 'Gedung Kantor Mechatron',
        ],
        [
            'src' => asset('images/mechatron_kantor_interior.jpg'),
            'alt' => 'Interior Ruang Kantor Mechatron',
        ],
        [
            'src' => asset('images/mechatron_pabrik_gudang.jpg'),
            'alt' => 'Gudang dan Fasilitas Pabrik Mechatron',
        ],
    ];

    // Duplikasi 4x (12 kartu) untuk seamless infinite loop
    $loopImages = array_merge($images, $images, $images, $images);
@endphp

<section
    id="facility-carousel"
    class="relative w-full py-12 sm:py-16 bg-white overflow-hidden select-none border-b border-gray-100"
    x-data="{
        isPaused: false,
        speed: 0.85, // Kecepatan gerak perlahan (pixels per frame)
        animId: null,

        startSlide() {
            const el = this.$refs.track;
            if (!el) return;

            const step = () => {
                if (!this.isPaused) {
                    // Bergerak terus ke kanan: scrollLeft berkurang sehingga gambar meluncur ke kanan
                    el.scrollLeft -= this.speed;

                    // Saat mencapai ujung kiri, reset ke posisi tengah tanpa jeda
                    if (el.scrollLeft <= 2) {
                        el.scrollLeft = el.scrollWidth / 2;
                    }
                }
                this.animId = requestAnimationFrame(step);
            };

            this.animId = requestAnimationFrame(step);
        },

        // Tombol panah manual (nudge)
        nudgeLeft() {
            const el = this.$refs.track;
            if (el) {
                el.scrollBy({ left: 420, behavior: 'smooth' });
            }
        },
        nudgeRight() {
            const el = this.$refs.track;
            if (el) {
                el.scrollBy({ left: -420, behavior: 'smooth' });
            }
        },

        init() {
            this.$nextTick(() => {
                const el = this.$refs.track;
                if (el) {
                    // Mulai dari separuh track agar siap meluncur ke kanan terus menerus
                    el.scrollLeft = el.scrollWidth / 2;
                }
                this.startSlide();
            });
        }
    }"
    @mouseenter="isPaused = true"
    @mouseleave="isPaused = false"
>
    <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Horizontal Carousel Container (Sesuai Referensi Gambar dengan Panah di Kiri & Kanan) -->
        <div class="relative flex items-center justify-between gap-3 sm:gap-5">
            <!-- Left Chevron Arrow (<) -->
            <button
                type="button"
                @click="nudgeLeft()"
                class="shrink-0 w-9 h-9 sm:w-11 sm:h-11 rounded-full bg-white hover:bg-slate-50 text-slate-700 hover:text-[#0070D5] border border-slate-200/90 shadow-sm hover:shadow-md flex items-center justify-center transition-all duration-200 hover:scale-110 active:scale-95 z-20 cursor-pointer"
                aria-label="Geser ke Kiri"
                title="Geser ke Kiri"
            >
                <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <!-- Continuous Sliding Track (Hanya Gambar Saja Tanpa Tulisan) -->
            <div
                x-ref="track"
                class="flex-1 overflow-x-hidden scrollbar-none py-3 flex items-center gap-5 sm:gap-6"
            >
                @foreach($loopImages as $item)
                    <div class="shrink-0 w-[280px] xs:w-[340px] sm:w-[440px] md:w-[500px] lg:w-[540px]">
                        <!-- Pure Image Card with Rounded Corners (Landscape Format) -->
                        <div class="w-full aspect-[16/10] rounded-2xl sm:rounded-3xl overflow-hidden shadow-md hover:shadow-xl border border-slate-200/80 bg-slate-100 transition-all duration-300 group">
                            <img
                                src="{{ $item['src'] }}"
                                alt="{{ $item['alt'] }}"
                                class="w-full h-full object-cover object-center pointer-events-none transform group-hover:scale-103 transition-transform duration-700 ease-out"
                                loading="lazy"
                            />
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Right Chevron Arrow (>) -->
            <button
                type="button"
                @click="nudgeRight()"
                class="shrink-0 w-9 h-9 sm:w-11 sm:h-11 rounded-full bg-white hover:bg-slate-50 text-slate-700 hover:text-[#0070D5] border border-slate-200/90 shadow-sm hover:shadow-md flex items-center justify-center transition-all duration-200 hover:scale-110 active:scale-95 z-20 cursor-pointer"
                aria-label="Geser ke Kanan"
                title="Geser ke Kanan"
            >
                <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </div>
</section>
