@php
    $facilities = [
        [
            'id' => 1,
            'tag' => 'Head Office & Commercial Area',
            'title' => 'Gedung Kantor Mechatron',
            'description' => 'Pusat operasional dan administrasi korporat di Komplek Summarecon Bandung.',
            'src' => asset('images/mechatron_kantor_gedung.jpg'),
            'alt' => 'Gedung Kantor Pusat Mechatron di Summarecon Bandung',
        ],
        [
            'id' => 2,
            'tag' => 'Workspace & Engineering Lab',
            'title' => 'Interior & Ruang Inovasi',
            'description' => 'Ruang kerja terintegrasi dan laboratorium pengujian untuk tim rekayasa avionik.',
            'src' => asset('images/mechatron_kantor_interior.jpg'),
            'alt' => 'Interior Ruang Kantor PT Bandung Mekatronika Teknologi',
        ],
        [
            'id' => 3,
            'tag' => 'Workshop & Assembly Plant',
            'title' => 'Gudang & Fasilitas Perakitan',
            'description' => 'Sentra fabrikasi mekanik, perakitan drone, dan penyimpanan suku cadang resmi pabrikan.',
            'src' => asset('images/mechatron_pabrik_gudang.jpg'),
            'alt' => 'Fasilitas Gudang dan Pabrik Workshop Drone Mechatron',
        ],
        [
            'id' => 4,
            'tag' => 'Diagnostic & Precision Tools',
            'title' => 'Laboratorium Servis & Toolkit',
            'description' => 'Peralatan diagnostik terkalibrasi dan toolkit standar pabrikan untuk perawatan drone.',
            'src' => asset('images/service_perawatan_drone_toolkit.jpg'),
            'alt' => 'Toolkit dan Lab Diagnostic Servis Mechatron',
        ],
        [
            'id' => 5,
            'tag' => 'Quality Assurance & Inspection',
            'title' => 'Inspeksi & Uji Kontrol Mutu',
            'description' => 'Pemeriksaan struktural menyeluruh pada rangka serat karbon dan motor brushless.',
            'src' => asset('images/service_perawatan_drone_inspeksi.jpg'),
            'alt' => 'Area Inspeksi dan Quality Control Mechatron',
        ],
        [
            'id' => 6,
            'tag' => 'Flight Test & Calibration Area',
            'title' => 'Sentra Kalibrasi & Uji Terbang',
            'description' => 'Kalibrasi presisi IMU 6-axis dan simulasi kestabilan terbang di area uji Mechatron.',
            'src' => asset('images/service_perawatan_drone_hati.jpg'),
            'alt' => 'Teknisi dan Kalibrasi Uji Terbang Mechatron',
        ],
    ];
@endphp

