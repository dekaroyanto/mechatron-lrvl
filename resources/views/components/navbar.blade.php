@php
    $navbarTheme = trim($__env->yieldContent('navbar_theme'));
    if ($navbarTheme === 'light') {
        $hasDarkHero = false;
    } elseif ($navbarTheme === 'dark') {
        $hasDarkHero = true;
    } else {
        // Default: Home, Services Detail have dark hero banners.
        // Blog, Product, Services Index, About Us, Contact Us have clean white/light backgrounds.
        $hasDarkHero = request()->routeIs(['home', 'products.index', 'services.*', 'about', 'contact']);
    }
    $currentLocale = app()->getLocale();
@endphp

<header
    x-data="{
        scrolled: false,
        mobileMenuOpen: false,
        hasDarkHero: {{ $hasDarkHero ? 'true' : 'false' }},
        get isLightNav() {
            return !this.hasDarkHero || this.scrolled;
        },
        init() {
            this.scrolled = window.scrollY > 20;
            window.addEventListener('scroll', () => {
                this.scrolled = window.scrollY > 20;
            }, { passive: true });
        }
    }"
    :class="isLightNav
        ? 'bg-white/95 backdrop-blur-md border-b border-[#E5E7EB] shadow-[0_2px_8px_rgba(0,0,0,0.06)] py-3 text-[#111827]'
        : 'bg-gradient-to-b from-black/75 via-black/40 to-transparent py-4 text-white'"
    class="fixed top-0 left-0 right-0 z-50 transition-all duration-300"
