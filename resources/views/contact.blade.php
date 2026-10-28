@extends('layouts.app')

@section('title', 'Contact Us | Mechatron - Hubungi Tim Kami')
@section('meta_description', 'Hubungi tim Mechatron Indonesia untuk informasi pengadaan drone, demo produk, atau kunjungi kantor dan pabrik kami di Bandung.')
@section('navbar_theme', 'light')

@section('content')
<div class="bg-[#F8FAFC] min-h-screen pt-28 sm:pt-32 pb-20 sm:pb-28">
    <div class="max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">

        <!-- 1. Page Header -->
        <div class="text-center max-w-3xl mx-auto mb-12 sm:mb-16">
            <h1 class="text-[32px] sm:text-[42px] md:text-[48px] font-extrabold text-slate-950 tracking-tight leading-[1.15] mb-4">
                Hubungi Kami
            </h1>
            <p class="text-[15px] sm:text-[17px] text-slate-600 font-normal leading-relaxed max-w-2xl mx-auto">
                Silakan hubungi tim Mechatron Indonesia melalui email, telepon, WhatsApp, atau kunjungi langsung kantor dan pabrik kami.
            </p>
        </div>

        <!-- 2. Fast Contact Cards (Email & Telepon) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto mb-14 sm:mb-18">
            <!-- Card 1: Email Resmi -->
            <div class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/80 shadow-xs hover:shadow-md hover:border-blue-300 transition-all duration-300 flex items-start gap-4 sm:gap-5 group">
                <div class="w-12 h-12 rounded-xl bg-blue-50 text-[#0070D5] flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 fill-none stroke-current" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <div class="flex-1 min-w-0">
                    <span class="text-[11px] sm:text-[12px] font-bold text-[#0070D5] uppercase tracking-wider block mb-1">
                        Email Resmi
                    </span>
                    <a
                        href="mailto:info@mekatronika.co.id"
                        class="text-[17px] sm:text-[19px] font-bold text-slate-900 hover:text-[#0070D5] transition-colors block truncate mb-1 text-decoration-none"
                    >
                        info@mekatronika.co.id
                    </a>
                    <p class="text-[13px] text-slate-500 mb-3">
                        Kirimkan pertanyaan resmi, permohonan kerjasama, atau informasi tender pengadaan.
                    </p>
                    <a
                        href="mailto:info@mekatronika.co.id"
                        class="inline-flex items-center gap-1.5 text-[13px] font-semibold text-[#0070D5] hover:text-[#005bb5] transition-colors text-decoration-none"
                    >
                        <span>Kirim Pesan Email</span>
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Card 2: Telepon & WhatsApp -->
            <div class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/80 shadow-xs hover:shadow-md hover:border-emerald-300 transition-all duration-300 flex items-start gap-4 sm:gap-5 group">
                <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                    </svg>
                </div>
                <div class="flex-1 min-w-0">
                    <div class="flex items-center gap-2 mb-1">
                        <span class="text-[11px] sm:text-[12px] font-bold text-emerald-600 uppercase tracking-wider">
                            Telepon & WhatsApp
                        </span>
                        <span class="inline-flex items-center gap-1 text-[11px] font-medium text-emerald-700 bg-emerald-100/70 px-2 py-0.5 rounded-full">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                            Online
                        </span>
                    </div>
                    <a
                        href="https://wa.me/6281112143111?text=Halo%20Mechatron,%20saya%20ingin%20konsultasi%20mengenai%20produk%20dan%20layanan%20drone."
                        target="_blank"
                        rel="noopener noreferrer"
                        class="text-[17px] sm:text-[19px] font-bold text-slate-900 hover:text-emerald-600 transition-colors block truncate mb-1 text-decoration-none"
                    >
                        +62 811 1214 3111
                    </a>
                    <p class="text-[13px] text-slate-500 mb-3">
                        Layanan konsultasi cepat dengan staf teknis & penjualan Mechatron.
                    </p>
                    <div class="flex items-center gap-3">
                        <a
                            href="https://wa.me/6281112143111?text=Halo%20Mechatron,%20saya%20ingin%20konsultasi%20mengenai%20produk%20dan%20layanan%20drone."
                            target="_blank"
                            rel="noopener noreferrer"
                            class="inline-flex items-center gap-1.5 text-[13px] font-semibold text-emerald-600 hover:text-emerald-700 transition-colors text-decoration-none"
                        >
                            <span>Chat WhatsApp</span>
                            <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </a>
                        <span class="text-slate-300">|</span>
                        <a
                            href="tel:+6281112143111"
                            class="text-[13px] font-medium text-slate-600 hover:text-slate-900 transition-colors text-decoration-none"
                        >
                            Hubungi via Telepon
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- 3. Lokasi & Titik Google Maps (Clean 2-Column Responsive Grid) -->
        <div class="mb-14 sm:mb-18">
            <div class="text-center max-w-2xl mx-auto mb-8 sm:mb-10">
                <span class="text-[12px] font-bold text-[#0070D5] uppercase tracking-wider block mb-1">
                    Titik Lokasi
                </span>
                <h2 class="text-[26px] sm:text-[32px] font-bold text-slate-900 tracking-tight">
                    Lokasi Kantor & Pabrik
                </h2>
                <p class="text-[14px] sm:text-[15px] text-slate-500 mt-1.5">
                    Kunjungi kantor operasional kami di Summarecon Bandung atau pabrik di Tegalluar.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-10">
                <!-- LOCATION 1: KANTOR -->
                <div class="bg-white rounded-3xl border border-slate-200/80 shadow-sm hover:shadow-lg transition-all duration-300 overflow-hidden flex flex-col">
                    <!-- Header Info -->
                    <div class="p-6 sm:p-8 flex-1 flex flex-col justify-between">
                        <div>
                           

                            <h3 class="text-[20px] sm:text-[22px] font-bold text-slate-900 mb-2">
                                Kantor Mechatron
                            </h3>

                            <div class="flex items-start gap-3 text-slate-600 text-[14px] leading-relaxed mb-4">
                                <svg class="w-5 h-5 text-[#0070D5] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <p class="m-0">
                                    Ruko Magna Commercial Area, Blok MC-08 Komplek Summarecon Bandung Kecamatan Gedebage, Kota Bandung Jawa Barat, 40294
                                </p>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-slate-100 flex flex-wrap items-center justify-between gap-3">
                            
                            <a
                                href="https://maps.app.goo.gl/hJLPozxwp6tp2tar8"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="inline-flex items-center gap-2 bg-[#0070D5] hover:bg-[#005bb5] text-white text-[13px] font-semibold px-4 py-2.5 rounded-xl shadow-sm hover:shadow transition-all group/btn text-decoration-none"
                            >
                                <span>Buka Google Maps</span>
                                <svg class="w-3.5 h-3.5 transition-transform group-hover/btn:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Titik Google Maps Iframe (Kantor) -->
                    <div class="relative w-full h-[280px] sm:h-[320px] bg-slate-100 border-t border-slate-200/80">
                        <iframe
                            src="https://maps.google.com/maps?q=-6.9572954,107.6897731&t=m&z=17&output=embed"
                            width="100%"
                            height="100%"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Titik Lokasi Kantor Mechatron Bandung"
                            class="w-full h-full"
                        ></iframe>
                    </div>
                </div>

                <!-- LOCATION 2: PABRIK -->
                <div class="bg-white rounded-3xl border border-slate-200/80 shadow-sm hover:shadow-lg transition-all duration-300 overflow-hidden flex flex-col">
                    <!-- Header Info -->
                    <div class="p-6 sm:p-8 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="text-[20px] sm:text-[22px] font-bold text-slate-900 mb-2">
                                Pabrik Mechatron
                            </h3>

                            <div class="flex items-start gap-3 text-slate-600 text-[14px] leading-relaxed mb-4">
                                <svg class="w-5 h-5 text-indigo-600 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <p class="m-0">
                                    Tegalluar, Kabupaten Bandung, Jawa Barat
                                </p>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-slate-100 flex flex-wrap items-center justify-between gap-3">
                            <a
                                href="https://maps.app.goo.gl/hZ8TrNjKJNS4tW8y6"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="inline-flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white text-[13px] font-semibold px-4 py-2.5 rounded-xl shadow-sm hover:shadow transition-all group/btn text-decoration-none"
                            >
                                <span>Buka Google Maps</span>
                                <svg class="w-3.5 h-3.5 transition-transform group-hover/btn:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Titik Google Maps Iframe (Pabrik) -->
                    <div class="relative w-full h-[280px] sm:h-[320px] bg-slate-100 border-t border-slate-200/80">
                        <iframe
                            src="https://maps.google.com/maps?q=-6.971912,107.686130&t=m&z=16&output=embed"
                            width="100%"
                            height="100%"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Titik Lokasi Pabrik Mechatron Tegalluar"
                            class="w-full h-full"
                        ></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
