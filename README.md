# Mechatron Laravel Template

Template modern berbasis **Laravel 12/13**, **Tailwind CSS v4**, dan **Alpine.js** yang dirancang sebagai pondasi awal (*starter kit*) pembuatan website *landing page*, katalog produk teknologi, profil perusahaan (*company profile*), maupun portal layanan profesional.

Template ini mengadopsi estetika desain minimalis, modern, dan presisi tinggi (terinspirasi dari *showcase* teknologi premium kelas dunia seperti DJI) dengan arsitektur kode modular berbasis Blade Components.

---

## 🚀 Fitur Unggulan

- **Arsitektur Blade Component Modular**: Komponen UI terpisah rapi (`navbar`, `hero-banner`, `featured-hero-grid`, `services-section`, `latest-articles`, `footer`, dan modal interaktif).
- **Tailwind CSS v4 Engine**: Menggunakan konfigurasi `@theme` modern dengan variabel warna khusus (`--color-dji-*`), tipografi bersih, dan utilitas responsif.
- **Micro-Interactions dengan Alpine.js**:
  - Modal detail produk dinamis (*Product Modal*) dengan *backdrop blur* & *body scroll lock*.
  - Modal pencarian cepat (*Quick Search Modal*).
  - Menu navigasi mobile responsif dan dropdown interaktif.
- **Struktur Halaman Lengkap**:
  - **Beranda (`/`)**: Hero carousel, produk unggulan 2-kolom, sorotan layanan & teknologi, serta 3 artikel wawasan terbaru.
  - **Layanan (`/services` & `/services/{slug}`)**: Direktori solusi bisnis & armada dengan filter kategori serta halaman detail lengkap.
  - **Artikel / Blog (`/blog` & `/blog/{slug}`)**: Daftar artikel wawasan, kategori, estimasi waktu baca, serta pembaca artikel mendalam.
- **Data Layer Modular (`App\Data`)**: Konten katalog produk, layanan, dan artikel tersimpan dalam kelas data PHP terstruktur, sehingga template dapat langsung digunakan tanpa setup database awal dan sangat mudah dimigrasikan ke Eloquent ORM / database jika diperlukan.
- **SEO & Performa Siap Pakai**: Struktur semantic HTML5, Open Graph / Meta tags dinamis di setiap view, dan optimasi aset via Vite.

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
│   │   ├── DroneProducts.php     # Katalog data produk, spesifikasi, dan galeri
│   │   └── ServicesData.php      # Daftar solusi bisnis dan layanan armada
│   └── Http/Controllers/
│       ├── HomeController.php    # Logika controller halaman utama
│       ├── ServiceController.php # Controller katalog & detail layanan
│       └── BlogController.php    # Controller katalog & detail artikel
├── resources/
│   ├── css/
│   │   └── app.css               # Desain token, tema Tailwind v4, & custom typography
│   ├── js/
│   │   └── app.js                # Inisialisasi Alpine.js & global store (modal)
│   └── views/
│       ├── blog/                 # Halaman index & detail artikel blog
│       ├── components/           # Blade components (Navbar, Hero, Grid, Footer, Modal)
│       ├── layouts/              # Layout master (app.blade.php)
│       ├── services/             # Halaman index & detail layanan
│       └── home.blade.php        # Halaman muka (Homepage)
├── public/
│   └── images/                   # Asset gambar produk, logo, dan banner
├── routes/
│   └── web.php                   # Definisi route aplikasi web
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
- **Produk**: Buka `app/Data/DroneProducts.php` untuk mengubah judul, spesifikasi, harga, badge (`Baru`, `Unggulan`), serta path gambar.
- **Layanan**: Buka `app/Data/ServicesData.php` untuk mengatur kelompok layanan, poin kapabilitas, dan detail per layanan.
- **Artikel Blog**: Buka `app/Data/BlogArticles.php` untuk mengubah artikel, kategori, estimasi durasi baca, dan konten markdown/HTML.