>
    <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
        <!-- Left: Official Mechatron Brand Logo -->
        <div class="flex items-center">
            <a href="{{ route('home') }}" class="flex items-center gap-2.5 group focus:outline-none select-none text-decoration-none" aria-label="Mechatron Official">
                <div class="relative h-8 sm:h-9 w-auto shrink-0 transition-transform duration-200 group-hover:scale-105">
                    <img :src="isLightNav ? '{{ asset('images/logo_light.png') }}' : '{{ asset('images/logo_dark.png') }}'" alt="Mechatron Official Logo" class="h-full w-auto object-contain">
                </div>
            </a>
        </div>

        <!-- Center: Desktop Navigation Links (Only 6 Items) -->
        <nav class="hidden md:flex items-center space-x-1 lg:space-x-2" aria-label="Main Navigation">
            <!-- 1. Home -->
            <a
                href="{{ route('home') }}"
                :class="isLightNav
                    ? '{{ request()->routeIs('home') && !request()->is('*#*') ? 'text-[#0070D5] font-semibold bg-blue-50/90' : 'text-neutral-700 hover:text-[#0070D5] hover:bg-neutral-100/80' }}'
                    : '{{ request()->routeIs('home') && !request()->is('*#*') ? 'text-white font-semibold bg-white/20' : 'text-white/90 hover:text-white hover:bg-white/10' }}'"
                class="text-[14px] px-3.5 py-1.5 rounded-full transition-all duration-200 text-decoration-none"
            >
                {{ __('Beranda') }}
            </a>

            <!-- 2. Product -->
            <a
                href="{{ route('products.index') }}"
                :class="isLightNav
                    ? '{{ request()->routeIs('products.*') ? 'text-[#0070D5] font-semibold bg-blue-50/90' : 'text-neutral-700 hover:text-[#0070D5] hover:bg-neutral-100/80' }}'
                    : '{{ request()->routeIs('products.*') ? 'text-white font-semibold bg-white/20' : 'text-white/90 hover:text-white hover:bg-white/10' }}'"
                class="text-[14px] font-medium px-3.5 py-1.5 rounded-full transition-all duration-200 text-decoration-none"
            >
                {{ __('Produk') }}
            </a>

            <!-- 3. Service -->
            <a
                href="{{ route('services.index') }}"
                :class="isLightNav
                    ? '{{ request()->routeIs('services.*') ? 'text-[#0070D5] font-semibold bg-blue-50/90' : 'text-neutral-700 hover:text-[#0070D5] hover:bg-neutral-100/80' }}'
                    : '{{ request()->routeIs('services.*') ? 'text-white font-semibold bg-white/20' : 'text-white/90 hover:text-white hover:bg-white/10' }}'"
                class="text-[14px] px-3.5 py-1.5 rounded-full transition-all duration-200 text-decoration-none"
            >
                {{ __('Layanan') }}
            </a>

            <!-- 4. Blog -->
            <a
                href="{{ route('blog.index') }}"
                :class="isLightNav
                    ? '{{ request()->routeIs('blog.*') ? 'text-[#0070D5] font-semibold bg-blue-50/90' : 'text-neutral-700 hover:text-[#0070D5] hover:bg-neutral-100/80' }}'
                    : '{{ request()->routeIs('blog.*') ? 'text-white font-semibold bg-white/20' : 'text-white/90 hover:text-white hover:bg-white/10' }}'"
                class="text-[14px] px-3.5 py-1.5 rounded-full transition-all duration-200 text-decoration-none"
            >
                {{ __('Blog') }}
            </a>

            <!-- 5. About Us -->
            <a
                href="{{ route('about') }}"
                :class="isLightNav
                    ? '{{ request()->routeIs('about') ? 'text-[#0070D5] font-semibold bg-blue-50/90' : 'text-neutral-700 hover:text-[#0070D5] hover:bg-neutral-100/80' }}'
                    : '{{ request()->routeIs('about') ? 'text-white font-semibold bg-white/20' : 'text-white/90 hover:text-white hover:bg-white/10' }}'"
                class="text-[14px] px-3.5 py-1.5 rounded-full transition-all duration-200 text-decoration-none"
            >
                {{ __('Tentang Kami') }}
            </a>

            <!-- 6. Contact Us -->
            <a
                href="{{ route('contact') }}"
                :class="isLightNav
                    ? '{{ request()->routeIs('contact') ? 'text-[#0070D5] font-semibold bg-blue-50/90' : 'text-neutral-700 hover:text-[#0070D5] hover:bg-neutral-100/80' }}'
                    : '{{ request()->routeIs('contact') ? 'text-white font-semibold bg-white/20' : 'text-white/90 hover:text-white hover:bg-white/10' }}'"
                class="text-[14px] px-3.5 py-1.5 rounded-full transition-all duration-200 text-decoration-none"
            >
                {{ __('Hubungi Kami') }}
            </a>
        </nav>

        <!-- Right: Language Switcher Dropdown, Direct WhatsApp CTA & Mobile Hamburger -->
        <div class="flex items-center gap-2.5 sm:gap-3">
            <!-- Language Switcher Dropdown (Flag Pill + Dropdown Menu) -->
            <div
                x-data="{ langOpen: false }"
                @click.outside="langOpen = false"
                @keydown.escape.window="langOpen = false"
                class="relative"
            >
                <!-- Pill Trigger Button -->
                <button
                    type="button"
                    @click="langOpen = !langOpen"
                    :aria-expanded="langOpen"
                    aria-haspopup="true"
                    aria-label="{{ __('Pilih Bahasa') }}"
                    :class="isLightNav
                        ? 'bg-white border-slate-200/90 shadow-[0_3px_12px_rgba(15,23,42,0.08)] hover:shadow-[0_4px_16px_rgba(15,23,42,0.12)] text-[#2D334A]'
                        : 'bg-white/95 border-white/40 shadow-[0_4px_14px_rgba(0,0,0,0.22)] hover:bg-white text-[#2D334A]'"
                    class="inline-flex items-center gap-2.5 px-3.5 py-2 rounded-full border transition-all duration-200 cursor-pointer focus:outline-none"
                >
                    @if ($currentLocale === 'en')
                        <!-- UK Flag SVG -->
                        <svg class="w-6 h-4 rounded-[2px] shadow-[0_0_0_1px_rgba(0,0,0,0.08)] shrink-0" viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg">
                            <rect width="60" height="40" fill="#012169"/>
                            <path d="M0,0 L60,40 M60,0 L0,40" stroke="#FFFFFF" stroke-width="7"/>
                            <path d="M0,0 L60,40 M60,0 L0,40" stroke="#C8102E" stroke-width="4"/>
                            <path d="M30,0 V40 M0,20 H60" stroke="#FFFFFF" stroke-width="11"/>
                            <path d="M30,0 V40 M0,20 H60" stroke="#C8102E" stroke-width="6.5"/>
                        </svg>
                    @else
                        <!-- Indonesia Flag SVG -->
                        <svg class="w-6 h-4 rounded-[2px] shadow-[0_0_0_1px_rgba(0,0,0,0.1)] shrink-0" viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg">
                            <rect width="60" height="20" fill="#E70011"/>
                            <rect y="20" width="60" height="20" fill="#FFFFFF"/>
                        </svg>
                    @endif

                    <!-- Solid Caret Triangle Icon -->
                    <svg
                        :class="langOpen ? 'rotate-180' : ''"
                        class="w-2.5 h-2.5 text-[#3B3878] transition-transform duration-200 shrink-0"
                        viewBox="0 0 12 8"
                        fill="currentColor"
                    >
                        <path d="M6 7.2L0.6 1.4C0.2 0.95 0.52 0.25 1.12 0.25H10.88C11.48 0.25 11.8 0.95 11.4 1.4L6 7.2Z"/>
                    </svg>
                </button>

                <!-- Dropdown Menu Card -->
                <div
                    x-show="langOpen"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 translate-y-1.5 scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                    x-transition:leave-end="opacity-0 translate-y-1.5 scale-95"
                    class="absolute right-0 mt-2.5 w-48 rounded-xl bg-white border border-slate-200/80 shadow-[0_12px_32px_rgba(15,23,42,0.14)] py-2 z-50"
                    role="menu"
                    style="display: none;"
                >
                    <!-- Option 1: INDONESIA -->
                    <a
                        href="{{ route('locale.switch', 'id') }}"
                        role="menuitem"
                        class="flex items-center justify-between px-4 py-2.5 hover:bg-slate-50 transition-colors text-decoration-none group"
                    >
                        <div class="flex items-center gap-3">
                            <svg class="w-6 h-4 rounded-[2px] shadow-[0_0_0_1px_rgba(0,0,0,0.1)] shrink-0" viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg">
                                <rect width="60" height="20" fill="#E70011"/>
                                <rect y="20" width="60" height="20" fill="#FFFFFF"/>
                            </svg>
                            <span class="text-[13px] font-bold tracking-wide uppercase text-[#2D334A] group-hover:text-[#0070D5] transition-colors">
                                INDONESIA
                            </span>
                        </div>
                        @if ($currentLocale === 'id')
                            <svg class="w-4 h-4 text-[#42855B] shrink-0" fill="none" stroke="currentColor" stroke-width="2.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                            </svg>
                        @endif
                    </a>

                    <!-- Option 2: ENGLISH -->
                    <a
                        href="{{ route('locale.switch', 'en') }}"
                        role="menuitem"
                        class="flex items-center justify-between px-4 py-2.5 hover:bg-slate-50 transition-colors text-decoration-none group"
                    >
                        <div class="flex items-center gap-3">
                            <svg class="w-6 h-4 rounded-[2px] shadow-[0_0_0_1px_rgba(0,0,0,0.08)] shrink-0" viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg">
                                <rect width="60" height="40" fill="#012169"/>
                                <path d="M0,0 L60,40 M60,0 L0,40" stroke="#FFFFFF" stroke-width="7"/>
                                <path d="M0,0 L60,40 M60,0 L0,40" stroke="#C8102E" stroke-width="4"/>
                                <path d="M30,0 V40 M0,20 H60" stroke="#FFFFFF" stroke-width="11"/>
                                <path d="M30,0 V40 M0,20 H60" stroke="#C8102E" stroke-width="6.5"/>
                            </svg>
                            <span class="text-[13px] font-bold tracking-wide uppercase text-[#2D334A] group-hover:text-[#0070D5] transition-colors">
                                ENGLISH
                            </span>
                        </div>
                        @if ($currentLocale === 'en')
                            <svg class="w-4 h-4 text-[#42855B] shrink-0" fill="none" stroke="currentColor" stroke-width="2.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                            </svg>
                        @endif
                    </a>
                </div>
            </div>

            <!-- Direct WhatsApp Button (Desktop) -->
            <a
                href="https://wa.me/6281112143111?text={{ urlencode(__('Halo Mechatron, saya tertarik untuk konsultasi layanan drone.')) }}"
                target="_blank"
                rel="noopener noreferrer"
                class="hidden sm:inline-flex items-center gap-1.5 bg-[#0070D5] hover:bg-[#005bb5] text-white text-[13px] font-semibold px-4 py-2 rounded-full shadow-sm hover:shadow transition-all text-decoration-none"
            >
                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                <span>WhatsApp</span>
            </a>

            <!-- Mobile Hamburger Button -->
            <button
                type="button"
                @click="mobileMenuOpen = !mobileMenuOpen"
                :class="isLightNav ? 'text-[#111] hover:text-[#0070D5]' : 'text-white hover:text-[#0070D5]'"
                class="md:hidden p-1.5 transition-colors focus:outline-none"
                aria-label="Toggle Menu"
            >
                <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg x-show="mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display: none;">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Drawer (Only 6 Items) -->
    <div
        x-show="mobileMenuOpen"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        :class="isLightNav ? 'bg-white border-gray-200 text-gray-900 shadow-xl' : 'bg-[#0F151F]/98 border-white/10 text-white shadow-2xl'"
        class="md:hidden border-t px-6 py-5 space-y-3 max-h-[85vh] overflow-y-auto"
        style="display: none;"
    >
        <div class="space-y-1">
            <!-- 1. Home -->
            <a
                href="{{ route('home') }}"
                @click="mobileMenuOpen = false"
                :class="isLightNav
                    ? '{{ request()->routeIs('home') && !request()->is('*#*') ? 'text-[#0070D5] font-semibold bg-blue-50' : 'text-gray-800 hover:text-[#0070D5]' }}'
                    : '{{ request()->routeIs('home') && !request()->is('*#*') ? 'text-white font-semibold bg-white/15' : 'text-white/90 hover:text-white' }}'"
                class="block text-[15px] py-2 px-3 rounded-lg transition-colors text-decoration-none"
            >
                {{ __('Beranda') }}
            </a>

            <!-- 2. Product -->
            <a
                href="{{ route('products.index') }}"
                @click="mobileMenuOpen = false"
                :class="isLightNav
                    ? '{{ request()->routeIs('products.*') ? 'text-[#0070D5] font-semibold bg-blue-50' : 'text-gray-800 hover:text-[#0070D5]' }}'
                    : '{{ request()->routeIs('products.*') ? 'text-white font-semibold bg-white/15' : 'text-white/90 hover:text-white' }}'"
                class="block text-[15px] font-medium py-2 px-3 rounded-lg transition-colors text-decoration-none"
            >
                {{ __('Produk') }}
            </a>

            <!-- 3. Service -->
            <a
                href="{{ route('services.index') }}"
                @click="mobileMenuOpen = false"
                :class="isLightNav
                    ? '{{ request()->routeIs('services.*') ? 'text-[#0070D5] font-semibold bg-blue-50' : 'text-gray-800 hover:text-[#0070D5]' }}'
                    : '{{ request()->routeIs('services.*') ? 'text-white font-semibold bg-white/15' : 'text-white/90 hover:text-white' }}'"
                class="block text-[15px] py-2 px-3 rounded-lg transition-colors text-decoration-none"
            >
                {{ __('Layanan') }}
            </a>

            <!-- 4. Blog -->
            <a
                href="{{ route('blog.index') }}"
                @click="mobileMenuOpen = false"
                :class="isLightNav
                    ? '{{ request()->routeIs('blog.*') ? 'text-[#0070D5] font-semibold bg-blue-50' : 'text-gray-800 hover:text-[#0070D5]' }}'
                    : '{{ request()->routeIs('blog.*') ? 'text-white font-semibold bg-white/15' : 'text-white/90 hover:text-white' }}'"
                class="block text-[15px] py-2 px-3 rounded-lg transition-colors text-decoration-none"
            >
                {{ __('Blog') }}
            </a>

            <!-- 5. About Us -->
            <a
                href="{{ route('about') }}"
                @click="mobileMenuOpen = false"
                :class="isLightNav
                    ? '{{ request()->routeIs('about') ? 'text-[#0070D5] font-semibold bg-blue-50' : 'text-gray-800 hover:text-[#0070D5]' }}'
                    : '{{ request()->routeIs('about') ? 'text-white font-semibold bg-white/15' : 'text-white/90 hover:text-white' }}'"
                class="block text-[15px] py-2 px-3 rounded-lg transition-colors text-decoration-none"
            >
                {{ __('Tentang Kami') }}
            </a>

            <!-- 6. Contact Us -->
            <a
                href="{{ route('contact') }}"
                @click="mobileMenuOpen = false"
                :class="isLightNav
                    ? '{{ request()->routeIs('contact') ? 'text-[#0070D5] font-semibold bg-blue-50' : 'text-gray-800 hover:text-[#0070D5]' }}'
                    : '{{ request()->routeIs('contact') ? 'text-white font-semibold bg-white/15' : 'text-white/90 hover:text-white' }}'"
                class="block text-[15px] py-2 px-3 rounded-lg transition-colors text-decoration-none"
            >
                {{ __('Hubungi Kami') }}
            </a>
        </div>

        <div class="pt-3 border-t space-y-3" :class="isLightNav ? 'border-gray-100' : 'border-white/10'">
            <a
                href="https://wa.me/6281112143111?text={{ urlencode(__('Halo Mechatron, saya tertarik untuk konsultasi layanan drone.')) }}"
                target="_blank"
                rel="noopener noreferrer"
                class="w-full bg-[#0070D5] text-white text-center py-3 rounded-xl text-[14px] font-semibold shadow-md flex items-center justify-center gap-2 text-decoration-none"
            >
                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                <span>{{ __('Hubungi via WhatsApp') }}</span>
            </a>
        </div>
    </div>
</header>
