@props(['latestArticles' => []])

<section id="blog" class="relative w-full py-16 sm:py-20 md:py-24 bg-[#F8FAFC] border-t border-[#E2E8F0]">
    <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 sm:mb-12 md:mb-14 gap-4">
            <div>
                <h2 class="text-[26px] sm:text-[34px] md:text-[40px] font-extrabold text-[#0F172A] tracking-tight leading-tight">
                    Berita Terkini
                </h2>
                <p class="text-[14px] sm:text-[16px] text-[#64748B] mt-2 max-w-xl">
                    Ikuti perkembangan terbaru inovasi drone pertanian, uji coba lapangan, dan transformasi modernisasi agribisnis di seluruh Indonesia.
                </p>
            </div>

            <div class="hidden md:block">
                <a
                    href="{{ route('blog.index') }}"
                    class="inline-flex items-center gap-2 text-[14px] sm:text-[15px] font-semibold text-[#0070D5] hover:text-[#005bb5] bg-white hover:bg-blue-50 border border-blue-200/80 px-6 py-2.5 rounded-full shadow-sm hover:shadow transition-all group text-decoration-none"
                >
                    <span>Lihat Semua Berita</span>
                    <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M9 5l7 7-7 7"/></svg>
                </a>
            </div>
        </div>

        <!-- 3 Articles Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            @foreach($latestArticles as $article)
                <article class="group flex flex-col bg-white rounded-[24px] overflow-hidden border border-slate-200/90 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                    <a href="{{ route('blog.show', $article['slug']) }}" class="relative block w-full h-[220px] sm:h-[240px] overflow-hidden bg-slate-900">
                        <img src="{{ $article['image'] }}" alt="{{ $article['title'] }}" class="w-full h-full object-cover object-center transition-transform duration-700 ease-out group-hover:scale-105" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-60 group-hover:opacity-40 transition-opacity"></div>
                    </a>

                    <div class="p-6 sm:p-7 flex flex-col flex-grow justify-between">
                        <div>
                            <div class="flex items-center gap-3 text-[12px] text-slate-500 font-medium mb-3">
                                <time>{{ $article['date'] }}</time>
                                <span class="w-1 h-1 rounded-full bg-slate-300"></span>
                                <span>{{ $article['readTime'] }}</span>
                            </div>

                            <h3 class="text-[18px] sm:text-[20px] font-bold text-slate-900 leading-snug group-hover:text-[#0070D5] transition-colors line-clamp-2 mb-2.5">
                                <a href="{{ route('blog.show', $article['slug']) }}" class="text-decoration-none text-inherit">
                                    {{ $article['title'] }}
                                </a>
                            </h3>

                            <p class="text-[13px] sm:text-[14px] text-slate-600 leading-relaxed line-clamp-3 mb-6">
                                {{ $article['excerpt'] }}
                            </p>
                        </div>

                        <div class="pt-4 border-t border-slate-100 flex items-center justify-between mt-auto">
                            <div class="flex items-center gap-2.5">
                                <div class="relative w-8 h-8 rounded-full overflow-hidden bg-slate-200 border border-slate-200">
                                    <img src="{{ $article['author']['avatar'] }}" alt="{{ $article['author']['name'] }}" class="w-full h-full object-cover" />
                                </div>
                                <div>
                                    <p class="text-[12px] font-semibold text-slate-900 leading-tight">{{ $article['author']['name'] }}</p>
                                    <p class="text-[10px] text-slate-500 leading-tight line-clamp-1">{{ $article['author']['role'] }}</p>
                                </div>
                            </div>

                            <a
                                href="{{ route('blog.show', $article['slug']) }}"
                                class="inline-flex items-center gap-1 text-[13px] font-semibold text-[#0070D5] group-hover:translate-x-1 transition-transform text-decoration-none"
                                aria-label="Baca artikel: {{ $article['title'] }}"
                            >
                                <span>Baca</span>
                                <span>→</span>
                            </a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>

        <!-- Mobile View All Button -->
        <div class="mt-8 text-center md:hidden">
            <a
                href="{{ route('blog.index') }}"
                class="inline-flex items-center justify-center gap-2 w-full max-w-xs text-[14px] font-semibold text-[#0070D5] bg-white border border-blue-200 px-6 py-3 rounded-full shadow-sm text-decoration-none"
            >
                <span>Lihat Semua Berita</span>
                <span>›</span>
            </a>
        </div>
    </div>
</section>
