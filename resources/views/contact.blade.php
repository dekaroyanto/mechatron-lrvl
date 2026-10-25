@extends('layouts.app')

@section('title', 'Contact Us | Mechatron - Hubungi Tim Kami')
@section('meta_description', 'Hubungi tim Mechatron Indonesia untuk konsultasi pengadaan drone pertanian, penjadwalan demo unit, pelatihan pilot berlisensi, atau dukungan purna jual.')

@section('content')
<div class="bg-[#F8FAFC] min-h-screen">
    <!-- 1. Hero Section -->
    <section class="relative w-full bg-neutral-950 py-24 sm:py-32 overflow-hidden text-white">
        <!-- Background Ambient Image with Overlay -->
        <div class="absolute inset-0 z-0 opacity-25">
            <img
                src="{{ asset('images/agrikultur-drone-spraying.jpg') }}"
                alt="Mechatron Drone Contact"
                class="w-full h-full object-cover object-center filter grayscale"
            />
            <div class="absolute inset-0 bg-gradient-to-b from-neutral-950/80 via-neutral-950/90 to-neutral-950"></div>
        </div>

        <div class="relative z-10 max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8 text-center pt-8">
            <span class="inline-block text-[12px] sm:text-[13px] font-bold uppercase tracking-widest text-[#0070D5] bg-[#0070D5]/10 px-4 py-1.5 rounded-full mb-4 border border-[#0070D5]/20">
                Contact & Support
            </span>
            <h1 class="text-[36px] sm:text-[52px] md:text-[64px] font-extrabold tracking-tight leading-tight max-w-4xl mx-auto">
                Terhubung dengan Tim Spesialis Mechatron
            </h1>
            <p class="text-[16px] sm:text-[19px] md:text-[21px] text-gray-300 font-light mt-5 max-w-3xl mx-auto leading-relaxed">
                Apakah Anda ingin menjadwalkan demo terbang di perkebunan Anda, memesan armada baru, atau membutuhkan layanan purna jual? Kami siap membantu.
            </p>
        </div>
    </section>

    <!-- 2. Fast Contact Cards -->
    <section class="relative -mt-10 z-20 max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Card 1: WhatsApp Hotline -->
            <a
                href="https://wa.me/6281112143111?text=Halo%20Mechatron,%20saya%20ingin%20konsultasi%20mengenai%20produk%20dan%20layanan%20drone."
                target="_blank"
                rel="noopener noreferrer"
                class="bg-white rounded-2xl shadow-xl border border-gray-100 p-8 flex flex-col justify-between hover:border-emerald-300 hover:shadow-2xl transition-all duration-300 group text-decoration-none"
            >
                <div>
                    <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-2xl mb-5 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                    </div>
                    <span class="text-[12px] font-bold text-emerald-600 uppercase tracking-wider flex items-center gap-1.5 mb-1">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-ping"></span>
                        Respon Cepat (Online)
                    </span>
                    <h3 class="text-[20px] font-bold text-gray-900 mb-2">WhatsApp Resmi</h3>
                    <p class="text-[14px] text-gray-500 mb-4">Chat langsung dengan tim sales & teknisi untuk jadwal demo atau tanya spesifikasi unit.</p>
                </div>
                <div class="pt-4 border-t border-gray-100 flex items-center justify-between text-[#0070D5] font-semibold text-[14px]">
                    <span>+62 811-1214-3111</span>
                    <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </div>
            </a>

            <!-- Card 2: Email Resmi -->
            <a
                href="mailto:info@mechatron.co.id"
                class="bg-white rounded-2xl shadow-xl border border-gray-100 p-8 flex flex-col justify-between hover:border-blue-300 hover:shadow-2xl transition-all duration-300 group text-decoration-none"
            >
                <div>
                    <div class="w-12 h-12 rounded-xl bg-blue-50 text-[#0070D5] flex items-center justify-center text-2xl mb-5 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 fill-none stroke-current" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    </div>
                    <span class="text-[12px] font-bold text-[#0070D5] uppercase tracking-wider mb-1 block">
                        Proposal & Kerjasama
                    </span>
                    <h3 class="text-[20px] font-bold text-gray-900 mb-2">Email Perusahaan</h3>
                    <p class="text-[14px] text-gray-500 mb-4">Kirimkan penawaran tender, kebutuhan pengadaan institusi, atau kemitraan distributor resmi.</p>
                </div>
                <div class="pt-4 border-t border-gray-100 flex items-center justify-between text-[#0070D5] font-semibold text-[14px]">
                    <span>info@mechatron.co.id</span>
                    <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </div>
            </a>

            <!-- Card 3: Kantor Pusat & Workshop -->
            <div class="bg-white rounded-2xl shadow-xl border border-gray-100 p-8 flex flex-col justify-between hover:border-gray-300 hover:shadow-2xl transition-all duration-300 group">
                <div>
                    <div class="w-12 h-12 rounded-xl bg-gray-100 text-gray-800 flex items-center justify-center text-2xl mb-5 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 fill-none stroke-current" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </div>
                    <span class="text-[12px] font-bold text-gray-600 uppercase tracking-wider mb-1 block">
                        Pusat Servis & Kalibrasi
                    </span>
                    <h3 class="text-[20px] font-bold text-gray-900 mb-2">Kantor & Workshop</h3>
                    <p class="text-[14px] text-gray-500 mb-4">Jakarta, Indonesia.<br>Melayani pengiriman unit & suku cadang ke seluruh nusantara.</p>
                </div>
                <div class="pt-4 border-t border-gray-100 flex items-center justify-between text-gray-700 font-semibold text-[14px]">
                    <span>Senin – Sabtu (08.00 – 18.00 WIB)</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Inquiry Form Section -->
    <section class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-28">
        <div class="max-w-3xl mx-auto bg-white rounded-3xl shadow-xl border border-gray-100 p-8 sm:p-12"
            x-data="{
                nama: '',
                email: '',
                telepon: '',
                kebutuhan: 'Pembelian Drone Mechatron (H-30 / H-15)',
                pesan: '',
                submitted: false,
                kirimPesan() {
                    if (!this.nama || !this.telepon) {
                        alert('Mohon lengkapi nama dan nomor telepon / WhatsApp Anda.');
                        return;
                    }
                    const text = `Halo Mechatron Indonesia,%0A%0ASaya ingin konsultasi:%0A- Nama: ${encodeURIComponent(this.nama)}%0A- Email: ${encodeURIComponent(this.email || '-')}%0A- WhatsApp/Telp: ${encodeURIComponent(this.telepon)}%0A- Kebutuhan: ${encodeURIComponent(this.kebutuhan)}%0A- Catatan: ${encodeURIComponent(this.pesan || '-')}`;
                    window.open(`https://wa.me/6281112143111?text=${text}`, '_blank');
                    this.submitted = true;
                }
            }"
        >
            <div class="text-center mb-8">
                <span class="text-[13px] font-bold text-[#0070D5] uppercase tracking-wider">Formulir Konsultasi</span>
                <h2 class="text-[28px] sm:text-[36px] font-bold text-gray-900 tracking-tight mt-1">Kirimkan Pertanyaan Anda</h2>
                <p class="text-[14px] sm:text-[15px] text-gray-500 mt-2">
                    Isi detail singkat di bawah ini dan pesan akan langsung diteruskan ke tim konsultan Mechatron.
                </p>
            </div>

            <div x-show="submitted" x-cloak class="mb-6 p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-[14px] text-center">
                Terima kasih! Pesan Anda telah disiapkan untuk WhatsApp kami. Tim kami akan segera menanggapi.
            </div>

            <form @submit.prevent="kirimPesan" class="space-y-5">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-[13px] font-semibold text-gray-700 mb-1.5">Nama Lengkap *</label>
                        <input
                            type="text"
                            x-model="nama"
                            required
                            placeholder="Contoh: Budi Santoso"
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:border-[#0070D5] focus:ring-2 focus:ring-[#0070D5]/20 text-[14px] transition-all"
                        >
                    </div>
                    <div>
                        <label class="block text-[13px] font-semibold text-gray-700 mb-1.5">Nomor WhatsApp / HP *</label>
                        <input
                            type="tel"
                            x-model="telepon"
                            required
                            placeholder="Contoh: 081234567890"
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:border-[#0070D5] focus:ring-2 focus:ring-[#0070D5]/20 text-[14px] transition-all"
                        >
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-[13px] font-semibold text-gray-700 mb-1.5">Alamat Email</label>
                        <input
                            type="email"
                            x-model="email"
                            placeholder="Contoh: nama@perusahaan.com"
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:border-[#0070D5] focus:ring-2 focus:ring-[#0070D5]/20 text-[14px] transition-all"
                        >
                    </div>
                    <div>
                        <label class="block text-[13px] font-semibold text-gray-700 mb-1.5">Kategori Kebutuhan</label>
                        <select
                            x-model="kebutuhan"
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:border-[#0070D5] focus:ring-2 focus:ring-[#0070D5]/20 text-[14px] bg-white transition-all"
                        >
                            <option value="Pembelian Drone Mechatron (H-30 / H-15)">Pembelian Drone (H-30 / H-15)</option>
                            <option value="Jasa Penyemprotan & Pemupukan Presisi">Jasa Penyemprotan & Pemupukan</option>
                            <option value="Jasa Pemetaan LiDAR & Kontur 3D">Jasa Pemetaan LiDAR & Kontur 3D</option>
                            <option value="Pelatihan & Sertifikasi Pilot Drone">Pelatihan & Sertifikasi Pilot</option>
                            <option value="Servis, Kalibrasi & Suku Cadang">Servis, Kalibrasi & Suku Cadang</option>
                            <option value="Kemitraan & Distributor">Kemitraan & Distributor</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-[13px] font-semibold text-gray-700 mb-1.5">Detail Pesan / Lokasi Lahan</label>
                    <textarea
                        x-model="pesan"
                        rows="4"
                        placeholder="Ceritakan luas lahan, komoditas tanaman, atau pertanyaan khusus Anda..."
                        class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:border-[#0070D5] focus:ring-2 focus:ring-[#0070D5]/20 text-[14px] transition-all resize-none"
                    ></textarea>
                </div>

                <div class="pt-2">
                    <button
                        type="submit"
                        class="w-full bg-[#0070D5] hover:bg-[#005bb5] text-white font-semibold py-3.5 px-6 rounded-xl text-[15px] shadow-lg shadow-blue-500/20 transition-all flex items-center justify-center gap-2 cursor-pointer"
                    >
                        <span>Kirim Konsultasi ke WhatsApp Mechatron</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </button>
                    <p class="text-[12px] text-gray-400 text-center mt-3">
                        Data Anda aman dan hanya digunakan untuk keperluan konsultasi resmi Mechatron Indonesia.
                    </p>
                </div>
            </form>
        </div>
    </section>
</div>
@endsection
