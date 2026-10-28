# Panduan Lengkap Konten Gambar (Image Asset Guide)
## Mechatron Indonesia - Drone Technology Ecosystem

Dokumen ini merupakan panduan resmi standar manajemen aset visual, rasio aspek (*aspect ratio*), resolusi optimal, inventaris file, dan tata cara penambahan gambar baru pada seluruh halaman dan komponen website **Mechatron**.

---

## 📑 Daftar Isi
1. [Inventaris Aset Gambar (`public/images/`)](#1-inventaris-aset-gambar-publicimages)
2. [Matriks Rasio Aspek & Resolusi per Halaman](#2-matriks-rasio-aspek--resolusi-per-halaman)
   - [A. Halaman Beranda (`/`)](#a-halaman-beranda-)
   - [B. Halaman Katalog Produk (`/products`)](#b-halaman-katalog-produk-products)
   - [C. Halaman Detail Produk & Galeri E-Commerce (`/products/{slug}`)](#c-halaman-detail-produk--galeri-e-commerce-productsslug)
   - [D. Halaman Layanan & Solusi (`/services`)](#d-halaman-layanan--solusi-services)
   - [E. Halaman Blog & Wawasan (`/blog`)](#e-halaman-blog--wawasan-blog)
   - [F. Halaman Perusahaan (`/about` & `/contact`)](#f-halaman-perusahaan-about--contact)
   - [G. Brand Identity Global (Logo & Favicon)](#g-brand-identity-global-logo--favicon)
3. [Panduan Komposisi & Safe Zone (Framing Rules)](#3-panduan-komposisi--safe-zone-framing-rules)
4. [Standar Format, Kompresi & Performa](#4-standar-format-kompresi--performa)
5. [Konvensi Penamaan & Panduan Menambah Gambar Baru](#5-konvensi-penamaan--panduan-menambah-gambar-baru)

---

## 1. Inventaris Aset Gambar (`public/images/`)

Berikut adalah daftar lengkap 27 file aset gambar lokal yang tersimpan di direktori `public/images/` beserta fungsi dan penempatannya di dalam aplikasi:

| Nama File | Ukuran File | Format | Subjek / Deskripsi Visual | Lokasi Penggunaan di Proyek |
| :--- | :---: | :---: | :--- | :--- |
| `mechatron_logo.png` | 66 KB | PNG | Logo resmi Mechatron berupa baling-baling drone biru | `navbar`, `footer`, `layouts/app` (favicon), avatar blog |
| `heromecha1.jpg` | 1.30 MB | JPG | Drone Mechatron Agri H-30 hovering di atas sawah hijau luas | Slide 1 Hero Banner Beranda, Galeri `agri-h30`, Galeri `cargo-c50` |
| `heromecha2.jpg` | 1.30 MB | JPG | Drone Mechatron Agri H-15 sudut diagonal dekat saat uji coba terbang | Slide 2 Hero Banner Beranda, Galeri `agri-h15` |
| `heromecha3.jpg` | 1.08 MB | JPG | Formasi armada drone pertanian di atas perkebunan nusantara | Slide 3 Hero Banner Beranda, Galeri `agras-t100`, Galeri `cargo-c50` |
| `featured_drone_h30.jpg` | 95 KB | JPG | Foto studio bersih unit Mechatron Agri H-30 (BMT-1525) | Kartu 1 Featured Grid Beranda, Thumbnail & Galeri `agri-h30`, Galeri aksesoris |
| `featured_drone_h15.jpg` | 159 KB | JPG | Foto studio bersih unit Mechatron Agri H-15 (BMT-1323) | Kartu 2 Featured Grid Beranda, Thumbnail & Galeri `agri-h15`, Galeri baling-baling |
| `agrikultur-drone-sunset.jpg` | 209 KB | JPG | Drone agrikultur terbang siluet dramatis berlatar senja keemasan | Slide 1 Hero Banner Produk (Agrikultur Series), Hero Ambient About Us, Blog #1 |
| `matrice-400-hero.png` | 800 KB | PNG | Drone fotografi sinematik resolusi tinggi dengan kamera 45MP | Slide 2 Hero Banner Produk (Fotografi Series), Thumbnail & Galeri `photo-m400` |
| `cargo_drone_c50.jpg` | 505 KB | JPG | Drone heavy-lift cargo pengiriman logistik dengan kait kargo | Slide 3 Hero Banner Produk (Pengiriman Series), Thumbnail & Galeri `cargo-c50` |
| `featured_combo_kit.jpg` | 117 KB | JPG | Hardcase enterprise koper box baterai, genset charger, & perlengkapan terbang | Slide 4 Hero Banner Produk (Suku Cadang), Thumbnail & Galeri `agri-combo-kit`, Galeri cadang |
| `smart_battery_b30.jpg` | 576 KB | JPG | Baterai cerdas Li-Po 30.000mAh berdensitas energi tinggi | Thumbnail & Galeri `smart-battery-b30`, Galeri `agri-h30`, Galeri `agras-t100` |
| `carbon_propellers.jpg` | 525 KB | JPG | Set baling-baling lipat serat karbon aerodinamis presisi | Thumbnail & Galeri `carbon-propeller-set`, Galeri `agri-h15` |
| `featured_remote_kit.jpg` | 165 KB | JPG | Remote controller pintar GCS dengan layar ultra-bright 7 inci | Thumbnail & Galeri `smart-controller-gcs`, Galeri `agri-h30`, Galeri `agri-h15`, Galeri M400 |
| `agras-t100.jpg` | 800 KB | JPG | Drone agrikultur hexacopter kapasitas ultra-besar di hamparan padi | Thumbnail & Galeri `agras-t100`, Galeri `agri-h30` |
| `agrikultur-drone-spraying.jpg` | 217 KB | JPG | Kabut atomisasi halus penyemprotan drone di atas kanopi daun padi | Hero Ambient Contact Us, Blog #2, Galeri `agri-h30` |
| `card_avata_360.jpg` | 134 KB | JPG | Drone inspeksi ruang sempit & indoor dengan pelindung propeler | Thumbnail `delivery-x10`, Galeri `photo-m400` |
| `avata_360_drone.jpg` | 61 KB | JPG | Close-up drone 360 sensor inspeksi infrastruktur | Galeri `delivery-x10`, Galeri `photo-m400` |
| `card_mic_mini_2s.jpg` | 123 KB | JPG | Perangkat audio transmitter nirkabel pilot & observer | Arsip aset pendukung |
| `service_pelatihan_pilot.jpg` | 213 KB | JPG | Foto asli instruktur & tim Mechatron praktik terbang drone lapangan (Gambar 1) | Layanan Pelatihan Pilot Drone (`ServicesData`, `services/index`, `services/show`) |
| `service_perawatan_drone.jpg` | 234 KB | JPG | Foto asli teknisi servis membongkar motherboard dan komponen drone (Gambar 2) | Layanan Perawatan Drone (`ServicesData`, `services/index`, `services/show`) |
| `service_sewa_drone.jpg` | 421 KB | JPG | Foto asli tim Mechatron & kelompok tani bersama drone BMT-14 di sawah (Gambar 3) | Layanan Sewa Drone (`ServicesData`, `services/index`, `services/show`) |
| `sertifikat_sni_alsintan.jpg` | 998 KB | JPG | Dokumen sertifikat resmi Standar Nasional Indonesia (SNI) & Alsintan Kementan RI | 3D Carousel Sertifikat Beranda (`certificates-section`) |
| `sertifikat_dkuppu_kemenhub.jpg` | 1.12 MB | JPG | Dokumen sertifikat kelaikan terbang sistem pesawat tanpa awak DKUPPU Kemenhub RI | 3D Carousel Sertifikat Beranda (`certificates-section`) |
| `sertifikat_fasi_pilot.jpg` | 1.04 MB | JPG | Dokumen sertifikat akreditasi akademi & lisensi remote pilot FASI | 3D Carousel Sertifikat Beranda (`certificates-section`) |
| `mechatron_kantor_gedung.jpg` | 83 KB | JPG | Foto tampak depan gedung kantor Mechatron (Summarecon Bandung) | Galeri Fasilitas About Us (`facility-gallery`, `pageflip-gallery`) |
| `mechatron_kantor_interior.jpg` | 99 KB | JPG | Foto interior lobi & ruang kantor PT Bandung Mekatronika Teknologi | Galeri Fasilitas About Us (`facility-gallery`, `pageflip-gallery`) |
| `mechatron_pabrik_gudang.jpg` | 119 KB | JPG | Foto area fasilitas gudang & workshop Mechatron | Galeri Fasilitas About Us (`facility-gallery`, `pageflip-gallery`) |
| `hq_heromecha1.jpg` s/d `hq_heromecha3.jpg` | ~1.3 MB | JPG | Versi resolusi tinggi tidak terkompresi dari slide hero | Master file cadangan |
| `orig_heromecha1.jpg` s/d `orig_heromecha3.jpg` | ~140 KB | JPG | Versi asli awal sebelum remastering resolusi | Master file cadangan |

---

## 2. Matriks Rasio Aspek & Resolusi per Halaman

### A. Halaman Beranda (`/`)

| Elemen UI | Rasio Aspek | Resolusi Disarankan | Format | Keterangan & CSS Styling |
| :--- | :---: | :---: | :---: | :--- |
| **Hero Banner Carousel** (`components/hero-banner.blade.php`) | **16:9** atau **21:9** | `1920 × 1080 px` s.d. `2560 × 1440 px` | WebP / JPG | Tampilan `100vh` (`object-cover`). Dilengkapi dark gradient overlay agar title & action buttons terbaca kontras. |
| **Featured Product Grid (2 Kolom)** (`components/featured-hero-grid.blade.php`) | **1:1** atau **4:5** | `1200 × 1200 px` s.d. `1200 × 1500 px` | WebP / PNG / JPG | Latar belakang putih/studio bersih dengan `object-contain` / `object-cover` dan hover scale zoom halus. |
| **Services Section (3-Kolom)** (`components/services-section.blade.php`) | **9:16** atau **2:3** | `1080 × 1920 px` s.d. `1000 × 1500 px` | WebP / JPG | Kartu vertikal tinggi dengan dark gradient overlay untuk menampung teks kapabilitas layanan di atasnya. |
| **Services Carousel Melayang** (`components/services-section.blade.php`) | **4:5** atau **3:4** | `1000 × 1250 px` | WebP / JPG | Sudut membulat modern `rounded-[34px]` dengan efek bayangan melayang (*floating shadow*). |
| **Artikel Wawasan Terbaru** (`components/latest-articles-section.blade.php`) | **16:9** | `1280 × 720 px` | WebP / JPG | Sudut `rounded-2xl`, rasio tetap `aspect-video` untuk keselarasan tinggi kartu 3 kolom. |

---

### B. Halaman Katalog Produk (`/products`)

| Elemen UI | Rasio Aspek | Resolusi Disarankan | Format | Keterangan & CSS Styling |
| :--- | :---: | :---: | :---: | :--- |
| **Product Hero Banner** (`components/product-hero-banner.blade.php`) | **16:9** atau **21:9** | `1920 × 1080 px` s.d. `2560 × 1440 px` | WebP / JPG | 4 Slide kategori (`Agrikultur Series`, `Survey & Pemetaan Series`, `Pengiriman Series`, `Suku Cadang`) dengan scroll indicator. |
| **Kartu Katalog Produk (Grid)** (`views/products/index.blade.php`) | **4:3** atau **1:1** | `1200 × 900 px` atau `1000 × 1000 px` | WebP / JPG / PNG | Ditampilkan dalam container `aspect-[4/3]`, latar belakang netral dengan efek zoom halus `group-hover:scale-105`. |

---

### C. Halaman Detail Produk & Galeri E-Commerce (`/products/{slug}`)

Halaman detail produk menggunakan galeri preview interaktif e-commerce tingkat lanjut:

| Elemen Galeri | Rasio Aspek | Resolusi Disarankan | Format | Keterangan & Fitur Interaksi |
| :--- | :---: | :---: | :---: | :--- |
| **Main Stage Preview** | **4:3** atau **1:1** | `1200 × 900 px` s.d. `1600 × 1200 px` | WebP / JPG / PNG | Panggung penampil utama dengan slide chevron, badge kapasitas/model, dan tombol perbesar lightbox. |
| **Thumbnail Strip Selector** | **1:1** (*Square*) | `160 × 160 px` s.d. `200 × 200 px` | WebP / JPG / PNG | Strip thumbnail horizontal scrollable di bawah panggung utama. Dilengkapi cincin biru aktif `ring-2 ring-[#0070D5]`. |
| **Fullscreen Lightbox Zoom** | **16:9** / **4:3** / **1:1** | `1920 × 1080 px` s.d. `2560 × 1440 px` | WebP / JPG / PNG | Modal layar penuh untuk inspeksi detail tekstur drone dengan tombol navigasi dan dismiss tombol ESC. |
| **Rekomendasi Produk Terkait** | **4:3** | `800 × 600 px` | WebP / JPG | Kartu grid mini di bagian bawah halaman detail. |

---

### D. Halaman Layanan & Solusi (`/services`)

| Elemen UI | Rasio Aspek | Resolusi Disarankan | Format | Keterangan & CSS Styling |
| :--- | :---: | :---: | :---: | :--- |
| **Ambient Hero Banner** (`views/services/index.blade.php`) | **16:9** | `1920 × 1080 px` | WebP / JPG | Menggunakan filter grayscale 25-30% dengan dark gradient overlay untuk menonjolkan tipografi putih. |
| **Bento Grid - Kartu Utama** | **4:5** atau **1:1** | `1200 × 1500 px` | WebP / JPG | Mengisi 7 kolom desktop, foto aksi drone di lapangan berskala luas. |
| **Bento Grid - Kartu Tumpuk** | **16:9** atau **2:1** | `1200 × 675 px` | WebP / JPG | Mengisi 5 kolom desktop, foto horizontal pemetaan / operasi sensor. |
| **Bento Grid - Kartu Armada** | **3:4** | `1000 × 1250 px` | WebP / JPG | Foto close-up unit armada operasional. |
| **Detail Fitur Layanan** (`views/services/show.blade.php`) | **16:9** | `1400 × 788 px` | WebP / JPG | Foto penjelasan teknis per modul kapabilitas bisnis. |

---

### E. Halaman Blog & Wawasan (`/blog`)

| Elemen UI | Rasio Aspek | Resolusi Disarankan | Format | Keterangan & CSS Styling |
| :--- | :---: | :---: | :---: | :--- |
| **Berita Utama / Hero Blog** (`views/blog/index.blade.php`) | **16:9** | `1600 × 900 px` | WebP / JPG | Kartu artikel unggulan teratas berdimensi besar. |
| **Thumbnail Kartu Artikel** (`views/blog/index.blade.php`) | **16:9** | `1280 × 720 px` | WebP / JPG | Grid 3 kolom teratur dengan rasio aspek standar video/widescreen. |
| **Gambar Sampul Baca Artikel** (`views/blog/show.blade.php`) | **16:9** atau **21:9** | `1600 × 900 px` | WebP / JPG | Gambar tajuk artikel pembuka dengan `max-w-4xl` dan sudut `rounded-3xl`. |
| **Avatar Penulis** (`app/Data/BlogArticles.php`) | **1:1** (*Square*) | `200 × 200 px` | WebP / PNG | Dipotong bulat sempurna `rounded-full`. |

---

### F. Halaman Perusahaan (`/about` & `/contact`)

| Elemen UI | Rasio Aspek | Resolusi Disarankan | Format | Keterangan & CSS Styling |
| :--- | :---: | :---: | :---: | :--- |
| **Hero Ambient About Us** (`views/about.blade.php`) | **16:9** | `1920 × 1080 px` | WebP / JPG | Grayscale 30% dengan lapisan hitam `from-neutral-950/80`. |
| **Cool Slide Gallery Fasilitas & Pabrik** (`components/facility-gallery.blade.php`) | **16:9** | `1920 × 1080 px` | JPG / WebP | Slider interaktif Alpine.js dengan progress timer, tab kategori, thumbnail strip, dan modal fullscreen lightbox. |
| **Hero Ambient Contact Us** (`views/contact.blade.php`) | **16:9** | `1920 × 1080 px` | WebP / JPG | Grayscale 25% dengan lapisan gradasi gelap. |

---

### G. Brand Identity Global (Logo & Favicon)

| Aset | Rasio Aspek | Resolusi Standar | Format File | File Blade Terkait |
| :--- | :---: | :---: | :---: | :--- |
| **Logo Navbar Utama** | **3:1** s.d. **4:1** | Tinggi: `64 - 80 px` (Lebar proporsional) | PNG Transparan / SVG | `components/navbar.blade.php` |
| **Logo Footer** | **3:1** s.d. **4:1** | Tinggi: `64 - 80 px` | PNG Transparan / SVG | `components/footer.blade.php` |
| **Favicon Browser** | **1:1** | `32 × 32 px`, `64 × 64 px`, `180 × 180 px` | ICO / PNG / SVG | `layouts/app.blade.php` |

---

## 3. Panduan Komposisi & Safe Zone (Framing Rules)

Untuk memastikan gambar terlihat profesional dan tidak terpotong canggung (*awkward crop*) pada berbagai resolusi perangkat (HP, Tablet, Laptop, Monitor Ultra-Wide), ikuti 3 aturan komposisi berikut:

```
+--------------------------------------------------------------+
|                          TOP ZONE                            |
|             (Tempat Navigasi, Judul, & Tagline)              |
+--------------------------------------------------------------+
|     SAFE      |                                |    SAFE     |
|    MARGIN     |         FOCAL POINT            |   MARGIN    |
|   (15-20%)    |      (Objek Utama Drone)       |  (15-20%)   |
|               |         DI AREA TENGAH         |             |
+--------------------------------------------------------------+
|                        BOTTOM ZONE                           |
|         (Tempat Tombol WhatsApp, Ticker, Scroll Icon)        |
+--------------------------------------------------------------+
```

1. **Aturan Safe Zone Hero Banner (Tengah 60-70%)**:
   - Pada layar smartphone vertikal (*portrait*), sisi kiri dan kanan banner lanskap akan terpangkas otomatis oleh CSS `object-cover`.
   - **Wajib**: Posisikan bodi drone, baling-baling, dan titik fokus utama tepat di area tengah (*horizontal center*).
   - Sisakan ruang bernafas di sepertiga atas (untuk teks judul & tagline) dan sepertiga bawah (untuk indikator scroll & navigasi).

2. **Aturan Foto Studio Produk (Padding Margin 15-20%)**:
   - Jangan memotong gambar produk tepat di tepi baling-baling (*zero padding*).
   - Sisakan ruang kosong bersih (*negative space*) sebesar 15–20% di sekeliling bodi drone agar saat kartu di-hover (`group-hover:scale-105`), ujung baling-baling tidak menabrak batas kartu.

3. **Kontras & Keterbacaan Teks (Background Darkening)**:
   - Jika gambar ditempatkan sebagai latar belakang teks putih, pastikan gambar memiliki tone gelap alami atau gunakan utility overlay gradasi seperti `bg-gradient-to-b from-black/70 via-black/30 to-black/80`.

---

## 4. Standar Format, Kompresi & Performa

Untuk menjaga skor **Google PageSpeed Insights** tetap di atas 90+, terapkan standar optimasi berikut:

### Rekomendasi Format File:
- **Foto Realistis / Lanskap / Drone**: Gunakan format modern **WebP** (atau JPG teroptimasi dengan kualitas 82–85%).
- **Foto Produk Latar Belakang Transparan**: Gunakan format **WebP** atau **PNG-24**.
- **Ikon, Grafis Vektor & Logo**: Gunakan format **SVG** (vektor tanpa penurunan resolusi) atau **PNG** tajam.

### Batas Maksimum Ukuran File (*File Size Budgets*):
- **Hero Fullscreen Banner**: Maksimal **400 KB – 700 KB**.
- **Foto Panggung Detail Produk**: Maksimal **250 KB – 400 KB**.
- **Thumbnail Kartu Grid**: Maksimal **100 KB – 180 KB**.
- **Ikon & Logo**: Maksimal **< 50 KB**.

### Alat Kompresi yang Direkomendasikan:
1. **[Squoosh.app](https://squoosh.app)** (Google) — Gratis, dapat langsung melihat perbandingan visual sebelum dan sesudah kompresi ke format WebP.
2. **[TinyPNG / TinyJPG](https://tinypng.com)** — Kompresi batch tanpa kehilangan detail penting.
3. **CLI ImageMagick / cwebp**:
   ```bash
   cwebp -q 85 input.jpg -o output.webp
   ```

---

## 5. Konvensi Penamaan & Panduan Menambah Gambar Baru

### Standar Penamaan File (*Naming Convention*):
Gunakan huruf kecil (*lowercase*) yang dipisahkan dengan tanda hubung (*kebab-case*) atau garis bawah (*snake_case*) dengan awalan (*prefix*) kategori:

- Hero Banner: `hero_[nama_model].jpg` (contoh: `hero_agri_h30.jpg`, `hero_cargo_c50.jpg`)
- Thumbnail Produk: `product_[nama_model]_thumb.jpg` (contoh: `product_agri_h30_thumb.jpg`)
- Galeri Detail Produk: `product_[nama_model]_angle[1-5].jpg` (contoh: `product_h30_angle1.jpg`, `product_h30_angle2.jpg`)
- Artikel Blog: `blog_[topik_singkat].jpg` (contoh: `blog_uji_coba_karawang.jpg`)
- Suku Cadang: `part_[nama_item].jpg` (contoh: `part_propeller_carbon.jpg`)

### Langkah Menambahkan Gambar Baru ke Proyek:

1. **Simpan File di Direktori Publik**:
   Salin file gambar yang sudah dikompresi ke direktori:
   ```text
   public/images/nama-gambar-anda.webp
   ```

2. **Daftarkan pada Data Model / Array Data**:
   - Untuk produk & galeri: Buka [DroneProducts.php](file:///d:/deka-app/mechatron-lrvl/app/Data/DroneProducts.php) dan masukkan path:
     ```php
     'image' => '/images/nama-gambar-anda.webp',
     'gallery' => [
         '/images/nama-gambar-anda.webp',
         '/images/nama-gambar-sudut2.webp',
         '/images/nama-gambar-sudut3.webp',
     ],
     ```
   - Untuk layanan: Buka [ServicesData.php](file:///d:/deka-app/mechatron-lrvl/app/Data/ServicesData.php).
   - Untuk artikel: Buka [BlogArticles.php](file:///d:/deka-app/mechatron-lrvl/app/Data/BlogArticles.php).

3. **Pemanggilan pada Template Blade**:
   Gunakan helper Laravel `asset()`:
   ```blade
   <img 
       src="{{ asset('images/nama-gambar-anda.webp') }}" 
       alt="Deskripsi Alternatif untuk SEO" 
       class="w-full h-full object-cover"
       loading="lazy"
   />
   ```

4. **Kompilasi Ulang Aset**:
   Jalankan build Vite untuk memastikan seluruh manifest terbarui:
   ```bash
   npm run build
   ```
