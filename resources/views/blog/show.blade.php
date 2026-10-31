@extends('layouts.app')

@section('title', $post['title'] . ' | Berita Mechatron')
@section('meta_description', $post['excerpt'])
@section('navbar_theme', 'light')

@php
    $whatsappUrl = 'https://wa.me/6281112143111?text=' . urlencode('Halo Mechatron, saya tertarik berdiskusi mengenai topik artikel: "' . $post['title'] . '".');
@endphp

@section('content')
<div class="bg-white min-h-screen pt-24 sm:pt-28 pb-20 sm:pb-28">
    <article class="max-w-[1000px] mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Breadcrumbs -->
        <nav aria-label="Breadcrumb" class="flex items-center gap-2 text-[12px] sm:text-[13px] text-slate-500 font-medium mb-6 sm:mb-8 overflow-x-auto whitespace-nowrap scrollbar-none">
            <a href="{{ route('home') }}" class="hover:text-[#0070D5] transition-colors text-decoration-none text-inherit">Beranda</a>
            <span>/</span>
            <a href="{{ route('blog.index') }}" class="hover:text-[#0070D5] transition-colors text-decoration-none text-inherit">Berita</a>
            <span>/</span>
            <span class="text-slate-400">{{ $post['category'] }}</span>
        </nav>

        <!-- Article Header -->
        <header class="mb-8 sm:mb-10">
            <h1 class="text-[28px] sm:text-[40px] md:text-[48px] font-extrabold text-[#0F172A] tracking-tight leading-[1.18] mb-6">
                {{ $post['title'] }}
            </h1>

            <!-- Author Profile Bar -->
            <div class="flex items-center gap-3.5 pt-4 border-t border-slate-100">
                <div class="relative w-11 h-11 rounded-full overflow-hidden bg-slate-200 border border-slate-200">
                    <img src="{{ $post['author']['avatar'] }}" alt="{{ $post['author']['name'] }}" class="w-full h-full object-cover" />
                </div>
                <div>
                    <p class="text-[14px] font-bold text-slate-900 leading-tight">
                        {{ $post['author']['name'] }}
                    </p>
                    <p class="text-[12px] text-slate-500 leading-tight">
                        {{ $post['author']['role'] }} • Mechatron Indonesia Official
                    </p>
                </div>
            </div>
        </header>

        <!-- Featured Hero Image -->
        <div class="relative w-full h-[320px] sm:h-[460px] md:h-[540px] rounded-[24px] sm:rounded-[32px] overflow-hidden bg-slate-900 shadow-lg mb-10 sm:mb-14 border border-slate-200/80">
            <!-- Blurred background fill matching the image src -->
            <img src="{{ $post['image'] }}" alt="" aria-hidden="true" class="absolute inset-0 w-full h-full object-cover object-center scale-110 blur-2xl opacity-90" />
            <!-- Foreground image -->
            <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="relative w-full h-full object-contain object-center" />
        </div>

        <!-- Article Body Content -->
        <div class="max-w-[820px] mx-auto">
            <p class="text-[17px] sm:text-[20px] font-medium text-slate-800 leading-relaxed mb-8 sm:mb-10 pb-6 border-b border-slate-100">
                {{ $post['excerpt'] }}
            </p>

            <!-- Content Blocks -->
            <div class="space-y-6 sm:space-y-8 text-[16px] sm:text-[17px] text-slate-700 leading-[1.8]">
                @foreach($post['content'] as $block)
                    @if($block['type'] === 'paragraph')
                        <p>{{ $block['text'] }}</p>
                    @elseif($block['type'] === 'heading')
                        <h2 class="text-[22px] sm:text-[28px] font-bold text-[#0F172A] tracking-tight leading-snug pt-6 sm:pt-8">
                            {{ $block['text'] }}
                        </h2>
                    @elseif($block['type'] === 'quote')
                        <blockquote class="my-8 p-6 sm:p-8 rounded-[20px] bg-slate-50 border-l-4 border-[#0070D5] text-slate-900 italic font-medium text-[16px] sm:text-[18px] leading-relaxed shadow-sm">
                            &ldquo;{{ $block['text'] }}&rdquo;
                        </blockquote>
                    @elseif($block['type'] === 'list')
                        <ul class="my-6 space-y-3">
                            @foreach($block['items'] as $item)
                                <li class="flex items-start gap-3">
                                    <span class="w-5 h-5 rounded-full bg-blue-100 text-[#0070D5] flex items-center justify-center shrink-0 mt-1 text-[11px] font-bold">
                                        ✓
                                    </span>
                                    <span>{{ $item }}</span>
                                </li>
                            @endforeach
                        </ul>
                    @elseif($block['type'] === 'takeaway')
                        <div class="my-8 p-6 sm:p-8 rounded-[24px] bg-gradient-to-br from-blue-50/80 to-indigo-50/60 border border-blue-200/70 text-slate-900 shadow-sm">
                            <div class="flex items-center gap-2 mb-2 text-[#0070D5] font-bold text-[14px] uppercase tracking-wider">
                                <span>💡</span>
                                <span>{{ $block['title'] ?? 'Intisari Utama' }}</span>
                            </div>
                            <p class="text-[15px] sm:text-[16px] text-slate-800 leading-relaxed">
                                {{ $block['text'] }}
                            </p>
                        </div>
                    @endif
                @endforeach
            </div>

            <!-- Tags Pill List -->
            @if(!empty($post['tags']))
                <div class="mt-10 sm:mt-12 pt-6 border-t border-slate-200 flex items-center gap-2 flex-wrap">
                    <span class="text-[13px] font-semibold text-slate-500 mr-2">Topik Terkait:</span>
                    @foreach($post['tags'] as $tag)
                        <span class="text-[12px] font-medium px-3 py-1 rounded-full bg-slate-100 text-slate-700 hover:bg-slate-200 transition-colors">
                            #{{ $tag }}
                        </span>
                    @endforeach
                </div>
            @endif

            <!-- Author Bio Box -->
            <div class="mt-10 sm:mt-12 p-6 sm:p-8 rounded-[24px] bg-slate-50 border border-slate-200 flex flex-col sm:flex-row items-start sm:items-center gap-4 sm:gap-6">
                <div class="relative w-16 h-16 rounded-full overflow-hidden bg-slate-200 shrink-0 border-2 border-white shadow-sm">
                    <img src="{{ $post['author']['avatar'] }}" alt="{{ $post['author']['name'] }}" class="w-full h-full object-cover" />
                </div>
                <div>
                    <span class="text-[11px] font-bold uppercase tracking-wider text-[#0070D5]">Tentang Penulis</span>
                    <h4 class="text-[17px] font-bold text-slate-900 mt-0.5">{{ $post['author']['name'] }}</h4>
                    <p class="text-[13px] text-slate-600 mt-1 leading-relaxed">
                        Tim riset, jurnalisme agrikultur, dan spesialis drone Mechatron Indonesia. Berdedikasi menghadirkan liputan terkini seputar uji coba lapangan, inovasi alsintan, dan percepatan mekanisasi pertanian modern di seluruh Nusantara.
                    </p>
                </div>
            </div>

            <!-- Action Bar (WhatsApp Consultation CTA) -->
            <div class="mt-10 sm:mt-12 p-8 rounded-[26px] bg-gradient-to-r from-[#002B7F] to-[#0070D5] text-white flex flex-col sm:flex-row items-center justify-between gap-6 shadow-xl">
                <div>
                    <h3 class="text-[20px] sm:text-[22px] font-bold leading-snug">
                        Tertarik Mengimplementasikan Solusi Ini?
                    </h3>
                    <p class="text-[14px] text-blue-100 mt-1">
                        Konsultasikan jadwal demo unit, sewa armada, atau survei bersama tim kami.
                    </p>
                </div>
                <a
                    href="{{ $whatsappUrl }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="shrink-0 bg-white hover:bg-slate-100 text-[#002B7F] font-bold text-[14px] px-7 py-3.5 rounded-full shadow-md transition-all inline-flex items-center gap-2 text-decoration-none"
                >
                    <span>Hubungi via WhatsApp</span>
                    <span>›</span>
                </a>
            </div>

            <!-- Back to Blog Navigation -->
            <div class="mt-8 text-center sm:text-left">
                <a href="{{ route('blog.index') }}" class="inline-flex items-center gap-2 text-[14px] font-semibold text-[#0070D5] hover:text-[#005bb5] transition-colors text-decoration-none">
                    <span>← Kembali ke Semua Berita</span>
                </a>
            </div>
        </div>
    </article>

    <!-- Related Articles Section -->
    @if(!empty($relatedPosts))
        <section class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8 mt-20 sm:mt-24 pt-16 border-t border-slate-200">
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-[22px] sm:text-[28px] font-bold text-[#0F172A] tracking-tight">
                    Berita Terkait Lainnya
                </h2>
                <a href="{{ route('blog.index') }}" class="text-[14px] font-semibold text-[#0070D5] hover:underline hidden sm:inline text-decoration-none">
                    Lihat Semua Berita ›
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
                @foreach($relatedPosts as $related)
                    <article class="group flex flex-col bg-white rounded-[22px] overflow-hidden border border-slate-200/90 shadow-sm hover:shadow-lg transition-all duration-300">
                        <a href="{{ route('blog.show', $related['slug']) }}" class="relative block w-full h-[190px] overflow-hidden bg-slate-900 text-decoration-none">
                            <img src="{{ $related['image'] }}" alt="{{ $related['title'] }}" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500" />
                            <div class="absolute top-3.5 left-3.5">
                                <span class="text-[11px] font-bold px-2.5 py-0.5 rounded-full bg-white/95 text-slate-900 shadow-sm">
                                    {{ $related['category'] }}
                                </span>
                            </div>
                        </a>

                        <div class="p-5 flex flex-col flex-grow justify-between">
                            <div>
                                <span class="text-[11px] text-slate-400 font-medium">
                                    {{ $related['date'] }} • {{ $related['readTime'] }}
                                </span>
                                <h3 class="text-[16px] font-bold text-slate-900 mt-1.5 leading-snug group-hover:text-[#0070D5] transition-colors line-clamp-2">
                                    <a href="{{ route('blog.show', $related['slug']) }}" class="text-decoration-none text-inherit">
                                        {{ $related['title'] }}
                                    </a>
                                </h3>
                                <p class="text-[13px] text-slate-600 mt-2 line-clamp-2 leading-relaxed">
                                    {{ $related['excerpt'] }}
                                </p>
                            </div>

                            <div class="mt-4 pt-3 border-t border-slate-100">
                                <a href="{{ route('blog.show', $related['slug']) }}" class="text-[13px] font-semibold text-[#0070D5] inline-flex items-center gap-1 group-hover:translate-x-1 transition-transform text-decoration-none">
                                    <span>Baca Selengkapnya</span>
                                    <span>→</span>
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </section>
    @endif
</div>
@endsection
