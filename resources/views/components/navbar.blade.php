@php
    $navbarTheme = trim($__env->yieldContent('navbar_theme'));
    if ($navbarTheme === 'light') {
        $hasDarkHero = false;
    } elseif ($navbarTheme === 'dark') {
        $hasDarkHero = true;
    } else {
        // Default: Home, Products Index, Services, About, Contact have dark hero banners.
        // Blog, Product Detail, and other pages have clean white/light backgrounds.
        $hasDarkHero = request()->routeIs(['home', 'products.index', 'services.*', 'about', 'contact']);
    }
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
                <div class="relative w-8 h-8 sm:w-9 sm:h-9 shrink-0 transition-transform duration-200 group-hover:scale-105 shadow-sm rounded-[7px] overflow-hidden">
                    <img src="{{ asset('images/mechatron_logo.png') }}" alt="Mechatron Official Logo" class="w-full h-full object-cover">
                </div>
                <span
                    :class="isLightNav ? 'text-[#002B7F] group-hover:text-[#0070D5]' : 'text-white group-hover:text-blue-200'"
                    class="font-extrabold tracking-tight text-[17px] sm:text-[19px] transition-colors"
                >
                    MECHATRON
                </span>
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
                Home
            </a>

            <!-- 2. Product -->
            <a
                href="{{ route('products.index') }}"
                :class="isLightNav
                    ? '{{ request()->routeIs('products.*') ? 'text-[#0070D5] font-semibold bg-blue-50/90' : 'text-neutral-700 hover:text-[#0070D5] hover:bg-neutral-100/80' }}'
                    : '{{ request()->routeIs('products.*') ? 'text-white font-semibold bg-white/20' : 'text-white/90 hover:text-white hover:bg-white/10' }}'"
                class="text-[14px] font-medium px-3.5 py-1.5 rounded-full transition-all duration-200 text-decoration-none"
            >
                Product
            </a>

            <!-- 3. Service -->
            <a
                href="{{ route('services.index') }}"
                :class="isLightNav
                    ? '{{ request()->routeIs('services.*') ? 'text-[#0070D5] font-semibold bg-blue-50/90' : 'text-neutral-700 hover:text-[#0070D5] hover:bg-neutral-100/80' }}'
                    : '{{ request()->routeIs('services.*') ? 'text-white font-semibold bg-white/20' : 'text-white/90 hover:text-white hover:bg-white/10' }}'"
                class="text-[14px] px-3.5 py-1.5 rounded-full transition-all duration-200 text-decoration-none"
            >
                Service
            </a>

            <!-- 4. Blog -->
            <a
                href="{{ route('blog.index') }}"
                :class="isLightNav
                    ? '{{ request()->routeIs('blog.*') ? 'text-[#0070D5] font-semibold bg-blue-50/90' : 'text-neutral-700 hover:text-[#0070D5] hover:bg-neutral-100/80' }}'
                    : '{{ request()->routeIs('blog.*') ? 'text-white font-semibold bg-white/20' : 'text-white/90 hover:text-white hover:bg-white/10' }}'"
                class="text-[14px] px-3.5 py-1.5 rounded-full transition-all duration-200 text-decoration-none"
            >
                Blog
            </a>

            <!-- 5. About Us -->
            <a
                href="{{ route('about') }}"
                :class="isLightNav
                    ? '{{ request()->routeIs('about') ? 'text-[#0070D5] font-semibold bg-blue-50/90' : 'text-neutral-700 hover:text-[#0070D5] hover:bg-neutral-100/80' }}'
                    : '{{ request()->routeIs('about') ? 'text-white font-semibold bg-white/20' : 'text-white/90 hover:text-white hover:bg-white/10' }}'"
                class="text-[14px] px-3.5 py-1.5 rounded-full transition-all duration-200 text-decoration-none"
            >
                About Us
            </a>

            <!-- 6. Contact Us -->
            <a
                href="{{ route('contact') }}"
                :class="isLightNav
                    ? '{{ request()->routeIs('contact') ? 'text-[#0070D5] font-semibold bg-blue-50/90' : 'text-neutral-700 hover:text-[#0070D5] hover:bg-neutral-100/80' }}'
                    : '{{ request()->routeIs('contact') ? 'text-white font-semibold bg-white/20' : 'text-white/90 hover:text-white hover:bg-white/10' }}'"
                class="text-[14px] px-3.5 py-1.5 rounded-full transition-all duration-200 text-decoration-none"
            >
                Contact Us
            </a>
        </nav>

        <!-- Right: Direct WhatsApp CTA & Mobile Hamburger -->
        <div class="flex items-center space-x-3">
            <!-- Direct WhatsApp Button (Desktop) -->
            <a
                href="https://wa.me/6281112143111?text=Halo%20Mechatron,%20saya%20tertarik%20untuk%20konsultasi%20layanan%20drone."
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
                Home
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
                Product
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
                Service
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
                Blog
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
                About Us
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
                Contact Us
            </a>
        </div>

        <div class="pt-3 border-t" :class="isLightNav ? 'border-gray-100' : 'border-white/10'">
            <a
                href="https://wa.me/6281112143111?text=Halo%20Mechatron,%20saya%20tertarik%20untuk%20konsultasi%20layanan%20drone."
                target="_blank"
                rel="noopener noreferrer"
                class="w-full bg-[#0070D5] text-white text-center py-3 rounded-xl text-[14px] font-semibold shadow-md flex items-center justify-center gap-2 text-decoration-none"
            >
                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                <span>Hubungi via WhatsApp</span>
            </a>
        </div>
    </div>
</header>
