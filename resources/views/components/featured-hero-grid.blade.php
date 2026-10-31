@props(['products' => []])

@php
    $cards = [
        [
            'id' => 'agri-h30',
            'category' => 'Drone Pertanian',
            'titlePrefix' => 'MECHATRON ',
            'titleSuffix' => 'AGRI SERIES',
            'tagline' => 'Smart Solutions for Every Mission.',
            'image' => asset('images/featured_drone_h30.jpg'),
            'productInfo' => $products['agri-h30'] ?? [
                'id' => 'agri-h30',
                'modelCode' => 'BMT-1525',
                'title' => 'MECHATRON AGRI H30 (BMT-1525)',
                'tagline' => 'Sistem Penyemprotan & Pemupukan Presisi Pertanian Kapasitas 30 Liter',
                'image' => asset('images/featured_drone_h30.jpg'),
            ],
        ],
        [
            'id' => 'agri-h15',
            'category' => 'Drone Delivery',
            'titlePrefix' => 'MECHATRON ',
            'titleSuffix' => 'AERO LOGISTIK',
            'tagline' => 'Pengiriman Cepat dan Efisien Melalui Udara',
            'image' => asset('images/drone_delivery.jpeg'),
            'productInfo' => $products['agri-h15'] ?? [
                'id' => 'agri-h15',
                'modelCode' => 'BMT-1323',
                'title' => 'MECHATRON AGRI H-15 (BMT-1323)',
                'tagline' => 'Drone Lipat Efisiensi Tinggi dengan Kapasitas Muatan 15 Liter',
                'image' => asset('images/drone_delivery.jpeg'),
            ],
        ],
        [
            'id' => 'mechatron-ground-station',
            'category' => 'Drone Surveillance',
            'titlePrefix' => 'MECHATRON ',
            'titleSuffix' => 'SENTINEL',
            'tagline' => 'Pemantauan Keamanan Udara Real-time',
            'image' => asset('images/drone_survei.jpeg'),
            'productInfo' => [
                'id' => 'mechatron-ground-station',
                'title' => 'Mechatron Smart Ground Control Station',
                'tagline' => 'Remote Kontrol Presisi Tinggi dengan Modul Dual-Antena & Tas Khusus',
                'image' => asset('images/drone_survei.jpeg'),
            ],
        ],
        [
            'id' => 'mechatron-power-kit',
            'category' => 'Sparepart Drone',
            'titlePrefix' => 'ORIGINAL ',
            'titleSuffix' => 'PARTS',
            'tagline' => 'Suku Cadang Asli dan Berkualitas',
            'image' => asset('images/featured_combo_kit.jpg'),
            'productInfo' => [
                'id' => 'mechatron-power-kit',
                'title' => 'Mechatron Enterprise Power & Flight Combo Kit',
                'tagline' => 'Paket Lengkap Hardcase, Baterai Cerdas, Smart Charger & Remote Kontrol',
                'image' => asset('images/featured_combo_kit.jpg'),
            ],
        ],
    ];
@endphp

<section
    id="products"
    x-data="{
        activeCard: null,
        showScrollTop: false,
        init() {
            window.addEventListener('scroll', () => {
                this.showScrollTop = window.scrollY > 400;
            }, { passive: true });
            window.addEventListener('click', (e) => {
                if (!e.target.closest('.featured-grid-card')) {
                    this.activeCard = null;
                }
            });
        },
        toggleCard(id) {
            this.activeCard = (this.activeCard === id) ? null : id;
        },
        scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    }"
    class="relative w-full bg-[#FFFFFF] py-2 sm:py-3 px-1 sm:px-1.5 md:px-2"
