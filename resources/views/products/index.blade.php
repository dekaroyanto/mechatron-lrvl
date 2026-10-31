@extends('layouts.app')

@section('title', 'Katalog Produk Drone & Ekosistem Teknologi | Mechatron')
@section('meta_description', 'Eksplorasi lini produk drone pertanian Mechatron Agri, drone fotografi udara resolusi tinggi, armada drone kargo pengiriman logistik, dan suku cadang resmi.')
@section('navbar_theme', 'light')

@php
    $categories = \App\Data\DroneProducts::categories();
    $allProducts = \App\Data\DroneProducts::all();
    $initialCategory = request()->query('kategori', 'all');
    if (!array_key_exists($initialCategory, $categories)) {
        $initialCategory = 'all';
    }
@endphp

@section('content')
<!-- Interactive Product Catalogue & Category Filters -->
<div
    id="catalog"
    x-data="{
        activeCategory: '{{ $initialCategory }}',
        categories: {{ Js::from($categories) }},
        setCategory(slug) {
            this.activeCategory = slug;
            const url = new URL(window.location);
            if (slug === 'all') {
                url.searchParams.delete('kategori');
            } else {
                url.searchParams.set('kategori', slug);
            }
            window.history.replaceState({}, '', url);
        }
    }"
    class="bg-[#F8FAFC] min-h-screen pt-24 sm:pt-28 pb-16 sm:pb-24 scroll-mt-16"