#### Migrasi ke Database (Eloquent Model):
Jika proyek membutuhkan integrasi database dinamis:
1. Jalankan `php artisan make:model Product -mfs` (membuat Model, Migration, Factory, dan Seeder).
2. Pindahkan atribut dari `app/Data/DroneProducts.php` ke migration table `products`.
3. Ganti panggilan `DroneProducts::all()` pada controller dengan query Eloquent `Product::all()`.

### 4. Mengubah Navigasi & Footer
- **Navbar Links**: Edit `resources/views/components/navbar.blade.php` untuk mengubah menu utama, link dropdown, atau menambahkan tautan baru.
- **Footer Links & Kontak**: Edit `resources/views/components/footer.blade.php` untuk mengubah nomor kontak, email, alamat kantor, akun media sosial, dan tautan kebijakan privasi.

---

## 📐 Panduan Rasio & Dimensi Konten Gambar (Asset Aspect Ratios)

Agar tampilan visual tetap simetris, tajam, dan tidak terpotong secara tidak wajar pada berbagai ukuran layar (*responsive breakpoints*), gunakan panduan rasio aspek (*aspect ratio*) dan dimensi berikut saat mengganti atau menambahkan aset gambar baru:

### 1. Tabel Ringkasan Rasio Konten

| Komponen / Bagian | Rasio Aspek (*Ratio*) | Resolusi Optimal (*WxH*) | Format Disarankan | File Kode Terkait |
| :--- | :---: | :---: | :---: | :--- |
| **Hero Banner Slider** (Beranda) | **16:9** / **21:9** | `1920 × 1080 px` / `2560 × 1440 px` | WebP / JPG | `components/hero-banner.blade.php` |
| **Featured Product Grid** (2-Kolom) | **1:1** / **4:5** | `1200 × 1200 px` / `1000 × 1250 px` | WebP / PNG / JPG | `components/featured-hero-grid.blade.php` |
| **Layanan Solusi Bisnis** (3-Kolom Vertikal) | **9:16** / **2:3** | `1080 × 1920 px` / `1000 × 1500 px` | WebP / JPG | `components/services-section.blade.php` |
| **Layanan 3D Carousel** (Kartu Melayang) | **4:5** / **3:4** | `1000 × 1250 px` / `900 × 1200 px` | WebP / JPG | `components/services-section.blade.php` |
| **Bento Grid Layanan - Kartu Utama** | **4:5** / **1:1** | `1200 × 1500 px` / `1200 × 1200 px` | WebP / JPG | `views/services/index.blade.php` |
| **Bento Grid Layanan - Kartu Tumpuk** | **16:9** / **2:1** | `1200 × 675 px` / `1400 × 700 px` | WebP / JPG | `views/services/index.blade.php` |
| **Bento Grid Layanan - Kartu Armada** | **3:4** / **4:5** | `1000 × 1250 px` | WebP / JPG | `views/services/index.blade.php` |
| **Hero Header Layanan & Blog Detail** | **16:9** / **21:9** | `1920 × 1080 px` / `2560 × 1440 px` | WebP / JPG | `services/show.blade.php`, `blog/show.blade.php` |
| **Thumbnail Artikel Blog** (Grid 3-Kolom) | **16:9** / **3:2** | `1280 × 720 px` / `1200 × 800 px` | WebP / JPG | `components/latest-articles-section.blade.php` |
| **Hero Berita Utama** (Halaman Blog) | **16:9** / **4:3** | `1600 × 900 px` / `1600 × 1200 px` | WebP / JPG | `views/blog/index.blade.php` |
| **Thumbnail Modal Produk** (*Product Modal*) | **1:1** / **4:3** | `800 × 800 px` / `1000 × 1000 px` | WebP / PNG | `components/product-modal.blade.php` |
| **Avatar Penulis Artikel** (*Author Avatar*) | **1:1** (*Square*) | `200 × 200 px` / `400 × 400 px` | WebP / PNG / JPG | `app/Data/BlogArticles.php` |
| **Logo Brand** (Navbar & Footer) | **~3:1** s.d. **4:1** | `Tinggi 80 - 120 px` (Lebar proporsional) | SVG / PNG Transparan | `components/navbar.blade.php` |
| **Favicon / App Icon** | **1:1** (*Square*) | `32 × 32 px`, `192 × 192 px`, `512 × 512 px` | PNG / ICO / SVG | `public/favicon.ico` |