>
    <!-- 2-Column Product Showcase Grid -->
    <div class="w-full mx-auto space-y-1.5 sm:space-y-2">
        <!-- Top Pair -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-1.5 sm:gap-2">
            @foreach(array_slice($cards, 0, 2) as $card)
                <div
                    @click="toggleCard('{{ $card['id'] }}')"
                    :class="activeCard === '{{ $card['id'] }}' ? 'shadow-[0_12px_40px_rgba(0,0,0,0.18)]' : 'hover:shadow-[0_12px_40px_rgba(0,0,0,0.18)]'"
                    class="featured-grid-card group relative bg-white rounded-none overflow-hidden flex flex-col justify-between transition-all duration-500 min-h-[520px] sm:min-h-[600px] lg:min-h-[660px] cursor-pointer select-none"
                >
                    <!-- Background Image & White Overlay -->
                    <div class="absolute inset-0 z-0 bg-white">
                        <img
                            src="{{ $card['image'] }}"
                            alt="{{ $card['titlePrefix'] }}{{ $card['titleSuffix'] }}"
                            :class="activeCard === '{{ $card['id'] }}' ? 'scale-[1.03] opacity-90' : 'group-hover:scale-[1.03] group-hover:opacity-90'"
                            class="w-full h-full object-cover object-center transition-all duration-500 ease-out"
                        />
                        <div
                            :class="activeCard === '{{ $card['id'] }}' ? 'opacity-100' : 'opacity-0 group-hover:opacity-100'"
                            class="absolute inset-0 bg-white/50 backdrop-blur-[2px] transition-opacity duration-500 pointer-events-none"
                        ></div>
                    </div>

                    <!-- Card Header Content -->
                    <div
                        :class="activeCard === '{{ $card['id'] }}'
                            ? 'opacity-100 translate-y-0 pointer-events-auto'
                            : 'opacity-0 -translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 pointer-events-none group-hover:pointer-events-auto'"
                        class="relative pt-12 sm:pt-20 px-6 sm:px-12 text-center z-10 transition-all duration-500 ease-out"
                    >
                        <p class="text-[12px] sm:text-[14px] font-semibold text-[#0070D5] uppercase tracking-wider mb-2">
                            {{ $card['category'] }}
                        </p>
                        <h2 class="text-[32px] sm:text-[40px] lg:text-[46px] text-[#111111] font-bold tracking-[-0.5px] leading-tight mb-2">
                            <span>{{ $card['titlePrefix'] }}</span>
                            <span class="font-light">{{ $card['titleSuffix'] }}</span>
                        </h2>
                        <p class="text-[15px] sm:text-[18px] font-medium text-[#444444] mb-6 max-w-md mx-auto leading-relaxed">
                            {{ $card['tagline'] }}
                        </p>

                        <!-- Buttons -->
                        <div class="flex items-center justify-center gap-3 sm:gap-4 flex-wrap">
                            <a
                                href="{{ route('products.show', $card['id']) }}"
                                class="inline-flex items-center gap-1.5 text-[13px] sm:text-[14px] font-semibold px-5 py-2.5 rounded-full shadow-sm hover:shadow-md transition-all duration-300 cursor-pointer bg-white text-[#111111] border border-gray-300 hover:border-[#0070D5] hover:text-[#0070D5] text-decoration-none"
                            >
                                <span>Lihat Spesifikasi & Detail</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M9 5l7 7-7 7"/></svg>
                            </a>

                            <a
                                href="https://wa.me/6281112143111?text={{ urlencode('Halo Mechatron, saya tertarik untuk konsultasi dan pemesanan ' . ($card['productInfo']['name'] ?? $card['productInfo']['title']) . '. Mohon informasi ketersediaan unit dan jadwal demo lapangan.') }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                @click.stop
                                class="inline-flex items-center gap-1.5 text-[13px] sm:text-[14px] font-semibold px-5 py-2.5 rounded-full shadow-sm hover:shadow-md transition-all duration-300 cursor-pointer bg-[#0070D5] text-white hover:bg-[#005bb5] text-decoration-none"
                            >
                                <span>Pesan via WhatsApp</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Bottom Pair -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-1.5 sm:gap-2">
            @foreach(array_slice($cards, 2, 2) as $card)
                <div
                    @click="toggleCard('{{ $card['id'] }}')"
                    :class="activeCard === '{{ $card['id'] }}' ? 'shadow-[0_12px_40px_rgba(0,0,0,0.18)]' : 'hover:shadow-[0_12px_40px_rgba(0,0,0,0.18)]'"
                    class="featured-grid-card group relative bg-white rounded-none overflow-hidden flex flex-col justify-between transition-all duration-500 min-h-[520px] sm:min-h-[600px] lg:min-h-[660px] cursor-pointer select-none"
                >
                    <!-- Background Image & White Overlay -->
                    <div class="absolute inset-0 z-0 bg-white">
                        <img
                            src="{{ $card['image'] }}"
                            alt="{{ $card['titlePrefix'] }}{{ $card['titleSuffix'] }}"
                            :class="activeCard === '{{ $card['id'] }}' ? 'scale-[1.03] opacity-90' : 'group-hover:scale-[1.03] group-hover:opacity-90'"
                            class="w-full h-full object-cover object-center transition-all duration-500 ease-out"
                        />
                        <div
                            :class="activeCard === '{{ $card['id'] }}' ? 'opacity-100' : 'opacity-0 group-hover:opacity-100'"
                            class="absolute inset-0 bg-white/50 backdrop-blur-[2px] transition-opacity duration-500 pointer-events-none"
                        ></div>
                    </div>

                    <!-- Card Header Content -->
                    <div
                        :class="activeCard === '{{ $card['id'] }}'
                            ? 'opacity-100 translate-y-0 pointer-events-auto'
                            : 'opacity-0 -translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 pointer-events-none group-hover:pointer-events-auto'"
                        class="relative pt-12 sm:pt-20 px-6 sm:px-12 text-center z-10 transition-all duration-500 ease-out"
                    >
                        <p class="text-[12px] sm:text-[14px] font-semibold text-[#0070D5] uppercase tracking-wider mb-2">
                            {{ $card['category'] }}
                        </p>
                        <h2 class="text-[32px] sm:text-[40px] lg:text-[46px] text-[#111111] font-bold tracking-[-0.5px] leading-tight mb-2">
                            <span>{{ $card['titlePrefix'] }}</span>
                            <span class="font-light">{{ $card['titleSuffix'] }}</span>
                        </h2>
                        <p class="text-[15px] sm:text-[18px] font-medium text-[#444444] mb-6 max-w-md mx-auto leading-relaxed">
                            {{ $card['tagline'] }}
                        </p>

                        <!-- Buttons -->
                        <div class="flex items-center justify-center gap-3 sm:gap-4 flex-wrap">
                            <a
                                href="{{ route('products.show', $card['id']) }}"
                                class="inline-flex items-center gap-1.5 text-[13px] sm:text-[14px] font-semibold px-5 py-2.5 rounded-full shadow-sm hover:shadow-md transition-all duration-300 cursor-pointer bg-white text-[#111111] border border-gray-300 hover:border-[#0070D5] hover:text-[#0070D5] text-decoration-none"
                            >
                                <span>Lihat Spesifikasi & Detail</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M9 5l7 7-7 7"/></svg>
                            </a>

                            <a
                                href="https://wa.me/6281112143111?text={{ urlencode('Halo Mechatron, saya tertarik untuk konsultasi dan pemesanan ' . ($card['productInfo']['name'] ?? $card['productInfo']['title']) . '. Mohon informasi ketersediaan unit dan jadwal demo lapangan.') }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                @click.stop
                                class="inline-flex items-center gap-1.5 text-[13px] sm:text-[14px] font-semibold px-5 py-2.5 rounded-full shadow-sm hover:shadow-md transition-all duration-300 cursor-pointer bg-[#0070D5] text-white hover:bg-[#005bb5] text-decoration-none"
                            >
                                <span>Pesan via WhatsApp</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Floating Back to Top Button -->
    <div x-show="showScrollTop" x-transition.opacity.duration.300ms class="fixed bottom-6 right-6 z-40" style="display: none;">
        <button
            type="button"
            @click="scrollToTop()"
            title="Kembali ke atas"
            aria-label="Back to Top"
            class="w-11 h-11 rounded-full bg-white text-[#444444] shadow-[0_4px_16px_rgba(0,0,0,0.12)] border border-gray-100 flex items-center justify-center hover:text-[#0070D5] hover:scale-105 active:scale-95 transition-all duration-200 cursor-pointer"
        >
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M5 15l7-7 7 7"/></svg>
        </button>
    </div>
</section>