>
    <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8">
        <!-- 1. Breadcrumbs -->
        <nav aria-label="Breadcrumb" class="flex items-center gap-2 text-[12px] sm:text-[13px] text-slate-500 font-medium mb-6 sm:mb-8 overflow-x-auto whitespace-nowrap scrollbar-none">
            <a href="{{ route('home') }}" class="hover:text-[#0070D5] transition-colors text-decoration-none text-inherit">Home</a>
            <span>/</span>
            <span class="text-slate-900 font-semibold">Product</span>
            <template x-if="activeCategory !== 'all'">
                <div class="flex items-center gap-2">
                    <span>/</span>
                    <span class="text-[#0070D5] font-semibold" x-text="categories[activeCategory]?.name"></span>
                </div>
            </template>
        </nav>

        <!-- 2. Header Section -->
        <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-14">
            <h1 class="text-[32px] sm:text-[42px] md:text-[50px] font-extrabold text-slate-950 tracking-tight leading-[1.12] mb-4">
                Ekosistem Drone & Teknologi Otonom
            </h1>
            <p class="text-[15px] sm:text-[17px] md:text-[18px] text-slate-600 font-normal leading-relaxed">
                Temukan lini produk drone presisi tinggi untuk sektor agrikultur, fotografi sinematik, transportasi pengiriman kargo, hingga suku cadang dan aksesori orisinal.
            </p>
        </div>

        <!-- 3. Category Filter Tabs -->
        <div class="flex items-center justify-center mb-10 sm:mb-12">
            <div class="inline-flex items-center gap-1.5 sm:gap-2 p-1.5 bg-white border border-slate-200 rounded-2xl shadow-xs overflow-x-auto max-w-full scrollbar-none">
                <!-- Tab: Semua Produk -->
                <button
                    type="button"
                    @click="setCategory('all')"
                    :class="activeCategory === 'all'
                        ? 'bg-[#0070D5] text-white shadow-sm font-semibold'
                        : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100 font-medium'"
                    class="px-4 py-2 sm:px-5 sm:py-2.5 rounded-xl text-[13px] sm:text-[14px] transition-all duration-200 whitespace-nowrap cursor-pointer flex items-center gap-2"
                >
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                    </svg>
                    <span>Semua Produk</span>
                    <span
                        :class="activeCategory === 'all' ? 'bg-white/25 text-white' : 'bg-slate-100 text-slate-600'"
                        class="text-[11px] px-2 py-0.5 rounded-full font-bold ml-0.5"
                    >
                        {{ count($allProducts) }}
                    </span>
                </button>

                <!-- Tab 1: Agrikultur -->
                <button
                    type="button"
                    @click="setCategory('agrikultur')"
                    :class="activeCategory === 'agrikultur'
                        ? 'bg-[#0070D5] text-white shadow-sm font-semibold'
                        : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100 font-medium'"
                    class="px-4 py-2 sm:px-5 sm:py-2.5 rounded-xl text-[13px] sm:text-[14px] transition-all duration-200 whitespace-nowrap cursor-pointer flex items-center gap-2"
                >
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                    </svg>
                    <span>Pertanian</span>
                    <span
                        :class="activeCategory === 'agrikultur' ? 'bg-white/25 text-white' : 'bg-slate-100 text-slate-600'"
                        class="text-[11px] px-2 py-0.5 rounded-full font-bold ml-0.5"
                    >
                        {{ count(\App\Data\DroneProducts::byCategory('agrikultur')) }}
                    </span>
                </button>

                <!-- Tab 2: Fotografi -->
                <button
                    type="button"
                    @click="setCategory('fotografi')"
                    :class="activeCategory === 'fotografi'
                        ? 'bg-[#0070D5] text-white shadow-sm font-semibold'
                        : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100 font-medium'"
                    class="px-4 py-2 sm:px-5 sm:py-2.5 rounded-xl text-[13px] sm:text-[14px] transition-all duration-200 whitespace-nowrap cursor-pointer flex items-center gap-2"
                >
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span>Pengawasan</span>
                    <span
                        :class="activeCategory === 'fotografi' ? 'bg-white/25 text-white' : 'bg-slate-100 text-slate-600'"
                        class="text-[11px] px-2 py-0.5 rounded-full font-bold ml-0.5"
                    >
                        {{ count(\App\Data\DroneProducts::byCategory('fotografi')) }}
                    </span>
                </button>

                <!-- Tab 3: Pengiriman -->
                <button
                    type="button"
                    @click="setCategory('pengiriman')"
                    :class="activeCategory === 'pengiriman'
                        ? 'bg-[#0070D5] text-white shadow-sm font-semibold'
                        : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100 font-medium'"
                    class="px-4 py-2 sm:px-5 sm:py-2.5 rounded-xl text-[13px] sm:text-[14px] transition-all duration-200 whitespace-nowrap cursor-pointer flex items-center gap-2"
                >
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                    </svg>
                    <span>Pengiriman</span>
                    <span
                        :class="activeCategory === 'pengiriman' ? 'bg-white/25 text-white' : 'bg-slate-100 text-slate-600'"
                        class="text-[11px] px-2 py-0.5 rounded-full font-bold ml-0.5"
                    >
                        {{ count(\App\Data\DroneProducts::byCategory('pengiriman')) }}
                    </span>
                </button>

                <!-- Tab 4: Suku Cadang -->
                <button
                    type="button"
                    @click="setCategory('suku-cadang')"
                    :class="activeCategory === 'suku-cadang'
                        ? 'bg-[#0070D5] text-white shadow-sm font-semibold'
                        : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100 font-medium'"
                    class="px-4 py-2 sm:px-5 sm:py-2.5 rounded-xl text-[13px] sm:text-[14px] transition-all duration-200 whitespace-nowrap cursor-pointer flex items-center gap-2"
                >
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span>Suku Cadang</span>
                    <span
                        :class="activeCategory === 'suku-cadang' ? 'bg-white/25 text-white' : 'bg-slate-100 text-slate-600'"
                        class="text-[11px] px-2 py-0.5 rounded-full font-bold ml-0.5"
                    >
                        {{ count(\App\Data\DroneProducts::byCategory('suku-cadang')) }}
                    </span>
                </button>
            </div>
        </div>

        <!-- 4. Category Description Banner -->
        <div class="mb-10 sm:mb-12">
            <div class="bg-gradient-to-r from-blue-900 via-indigo-900 to-slate-900 text-white rounded-3xl p-6 sm:p-8 md:p-10 shadow-lg relative overflow-hidden">
                <div class="absolute -right-10 -bottom-10 w-64 h-64 bg-blue-500/15 rounded-full blur-3xl pointer-events-none"></div>
                <div class="relative z-10 max-w-3xl">
                    <span class="inline-flex items-center gap-1.5 text-[11px] font-bold uppercase tracking-wider text-blue-300 bg-white/10 px-3 py-1 rounded-full mb-3 backdrop-blur-xs">
                        <span>Sorotan Kategori Terpilih</span>
                    </span>
                    <h2 class="text-[22px] sm:text-[28px] md:text-[32px] font-bold tracking-tight mb-2" x-text="categories[activeCategory]?.name || 'Semua Produk'"></h2>
                    <p class="text-[14px] sm:text-[16px] text-blue-100/90 leading-relaxed font-light" x-text="categories[activeCategory]?.description"></p>
                </div>
            </div>
        </div>

        <!-- 5. Product Grid Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            @foreach($allProducts as $product)
                @php
                    $waText = urlencode('Halo Mechatron Indonesia, saya tertarik untuk konsultasi dan pemesanan unit ' . $product['name'] . ' (' . $product['modelCode'] . '). Mohon informasi ketersediaan unit dan penawaran harga resmi.');
                    $waUrl = 'https://wa.me/' . ($product['whatsappNumber'] ?? '6281112143111') . '?text=' . $waText;
                @endphp
                <div
                    x-show="activeCategory === 'all' || activeCategory === '{{ $product['categorySlug'] }}'"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 translate-y-4 scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                    class="group bg-white rounded-3xl border border-slate-200/90 hover:border-[#0070D5]/50 overflow-hidden shadow-xs hover:shadow-xl transition-all duration-300 flex flex-col justify-between"
                >
                    <!-- Top Image Area -->
                    <div>
                        <div class="relative w-full h-[260px] sm:h-[280px] bg-slate-900 overflow-hidden">
                            <img
                                src="{{ asset($product['image']) }}"
                                alt="{{ $product['name'] }}"
                                class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-105"
                            />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-60"></div>

                            <!-- Model Code Pill -->
                            <div class="absolute top-4 left-4 bg-white/95 backdrop-blur-md px-3 py-1 rounded-full text-[11px] font-bold text-slate-900 shadow-sm border border-slate-200">
                                {{ $product['modelCode'] }}
                            </div>

                            <!-- Capacity / Highlight Badge -->
                            @if(!empty($product['capacity']))
                                <div class="absolute bottom-4 left-4 bg-[#0070D5] text-white px-3 py-1 rounded-full text-[11px] font-bold shadow-md">
                                    {{ $product['capacity'] }}
                                </div>
                            @endif

                            <!-- Category Indicator -->
                            <div class="absolute top-4 right-4 bg-black/60 backdrop-blur-md text-white/90 text-[10px] font-semibold px-2.5 py-1 rounded-full uppercase tracking-wider">
                                {{ $product['category'] }}
                            </div>
                        </div>

                        <!-- Card Body Content -->
                        <div class="p-6 sm:p-7">
                            <p class="text-[12px] font-bold text-[#0070D5] uppercase tracking-wider mb-1.5">
                                {{ $product['categoryDetail'] ?? $product['category'] }}
                            </p>
                            <h3 class="text-[20px] sm:text-[22px] font-extrabold text-slate-950 tracking-tight leading-snug mb-2 group-hover:text-[#0070D5] transition-colors">
                                <a href="{{ route('products.show', $product['id']) }}" class="text-inherit hover:text-inherit text-decoration-none">
                                    {{ $product['name'] }}
                                </a>
                            </h3>
                            <p class="text-[13px] sm:text-[14px] text-slate-600 line-clamp-2 leading-relaxed mb-5 font-normal">
                                {{ $product['subtitle'] ?? $product['tagline'] }}
                            </p>

                            <!-- Key Specifications Pills (Top 3) -->
                            <div class="space-y-2 pt-2 border-t border-slate-100">
                                @foreach(array_slice($product['specifications'] ?? [], 1, 3) as $spec)
                                    <div class="flex items-center justify-between text-[12px] py-0.5">
                                        <span class="text-slate-500 font-medium">{{ $spec['label'] }}</span>
                                        <span class="text-slate-900 font-semibold text-right truncate max-w-[170px]" title="{{ $spec['value'] }}">{{ $spec['value'] }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Card Actions -->
                    <div class="p-6 pt-0 sm:p-7 sm:pt-0">
                        <div class="grid grid-cols-2 gap-2.5 pt-4 border-t border-slate-100">
                            <!-- Detail Button -->
                            <a
                                href="{{ route('products.show', $product['id']) }}"
                                class="inline-flex items-center justify-center gap-1.5 px-3 py-2.5 rounded-xl border border-slate-300 hover:border-[#0070D5] text-slate-800 hover:text-[#0070D5] bg-white text-[12px] sm:text-[13px] font-semibold transition-all duration-200 text-decoration-none shadow-2xs hover:shadow-xs text-center"
                            >
                                <span>Detail Unit</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M9 5l7 7-7 7"/></svg>
                            </a>

                            <!-- WhatsApp Button -->
                            <a
                                href="{{ $waUrl }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="inline-flex items-center justify-center gap-1.5 px-3 py-2.5 rounded-xl bg-[#0070D5] hover:bg-[#005bb5] text-white text-[12px] sm:text-[13px] font-semibold transition-all duration-200 text-decoration-none shadow-xs hover:shadow-md text-center"
                            >
                                <span>Konsultasi</span>
                                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86.174.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.145.39-.086s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.099.824z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- 6. Bottom Enterprise CTA -->
        <div class="mt-16 mb-10 sm:mt-20 bg-slate-900 rounded-3xl p-8 sm:p-12 md:p-16 text-center text-white relative overflow-hidden shadow-xl border border-slate-800">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-600/20 via-transparent to-indigo-600/20 pointer-events-none"></div>
            <div class="relative z-10 max-w-2xl mx-auto">
                <h2 class="text-[28px] sm:text-[36px] md:text-[42px] font-extrabold tracking-tight leading-tight mb-4">
                    Butuh Solusi Drone Khusus untuk Bisnis Anda?
                </h2>
                <p class="text-[15px] sm:text-[17px] text-slate-300 font-light leading-relaxed mb-8">
                    Tim teknis dan agronomis Mechatron siap memberikan konsultasi spesifikasi teknis, uji coba lapangan langsung, paket kustomisasi sensor, serta skema pendanaan armada.
                </p>
                <div class="flex items-center justify-center gap-4 flex-wrap">
                    <a
                        href="https://wa.me/6281112143111?text={{ urlencode('Halo Mechatron Indonesia, kami tertarik untuk mendiskusikan pengadaan unit drone dan jadwal demo lapangan langsung.') }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex items-center gap-2 px-7 py-3.5 rounded-full bg-[#0070D5] hover:bg-[#005bb5] text-white text-[14px] sm:text-[15px] font-semibold transition-all duration-300 shadow-lg hover:shadow-xl hover:scale-105 active:scale-95 cursor-pointer text-decoration-none"
                    >
                        <span>Jadwalkan Demo & Konsultasi</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                    <a
                        href="{{ route('contact') }}"
                        class="inline-flex items-center gap-2 px-7 py-3.5 rounded-full bg-white/10 hover:bg-white/20 text-white border border-white/20 hover:border-white text-[14px] sm:text-[15px] font-semibold transition-all duration-300 backdrop-blur-md cursor-pointer text-decoration-none"
                    >
                        <span>Hubungi Kontak Kami</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