---

### 2. Penjelasan Detail & Aturan Komposisi (*Framing Guide*)

#### A. Hero Banner Slider (`hero-banner.blade.php`)
- **Rasio:** `16:9` (Landscape Layar Lebar) atau `21:9` (Cinematic Ultrawide).
- **Karakteristik Tampilan:** Mengisi seluruh tinggi layar (`100vh` dengan batasan `min-height: 640px` s.d. `max-height: 1080px`) menggunakan `object-cover`.
- **Komposisi & Safe Zone:** Pastikan objek utama (subjek drone/alat) berada di **area tengah 60-70% (*dead-center*)**. Pada layar smartphone, sisi kiri dan kanan gambar akan otomatis terpangkas (*cropped*) untuk mempertahankan tinggi vertikal penuh.

#### B. Showcase Produk 2-Kolom (`featured-hero-grid.blade.php`)
- **Rasio:** `1:1` (Bujur Sangkar / Kotak) atau `4:5` (Potret Studio).
- **Karakteristik Tampilan:** Kartu produk minimalis dengan latar belakang terang/putih dan efek hover interaktif.
- **Komposisi & Safe Zone:** Gunakan foto produk berlatar belakang bersih (studio putih/abu-abu muda atau transparan PNG). Sisakan ruang kosong (*padding*) di sekitar produk sebesar 15–20% agar saat kartu membesar saat di-hover (*scale effect*), produk tidak menabrak batas kartu.

#### C. Layanan Solusi Bisnis & 3D Swiper Carousel (`services-section.blade.php`)
- **Rasio:** 
  - Bagian 1 (3 Kolom): `9:16` atau `2:3` (Potret Vertikal Panjang).
  - Bagian 2 (Carousel Melayang): `4:5` atau `3:4` (Potret Berbingkai Bulat `rounded-[34px]`).
- **Komposisi & Safe Zone:** Kartu ini menggunakan lapisan gradasi gelap (*dark vignette overlay*) untuk menempatkan teks judul dan deskripsi putih di atasnya. Pastikan area bagian atas dan bawah gambar tidak terlalu padat elemen penting yang dapat mengganggu keterbacaan teks.

#### D. Katalog Layanan Bento Grid (`resources/views/services/index.blade.php`)
- **Rasio Bento:**
  - **Kartu Lebar Kiri (7 Kolom)**: `4:5` atau `1:1` (`1200 × 1500 px`). Ideal untuk foto vertikal sinematik resolusi tinggi.
  - **Kartu Tumpuk Kanan (5 Kolom)**: `16:9` atau `2:1` (`1200 × 675 px`). Ideal untuk lanskap pemetaan atau foto aksi horizontal.
  - **Kartu Baris Bawah (3 Kolom)**: `3:4` atau `4:5` (`1000 × 1250 px`).

#### E. Berita & Artikel Blog (`resources/views/blog/`)
- **Rasio Thumbnail:** `16:9` (Lanskap Standar Widescreen, `1280 × 720 px`).
- **Karakteristik Tampilan:** Menggunakan `aspect-ratio` lanskap untuk memudahkan perataan kisi (*grid alignment*) kartu berita 3-kolom.
- **Hero Detail Artikel:** Gambar pembuka di halaman baca artikel berdimensi maksimal `1000px` lebar dengan tinggi `540px` (rasio `16:9`), memberikan pengalaman membaca yang fokus dan editorial.
- **Avatar Penulis:** Wajib berbentuk rasio `1:1` bulat (*circular crop*).

#### F. Modal Spesifikasi Produk (`product-modal.blade.php`)
- **Rasio:** `1:1` (Kotak) atau `4:3`.
- **Karakteristik Tampilan:** Gambar drone ditampilkan di kolom kiri modal dengan sudut membulat `rounded-[20px]`.
- **Komposisi:** Gunakan gambar produk yang menampilkan unit secara utuh dari sudut diagonal 45° (*three-quarter angle*) dengan pencahayaan studio yang jelas.

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
