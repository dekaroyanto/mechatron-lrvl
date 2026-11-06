 <!-- 3. Inquiry Form Section -->
<section class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-28">
    <div class="max-w-3xl mx-auto bg-white rounded-3xl shadow-xl border border-gray-100 p-8 sm:p-12"
        x-data="{
            nama: '',
            email: '',
            telepon: '',
            kebutuhan: '{{ __('Pembelian Drone Mechatron (H-30 / H-15)') }}',
            pesan: '',
            submitted: false,
            kirimPesan() {
                if (!this.nama || !this.telepon) {
                    alert('{{ __('Mohon lengkapi nama dan nomor telepon / WhatsApp Anda.') }}');
                    return;
                }
                const text = `{{ __('Halo Mechatron,') }}%0A%0A{{ __('Saya ingin konsultasi:') }}%0A- {{ __('Nama') }}: ${encodeURIComponent(this.nama)}%0A- {{ __('Email') }}: ${encodeURIComponent(this.email || '-')}%0A- {{ __('WhatsApp/Telp') }}: ${encodeURIComponent(this.telepon)}%0A- {{ __('Kebutuhan') }}: ${encodeURIComponent(this.kebutuhan)}%0A- {{ __('Catatan') }}: ${encodeURIComponent(this.pesan || '-')}`;
                window.open(`https://wa.me/6281112143111?text=${text}`, '_blank');
                this.submitted = true;
            }
        }"
    >
        <div class="text-center mb-8">
            <span class="text-[13px] font-bold text-[#0070D5] uppercase tracking-wider">{{ __('Formulir Konsultasi') }}</span>
            <h2 class="text-[28px] sm:text-[36px] font-bold text-gray-900 tracking-tight mt-1">{{ __('Kirimkan Pertanyaan Anda') }}</h2>
            <p class="text-[14px] sm:text-[15px] text-gray-500 mt-2">
                {{ __('Isi detail singkat di bawah ini dan pesan akan langsung diteruskan ke tim konsultan Mechatron.') }}
            </p>
        </div>

        <div x-show="submitted" x-cloak class="mb-6 p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-[14px] text-center">
            {{ __('Terima kasih! Pesan Anda telah disiapkan untuk WhatsApp kami. Tim kami akan segera menanggapi.') }}
        </div>

        <form @submit.prevent="kirimPesan" class="space-y-5">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                <div>
                    <label class="block text-[13px] font-semibold text-gray-700 mb-1.5">{{ __('Nama Lengkap') }} *</label>
                    <input
                        type="text"
                        x-model="nama"
                        required
                        placeholder="{{ __('Contoh: Budi Santoso') }}"
                        class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:border-[#0070D5] focus:ring-2 focus:ring-[#0070D5]/20 text-[14px] transition-all"
                    >
                </div>
                <div>
                    <label class="block text-[13px] font-semibold text-gray-700 mb-1.5">{{ __('Nomor WhatsApp / HP') }} *</label>
                    <input
                        type="tel"
                        x-model="telepon"
                        required
                        placeholder="{{ __('Contoh: 081234567890') }}"
                        class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:border-[#0070D5] focus:ring-2 focus:ring-[#0070D5]/20 text-[14px] transition-all"
                    >
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                <div>
                    <label class="block text-[13px] font-semibold text-gray-700 mb-1.5">{{ __('Alamat Email') }}</label>
                    <input
                        type="email"
                        x-model="email"
                        placeholder="{{ __('Contoh: nama@perusahaan.com') }}"
                        class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:border-[#0070D5] focus:ring-2 focus:ring-[#0070D5]/20 text-[14px] transition-all"
                    >
                </div>
                <div>
                    <label class="block text-[13px] font-semibold text-gray-700 mb-1.5">{{ __('Kategori Kebutuhan') }}</label>
                    <select
                        x-model="kebutuhan"
                        class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:border-[#0070D5] focus:ring-2 focus:ring-[#0070D5]/20 text-[14px] bg-white transition-all"
                    >
                        <option value="{{ __('Pembelian Drone Mechatron (H-30 / H-15)') }}">{{ __('Pembelian Drone (H-30 / H-15)') }}</option>
                        <option value="{{ __('Jasa Penyemprotan & Pemupukan Presisi') }}">{{ __('Jasa Penyemprotan & Pemupukan') }}</option>
                        <option value="{{ __('Jasa Pemetaan LiDAR & Kontur 3D') }}">{{ __('Jasa Pemetaan LiDAR & Kontur 3D') }}</option>
                        <option value="{{ __('Pelatihan & Sertifikasi Pilot Drone') }}">{{ __('Pelatihan & Sertifikasi Pilot') }}</option>
                        <option value="{{ __('Servis, Kalibrasi & Suku Cadang') }}">{{ __('Servis, Kalibrasi & Suku Cadang') }}</option>
                        <option value="{{ __('Kemitraan & Distributor') }}">{{ __('Kemitraan & Distributor') }}</option>
                    </select>
                </div>
            </div>

            <div>
                <label class="block text-[13px] font-semibold text-gray-700 mb-1.5">{{ __('Detail Pesan / Lokasi Lahan') }}</label>
                <textarea
                    x-model="pesan"
                    rows="4"
                    placeholder="{{ __('Ceritakan luas lahan, komoditas tanaman, atau pertanyaan khusus Anda...') }}"
                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:border-[#0070D5] focus:ring-2 focus:ring-[#0070D5]/20 text-[14px] transition-all resize-none"
                ></textarea>
            </div>

            <div class="pt-2">
                <button
                    type="submit"
                    class="w-full bg-[#0070D5] hover:bg-[#005bb5] text-white font-semibold py-3.5 px-6 rounded-xl text-[15px] shadow-lg shadow-blue-500/20 transition-all flex items-center justify-center gap-2 cursor-pointer"
                >
                    <span>{{ __('Kirim Konsultasi ke WhatsApp Mechatron') }}</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </button>
                <p class="text-[12px] text-gray-400 text-center mt-3">
                    {{ __('Data Anda aman dan hanya digunakan untuk keperluan konsultasi resmi Mechatron Indonesia.') }}
                </p>
            </div>
        </form>
    </div>
</section>