<section
    id="facility-gallery"
    class="relative w-full py-16 sm:py-24 bg-[#F8FAFC] overflow-hidden select-none border-b border-gray-200"
    style="background-image: radial-gradient(#cbd5e1 1.2px, transparent 1.2px); background-size: 24px 24px;"
    x-data="{
        currentIndex: 0,
        total: {{ count($facilities) }},
        facilities: {{ Js::from($facilities) }},
        timer: null,
        touchStartX: null,
        touchEndX: null,
        isMobile: typeof window !== 'undefined' ? window.innerWidth < 768 : false,

        // Bergerak ke kanan (gambar meluncur ke kanan):
        moveRight() {
            this.currentIndex = (this.currentIndex - 1 + this.total) % this.total;
            this.restartTimer();
        },
        // Bergerak ke kiri:
        moveLeft() {
            this.currentIndex = (this.currentIndex + 1) % this.total;
            this.restartTimer();
        },
        setSlide(idx) {
            this.currentIndex = idx;
            this.restartTimer();
        },
        startTimer() {
            if (this.timer) clearInterval(this.timer);
            // Otomatis bergerak terus ke kanan setiap 2.8 detik
            this.timer = setInterval(() => {
                this.currentIndex = (this.currentIndex - 1 + this.total) % this.total;
            }, 2800);
        },
        restartTimer() {
            this.startTimer();
        },
        getDiff(index) {
            let diff = index - this.currentIndex;
            while (diff > this.total / 2) diff -= this.total;
            while (diff < -this.total / 2) diff += this.total;
            return diff;
        },
        getCardTransform(index) {
            const diff = this.getDiff(index);
            const isMob = this.isMobile;

            if (diff === 0) {
                // Card Tengah (Besar, Berwarna, di Depan)
                return 'transform: translate3d(0%, 0, 0px) scale(1); z-index: 30; opacity: 1; filter: grayscale(0%) brightness(100%); cursor: default;';
            } else if (diff === -1) {
                // Card Kiri (Lebih kecil, Grayscale, Sesuai Gambar)
                const x = isMob ? -62 : -74;
                const scale = isMob ? 0.70 : 0.68;
                return `transform: translate3d(${x}%, 0, -40px) scale(${scale}); z-index: 20; opacity: 0.88; filter: grayscale(100%) brightness(80%); cursor: pointer;`;
            } else if (diff === 1) {
                // Card Kanan (Lebih kecil, Grayscale, Sesuai Gambar)
                const x = isMob ? 62 : 74;
                const scale = isMob ? 0.70 : 0.68;
                return `transform: translate3d(${x}%, 0, -40px) scale(${scale}); z-index: 20; opacity: 0.88; filter: grayscale(100%) brightness(80%); cursor: pointer;`;
            } else {
                // Sisa kartu lainnya tersembunyi
                return 'opacity: 0; transform: translate3d(0%, 0, -120px) scale(0.4); z-index: 0; pointer-events: none;';
            }
        },
        init() {
            this.startTimer();
            window.addEventListener('resize', () => {
                this.isMobile = window.innerWidth < 768;
            });
            window.addEventListener('keydown', (e) => {
                if (e.key === 'ArrowLeft') this.moveLeft();
                if (e.key === 'ArrowRight') this.moveRight();
            });
        }
    }"
