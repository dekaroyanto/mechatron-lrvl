@extends('layouts.app')

@section('title', 'Layanan Drone Profesional | Mechatron')
@section('meta_description', 'Layanan drone profesional Mechatron: Pelatihan Pilot Drone berlisensi resmi, Perawatan Drone standar pabrikan, dan Sewa Drone armada terlengkap.')
@section('navbar_theme', 'light')

@section('content')
<div class="bg-[#F8FAFC] min-h-screen pt-24 sm:pt-28 pb-16 sm:pb-24">
    <div class="max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
        <!-- 1. Header Section -->
        <div class="text-center max-w-3xl mx-auto mb-12 sm:mb-16">
            <h1 class="text-[32px] sm:text-[42px] md:text-[50px] font-extrabold text-slate-950 tracking-tight leading-[1.12] mb-4">
                Layanan Drone Profesional
            </h1>
            <p class="text-[15px] sm:text-[17px] md:text-[18px] text-slate-600 font-normal leading-relaxed">
                Tiga pilar layanan terpadu dari Mechatron untuk memastikan kesiapan armada, keahlian penerbang bersertifikat, dan fleksibilitas operasional bisnis Anda.
            </p>
        </div>

        <!-- 2. The 3 Official Services: Bento Grid (DJI Style Showcase) -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-7 lg:gap-8 mb-16 sm:mb-20">
            <!-- SERVICE 1: PELATIHAN PILOT DRONE (Left Tall Card) -->
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
                <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/20 to-transparent pointer-events-none"></div>

                <!-- Title Only -->
                <div class="relative z-10 p-7 sm:p-9 lg:p-10 text-center">
                    <h2 class="text-2xl sm:text-3xl lg:text-[32px] font-bold text-white group-hover:text-blue-400 tracking-tight leading-snug drop-shadow-[0_2px_8px_rgba(0,0,0,0.75)] transition-colors duration-200">
                        {{ $allServices['pelatihanpilot']['title'] ?? 'Pelatihan Pilot Drone' }}
                    </h2>
                </div>
            </a>

            <!-- Right Column: Stacked Cards (2 & 3) -->
            <div class="flex flex-col gap-6 sm:gap-7 lg:gap-8 h-full">
                <!-- SERVICE 2: PERAWATAN DRONE (Right Top Card) -->
                <a
                    href="{{ route('services.show', 'perawatandrone') }}"
                    class="group relative block w-full rounded-[28px] sm:rounded-[32px] overflow-hidden bg-slate-100 border border-slate-200/70 shadow-sm hover:shadow-2xl transition-all duration-300 min-h-[220px] sm:min-h-[260px] lg:min-h-[270px] flex-1 text-decoration-none"
                >
                    <!-- Background Image -->
                    <img
                        src="{{ asset('images/service_perawatan_drone.jpg') }}"
                        alt="Perawatan Drone"
                        class="absolute inset-0 w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 ease-out"
                    />

                    <!-- Dark Gradient for Text Contrast -->
                    <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/25 to-transparent pointer-events-none"></div>

                    <!-- Title Only -->
                    <div class="relative z-10 p-7 sm:p-9 h-full flex items-start">
                        <h2 class="text-xl sm:text-2xl lg:text-[26px] font-bold text-white group-hover:text-blue-400 tracking-tight leading-snug max-w-[280px] sm:max-w-[340px] drop-shadow-[0_2px_8px_rgba(0,0,0,0.75)] transition-colors duration-200">
                            {{ $allServices['perawatandrone']['title'] ?? 'Perawatan Drone' }}
                        </h2>
                    </div>
                </a>

                <!-- SERVICE 3: SEWA DRONE (Right Bottom Card) -->
                <a
                    href="{{ route('services.show', 'sewadrone') }}"
                    class="group relative block w-full rounded-[28px] sm:rounded-[32px] overflow-hidden bg-slate-100 border border-slate-200/70 shadow-sm hover:shadow-2xl transition-all duration-300 min-h-[220px] sm:min-h-[260px] lg:min-h-[270px] flex-1 text-decoration-none"
                >
                    <!-- Background Image -->
                    <img
                        src="{{ asset('images/service_sewa_drone.jpg') }}"
                        alt="Sewa Drone"
                        class="absolute inset-0 w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 ease-out"
                    />

                    <!-- Dark Gradient for Text Contrast -->
                    <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/25 to-transparent pointer-events-none"></div>

                    <!-- Title Only -->
                    <div class="relative z-10 p-7 sm:p-9 h-full flex items-center sm:items-start">
                        <h2 class="text-xl sm:text-2xl lg:text-[26px] font-bold text-white group-hover:text-blue-400 tracking-tight leading-snug max-w-[280px] sm:max-w-[340px] drop-shadow-[0_2px_8px_rgba(0,0,0,0.75)] transition-colors duration-200">
                            {{ $allServices['sewadrone']['title'] ?? 'Sewa Drone' }}
                        </h2>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
