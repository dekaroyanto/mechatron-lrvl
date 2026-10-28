@props(['services' => []])

@php
    $servicesList = !empty($services) ? $services : \App\Data\ServicesData::all();

    $cards = [
        [
            'slug' => 'pelatihanpilot',
            'title' => $servicesList['pelatihanpilot']['title'] ?? 'Pelatihan Pilot Drone',
            'subtitle' => 'Program sertifikasi resmi DKUPPU & FASI dari pemahaman regulasi hingga manuver lapangan.',
            'image' => asset('images/service_pelatihan_pilot.jpg'),
        ],
        [
            'slug' => 'perawatandrone',
            'title' => $servicesList['perawatandrone']['title'] ?? 'Perawatan Drone',
            'subtitle' => 'Servis berkala, kalibrasi presisi sensor, dan perbaikan menyeluruh berstandar pabrikan.',
            'image' => asset('images/service_perawatan_drone.jpg'),
        ],
        [
            'slug' => 'sewadrone',
            'title' => $servicesList['sewadrone']['title'] ?? 'Sewa Drone',
            'subtitle' => 'Rental armada drone industri & agrikultur terlengkap dengan dukungan unit prima.',
            'image' => asset('images/service_sewa_drone.jpg'),
        ],
    ];
@endphp

<section id="services" class="relative w-full bg-[#FFFFFF] py-14 sm:py-18 md:py-24">
    <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-14">
            <h2 class="text-[28px] sm:text-[36px] md:text-[42px] font-bold text-slate-950 tracking-tight leading-tight mb-3">
                Layanan Drone Mechatron
            </h2>
        </div>

        <!-- 3-Column DJI Showcase Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-6 lg:gap-8">
            @foreach($cards as $card)
                <a
                    href="{{ route('services.show', $card['slug']) }}"
                    class="group relative block w-full rounded-[22px] sm:rounded-[26px] overflow-hidden bg-slate-900 shadow-sm hover:shadow-2xl transition-all duration-300 h-[480px] sm:h-[540px] md:h-[580px] lg:h-[620px] text-decoration-none"
                >
                    <!-- Background Image -->
                    <img
                        src="{{ $card['image'] }}"
                        alt="{{ $card['title'] }}"
                        class="absolute inset-0 w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 ease-out"
                    />

                    <!-- Dark Gradient Overlay for Text Contrast -->
                    <div class="absolute inset-0 bg-gradient-to-b from-slate-950/80 via-slate-950/30 to-transparent pointer-events-none"></div>

                    <!-- Top Centered Content: Title, Subtitle, Link -->
                    <div class="relative z-10 pt-9 sm:pt-12 md:pt-14 px-6 sm:px-8 text-center flex flex-col items-center">
                        <h3 class="text-[22px] sm:text-[26px] lg:text-[28px] font-bold text-white tracking-tight leading-snug mb-2 sm:mb-2.5 drop-shadow-[0_2px_4px_rgba(0,0,0,0.6)]">
                            {{ $card['title'] }}
                        </h3>

                        <p class="text-[13px] sm:text-[14px] text-white/90 font-normal leading-relaxed max-w-[280px] sm:max-w-[310px] mb-4 sm:mb-5 drop-shadow-[0_1px_3px_rgba(0,0,0,0.6)]">
                            {{ $card['subtitle'] }}
                        </p>

                        <div class="inline-flex items-center gap-1.5 text-white text-[13px] sm:text-[14px] font-semibold group-hover:text-blue-300 transition-all duration-200">
                            <span>Pelajari Lebih Lanjut</span>
                            <span class="text-[16px] leading-none transition-transform duration-300 group-hover:translate-x-1">›</span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>