>
    <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Title Header -->
        <div class="text-center max-w-3xl mx-auto mb-8 sm:mb-12">
            <span class="inline-flex items-center gap-1.5 text-[12px] sm:text-[13px] font-bold uppercase tracking-wider text-[#0070D5] bg-blue-50 px-3.5 py-1.5 rounded-full mb-3 border border-blue-100">
                Fasilitas & Infrastruktur
            </span>
            <h2 class="text-[28px] sm:text-[38px] md:text-[44px] font-bold text-gray-900 tracking-tight leading-tight">
                Galeri Kantor & Pabrik Mechatron
            </h2>
            <p class="text-[14px] sm:text-[16px] text-gray-600 mt-2 max-w-2xl mx-auto leading-relaxed">
                Pusat perakitan, laboratorium uji presisi, dan fasilitas kantor PT Bandung Mekatronika Teknologi.
            </p>
        </div>

        <!-- 3-Card Focused Landscape Stage (Persis Referensi Gambar) -->
        <div class="relative w-full max-w-[1340px] mx-auto py-2 sm:py-6">
            <!-- Stage Area -->
            <div
                class="relative mx-auto flex items-center justify-center h-[240px] xs:h-[280px] sm:h-[380px] md:h-[450px] lg:h-[500px] w-full"
                style="perspective: 1200px; transform-style: preserve-3d;"
                @touchstart="touchStartX = $event.touches[0].clientX"
                @touchend="touchEndX = $event.changedTouches[0].clientX; if (touchStartX - touchEndX > 45) moveLeft(); if (touchEndX - touchStartX > 45) moveRight();"
            >
                @foreach($facilities as $index => $item)
                    <div
                        class="absolute w-[300px] xs:w-[380px] sm:w-[540px] md:w-[660px] lg:w-[760px] h-[190px] xs:h-[240px] sm:h-[340px] md:h-[415px] lg:h-[475px] rounded-[24px] sm:rounded-[36px] overflow-hidden shadow-2xl transition-all duration-700 ease-out select-none will-change-transform"
                        :style="getCardTransform({{ $index }})"
                        @click="if (currentIndex !== {{ $index }}) setSlide({{ $index }});"
                    >
                        <!-- Landscape Card Box -->
                        <div class="relative w-full h-full bg-neutral-900 rounded-[24px] sm:rounded-[36px] overflow-hidden border border-black/10 shadow-lg group">
                            <!-- Image Landscape -->
                            <img
                                src="{{ $item['src'] }}"
                                alt="{{ $item['alt'] }}"
                                class="w-full h-full object-cover object-center pointer-events-none transform group-hover:scale-102 transition-transform duration-700"
                                loading="lazy"
                            />

                            <!-- Gradient Caption Overlay (Tampak pada Card Tengah) -->
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/25 to-transparent transition-opacity duration-500 pointer-events-none"
                                :class="getDiff({{ $index }}) === 0 ? 'opacity-100' : 'opacity-0'"
                            ></div>

                            <!-- Caption Detail (Hanya ditampilkan pada Card Tengah yang aktif) -->
                            <div
                                class="absolute inset-x-0 bottom-0 z-20 p-5 sm:p-8 md:p-10 text-white flex flex-col justify-end transition-all duration-500 pointer-events-none"
                                :class="getDiff({{ $index }}) === 0 ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4'"
                            >
                                <span class="text-[11px] sm:text-[13px] font-semibold uppercase tracking-wider text-blue-300 mb-1 drop-shadow">
                                    {{ $item['tag'] }}
                                </span>
                                <h3 class="text-lg sm:text-2xl md:text-3xl font-bold tracking-tight text-white drop-shadow-md">
                                    {{ $item['title'] }}
                                </h3>
                                <p class="text-xs sm:text-sm text-slate-200 mt-1 max-w-xl leading-relaxed font-light line-clamp-1 sm:line-clamp-2 drop-shadow">
                                    {{ $item['description'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Left Navigation Button (Berada di atas Kartu Kiri seperti Gambar) -->
            <button
                type="button"
                @click="moveLeft()"
                class="absolute left-[3%] sm:left-[8%] md:left-[10%] lg:left-[12%] top-1/2 -translate-y-1/2 z-40 w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-white hover:bg-slate-50 text-gray-800 hover:text-[#0070D5] shadow-2xl border border-gray-200/90 flex items-center justify-center transition-all duration-300 hover:scale-110 active:scale-95 cursor-pointer"
                aria-label="Geser ke Kiri"
                title="Foto Sebelumnya"
            >
                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <!-- Right Navigation Button (Berada di atas Kartu Kanan seperti Gambar) -->
            <button
                type="button"
                @click="moveRight()"
                class="absolute right-[3%] sm:right-[8%] md:right-[10%] lg:right-[12%] top-1/2 -translate-y-1/2 z-40 w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-white hover:bg-slate-50 text-gray-800 hover:text-[#0070D5] shadow-2xl border border-gray-200/90 flex items-center justify-center transition-all duration-300 hover:scale-110 active:scale-95 cursor-pointer"
                aria-label="Geser ke Kanan"
                title="Foto Berikutnya"
            >
                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>

        <!-- Dot Indicators di Bawah -->
        <div class="flex items-center justify-center gap-2 mt-4 sm:mt-6">
            <template x-for="(item, idx) in facilities" :key="'dot-' + idx">
                <button
                    type="button"
                    @click="setSlide(idx)"
                    class="transition-all duration-300 rounded-full cursor-pointer"
                    :class="currentIndex === idx
                        ? 'w-7 sm:w-9 h-2 bg-[#0070D5] shadow-sm'
                        : 'w-2 h-2 bg-slate-300 hover:bg-slate-400'"
                    :title="'Slide ' + (idx + 1)"
                    :aria-label="'Go to slide ' + (idx + 1)"
                ></button>
            </template>
        </div>
    </div>
</section>
