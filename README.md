# Mechatron Laravel Template

Template modern berbasis **Laravel 12/13**, **Tailwind CSS v4**, dan **Alpine.js** yang dirancang sebagai pondasi awal (*starter kit*) pembuatan website *landing page*, katalog produk teknologi, profil perusahaan (*company profile*), maupun portal layanan profesional.

Template ini mengadopsi estetika desain minimalis, modern, dan presisi tinggi (terinspirasi dari *showcase* teknologi premium kelas dunia seperti DJI) dengan arsitektur kode modular berbasis Blade Components.

---

## 🚀 Fitur Unggulan

- **Arsitektur Blade Component Modular**: Komponen UI terpisah rapi (`navbar`, `hero-banner`, `product-hero-banner`, `featured-hero-grid`, `services-section`, `latest-articles`, `footer`, dan modal pencarian cepat).
- **Tailwind CSS v4 Engine**: Menggunakan konfigurasi `@theme` modern dengan variabel warna khusus (`--color-dji-*`), tipografi bersih, dan utilitas responsif.
- **Micro-Interactions dengan Alpine.js**:
  - Galeri preview produk e-commerce interaktif (*main stage viewer*, *thumbnail strip selector*, *slide counter indicator*, dan *fullscreen lightbox zoom*).
  - Modal pencarian cepat (*Quick Search Modal*) dengan link langsung ke katalog produk dan artikel.
  - Navbar adaptif cerdas (*smart backdrop blur*, transparan di atas hero banner gelap, dan solid putih di halaman detail/baca).
  - Filter kategori produk zero-reload (*Agrikultur, Survey & Pemetaan, Pengiriman, Suku Cadang*) dengan sinkronisasi parameter URL (`?kategori=slug`).
  - Menu navigasi mobile responsif dengan drawer interaktif.
- **Struktur Halaman Lengkap**:
  - **Beranda (`/`)**: Hero carousel sinematik (AGRI H-30, AGRI H-15, AGRI SERIES), showcase produk unggulan 2-kolom rapat, sorotan layanan & teknologi, serta 3 artikel wawasan terbaru.
  - **Katalog Produk (`/products`)**: Dedicated product hero banner 4 kategori dengan animasi mouse scroll, tab filter kategori, kartu spesifikasi produk dengan CTA WhatsApp, dan banner konsultasi pengadaan korporasi.
  - **Detail Produk (`/products/{slug}`)**: Halaman produk tersendiri (bukan modal pop-up) dengan galeri multi-foto e-commerce, badge spesifikasi komprehensif, rekomendasi armada terkait, dan tombol pemesanan WhatsApp langsung.
  - **Layanan (`/services` & `/services/{slug}`)**: Direktori solusi bisnis & armada dengan bento grid interaktif dan halaman detail kapabilitas teknis.
  - **Artikel / Blog (`/blog` & `/blog/{slug}`)**: Portal wawasan & berita drone, filter topik, estimasi waktu baca, serta pembaca artikel mendalam berformat editorial.
  - **Tentang Kami (`/about`)**: Profil perusahaan, metrik pencapaian (50.000+ hektar, 99.8% akurasi RTK), visi, misi, dan pilar teknologi Mechatron.
  - **Hubungi Kami (`/contact`)**: Formulir konsultasi interaktif terhubung langsung ke WhatsApp API, saluran komunikasi resmi, serta alamat kantor & workshop terverifikasi.
