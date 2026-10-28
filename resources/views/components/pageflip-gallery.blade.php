@php
    $pages = [
        [
            'id' => 1,
            'frontImage' => asset('images/mechatron_kantor_gedung.jpg'),
            'backImage' => asset('images/mechatron_kantor_interior.jpg'),
            'frontTitle' => 'Kantor Mechatron',
            'frontSubtitle' => 'Summarecon Bandung',
            'backTitle' => 'Lobi & Ruang Kantor',
            'backSubtitle' => 'PT Bandung Mekatronika Teknologi',
        ],
        [
            'id' => 2,
            'frontImage' => asset('images/mechatron_pabrik_gudang.jpg'),
            'backImage' => asset('images/mechatron_kantor_gedung.jpg'),
            'frontTitle' => 'Gudang & Fasilitas Workshop',
            'frontSubtitle' => 'Sentra Fabrikasi & Perakitan',
            'backTitle' => 'Tampak Depan Kantor BMT',
            'backSubtitle' => 'Gedebage, Kota Bandung',
        ],
        [
            'id' => 3,
            'frontImage' => asset('images/mechatron_kantor_interior.jpg'),
            'backImage' => asset('images/mechatron_pabrik_gudang.jpg'),
            'frontTitle' => 'Loby Kantor',
            'frontSubtitle' => 'Mekatronika & Otomasi Cerdas',
            'backTitle' => 'Workshop Mechatron',
            'backSubtitle' => 'Karya Nyata Anak Bangsa',
        ],
    ];
@endphp

<section
    id="pageflip-section"
    class="relative w-full py-16 sm:py-24 bg-[#FFFFFF] border-t border-gray-200/80 overflow-x-clip select-none"
    x-data="{
        currentTurned: 0,
        totalLeaves: {{ count($pages) }},
        pages: {{ Js::from($pages) }},
        peekingIndex: null,
        isHovered: false,

        get isOpen() {
            return this.currentTurned > 0 && this.currentTurned < this.totalLeaves;
        },

        flipNext() {
            if (this.currentTurned < this.totalLeaves) {
                this.currentTurned++;
            }
        },

        flipPrev() {
            if (this.currentTurned > 0) {
                this.currentTurned--;
            }
        },

        resetBook() {
            this.currentTurned = 0;
            this.peekingIndex = null;
        },

        handleLeafClick(index) {
            if (index === this.currentTurned) {
                // Klik halaman kanan paling atas -> balik ke kiri (next)
                this.flipNext();
            } else if (index === this.currentTurned - 1) {
                // Klik halaman kiri paling atas -> balik ke kanan (prev)
                this.flipPrev();
            }
        },

        getLeafZIndex(index) {
            return index < this.currentTurned ? index + 1 : this.totalLeaves - index;
        },

        getLeafRotation(index) {
            const isTurned = index < this.currentTurned;
            const isCanPeek = index === this.currentTurned;
            const isPeeking = this.peekingIndex === index;

            if (isTurned) {
                return -180;
            }
            if (isCanPeek && isPeeking) {
                return -14;
            }
            return 0;
        },

        init() {
            window.addEventListener('keydown', (e) => {
                if (e.key === 'ArrowRight') this.flipNext();
                if (e.key === 'ArrowLeft') this.flipPrev();
            });
        }
    }"
    @mouseenter="isHovered = true"
    @mouseleave="isHovered = false; peekingIndex = null;"
