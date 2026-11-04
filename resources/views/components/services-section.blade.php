@props(['businessServices' => [], 'fleetServices' => []])

@php
    $certificates = [
        [
            'id' => 'sni-mechatron',
            'title' => __('Sertifikasi SNI Drone Mechatron'),
            'issuer' => __('Badan Standardisasi Nasional & Kementan RI'),
            'regNo' => 'SNI 9199:2023',
            'image' => asset('images/sertifikat/sertifikat_sni.jpg'),
        ],
        [
            'id' => 'tkdn-hexa',
            'title' => __('Sertifikasi TKDN Drone Hexacopter Mechatron'),
            'issuer' => __('Kementerian Perindustrian RI'),
            'regNo' => 'Kode HS: 88062400',
            'image' => asset('images/sertifikat/sertifikat_tkdn_hexa.jpg'),
        ],
        [
            'id' => 'tkdn-quad',
            'title' => __('Sertifikasi TKDN Drone Quadcopter Mechatron'),
            'issuer' => __('Kementerian Perindustrian RI'),
            'regNo' => 'Kode HS: 88062400',
            'image' => asset('images/sertifikat/sertifikat_tkdn_quad.jpg'),
        ],
    ];
@endphp

<section id="services" class="relative w-full bg-[#FFFFFF] py-12 sm:py-16 md:py-20" x-data="{ modalOpen: false, activeCert: null }">
    <div class="max-w-[1440px] mx-auto px-0 sm:px-4 md:px-6 lg:px-8 space-y-14 sm:space-y-16 md:space-y-20">
        <!-- BAGIAN 1: Teknologi Baru Untuk Bisnis Anda (3 Layanan: Fotografi, LiDAR, Agrikultur) -->
        <div>
            <div class="text-center px-4 mb-6 sm:mb-8 md:mb-12">
                <h2 class="text-[26px] sm:text-[32px] md:text-[38px] lg:text-[42px] font-bold text-[#111111] tracking-tight leading-tight">
                    Teknologi Baru Untuk Bisnis Anda
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-1 sm:gap-2 md:gap-4 lg:gap-6">
                @foreach($businessServices as $service)
                    <a
                        href="{{ route('services.show', $service['slug']) }}"
                        class="group relative w-full overflow-hidden cursor-pointer select-none block h-[230px] sm:h-[270px] md:h-auto md:min-h-[560px] lg:min-h-[620px] transition-all duration-500 bg-neutral-900 text-decoration-none"
                    >
                        <div class="absolute inset-0 z-0">
                            <img
                                src="{{ $service['image'] }}"
                                alt="{{ $service['title'] }}"
                                class="w-full h-full object-cover object-center transition-transform duration-700 ease-out group-hover:scale-105"
                            />
                            <div class="absolute inset-0 bg-black/45 md:bg-gradient-to-b md:from-black/75 md:via-black/35 md:to-transparent transition-opacity duration-500 group-hover:md:from-black/85"></div>
                        </div>

                        <div class="relative z-10 h-full flex flex-col items-center justify-center px-5 py-6 md:justify-start md:pt-14 md:pb-8 md:px-6 lg:pt-16 lg:px-8 text-center">
                            <h3 class="text-[24px] sm:text-[28px] md:text-[32px] lg:text-[36px] font-bold text-white tracking-tight leading-tight">
                                {{ $service['title'] }}
                            </h3>
                            <p class="text-[13px] sm:text-[14px] md:text-[15px] lg:text-[16px] text-white/90 font-normal leading-relaxed mt-1.5 sm:mt-2 md:mt-3 max-w-[280px] sm:max-w-[320px] md:max-w-[340px]">
                                {{ $service['description'] }}
                            </p>
                            <div class="mt-2.5 sm:mt-3 md:mt-4 inline-flex items-center gap-1 text-[13px] sm:text-[14px] md:text-[15px] font-medium text-white group-hover:text-white/80 transition-colors">
                                <span>Pelajari Lebih Lanjut</span>
                                <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M9 5l7 7-7 7"/></svg>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>

        <!-- BAGIAN 2: Teknologi Terkini Di Layanan Kami. (3D Carousel: Sewa Drone, Pelatihan Pilot Drone, Perawatan Drone) -->
        <div>
            <div class="text-center px-4 mb-6 sm:mb-8 md:mb-12">
                <h2 class="text-[26px] sm:text-[32px] md:text-[38px] lg:text-[42px] font-bold text-[#111111] tracking-tight leading-tight">
                    Sertifikasi
                </h2>
            </div>

            <!-- Interactive 3D Carousel (Alpine.js) -->
            <div
                x-data="{
                    currentIndex: 0,
                    total: {{ count($certificates) }},
                    items: {{ Js::from($certificates) }},
                    isPaused: false,
                    timer: null,
                    nextSlide() {
                        this.currentIndex = (this.currentIndex + 1) % this.total;
                    },
                    prevSlide() {
                        this.currentIndex = (this.currentIndex - 1 + this.total) % this.total;
                    },
                    setSlide(idx) {
                        this.currentIndex = idx;
                    },
                    startAuto() {
                        if (this.timer) clearInterval(this.timer);
                        this.timer = setInterval(() => {
                            if (!this.isPaused) this.nextSlide();
                        }, 5500);
                    },
                    init() {
                        this.startAuto();
                    }
                }"
                class="relative w-full py-6 md:py-10 select-none overflow-hidden"
                @mouseenter="isPaused = true"
                @mouseleave="isPaused = false"
            >
                <div class="relative mx-auto flex items-center justify-center h-[520px] sm:h-[580px] md:h-[640px] max-w-[1300px]" style="perspective: 1200px;">
                    <template x-for="(service, index) in items" :key="service.id">
                        <div
                            class="absolute w-[290px] sm:w-[380px] md:w-[440px] lg:w-[480px] h-[460px] sm:h-[520px] md:h-[580px] rounded-[26px] sm:rounded-[34px] overflow-hidden shadow-2xl origin-center transition-all duration-500 ease-out"
                            :style="(() => {
                                let diff = (index - currentIndex) % total;
                                if (diff < -1) diff += total;
                                if (diff > 1) diff -= total;
                                const isCenter = diff === 0;
                                const isLeft = diff === -1 || (total === 2 && diff === 1 && index === 0);
                                const isRight = diff === 1;

                                if (isCenter) {
                                    return 'transform: translate3d(0%, 0, 0) scale(1) rotateY(0deg); z-index: 30; opacity: 1; filter: brightness(100%); cursor: default;';
                                } else if (isLeft) {
                                    return 'transform: translate3d(-62%, 0, 0) scale(0.82) rotateY(24deg); z-index: 15; opacity: 0.65; filter: brightness(75%); cursor: pointer;';
                                } else if (isRight) {
                                    return 'transform: translate3d(62%, 0, 0) scale(0.82) rotateY(-24deg); z-index: 15; opacity: 0.65; filter: brightness(75%); cursor: pointer;';
                                } else {
                                    return 'opacity: 0; transform: scale(0.6); z-index: 5; pointer-events: none;';
                                }
                            })()"
                            @click="if (index !== currentIndex) currentIndex = index;"
                        >
                            <div class="relative w-full h-full bg-neutral-900 overflow-hidden rounded-[26px] sm:rounded-[34px] border border-white/20">
                                <div class="absolute inset-0 z-0">
                                    <img :src="service.image" :alt="service.title" class="w-full h-full object-cover object-center" />
                                    <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-black/35 to-black/85"></div>
                                </div>

                                <div class="relative z-10 h-full p-6 sm:p-9 md:p-10 flex flex-col justify-between text-white">
                                    <div>
                                        <span class="inline-block text-[11px] sm:text-[12px] font-semibold uppercase tracking-wider text-[#60A5FA] bg-black/40 backdrop-blur-md px-3 py-1 rounded-full border border-white/10 mb-3 sm:mb-4" x-text="service.issuer || 'Layanan Terkini'"></span>
                                        <h3 class="text-[24px] sm:text-[30px] md:text-[34px] font-bold tracking-tight leading-tight text-white" x-text="service.title"></h3>
                                        <p class="text-[13px] sm:text-[15px] text-white/90 font-normal leading-relaxed mt-2.5 sm:mt-3 line-clamp-3" x-text="service.description"></p>
                                    </div>

                                    <div class="pt-4 border-t border-white/15 flex items-center justify-between">
                                        <button
                                            type="button"
                                            @click.stop="activeCert = service; modalOpen = true;"
                                            class="w-full sm:w-auto inline-flex items-center justify-center gap-2 text-[13px] sm:text-[14px] font-semibold px-6 py-3 rounded-full transition-all duration-300 cursor-pointer shadow-lg"
                                            :class="index === currentIndex ? 'bg-white text-neutral-900 hover:bg-neutral-100 hover:scale-105' : 'bg-white/20 text-white hover:bg-white/30 backdrop-blur-md'"
                                        >
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                            <span>{{ __('Lihat Sertifikat') }}</span>
                                        </button>
                                    </div>
                                </div>

                                <div class="absolute top-0 left-0 right-0 h-[1px] bg-gradient-to-r from-transparent via-white/40 to-transparent pointer-events-none"></div>
                            </div>
                        </div>
                    </template>
                </div>

                <!-- Navigation Controls -->
                <div class="flex items-center justify-center gap-4 mt-4 sm:mt-6">
                    <button
                        type="button"
                        @click="prevSlide()"
                        aria-label="Layanan Sebelumnya"
                        class="w-11 h-11 sm:w-12 sm:h-12 rounded-full bg-white/90 hover:bg-white text-neutral-900 shadow-md hover:shadow-xl flex items-center justify-center transition-all duration-300 hover:scale-105 active:scale-95 border border-gray-200 cursor-pointer"
                    >
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.4" d="M15 19l-7-7 7-7"/></svg>
                    </button>

                    <div class="flex items-center gap-2 px-3 py-1.5 rounded-full bg-neutral-100 border border-gray-200">
                        <template x-for="(service, idx) in services" :key="idx">
                            <button
                                type="button"
                                @click="setSlide(idx)"
                                :aria-label="'Pilih ' + service.title"
                                :class="currentIndex === idx ? 'w-7 h-2 bg-[#0070D5]' : 'w-2 h-2 bg-gray-300 hover:bg-gray-400'"
                                class="transition-all duration-300 rounded-full cursor-pointer focus:outline-none"
                            ></button>
                        </template>
                    </div>

                    <button
                        type="button"
                        @click="nextSlide()"
                        aria-label="Layanan Selanjutnya"
                        class="w-11 h-11 sm:w-12 sm:h-12 rounded-full bg-white/90 hover:bg-white text-neutral-900 shadow-md hover:shadow-xl flex items-center justify-center transition-all duration-300 hover:scale-105 active:scale-95 border border-gray-200 cursor-pointer"
                    >
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.4" d="M9 5l7 7-7 7"/></svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Lightbox Modal untuk Melihat Sertifikat Resolusi Tinggi -->
    <div
        x-show="modalOpen"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        @keydown.escape.window="modalOpen = false"
        class="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6 bg-black/80 backdrop-blur-md"
        style="display: none;"
    >
        <div
            @click.away="modalOpen = false"
            class="relative w-full max-w-2xl bg-white rounded-3xl overflow-hidden shadow-2xl flex flex-col max-h-[90vh]"
        >
            <!-- Modal Header -->
            <div class="flex items-center justify-between px-6 py-4 border-b border-slate-100 bg-slate-50/80">
                <h3 class="text-[17px] sm:text-[19px] font-bold text-slate-900" x-text="activeCert?.title"></h3>
                <button
                    type="button"
                    @click="modalOpen = false"
                    aria-label="Tutup Modal"
                    class="w-9 h-9 rounded-full bg-slate-200/80 hover:bg-slate-300 text-slate-700 flex items-center justify-center transition-colors cursor-pointer"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>

            <!-- Modal Image Preview -->
            <div class="overflow-y-auto p-4 sm:p-6 flex flex-col items-center justify-center bg-neutral-900/5">
                <div class="max-w-md w-full shadow-2xl rounded-2xl overflow-hidden border border-slate-200">
                    <img :src="activeCert?.image" :alt="activeCert?.title" class="w-full h-auto object-contain">
                </div>
            </div>

            <!-- Modal Footer -->
            <div class="px-6 py-3.5 bg-slate-50 border-t border-slate-100 flex items-center justify-between">
                <span class="text-[12px] text-slate-500 flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-emerald-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    <span>{{ __('Dokumen Sertifikat Sah Mechatron') }}</span>
                </span>
                <button
                    type="button"
                    @click="modalOpen = false"
                    class="px-5 py-2 rounded-full bg-slate-900 hover:bg-slate-800 text-white text-[13px] font-medium transition-colors cursor-pointer"
                >
                    {{ __('Tutup') }}
                </button>
            </div>
        </div>
    </div>
</section>
