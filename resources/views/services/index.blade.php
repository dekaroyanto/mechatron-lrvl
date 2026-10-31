@extends('layouts.app')

@section('title', 'Layanan Drone Profesional | Mechatron')
@section('meta_description', 'Layanan drone profesional Mechatron: Pelatihan Pilot Drone berlisensi resmi, Perawatan Drone standar pabrikan, dan Sewa Drone armada terlengkap.')
@section('navbar_theme', 'light')

@section('content')
<div class="bg-[#F8FAFC] min-h-screen pt-24 sm:pt-28 pb-16 sm:pb-24">
    <div class="max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
        <!-- 1. Header Section -->
        <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-14">
            <h1 class="text-[32px] sm:text-[42px] md:text-[50px] font-extrabold text-slate-950 tracking-tight leading-[1.12] mb-4">
                Layanan Drone Profesional
            </h1>
            <p class="text-[15px] sm:text-[17px] md:text-[18px] text-slate-600 font-normal leading-relaxed">
                Dukungan menyeluruh untuk kebutuhan drone Anda, mulai dari pelatihan pilot drone berlisensi resmi, perawatan unit standar pabrikan, hingga penyewaan armada drone terlengkap.
            </p>
        </div>

        <!-- 2. The 3 Official Services: Bento Grid (DJI Style Showcase) -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-7 lg:gap-8 mb-16 sm:mb-20">
            <!-- SERVICE 1: PELATIHAN PILOT DRONE (Left Tall Card) -->
            @php $s = $allServices['pelatihanpilot'] ?? []; @endphp
            <a
                href="{{ route('services.show', 'pelatihanpilot') }}"
                class="group relative block w-full rounded-[28px] sm:rounded-[32px] overflow-hidden bg-slate-100 border border-slate-200/70 shadow-sm hover:shadow-2xl transition-all duration-300 min-h-[380px] sm:min-h-[480px] lg:min-h-[580px] h-full text-decoration-none"
            >
                <!-- Background Image -->
                <img
                    src="{{ asset('images/service_pelatihan_pilot.jpg') }}"
                    alt="Pelatihan Pilot Drone"
                    class="absolute inset-0 w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 ease-out"
                />

                <!-- Dark Gradient for Text Contrast -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/45 to-black/10 pointer-events-none"></div>

                <!-- Content -->
                <div class="absolute inset-0 z-10 flex flex-col justify-end p-7 sm:p-9 lg:p-10">
                    <span class="inline-flex self-start items-center text-[10px] sm:text-[11px] font-bold uppercase tracking-wider text-blue-300 bg-white/10 px-3 py-1 rounded-full mb-3 backdrop-blur-xs">
                        {{ $s['category'] ?? 'Professional Academy' }}
                    </span>
                    <h2 class="text-2xl sm:text-3xl lg:text-[32px] font-bold text-white group-hover:text-blue-400 tracking-tight leading-snug drop-shadow-[0_2px_8px_rgba(0,0,0,0.75)] transition-colors duration-200 mb-2.5">
                        {{ $s['title'] ?? 'Pelatihan Pilot Drone' }}
                    </h2>
                    <p class="text-[13px] sm:text-[14px] text-slate-200 font-normal leading-relaxed max-w-md mb-4 line-clamp-2 drop-shadow-[0_1px_4px_rgba(0,0,0,0.6)]">
                        {{ $s['description'] ?? '' }}
                    </p>
                    <div class="flex flex-wrap items-center gap-2 mb-5">
                        @foreach(array_slice($s['highlights'] ?? [], 0, 3) as $h)
                            <span class="inline-flex items-center text-[11px] sm:text-[12px] font-semibold text-white bg-white/15 border border-white/15 px-2.5 py-1 rounded-full backdrop-blur-xs">
                                {{ $h['stat'] }}
                            </span>
                        @endforeach
                    </div>
                    <span class="inline-flex items-center gap-1.5 text-[13px] sm:text-[14px] font-semibold text-white">
                        <span>Selengkapnya</span>
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M9 5l7 7-7 7"/></svg>
                    </span>
                </div>
            </a>

            <!-- Right Column: Stacked Cards (2 & 3) -->
            <div class="flex flex-col gap-6 sm:gap-7 lg:gap-8 h-full">
                <!-- SERVICE 2: PERAWATAN DRONE (Right Top Card) -->
                @php $s = $allServices['perawatandrone'] ?? []; @endphp
                <a
                    href="{{ route('services.show', 'perawatandrone') }}"
                    class="group relative block w-full rounded-[28px] sm:rounded-[32px] overflow-hidden bg-slate-100 border border-slate-200/70 shadow-sm hover:shadow-2xl transition-all duration-300 min-h-[240px] sm:min-h-[280px] lg:min-h-[290px] flex-1 text-decoration-none"
                >
                    <!-- Background Image -->
                    <img
                        src="{{ asset('images/service_perawatan_drone.jpg') }}"
                        alt="Perawatan Drone"
                        class="absolute inset-0 w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 ease-out"
                    />

                    <!-- Dark Gradient for Text Contrast -->
                    <div class="absolute inset-0 bg-gradient-to-r from-black/85 via-black/45 to-black/10 pointer-events-none"></div>

                    <!-- Content -->
                    <div class="absolute inset-0 z-10 p-7 sm:p-9 h-full flex flex-col justify-end max-w-[340px] sm:max-w-[400px]">
                        <span class="inline-flex self-start items-center text-[10px] sm:text-[11px] font-bold uppercase tracking-wider text-blue-300 bg-white/10 px-2.5 py-1 rounded-full mb-2.5 backdrop-blur-xs">
                            {{ $s['category'] ?? 'Engineering & Maintenance' }}
                        </span>
                        <h2 class="text-xl sm:text-2xl lg:text-[26px] font-bold text-white group-hover:text-blue-400 tracking-tight leading-snug drop-shadow-[0_2px_8px_rgba(0,0,0,0.75)] transition-colors duration-200 mb-2">
                            {{ $s['title'] ?? 'Perawatan Drone' }}
                        </h2>
                        <div class="flex flex-wrap items-center gap-2 mb-3">
                            @foreach(array_slice($s['highlights'] ?? [], 0, 2) as $h)
                                <span class="inline-flex items-center text-[11px] font-semibold text-white bg-white/15 border border-white/15 px-2.5 py-1 rounded-full backdrop-blur-xs">
                                    {{ $h['stat'] }}
                                </span>
                            @endforeach
                        </div>
                        <span class="inline-flex items-center gap-1.5 text-[13px] font-semibold text-white">
                            <span>Selengkapnya</span>
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M9 5l7 7-7 7"/></svg>
                        </span>
                    </div>
                </a>

                <!-- SERVICE 3: SEWA DRONE (Right Bottom Card) -->
                @php $s = $allServices['sewadrone'] ?? []; @endphp
                <a
                    href="{{ route('services.show', 'sewadrone') }}"
                    class="group relative block w-full rounded-[28px] sm:rounded-[32px] overflow-hidden bg-slate-100 border border-slate-200/70 shadow-sm hover:shadow-2xl transition-all duration-300 min-h-[240px] sm:min-h-[280px] lg:min-h-[290px] flex-1 text-decoration-none"
                >
                    <!-- Background Image -->
                    <img
                        src="{{ asset('images/service_sewa_drone.jpg') }}"
                        alt="Sewa Drone"
                        class="absolute inset-0 w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 ease-out"
                    />

                    <!-- Dark Gradient for Text Contrast -->
                    <div class="absolute inset-0 bg-gradient-to-r from-black/85 via-black/45 to-black/10 pointer-events-none"></div>

                    <!-- Content -->
                    <div class="absolute inset-0 z-10 p-7 sm:p-9 h-full flex flex-col justify-end max-w-[340px] sm:max-w-[400px]">
                        <span class="inline-flex self-start items-center text-[10px] sm:text-[11px] font-bold uppercase tracking-wider text-blue-300 bg-white/10 px-2.5 py-1 rounded-full mb-2.5 backdrop-blur-xs">
                            {{ $s['category'] ?? 'Fleet Rental & Equipment' }}
                        </span>
                        <h2 class="text-xl sm:text-2xl lg:text-[26px] font-bold text-white group-hover:text-blue-400 tracking-tight leading-snug drop-shadow-[0_2px_8px_rgba(0,0,0,0.75)] transition-colors duration-200 mb-2">
                            {{ $s['title'] ?? 'Sewa Drone' }}
                        </h2>
                        <div class="flex flex-wrap items-center gap-2 mb-3">
                            @foreach(array_slice($s['highlights'] ?? [], 0, 2) as $h)
                                <span class="inline-flex items-center text-[11px] font-semibold text-white bg-white/15 border border-white/15 px-2.5 py-1 rounded-full backdrop-blur-xs">
                                    {{ $h['stat'] }}
                                </span>
                            @endforeach
                        </div>
                        <span class="inline-flex items-center gap-1.5 text-[13px] font-semibold text-white">
                            <span>Selengkapnya</span>
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M9 5l7 7-7 7"/></svg>
                        </span>
                    </div>
                </a>
            </div>
        </div>

        <!-- 3. Bottom Service CTA (Slim Band) -->
        <div class="mt-12 mb-6 sm:mt-14 bg-slate-900 rounded-2xl px-6 py-6 sm:px-10 sm:py-7 text-white relative overflow-hidden shadow-lg border border-slate-800">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-600/20 via-transparent to-indigo-600/20 pointer-events-none"></div>
            <div class="relative z-10 flex flex-col lg:flex-row lg:items-center lg:justify-between gap-5 lg:gap-8">
                <div class="max-w-xl text-center lg:text-left">
                    <h2 class="text-[20px] sm:text-[24px] font-extrabold tracking-tight leading-tight mb-1.5">
                        Butuh Layanan Drone yang Sesuai Kebutuhan Anda?
                    </h2>
                    <p class="text-[13px] sm:text-[14px] text-slate-300 font-light leading-relaxed">
                        Tim instruktur dan teknisi Mechatron siap membantu kebutuhan pelatihan, perawatan, hingga penyewaan drone Anda.
                    </p>
                </div>
                <div class="flex items-center justify-center gap-3 flex-wrap shrink-0">
                    <a
                        href="https://wa.me/6281112143111?text={{ urlencode('Halo Mechatron Indonesia, kami tertarik untuk berkonsultasi mengenai layanan drone (pelatihan pilot, perawatan unit, atau sewa armada). Mohon informasi lebih lanjut.') }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-[#0070D5] hover:bg-[#005bb5] text-white text-[13px] sm:text-[14px] font-semibold transition-all duration-300 shadow-md hover:shadow-lg hover:scale-105 active:scale-95 cursor-pointer text-decoration-none whitespace-nowrap"
                    >
                        <span>Konsultasikan Layanan Anda</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                    <a
                        href="{{ route('contact') }}"
                        class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-white/10 hover:bg-white/20 text-white border border-white/20 hover:border-white text-[13px] sm:text-[14px] font-semibold transition-all duration-300 backdrop-blur-md cursor-pointer text-decoration-none whitespace-nowrap"
                    >
                        <span>Hubungi Kami</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