>
    <!-- Section Header -->
    <div class="text-center max-w-2xl mx-auto px-4 mb-10 sm:mb-14">
        <h2 class="text-[26px] sm:text-[38px] md:text-[44px] font-bold text-gray-900 tracking-tight leading-tight">
            Kantor & Pabrik Mechatron
        </h2>
    </div>

    <!-- 3D Pageflip Viewport Stage -->
    <div
        class="relative w-full flex items-center justify-center transition-all duration-500 px-2"
        style="
            --page-w: 240px;
            --page-h: 350px;
            --book-radius: 12px;
            perspective: 1400px;
            min-height: calc(var(--page-h) + 70px);
        "
    >
        <style>
            @media (max-width: 640px) {
                #pageflip-section {
                    --page-w: min(135px, 39vw) !important;
                    --page-h: min(200px, 58vw) !important;
                    --book-radius: 8px !important;
                }
            }
        </style>

        <!-- 3D Book Container with Spine Shift -->
        <div
            class="relative will-change-transform"
            :style="{
                width: 'var(--page-w)',
                height: 'var(--page-h)',
                transformStyle: 'preserve-3d',
                transition: 'transform 0.65s cubic-bezier(0.4, 0, 0.2, 1)',
                transform: currentTurned === 0
                    ? 'translateX(0px)'
                    : (currentTurned === totalLeaves ? 'translateX(var(--page-w))' : 'translateX(calc(var(--page-w) / 2))')
            }"
        >
            <!-- Spine Binding Crease -->
            <div
                class="absolute top-0 bottom-0 left-[-4px] w-[8px] rounded-l-sm bg-gradient-to-r from-black/85 via-zinc-800 to-black/40 shadow-2xl z-30 pointer-events-none transition-opacity duration-500"
                :style="{ opacity: isOpen ? 0.95 : 0.6 }"
            ></div>

            <!-- Ground Ambience Shadow underneath the book -->
            <div
                class="absolute -bottom-8 left-[-15%] w-[130%] h-10 bg-black/40 rounded-full blur-xl pointer-events-none transition-all duration-500"
                :style="{
                    opacity: isOpen ? 0.75 : 0.45,
                    transform: isOpen ? 'scale(1.2)' : 'scale(0.85)'
                }"
            ></div>

            <!-- Book Leaves Loop -->
            <template x-for="(leaf, index) in pages" :key="leaf.id || index">
                <div
                    @click="handleLeafClick(index)"
                    @mouseenter="if (index === currentTurned) peekingIndex = index;"
                    @mouseleave="if (peekingIndex === index) peekingIndex = null;"
                    class="absolute inset-0 origin-left cursor-pointer will-change-transform"
                    :style="{
                        transformStyle: 'preserve-3d',
                        transition: 'transform 0.65s cubic-bezier(0.4, 0, 0.2, 1)',
                        transform: 'rotateY(' + getLeafRotation(index) + 'deg)',
                        zIndex: getLeafZIndex(index),
                        borderRadius: 'var(--book-radius)',
                    }"
                >
                    <!-- FRONT FACE (Visible when page is on the right) -->
                    <div
                        class="absolute inset-0 w-full h-full bg-zinc-950 overflow-hidden shadow-2xl"
                        style="
                            backface-visibility: hidden;
                            -webkit-backface-visibility: hidden;
                            border-radius: inherit;
                            box-shadow: 0 16px 36px rgba(0, 0, 0, 0.45);
                        "
                    >
                        <img
                            :src="leaf.frontImage"
                            :alt="leaf.frontTitle"
                            class="w-full h-full object-cover pointer-events-none select-none"
                            loading="lazy"
                        />

                        <!-- Spine crease shadow overlay for front face -->
                        <div
                            class="absolute inset-0 pointer-events-none transition-opacity duration-300"
                            style="background: linear-gradient(to right, rgba(0,0,0,0.65) 0%, rgba(0,0,0,0.14) 14%, transparent 35%);"
                            :style="{ opacity: index < currentTurned ? 0 : 1 }"
                        ></div>

                        <!-- Bottom Vignette & Metadata -->
                        <div class="absolute inset-x-0 bottom-0 p-2 sm:p-4 bg-gradient-to-t from-black/95 via-black/45 to-transparent text-white pointer-events-none">
                            <div class="flex items-center justify-between gap-1.5 mb-0.5 sm:mb-1">
                                <span
                                    x-show="leaf.frontBadge"
                                    class="px-1.5 sm:px-2 py-0.5 rounded-full text-[8px] sm:text-[9px] font-bold uppercase tracking-wider backdrop-blur-md border border-[#00F5FF]/40 text-[#00F5FF] bg-[#00F5FF]/20"
                                    x-text="leaf.frontBadge"
                                ></span>
                                <span class="text-[9px] sm:text-[11px] font-mono text-zinc-300/80" x-text="index * 2 + 1"></span>
                            </div>
                            <h4 class="text-[11px] sm:text-[13px] md:text-[14px] font-bold tracking-tight text-white drop-shadow-sm line-clamp-1" x-text="leaf.frontTitle"></h4>
                            <p class="text-[9px] sm:text-[10px] md:text-[11px] text-zinc-300/75 font-medium line-clamp-1 hidden xs:block" x-text="leaf.frontSubtitle"></p>
                        </div>
                    </div>

                    <!-- BACK FACE (Visible when page is turned to the left) -->
                    <div
                        class="absolute inset-0 w-full h-full bg-zinc-950 overflow-hidden shadow-2xl"
                        style="
                            backface-visibility: hidden;
                            -webkit-backface-visibility: hidden;
                            transform: rotateY(180deg);
                            border-radius: inherit;
                            box-shadow: 0 16px 36px rgba(0, 0, 0, 0.45);
                        "
                    >
                        <img
                            :src="leaf.backImage"
                            :alt="leaf.backTitle"
                            class="w-full h-full object-cover pointer-events-none select-none"
                            loading="lazy"
                        />

                        <!-- Spine crease shadow overlay for turned back-face -->
                        <div
                            class="absolute inset-0 pointer-events-none transition-opacity duration-300"
                            style="background: linear-gradient(to left, rgba(0,0,0,0.65) 0%, rgba(0,0,0,0.14) 14%, transparent 35%);"
                            :style="{ opacity: index < currentTurned ? 1 : 0 }"
                        ></div>

                        <!-- Bottom Vignette & Metadata -->
                        <div class="absolute inset-x-0 bottom-0 p-2 sm:p-4 bg-gradient-to-t from-black/95 via-black/45 to-transparent text-white pointer-events-none">
                            <div class="flex items-center justify-between gap-1.5 mb-0.5 sm:mb-1">
                                <span
                                    x-show="leaf.backBadge"
                                    class="px-1.5 sm:px-2 py-0.5 rounded-full text-[8px] sm:text-[9px] font-bold uppercase tracking-wider backdrop-blur-md border border-[#00F5FF]/40 text-[#00F5FF] bg-[#00F5FF]/20"
                                    x-text="leaf.backBadge"
                                ></span>
                                <span class="text-[9px] sm:text-[11px] font-mono text-zinc-300/80" x-text="index * 2 + 2"></span>
                            </div>
                            <h4 class="text-[11px] sm:text-[13px] md:text-[14px] font-bold tracking-tight text-white drop-shadow-sm line-clamp-1" x-text="leaf.backTitle"></h4>
                            <p class="text-[9px] sm:text-[10px] md:text-[11px] text-zinc-300/75 font-medium line-clamp-1 hidden xs:block" x-text="leaf.backSubtitle"></p>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>

    <!-- Book Controls & Page Progress Toolbar -->
    <div class="flex items-center justify-center gap-2 sm:gap-3 mt-6 sm:mt-8 select-none px-4">
        <!-- Prev Button -->
        <button
            type="button"
            @click="flipPrev()"
            :disabled="currentTurned === 0"
            aria-label="Previous Page"
            class="px-3 sm:px-3.5 py-1.5 rounded-xl flex items-center gap-1 sm:gap-1.5 text-xs font-semibold bg-white border border-gray-200 text-gray-800 hover:bg-gray-50 hover:scale-105 active:scale-95 disabled:opacity-35 disabled:pointer-events-none transition-all shadow-xs cursor-pointer"
        >
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M15 19l-7-7 7-7" />
            </svg>
            <span>Prev</span>
        </button>

        <!-- Reset Button -->
        <button
            type="button"
            @click="resetBook()"
            :disabled="currentTurned === 0"
            aria-label="Reset Book"
            class="px-2.5 sm:px-3 py-1.5 rounded-xl flex items-center gap-1 sm:gap-1.5 text-xs font-semibold bg-white border border-gray-200 text-gray-800 hover:bg-gray-50 hover:scale-105 active:scale-95 disabled:opacity-35 disabled:pointer-events-none transition-all shadow-xs cursor-pointer"
        >
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
            </svg>
            <span class="hidden xs:inline">Reset</span>
        </button>

        <!-- Counter Badge -->
        <div class="px-3 sm:px-3.5 py-1.5 rounded-xl bg-white border border-gray-200 text-xs font-mono text-gray-500 shadow-xs">
            <span class="font-bold text-gray-900" x-text="currentTurned"></span>
            <span class="opacity-50"> / </span>
            <span x-text="totalLeaves + ' leaves'"></span>
        </div>

        <!-- Next Button -->
        <button
            type="button"
            @click="flipNext()"
            :disabled="currentTurned === totalLeaves"
            aria-label="Next Page"
            class="px-3 sm:px-3.5 py-1.5 rounded-xl flex items-center gap-1 sm:gap-1.5 text-xs font-semibold bg-white border border-gray-200 text-gray-800 hover:bg-gray-50 hover:scale-105 active:scale-95 disabled:opacity-35 disabled:pointer-events-none transition-all shadow-xs cursor-pointer"
        >
            <span>Next</span>
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M9 5l7 7-7 7" />
            </svg>
        </button>
    </div>
</section>
