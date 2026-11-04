@extends('layouts.app')

@section('title', 'About Us | Mechatron - Pelopor Solusi Drone Indonesia')
@section('meta_description', 'Mengenal Mechatron: Perusahaan pelopor inovasi teknologi drone pertanian, sistem kendali darat pintar (GCS), dan otomasi aerial presisi tinggi di Indonesia.')

@section('content')
<div class="bg-[#F8FAFC] min-h-screen">
    <!-- 1. Hero Section -->
    <section class="relative w-full bg-neutral-950 py-24 sm:py-32 overflow-hidden text-white">
        <!-- Background Ambient Image with Overlay -->
        <div class="absolute inset-0 z-0 opacity-30">
            <img
                src="{{ asset('images/agrikultur-drone-sunset.jpg') }}"
                alt="Mechatron Drone Agriculture"
                class="w-full h-full object-cover object-center filter grayscale"
            />
            <div class="absolute inset-0 bg-gradient-to-b from-neutral-950/80 via-neutral-950/90 to-neutral-950"></div>
        </div>

        <div class="relative z-10 max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8 text-center pt-8">
            <span class="inline-block text-[12px] sm:text-[13px] font-bold uppercase tracking-widest text-[#0070D5] bg-[#0070D5]/10 px-4 py-1.5 rounded-full mb-4 border border-[#0070D5]/20">
                About Mechatron
            </span>
            <h1 class="text-[36px] sm:text-[52px] md:text-[64px] font-extrabold tracking-tight leading-tight max-w-4xl mx-auto">
                Mendorong Otomasi Udara Cerdas di Indonesia
            </h1>
            <p class="text-[16px] sm:text-[19px] md:text-[21px] text-gray-300 font-light mt-5 max-w-3xl mx-auto leading-relaxed">
                Mechatron hadir sebagai pionir manufaktur dan penyedia solusi drone berkapasitas muat tinggi di Indonesia. Kami memadukan riset avionik, material komposit serat karbon berkekuatan tinggi, dan perangkat lunak navigasi cerdas untuk mendukung sektor agrikultur nasional.
            </p>
        </div>
    </section>

    <!-- 2. Numbers / Key Stats -->
    <section class="relative -mt-10 z-20 max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 p-8 sm:p-12 grid grid-cols-1 md:grid-cols-3 gap-8 divide-y md:divide-y-0 md:divide-x divide-gray-100 text-center">
            <div class="pt-4 md:pt-0">
                <div class="text-[34px] sm:text-[44px] font-extrabold text-[#0070D5] tracking-tight">46%</div>
                <div class="text-[14px] font-semibold text-gray-800 uppercase tracking-wider mt-1">TKDN</div>
                <p class="text-[12px] text-gray-500 mt-1 max-w-[200px] mx-auto">Persentase komponen lokal dalam produksi drone.</p>
            </div>
            <div class="pt-4 md:pt-0">
                <div class="text-[34px] sm:text-[44px] font-extrabold text-[#0070D5] tracking-tight">1ˢᵗ</div>
                <div class="text-[14px] font-semibold text-gray-800 uppercase tracking-wider mt-1">SNI</div>
                <p class="text-[12px] text-gray-500 mt-1 max-w-[200px] mx-auto">Drone pertama di Indonesia yang memenuhi standar SNI.</p>
            </div>
            <div class="pt-4 md:pt-0">
                <div class="text-[34px] sm:text-[44px] font-extrabold text-[#0070D5] tracking-tight">24/7</div>
                <div class="text-[14px] font-semibold text-gray-800 uppercase tracking-wider mt-1">Dukungan Servis</div>
                <p class="text-[12px] text-gray-500 mt-1 max-w-[200px] mx-auto">Kesiapan suku cadang orisinil dan teknisi ahli lapangan.</p>
            </div>
        </div>
    </section>

    <!-- 3. Our Story & Purpose -->
    <section class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-28">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div>
                <span class="text-[13px] font-bold text-[#0070D5] uppercase tracking-wider">Dedikasi Untuk Indonesia</span>
                <h2 class="text-[30px] sm:text-[40px] font-bold text-gray-900 tracking-tight leading-tight mt-2 mb-6">
                    Profil Perusahaan
                </h2>
                <div class="space-y-4 text-[15px] sm:text-[16px] text-gray-600 leading-relaxed">
                    <p>
                        <strong>PT Bandung Mekatronika Teknologi (BMT)</strong> adalah perusahaan yang bergerak di bidang teknologi mekatronika dan otomatisasi, dengan layanan utama meliputi desain, produksi, perbaikan, serta jasa konsultasi teknis.
                    </p>
                    <p>
                        BMT didirikan pada tahun 2022 oleh Bapak Hermanu. Awalnya, bisnis ini berfokus pada konsultasi keteknikan, pelatihan manajemen, dan pengadaan suku cadang mekatronika. Kami menerima paling banyak pesanan suku cadang untuk drone dan kendaraan listrik, sehingga kami fokus mengembangkan serta memproduksi drone dan sepeda listrik dengan merek dagang Mechatron dan BMT. Seiring perkembangan waktu, pengembangan drone BMT diperluas untuk berbagai sektor seperti pertanian, perkebunan, perikanan, survei pemetaan, dan bidang lain sesuai kebutuhan pengguna.
                    </p>
                </div>

                <div class="mt-8 pt-6 border-t border-gray-200 grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-lg bg-blue-50 text-[#0070D5] flex items-center justify-center shrink-0 font-bold">
                            ✓
                        </div>
                        <div>
                            <h4 class="text-[14px] font-semibold text-gray-900">Teknologi Teruji Nyata</h4>
                            <p class="text-[12px] text-gray-500">Ribuan jam terbang uji ekstrem tanpa insiden kegagalan sistem.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-lg bg-blue-50 text-[#0070D5] flex items-center justify-center shrink-0 font-bold">
                            ✓
                        </div>
                        <div>
                            <h4 class="text-[14px] font-semibold text-gray-900">Garansi & Suku Cadang Resmi</h4>
                            <p class="text-[12px] text-gray-500">Stok komponen melimpah tanpa menunggu impor berbulan-bulan.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative">
                <div class="rounded-3xl overflow-hidden shadow-2xl border border-gray-200">
                    <img
                        src="{{ asset('images/featured_drone_h30.jpg') }}"
                        alt="Mechatron Drone In Action"
                        class="w-full h-[400px] sm:h-[500px] object-cover object-center"
                    />
                </div>
                <div class="absolute -bottom-6 -left-6 bg-[#0070D5] text-white p-6 rounded-2xl shadow-xl max-w-xs hidden sm:block">
                    <p class="text-[14px] font-bold">Mechatron AGRI H-30</p>
                    <p class="text-[12px] text-blue-100 mt-1">Armada andalan muatan 30 liter dengan efisiensi semprot hingga 20 Ha per jam.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Vision & Mission -->
    <section class="bg-white py-20 border-y border-gray-200">
        <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-[13px] font-bold text-[#0070D5] uppercase tracking-wider">Arah & Komitmen</span>
                <h2 class="text-[30px] sm:text-[40px] font-bold text-gray-900 tracking-tight mt-2">Visi & Misi Kami</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-8 rounded-2xl bg-[#F8FAFC] border border-gray-100 hover:border-blue-200 transition-all hover:shadow-lg">
                    <div class="w-12 h-12 rounded-xl bg-[#0070D5] text-white flex items-center justify-center text-xl font-bold mb-6">
                        01
                    </div>
                    <h3 class="text-[18px] font-bold text-gray-900 mb-3">Solusi cerdas yang mudah diakses</h3>
                    <p class="text-[14px] text-gray-600 leading-relaxed">
                        BMT berkomitmen menciptakan solusi cerdas dan inovatif yang dapat diakses oleh berbagai kalangan sesuai kebutuhan mereka.
                    </p>
                </div>

                <div class="p-8 rounded-2xl bg-[#F8FAFC] border border-gray-100 hover:border-blue-200 transition-all hover:shadow-lg">
                    <div class="w-12 h-12 rounded-xl bg-[#0070D5] text-white flex items-center justify-center text-xl font-bold mb-6">
                        02
                    </div>
                    <h3 class="text-[18px] font-bold text-gray-900 mb-3">Modernisasi dan otomatisasi teknologi</h3>
                    <p class="text-[14px] text-gray-600 leading-relaxed">
                        BMT turut mendorong modernisasi dan otomatisasi melalui pemanfaatan teknologi yang tepat guna untuk meningkatkan efisiensi dan produktivitas.
                    </p>
                </div>

                <div class="p-8 rounded-2xl bg-[#F8FAFC] border border-gray-100 hover:border-blue-200 transition-all hover:shadow-lg">
                    <div class="w-12 h-12 rounded-xl bg-[#0070D5] text-white flex items-center justify-center text-xl font-bold mb-6">
                        03
                    </div>
                    <h3 class="text-[18px] font-bold text-gray-900 mb-3">Teknologi ramah lingkungan dan berkelanjutan</h3>
                    <p class="text-[14px] text-gray-600 leading-relaxed">
                        BMT menghadirkan teknologi yang ramah lingkungan untuk memberikan kontribusi nyata bagi masyarakat dan pembangunan berkelanjutan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. CTA Section -->
    <section class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center">
        <div class="bg-gradient-to-r from-neutral-900 via-neutral-950 to-neutral-900 text-white rounded-3xl p-10 sm:p-16 relative overflow-hidden shadow-2xl">
            <h2 class="text-[28px] sm:text-[40px] font-extrabold tracking-tight mb-4">
                Siap Meningkatkan Produktivitas Lahan Anda?
            </h2>
            <p class="text-[15px] sm:text-[17px] text-gray-300 max-w-2xl mx-auto mb-8 font-light">
                Konsultasikan kebutuhan armada atau jadwalkan demonstrasi terbang langsung bersama tim spesialis Mechatron.
            </p>
            <div class="flex flex-wrap items-center justify-center gap-4">
                <a
                    href="{{ route('contact') }}"
                    class="bg-[#0070D5] hover:bg-[#005bb5] text-white font-semibold px-8 py-3.5 rounded-full text-[15px] shadow-lg transition-all hover:scale-105"
                >
                    Hubungi Mechatron
                </a>
                <a
                    href="{{ route('services.index') }}"
                    class="bg-white/10 hover:bg-white/20 text-white font-medium px-8 py-3.5 rounded-full text-[15px] border border-white/20 transition-all"
                >
                    Lihat Seluruh Layanan
                </a>
            </div>
        </div>
    </section>
</div>
@endsection
