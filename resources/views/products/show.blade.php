@extends('layouts.app')

@section('title', $product['name'] . ' - ' . $product['subtitle'] . ' | Mechatron')
@section('meta_description', $product['tagline'])
@section('navbar_theme', 'light')

@php
    $whatsappText = urlencode('Halo Mechatron Indonesia, saya tertarik untuk konsultasi dan pemesanan unit ' . $product['name'] . ' (' . $product['modelCode'] . '). Mohon informasi ketersediaan unit, harga, serta jadwal demo lapangan.');
    $whatsappUrl = 'https://wa.me/' . ($product['whatsappNumber'] ?? '6281112143111') . '?text=' . $whatsappText;
    $gallery = $product['gallery'] ?? [$product['image']];
    if (empty($gallery)) {
        $gallery = [$product['image']];
    }
@endphp

@section('content')
<div class="bg-[#F8FAFC] min-h-screen pt-24 sm:pt-28 pb-20">
    <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8">
        <!-- 1. Breadcrumbs -->
        <nav aria-label="Breadcrumb" class="flex items-center gap-2 text-[12px] sm:text-[13px] text-slate-500 font-medium mb-6 sm:mb-8 overflow-x-auto whitespace-nowrap scrollbar-none">
            <a href="{{ route('home') }}" class="hover:text-[#0070D5] transition-colors text-decoration-none text-inherit">Home</a>
            <span>/</span>
            <a href="{{ route('products.index') }}" class="hover:text-[#0070D5] transition-colors text-decoration-none text-inherit">Product</a>
            <span>/</span>
            <span class="text-slate-900 font-semibold">{{ $product['name'] }}</span>
        </nav>

        <!-- 2. Top Product Showcase Grid -->
        <div class="bg-white rounded-3xl border border-slate-200/90 shadow-sm p-6 sm:p-10 lg:p-12 mb-12 sm:mb-16">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-14 items-start">
                <!-- Left: E-commerce Multiple Image Gallery Display -->
                <div
                    x-data="{
                        activeIdx: 0,
                        images: {{ Js::from(array_map(fn($img) => asset($img), $gallery)) }},
                        zoomModal: false,
                        nextImage() {
                            this.activeIdx = (this.activeIdx + 1) % this.images.length;
                        },
                        prevImage() {
                            this.activeIdx = (this.activeIdx - 1 + this.images.length) % this.images.length;
                        },
                        setImage(idx) {
                            this.activeIdx = idx;
                        }
                    }"
                    class="lg:col-span-6 flex flex-col gap-3 sm:gap-4 select-none"
                >
                    <!-- Main Stage Image Box -->
                    <div class="relative w-full h-[320px] sm:h-[420px] lg:h-[480px] rounded-2xl overflow-hidden bg-slate-950 shadow-md group">
                        <!-- Dynamic Image Display with smooth transition -->
                        <template x-for="(imgSrc, idx) in images" :key="idx">
                            <div
                                x-show="activeIdx === idx"
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 scale-[0.98]"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-150"
                                x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0"
                                class="absolute inset-0 w-full h-full cursor-zoom-in"
                                @click="zoomModal = true"
                            >
                                <img
                                    :src="imgSrc"
                                    alt="{{ $product['name'] }}"
                                    class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-105"
                                />
                                <div class="absolute inset-0 bg-gradient-to-t from-black/45 via-transparent to-transparent opacity-60 pointer-events-none"></div>
                            </div>
                        </template>

                        <!-- Top-Left: Model Badge -->
                        <div class="absolute top-4 left-4 z-20 bg-white/95 backdrop-blur-md px-3.5 py-1.5 rounded-full text-[12px] font-bold text-slate-900 shadow-sm border border-slate-200 pointer-events-none">
                            {{ $product['modelCode'] }}
                        </div>

                        <!-- Top-Right: Image Counter Indicator (e.g. 1 / 5) -->
                        <div class="absolute top-4 right-4 z-20 bg-black/60 backdrop-blur-md px-3 py-1 rounded-full text-[11px] font-semibold text-white/95 shadow-sm border border-white/10 pointer-events-none">
                            <span x-text="activeIdx + 1"></span> / <span x-text="images.length"></span>
                        </div>

                        <!-- Bottom-Left: Capacity / Key Spec Badge -->
                        @if(!empty($product['capacity']))
                            <div class="absolute bottom-4 left-4 z-20 bg-[#0070D5] text-white px-3.5 py-1.5 rounded-full text-[12px] font-bold shadow-md pointer-events-none">
                                {{ $product['capacity'] }}
                            </div>
                        @endif

                        <!-- Slide Navigation Arrow: Previous -->
                        <button
                            type="button"
                            @click.stop="prevImage()"
                            aria-label="Foto Sebelumnya"
                            x-show="images.length > 1"
                            class="absolute left-3 top-1/2 -translate-y-1/2 z-20 w-9 h-9 sm:w-10 sm:h-10 rounded-full bg-black/45 hover:bg-black/80 backdrop-blur-md text-white flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-200 cursor-pointer shadow-lg hover:scale-110 active:scale-95"
                        >
                            <svg class="w-5 h-5 -translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
                        </button>

                        <!-- Slide Navigation Arrow: Next -->
                        <button
                            type="button"
                            @click.stop="nextImage()"
                            aria-label="Foto Selanjutnya"
                            x-show="images.length > 1"
                            class="absolute right-3 top-1/2 -translate-y-1/2 z-20 w-9 h-9 sm:w-10 sm:h-10 rounded-full bg-black/45 hover:bg-black/80 backdrop-blur-md text-white flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-200 cursor-pointer shadow-lg hover:scale-110 active:scale-95"
                        >
                            <svg class="w-5 h-5 translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                        </button>

                        <!-- Bottom-Right: Zoom Icon Button -->
                        <button
                            type="button"
                            @click.stop="zoomModal = true"
                            aria-label="Perbesar Foto"
                            class="absolute bottom-4 right-4 z-20 w-8 h-8 rounded-full bg-black/50 hover:bg-black/80 backdrop-blur-md text-white flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-200 cursor-pointer hover:scale-105"
                        >
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7"/></svg>
                        </button>
                    </div>

                    <!-- E-commerce Thumbnail Strip -->
                    <div x-show="images.length > 1" class="flex items-center gap-2.5 sm:gap-3 overflow-x-auto pb-1.5 pt-0.5 scrollbar-none">
                        <template x-for="(imgSrc, idx) in images" :key="idx">
                            <button
                                type="button"
                                @click="setImage(idx)"
                                @mouseenter="setImage(idx)"
                                :class="activeIdx === idx
                                    ? 'ring-2 ring-[#0070D5] ring-offset-2 border-transparent scale-[1.03] shadow-md opacity-100'
                                    : 'border-slate-200 opacity-60 hover:opacity-100 hover:border-slate-400'"
                                class="relative w-16 h-16 sm:w-20 sm:h-20 rounded-xl overflow-hidden bg-slate-900 border shrink-0 transition-all duration-200 cursor-pointer p-0 focus:outline-none"
                            >
                                <img
                                    :src="imgSrc"
                                    alt="{{ $product['name'] }} thumbnail"
                                    class="w-full h-full object-cover object-center"
                                />
                                <span
                                    x-show="activeIdx === idx"
                                    class="absolute inset-0 bg-[#0070D5]/15 pointer-events-none"
                                ></span>
                            </button>
                        </template>
                    </div>

                    <!-- Lightbox Zoom Modal -->
                    <div
                        x-show="zoomModal"
                        x-transition.opacity.duration.250ms
                        @keydown.escape.window="zoomModal = false"
                        class="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6 bg-black/90 backdrop-blur-md select-none"
                        style="display: none;"
                        @click="zoomModal = false"
                    >
                        <div class="relative max-w-5xl w-full max-h-[92vh] flex flex-col items-center" @click.stop>
                            <!-- Close Modal Button -->
                            <button
                                type="button"
                                @click="zoomModal = false"
                                class="absolute -top-12 right-0 sm:right-2 text-white/80 hover:text-white p-2 rounded-full hover:bg-white/10 transition-colors cursor-pointer"
                                aria-label="Tutup Preview"
                            >
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                            </button>

                            <!-- Large Preview Stage -->
                            <div class="relative w-full max-h-[75vh] flex items-center justify-center overflow-hidden rounded-2xl bg-black/40">
                                <img
                                    :src="images[activeIdx]"
                                    alt="{{ $product['name'] }}"
                                    class="max-w-full max-h-[75vh] object-contain rounded-xl shadow-2xl"
                                />

                                <!-- Prev Button in Modal -->
                                <button
                                    type="button"
                                    @click="prevImage()"
                                    class="absolute left-3 top-1/2 -translate-y-1/2 w-11 h-11 rounded-full bg-black/60 hover:bg-black/90 text-white flex items-center justify-center transition-all cursor-pointer shadow-lg hover:scale-105"
                                >
                                    <svg class="w-6 h-6 -translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
                                </button>

                                <!-- Next Button in Modal -->
                                <button
                                    type="button"
                                    @click="nextImage()"
                                    class="absolute right-3 top-1/2 -translate-y-1/2 w-11 h-11 rounded-full bg-black/60 hover:bg-black/90 text-white flex items-center justify-center transition-all cursor-pointer shadow-lg hover:scale-105"
                                >
                                    <svg class="w-6 h-6 translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                </button>
                            </div>

                            <!-- Modal Thumbnail Bar -->
                            <div class="flex items-center gap-2 mt-4 overflow-x-auto max-w-full px-2 py-1 scrollbar-none">
                                <template x-for="(imgSrc, idx) in images" :key="idx">
                                    <button
                                        type="button"
                                        @click="setImage(idx)"
                                        :class="activeIdx === idx ? 'ring-2 ring-[#0070D5] scale-105 opacity-100 shadow-md' : 'opacity-50 hover:opacity-100'"
                                        class="w-14 h-14 rounded-lg overflow-hidden bg-black/50 shrink-0 transition-all cursor-pointer p-0"
                                    >
                                        <img :src="imgSrc" class="w-full h-full object-cover object-center" />
                                    </button>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Product Overview & Actions -->
                <div class="lg:col-span-6 flex flex-col justify-center">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-[#0070D5]/10 text-[#0070D5] text-[12px] font-bold uppercase tracking-wider mb-3 self-start">
                        <span>{{ $product['category'] }}</span>
                    </div>

                    <h1 class="text-[30px] sm:text-[40px] lg:text-[46px] font-extrabold text-slate-950 tracking-tight leading-[1.1] mb-3">
                        {{ $product['name'] }}
                    </h1>

                    <p class="text-[16px] sm:text-[18px] font-medium text-slate-700 leading-snug mb-3">
                        {{ $product['subtitle'] }}
                    </p>

                    <p class="text-[14px] sm:text-[15px] text-slate-500 leading-relaxed mb-6">
                        {{ $product['tagline'] }}
                    </p>

                    <!-- Mini Highlights Badges -->
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 mb-8 pt-4 border-t border-slate-100">
                        <div class="p-3 bg-slate-50 rounded-xl border border-slate-100">
                            <span class="block text-[11px] font-bold uppercase text-slate-400">Garansi</span>
                            <span class="text-[13px] font-bold text-slate-800">Resmi Mechatron</span>
                        </div>
                        <div class="p-3 bg-slate-50 rounded-xl border border-slate-100">
                            <span class="block text-[11px] font-bold uppercase text-slate-400">Proteksi</span>
                            <span class="text-[13px] font-bold text-slate-800">Tahan Cuaca IP67</span>
                        </div>
                        <div class="p-3 bg-slate-50 rounded-xl border border-slate-100 col-span-2 sm:col-span-1">
                            <span class="block text-[11px] font-bold uppercase text-slate-400">Suku Cadang</span>
                            <span class="text-[13px] font-bold text-slate-800">Ready Stock Indonesia</span>
                        </div>
                    </div>

                    <!-- Direct Action Buttons -->
                    <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3.5">
                        <a
                            href="{{ $whatsappUrl }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="inline-flex items-center justify-center gap-2 bg-[#0070D5] hover:bg-[#005bb5] text-white px-7 py-3.5 rounded-full text-[14px] sm:text-[15px] font-semibold shadow-lg shadow-blue-500/25 transition-all hover:scale-[1.02] active:scale-95 text-decoration-none"
                        >
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                            <span>Pesan via WhatsApp</span>
                            <span>›</span>
                        </a>

                        <a
                            href="{{ route('contact') }}"
                            class="inline-flex items-center justify-center gap-2 bg-slate-100 hover:bg-slate-200 text-slate-800 px-6 py-3.5 rounded-full text-[14px] sm:text-[15px] font-semibold transition-all hover:scale-[1.02] active:scale-95 text-decoration-none"
                        >
                            <span>Jadwalkan Demo Unit</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4. Section: Fitur Utama -->
        @if(!empty($product['features']))
            <section id="fitur" class="mb-16 sm:mb-20 scroll-mt-32">
                <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-14">
                    <span class="text-[12px] font-bold text-[#0070D5] uppercase tracking-wider">Teknologi Mutakhir</span>
                    <h2 class="text-[28px] sm:text-[38px] font-bold text-slate-900 tracking-tight mt-1">
                        Keunggulan & Fitur Utama
                    </h2>
                    <p class="text-[14px] sm:text-[16px] text-slate-500 mt-2">
                        Dirancang secara khusus dengan ketahanan tinggi untuk memenuhi tuntutan kerja keras di lahan pertanian dan perkebunan Indonesia.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($product['features'] as $feature)
                        <div class="bg-white rounded-2xl p-7 border border-slate-200/90 shadow-sm hover:shadow-md hover:border-blue-200 transition-all">
                            <div class="w-10 h-10 rounded-xl bg-blue-50 text-[#0070D5] flex items-center justify-center font-bold text-lg mb-4">
                                ✓
                            </div>
                            <h3 class="text-[17px] font-bold text-slate-900 mb-2">
                                {{ $feature['title'] }}
                            </h3>
                            <p class="text-[14px] text-slate-600 leading-relaxed">
                                {{ $feature['desc'] }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </section>
        @endif

        <!-- 5. Section: Spesifikasi Lengkap -->
        @if(!empty($product['specifications']))
            <section id="spesifikasi" class="mb-16 sm:mb-20 scroll-mt-32">
                <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-14">
                    <span class="text-[12px] font-bold text-[#0070D5] uppercase tracking-wider">Data Teknis</span>
                    <h2 class="text-[28px] sm:text-[38px] font-bold text-slate-900 tracking-tight mt-1">
                        Spesifikasi Teknis Lengkap
                    </h2>
                    <p class="text-[14px] sm:text-[16px] text-slate-500 mt-2">
                        Parameter rekayasa presisi standar aviasi dan sistem navigasi otonom Mechatron.
                    </p>
                </div>

                <div class="bg-white rounded-3xl border border-slate-200/90 shadow-sm overflow-hidden">
                    <div class="divide-y divide-slate-100">
                        @foreach($product['specifications'] as $idx => $spec)
                            <div class="grid grid-cols-1 md:grid-cols-12 px-6 sm:px-8 py-4 sm:py-5 {{ $idx % 2 === 0 ? 'bg-white' : 'bg-slate-50/60' }} items-center gap-2">
                                <div class="md:col-span-5 text-[14px] font-semibold text-slate-800">
                                    {{ $spec['label'] }}
                                </div>
                                <div class="md:col-span-7 text-[14px] font-normal text-slate-600">
                                    {{ $spec['value'] }}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif

        <!-- 6. Section: Isi Paket (In The Box) -->
        @if(!empty($product['packageIncludes']))
            <section id="paket" class="mb-16 sm:mb-20 scroll-mt-32">
                <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-14">
                    <span class="text-[12px] font-bold text-[#0070D5] uppercase tracking-wider">In The Box</span>
                    <h2 class="text-[28px] sm:text-[38px] font-bold text-slate-900 tracking-tight mt-1">
                        Kelengkapan Paket Penjualan
                    </h2>
                    <p class="text-[14px] sm:text-[16px] text-slate-500 mt-2">
                        Setiap unit Mechatron siap terbang (*Ready to Fly*) lengkap dengan perlengkapan operasional standar.
                    </p>
                </div>

                <div class="bg-white rounded-3xl border border-slate-200/90 shadow-sm p-8 sm:p-12">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">
                        @foreach($product['packageIncludes'] as $item)
                            <div class="flex items-center gap-3.5 p-4 rounded-xl bg-slate-50 border border-slate-100">
                                <div class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center shrink-0 font-bold text-[14px]">
                                    ✓
                                </div>
                                <span class="text-[14px] sm:text-[15px] font-medium text-slate-800">
                                    {{ $item }}
                                </span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif

        <!-- 7. Section: Aplikasi Lapangan -->
        @if(!empty($product['fieldApplications']))
            <section id="aplikasi" class="mb-16 sm:mb-20 scroll-mt-32">
                <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-14">
                    <span class="text-[12px] font-bold text-[#0070D5] uppercase tracking-wider">Skenario Operasional</span>
                    <h2 class="text-[28px] sm:text-[38px] font-bold text-slate-900 tracking-tight mt-1">
                        Aplikasi & Penerapan Lapangan
                    </h2>
                    <p class="text-[14px] sm:text-[16px] text-slate-500 mt-2">
                        Solusi teruji pada beragam variasi komoditas perkebunan dan medan lahan nusantara.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach($product['fieldApplications'] as $app)
                        <div class="bg-white rounded-2xl p-7 border border-slate-200/90 shadow-sm hover:border-slate-300 transition-all">
                            <h3 class="text-[18px] font-bold text-slate-900 mb-2">
                                {{ $app['title'] }}
                            </h3>
                            <p class="text-[14px] text-slate-600 leading-relaxed">
                                {{ $app['desc'] }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </section>
        @endif

        <!-- 8. Produk Mechatron Terkait -->
        @if(!empty($relatedProducts))
            <section class="mb-16 sm:mb-20">
                <div class="flex items-end justify-between mb-8">
                    <div>
                        <span class="text-[12px] font-bold text-[#0070D5] uppercase tracking-wider">Katalog Terkait</span>
                        <h2 class="text-[24px] sm:text-[30px] font-bold text-slate-900 tracking-tight mt-1">
                            Produk & Ekosistem Mechatron Lainnya
                        </h2>
                    </div>
                    <a href="{{ route('home') }}#products" class="hidden sm:inline-flex items-center gap-1.5 text-[14px] font-semibold text-[#0070D5] hover:text-[#005bb5] transition-colors text-decoration-none">
                        <span>Lihat Semua Produk</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach(array_slice($relatedProducts, 0, 3) as $related)
                        <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/90 shadow-sm hover:shadow-xl transition-all duration-300 group flex flex-col justify-between">
                            <div class="relative w-full h-[220px] bg-slate-900 overflow-hidden">
                                <img
                                    src="{{ asset($related['image']) }}"
                                    alt="{{ $related['name'] }}"
                                    class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-105"
                                />
                                <div class="absolute top-3 left-3 bg-white/95 px-3 py-1 rounded-full text-[11px] font-bold text-slate-900 shadow-sm">
                                    {{ $related['modelCode'] }}
                                </div>
                            </div>
                            <div class="p-6 flex flex-col flex-grow justify-between">
                                <div>
                                    <span class="text-[11px] font-bold text-[#0070D5] uppercase tracking-wider block mb-1">
                                        {{ $related['category'] }}
                                    </span>
                                    <h3 class="text-[18px] font-bold text-slate-900 mb-2">
                                        {{ $related['name'] }}
                                    </h3>
                                    <p class="text-[13px] text-slate-500 line-clamp-2 mb-5">
                                        {{ $related['tagline'] }}
                                    </p>
                                </div>
                                <a
                                    href="{{ route('products.show', $related['id']) }}"
                                    class="inline-flex items-center justify-center gap-2 w-full py-2.5 rounded-xl bg-slate-100 hover:bg-[#0070D5] text-slate-800 hover:text-white font-semibold text-[13px] transition-all text-decoration-none"
                                >
                                    <span>Lihat Spesifikasi & Detail</span>
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        @endif

        <!-- 9. Final CTA Box -->
        <section class="text-center">
            <div class="bg-gradient-to-r from-neutral-900 via-neutral-950 to-neutral-900 text-white rounded-3xl p-10 sm:p-14 shadow-2xl relative overflow-hidden">
                <h2 class="text-[26px] sm:text-[36px] font-extrabold tracking-tight mb-3">
                    Konsultasikan Pengadaan {{ $product['name'] }}
                </h2>
                <p class="text-[14px] sm:text-[16px] text-gray-300 max-w-xl mx-auto mb-8 font-light">
                    Dapatkan penawaran harga resmi, skema pembiayaan, serta demonstrasi uji terbang langsung di lahan perkebunan Anda.
                </p>
                <div class="flex flex-wrap items-center justify-center gap-4">
                    <a
                        href="{{ $whatsappUrl }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="bg-[#0070D5] hover:bg-[#005bb5] text-white font-semibold px-8 py-3.5 rounded-full text-[14px] sm:text-[15px] shadow-lg transition-all hover:scale-105 text-decoration-none"
                    >
                        Hubungi via WhatsApp
                    </a>
                    <a
                        href="{{ route('contact') }}"
                        class="bg-white/10 hover:bg-white/20 text-white font-medium px-8 py-3.5 rounded-full text-[14px] sm:text-[15px] border border-white/20 transition-all text-decoration-none"
                    >
                        Formulir Kontak Resmi
                    </a>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
