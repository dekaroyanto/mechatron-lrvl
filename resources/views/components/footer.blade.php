<footer class="bg-[#272727] text-[#EDEDED] pt-16 pb-12 border-t border-[#303233]" style="border-radius: 0px;">
    <div class="dji-container">
        <!-- Directory Links Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 pb-12 border-b border-[#3B3E40]">
            <div>
                <h5 class="text-[13px] font-semibold text-white uppercase tracking-wider mb-4">Produk Mechatron</h5>
                <ul class="space-y-2.5 p-0 m-0 list-none">
                    <li><a href="{{ route('home') }}#products" class="text-[13px] text-[#9FA3A6] hover:text-[#0070D5] transition-colors">MECHATRON AGRI H-30</a></li>
                    <li><a href="{{ route('home') }}#products" class="text-[13px] text-[#9FA3A6] hover:text-[#0070D5] transition-colors">MECHATRON AGRI H-15</a></li>
                </ul>
            </div>
            <div>
                <h5 class="text-[13px] font-semibold text-white uppercase tracking-wider mb-4">Solusi Pertanian</h5>
                <ul class="space-y-2.5 p-0 m-0 list-none">
                    <li><a href="{{ route('services.show', 'agrikultur') }}" class="text-[13px] text-[#9FA3A6] hover:text-[#0070D5] transition-colors">Penyemprotan Tanaman Presisi</a></li>
                    <li><a href="{{ route('services.show', 'agrikultur') }}" class="text-[13px] text-[#9FA3A6] hover:text-[#0070D5] transition-colors">Penyebaran Pupuk & Benih</a></li>
                    <li><a href="{{ route('services.show', 'lidar') }}" class="text-[13px] text-[#9FA3A6] hover:text-[#0070D5] transition-colors">Pemetaan Kontur & RTK Sentimeter</a></li>
                </ul>
            </div>
            <div>
                <h5 class="text-[13px] font-semibold text-white uppercase tracking-wider mb-4">Bantuan & Layanan</h5>
                <ul class="space-y-2.5 p-0 m-0 list-none">
                    <li><a href="{{ route('services.show', 'perawatandrone') }}" class="text-[13px] text-[#9FA3A6] hover:text-[#0070D5] transition-colors">Garansi Resmi Mechatron</a></li>
                    <li><a href="{{ route('services.show', 'perawatandrone') }}" class="text-[13px] text-[#9FA3A6] hover:text-[#0070D5] transition-colors">Pusat Servis & Kalibrasi Drone</a></li>
                    <li><a href="{{ route('services.show', 'pelatihanpilot') }}" class="text-[13px] text-[#9FA3A6] hover:text-[#0070D5] transition-colors">Pelatihan & Sertifikasi Pilot Drone</a></li>
                    <li><a href="{{ route('services.show', 'pelatihanpilot') }}" class="text-[13px] text-[#9FA3A6] hover:text-[#0070D5] transition-colors">Manual Operasional & Firmware</a></li>
                    <li><a href="https://wa.me/6281112143111" class="text-[13px] text-[#9FA3A6] hover:text-[#0070D5] transition-colors">Konsultasi Teknis Lapangan</a></li>
                </ul>
            </div>
            <div>
                <h5 class="text-[13px] font-semibold text-white uppercase tracking-wider mb-4">Tentang Mechatron</h5>
                <ul class="space-y-2.5 p-0 m-0 list-none">
                    <li><a href="{{ route('home') }}" class="text-[13px] text-[#9FA3A6] hover:text-[#0070D5] transition-colors">Tentang Kami</a></li>
                    <li><a href="{{ route('blog.index') }}" class="text-[13px] text-[#9FA3A6] hover:text-[#0070D5] transition-colors">Berita Drone & Agrikultur</a></li>
                    <li><a href="{{ route('home') }}" class="text-[13px] text-[#9FA3A6] hover:text-[#0070D5] transition-colors">Kemitraan & Distributor Resmi</a></li>
                    <li><a href="https://wa.me/6281112143111" class="text-[13px] text-[#9FA3A6] hover:text-[#0070D5] transition-colors">Jadwalkan Demo Unit Lapangan</a></li>
                    <li><a href="{{ route('home') }}" class="text-[13px] text-[#9FA3A6] hover:text-[#0070D5] transition-colors">Karir & Rekrutmen</a></li>
                </ul>
            </div>
        </div>

        <!-- Bottom Bar: Copyright & Region -->
        <div class="pt-8 flex flex-col md:flex-row items-start md:items-center justify-between gap-4 text-[12px] text-[#9FA3A6]">
            <div class="flex flex-wrap items-center gap-x-6 gap-y-2">
                <div class="flex items-center gap-2">
                    <div class="relative w-5 h-5 rounded overflow-hidden">
                        <img src="{{ asset('images/mechatron_logo.png') }}" alt="Mechatron" class="w-full h-full object-cover">
                    </div>
                    <span class="font-semibold text-white">MECHATRON</span>
                </div>
                <span>&copy; 2026 Mechatron. Semua Hak Dilindungi Undang-Undang.</span>
                <a href="#" class="hover:text-white transition-colors">Kebijakan Privasi</a>
                <a href="#" class="hover:text-white transition-colors">Syarat Penggunaan</a>
                <a href="#" class="hover:text-white transition-colors">Keamanan Data & Cookie</a>
                <a href="#" class="hover:text-white transition-colors">Peta Situs</a>
            </div>
        </div>
    </div>
</footer>
