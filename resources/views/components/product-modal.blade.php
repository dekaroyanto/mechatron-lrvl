<div
    x-show="$store.productModal.open"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    @keydown.escape.window="$store.productModal.close()"
    class="fixed inset-0 z-50 flex items-center justify-center p-3 sm:p-5 bg-black/80 backdrop-blur-md overflow-y-auto"
    style="display: none;"
    @click="$store.productModal.close()"
>
    <div
        class="bg-white border border-slate-200 w-full max-w-4xl max-h-[92vh] overflow-y-auto relative rounded-[24px] sm:rounded-[32px] shadow-2xl my-auto text-slate-900"
        @click.stop
    >
        <!-- Sticky Header Close Button -->
        <button
            @click="$store.productModal.close()"
            class="absolute top-4 right-4 z-30 w-9 h-9 rounded-full bg-slate-100 hover:bg-slate-200 text-slate-700 hover:text-black flex items-center justify-center transition-colors cursor-pointer shadow-sm"
            aria-label="Tutup Modal"
        >
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <template x-if="$store.productModal.product">
            <div class="p-6 sm:p-8 md:p-10">
                <!-- Top Hero Showcase -->
                <div class="grid grid-cols-1 md:grid-cols-12 gap-6 md:gap-8 items-center pb-8 border-b border-slate-200">
                    <!-- Drone Thumbnail -->
                    <div class="md:col-span-5 relative w-full h-[240px] sm:h-[280px] md:h-[320px] rounded-[20px] overflow-hidden bg-slate-900 shadow-md">
                        <img
                            :src="$store.productModal.product.image"
                            :alt="$store.productModal.product.name || $store.productModal.product.title"
                            class="w-full h-full object-cover object-center"
                        />
                        <template x-if="$store.productModal.product.modelCode">
                            <div
                                x-text="$store.productModal.product.modelCode"
                                class="absolute top-3 left-3 bg-white/95 backdrop-blur-md px-3 py-1 rounded-full text-[11px] font-bold text-slate-900 shadow-sm border border-slate-200"
                            ></div>
                        </template>
                    </div>

                    <!-- Product Title & Brand Info -->
                    <div class="md:col-span-7 flex flex-col justify-center">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#0070D5]/10 text-[#0070D5] text-[11px] font-bold uppercase tracking-wider mb-2 self-start">
                            <span>Mechatron Agriculture Drone</span>
                        </div>

                        <h2
                            x-text="$store.productModal.product.name || $store.productModal.product.title"
                            class="text-[26px] sm:text-[32px] md:text-[36px] font-extrabold text-slate-900 tracking-tight leading-tight mb-2"
                        ></h2>

                        <p
                            x-text="$store.productModal.product.subtitle || $store.productModal.product.tagline"
                            class="text-[14px] sm:text-[15px] font-semibold text-[#0070D5] mb-3"
                        ></p>

                        <p
                            x-text="$store.productModal.product.tagline || 'Solusi teknologi udara adaptif presisi tinggi untuk menjawab kebutuhan mekanisasi pertanian dan ketahanan pangan modern.'"
                            class="text-[13px] sm:text-[14px] text-slate-600 leading-relaxed mb-6"
                        ></p>

                        <!-- Purchase Direct to WhatsApp -->
                        <div class="p-4 rounded-[18px] bg-gradient-to-r from-emerald-50 to-blue-50 border border-emerald-200/60 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                            <div>
                                <span class="text-[11px] font-bold uppercase tracking-wider text-emerald-700 block">
                                    Pemesanan & Konsultasi Resmi
                                </span>
                                <p class="text-[13px] text-slate-700 font-medium">
                                    Hubungi tim sales untuk penawaran resmi, paket sewa, atau demo unit.
                                </p>
                            </div>

                            <a
                                :href="'https://wa.me/6281112143111?text=' + encodeURIComponent('Halo Mechatron, saya tertarik untuk konsultasi dan pemesanan unit ' + ($store.productModal.product.name || $store.productModal.product.title) + '. Mohon informasi ketersediaan unit dan jadwal demo lapangan.')"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="shrink-0 w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-[#25D366] hover:bg-[#20bd5a] text-white font-bold text-[14px] px-6 py-2.5 rounded-full shadow-md transition-all hover:scale-105 active:scale-95 text-decoration-none"
                            >
                                <span>Chat WhatsApp</span>
                                <span>›</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Technical Specifications (If Available) -->
                <template x-if="$store.productModal.product.specifications">
                    <div class="mt-8">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-[18px] sm:text-[20px] font-extrabold text-slate-900 tracking-tight">
                                Spesifikasi Teknis Drone
                            </h3>
                            <span class="text-[11px] font-semibold px-2.5 py-0.5 rounded-full bg-slate-100 text-slate-600">
                                Resmi Mechatron
                            </span>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5 sm:gap-3 bg-slate-50 p-4 sm:p-5 rounded-[20px] border border-slate-200">
                            <template x-for="(spec, sIdx) in $store.productModal.product.specifications" :key="sIdx">
                                <div class="flex flex-col sm:flex-row sm:items-center justify-between p-2.5 rounded-xl bg-white border border-slate-100 text-[13px]">
                                    <span class="text-slate-500 font-medium" x-text="spec.label"></span>
                                    <span class="text-slate-900 font-bold sm:text-right mt-0.5 sm:mt-0" x-text="spec.value"></span>
                                </div>
                            </template>
                        </div>
                    </div>
                </template>

                <!-- In-Field Application -->
                <template x-if="$store.productModal.product.fieldApplications">
                    <div class="mt-8">
                        <h3 class="text-[18px] sm:text-[20px] font-extrabold text-slate-900 tracking-tight mb-3">
                            Aplikasi Lapangan (In-Field Application)
                        </h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <template x-for="(app, aIdx) in $store.productModal.product.fieldApplications" :key="aIdx">
                                <div class="p-3.5 rounded-2xl bg-slate-50 border border-slate-200/80 hover:border-[#0070D5]/40 transition-colors">
                                    <div class="text-[13px] font-bold text-slate-900 mb-1 flex items-center gap-1.5">
                                        <span class="w-2 h-2 rounded-full bg-[#0070D5] shrink-0"></span>
                                        <span x-text="app.title"></span>
                                    </div>
                                    <p class="text-[12px] text-slate-600 leading-relaxed" x-text="app.desc"></p>
                                </div>
                            </template>
                        </div>
                    </div>
                </template>

                <!-- Package Includes Box -->
                <template x-if="$store.productModal.product.packageIncludes">
                    <div class="mt-8 p-5 sm:p-6 rounded-[20px] bg-slate-900 text-white">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-[#0070D5] text-lg font-bold">📦</span>
                            <h4 class="text-[15px] sm:text-[16px] font-bold text-white uppercase tracking-wider">
                                Kelengkapan Paket (Package Include)
                            </h4>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5 text-[13px]">
                            <template x-for="(item, pIdx) in $store.productModal.product.packageIncludes" :key="pIdx">
                                <div class="flex items-center gap-2.5 text-slate-200">
                                    <span class="w-4 h-4 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center text-[11px] font-bold shrink-0">
                                        ✓
                                    </span>
                                    <span x-text="item"></span>
                                </div>
                            </template>
                        </div>
                    </div>
                </template>

                <!-- Bottom Action Footer -->
                <div class="mt-8 pt-6 border-t border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-4">
                    <div class="text-[12px] text-slate-500 text-center sm:text-left">
                        PT Mechatron Berkah Mandiri Teknologi • Call Center:
                        <a href="tel:+6281112143111" class="font-semibold text-slate-700 hover:text-[#0070D5]">
                            +62 811 1214 3111
                        </a>
                    </div>

                    <div class="flex items-center gap-3 w-full sm:w-auto">
                        <button
                            @click="$store.productModal.close()"
                            class="w-1/2 sm:w-auto px-6 py-2.5 rounded-full border border-slate-300 text-slate-700 hover:bg-slate-100 text-[13px] font-semibold transition-colors cursor-pointer"
                        >
                            Tutup
                        </button>
                        <a
                            :href="'https://wa.me/6281112143111?text=' + encodeURIComponent('Halo Mechatron, saya tertarik untuk konsultasi dan pemesanan unit ' + ($store.productModal.product.name || $store.productModal.product.title))"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="w-1/2 sm:w-auto inline-flex items-center justify-center gap-2 px-7 py-2.5 rounded-full bg-[#0070D5] hover:bg-[#005bb5] text-white text-[13px] font-semibold shadow-md transition-all hover:scale-105 active:scale-95 text-decoration-none"
                        >
                            <span>Pesan via WhatsApp</span>
                            <span>›</span>
                        </a>
                    </div>
                </div>
            </div>
        </template>
    </div>
</div>
