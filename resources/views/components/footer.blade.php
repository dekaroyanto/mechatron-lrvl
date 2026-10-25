<footer id="contact" class="bg-[#181A1B] text-[#9FA3A6] pt-14 pb-10 border-t border-neutral-800">
    <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Main Footer Content: 3 Clean Columns -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-10 lg:gap-14 pb-12 border-b border-neutral-800">
            <!-- Col 1: Brand & Identity (5 cols on md) -->
            <div class="md:col-span-5 space-y-4">
                <a href="{{ route('home') }}" class="inline-flex items-center gap-2.5 group select-none text-decoration-none">
                    <div class="w-8 h-8 rounded-lg overflow-hidden shadow-sm shrink-0">
                        <img src="{{ asset('images/mechatron_logo.png') }}" alt="Mechatron Logo" class="w-full h-full object-cover">
                    </div>
                    <span class="font-extrabold text-[18px] text-white tracking-tight group-hover:text-[#0070D5] transition-colors">
                        MECHATRON
                    </span>
                </a>
                <p class="text-[13px] sm:text-[14px] text-neutral-400 leading-relaxed max-w-sm">
                    Pelopor solusi teknologi drone pertanian cerdas, pemetaan LiDAR presisi tinggi, dan otomasi aerial tangguh untuk modernisasi agribisnis Indonesia.
                </p>
                <div class="pt-1 flex items-center gap-2">
                    <span class="inline-flex items-center gap-1.5 text-[11px] font-semibold text-emerald-400 bg-emerald-500/10 px-3 py-1 rounded-full border border-emerald-500/20">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                        Layanan Siap di Seluruh Indonesia
                    </span>
                </div>
            </div>

            <!-- Col 2: Quick Navigation (3 cols on md) -->
            <div class="md:col-span-3">
                <h4 class="text-[12px] font-bold text-white uppercase tracking-wider mb-4">
                    Menu
                </h4>
                <ul class="space-y-2.5 p-0 m-0 list-none text-[13px]">
                    <li>
                        <a href="{{ route('home') }}" class="text-neutral-400 hover:text-white hover:translate-x-0.5 inline-block transition-all duration-200">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('products.index') }}" class="text-neutral-400 hover:text-white hover:translate-x-0.5 inline-block transition-all duration-200">
                            Product
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services.index') }}" class="text-neutral-400 hover:text-white hover:translate-x-0.5 inline-block transition-all duration-200">
                            Service
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('blog.index') }}" class="text-neutral-400 hover:text-white hover:translate-x-0.5 inline-block transition-all duration-200">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="text-neutral-400 hover:text-white hover:translate-x-0.5 inline-block transition-all duration-200">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="text-neutral-400 hover:text-white hover:translate-x-0.5 inline-block transition-all duration-200">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Col 3: Contact & Channels (4 cols on md) -->
            <div class="md:col-span-4 space-y-4">
                <h4 class="text-[12px] font-bold text-white uppercase tracking-wider mb-4">
                    Hubungi Kami
                </h4>
                <div class="space-y-2.5 text-[13px] text-neutral-400">
                    <div class="flex items-start gap-2.5">
                        <svg class="w-4 h-4 text-[#0070D5] mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span>Jakarta, Indonesia</span>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <svg class="w-4 h-4 text-[#0070D5] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        <a href="mailto:info@mechatron.co.id" class="hover:text-white transition-colors">info@mechatron.co.id</a>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <svg class="w-4 h-4 text-emerald-400 shrink-0" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                        <a href="https://wa.me/6281112143111" target="_blank" rel="noopener noreferrer" class="hover:text-emerald-400 transition-colors">+62 811-1214-3111</a>
                    </div>
                </div>

                <div class="pt-2">
                    <a
                        href="https://wa.me/6281112143111?text=Halo%20Mechatron,%20saya%20tertarik%20untuk%20konsultasi%20layanan%20drone."
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex items-center gap-2 bg-[#0070D5] hover:bg-[#005bb5] text-white text-[13px] font-semibold px-4 py-2.5 rounded-full shadow-md transition-all hover:scale-105"
                    >
                        <span>Chat via WhatsApp</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Bottom Bar: Minimalist & Clean -->
        <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-[12px] text-neutral-500">
            <div>
                &copy; {{ date('Y') }} Mechatron Indonesia. All rights reserved.
            </div>
            <div class="text-neutral-500 font-normal">
                Pioneering Precision Aerial Technology in Indonesia
            </div>
        </div>
    </div>
</footer>