- **Data Layer Modular (`App\Data`)**: Konten katalog produk (`DroneProducts.php`), layanan (`ServicesData.php`), dan artikel (`BlogArticles.php`) tersimpan dalam kelas data PHP terstruktur dengan dukungan multi-bahasa (`id` & `en`), sehingga template dapat langsung digunakan tanpa setup database awal dan sangat mudah dimigrasikan ke Eloquent ORM.
- **Fitur Multi-Language (Bahasa Indonesia & Bahasa Inggris)**: Dilengkapi *Language Switcher* (`ID | EN`) di Navbar, middleware deteksi bahasa otomatis (`SetLocale`), kamus terjemahan JSON (`lang/id.json` & `lang/en.json`), serta trait `App\Concerns\HasTranslations` yang siap digunakan saat membangun **Admin Dashboard**.
- **SEO & Performa Siap Pakai**: Struktur semantic HTML5, Open Graph / Meta tags dinamis di setiap view, optimasi aset via Vite, dan panduan lengkap rasio aset visual ([IMAGE_GUIDE.md](file:///c:/Deka%20App/mechatron-lrvl/IMAGE_GUIDE.md)).

---

## 📋 Persyaratan Sistem

Pastikan perangkat kerja telah terpasang:

- **PHP** `>= 8.3` (Disarankan PHP 8.4+)
- **Composer** `>= 2.x`
- **Node.js** `>= 18.x` & **NPM**
- **Git**

---

## 🛠️ Panduan Instalasi & Menjalankan Proyek

Jika ingin menggunakan template ini untuk proyek baru, ikuti langkah berikut:

### 1. Duplikasi / Clone Repositori
```bash
git clone <URL_REPOSITORI_ANDA> nama-proyek-baru
cd nama-proyek-baru
```

### 2. Pasang Dependensi Backend & Frontend
```bash
# Pasang paket Composer (PHP)
composer install

# Pasang dependensi Node.js
npm install
```

### 3. Konfigurasi Lingkungan (`.env`)
Salin file `.env.example` menjadi `.env`:
```bash
# Windows PowerShell
copy .env.example .env

# Bash / Linux / macOS
cp .env.example .env
```

Generate application key:
```bash
php artisan key:generate
```

### 4. Menjalankan Server Pengembangan (Local Development)

Anda dapat menjalankan backend dan frontend secara bersamaan menggunakan script bawaan Composer:
```bash
composer run dev
```

*Atau dijalankan di dua terminal terpisah:*
```bash
# Terminal 1 (Laravel Server)
php artisan serve

# Terminal 2 (Vite Asset Bundler & Hot Reload)
npm run dev
```

Buka browser dan akses: **`http://localhost:8000`** (atau URL yang ditampilkan pada terminal).

### 5. Build Aset Produksi
Sebelum men-deploy aplikasi ke server produksi:
```bash
npm run build
```

---

## 📁 Struktur Direktori Proyek

```plaintext
mechatron-lrvl/
├── app/
│   ├── Concerns/
│   │   └── HasTranslations.php   # Trait Eloquent multi-bahasa untuk integrasi Admin Dashboard
│   ├── Data/                     # Data statis & repository mock (Produk, Layanan, Blog - ID & EN)
│   │   ├── BlogArticles.php      # Data artikel, kategori, dan fungsi pencarian/slug
│   │   ├── DroneProducts.php     # Katalog data produk, galeri multi-foto, & 4 kategori
│   │   └── ServicesData.php      # Daftar solusi bisnis dan layanan armada
│   └── Http/
│       ├── Controllers/
│       │   ├── HomeController.php    # Controller halaman muka (Beranda)
│       │   ├── ProductController.php # Controller katalog produk & detail galeri multi-foto
│       │   ├── ServiceController.php # Controller direktori & detail layanan
│       │   ├── BlogController.php    # Controller katalog artikel & pembaca blog
│       │   ├── AboutController.php   # Controller profil perusahaan Tentang Kami
│       │   ├── ContactController.php # Controller formulir & kontak Hubungi Kami
│       │   └── LocaleController.php  # Controller pergantian bahasa (ID / EN)
│       └── Middleware/
│           └── SetLocale.php         # Middleware deteksi & penerapan bahasa aktif
├── lang/
│   ├── id.json                   # Kamus terjemahan UI Bahasa Indonesia
│   └── en.json                   # Kamus terjemahan UI Bahasa Inggris
├── resources/
│   ├── css/
│   │   └── app.css               # Desain token, tema Tailwind v4, & custom typography
│   ├── js/
│   │   └── app.js                # Inisialisasi Alpine.js & global store
│   └── views/
│       ├── blog/                 # Halaman index & detail artikel blog
│       ├── components/           # Blade components (Navbar, Hero, Product Hero, Grid, Footer, Modal)
│       ├── layouts/              # Layout master (app.blade.php)
│       ├── products/             # Halaman index katalog & detail produk multi-galeri
│       ├── services/             # Halaman index bento grid & detail layanan
│       ├── about.blade.php       # Halaman Tentang Kami (Company Profile & Stats)
│       ├── contact.blade.php     # Halaman Hubungi Kami (Formulir & Kantor)
│       └── home.blade.php        # Halaman Beranda (Homepage)
├── public/
│   └── images/                   # 27 Aset gambar produk, logo, dan banner lokal
├── routes/
│   └── web.php                   # Definisi route aplikasi web
├── IMAGE_GUIDE.md                # Panduan rasio, resolusi, inventaris, & optimasi gambar
├── vite.config.js                # Konfigurasi bundler Vite & Tailwind v4
└── composer.json / package.json  # Manifest dependensi PHP dan Javascript
```

---

## 🎨 Panduan Kustomisasi Proyek

Berikut langkah-langkah untuk menyesuaikan template ini dengan brand atau kebutuhan proyek baru Anda:

### 1. Mengubah Identitas Brand (Nama, Logo & Favicon)
- **Nama Aplikasi**: Ubah variabel `APP_NAME` di file `.env`.
- **Favicon & Logo**:
  - Ganti file logo di `public/images/mechatron_logo.png` dengan logo proyek Anda.
  - Perbarui referensi logo di komponen `resources/views/components/navbar.blade.php` dan `resources/views/components/footer.blade.php`.
- **Metadata Global**: Perbarui judul default dan deskripsi meta pada `resources/views/layouts/app.blade.php`.

### 2. Mengubah Palet Warna & Tipografi
Template ini menggunakan Tailwind CSS v4 dengan CSS Variables di `resources/css/app.css`:
```css
@theme {
  --font-sans: 'Open Sans', sans-serif;
  --color-dji-primary: #0070D5;       /* Warna aksen utama (Brand Blue) */
  --color-dji-canvas: #EDEDED;        /* Background utama halaman */
  --color-dji-surface-alt: #F7F9FA;   /* Background card & surface */
  --color-dji-ink: #000000;           /* Warna teks primer */
  /* Tambahkan atau sesuaikan token warna sesuai brand guide baru Anda */
}
```

### 3. Mengubah atau Menambah Konten (Katalog / Layanan / Blog)

#### Menggunakan Data Statis (`app/Data/`):
- **Katalog Produk**: Buka [DroneProducts.php](file:///c:/Deka%20App/mechatron-lrvl/app/Data/DroneProducts.php) untuk mengubah nama produk, spesifikasi, badge kapasitas, kategori (`agrikultur`, `pengawasan`, `pengiriman`, `suku-cadang`), serta galeri multi-foto e-commerce (`gallery`).
- **Layanan & Solusi**: Buka [ServicesData.php](file:///c:/Deka%20App/mechatron-lrvl/app/Data/ServicesData.php) untuk mengatur kelompok layanan, poin kapabilitas teknis, dan armada pendukung.
- **Artikel Blog**: Buka [BlogArticles.php](file:///c:/Deka%20App/mechatron-lrvl/app/Data/BlogArticles.php) untuk mengubah artikel berita, kategori, estimasi durasi baca, dan konten blok editorial.

#### Migrasi ke Database (Eloquent Model):
Jika proyek membutuhkan integrasi database dinamis:
1. Jalankan `php artisan make:model Product -mfs` (membuat Model, Migration, Factory, dan Seeder).
2. Pindahkan atribut dari `app/Data/DroneProducts.php` ke migration table `products`.
3. Ganti panggilan `DroneProducts::all()` pada controller dengan query Eloquent `Product::all()`.

### 4. Mengubah Navigasi & Footer
- **Navbar (6 Menu Utama)**: Edit [navbar.blade.php](file:///c:/Deka%20App/mechatron-lrvl/resources/views/components/navbar.blade.php) untuk menyesuaikan 6 tautan utama (`Home`, `Product`, `Service`, `Blog`, `About Us`, `Contact Us`). Navbar dilengkapi deteksi tema pintar (*transparent* di atas hero banner gelap, dan *frosted white* pada halaman artikel & detail produk).
- **Footer 3-Kolom & Kontak Kantor**: Edit [footer.blade.php](file:///c:/Deka%20App/mechatron-lrvl/resources/views/components/footer.blade.php) untuk mengubah navigasi cepat, nomor WhatsApp, email resmi, serta alamat kantor pusat & workshop:
  ```text
  Ruko Magna Commercial Area, Blok MC-08
  Komplek Summarecon Bandung
  Kecamatan Gedebage, Kota Bandung
  Jawa Barat, 40294
  ```

---

## 🌐 Panduan Fitur Multi-Language (ID & EN) & Integrasi Admin Dashboard

Aplikasi ini telah dilengkapi sistem **Multi-Language (Bahasa Indonesia `id` & Bahasa Inggris `en`)** yang bekerja secara menyeluruh, baik untuk elemen antarmuka statis (UI) maupun data konten dinamis (Produk, Layanan, Artikel Blog), serta telah disiapkan arsitekturnya untuk pengembangan **Admin Dashboard** ke depannya.

### 1. Cara Kerja Sistem Multi-Language Saat Ini

1. **Konfigurasi Bahasa (`config/app.php`)**:
   - Bahasa utama (*default locale*): `id` (Bahasa Indonesia).
   - Bahasa cadangan (*fallback locale*): `id`.
   - Daftar bahasa yang didukung (`supported_locales`): `['id', 'en']`.
2. **Middleware Deteksi Bahasa (`app/Http/Middleware/SetLocale.php`)**:
   - Terdaftar secara otomatis pada grup middleware `web` di `bootstrap/app.php`.
   - Mengecek parameter URL `?lang=id` atau `?lang=en` (jika ada, otomatis disimpan ke session).
   - Membaca `session('locale', 'id')` dan mengatur `App::setLocale($locale)` pada setiap *request*.
3. **Endpoint Pengganti Bahasa (`routes/web.php` & `LocaleController.php`)**:
   - Route: `GET /locale/{locale}` (`route('locale.switch', 'id')` atau `route('locale.switch', 'en')`).
   - Menyimpan pilihan bahasa ke session pengguna dan melakukan *redirect back* ke halaman yang sedang dibuka.
   - Tombol switcher **ID | EN** tersedia di bagian kanan atas Navbar (Desktop & Mobile).
4. **Kamus Terjemahan UI Statis (`lang/id.json` & `lang/en.json`)**:
   - Seluruh teks statis pada Blade menggunakan fungsi helper `__('Teks Bahasa Indonesia')`.
   - Saat bahasa aktif adalah `id`, Laravel menampilkan kunci teks Bahasa Indonesia. Saat bahasa aktif adalah `en`, Laravel mengambil terjemahan bahasa Inggris dari `lang/en.json`.
5. **Data Konten Dinamis (`app/Data/*.php`)**:
   - `DroneProducts::all()`, `DroneProducts::categories()`, `ServicesData::all()`, dan `BlogArticles::all()` otomatis mendeteksi `app()->getLocale()` dan mengembalikan konten dalam Bahasa Indonesia atau Bahasa Inggris.
   - **Penting**: Atribut `slug` dan `category_slug` dijaga tetap **sama** di kedua bahasa agar ketika pengguna mengganti bahasa (`ID` ↔ `EN`) saat sedang berada di halaman detail produk (`/products/{slug}`), detail layanan (`/services/{slug}`), atau membaca artikel (`/blog/{slug}`), URL tetap valid dan tidak menghasilkan `404 Not Found`.

---

### 2. Cara Menambahkan atau Mengubah Teks Statis di Blade

Jika Anda menambahkan tombol, judul seksi, atau label baru di file `.blade.php`:

1. Bungkus teks menggunakan helper `__('...')`:
   ```blade
   <h2>{{ __('Solusi Drone Industri Terdepan') }}</h2>
   ```
2. Tambahkan pasangan *key-value* pada `lang/id.json` dan `lang/en.json`:
   - Di **`lang/id.json`**:
     ```json
     "Solusi Drone Industri Terdepan": "Solusi Drone Industri Terdepan"
     ```
   - Di **`lang/en.json`**:
     ```json
     "Solusi Drone Industri Terdepan": "Leading Industrial Drone Solutions"
     ```

---

### 3. Panduan Implementasi untuk Admin Dashboard (Database & CRUD)

Ketika Anda membangun **Admin Dashboard** untuk mengelola Produk, Layanan, atau Artikel Blog melalui database (Eloquent ORM), proyek ini sudah menyediakan trait siap pakai di **`app/Concerns/HasTranslations.php`**.

Trait `HasTranslations` mendukung **2 pola skema database** sekaligus (Anda bebas memilih salah satu sesuai preferensi tim):

#### Pola A (Rekomendasi Utama): Menggunakan Kolom JSON (`{"id": "...", "en": "..."}`)

Pola ini paling bersih dan mudah dikembangkan jika suatu saat ingin menambah bahasa ke-3 tanpa perlu membuat *migration* kolom baru.

##### 1. Contoh Migration Database
```php
Schema::create('products', function (Blueprint $table) {
    $table->id();
    $table->string('slug')->unique();
    $table->string('category_slug');
    $table->json('name');         // Menyimpan {"id": "AGRI H-30", "en": "AGRI H-30"}
    $table->json('tagline');      // Menyimpan {"id": "Drone Semprot...", "en": "Heavy-Duty Spraying..."}
    $table->json('description');  // Menyimpan {"id": "Deskripsi ID...", "en": "Description EN..."}
    $table->json('specs');        // Menyimpan {"id": ["Spek 1", ...], "en": ["Spec 1", ...]}
    $table->string('badge')->nullable();
    $table->string('image');
    $table->json('gallery')->nullable();
    $table->boolean('is_featured')->default(false);
    $table->timestamps();
});
```

##### 2. Contoh Konfigurasi Eloquent Model
Pasang trait `App\Concerns\HasTranslations` dan daftarkan kolom JSON pada method `casts()`:
```php
<?php

namespace App\Models;

use App\Concerns\HasTranslations;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasTranslations;

    protected $fillable = [
        'slug',
        'category_slug',
        'name',
        'tagline',
        'description',
        'specs',
        'badge',
        'image',
        'gallery',
        'is_featured',
    ];

    protected function casts(): array
    {
        return [
            'name' => 'array',
            'tagline' => 'array',
            'description' => 'array',
            'specs' => 'array',
            'gallery' => 'array',
            'is_featured' => 'boolean',
        ];
    }
}
```

##### 3. Cara Memanggil Data di Blade / Controller
Gunakan method `$model->t('nama_field')` dari trait `HasTranslations`. Method ini otomatis mengambil teks sesuai bahasa aktif (`id` atau `en`), dan otomatis *fallback* ke Bahasa Indonesia (`id`) jika terjemahan Inggris (`en`) belum diisi oleh Admin:
```blade
<h1>{{ $product->t('name') }}</h1>
<p>{{ $product->t('tagline') }}</p>
<div>{{ $product->t('description') }}</div>

@foreach ($product->t('specs', default: []) as $spec)
    <li>{{ $spec }}</li>
@endforeach
```

---

#### Pola B (Alternatif): Menggunakan Kolom Terpisah (`_id` dan `_en`)

Jika Anda lebih menyukai kolom tabel konvensional terpisah seperti `title_id` dan `title_en`, trait `HasTranslations` **juga langsung mendukungnya secara otomatis** tanpa konfigurasi tambahan:

```php
// Migration:
$table->string('title_id');
$table->string('title_en')->nullable();
$table->text('description_id');
$table->text('description_en')->nullable();
```

Di Blade, cara pemanggilannya tetap sama persis:
```blade
<h2>{{ $service->t('title') }}</h2>
<p>{{ $service->t('description') }}</p>
```
*(Saat bahasa Inggris aktif namun `title_en` kosong/null di database, `$service->t('title')` otomatis mengembalikan isi `title_id`).*

---

### 4. Contoh Form Input Multi-Language di Admin Dashboard (Tambah & Update Konten)

Saat membuat halaman **Create / Edit** di Admin Dashboard, gunakan komponen Tab Bahasa (**🇮🇩 Bahasa Indonesia** & **🇬🇧 English**) dengan Alpine.js agar Admin dapat mengisi kedua bahasa dalam satu halaman form yang rapi:

```blade
<form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" x-data="{ langTab: 'id' }">
    @csrf

    {{-- Tab Switcher Bahasa di Form Admin --}}
    <div class="mb-6 flex items-center gap-2 border-b border-slate-200">
        <button
            type="button"
            @click="langTab = 'id'"
            :class="langTab === 'id' ? 'border-b-2 border-[#0070D5] text-[#0070D5] font-bold' : 'text-slate-500'"
            class="px-4 py-2.5 text-sm transition"
        >
            🇮🇩 Bahasa Indonesia (Utama)
        </button>
        <button
            type="button"
            @click="langTab = 'en'"
            :class="langTab === 'en' ? 'border-b-2 border-[#0070D5] text-[#0070D5] font-bold' : 'text-slate-500'"
            class="px-4 py-2.5 text-sm transition"
        >
            🇬🇧 English (Terjemahan)
        </button>
    </div>

    {{-- Panel Input Bahasa Indonesia (Wajib) --}}
    <div x-show="langTab === 'id'" class="space-y-4">
        <div>
            <label class="block text-sm font-semibold text-slate-700">Nama Produk (ID) *</label>
            <input
                type="text"
                name="name[id]"
                value="{{ old('name.id', $product->getTranslationForLocale('name', 'id') ?? '') }}"
                required
                class="mt-1 w-full rounded-lg border border-slate-300 px-3.5 py-2"
            >
        </div>

        <div>
            <label class="block text-sm font-semibold text-slate-700">Deskripsi (ID) *</label>
            <textarea
                name="description[id]"
                rows="4"
                required
                class="mt-1 w-full rounded-lg border border-slate-300 px-3.5 py-2"
            >{{ old('description.id', $product->getTranslationForLocale('description', 'id') ?? '') }}</textarea>
        </div>
    </div>

    {{-- Panel Input Bahasa Inggris (Opsional / Direkomendasikan) --}}
    <div x-show="langTab === 'en'" x-cloak class="space-y-4">
        <div>
            <label class="block text-sm font-semibold text-slate-700">Product Name (EN)</label>
            <input
                type="text"
                name="name[en]"
                value="{{ old('name.en', $product->getTranslationForLocale('name', 'en') ?? '') }}"
                placeholder="Kosongkan jika sama dengan Bahasa Indonesia"
                class="mt-1 w-full rounded-lg border border-slate-300 px-3.5 py-2"
            >
        </div>

        <div>
            <label class="block text-sm font-semibold text-slate-700">Description (EN)</label>
            <textarea
                name="description[en]"
                rows="4"
                placeholder="Jika dikosongkan, sistem otomatis menampilkan versi Bahasa Indonesia"
                class="mt-1 w-full rounded-lg border border-slate-300 px-3.5 py-2"
            >{{ old('description.en', $product->getTranslationForLocale('description', 'en') ?? '') }}</textarea>
        </div>
    </div>

    <button type="submit" class="mt-6 rounded-lg bg-[#0070D5] px-6 py-2.5 text-sm font-semibold text-white">
        Simpan Konten
    </button>
</form>
```

### 5. Contoh Validasi & Penyimpanan di Controller Admin Dashboard

Gunakan Form Request atau validasi Controller seperti berikut saat menyimpan atau memperbarui data dari Admin Dashboard:

```php
public function store(Request $request): RedirectResponse
{
    $validated = $request->validate([
        'slug' => ['required', 'string', 'max:255', 'unique:products,slug'],
        'category_slug' => ['required', 'string'],
        // Bahasa Indonesia wajib diisi
        'name.id' => ['required', 'string', 'max:255'],
        'tagline.id' => ['required', 'string', 'max:255'],
        'description.id' => ['required', 'string'],
        // Bahasa Inggris bersifat opsional (fallback otomatis ke ID bila kosong)
        'name.en' => ['nullable', 'string', 'max:255'],
        'tagline.en' => ['nullable', 'string', 'max:255'],
        'description.en' => ['nullable', 'string'],
    ]);

    // Jika input EN kosong, bisa diisi fallback dari ID atau dibiarkan null
    $validated['name']['en'] = $validated['name']['en'] ?: $validated['name']['id'];
    $validated['tagline']['en'] = $validated['tagline']['en'] ?: $validated['tagline']['id'];
    $validated['description']['en'] = $validated['description']['en'] ?: $validated['description']['id'];

    Product::create($validated);

    return redirect()->route('admin.products.index')
        ->with('success', 'Produk berhasil disimpan dalam 2 bahasa.');
}
```

---

## 📐 Panduan Layout, Resolusi & Ukuran Gambar (Image & Layout Guide)

Agar tampilan visual pada seluruh halaman tetap simetris, tajam, dan tidak terpotong (*cropped*) secara tidak wajar pada berbagai ukuran layar (*responsive breakpoints* Mobile, Tablet, dan Desktop), gunakan panduan **layout**, **rasio aspek (*aspect ratio*)**, **resolusi piksel (*WxH*)**, dan **ukuran file** berikut saat mengganti atau menambahkan gambar melalui kode maupun Admin Dashboard:

### 1. Tabel Ringkasan Layout, Rasio & Resolusi Gambar per Halaman

> [!NOTE]
> **Cara Membaca Notasi Rasio & Ukuran:**
> - Format rasio adalah **`Lebar : Tinggi`** (*Width : Height*).
> - Tanda garis miring (**`/`**) menunjukkan **opsi pilihan** (misalnya `16:9 / 21:9` artinya Anda dapat menggunakan rasio layar lebar `16:9` **atau** ultrawide `21:9`).
> - Seluruh container gambar menggunakan `object-cover object-center` (kecuali dokumen sertifikat yang menggunakan `object-top` pada kartu dan `object-contain` pada modal zoom).

| Halaman & Komponen | Layout Container di Web | Rasio Aspek (*Ratio*) | Resolusi Optimal (*WxH*) | Ukuran Maks. File | File Kode & Aset Terkait |
| :--- | :--- | :---: | :---: | :---: | :--- |
| **1. Beranda - Hero Banner Slider** | Fullscreen `100vh` (`min-h-[640px]` s.d. `max-h-[1080px]`) | **16:9** / **21:9** | `1920 × 1080 px` / `2560 × 1440 px` | `400 – 700 KB` | [`components/hero-banner.blade.php`](file:///c:/Deka%20App/mechatron-lrvl/resources/views/components/hero-banner.blade.php) |
| **2. Beranda - Featured Product Grid** | Grid 2-Kolom (`h-[460px]` s.d. `h-[580px]`) | **1:1** / **4:5** | `1200 × 1200 px` / `1000 × 1250 px` | `200 – 350 KB` | [`components/featured-hero-grid.blade.php`](file:///c:/Deka%20App/mechatron-lrvl/resources/views/components/featured-hero-grid.blade.php) |
| **3. Beranda - Layanan Drone (3-Kolom)** | Grid 3-Kolom (`min-h-[380px]` s.d. `min-h-[520px]`) | **4:5** / **3:4** | `1000 × 1250 px` / `1200 × 1500 px` | `200 – 350 KB` | [`components/services-section.blade.php`](file:///c:/Deka%20App/mechatron-lrvl/resources/views/components/services-section.blade.php) |
| **4. Beranda - 3D Carousel Sertifikasi** | Kartu 3D Potret (`w-[290px..480px]` × `h-[460px..580px]`) | **3:4** / **A4 Potret (1:1.41)** | `1200 × 1600 px` / `1240 × 1754 px` | `200 – 400 KB` | [`components/certificates-section.blade.php`](file:///c:/Deka%20App/mechatron-lrvl/resources/views/components/certificates-section.blade.php) |
| **5. Beranda & Blog - Kartu Artikel** | Grid 3-Kolom (`aspect-[16/10]` / `h-[220px]`) | **16:9** / **16:10** | `1280 × 720 px` / `1280 × 800 px` | `150 – 250 KB` | [`components/latest-articles-section.blade.php`](file:///c:/Deka%20App/mechatron-lrvl/resources/views/components/latest-articles-section.blade.php) |
| **6. Katalog Produk - Grid Kartu** | Grid 3-Kolom (`h-[240px]` s.d. `h-[260px]`) | **4:3** / **16:10** | `1200 × 900 px` / `1280 × 800 px` | `150 – 250 KB` | [`views/products/index.blade.php`](file:///c:/Deka%20App/mechatron-lrvl/resources/views/products/index.blade.php) |
| **7. Detail Produk - Main Stage Viewer** | Kolom Kiri 6/12 (`h-[320px]` s.d. `h-[480px]`) | **4:3** / **1:1** | `1600 × 1200 px` / `1200 × 900 px` | `250 – 450 KB` | [`views/products/show.blade.php`](file:///c:/Deka%20App/mechatron-lrvl/resources/views/products/show.blade.php) |
| **8. Detail Produk - Thumbnail Strip** | Deretan Kotak Kecil (`w-16 h-16` s.d. `w-20 h-20`) | **1:1** (*Square*) | `200 × 200 px` *(otomatis dari foto galeri)* | `50 – 150 KB` | [`views/products/show.blade.php`](file:///c:/Deka%20App/mechatron-lrvl/resources/views/products/show.blade.php) |
| **9. Detail Produk - Lightbox Zoom** | Modal Fullscreen (`max-h-[85vh]`) | **16:9** / **4:3** | `2000 × 1500 px` / `2560 × 1440 px` | `350 – 600 KB` | [`views/products/show.blade.php`](file:///c:/Deka%20App/mechatron-lrvl/resources/views/products/show.blade.php) |
| **10. Direktori Layanan - Bento Kiri** | Kolom Kiri Tinggi (`min-h-[380px]` s.d. `min-h-[580px]`) | **4:5** / **1:1** | `1200 × 1500 px` / `1200 × 1200 px` | `250 – 400 KB` | [`views/services/index.blade.php`](file:///c:/Deka%20App/mechatron-lrvl/resources/views/services/index.blade.php) |
| **11. Direktori Layanan - Bento Kanan** | 2 Kartu Tumpuk (`min-h-[240px]` s.d. `min-h-[290px]`) | **16:9** / **2:1** | `1280 × 720 px` / `1400 × 700 px` | `200 – 350 KB` | [`views/services/index.blade.php`](file:///c:/Deka%20App/mechatron-lrvl/resources/views/services/index.blade.php) |
| **12. Detail Layanan - Hero Banner** | Fullscreen `100vh` (`h-screen min-h-[640px]`) | **16:9** / **21:9** | `1920 × 1080 px` / `2560 × 1440 px` | `400 – 700 KB` | [`views/services/show.blade.php`](file:///c:/Deka%20App/mechatron-lrvl/resources/views/services/show.blade.php) |
| **13. Detail Layanan - Zig-Zag Feature** | Grid Alternating 7/12 Kolom (`aspect-[16/10]`) | **16:10** / **16:9** | `1440 × 900 px` / `1600 × 1000 px` | `200 – 350 KB` | [`views/services/show.blade.php`](file:///c:/Deka%20App/mechatron-lrvl/resources/views/services/show.blade.php) |
| **14. Tentang Kami - Foto Profil Utama** | Kolom Kanan 6/12 (`h-[400px]` s.d. `h-[500px]`) | **4:3** / **16:10** | `1280 × 960 px` / `1440 × 900 px` | `200 – 350 KB` | [`views/about.blade.php`](file:///c:/Deka%20App/mechatron-lrvl/resources/views/about.blade.php) |
| **15. Tentang Kami - Carousel Galeri Kantor & Pabrik** | Strip Horizontal Bergerak (`w-[280px..540px]`, `aspect-[16/10]`) | **16:10** / **16:9** (*Landscape*) | `1440 × 900 px` / `1600 × 1000 px` | `200 – 350 KB` | [`components/facility-strip-carousel.blade.php`](file:///c:/Deka%20App/mechatron-lrvl/resources/views/components/facility-strip-carousel.blade.php) |
| **16. Blog - Hero Artikel Utama** | Kartu Atas Halaman Blog (`aspect-[16/9]` / `min-h-[360px]`) | **16:9** / **4:3** | `1600 × 900 px` / `1600 × 1200 px` | `250 – 450 KB` | [`views/blog/index.blade.php`](file:///c:/Deka%20App/mechatron-lrvl/resources/views/blog/index.blade.php) |
| **17. Blog Detail - Gambar Pembuka** | Lebar Konten (`max-w-[1000px]`, `h-[320px..540px]`) | **16:9** | `1600 × 900 px` / `1920 × 1080 px` | `250 – 450 KB` | [`views/blog/show.blade.php`](file:///c:/Deka%20App/mechatron-lrvl/resources/views/blog/show.blade.php) |
| **18. Blog - Avatar Penulis** | Lingkaran Kecil (`w-10 h-10` / `rounded-full`) | **1:1** (*Square*) | `200 × 200 px` / `400 × 400 px` | `< 50 KB` | [`app/Data/BlogArticles.php`](file:///c:/Deka%20App/mechatron-lrvl/app/Data/BlogArticles.php) |
| **19. Logo Brand (Light & Dark)** | Header Navbar & Footer (`h-8 sm:h-9 w-auto`) | **~3:1** s.d. **4:1** | `Tinggi 80 – 120 px` (Lebar proporsional) | `< 50 KB` | `public/images/logo_light.png`, `logo_dark.png` |
| **20. Favicon / App Icon** | Tab Browser & Apple Touch Icon | **1:1** (*Square*) | `192 × 192 px` / `512 × 512 px` | `< 30 KB` | `public/images/mechatron_logo.png` |

> [!TIP]
> **Panduan Inventaris Lengkap**: Untuk melihat daftar inventaris file aset gambar di `public/images/`, aturan *safe zone*, serta panduan menambah gambar baru, silakan baca dokumen khusus: **[IMAGE_GUIDE.md](file:///c:/Deka%20App/mechatron-lrvl/IMAGE_GUIDE.md)**.

---

### 2. Penjelasan Detail Layout & Aturan Komposisi (*Framing Guide*)

#### A. Hero Banner Beranda (`components/hero-banner.blade.php`)
- **Rasio & Resolusi:** `16:9` (`1920 × 1080 px`) atau `21:9` (`2560 × 1440 px`).
- **Layout:** Mengisi seluruh tinggi layar (`100vh` dengan batasan `min-height: 640px` s.d. `max-height: 1080px`) menggunakan `object-cover`.
- **Aturan Komposisi:** Judul, subjudul, dan tombol CTA berada di sepertiga atas layar. Subjek drone utama wajib berada di **area tengah-bawah 60–70% (*dead-center safe zone*)** agar tidak tertutup teks maupun terpotong di layar mobile.

#### B. Showcase Produk 2-Kolom Beranda (`components/featured-hero-grid.blade.php`)
- **Rasio & Resolusi:** `1:1` (`1200 × 1200 px`) atau `4:5` (`1000 × 1250 px`).
- **Layout:** Grid 2 kolom berdampingan dengan tinggi kartu `h-[460px] sm:h-[520px] md:h-[580px]`.
- **Aturan Komposisi:** Gunakan foto produk dengan ruang kosong (*padding*) sekitar 15–20% di tepi gambar agar saat efek *hover zoom* (`scale-105`) aktif, ujung baling-baling drone tidak terpotong batas kartu.

#### C. Seksi Layanan Beranda & Sertifikasi 3D Carousel (`services-section.blade.php` & `certificates-section.blade.php`)
- **Layanan Beranda (3 Kolom):** Menggunakan kartu tinggi (`min-h-[380px]` s.d. `520px`) dengan rasio potret `4:5` atau `3:4` (`1000 × 1250 px`). Teks judul dan deskripsi diletakkan di bagian bawah kartu di atas lapisan gradasi gelap (`bg-gradient-to-t from-black/90`).
- **Sertifikasi Resmi (3D Perspective Carousel):** Menampilkan dokumen sertifikat (`sertifikat_sni.jpg`, `sertifikat_tkdn_hexa.jpg`, `sertifikat_tkdn_quad.jpg`) dalam kartu potret `3:4` / **A4 Vertikal** (`1200 × 1600 px` atau `1240 × 1754 px`). Saat tombol **Lihat Sertifikat** diklik, gambar ditampilkan utuh (`object-contain`) di dalam modal *lightbox* resolusi tinggi.

#### D. Halaman Detail Layanan - Fullscreen Hero & Zig-Zag Layout (`views/services/show.blade.php`)
- **Bagian 1 - Hero Banner Layanan:**
  - **Layout:** Fullscreen `h-screen min-h-[640px]` bergaya sinematik dengan judul besar di tengah, subjudul, tombol putih **Konsultasi Layanan**, dan indikator panah *scroll* di bagian bawah.
  - **Rasio & Resolusi:** Landscape `16:9` (`1920 × 1080 px` atau `2560 × 1440 px`).
- **Bagian 2 - Penjelasan Detail Layanan (Zig-Zag Alternating Layout):**
  - **Layout:** Berlatar belakang putih bersih (`bg-white`) dengan sistem grid 12 kolom yang berselang-seling:
    - **Baris Genap (1, 3, ...):** Teks penjelasan (`5 kolom`) di **Kiri**, Gambar fitur (`7 kolom`) di **Kanan**.
    - **Baris Ganjil (2, 4, ...):** Gambar fitur (`7 kolom`) di **Kiri**, Teks penjelasan (`5 kolom`) di **Kanan**.
  - **Rasio & Resolusi Gambar Fitur:** Landscape **`16:10`** (`1440 × 900 px` atau `1600 × 1000 px`) dengan sudut membulat (`rounded-2xl`) dan animasi *scroll-reveal* halus.

#### E. Halaman Tentang Kami & Carousel Galeri Kantor/Pabrik (`views/about.blade.php` & `facility-strip-carousel.blade.php`)
- **Foto Profil Perusahaan (Atas):** Terletak di sebelah kanan teks pengenalan BMT dengan tinggi tetap `h-[400px] sm:h-[500px]`, ideal menggunakan rasio `4:3` atau `16:10` (`1440 × 900 px`).
- **Carousel Galeri Kantor & Pabrik Mechatron (`facility-strip-carousel.blade.php`):**
  - **Posisi:** Tepat di bawah seksi **Visi & Misi**.
  - **Layout & Animasi:** Strip carousel horizontal berisi murni gambar (*pure image card* tanpa teks overlay) yang **bergerak otomatis secara perlahan ke arah kanan terus-menerus (*continuous smooth right slide*)**, dilengkapi tombol panah navigasi kiri (`<`) dan kanan (`>`) di kedua sisi.
  - **Ukuran Kartu & Rasio:** Lebar kartu responsif `w-[280px]` (mobile) hingga `w-[540px]` (desktop) dengan rasio **Landscape `16:10`** (`aspect-[16/10]`, resolusi optimal **`1440 × 900 px`** atau **`1600 × 1000 px`**).
  - **Aset Gambar Saat Ini:**
    1. `public/images/mechatron_kantor_gedung.jpg`
    2. `public/images/mechatron_kantor_interior.jpg`
    3. `public/images/mechatron_pabrik_gudang.jpg`

#### F. Katalog Produk & Detail Produk Multi-Foto (`views/products/`)
- **Katalog Produk (`products/index.blade.php`):** Kartu produk menggunakan gambar rasio `4:3` atau `16:10` (`1200 × 900 px`) dengan filter tab kategori instan tanpa reload halaman.
- **Detail Produk (`products/show.blade.php`):**
  - **Main Stage Viewer:** Kotak galeri utama berukuran `h-[320px] sm:h-[420px] lg:h-[480px]`, optimal dengan rasio `4:3` (`1600 × 1200 px`).
  - **Thumbnail Strip Selector:** Deretan thumbnail `1:1` (`w-16 h-16 sm:w-20 sm:h-20`) di bawah gambar utama.
  - **Fullscreen Lightbox Zoom:** Menampilkan foto produk ukuran penuh saat gambar utama diklik.

#### G. Direktori Layanan Bento Grid (`views/services/index.blade.php`)
- **Kartu Utama Kiri (Pelatihan Pilot Drone):** Kartu vertikal tinggi (`min-h-[380px]` s.d. `580px`), optimal menggunakan foto rasio `4:5` atau `1:1` (`1200 × 1500 px`).
- **Dua Kartu Tumpuk Kanan (Perawatan Drone & Sewa Drone):** Kartu horizontal (`min-h-[240px]` s.d. `290px`), optimal menggunakan foto landscape `16:9` atau `2:1` (`1280 × 720 px` / `1400 × 700 px`).

#### H. Berita & Artikel Blog (`views/blog/`)
- **Thumbnail Grid 3-Kolom:** Rasio `16:9` atau `16:10` (`1280 × 720 px` / `1280 × 800 px`).
- **Hero Detail Artikel (`blog/show.blade.php`):** Lebar maksimal `1000px` dengan tinggi `540px` (rasio `16:9`, resolusi `1600 × 900 px`).
- **Avatar Penulis:** Wajib rasio `1:1` (`200 × 200 px` s.d. `400 × 400 px`).

---

### 3. Tips Optimasi File Gambar (*Performance Best Practices*)

1. **Gunakan Format Modern (WebP / JPG Terkompresi):** Untuk foto pemandangan, drone lapangan, dan gedung kantor, gunakan `.webp` atau `.jpg` berkualitas `80–85%`. Untuk logo atau grafik dengan latar transparan, gunakan `.png` atau `.svg`.
2. **Batas Ukuran File Disarankan (Agar Loading Cepat):**
   - **Hero Banner Fullscreen (`1920×1080`):** Maksimal `400 KB – 700 KB`.
   - **Foto Fitur / Galeri / Carousel (`1440×900`):** Maksimal `200 KB – 350 KB`.
   - **Thumbnail Kartu / Grid (`1200×900`):** Maksimal `150 KB – 250 KB`.
   - **Logo & Ikon:** Di bawah `50 KB`.
3. **Penyimpanan Aset Lokal:** Simpan file aset di folder `public/images/` (atau `storage/app/public/` saat menggunakan fitur upload Admin Dashboard) dan panggil di Blade menggunakan helper `{{ asset('images/nama-file.jpg') }}`.

---

## 💻 Perintah yang Sering Digunakan (CLI)

| Perintah | Deskripsi |
| :--- | :--- |
| `composer run dev` | Menjalankan server Laravel dan Vite secara berdampingan |
| `php artisan serve` | Menjalankan server pengembangan PHP Laravel |
| `npm run dev` | Menjalankan Vite development server dengan HMR (Hot Module Replacement) |
| `npm run build` | Melakukan kompilasi dan minifikasi aset CSS/JS untuk produksi |
| `php artisan route:list` | Menampilkan seluruh daftar rute yang terdaftar pada aplikasi |
| `php artisan test` | Menjalankan pengujian fitur (*feature & unit tests*) dengan PHPUnit |
| `vendor/bin/pint` | Memformat kode PHP secara otomatis sesuai standar Laravel Pint |

---

## 🚢 Panduan Deployment

Saat men-deploy ke server produksi (VPS, Shared Hosting, atau Cloud):

1. **Set Environment Produksi**:
   ```env
   APP_ENV=production
   APP_DEBUG=false
   APP_URL=https://domainanda.com
   ```
2. **Kompilasi Aset**:
   ```bash
   npm run build
   ```
3. **Optimasi Cache Laravel**:
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```
4. **Web Server Root**: Pastikan konfigurasi Nginx atau Apache mengarah ke folder **`public/`** aplikasi.

---

## 📄 Lisensi

Template proyek ini berlisensi [MIT](https://opensource.org/licenses/MIT). Anda bebas menggunakan, memodifikasi, dan mendistribusikannya untuk proyek personal maupun komersial.
