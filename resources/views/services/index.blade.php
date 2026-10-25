@extends('layouts.app')

@section('title', 'Mechatron Services - Solusi Drone Profesional')
@section('meta_description', 'Jelajahi seluruh layanan drone profesional Mechatron: Fotografi sinematik, Pemetaan LiDAR, Agrikultur presisi, Sewa Drone, Pelatihan Pilot Berlisensi, dan Perawatan Drone.')

@section('content')
    <!-- Hero Section (Full Viewport Screen, Gambar 1 Desktop & Gambar 2 Mobile) -->
    <section class="relative w-full h-screen min-h-[100dvh] flex items-center justify-center overflow-hidden bg-neutral-950">
        <!-- Desktop Background -->
        <div class="hidden md:block absolute inset-0 z-0">
            <img
                src="{{ asset('images/agrikultur-drone-sunset.jpg') }}"
                alt="Mechatron Aerial Services"
                class="w-full h-full object-cover object-center"
            />
            <div class="absolute inset-0 bg-gradient-to-b from-black/55 via-black/20 to-black/65"></div>
        </div>

        <!-- Mobile Background -->
        <div class="block md:hidden absolute inset-0 z-0">
            <img
                src="{{ asset('images/agrikultur-drone-spraying.jpg') }}"
                alt="Mechatron Aerial Services"
                class="w-full h-full object-cover object-center"
            />
            <div class="absolute inset-0 bg-gradient-to-b from-black/55 via-black/20 to-black/65"></div>
        </div>

        <!-- Teks di Langit Tengah -->
        <div class="relative z-10 max-w-4xl mx-auto px-4 text-center flex flex-col items-center pt-16 sm:pt-20">
            <p class="text-[13px] sm:text-[16px] md:text-[18px] font-normal text-white/90 tracking-wide mb-2 sm:mb-3">
                Solusi Drone Profesional & Rekayasa Presisi
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
                    href="https://wa.me/6281112143111?text={{ urlencode('Halo Mechatron, saya tertarik untuk konsultasi mengenai Layanan Drone Mechatron.') }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="bg-white hover:bg-gray-100 text-[#111111] font-medium text-[13px] sm:text-[15px] px-7 sm:px-9 py-2.5 sm:py-3 rounded-full transition-all shadow-md text-decoration-none"
                >
                    Konsultasi Sekarang
                </a>

                <a
                    href="#katalog-bento"
                    class="bg-white/25 hover:bg-white/35 backdrop-blur-md text-white font-medium text-[13px] sm:text-[15px] px-6 sm:px-8 py-2.5 sm:py-3 rounded-full transition-all inline-flex items-center gap-2 text-decoration-none"
                >
                    <span>Jelajahi Layanan</span>
                    <span class="text-[10px]">▶</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Editorial Narrative Text Block -->
    <section class="py-16 sm:py-20 md:py-24 bg-white">
        <div class="max-w-[860px] mx-auto px-6 text-center">
            <p class="text-[15px] sm:text-[17px] md:text-[18px] text-[#222222] font-normal leading-[1.7] tracking-[-0.01em]">
                Hadirkan keunggulan operasional dan nilai tambah bisnis Anda dengan rangkaian solusi drone enterprise terintegrasi dari Mechatron. Dari dokumentasi visual sinematik beresolusi 50MP dan 4K HDR, pemetaan LiDAR dengan akurasi sentimeter, drone pertanian presisi berkapasitas besar, hingga armada rental siap pakai, pelatihan pilot resmi FASI, dan perawatan terakreditasi pabrikan. Kami menghadirkan teknologi mutakhir dengan presisi terbaik untuk setiap kebutuhan kerja Anda.
            </p>
        </div>
    </section>

    <!-- Asymmetric Bento Grid -->
    <section id="katalog-bento" class="pb-24 sm:pb-32 bg-white">
        <div class="max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
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
    </section>

    <!-- Bottom Banner Penutup Khas DJI -->
    <section class="py-20 sm:py-24 bg-[#141416] text-white text-center">
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
