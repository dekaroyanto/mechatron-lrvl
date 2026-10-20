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
