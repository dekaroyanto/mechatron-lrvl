@extends('layouts.app')

@section('title', 'Berita Terkini | Mechatron Indonesia')
@section('meta_description', 'Kabar terbaru, perkembangan regulasi, inovasi teknologi drone, dan transformasi modernisasi pertanian Indonesia bersama Mechatron.')
@section('navbar_theme', 'light')

@section('content')
<div class="bg-[#F8FAFC] min-h-screen pt-24 sm:pt-28 pb-20 sm:pb-28"
    x-data="{
        searchQuery: '',
        articles: {{ Js::from($articles) }},
        get filteredArticles() {
            const q = this.searchQuery.trim().toLowerCase();
            if (!q) return this.articles;
            return this.articles.filter(a =>
                a.title.toLowerCase().includes(q) ||
                a.excerpt.toLowerCase().includes(q) ||
                (a.tags && a.tags.some(t => t.toLowerCase().includes(q)))
            );
        }
    }"
>
    <!-- Header Hero Section -->
    <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8 mb-10 sm:mb-14">
        <div class="max-w-3xl">
            <h1 class="text-[32px] sm:text-[44px] md:text-[52px] font-extrabold text-[#0F172A] tracking-tight leading-[1.1] mb-4">
                Berita Terkini
            </h1>
            <p class="text-[15px] sm:text-[18px] text-[#64748B] leading-relaxed">
                Kabar terbaru, uji coba lapangan, inovasi teknologi drone pertanian, dan transformasi modernisasi agribisnis di seluruh Indonesia.
            </p>
        </div>
    </div>

    <!-- Blog Listing Content -->
    <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Search Bar Only -->
        <div class="mb-10 sm:mb-14 max-w-xl mx-auto pb-6 border-b border-slate-200">
            <div class="relative w-full">
                <input
                    type="text"
                    placeholder="Cari berita drone & agrikultur..."
                    x-model="searchQuery"
                    class="w-full pl-11 pr-10 py-3 rounded-full bg-white border border-slate-200 text-[14px] sm:text-[15px] focus:outline-none focus:ring-2 focus:ring-[#0070D5] focus:border-transparent transition-all placeholder:text-slate-400 shadow-sm"
                />
                <svg class="w-5 h-5 text-slate-400 absolute left-4 top-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                <button
                    x-show="searchQuery"
                    @click="searchQuery = ''"
                    class="absolute right-3.5 top-3 text-slate-400 hover:text-slate-600 p-1 rounded-full transition-colors"
                    aria-label="Hapus pencarian"
                    style="display: none;"
                >
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Featured Article Hero (Shown only when no search query) -->
        <template x-if="searchQuery === '' && articles.length > 0">
            <div class="mb-12 sm:mb-16">
                <a
                    :href="'/blog/' + articles[0].slug"
                    class="group block relative rounded-[28px] sm:rounded-[36px] overflow-hidden bg-slate-900 border border-slate-200/80 shadow-md hover:shadow-2xl transition-all duration-500 text-decoration-none"
                >
                    <div class="grid grid-cols-1 lg:grid-cols-12 min-h-[420px] lg:min-h-[480px]">
                        <div class="lg:col-span-7 relative h-[280px] sm:h-[360px] lg:h-auto overflow-hidden">
                            <img :src="articles[0].image" :alt="articles[0].title" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 ease-out" />
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent lg:bg-gradient-to-r lg:from-transparent lg:to-slate-950/80"></div>
                        </div>

                        <div class="lg:col-span-5 p-7 sm:p-10 lg:p-12 flex flex-col justify-between bg-slate-950 text-white">
                            <div>
                                <div class="flex items-center gap-2 mb-3 sm:mb-4">
                                    <span class="text-[11px] font-bold uppercase tracking-wider px-3 py-1 rounded-full bg-[#0070D5] text-white">
                                        Berita Utama
                                    </span>
                                    <span class="text-[12px] text-slate-400 font-medium" x-text="articles[0].date"></span>
                                </div>

                                <h2 class="text-[22px] sm:text-[28px] lg:text-[32px] font-extrabold text-white tracking-tight leading-tight group-hover:text-blue-300 transition-colors mb-3" x-text="articles[0].title"></h2>

                                <p class="text-[14px] sm:text-[15px] text-slate-300 leading-relaxed line-clamp-3 mb-6" x-text="articles[0].excerpt"></p>
                            </div>

                            <div class="pt-4 border-t border-slate-800 flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="relative w-9 h-9 rounded-full overflow-hidden bg-slate-800">
                                        <img :src="articles[0].author.avatar" :alt="articles[0].author.name" class="w-full h-full object-cover" />
                                    </div>
                                    <div>
                                        <p class="text-[13px] font-semibold text-white" x-text="articles[0].author.name"></p>
                                        <p class="text-[11px] text-slate-400" x-text="articles[0].author.role"></p>
                                    </div>
                                </div>

                                <span class="text-[13px] font-semibold text-[#0070D5] group-hover:translate-x-1 transition-transform inline-flex items-center gap-1">
                                    <span>Baca Berita</span>
                                    <span>→</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </template>

        <!-- Grid of Articles -->
        <template x-if="filteredArticles.length > 0">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                <template x-for="article in filteredArticles" :key="article.id">
                    <article class="group flex flex-col bg-white rounded-[24px] overflow-hidden border border-slate-200/90 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <a :href="'/blog/' + article.slug" class="relative block w-full h-[220px] sm:h-[240px] overflow-hidden bg-slate-900 text-decoration-none">
                            <img :src="article.image" :alt="article.title" class="w-full h-full object-cover object-center transition-transform duration-700 ease-out group-hover:scale-105" />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-50 group-hover:opacity-30 transition-opacity"></div>
                        </a>

                        <div class="p-6 sm:p-7 flex flex-col flex-grow justify-between">
                            <div>
                                <div class="flex items-center gap-3 text-[12px] text-slate-500 font-medium mb-3">
                                    <time x-text="article.date"></time>
                                    <span class="w-1 h-1 rounded-full bg-slate-300"></span>
                                    <span x-text="article.readTime"></span>
                                </div>

                                <h3 class="text-[18px] sm:text-[20px] font-bold text-slate-900 leading-snug group-hover:text-[#0070D5] transition-colors line-clamp-2 mb-2.5">
                                    <a :href="'/blog/' + article.slug" class="text-decoration-none text-inherit" x-text="article.title"></a>
                                </h3>

                                <p class="text-[13px] sm:text-[14px] text-slate-600 leading-relaxed line-clamp-3 mb-6" x-text="article.excerpt"></p>
                            </div>

                            <div class="pt-4 border-t border-slate-100 flex items-center justify-between mt-auto">
                                <div class="flex items-center gap-2.5">
                                    <div class="relative w-8 h-8 rounded-full overflow-hidden bg-slate-200 border border-slate-200">
                                        <img :src="article.author.avatar" :alt="article.author.name" class="w-full h-full object-cover" />
                                    </div>
                                    <div>
                                        <p class="text-[12px] font-semibold text-slate-900 leading-tight" x-text="article.author.name"></p>
                                        <p class="text-[10px] text-slate-500 leading-tight line-clamp-1" x-text="article.author.role"></p>
                                    </div>
                                </div>

                                <a :href="'/blog/' + article.slug" class="inline-flex items-center gap-1 text-[13px] font-semibold text-[#0070D5] group-hover:translate-x-1 transition-transform text-decoration-none">
                                    <span>Baca</span>
                                    <span>→</span>
                                </a>
                            </div>
                        </div>
                    </article>
                </template>
            </div>
        </template>

        <template x-if="filteredArticles.length === 0">
            <div class="text-center py-16 bg-white rounded-[24px] border border-slate-200">
                <p class="text-[16px] text-slate-600 font-medium">
                    Tidak ada berita yang cocok dengan pencarian "<span x-text="searchQuery"></span>".
                </p>
                <button
                    type="button"
                    @click="searchQuery = ''"
                    class="mt-4 px-5 py-2 rounded-full bg-[#0070D5] text-white text-[13px] font-semibold hover:bg-[#005bb5] cursor-pointer"
                >
                    Reset Pencarian
                </button>
            </div>
        </template>

        <!-- Bottom Consultation Banner -->
        <div class="mt-20 sm:mt-24">
            <div class="relative rounded-[28px] sm:rounded-[36px] overflow-hidden bg-gradient-to-br from-[#0B1528] via-[#0F172A] to-[#1E293B] text-white p-8 sm:p-12 md:p-16 text-center border border-slate-700/50 shadow-xl">
                <div class="max-w-2xl mx-auto">
                    <span class="text-[12px] font-bold uppercase tracking-widest text-[#60A5FA] mb-2 block">
                        Solusi Enterprise Terintegrasi
                    </span>
                    <h2 class="text-[26px] sm:text-[34px] md:text-[40px] font-extrabold tracking-tight mb-4">
                        Punya Pertanyaan Seputar Kebutuhan Drone Anda?
                    </h2>
                    <p class="text-[14px] sm:text-[16px] text-slate-300 leading-relaxed mb-8">
                        Diskusikan tantangan pemetaan, pertanian, sewa armada, atau pelatihan tim perusahaan Anda bersama spesialis teknis Mechatron.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                        <a
                            href="https://wa.me/6281112143111?text={{ urlencode('Halo Mechatron, saya ingin konsultasi setelah membaca artikel blog Mechatron.') }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-[#0070D5] hover:bg-[#005bb5] text-white font-semibold text-[14px] sm:text-[15px] px-8 py-3.5 rounded-full shadow-lg transition-all text-decoration-none"
                        >
                            <span>Konsultasi WhatsApp Gratis</span>
                            <span>›</span>
                        </a>
                        <a
                            href="{{ route('services.index') }}"
                            class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-white/10 hover:bg-white/20 text-white font-semibold text-[14px] sm:text-[15px] px-7 py-3.5 rounded-full transition-all text-decoration-none"
                        >
                            <span>Lihat Layanan Mechatron</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
