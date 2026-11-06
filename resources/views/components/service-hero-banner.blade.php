<!-- Hero Section (Full Viewport Screen, Gambar 1 Desktop & Gambar 2 Mobile) -->
<section class="relative w-full h-screen min-h-[100dvh] flex items-center justify-center overflow-hidden bg-neutral-950">
    <!-- Desktop Background -->
    <div class="hidden md:block absolute inset-0 z-0">
        <img
            src="{{ asset('images/service_sewa_drone.jpg') }}"
            alt="Mechatron Aerial Services"
            class="w-full h-full object-cover object-center"
        />
        <div class="absolute inset-0 bg-gradient-to-b from-black/55 via-black/20 to-black/65"></div>
    </div>

    <!-- Mobile Background -->
    <div class="block md:hidden absolute inset-0 z-0">
        <img
            src="{{ asset('images/service_sewa_drone.jpg') }}"
            alt="Mechatron Aerial Services"
            class="w-full h-full object-cover object-center"
        />
        <div class="absolute inset-0 bg-gradient-to-b from-black/55 via-black/20 to-black/65"></div>
    </div>

    <!-- Teks di Langit Tengah -->
    <div class="relative z-10 max-w-4xl mx-auto px-4 text-center flex flex-col items-center pt-16 sm:pt-20">
        <p class="text-[13px] sm:text-[16px] md:text-[18px] font-normal text-white/90 tracking-wide mb-2 sm:mb-3">
            {{ __('Solusi Drone Profesional & Rekayasa Presisi') }}
        </p>

        <h1 class="text-[38px] sm:text-[58px] md:text-[72px] lg:text-[80px] font-extrabold text-white tracking-tight leading-none uppercase mb-2 sm:mb-3">
            MECHATRON SERVICES
        </h1>

        <p class="text-[17px] sm:text-[22px] md:text-[26px] font-medium text-white/95 tracking-tight mb-8 sm:mb-10">
            Wonders in Every Flight
        </p>

        <!-- Dual Pill Buttons -->
        <div class="flex items-center justify-center gap-3 sm:gap-4 flex-wrap">
            <a
                href="https://wa.me/6281112143111?text={{ urlencode(__('Halo Mechatron, saya tertarik untuk konsultasi mengenai Layanan Drone Mechatron.')) }}"
                target="_blank"
                rel="noopener noreferrer"
                class="bg-white hover:bg-gray-100 text-[#111111] font-medium text-[13px] sm:text-[15px] px-7 sm:px-9 py-2.5 sm:py-3 rounded-full transition-all shadow-md text-decoration-none"
            >
                {{ __('Konsultasi Sekarang') }}
            </a>

            <a
                href="#katalog-bento"
                class="bg-white/25 hover:bg-white/35 backdrop-blur-md text-white font-medium text-[13px] sm:text-[15px] px-6 sm:px-8 py-2.5 sm:py-3 rounded-full transition-all inline-flex items-center gap-2 text-decoration-none"
            >
                <span>{{ __('Jelajahi Layanan') }}</span>
                <span class="text-[10px]">▶</span>
            </a>
        </div>
    </div>
</section>

<!-- Editorial Narrative Text Block -->
<section class="py-16 sm:py-20 md:py-24 bg-white">
    <div class="max-w-[860px] mx-auto px-6 text-center">
        <p class="text-[15px] sm:text-[17px] md:text-[18px] text-[#222222] font-normal leading-[1.7] tracking-[-0.01em]">
            {{ __('Hadirkan keunggulan operasional dan nilai tambah bisnis Anda dengan rangkaian solusi drone enterprise terintegrasi dari Mechatron. Dari dokumentasi visual sinematik beresolusi 50MP dan 4K HDR, pemetaan LiDAR dengan akurasi sentimeter, drone pertanian presisi berkapasitas besar, hingga armada rental siap pakai, pelatihan pilot resmi FASI, dan perawatan terakreditasi pabrikan. Kami menghadirkan teknologi mutakhir dengan presisi terbaik untuk setiap kebutuhan kerja Anda.') }}
        </p>
    </div>
</section>