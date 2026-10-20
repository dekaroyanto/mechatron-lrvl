@extends('layouts.app')

@section('title', $service['title'] . ' - ' . $service['headline'] . ' | Mechatron Services')
@section('meta_description', $service['description'])

@php
    $whatsappUrl = 'https://wa.me/6281112143111?text=' . urlencode('Halo Mechatron, saya tertarik untuk konsultasi mengenai Layanan ' . $service['title'] . '.');
@endphp

@section('content')
    <!-- Hero Section (Full Viewport Screen, Edge-to-Edge Gambar) -->
    <section id="ringkasan" class="relative w-full h-screen min-h-[100dvh] flex items-center justify-center overflow-hidden bg-neutral-950">
        <!-- Background Image Full Bleed -->
        <div class="absolute inset-0 z-0">
            <img
                src="{{ $service['image'] }}"
                alt="{{ $service['title'] }}"
                class="w-full h-full object-cover object-center"
            />
            <div class="absolute inset-0 bg-gradient-to-b from-black/55 via-black/20 to-black/65"></div>
        </div>

        <!-- Teks di Langit Tengah -->
        <div class="relative z-10 max-w-4xl mx-auto px-4 text-center flex flex-col items-center pt-16 sm:pt-20">
            <p class="text-[13px] sm:text-[16px] md:text-[18px] font-normal text-white/90 tracking-wide mb-2 sm:mb-3">
                {{ $service['category'] }}
            </p>

            <h1 class="text-[36px] sm:text-[56px] md:text-[70px] lg:text-[78px] font-extrabold text-white tracking-tight leading-none uppercase mb-2 sm:mb-3">
                MECHATRON {{ strtoupper($service['title']) }}
            </h1>

            <p class="text-[16px] sm:text-[22px] md:text-[25px] font-medium text-white/95 tracking-tight mb-3 sm:mb-4 max-w-2xl leading-snug">
                {{ $service['headline'] }}
            </p>

            @if(!empty($service['tagline']))
                <p class="text-[13px] sm:text-[15px] md:text-[17px] font-normal text-white/85 max-w-2xl leading-relaxed mb-7 sm:mb-9 drop-shadow">
                    {{ $service['tagline'] }}
                </p>
            @endif

            <!-- Dual Pill Buttons -->
            <div class="flex items-center justify-center gap-3 sm:gap-4 flex-wrap">
                <a
                    href="{{ $whatsappUrl }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="bg-white hover:bg-gray-100 text-[#111111] font-medium text-[13px] sm:text-[15px] px-7 sm:px-9 py-2.5 sm:py-3 rounded-full transition-all shadow-md hover:scale-105 active:scale-95 text-decoration-none"
                >
                    Konsultasi Sekarang
                </a>

                <a
                    href="#fitur"
                    class="bg-white/25 hover:bg-white/35 backdrop-blur-md text-white font-medium text-[13px] sm:text-[15px] px-6 sm:px-8 py-2.5 sm:py-3 rounded-full transition-all inline-flex items-center gap-2 hover:scale-105 active:scale-95 text-decoration-none"
                >
                    <span>Lihat Fitur Lengkap</span>
                    <span class="text-[10px]">▶</span>
                </a>
            </div>

            <!-- Key Highlights Chips -->
            @if(!empty($service['highlights']))
                <div class="mt-8 sm:mt-10 flex flex-wrap items-center justify-center gap-2 sm:gap-3 max-w-3xl">
                    @foreach(array_slice($service['highlights'], 0, 4) as $h)
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-black/45 backdrop-blur-md border border-white/20 text-white/95 text-[11px] sm:text-[13px] font-medium shadow-sm hover:border-white/50 transition-colors">
                            <span class="text-[#60A5FA] font-bold">{{ $h['stat'] }}</span>
                            <span class="text-white/40">•</span>
                            <span>{{ $h['title'] }}</span>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    <!-- Editorial Narrative Text Block -->
    <section class="py-16 sm:py-20 md:py-24 bg-white">
        <div class="max-w-[860px] mx-auto px-6 text-center">
            <p class="text-[15px] sm:text-[17px] md:text-[18px] text-[#222222] font-normal leading-[1.7] tracking-[-0.01em]">
                {{ $service['longDescription'] }}
            </p>
        </div>
    </section>

    <!-- Asymmetric Bento Grid -->
    <section id="fitur" class="pb-20 sm:pb-28 bg-white">
        <div class="max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 sm:gap-6">
                <!-- KARTU 1 (Kiri Besar / Tall Card) -->
                <div class="lg:col-span-7 rounded-[24px] sm:rounded-[32px] overflow-hidden relative bg-neutral-900 min-h-[480px] sm:min-h-[560px] lg:min-h-[620px] flex flex-col justify-start border border-gray-100/80 shadow-sm">
                    <div class="absolute inset-0 z-0">
                        <img
                            src="{{ $service['deepFeatures'][0]['image'] ?? $service['image'] }}"
                            alt="{{ $service['title'] }}"
                            class="w-full h-full object-cover object-center"
                        />
                        <div class="absolute inset-0 bg-gradient-to-b from-black/75 via-black/25 to-black/45"></div>
                    </div>

                    <div class="p-7 sm:p-10 z-10 relative text-white">
                        <span class="text-[11px] font-semibold uppercase tracking-wider text-[#60A5FA] mb-2 block">
                            Fitur Unggulan
                        </span>
                        <h2 class="text-[24px] sm:text-[30px] lg:text-[36px] font-bold text-white tracking-tight leading-tight max-w-md">
                            {{ $service['deepFeatures'][0]['title'] ?? $service['headline'] }}
                        </h2>
                        <p class="text-[14px] sm:text-[15px] text-white/90 mt-2.5 max-w-md leading-relaxed">
                            {{ $service['deepFeatures'][0]['description'] ?? $service['description'] }}
                        </p>

                        @if(!empty($service['deepFeatures'][0]['bullets']))
                            <div class="mt-4 space-y-2">
                                @foreach($service['deepFeatures'][0]['bullets'] as $b)
                                    <div class="flex items-center gap-2.5 text-[13px] text-white/95">
                                        <span class="text-[#60A5FA] font-bold">✓</span>
                                        <span>{{ $b }}</span>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>

                <!-- KOLOM KANAN: DUA KARTU BERTUMPUK -->
                <div class="lg:col-span-5 flex flex-col gap-5 sm:gap-6">
                    <!-- KARTU 2 -->
                    <div class="rounded-[24px] sm:rounded-[32px] overflow-hidden relative bg-neutral-900 min-h-[260px] sm:min-h-[295px] flex flex-col justify-start border border-gray-100/80 shadow-sm">
                        <div class="absolute inset-0 z-0">
                            <img
                                src="{{ $service['deepFeatures'][1]['image'] ?? $service['image'] }}"
                                alt="{{ $service['title'] }}"
                                class="w-full h-full object-cover object-center"
                            />
                            <div class="absolute inset-0 bg-gradient-to-r from-black/75 via-black/40 to-black/25"></div>
                        </div>

                        <div class="p-6 sm:p-8 z-10 relative text-white">
                            <span class="text-[11px] font-semibold uppercase tracking-wider text-[#60A5FA] mb-1.5 block">
                                Keandalan Sistem
                            </span>
                            <h2 class="text-[20px] sm:text-[24px] font-bold text-white tracking-tight leading-snug max-w-xs">
                                {{ $service['deepFeatures'][1]['title'] ?? $service['highlights'][0]['title'] ?? 'Keandalan & Standar Mutu' }}
                            </h2>
                            <p class="text-[13px] text-white/90 mt-2 max-w-xs leading-relaxed">
                                {{ $service['deepFeatures'][1]['description'] ?? $service['highlights'][0]['desc'] ?? '' }}
                            </p>
                        </div>
                    </div>

                    <!-- KARTU 3 -->
                    <div class="rounded-[24px] sm:rounded-[32px] overflow-hidden relative bg-neutral-900 min-h-[260px] sm:min-h-[295px] flex flex-col justify-start border border-gray-100/80 shadow-sm">
                        <div class="absolute inset-0 z-0">
                            <img
                                src="{{ $service['image'] }}"
                                alt="{{ $service['title'] }}"
                                class="w-full h-full object-cover object-center"
                            />
                            <div class="absolute inset-0 bg-gradient-to-r from-black/75 via-black/40 to-black/25"></div>
                        </div>

                        <div class="p-6 sm:p-8 z-10 relative text-white">
                            <span class="text-[11px] font-semibold uppercase tracking-wider text-[#60A5FA] mb-1.5 block">
                                Regulasi & Keselamatan
                            </span>
                            <h2 class="text-[20px] sm:text-[24px] font-bold text-white tracking-tight leading-snug max-w-xs">
                                {{ $service['highlights'][1]['title'] ?? 'Spesifikasi & Keamanan Regulasi' }}
                            </h2>
                            <p class="text-[13px] text-white/90 mt-2 max-w-xs leading-relaxed">
                                {{ $service['highlights'][1]['desc'] ?? 'Didukung sertifikasi resmi pilot FASI dan jaminan prosedur keselamatan standar CASR.' }}
                            </p>
                        </div>
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
                href="{{ $whatsappUrl }}"
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
