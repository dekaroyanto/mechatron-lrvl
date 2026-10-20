<div
    x-show="$store.searchModal.open"
    x-transition.opacity.duration.200ms
    @keydown.escape.window="$store.searchModal.close()"
    class="fixed inset-0 z-50 flex items-start justify-center pt-24 px-4 bg-black/60 backdrop-blur-sm"
    style="display: none;"
    @click="$store.searchModal.close()"
>
    <div
        class="bg-white rounded-2xl w-full max-w-xl shadow-2xl p-6 text-slate-900 border border-slate-200"
        @click.stop
    >
        <div class="flex items-center justify-between pb-4 border-b border-slate-100">
            <h3 class="text-[17px] font-bold">Cari Produk & Layanan</h3>
            <button @click="$store.searchModal.close()" class="text-slate-400 hover:text-slate-700">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>
        <div class="mt-4">
            <input
                type="text"
                x-model="$store.searchModal.query"
                placeholder="Ketik nama produk, drone, atau layanan..."
                class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-[#0070D5] text-[14px]"
            />
        </div>
        <div class="mt-4 space-y-2 max-h-60 overflow-y-auto">
            <a href="{{ route('home') }}#products" @click="$store.searchModal.close()" class="block p-3 rounded-xl hover:bg-slate-50 transition-colors">
                <span class="font-bold text-[14px] text-slate-900">MECHATRON AGRI H-30</span>
                <p class="text-[12px] text-slate-500">Drone Pertanian Kapasitas 30L</p>
            </a>
            <a href="{{ route('home') }}#products" @click="$store.searchModal.close()" class="block p-3 rounded-xl hover:bg-slate-50 transition-colors">
                <span class="font-bold text-[14px] text-slate-900">MECHATRON AGRI H-15</span>
                <p class="text-[12px] text-slate-500">Drone Pertanian Lipat Kapasitas 15L</p>
            </a>
            <a href="{{ route('services.index') }}" @click="$store.searchModal.close()" class="block p-3 rounded-xl hover:bg-slate-50 transition-colors">
                <span class="font-bold text-[14px] text-slate-900">Services & Layanan Drone</span>
                <p class="text-[12px] text-slate-500">Fotografi, LiDAR, Agrikultur, Sewa, Pelatihan, & Servis</p>
            </a>
            <a href="{{ route('blog.index') }}" @click="$store.searchModal.close()" class="block p-3 rounded-xl hover:bg-slate-50 transition-colors">
                <span class="font-bold text-[14px] text-slate-900">Berita & Artikel Mechatron</span>
                <p class="text-[12px] text-slate-500">Kabar terkini inovasi drone pertanian nasional</p>
            </a>
        </div>
    </div>
</div>
