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
   <!-- Mobile Background -->
<div class="block md:hidden absolute inset-0 z-0">
    <img 
        src="{{ asset('images/service_sewa_drone.jpg') }}" 
        alt="Mechatron Aerial Services" 
        class="w-full h-full object-cover object-center" 
    />
    <!-- Overlay sedikit digelapkan di tengah (via-black/40) agar teks lebih terbaca -->
    <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-black/70"></div>
</div>

<!-- Teks di Langit Tengah -->
<div class="relative z-10 max-w-4xl mx-auto px-4 text-center flex flex-col items-center pt-16 sm:pt-20">
    <p class="text-[13px] sm:text-[14px] md:text-[16px] font-semibold text-white/90 tracking-widest uppercase mb-3 sm:mb-4">
        {{ __('DUKUNGAN OPERASIONAL') }}
    </p>

    <!-- Hapus 'uppercase', kecilkan ukuran font text-[..px], ubah leading-none jadi leading-tight -->
    <h1 class="text-[32px] sm:text-[46px] md:text-[56px] lg:text-[64px] font-bold text-white tracking-tight leading-tight mb-4 sm:mb-6">
        Kinerja Maksimal di Setiap Penerbangan
    </h1>

    <!-- Kecilkan font size sub-headline agar tidak menyaingi judul -->
    <p class="text-[16px] sm:text-[18px] md:text-[20px] font-normal text-white/90 tracking-normal leading-relaxed mb-8 sm:mb-10 max-w-3xl">
        Dukungan menyeluruh untuk operasional drone Anda. Mulai dari pelatihan terbang profesional, perbaikan dan perawatan unit, hingga penyewaan armada.
    </p>

    <!-- Dual Pill Buttons (Tetap sama) -->
    <div class="flex items-center justify-center gap-3 sm:gap-4 flex-wrap">
        <a 
            href="https://wa.me/6281112143111?text={{ urlencode(__('Halo Mechatron, saya tertarik untuk konsultasi mengenai Layanan Drone Mechatron.')) }}" 
            target="_blank" 
            rel="noopener noreferrer" 
            class="bg-white hover:bg-gray-100 text-[#111111] font-medium text-[13px] sm:text-[15px] px-7 sm:px-9 py-2.5 sm:py-3 rounded-full transition-all shadow-md text-center"
        >
            {{ __('Konsultasi Kebutuhan') }}
        </a>
        
        <a 
            href="#katalog-bento" 
            class="bg-white/25 hover:bg-white/35 backdrop-blur-md text-white font-medium text-[13px] sm:text-[15px] px-6 sm:px-8 py-2.5 sm:py-3 rounded-full transition-all flex items-center gap-2"
        >
            <span>{{ __('Lihat Katalog Layanan') }}</span>
        </a>
    </div>
</div>
</section>

<!-- Editorial Narrative Text Block -->
<section class="py-16 sm:py-20 md:py-24 bg-white">
    <div class="max-w-[860px] mx-auto px-6 text-center">
        <p class="text-[15px] sm:text-[17px] md:text-[18px] text-[#222222] font-normal leading-[1.7] tracking-[-0.01em]">
            {{ __('Dukung produktivitas lahan Anda melalui layanan komprehensif Mechatron. Kami menghadirkan dukungan operasional penuh, mulai dari pelatihan terbang presisi, pusat perawatan terpadu, hingga penyewaan armada drone agrikultur berkapasitas besar untuk memastikan efisiensi kerja di lapangan.') }}
        </p>
    </div>
</section>