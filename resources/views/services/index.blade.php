@extends('layouts.app')

@section('title', 'Mechatron Services - Solusi Drone Profesional')
@section('meta_description', 'Jelajahi seluruh layanan drone profesional Mechatron: Fotografi sinematik, Pemetaan LiDAR, Agrikultur presisi, Sewa Drone, Pelatihan Pilot Berlisensi, dan Perawatan Drone.')
@section('navbar_theme', 'light')

@section('content')
<div class="bg-[#F8FAFC] min-h-screen pt-24 sm:pt-28 pb-20 sm:pb-28">
    <div class="max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
        <!-- 1. Breadcrumbs -->
        <nav aria-label="Breadcrumb" class="flex items-center gap-2 text-[12px] sm:text-[13px] text-slate-500 font-medium mb-6 sm:mb-8 overflow-x-auto whitespace-nowrap scrollbar-none">
            <a href="{{ route('home') }}" class="hover:text-[#0070D5] transition-colors text-decoration-none text-inherit">Home</a>
            <span>/</span>
            <span class="text-slate-900 font-semibold">Services</span>
        </nav>

        <!-- 2. Header Section -->
        <div class="text-center max-w-3xl mx-auto mb-12 sm:mb-16">
            <h1 class="text-[32px] sm:text-[42px] md:text-[50px] font-extrabold text-slate-950 tracking-tight leading-[1.12] mb-4">
                Layanan Drone Profesional
            </h1>
            <p class="text-[15px] sm:text-[17px] md:text-[18px] text-slate-600 font-normal leading-relaxed">
                Hadirkan keunggulan operasional dan nilai tambah bisnis Anda dengan rangkaian solusi drone enterprise terintegrasi dari Mechatron. Dari dokumentasi visual sinematik beresolusi 50MP dan 4K HDR, pemetaan LiDAR dengan akurasi sentimeter, hingga drone pertanian presisi berkapasitas besar.
            </p>
        </div>

        <!-- 3. Asymmetric Bento Grid -->
        <div id="katalog-bento" class="space-y-16">
            <!-- GRUP 1: TEKNOLOGI BARU UNTUK BISNIS ANDA -->
            <div>
                <div class="mb-8">
                    <span class="text-[12px] font-semibold uppercase tracking-wider text-[#0070D5] block mb-1">
                        Solusi Bisnis & Pemetaan
                    </span>
                    <h2 class="text-[26px] sm:text-[32px] font-bold text-[#111111] tracking-tight">
                        Teknologi Baru Untuk Bisnis Anda
                    </h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 sm:gap-6">
                    <!-- KARTU 1 (Kiri Besar / Tall Card): FOTOGRAFI -->
                    <a
                        href="{{ route('services.show', 'fotografi') }}"
                        class="group lg:col-span-7 rounded-[24px] sm:rounded-[32px] overflow-hidden relative min-h-[480px] sm:min-h-[560px] lg:min-h-[620px] flex flex-col justify-start transition-all duration-500 hover:shadow-2xl block border border-gray-100/80 bg-neutral-900 text-decoration-none"
                    >
                        <div class="absolute inset-0 z-0">
                            <img
                                src="https://images.unsplash.com/photo-1533063319369-0de118afe00a?q=80&w=1221&auto=format&fit=crop"
                                alt="Layanan Fotografi Drone"
                                class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 ease-out"
                            />
                            <div class="absolute inset-0 bg-gradient-to-b from-black/75 via-black/25 to-black/45 group-hover:from-black/85 transition-opacity duration-500"></div>
                        </div>

                        <div class="relative z-10 p-7 sm:p-10 text-white">
                            <span class="text-[11px] font-semibold uppercase tracking-wider text-[#60A5FA] mb-2 block">
                                Creative Aerial & Media
                            </span>
                            <h3 class="text-[24px] sm:text-[30px] lg:text-[36px] font-bold text-white tracking-tight leading-tight max-w-md">
                                Fotografi Sinematik, Sudut Pandang Presisi
                            </h3>
                            <p class="text-[14px] sm:text-[15px] text-white/90 mt-2.5 max-w-sm leading-relaxed">
                                Dokumentasi udara kualitas sinematik 50MP RAW dan video 4K HDR untuk profil proyek & event komersial.
                            </p>
                            <div class="inline-flex items-center gap-1.5 text-[13px] sm:text-[14px] font-medium text-white mt-4 group-hover:text-blue-300 transition-colors">
                                <span>Pelajari Lebih Lanjut</span>
                                <span class="group-hover:translate-x-1.5 transition-transform">›</span>
                            </div>
                        </div>
                    </a>

                    <!-- KOLOM KANAN: DUA KARTU BERTUMPUK (LIDAR & AGRIKULTUR) -->
                    <div class="lg:col-span-5 flex flex-col gap-5 sm:gap-6">
                        <!-- KARTU 2: LIDAR -->
                        <a
                            href="{{ route('services.show', 'lidar') }}"
                            class="group rounded-[24px] sm:rounded-[32px] overflow-hidden relative min-h-[260px] sm:min-h-[295px] flex flex-col justify-start transition-all duration-500 hover:shadow-2xl block border border-gray-100/80 bg-neutral-900 text-decoration-none"
                        >
                            <div class="absolute inset-0 z-0">
                                <img
                                    src="https://images.unsplash.com/photo-1506947411487-a56738267384?auto=format&fit=crop&w=1400&q=85"
                                    alt="Pemetaan LiDAR Drone"
                                    class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 ease-out"
                                />
                                <div class="absolute inset-0 bg-gradient-to-r from-black/75 via-black/40 to-black/25 group-hover:from-black/85 transition-opacity duration-500"></div>
                            </div>

                            <div class="relative z-10 p-6 sm:p-8 text-white">
                                <span class="text-[11px] font-semibold uppercase tracking-wider text-[#60A5FA] mb-1.5 block">
                                    Geospatial & Surveying
                                </span>
                                <h3 class="text-[20px] sm:text-[24px] font-bold text-white tracking-tight leading-snug max-w-xs">
                                    Pemetaan LiDAR & Point Cloud 3D
                                </h3>
                                <p class="text-[13px] text-white/90 mt-2 max-w-xs leading-relaxed">
                                    Akurasi topografi tingkat sentimeter dengan penetrasi kanopi vegetasi lebat.
                                </p>
                                <div class="inline-flex items-center gap-1 text-[13px] font-medium text-white mt-3 group-hover:text-blue-300 transition-colors">
                                    <span>Pelajari Lebih Lanjut</span>
                                    <span class="group-hover:translate-x-1.5 transition-transform">›</span>
                                </div>
                            </div>
                        </a>

                        <!-- KARTU 3: AGRIKULTUR -->
                        <a
                            href="{{ route('services.show', 'agrikultur') }}"
                            class="group rounded-[24px] sm:rounded-[32px] overflow-hidden relative min-h-[260px] sm:min-h-[295px] flex flex-col justify-start transition-all duration-500 hover:shadow-2xl block border border-gray-100/80 bg-neutral-900 text-decoration-none"
                        >
                            <div class="absolute inset-0 z-0">
                                <img
                                    src="{{ asset('images/agrikultur-drone-sunset.jpg') }}"
                                    alt="Agrikultur Drone Pintar"
                                    class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 ease-out"
                                />
                                <div class="absolute inset-0 bg-gradient-to-r from-black/75 via-black/40 to-black/25 group-hover:from-black/85 transition-opacity duration-500"></div>
                            </div>

                            <div class="relative z-10 p-6 sm:p-8 text-white">
                                <span class="text-[11px] font-semibold uppercase tracking-wider text-[#60A5FA] mb-1.5 block">
                                    Smart Agriculture & Farming
                                </span>
                                <h3 class="text-[20px] sm:text-[24px] font-bold text-white tracking-tight leading-snug max-w-xs">
                                    Agrikultur & Pertanian Pintar
                                </h3>
                                <p class="text-[13px] text-white/90 mt-2 max-w-xs leading-relaxed">
                                    Penyemprotan otonom kapasitas 30L & pemetaan multispektral NDVI presisi.
                                </p>
                                <div class="inline-flex items-center gap-1 text-[13px] font-medium text-white mt-3 group-hover:text-blue-300 transition-colors">
                                    <span>Pelajari Lebih Lanjut</span>
                                    <span class="group-hover:translate-x-1.5 transition-transform">›</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
        </div>
    </div>
</div>

    <!-- Bottom Banner Penutup Khas DJI -->
    <section class="py-10 sm:py-24 bg-[#141416] text-white text-center mt-10">
        <div class="max-w-3xl mx-auto px-6">
            <h2 class="text-[28px] sm:text-[40px] font-bold tracking-tight mb-4">
                Mulai Proyek Drone Anda Bersama Mechatron
            </h2>
            <p class="text-[15px] sm:text-[17px] text-white/70 max-w-xl mx-auto mb-8">
                Konsultasikan spesifikasi teknis dan kebutuhan armada bersama tim ahli kami.
            </p>
            <a
                href="https://wa.me/6281112143111?text={{ urlencode('Halo Mechatron, saya tertarik untuk konsultasi mengenai Layanan Drone Mechatron.') }}"
                target="_blank"
                rel="noopener noreferrer"
                class="inline-flex items-center gap-2 bg-[#0070D5] hover:bg-[#005bb5] text-white text-[14px] sm:text-[15px] font-medium px-8 py-3.5 rounded-full shadow-lg transition-all text-decoration-none"
            >
                <span>Hubungi Kami via WhatsApp: +62 811 1214 3111</span>
                <span>›</span>
            </a>
        </div>
    </section>
@endsection
