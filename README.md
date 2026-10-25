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
- **Data Layer Modular (`App\Data`)**: Konten katalog produk (`DroneProducts.php`), layanan (`ServicesData.php`), dan artikel (`BlogArticles.php`) tersimpan dalam kelas data PHP terstruktur, sehingga template dapat langsung digunakan tanpa setup database awal dan sangat mudah dimigrasikan ke Eloquent ORM.
- **SEO & Performa Siap Pakai**: Struktur semantic HTML5, Open Graph / Meta tags dinamis di setiap view, optimasi aset via Vite, dan panduan lengkap rasio aset visual ([IMAGE_GUIDE.md](file:///d:/deka-app/mechatron-lrvl/IMAGE_GUIDE.md)).

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
│   ├── Data/                     # Data statis & repository mock (Produk, Layanan, Blog)
│   │   ├── BlogArticles.php      # Data artikel, kategori, dan fungsi pencarian/slug
│   │   ├── DroneProducts.php     # Katalog data produk, galeri multi-foto, & 4 kategori
│   │   └── ServicesData.php      # Daftar solusi bisnis dan layanan armada
│   └── Http/Controllers/
│       ├── HomeController.php    # Controller halaman muka (Beranda)
│       ├── ProductController.php # Controller katalog produk & detail galeri multi-foto
│       ├── ServiceController.php # Controller direktori & detail layanan
│       ├── BlogController.php    # Controller katalog artikel & pembaca blog
│       ├── AboutController.php   # Controller profil perusahaan Tentang Kami
│       └── ContactController.php # Controller formulir & kontak Hubungi Kami
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
- **Katalog Produk**: Buka [DroneProducts.php](file:///d:/deka-app/mechatron-lrvl/app/Data/DroneProducts.php) untuk mengubah nama produk, spesifikasi, badge kapasitas, kategori (`agrikultur`, `survey-pemetaan`, `pengiriman`, `suku-cadang`), serta galeri multi-foto e-commerce (`gallery`).
- **Layanan & Solusi**: Buka [ServicesData.php](file:///d:/deka-app/mechatron-lrvl/app/Data/ServicesData.php) untuk mengatur kelompok layanan, poin kapabilitas teknis, dan armada pendukung.
- **Artikel Blog**: Buka [BlogArticles.php](file:///d:/deka-app/mechatron-lrvl/app/Data/BlogArticles.php) untuk mengubah artikel berita, kategori, estimasi durasi baca, dan konten blok editorial.

#### Migrasi ke Database (Eloquent Model):
Jika proyek membutuhkan integrasi database dinamis:
1. Jalankan `php artisan make:model Product -mfs` (membuat Model, Migration, Factory, dan Seeder).
2. Pindahkan atribut dari `app/Data/DroneProducts.php` ke migration table `products`.
3. Ganti panggilan `DroneProducts::all()` pada controller dengan query Eloquent `Product::all()`.

### 4. Mengubah Navigasi & Footer
- **Navbar (6 Menu Utama)**: Edit [navbar.blade.php](file:///d:/deka-app/mechatron-lrvl/resources/views/components/navbar.blade.php) untuk menyesuaikan 6 tautan utama (`Home`, `Product`, `Service`, `Blog`, `About Us`, `Contact Us`). Navbar dilengkapi deteksi tema pintar (*transparent* di atas hero banner gelap, dan *frosted white* pada halaman artikel & detail produk).
- **Footer 3-Kolom & Kontak Kantor**: Edit [footer.blade.php](file:///d:/deka-app/mechatron-lrvl/resources/views/components/footer.blade.php) untuk mengubah navigasi cepat, nomor WhatsApp, email resmi, serta alamat kantor pusat & workshop:
  ```text
  Ruko Magna Commercial Area, Blok MC-08
  Komplek Summarecon Bandung
  Kecamatan Gedebage, Kota Bandung
  Jawa Barat, 40294
  ```

---

## 📐 Panduan Rasio & Dimensi Konten Gambar (Asset Aspect Ratios)

Agar tampilan visual tetap simetris, tajam, dan tidak terpotong secara tidak wajar pada berbagai ukuran layar (*responsive breakpoints*), gunakan panduan rasio aspek (*aspect ratio*) dan dimensi berikut saat mengganti atau menambahkan aset gambar baru:

### 1. Tabel Ringkasan Rasio Konten

> [!NOTE]
> **Cara Membaca Notasi Rasio:**
> - Format rasio adalah **`Lebar : Tinggi`** (*Width : Height*).
> - Tanda garis miring (**`/`**) menunjukkan **opsi pilihan** (misalnya `16:9 / 21:9` artinya Anda dapat memilih menggunakan rasio standar layar lebar `16:9` **atau** rasio bioskop ultrawide `21:9`).

| Komponen / Bagian | Rasio Aspek (*Ratio*) | Resolusi Optimal (*WxH*) | Format Disarankan | File Kode Terkait |
| :--- | :---: | :---: | :---: | :--- |
| **Hero Banner Slider** (Beranda) | **16:9** / **21:9** | `1920 × 1080 px` / `2560 × 1440 px` | WebP / JPG | `components/hero-banner.blade.php` |
| **Hero Banner Kategori Produk** | **16:9** / **21:9** | `1920 × 1080 px` / `2560 × 1440 px` | WebP / JPG | `components/product-hero-banner.blade.php` |
| **Featured Product Grid** (2-Kolom) | **1:1** / **4:5** | `1200 × 1200 px` / `1000 × 1250 px` | WebP / PNG / JPG | `components/featured-hero-grid.blade.php` |
| **Katalog Produk Grid** (Semua Produk) | **4:3** / **1:1** | `1200 × 900 px` / `1000 × 1000 px` | WebP / PNG / JPG | `views/products/index.blade.php` |
| **Detail Produk - Main Stage Viewer** | **4:3** / **1:1** | `1200 × 900 px` / `1600 × 1200 px` | WebP / PNG / JPG | `views/products/show.blade.php` |
| **Detail Produk - Thumbnail Strip** | **1:1** (*Square*) | `160 × 160 px` / `200 × 200 px` | WebP / PNG / JPG | `views/products/show.blade.php` |
| **Detail Produk - Lightbox Zoom** | **16:9** / **4:3** / **1:1** | `2000 × 1500 px` / `2560 × 1440 px` | WebP / PNG / JPG | `views/products/show.blade.php` |
| **Layanan Solusi Bisnis** (3-Kolom Vertikal) | **9:16** / **2:3** | `1080 × 1920 px` / `1000 × 1500 px` | WebP / JPG | `components/services-section.blade.php` |
| **Layanan 3D Carousel** (Kartu Melayang) | **4:5** / **3:4** | `1000 × 1250 px` / `900 × 1200 px` | WebP / JPG | `components/services-section.blade.php` |
| **Bento Grid Layanan - Kartu Utama** | **4:5** / **1:1** | `1200 × 1500 px` / `1200 × 1200 px` | WebP / JPG | `views/services/index.blade.php` |
| **Bento Grid Layanan - Kartu Tumpuk** | **16:9** / **2:1** | `1200 × 675 px` / `1400 × 700 px` | WebP / JPG | `views/services/index.blade.php` |
| **Bento Grid Layanan - Kartu Armada** | **3:4** / **4:5** | `1000 × 1250 px` | WebP / JPG | `views/services/index.blade.php` |
| **Hero Header Layanan & Blog Detail** | **16:9** / **21:9** | `1920 × 1080 px` / `2560 × 1440 px` | WebP / JPG | `services/show.blade.php`, `blog/show.blade.php` |
| **Hero Header About Us & Contact Us** | **16:9** | `1920 × 1080 px` | WebP / JPG | `views/about.blade.php`, `views/contact.blade.php` |
| **Thumbnail Artikel Blog** (Grid 3-Kolom) | **16:9** / **3:2** | `1280 × 720 px` / `1200 × 800 px` | WebP / JPG | `components/latest-articles-section.blade.php` |
| **Hero Berita Utama** (Halaman Blog) | **16:9** / **4:3** | `1600 × 900 px` / `1600 × 1200 px` | WebP / JPG | `views/blog/index.blade.php` |
| **Avatar Penulis Artikel** (*Author Avatar*) | **1:1** (*Square*) | `200 × 200 px` / `400 × 400 px` | WebP / PNG / JPG | `app/Data/BlogArticles.php` |
| **Logo Brand** (Navbar & Footer) | **~3:1** s.d. **4:1** | `Tinggi 80 - 120 px` (Lebar proporsional) | SVG / PNG Transparan | `components/navbar.blade.php` |
| **Favicon / App Icon** | **1:1** (*Square*) | `32 × 32 px`, `192 × 192 px`, `512 × 512 px` | PNG / ICO / SVG | `public/favicon.ico` |

> [!TIP]
> **Panduan Inventaris Lengkap**: Untuk melihat daftar seluruh 27 file aset gambar di `public/images/`, aturan safe zone, serta panduan menambah gambar baru, silakan baca dokumen khusus: **[IMAGE_GUIDE.md](file:///d:/deka-app/mechatron-lrvl/IMAGE_GUIDE.md)**.

---

### 2. Penjelasan Detail & Aturan Komposisi (*Framing Guide*)

#### A. Hero Banner Beranda (`hero-banner.blade.php`)
- **Rasio:** `16:9` (Landscape Layar Lebar) atau `21:9` (Cinematic Ultrawide).
- **Karakteristik Tampilan:** Mengisi seluruh tinggi layar (`100vh` dengan batasan `min-height: 640px` s.d. `max-height: 1080px`) menggunakan `object-cover`.
- **Tipografi & Komposisi:** Menggunakan tipografi ramping (`text-[20px]` s.d. `text-[42px]` untuk title, `text-[12px]` s.d. `text-[15px]` untuk tagline) yang diposisikan di sepertiga atas layar. Dilengkapi tombol aksi outline putih tebal transparan ala DJI yang berubah biru saat di-hover. Subjek drone utama wajib berada di **area tengah 60-70% (*dead-center safe zone*)**.

#### B. Hero Banner Kategori Produk (`product-hero-banner.blade.php`)
- **Rasio:** `16:9` atau `21:9`.
- **Karakteristik Tampilan:** Mengisi layar dengan 4 slide berbasis kategori (`AGRIKULTUR SERIES`, `SURVEY & PEMETAAN SERIES`, `PENGIRIMAN SERIES`, `SUKU CADANG`) dengan kata *SERIES* berbobot tipis (*font-light*).
- **Interaksi Khusus:** Tidak menggunakan tombol aksi, melainkan dilengkapi indikator animasi mouse scroll yang dapat diklik untuk meluncur mulus (*smooth scroll*) langsung ke `#catalog`.

#### C. Showcase Produk 2-Kolom Beranda (`featured-hero-grid.blade.php`)
- **Rasio:** `1:1` (Bujur Sangkar / Kotak) atau `4:5` (Potret Studio).
- **Karakteristik Tampilan:** Kartu produk minimalis berlatar terang dengan margin sisi luar rapat (`px-1 sm:px-1.5 md:px-2`) sehingga menyatu presisi dengan lebar halaman.
- **Komposisi:** Gunakan foto produk berlatar belakang bersih (studio putih/abu-abu netral). Sisakan ruang kosong (*padding*) di sekitar produk sebesar 15–20% agar saat kartu membesar saat di-hover (*scale effect*), ujung baling-baling tidak menabrak batas kartu.

#### D. Detail Produk & Galeri Multi-Foto E-Commerce (`products/show.blade.php`)
- **Rasio Panggung Utama:** `4:3` atau `1:1` (`1200 × 900 px` s.d. `1600 × 1200 px`).
- **Karakteristik Tampilan:** Mengadopsi sistem galeri toko online modern kelas dunia:
  - **Main Stage Viewer**: Menampilkan foto utama dengan panah slide dan badge kapasitas/model.
  - **Thumbnail Strip Selector**: Deretan foto thumbnail di bawahnya dengan cincin biru aktif `ring-2 ring-[#0070D5]`.
  - **Slide Counter Indicator**: Indikator nomor foto aktif (contoh: `1 / 5`).
  - **Fullscreen Lightbox Zoom**: Modal zoom resolusi tinggi dengan dismiss tombol ESC untuk inspeksi detail tekstur & komponen drone.

#### E. Katalog Produk Grid (`products/index.blade.php`)
- **Rasio Kartu:** `4:3` atau `1:1` (`1200 × 900 px`).
- **Karakteristik Tampilan:** Grid produk responsif dengan tab filter kategori zero-reload (*Agrikultur, Survey & Pemetaan, Pengiriman, Suku Cadang*), spesifikasi ringkas, serta tautan langsung ke detail produk dan pemesanan WhatsApp.

#### F. Layanan Solusi Bisnis & Bento Grid (`views/services/`)
- **Rasio Bento:**
  - **Kartu Lebar Kiri (7 Kolom)**: `4:5` atau `1:1` (`1200 × 1500 px`). Ideal untuk foto vertikal sinematik resolusi tinggi.
  - **Kartu Tumpuk Kanan (5 Kolom)**: `16:9` atau `2:1` (`1200 × 675 px`). Ideal untuk lanskap pemetaan atau foto aksi horizontal.
  - **Kartu Baris Bawah (3 Kolom)**: `3:4` atau `4:5` (`1000 × 1250 px`).

#### G. Berita & Artikel Blog (`views/blog/`)
- **Rasio Thumbnail:** `16:9` (Lanskap Standar Widescreen, `1280 × 720 px`).
- **Karakteristik Tampilan:** Menggunakan `aspect-ratio` lanskap untuk memudahkan perataan kisi (*grid alignment*) kartu berita 3-kolom.
- **Hero Detail Artikel:** Gambar pembuka di halaman baca artikel berdimensi maksimal `1000px` lebar dengan tinggi `540px` (rasio `16:9`).
- **Avatar Penulis:** Wajib berbentuk rasio `1:1` bulat (*circular crop*).

---

### 3. Tips Optimasi File Gambar (*Performance Best Practices*)

1. **Gunakan Format Modern (WebP):** Konversikan gambar JPG/PNG ke format `.webp`. WebP memberikan reduksi ukuran file hingga 30-50% lebih kecil tanpa menurunkan kualitas visual secara kasat mata.
2. **Batas Ukuran File Disarankan:**
   - **Hero Banner:** Maksimal `400 KB - 700 KB`.
   - **Thumbnail Kartu / Grid:** Maksimal `150 KB - 250 KB`.
   - **Logo & Ikon:** Di bawah `50 KB` (Gunakan SVG jika memungkinkan untuk ketajaman sempurna di semua resolusi).
3. **Penyimpanan Aset Lokal:** Simpan file aset baru di folder `public/images/` dan panggil di template Blade menggunakan helper `{{ asset('images/nama-file.webp') }}`.

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
