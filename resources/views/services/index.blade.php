@extends('layouts.app')

@section('title', 'Layanan Drone Profesional | Mechatron')
@section('meta_description', 'Layanan drone profesional Mechatron: Pelatihan Pilot Drone berlisensi resmi, Perawatan Drone standar pabrikan, dan Sewa Drone armada terlengkap.')
@section('navbar_theme', 'light')

@section('content')
<div class="bg-[#F8FAFC] min-h-screen pt-24 sm:pt-28 pb-16 sm:pb-24">
    <div class="max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
        <!-- 1. Header Section -->
        <div class="text-center max-w-3xl mx-auto mb-12 sm:mb-16">
            <span class="inline-block text-[12px] sm:text-[13px] font-bold uppercase tracking-wider text-[#0070D5] bg-blue-50 px-3.5 py-1.5 rounded-full border border-blue-200/60 mb-3 sm:mb-4">
                Layanan Resmi Mechatron
            </span>
            <h1 class="text-[32px] sm:text-[42px] md:text-[50px] font-extrabold text-slate-950 tracking-tight leading-[1.12] mb-4">
                Layanan Drone Profesional
            </h1>
            <p class="text-[15px] sm:text-[17px] md:text-[18px] text-slate-600 font-normal leading-relaxed">
                Tiga pilar layanan terpadu dari Mechatron untuk memastikan kesiapan armada, keahlian penerbang bersertifikat, dan fleksibilitas operasional bisnis Anda.
            </p>
        </div>

        <!-- 2. The 3 Official Services: Modern 3-Column Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-7 lg:gap-8 mb-16 sm:mb-20">
            <!-- SERVICE 1: PELATIHAN PILOT DRONE -->
            <div class="group bg-white rounded-[26px] sm:rounded-[30px] overflow-hidden border border-slate-200/80 shadow-md hover:shadow-2xl transition-all duration-300 flex flex-col justify-between">
                <div>
                    <!-- Image Card Header -->
                    <div class="relative h-[240px] sm:h-[260px] lg:h-[280px] w-full overflow-hidden bg-slate-900">
                        <img
                            src="{{ asset('images/service_pelatihan_pilot.jpg') }}"
                            alt="Pelatihan Pilot Drone Mechatron"
                            class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 ease-out"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/25 to-transparent"></div>
                        <span class="absolute top-4 left-4 text-[11px] font-bold uppercase tracking-wider text-white bg-blue-600/90 backdrop-blur-md px-3 py-1 rounded-full shadow-sm">
                            Akademi & Sertifikasi
                        </span>
                        <div class="absolute bottom-4 left-4 right-4 text-white">
                            <span class="text-[12px] text-blue-200 font-semibold block">Layanan 01</span>
                            <h3 class="text-[20px] sm:text-[22px] font-bold tracking-tight text-white leading-snug">
                                Pelatihan Pilot Drone
                            </h3>
                        </div>
                    </div>

                    <!-- Content Body -->
                    <div class="p-6 sm:p-7 space-y-4">
                        <p class="text-[14px] text-slate-600 leading-relaxed font-normal">
                            Program pelatihan terstruktur untuk mencetak penerbang drone kompeten dan berlisensi resmi. Membekali peserta dengan pemahaman regulasi udara, simulator, hingga praktik terbang lapangan.
                        </p>

                        <!-- Highlights Bullets -->
                        <ul class="space-y-2 p-0 m-0 list-none text-[13px] text-slate-700">
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-[#0070D5] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                <span>Kurikulum mengacu DKUPPU & FASI</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-[#0070D5] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                <span>Instruktur senior & flight simulator</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-[#0070D5] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                <span>Tersedia kelas corporate in-house</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Card Footer Button -->
                <div class="p-6 sm:p-7 pt-0">
                    <a
                        href="{{ route('services.show', 'pelatihanpilot') }}"
                        class="w-full inline-flex items-center justify-center gap-2 bg-[#0070D5] hover:bg-[#005bb5] text-white font-semibold text-[14px] py-3 rounded-full shadow-sm hover:shadow-md transition-all text-decoration-none group-hover:gap-3"
                    >
                        <span>Pelajari Lebih Lanjut</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>

            <!-- SERVICE 2: PERAWATAN DRONE -->
            <div class="group bg-white rounded-[26px] sm:rounded-[30px] overflow-hidden border border-slate-200/80 shadow-md hover:shadow-2xl transition-all duration-300 flex flex-col justify-between">
                <div>
                    <!-- Image Card Header -->
                    <div class="relative h-[240px] sm:h-[260px] lg:h-[280px] w-full overflow-hidden bg-slate-900">
                        <img
                            src="{{ asset('images/service_perawatan_drone.jpg') }}"
                            alt="Perawatan Drone Mechatron"
                            class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 ease-out"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/25 to-transparent"></div>
                        <span class="absolute top-4 left-4 text-[11px] font-bold uppercase tracking-wider text-white bg-emerald-600/90 backdrop-blur-md px-3 py-1 rounded-full shadow-sm">
                            Servis & Kalibrasi Pabrikan
                        </span>
                        <div class="absolute bottom-4 left-4 right-4 text-white">
                            <span class="text-[12px] text-emerald-200 font-semibold block">Layanan 02</span>
                            <h3 class="text-[20px] sm:text-[22px] font-bold tracking-tight text-white leading-snug">
                                Perawatan Drone
                            </h3>
                        </div>
                    </div>

                    <!-- Content Body -->
                    <div class="p-6 sm:p-7 space-y-4">
                        <p class="text-[14px] text-slate-600 leading-relaxed font-normal">
                            Layanan servis berkala dan perbaikan menyeluruh armada drone untuk menjaga keandalan terbang prima. Ditangani teknisi berpengalaman dengan suku cadang original dan uji terbang resmi.
                        </p>

                        <!-- Highlights Bullets -->
                        <ul class="space-y-2 p-0 m-0 list-none text-[13px] text-slate-700">
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                <span>24-Point Comprehensive Inspection</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                <span>Kalibrasi presisi IMU, Kompas, & Gimbal</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                <span>Suku cadang resmi & garansi perbaikan</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Card Footer Button -->
                <div class="p-6 sm:p-7 pt-0">
                    <a
                        href="{{ route('services.show', 'perawatandrone') }}"
                        class="w-full inline-flex items-center justify-center gap-2 bg-[#0070D5] hover:bg-[#005bb5] text-white font-semibold text-[14px] py-3 rounded-full shadow-sm hover:shadow-md transition-all text-decoration-none group-hover:gap-3"
                    >
                        <span>Pelajari Lebih Lanjut</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>

            <!-- SERVICE 3: SEWA DRONE -->
            <div class="group bg-white rounded-[26px] sm:rounded-[30px] overflow-hidden border border-slate-200/80 shadow-md hover:shadow-2xl transition-all duration-300 flex flex-col justify-between">
                <div>
                    <!-- Image Card Header -->
                    <div class="relative h-[240px] sm:h-[260px] lg:h-[280px] w-full overflow-hidden bg-slate-900">
                        <img
                            src="{{ asset('images/service_sewa_drone.jpg') }}"
                            alt="Sewa Drone Mechatron"
                            class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 ease-out"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/25 to-transparent"></div>
                        <span class="absolute top-4 left-4 text-[11px] font-bold uppercase tracking-wider text-white bg-indigo-600/90 backdrop-blur-md px-3 py-1 rounded-full shadow-sm">
                            Rental Armada Lengkap
                        </span>
                        <div class="absolute bottom-4 left-4 right-4 text-white">
                            <span class="text-[12px] text-indigo-200 font-semibold block">Layanan 03</span>
                            <h3 class="text-[20px] sm:text-[22px] font-bold tracking-tight text-white leading-snug">
                                Sewa Drone
                            </h3>
                        </div>
                    </div>

                    <!-- Content Body -->
                    <div class="p-6 sm:p-7 space-y-4">
                        <p class="text-[14px] text-slate-600 leading-relaxed font-normal">
                            Solusi rental armada drone industri dan pertanian dengan opsi harian, mingguan, hingga bulanan. Didukung unit terawat prima, set baterai cadangan melimpah, dan opsi pilot standby.
                        </p>

                        <!-- Highlights Bullets -->
                        <ul class="space-y-2 p-0 m-0 list-none text-[13px] text-slate-700">
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-indigo-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                <span>Drone Pertanian & Drone Fotografi</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-indigo-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                <span>Pilihan Dry Rental atau Wet Rental (Pilot)</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-indigo-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                <span>Paket baterai cadangan & fast charging</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Card Footer Button -->
                <div class="p-6 sm:p-7 pt-0">
                    <a
                        href="{{ route('services.show', 'sewadrone') }}"
                        class="w-full inline-flex items-center justify-center gap-2 bg-[#0070D5] hover:bg-[#005bb5] text-white font-semibold text-[14px] py-3 rounded-full shadow-sm hover:shadow-md transition-all text-decoration-none group-hover:gap-3"
                    >
                        <span>Pelajari Lebih Lanjut</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- 3. Why Choose Mechatron Services -->
        <div class="bg-white rounded-[32px] p-8 sm:p-12 border border-slate-200/80 shadow-sm mb-16">
            <div class="text-center max-w-2xl mx-auto mb-10 sm:mb-12">
                <h2 class="text-[24px] sm:text-[30px] font-bold text-slate-900 tracking-tight">
                    Komitmen Keunggulan Layanan Mechatron
                </h2>
                <p class="text-[14px] sm:text-[15px] text-slate-600 mt-2">
                    Kami memastikan setiap investasi dan kebutuhan operasional drone Anda terlindungi dengan standar keselamatan dan mutu tertinggi.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="p-5 rounded-2xl bg-slate-50 border border-slate-100">
                    <div class="w-10 h-10 rounded-xl bg-blue-100 text-[#0070D5] flex items-center justify-center mb-3.5">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <h3 class="text-[16px] font-bold text-slate-900 mb-1">Standar Legalitas & Lisensi</h3>
                    <p class="text-[13px] text-slate-600 leading-relaxed">
                        Instruktur dan teknisi bersertifikasi DKUPPU/FASI dengan kepatuhan penuh pada regulasi penerbangan sipil.
                    </p>
                </div>

                <div class="p-5 rounded-2xl bg-slate-50 border border-slate-100">
                    <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center mb-3.5">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </div>
                    <h3 class="text-[16px] font-bold text-slate-900 mb-1">Bengkel & Lab Servis Resmi</h3>
                    <p class="text-[13px] text-slate-600 leading-relaxed">
                        Fasilitas servis in-house lengkap dengan instrumen kalibrasi sensor, test bench motor, dan suku cadang asli.
                    </p>
                </div>

                <div class="p-5 rounded-2xl bg-slate-50 border border-slate-100">
                    <div class="w-10 h-10 rounded-xl bg-indigo-100 text-indigo-600 flex items-center justify-center mb-3.5">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                    </div>
                    <h3 class="text-[16px] font-bold text-slate-900 mb-1">Armada Siap Pakai & Backup</h3>
                    <p class="text-[13px] text-slate-600 leading-relaxed">
                        Jaminan kelancaran misi proyek Anda dengan dukungan ketersediaan armada cadangan dan genset pengisi daya cepat.
                    </p>
                </div>

                <div class="p-5 rounded-2xl bg-slate-50 border border-slate-100">
                    <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center mb-3.5">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                    </div>
                    <h3 class="text-[16px] font-bold text-slate-900 mb-1">Dukungan Responsif 24/7</h3>
                    <p class="text-[13px] text-slate-600 leading-relaxed">
                        Tim teknis standby memberikan konsultasi cepat serta solusi troubleshooting saat kendala lapangan terjadi.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bottom Banner Penutup WhatsApp CTA -->
<section class="py-14 sm:py-20 bg-[#141416] text-white text-center">
    <div class="max-w-3xl mx-auto px-6">
        <h2 class="text-[28px] sm:text-[38px] font-bold tracking-tight mb-4">
            Konsultasikan Kebutuhan Drone Anda Bersama Kami
        </h2>
        <p class="text-[15px] sm:text-[17px] text-white/70 max-w-xl mx-auto mb-8">
            Hubungi tim ahli Mechatron untuk informasi jadwal pelatihan, estimasi servis berkala, atau ketersediaan unit sewa.
        </p>
        <a
            href="https://wa.me/6281112143111?text={{ urlencode('Halo Mechatron, saya ingin konsultasi mengenai Layanan Pelatihan Pilot, Perawatan, atau Sewa Drone.') }}"
            target="_blank"
            rel="noopener noreferrer"
            class="inline-flex items-center gap-2 bg-[#0070D5] hover:bg-[#005bb5] text-white text-[14px] sm:text-[15px] font-semibold px-8 py-3.5 rounded-full shadow-lg transition-all text-decoration-none hover:scale-105 active:scale-95"
        >
            <span>Hubungi Kami via WhatsApp: +62 811 1214 3111</span>
            <span>›</span>
        </a>
    </div>
</section>
@endsection
