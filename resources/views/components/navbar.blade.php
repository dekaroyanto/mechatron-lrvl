<header
    x-data="{
        scrolled: false,
        mobileMenuOpen: false,
        activeDropdown: null,
        init() {
            this.scrolled = window.scrollY > 20;
            window.addEventListener('scroll', () => {
                this.scrolled = window.scrollY > 20;
            }, { passive: true });
        }
    }"
    :class="scrolled
        ? 'bg-white/95 backdrop-blur-md border-b border-[#E5E7EB] shadow-[0_2px_8px_rgba(0,0,0,0.06)] py-3 text-[#111827]'
        : 'bg-gradient-to-b from-black/70 via-black/30 to-transparent py-4 text-white'"
    class="fixed top-0 left-0 right-0 z-50 transition-all duration-300"
>
    <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
        <!-- Left: Official Mechatron Brand Logo -->
        <div class="flex items-center">
            <a href="{{ route('home') }}" class="flex items-center gap-2.5 group focus:outline-none select-none" aria-label="Mechatron Official">
                <div class="relative w-8 h-8 sm:w-9 sm:h-9 shrink-0 transition-transform duration-200 group-hover:scale-105 shadow-sm rounded-[7px] overflow-hidden">
                    <img src="{{ asset('images/mechatron_logo.png') }}" alt="Mechatron Official Logo" class="w-full h-full object-cover">
                </div>
                <span
                    :class="scrolled ? 'text-[#002B7F] group-hover:text-[#0070D5]' : 'text-white group-hover:text-blue-200'"
                    class="font-extrabold tracking-tight text-[17px] sm:text-[19px] transition-colors"
                >
                    MECHATRON
                </span>
            </a>
        </div>

        <!-- Center: Desktop Navigation Links -->
        <nav class="hidden xl:flex items-center space-x-7" aria-label="Main Navigation">
            <!-- 1. Produk Drone -->
            <div class="relative py-2" @mouseenter="activeDropdown = 'products'" @mouseleave="activeDropdown = null">
                <button type="button" :class="activeDropdown === 'products' ? 'text-[#0070D5]' : (scrolled ? 'text-[#222222] hover:text-[#0070D5]' : 'text-white/90 hover:text-white')" class="text-[14px] font-medium tracking-normal transition-colors flex items-center gap-1 bg-transparent border-0 cursor-pointer">
                    Produk Drone
                </button>
                <div x-show="activeDropdown === 'products'" x-transition.opacity.duration.200ms :class="scrolled ? 'bg-white border border-gray-200' : 'bg-[#111720]/95 backdrop-blur-md border border-white/10'" class="absolute top-full left-1/2 -translate-x-1/2 w-[340px] rounded-md shadow-2xl py-3 px-2 z-50" style="display: none;">
                    <div :class="scrolled ? 'text-gray-500 border-gray-100' : 'text-[#8B939B] border-white/10'" class="text-[11px] uppercase tracking-wider font-semibold px-3 pb-2 border-b">
                        Produk Drone
                    </div>
                    <div class="mt-2 space-y-1">
                        <a href="{{ route('home') }}#products" @click="activeDropdown = null" :class="scrolled ? 'hover:bg-gray-100 text-[#222]' : 'hover:bg-white/10 text-white'" class="flex flex-col px-3 py-2 rounded transition-colors group text-decoration-none">
                            <span class="text-[13px] font-medium group-hover:text-[#0070D5] transition-colors">MECHATRON AGRI H-30</span>
                            <span :class="scrolled ? 'text-gray-500' : 'text-[#9FA3A6]'" class="text-[11px]">Heavy Payload 30L Agricultural Drone</span>
                        </a>
                        <a href="{{ route('home') }}#products" @click="activeDropdown = null" :class="scrolled ? 'hover:bg-gray-100 text-[#222]' : 'hover:bg-white/10 text-white'" class="flex flex-col px-3 py-2 rounded transition-colors group text-decoration-none">
                            <span class="text-[13px] font-medium group-hover:text-[#0070D5] transition-colors">MECHATRON AGRI H-15</span>
                            <span :class="scrolled ? 'text-gray-500' : 'text-[#9FA3A6]'" class="text-[11px]">High-Efficiency 15L Foldable Drone</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 2. Sistem & Ekosistem -->
            <div class="relative py-2" @mouseenter="activeDropdown = 'ecosystem'" @mouseleave="activeDropdown = null">
                <button type="button" :class="activeDropdown === 'ecosystem' ? 'text-[#0070D5]' : (scrolled ? 'text-[#222222] hover:text-[#0070D5]' : 'text-white/90 hover:text-white')" class="text-[14px] font-medium tracking-normal transition-colors flex items-center gap-1 bg-transparent border-0 cursor-pointer">
                    Sistem & Ekosistem
                </button>
                <div x-show="activeDropdown === 'ecosystem'" x-transition.opacity.duration.200ms :class="scrolled ? 'bg-white border border-gray-200' : 'bg-[#111720]/95 backdrop-blur-md border border-white/10'" class="absolute top-full left-1/2 -translate-x-1/2 w-[340px] rounded-md shadow-2xl py-3 px-2 z-50" style="display: none;">
                    <div :class="scrolled ? 'text-gray-500 border-gray-100' : 'text-[#8B939B] border-white/10'" class="text-[11px] uppercase tracking-wider font-semibold px-3 pb-2 border-b">
                        Sistem & Ekosistem
                    </div>
                    <div class="mt-2 space-y-1">
                        <a href="{{ route('home') }}" @click="activeDropdown = null" :class="scrolled ? 'hover:bg-gray-100 text-[#222]' : 'hover:bg-white/10 text-white'" class="flex flex-col px-3 py-2 rounded transition-colors group text-decoration-none">
                            <span class="text-[13px] font-medium group-hover:text-[#0070D5] transition-colors">Mechatron AGRI</span>
                            <span :class="scrolled ? 'text-gray-500' : 'text-[#9FA3A6]'" class="text-[11px]">Smart Agricultural Drone</span>
                        </a>
                        <a href="{{ route('home') }}" @click="activeDropdown = null" :class="scrolled ? 'hover:bg-gray-100 text-[#222]' : 'hover:bg-white/10 text-white'" class="flex flex-col px-3 py-2 rounded transition-colors group text-decoration-none">
                            <span class="text-[13px] font-medium group-hover:text-[#0070D5] transition-colors">Mechatron Smart GCS Controller</span>
                            <span :class="scrolled ? 'text-gray-500' : 'text-[#9FA3A6]'" class="text-[11px]">Ground Control Station Layar Terang & Dual RTK</span>
                        </a>
                        <a href="{{ route('home') }}" @click="activeDropdown = null" :class="scrolled ? 'hover:bg-gray-100 text-[#222]' : 'hover:bg-white/10 text-white'" class="flex flex-col px-3 py-2 rounded transition-colors group text-decoration-none">
                            <span class="text-[13px] font-medium group-hover:text-[#0070D5] transition-colors">Mechatron Power Combo Kit</span>
                            <span :class="scrolled ? 'text-gray-500' : 'text-[#9FA3A6]'" class="text-[11px]">Smart Battery & High-Speed Generator Fast Charger</span>
                        </a>
                        <a href="{{ route('home') }}" @click="activeDropdown = null" :class="scrolled ? 'hover:bg-gray-100 text-[#222]' : 'hover:bg-white/10 text-white'" class="flex flex-col px-3 py-2 rounded transition-colors group text-decoration-none">
                            <span class="text-[13px] font-medium group-hover:text-[#0070D5] transition-colors">Suku Cadang & Propeller</span>
                            <span :class="scrolled ? 'text-gray-500' : 'text-[#9FA3A6]'" class="text-[11px]">Suku Cadang Orisinil Resmi Mechatron</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 3. Solusi Pertanian -->
            <div class="relative py-2" @mouseenter="activeDropdown = 'solutions'" @mouseleave="activeDropdown = null">
                <button type="button" :class="activeDropdown === 'solutions' ? 'text-[#0070D5]' : (scrolled ? 'text-[#222222] hover:text-[#0070D5]' : 'text-white/90 hover:text-white')" class="text-[14px] font-medium tracking-normal transition-colors flex items-center gap-1 bg-transparent border-0 cursor-pointer">
                    Solusi Pertanian
                </button>
                <div x-show="activeDropdown === 'solutions'" x-transition.opacity.duration.200ms :class="scrolled ? 'bg-white border border-gray-200' : 'bg-[#111720]/95 backdrop-blur-md border border-white/10'" class="absolute top-full left-1/2 -translate-x-1/2 w-[340px] rounded-md shadow-2xl py-3 px-2 z-50" style="display: none;">
                    <div :class="scrolled ? 'text-gray-500 border-gray-100' : 'text-[#8B939B] border-white/10'" class="text-[11px] uppercase tracking-wider font-semibold px-3 pb-2 border-b">
                        Solusi Pertanian
                    </div>
                    <div class="mt-2 space-y-1">
                        <a href="{{ route('services.show', 'agrikultur') }}" @click="activeDropdown = null" :class="scrolled ? 'hover:bg-gray-100 text-[#222]' : 'hover:bg-white/10 text-white'" class="flex flex-col px-3 py-2 rounded transition-colors group text-decoration-none">
                            <span class="text-[13px] font-medium group-hover:text-[#0070D5] transition-colors">Penyemprotan Pestisida & Herbisida</span>
                            <span :class="scrolled ? 'text-gray-500' : 'text-[#9FA3A6]'" class="text-[11px]">Akurasi Tinggi Tanpa Drift Berlebih</span>
                        </a>
                        <a href="{{ route('services.show', 'agrikultur') }}" @click="activeDropdown = null" :class="scrolled ? 'hover:bg-gray-100 text-[#222]' : 'hover:bg-white/10 text-white'" class="flex flex-col px-3 py-2 rounded transition-colors group text-decoration-none">
                            <span class="text-[13px] font-medium group-hover:text-[#0070D5] transition-colors">Penyebaran Pupuk & Benih</span>
                            <span :class="scrolled ? 'text-gray-500' : 'text-[#9FA3A6]'" class="text-[11px]">Penyebaran Granul Rata Kapasitas Besar</span>
                        </a>
                        <a href="{{ route('services.show', 'lidar') }}" @click="activeDropdown = null" :class="scrolled ? 'hover:bg-gray-100 text-[#222]' : 'hover:bg-white/10 text-white'" class="flex flex-col px-3 py-2 rounded transition-colors group text-decoration-none">
                            <span class="text-[13px] font-medium group-hover:text-[#0070D5] transition-colors">Pemetaan & RTK Sentimeter</span>
                            <span :class="scrolled ? 'text-gray-500' : 'text-[#9FA3A6]'" class="text-[11px]">Navigasi Otonom Kontur Medan Otomatis</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 4. Services & Layanan -->
            <div class="relative py-2" @mouseenter="activeDropdown = 'services'" @mouseleave="activeDropdown = null">
                <a href="{{ route('services.index') }}" :class="activeDropdown === 'services' ? 'text-[#0070D5]' : (scrolled ? 'text-[#222222] hover:text-[#0070D5]' : 'text-white/90 hover:text-white')" class="text-[14px] font-medium tracking-normal transition-colors flex items-center gap-1 bg-transparent border-0 cursor-pointer">
                    Services & Layanan
                </a>
                <div x-show="activeDropdown === 'services'" x-transition.opacity.duration.200ms :class="scrolled ? 'bg-white border border-gray-200' : 'bg-[#111720]/95 backdrop-blur-md border border-white/10'" class="absolute top-full left-1/2 -translate-x-1/2 w-[340px] rounded-md shadow-2xl py-3 px-2 z-50" style="display: none;">
                    <div :class="scrolled ? 'text-gray-500 border-gray-100' : 'text-[#8B939B] border-white/10'" class="text-[11px] uppercase tracking-wider font-semibold px-3 pb-2 border-b">
                        Services & Layanan
                    </div>
                    <div class="mt-2 space-y-1">
                        <a href="{{ route('services.show', 'fotografi') }}" @click="activeDropdown = null" :class="scrolled ? 'hover:bg-gray-100 text-[#222]' : 'hover:bg-white/10 text-white'" class="flex flex-col px-3 py-2 rounded transition-colors group text-decoration-none">
                            <span class="text-[13px] font-medium group-hover:text-[#0070D5] transition-colors">Fotografi Drone</span>
                            <span :class="scrolled ? 'text-gray-500' : 'text-[#9FA3A6]'" class="text-[11px]">Dokumentasi Udara Kualitas Sinematik</span>
                        </a>
                        <a href="{{ route('services.show', 'lidar') }}" @click="activeDropdown = null" :class="scrolled ? 'hover:bg-gray-100 text-[#222]' : 'hover:bg-white/10 text-white'" class="flex flex-col px-3 py-2 rounded transition-colors group text-decoration-none">
                            <span class="text-[13px] font-medium group-hover:text-[#0070D5] transition-colors">Pemetaan LiDAR</span>
                            <span :class="scrolled ? 'text-gray-500' : 'text-[#9FA3A6]'" class="text-[11px]">Survei & Point Cloud 3D Presisi Tinggi</span>
                        </a>
                        <a href="{{ route('services.show', 'agrikultur') }}" @click="activeDropdown = null" :class="scrolled ? 'hover:bg-gray-100 text-[#222]' : 'hover:bg-white/10 text-white'" class="flex flex-col px-3 py-2 rounded transition-colors group text-decoration-none">
                            <span class="text-[13px] font-medium group-hover:text-[#0070D5] transition-colors">Agrikultur & Pertanian</span>
                            <span :class="scrolled ? 'text-gray-500' : 'text-[#9FA3A6]'" class="text-[11px]">Penyemprotan Otonom & Analisis Lahan</span>
                        </a>
                        <a href="{{ route('services.show', 'sewadrone') }}" @click="activeDropdown = null" :class="scrolled ? 'hover:bg-gray-100 text-[#222]' : 'hover:bg-white/10 text-white'" class="flex flex-col px-3 py-2 rounded transition-colors group text-decoration-none">
                            <span class="text-[13px] font-medium group-hover:text-[#0070D5] transition-colors">Sewa Drone Profesional</span>
                            <span :class="scrolled ? 'text-gray-500' : 'text-[#9FA3A6]'" class="text-[11px]">Rental Armada Drone Sesuai Kebutuhan</span>
                        </a>
                        <a href="{{ route('services.show', 'pelatihanpilot') }}" @click="activeDropdown = null" :class="scrolled ? 'hover:bg-gray-100 text-[#222]' : 'hover:bg-white/10 text-white'" class="flex flex-col px-3 py-2 rounded transition-colors group text-decoration-none">
                            <span class="text-[13px] font-medium group-hover:text-[#0070D5] transition-colors">Pelatihan Pilot Drone</span>
                            <span :class="scrolled ? 'text-gray-500' : 'text-[#9FA3A6]'" class="text-[11px]">Akademi Sertifikasi & Lisensi Terbang</span>
                        </a>
                        <a href="{{ route('services.show', 'perawatandrone') }}" @click="activeDropdown = null" :class="scrolled ? 'hover:bg-gray-100 text-[#222]' : 'hover:bg-white/10 text-white'" class="flex flex-col px-3 py-2 rounded transition-colors group text-decoration-none">
                            <span class="text-[13px] font-medium group-hover:text-[#0070D5] transition-colors">Perawatan & Servis Drone</span>
                            <span :class="scrolled ? 'text-gray-500' : 'text-[#9FA3A6]'" class="text-[11px]">Kalibrasi, Komponen, & Servis Resmi</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 5. Layanan & Dukungan -->
            <div class="relative py-2" @mouseenter="activeDropdown = 'support'" @mouseleave="activeDropdown = null">
                <button type="button" :class="activeDropdown === 'support' ? 'text-[#0070D5]' : (scrolled ? 'text-[#222222] hover:text-[#0070D5]' : 'text-white/90 hover:text-white')" class="text-[14px] font-medium tracking-normal transition-colors flex items-center gap-1 bg-transparent border-0 cursor-pointer">
                    Layanan & Dukungan
                </button>
                <div x-show="activeDropdown === 'support'" x-transition.opacity.duration.200ms :class="scrolled ? 'bg-white border border-gray-200' : 'bg-[#111720]/95 backdrop-blur-md border border-white/10'" class="absolute top-full left-1/2 -translate-x-1/2 w-[340px] rounded-md shadow-2xl py-3 px-2 z-50" style="display: none;">
                    <div :class="scrolled ? 'text-gray-500 border-gray-100' : 'text-[#8B939B] border-white/10'" class="text-[11px] uppercase tracking-wider font-semibold px-3 pb-2 border-b">
                        Layanan & Dukungan
                    </div>
                    <div class="mt-2 space-y-1">
                        <a href="{{ route('services.show', 'perawatandrone') }}" @click="activeDropdown = null" :class="scrolled ? 'hover:bg-gray-100 text-[#222]' : 'hover:bg-white/10 text-white'" class="flex flex-col px-3 py-2 rounded transition-colors group text-decoration-none">
                            <span class="text-[13px] font-medium group-hover:text-[#0070D5] transition-colors">Garansi Resmi Mechatron</span>
                            <span :class="scrolled ? 'text-gray-500' : 'text-[#9FA3A6]'" class="text-[11px]">Perlindungan Garansi Unit & Komponen Utama</span>
                        </a>
                        <a href="{{ route('services.show', 'perawatandrone') }}" @click="activeDropdown = null" :class="scrolled ? 'hover:bg-gray-100 text-[#222]' : 'hover:bg-white/10 text-white'" class="flex flex-col px-3 py-2 rounded transition-colors group text-decoration-none">
                            <span class="text-[13px] font-medium group-hover:text-[#0070D5] transition-colors">Pusat Servis & Kalibrasi</span>
                            <span :class="scrolled ? 'text-gray-500' : 'text-[#9FA3A6]'" class="text-[11px]">Teknisi Tersertifikasi & Suku Cadang Ready</span>
                        </a>
                        <a href="{{ route('services.show', 'pelatihanpilot') }}" @click="activeDropdown = null" :class="scrolled ? 'hover:bg-gray-100 text-[#222]' : 'hover:bg-white/10 text-white'" class="flex flex-col px-3 py-2 rounded transition-colors group text-decoration-none">
                            <span class="text-[13px] font-medium group-hover:text-[#0070D5] transition-colors">Panduan & Firmware</span>
                            <span :class="scrolled ? 'text-gray-500' : 'text-[#9FA3A6]'" class="text-[11px]">Buku Manual Operasional & Software Update</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 6. Tentang Mechatron -->
            <div class="relative py-2" @mouseenter="activeDropdown = 'about'" @mouseleave="activeDropdown = null">
                <button type="button" :class="activeDropdown === 'about' ? 'text-[#0070D5]' : (scrolled ? 'text-[#222222] hover:text-[#0070D5]' : 'text-white/90 hover:text-white')" class="text-[14px] font-medium tracking-normal transition-colors flex items-center gap-1 bg-transparent border-0 cursor-pointer">
                    Tentang Mechatron
                </button>
                <div x-show="activeDropdown === 'about'" x-transition.opacity.duration.200ms :class="scrolled ? 'bg-white border border-gray-200' : 'bg-[#111720]/95 backdrop-blur-md border border-white/10'" class="absolute top-full left-1/2 -translate-x-1/2 w-[340px] rounded-md shadow-2xl py-3 px-2 z-50" style="display: none;">
                    <div :class="scrolled ? 'text-gray-500 border-gray-100' : 'text-[#8B939B] border-white/10'" class="text-[11px] uppercase tracking-wider font-semibold px-3 pb-2 border-b">
                        Tentang Mechatron
                    </div>
                    <div class="mt-2 space-y-1">
                        <a href="{{ route('home') }}" @click="activeDropdown = null" :class="scrolled ? 'hover:bg-gray-100 text-[#222]' : 'hover:bg-white/10 text-white'" class="flex flex-col px-3 py-2 rounded transition-colors group text-decoration-none">
                            <span class="text-[13px] font-medium group-hover:text-[#0070D5] transition-colors">Profil Mechatron Indonesia</span>
                            <span :class="scrolled ? 'text-gray-500' : 'text-[#9FA3A6]'" class="text-[11px]">Pelopor Teknologi Drone Pertanian Terdepan</span>
                        </a>
                        <a href="{{ route('home') }}" @click="activeDropdown = null" :class="scrolled ? 'hover:bg-gray-100 text-[#222]' : 'hover:bg-white/10 text-white'" class="flex flex-col px-3 py-2 rounded transition-colors group text-decoration-none">
                            <span class="text-[13px] font-medium group-hover:text-[#0070D5] transition-colors">Kemitraan & Distributor Resmi</span>
                            <span :class="scrolled ? 'text-gray-500' : 'text-[#9FA3A6]'" class="text-[11px]">Jaringan Dealer di Seluruh Indonesia</span>
                        </a>
                        <a href="https://wa.me/6281112143111" target="_blank" @click="activeDropdown = null" :class="scrolled ? 'hover:bg-gray-100 text-[#222]' : 'hover:bg-white/10 text-white'" class="flex flex-col px-3 py-2 rounded transition-colors group text-decoration-none">
                            <span class="text-[13px] font-medium group-hover:text-[#0070D5] transition-colors">Hubungi Tim Sales</span>
                            <span :class="scrolled ? 'text-gray-500' : 'text-[#9FA3A6]'" class="text-[11px]">Konsultasi Pembelian & Jadwal Demo Unit</span>
                        </a>
                        <a href="{{ route('blog.index') }}" @click="activeDropdown = null" :class="scrolled ? 'hover:bg-gray-100 text-[#222]' : 'hover:bg-white/10 text-white'" class="flex flex-col px-3 py-2 rounded transition-colors group text-decoration-none">
                            <span class="text-[13px] font-medium group-hover:text-[#0070D5] transition-colors">Berita & Wawasan Drone</span>
                            <span :class="scrolled ? 'text-gray-500' : 'text-[#9FA3A6]'" class="text-[11px]">Kabar Terkini Drone Pertanian & Agrikultur</span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Right: Mobile Menu Button & Direct WA -->
        <div class="flex items-center space-x-4 sm:space-x-5">
            <button
                type="button"
                @click="mobileMenuOpen = !mobileMenuOpen"
                :class="scrolled ? 'text-[#111] hover:text-[#0070D5]' : 'text-white hover:text-[#0070D5]'"
                class="xl:hidden p-1.5 transition-colors focus:outline-none"
                aria-label="Toggle Menu"
            >
                <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg x-show="mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display: none;">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Drawer -->
    <div
        x-show="mobileMenuOpen"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        :class="scrolled ? 'bg-white border-gray-200 text-gray-900' : 'bg-[#0F151F]/98 border-white/10 text-white'"
        class="xl:hidden border-t px-5 py-4 space-y-4 max-h-[85vh] overflow-y-auto"
        style="display: none;"
    >
        <div class="border-b pb-3" :class="scrolled ? 'border-gray-100' : 'border-white/10'">
            <div class="text-[14px] font-semibold mb-2" :class="scrolled ? 'text-gray-900' : 'text-white'">
                Produk Drone
            </div>
            <div class="space-y-1.5 pl-2">
                <a href="{{ route('home') }}#products" @click="mobileMenuOpen = false" :class="scrolled ? 'text-gray-700 hover:text-[#0070D5]' : 'text-white/80 hover:text-[#0070D5]'" class="block text-[13px] py-1">MECHATRON AGRI H-30</a>
                <a href="{{ route('home') }}#products" @click="mobileMenuOpen = false" :class="scrolled ? 'text-gray-700 hover:text-[#0070D5]' : 'text-white/80 hover:text-[#0070D5]'" class="block text-[13px] py-1">MECHATRON AGRI H-15</a>
            </div>
        </div>

        <div class="border-b pb-3" :class="scrolled ? 'border-gray-100' : 'border-white/10'">
            <div class="text-[14px] font-semibold mb-2" :class="scrolled ? 'text-gray-900' : 'text-white'">
                Services & Layanan
            </div>
            <div class="space-y-1.5 pl-2">
                <a href="{{ route('services.show', 'fotografi') }}" @click="mobileMenuOpen = false" :class="scrolled ? 'text-gray-700 hover:text-[#0070D5]' : 'text-white/80 hover:text-[#0070D5]'" class="block text-[13px] py-1">Fotografi Drone</a>
                <a href="{{ route('services.show', 'lidar') }}" @click="mobileMenuOpen = false" :class="scrolled ? 'text-gray-700 hover:text-[#0070D5]' : 'text-white/80 hover:text-[#0070D5]'" class="block text-[13px] py-1">Pemetaan LiDAR</a>
                <a href="{{ route('services.show', 'agrikultur') }}" @click="mobileMenuOpen = false" :class="scrolled ? 'text-gray-700 hover:text-[#0070D5]' : 'text-white/80 hover:text-[#0070D5]'" class="block text-[13px] py-1">Agrikultur & Pertanian</a>
                <a href="{{ route('services.show', 'sewadrone') }}" @click="mobileMenuOpen = false" :class="scrolled ? 'text-gray-700 hover:text-[#0070D5]' : 'text-white/80 hover:text-[#0070D5]'" class="block text-[13px] py-1">Sewa Drone Profesional</a>
                <a href="{{ route('services.show', 'pelatihanpilot') }}" @click="mobileMenuOpen = false" :class="scrolled ? 'text-gray-700 hover:text-[#0070D5]' : 'text-white/80 hover:text-[#0070D5]'" class="block text-[13px] py-1">Pelatihan Pilot Drone</a>
                <a href="{{ route('services.show', 'perawatandrone') }}" @click="mobileMenuOpen = false" :class="scrolled ? 'text-gray-700 hover:text-[#0070D5]' : 'text-white/80 hover:text-[#0070D5]'" class="block text-[13px] py-1">Perawatan & Servis Drone</a>
            </div>
        </div>

        <div class="border-b pb-3" :class="scrolled ? 'border-gray-100' : 'border-white/10'">
            <div class="text-[14px] font-semibold mb-2" :class="scrolled ? 'text-gray-900' : 'text-white'">
                Berita & Wawasan
            </div>
            <div class="space-y-1.5 pl-2">
                <a href="{{ route('blog.index') }}" @click="mobileMenuOpen = false" :class="scrolled ? 'text-gray-700 hover:text-[#0070D5]' : 'text-white/80 hover:text-[#0070D5]'" class="block text-[13px] py-1">Berita Drone & Agrikultur</a>
            </div>
        </div>

        <div class="pt-2 flex flex-col gap-2">
            <a
                href="https://wa.me/6281112143111?text=Halo%20Mechatron,%20saya%20tertarik%20untuk%20konsultasi%20layanan%20drone."
                target="_blank"
                rel="noopener noreferrer"
                class="bg-[#0070D5] text-white text-center py-2.5 rounded-full text-[14px] font-medium shadow-md"
            >
                Hubungi Mechatron via WhatsApp
            </a>
        </div>
    </div>
</header>
