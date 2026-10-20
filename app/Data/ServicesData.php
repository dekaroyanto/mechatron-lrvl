<?php

namespace App\Data;

class ServicesData
{
    public static function all(): array
    {
        return [
            'agrikultur' => [
                'id' => 'agrikultur',
                'slug' => 'agrikultur',
                'path' => '/services/agrikultur',
                'group' => 'Teknologi Baru Untuk Bisnis Anda',
                'groupSubtitle' => 'Layanan Solusi Bisnis & Proyek',
                'category' => 'Smart Agriculture & Farming',
                'title' => 'Agrikultur',
                'headline' => 'Solusi Pertanian Pintar & Penyemprotan Presisi',
                'tagline' => 'Penyemprotan Pupuk, Pestisida Otonom & Analisis Kesehatan Tanaman dengan Drone Berkapasitas Besar',
                'description' => 'Layanan drone pertanian pintar untuk penyemprotan pupuk, pestisida, dan pemantauan kesehatan tanaman secara presisi dan efisien.',
                'longDescription' => 'Mechatron menghadirkan ekosistem pertanian modern berbasis drone untuk meningkatkan hasil panen dan efisiensi biaya perkebunan serta sawah. Menggunakan drone berkapasitas tangki besar (Mechatron Agri H-30 dan H-15) yang dilengkapi nozel sentrifugal atomisasi halus, proses penyemprotan pupuk cair dan pestisida dilakukan secara otonom dengan cakupan merata, hemat air hingga 90%, dan 40 kali lebih cepat daripada metode manual.',
                'image' => '/images/agrikultur-drone-sunset.jpg',
                'highlights' => [
                    [
                        'stat' => '30 Liter',
                        'title' => 'Kapasitas Muatan Besar',
                        'desc' => 'Tangki semprot bervolume tinggi sanggup mencakup hingga 16–20 hektar lahan per jam operasional.',
                    ],
                    [
                        'stat' => '90% Hemat Air',
                        'title' => 'Atomisasi Sentrifugal Mikro',
                        'desc' => 'Ukuran tetesan kabut presisi 50–300 mikron menempel sempurna pada daun tanpa tetesan terbuang ke tanah.',
                    ],
                    [
                        'stat' => 'RTK Sentimeter',
                        'title' => 'Navigasi Jalur Otonom',
                        'desc' => 'Terbang mandiri mengikuti kontur bukit dengan radar penghindar rintangan 360° dan sensor terrain-follow.',
                    ],
                    [
                        'stat' => 'Analisis NDVI',
                        'title' => 'Peta Kesehatan Tanaman',
                        'desc' => 'Identifikasi area tanaman stres, kekurangan nutrisi, atau terserang hama sebelum kerusakan meluas.',
                    ],
                ],
                'deepFeatures' => [
                    [
                        'tag' => 'Efisiensi Lahan Skala Besar',
                        'title' => 'Solusi Cerdas untuk Perkebunan Sawit, Padi, dan Hortikultura',
                        'description' => 'Metode manual tradisional membutuhkan puluhan tenaga kerja dan rentan paparan bahan kimia beracun. Drone Agrikultur Mechatron melindungi kesehatan pekerja sekaligus menyelesaikan penyemprotan ratusan hektar dalam hitungan hari.',
                        'image' => 'https://images.unsplash.com/photo-1508614589041-895b88991e3e?auto=format&fit=crop&w=1200&q=85',
                        'bullets' => [
                            'Downwash baling-baling membalikkan dedaunan sehingga obat menempel di kedua sisi daun',
                            'Kalibrasi dosis presisi otomatis sesuai kecepatan terbang',
                            'Kompatibel untuk penyemprotan herbisida, fungisida, dan pupuk daun',
                        ],
                    ],
                    [
                        'tag' => 'Pemetaan Multispektral',
                        'title' => 'Pertanian Presisi Berbasis Data Spektral Ilmiah',
                        'description' => 'Selain penyemprotan, kami menyediakan layanan pemetaan multispektral untuk menghitung populasi pohon, mengukur indeks vegetasi (NDVI/NDRE), dan menentukan zona pemupukan terarah.',
                        'image' => 'https://images.unsplash.com/photo-1506947411487-a56738267384?auto=format&fit=crop&w=1200&q=85',
                        'bullets' => [
                            'Deteksi dini penyakit daun dan kekurangan nitrogen',
                            'Peta resep pemupukan variabel (Variable Rate Application)',
                            'Perhitungan jumlah tegakan pohon kelapa sawit secara otomatis',
                        ],
                    ],
                ],
                'workflow' => [
                    [
                        'step' => '01',
                        'title' => 'Survei Batas Lahan',
                        'desc' => 'Pemetaan batas bidang tanah dan penetapan titik rintangan (tiang, pohon tinggi) menggunakan remote RTK.',
                    ],
                    [
                        'step' => '02',
                        'title' => 'Formulasi & Dosis',
                        'desc' => 'Penentuan dosis larutan per hektar dan ukuran droplet semprot sesuai rekomendasi agronomis.',
                    ],
                    [
                        'step' => '03',
                        'title' => 'Penerbangan Otonom',
                        'desc' => 'Drone terbang secara otomatis mengikuti rute presisi dengan pemantauan realtime kecepatan dan aliran cairan.',
                    ],
                    [
                        'step' => '04',
                        'title' => 'Laporan Cakupan',
                        'desc' => 'Pemberian log data penerbangan, peta cakupan area semprot, dan volume larutan yang telah diaplikasikan.',
                    ],
                ],
                'specs' => [
                    ['label' => 'Armada yang Digunakan', 'value' => 'Mechatron Agri H-30 (30L) & Agri H-15 (15L)'],
                    ['label' => 'Lebar Semprotan Efektif', 'value' => '7 hingga 11 Meter'],
                    ['label' => 'Kapasitas Kerja', 'value' => 'Hingga 16–20 Hektar/Jam'],
                    ['label' => 'Sistem Penghindar Rintangan', 'value' => 'Radar Omnidirectional Aktif & Kamera FPV Depan/Belakang'],
                    ['label' => 'Ketahanan Air', 'value' => 'Rating IPX6K (Tahan Cuci Semprotan Air)'],
                    ['label' => 'Waktu Pengisian Baterai', 'value' => '9–12 Menit dengan Smart Fast Charger Generator'],
                ],
                'faqs' => [
                    [
                        'q' => 'Apakah layanan Agrikultur melayani lahan sawah dan perkebunan berbukit?',
                        'a' => 'Ya. Drone Mechatron dilengkapi sensor Terrain-Following Radar yang otomatis menyesuaikan ketinggian terbang secara konstan di atas tanaman pada lereng hingga kemiringan 30 derajat.',
                    ],
                    [
                        'q' => 'Berapa minimal luasan lahan untuk menggunakan jasa semprot drone?',
                        'a' => 'Kami melayani luasan mulai dari kelompok tani 10 hektar hingga kontrak perkebunan korporat ribuan hektar.',
                    ],
                ],
            ],
            'fotografi' => [
                'id' => 'fotografi',
                'slug' => 'fotografi',
                'path' => '/services/fotografi',
                'group' => 'Teknologi Baru Untuk Bisnis Anda',
                'groupSubtitle' => 'Layanan Solusi Bisnis & Proyek',
                'category' => 'Creative Aerial & Media',
                'title' => 'Fotografi',
                'headline' => 'Dokumentasi Udara Kualitas Sinematik',
                'tagline' => 'Abadikan Sudut Pandang Terbaik dari Udara dengan Presisi 50MP & 4K Sinematik',
                'description' => 'Layanan fotografi drone profesional untuk mendokumentasikan acara, properti, dan proyek kreatif dengan kualitas terbaik.',
                'longDescription' => 'Mechatron menghadirkan layanan dokumentasi udara kelas sinematik berstandar broadcast untuk berbagai kebutuhan komersial, periklanan, arsitektur, event skala besar, hingga profil korporat. Didukung pilot berlisensi resmi FASI dan armada drone berteknologi gimbal 3-axis ultra stabil, setiap tangkapan visual disajikan dalam resolusi tinggi dengan akurasi komposisi dan grading warna berstandar sinema.',
                'image' => 'https://images.unsplash.com/photo-1533063319369-0de118afe00a?q=80&w=1221&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=NHwxMjA3fDA%3D',
                'highlights' => [
                    [
                        'stat' => '50MP RAW',
                        'title' => 'Resolusi Gambar Maksimal',
                        'desc' => 'Sensor CMOS 1-inci dan dynamic range tinggi untuk detail foto tajam dalam segala kondisi pencahayaan.',
                    ],
                    [
                        'stat' => '4K / 60fps',
                        'title' => 'Perekaman Sinematik HDR',
                        'desc' => 'Video 10-bit D-Log M dengan bitrate tinggi untuk fleksibilitas color grading profesional.',
                    ],
                    [
                        'stat' => 'FASI Certified',
                        'title' => 'Pilot Berlisensi Resmi',
                        'desc' => 'Dioperasikan oleh pilot berlisensi resmi dengan standar keselamatan terbang ketat dan izin regulasi.',
                    ],
                    [
                        'stat' => '3-Axis Gimbal',
                        'title' => 'Stabilisasi Ultra Halus',
                        'desc' => 'Pergerakan kamera mekanis presisi memastikan rekaman bebas guncangan meski menghadapi hembusan angin.',
                    ],
                ],
                'deepFeatures' => [
                    [
                        'tag' => 'Kualitas Gambar Flagship',
                        'title' => 'Visual Mengagumkan untuk Profil Perusahaan & Portofolio Proyek',
                        'description' => 'Kami memahami bahwa setiap proyek memiliki cerita unik. Kamera drone profesional kami menangkap keindahan arsitektur, progres konstruksi, serta kemeriahan acara dengan ketajaman warna alami dan kontras dinamis.',
                        'image' => 'https://images.unsplash.com/photo-1508614589041-895b88991e3e?auto=format&fit=crop&w=1200&q=85',
                        'bullets' => [
                            'Dukungan format foto DNG RAW dan video ProRes / H.265',
                            'Kombinasi angle low-altitude hingga pemandangan luas lanskap kota',
                            'Optimalisasi pemotretan golden hour (sunrise & sunset)',
                        ],
                    ],
                    [
                        'tag' => 'Keamanan & Kepatuhan Regulasi',
                        'title' => 'Prosedur Penerbangan Legal, Aman, dan Terencana',
                        'description' => 'Keselamatan adalah prioritas nomor satu. Seluruh operasional penerbangan Mechatron mematuhi regulasi ruang udara Indonesia (KKOP) dan dilengkapi asuransi operasional komprehensif.',
                        'image' => 'https://images.unsplash.com/photo-1527977966376-1c8408f9f108?auto=format&fit=crop&w=1200&q=85',
                        'bullets' => [
                            'Pengecekan pra-terbang (Pre-flight Inspection Protocol)',
                            'Pengurusan Notam dan perizinan navigasi ruang udara',
                            'Sistem redundansi sensor tabrakan omnidirectional 360°',
                        ],
                    ],
                ],
                'workflow' => [
                    [
                        'step' => '01',
                        'title' => 'Konsultasi & Briefing',
                        'desc' => 'Diskusi kebutuhan visual, lokasi pengambilan gambar, dan target output yang Anda inginkan.',
                    ],
                    [
                        'step' => '02',
                        'title' => 'Perizinan & Jadwal',
                        'desc' => 'Pengecekan koordinat ruang udara, persiapan izin terbang, dan penentuan waktu cuaca terbaik.',
                    ],
                    [
                        'step' => '03',
                        'title' => 'Pengambilan Gambar',
                        'desc' => 'Eksekusi penerbangan di lokasi dengan pilot berpengalaman dan pemantauan realtime via monitor lapangan.',
                    ],
                    [
                        'step' => '04',
                        'title' => 'Editing & Delivery',
                        'desc' => 'Proses kurasi foto/video, color grading, dan pengiriman master file beresolusi penuh melalui cloud.',
                    ],
                ],
                'specs' => [
                    ['label' => 'Sensor Kamera', 'value' => '1-inch / Micro 4/3 CMOS Sensor'],
                    ['label' => 'Resolusi Foto', 'value' => 'Hingga 50 Megapixel RAW (DNG)'],
                    ['label' => 'Resolusi Video', 'value' => '4K UHD hingga 60fps / 10-bit D-Log M'],
                    ['label' => 'Durasi Terbang per Baterai', 'value' => 'Hingga 40-45 Menit'],
                    ['label' => 'Daya Tahan Angin', 'value' => 'Hingga 12 m/s (Level 6)'],
                    ['label' => 'Lisensi Pilot', 'value' => 'Sertifikasi Resmi FASI & DKUPPU'],
                    ['label' => 'Cakupan Layanan', 'value' => 'Seluruh Wilayah Indonesia'],
                ],
                'faqs' => [
                    [
                        'q' => 'Berapa lama proses pengerjaan dan pengiriman file hasil foto/video?',
                        'a' => 'File mentah (RAW) dapat diserahkan langsung di hari yang sama setelah sesi terbang. Untuk paket yang mencakup kurasi dan editing/color grading, estimasi pengiriman adalah 2–4 hari kerja.',
                    ],
                    [
                        'q' => 'Bagaimana jika cuaca buruk (hujan deras atau angin kencang) pada hari H?',
                        'a' => 'Tim kami selalu memantau prakiraan cuaca satelit H-1. Jika terjadi cuaca ekstrem yang membahayakan penerbangan, jadwal dapat dijadwalkan ulang tanpa biaya penalti.',
                    ],
                    [
                        'q' => 'Apakah layanan ini sudah mencakup pilot dan izin terbang?',
                        'a' => 'Ya, seluruh layanan Mechatron sudah termasuk pilot berlisensi FASI resmi, asisten keselamatan (visual observer), armada drone, serta asistensi koordinasi perizinan wilayah terbang setempat.',
                    ],
                ],
            ],
            'lidar' => [
                'id' => 'lidar',
                'slug' => 'lidar',
                'path' => '/services/lidar',
                'group' => 'Teknologi Baru Untuk Bisnis Anda',
                'groupSubtitle' => 'Layanan Solusi Bisnis & Proyek',
                'category' => 'Geospatial & Surveying',
                'title' => 'LiDAR',
                'headline' => 'Pemetaan Presisi Tinggi Point Cloud 3D',
                'tagline' => 'Survei Topografi Presisi Sentimeter dengan Penetrasi Kanopi dan Integrasi RTK',
                'description' => 'Layanan pemetaan dan survei LiDAR berpresisi tinggi untuk topografi, infrastruktur, dan aplikasi lingkungan',
                'longDescription' => 'Teknologi LiDAR (Light Detection and Ranging) udara Mechatron dirancang untuk memetakan kondisi permukaan bumi secara akurat bahkan di area vegetasi lebat sekalipun. Dengan memancarkan ratusan ribu denyut laser per detik, sistem kami menghasilkan model elevasi Digital Terrain Model (DTM) dan Digital Surface Model (DSM) berkualifikasi geospasial tinggi untuk rekayasa konstruksi, kehutanan, perkebunan, dan pertambangan.',
                'image' => 'https://images.unsplash.com/photo-1506947411487-a56738267384?auto=format&fit=crop&w=1400&q=85',
                'highlights' => [
                    [
                        'stat' => '±2-5 cm',
                        'title' => 'Akurasi Vertikal & Horizontal',
                        'desc' => 'Koreksi data koordinat secara presisi dengan GNSS RTK dan stasiun pangkalan diferensial.',
                    ],
                    [
                        'stat' => '240k pts/s',
                        'title' => 'Kerapatan Titik Tinggi',
                        'desc' => 'Menghasilkan kerapatan point cloud rapat untuk visualisasi 3D topografi permukaan secara detail.',
                    ],
                    [
                        'stat' => 'Multi-Echo',
                        'title' => 'Penetrasi Kanopi Lebat',
                        'desc' => 'Sinar laser mampu menembus dedaunan lebat untuk memetakan kontur tanah asli (bare-earth DTM).',
                    ],
                    [
                        'stat' => 'CAD & GIS Ready',
                        'title' => 'Format Standar Industri',
                        'desc' => 'Hasil langsung kompatibel dengan AutoCAD, ArcGIS, QGIS, Global Mapper, dan Civil 3D.',
                    ],
                ],
                'deepFeatures' => [
                    [
                        'tag' => 'Ketepatan Rekayasa Geospasial',
                        'title' => 'Pemodelan 3D Topografi Cepat dan Akurat',
                        'description' => 'Berbeda dengan fotogrametri biasa, sensor LiDAR Mechatron mampu mengukur jarak langsung menggunakan sinar laser aktif. Hasilnya adalah data ketinggian tanpa distorsi perspektif, ideal untuk perhitungan volume cut-and-fill dan desain jalur infrastruktur.',
                        'image' => 'https://images.unsplash.com/photo-1516849841032-87cbac4d88f7?auto=format&fit=crop&w=1200&q=85',
                        'bullets' => [
                            'Model kontur tanah dengan interval hingga 0.5 meter',
                            'Deteksi cepat rekahan lereng dan potensi longsor',
                            'Analisis hidrologi, Daerah Aliran Sungai (DAS), dan limpasan air',
                        ],
                    ],
                    [
                        'tag' => 'Efisiensi Area Luas',
                        'title' => 'Cakupan Ratusan Hektar dalam Hitungan Hari',
                        'description' => 'Menggantikan metode survei konvensional terestrial yang memakan waktu berminggu-minggu di medan berat. Survei LiDAR drone Mechatron menghemat hingga 80% waktu pengerjaan lapangan dengan keamanan kru yang terjamin.',
                        'image' => 'https://images.unsplash.com/photo-1506947411487-a56738267384?auto=format&fit=crop&w=1200&q=85',
                        'bullets' => [
                            'Efektif untuk area pertambangan, corridor mapping jalan, dan perkebunan sawit',
                            'Dilengkapi kontrol tanah Ground Control Points (GCP) terikat jaring BIG',
                            'Laporan verifikasi akurasi independen (Accuracy Assessment Report)',
                        ],
                    ],
                ],
                'workflow' => [
                    [
                        'step' => '01',
                        'title' => 'Analisis Area & GCP',
                        'desc' => 'Penentuan batas area survei (AOI) dan pemasangan titik kontrol tanah (GCP/ICP) berstandar geodesi.',
                    ],
                    [
                        'step' => '02',
                        'title' => 'Penerbangan LiDAR',
                        'desc' => 'Akuisisi data laser scanner dan foto udara geotagged menggunakan drone khusus survei terkalibrasi.',
                    ],
                    [
                        'step' => '03',
                        'title' => 'Post-Processing Trajektori',
                        'desc' => 'Pengolahan lintasan PPK/RTK dengan software INS untuk menghitung titik koordinat presisi tinggi.',
                    ],
                    [
                        'step' => '04',
                        'title' => 'Klasifikasi & Output',
                        'desc' => 'Klasifikasi point cloud menjadi Ground, Vegetasi, dan Bangunan, serta ekspor format LAS, DTM, dan DWG.',
                    ],
                ],
                'specs' => [
                    ['label' => 'Sensor LiDAR', 'value' => 'High-grade Multi-Echo Laser Scanner'],
                    ['label' => 'Tingkat Titik Laser', 'value' => 'Hingga 240.000 denyut/detik'],
                    ['label' => 'Akurasi Sistem', 'value' => 'Horizontal: 5 cm, Vertikal: 3-5 cm'],
                    ['label' => 'Output Format', 'value' => 'LAS, LAZ, GeoTIFF, DEM/DTM/DSM, DXF, SHP'],
                    ['label' => 'Sistem Referensi Koordinat', 'value' => 'WGS84 UTM / DGN95 / SRGI 2013'],
                    ['label' => 'Kamera Tambahan', 'value' => 'RGB Sensor Terintegrasi untuk True Color Point Cloud'],
                ],
                'faqs' => [
                    [
                        'q' => 'Apa perbedaan utama antara LiDAR dan Pemetaan Fotogrametri biasa?',
                        'a' => 'Fotogrametri menggunakan foto kamera dan tidak bisa menembus tajuk pohon lebat. LiDAR menggunakan denyut laser aktif yang dapat menyusup di sela vegetasi sehingga mampu menghasilkan kontur tanah asli (DTM) dengan akurasi teruji.',
                    ],
                    [
                        'q' => 'Berapa kapasitas luasan yang dapat disurvei dalam 1 hari kerja?',
                        'a' => 'Rata-rata 100 hingga 300 hektar per hari tergantung kondisi topografi, jarak antar jalur terbang, dan regulasi lokal.',
                    ],
                ],
            ],
            'sewadrone' => [
                'id' => 'sewadrone',
                'slug' => 'sewadrone',
                'path' => '/services/sewadrone',
                'group' => 'Teknologi Terkini Di Layanan Kami.',
                'groupSubtitle' => 'Ekosistem Rental & Sertifikasi',
                'category' => 'Fleet Rental & Equipment',
                'title' => 'Sewa Drone',
                'headline' => 'Armada Profesional Siap Pakai',
                'tagline' => 'Fleksibilitas Sewa Harian, Mingguan, dan Bulanan dengan Dukungan Unit Prima',
                'description' => 'Sewa drone untuk pengguna profesional dengan pilihan spesifikasi yang sesuai kebutuhan kerja Anda',
                'longDescription' => 'Kebutuhan proyek seringkali membutuhkan drone berspesifikasi khusus tanpa harus mengeluarkan investasi kapital besar di awal. Mechatron menyediakan rental armada drone terlengkap — mulai dari drone pertanian berkapasitas tangki besar (Mechatron Agri H-30 & H-15) hingga drone pemetaan enterprise — lengkap dengan set baterai cadangan, generator, dan opsi operator standby.',
                'image' => 'https://images.unsplash.com/photo-1473968512647-3e447244af8f?auto=format&fit=crop&w=1400&q=85',
                'highlights' => [
                    [
                        'stat' => 'Ready Fleet',
                        'title' => 'Armada Selalu Siap',
                        'desc' => 'Unit terawat secara berkala dengan performa baterai 100% prima dan firmware terbaru.',
                    ],
                    [
                        'stat' => 'Paket Lengkap',
                        'title' => 'Aksesoris & Charger',
                        'desc' => 'Setiap unit disewa lengkap dengan remote display, minimal 3 baterai cadangan, dan smart fast charger.',
                    ],
                    [
                        'stat' => 'Opsi Pilot',
                        'title' => 'Dengan / Tanpa Operator',
                        'desc' => 'Pilihan sewa unit saja (Dry Rental) atau didampingi pilot profesional berpengalaman (Wet Rental).',
                    ],
                    [
                        'stat' => 'Backup Unit',
                        'title' => 'Jaminan Kelancaran',
                        'desc' => 'Dukungan unit pengganti jika terjadi kendala teknis di lapangan selama masa sewa berlangsung.',
                    ],
                ],
                'deepFeatures' => [
                    [
                        'tag' => 'Efisiensi Biaya Operasional',
                        'title' => 'Skema Fleksibel untuk Segala Skala Kebutuhan Proyek',
                        'description' => 'Hemat anggaran belanja modal perusahaan Anda. Dapatkan teknologi drone mutakhir untuk musim tanam, proyek survei periodik, atau kebutuhan pemotretan komersial dengan skema sewa terukur.',
                        'image' => 'https://images.unsplash.com/photo-1527977966376-1c8408f9f108?auto=format&fit=crop&w=1200&q=85',
                        'bullets' => [
                            'Sewa Harian untuk kebutuhan produksi video & event singkat',
                            'Sewa Mingguan untuk proyek survei dan pemetaan berkala',
                            'Kontrak Bulanan / Musiman untuk perkebunan kelapa sawit & pertanian padi',
                        ],
                    ],
                    [
                        'tag' => 'Dukungan Lapangan Penuh',
                        'title' => 'Didampingi Teknisi Berpengalaman & Baterai Melimpah',
                        'description' => 'Kami memastikan drone Anda siap bekerja seharian penuh. Dilengkapi genset fast charging berkekuatan tinggi untuk memastikan siklus terbang terus berputar tanpa jeda baterai habis.',
                        'image' => 'https://images.unsplash.com/photo-1508614589041-895b88991e3e?auto=format&fit=crop&w=1200&q=85',
                        'bullets' => [
                            'Penggantian propeller cadangan dan kotak penyimpanan tahan benturan (hardcase)',
                            'Briefing singkat pengoperasian dan keselamatan bagi tim Anda',
                            'Layanan antar-jemput armada langsung ke lokasi proyek',
                        ],
                    ],
                ],
                'workflow' => [
                    [
                        'step' => '01',
                        'title' => 'Pilih Unit & Durasi',
                        'desc' => 'Konsultasikan jenis pekerjaan Anda untuk mendapatkan rekomendasi model drone yang paling tepat.',
                    ],
                    [
                        'step' => '02',
                        'title' => 'Verifikasi & Kontrak',
                        'desc' => 'Proses verifikasi dokumen legalitas perusahaan/individu serta penandatanganan perjanjian sewa.',
                    ],
                    [
                        'step' => '03',
                        'title' => 'Pengambilan / Pengiriman Unit',
                        'desc' => 'Pengecekan fisik unit bersama (Joint Inspection) dan pengujian fungsi sebelum dibawa ke lapangan.',
                    ],
                    [
                        'step' => '04',
                        'title' => 'Dukungan Penuh & Pengembalian',
                        'desc' => 'Dukungan teknis standby selama masa sewa dan proses checkout mudah saat pengembalian.',
                    ],
                ],
                'specs' => [
                    ['label' => 'Pilihan Unit Pertanian', 'value' => 'Mechatron Agri H-30 (Tangki 30L) & Agri H-15 (Tangki 15L)'],
                    ['label' => 'Pilihan Unit Survei/Foto', 'value' => 'DJI Mavic 3 Enterprise / Thermal, Inspire, Matrice Series'],
                    ['label' => 'Kelengkapan Baterai', 'value' => 'Termasuk 3–6 Smart Battery Pack + Hub Fast Charger'],
                    ['label' => 'Pilihan Skema', 'value' => 'Dry Hire (Unit Saja) / Wet Hire (Include Pilot & Asisten)'],
                    ['label' => 'Minimal Durasi Sewa', 'value' => 'Mulai dari 1 Hari (24 Jam)'],
                    ['label' => 'Deposit & Asuransi', 'value' => 'Tersedia opsi asuransi perlindungan kerusakan unit'],
                ],
                'faqs' => [
                    [
                        'q' => 'Apa syarat untuk menyewa drone tanpa pilot (Dry Hire)?',
                        'a' => 'Penyewa wajib menunjukkan lisensi pilot drone aktif (FASI/DKUPPU), identitas resmi (KTP/NPWP), serta jaminan/deposit sesuai tipe unit yang disewa.',
                    ],
                    [
                        'q' => 'Apakah Mechatron menyediakan sewa untuk luar pulau Jawa?',
                        'a' => 'Ya, kami melayani pengiriman unit sewa ke Sumatera, Kalimantan, Sulawesi, dan wilayah lainnya di Indonesia.',
                    ],
                ],
            ],
            'pelatihanpilot' => [
                'id' => 'pelatihanpilot',
                'slug' => 'pelatihanpilot',
                'path' => '/services/pelatihanpilot',
                'group' => 'Teknologi Terkini Di Layanan Kami.',
                'groupSubtitle' => 'Ekosistem Rental & Sertifikasi',
                'category' => 'Professional Academy',
                'title' => 'Pelatihan Pilot Drone',
                'headline' => 'Sertifikasi & Keterampilan Lapangan',
                'tagline' => 'Akademi Resmi Pilot Drone Profesional dari Teori Regulasi hingga Manuver Lapangan',
                'description' => 'Pelatihan pilot drone untuk meningkatkan keterampilan terbang dan pengoperasian secara profesional',
                'longDescription' => 'Mengoperasikan drone berstandar industri memerlukan keterampilan khusus, pemahaman mendalam tentang keselamatan ruang udara, serta prosedur darurat. Mechatron Drone Academy menyelenggarakan program pelatihan terstruktur bagi individu maupun tim korporat untuk mencetak penerbang drone yang kompeten, bersertifikat, dan siap kerja di sektor pertanian, survei, maupun industri kreatif.',
                'image' => 'https://images.unsplash.com/photo-1527977966376-1c8408f9f108?auto=format&fit=crop&w=1400&q=85',
                'highlights' => [
                    [
                        'stat' => '100% Praktik',
                        'title' => 'Jam Terbang Nyata',
                        'desc' => 'Fasilitas simulator profesional dan praktik langsung di lapangan terbuka dengan berbagai simulasi skenario.',
                    ],
                    [
                        'stat' => 'Sertifikasi',
                        'title' => 'Standar Lisensi Resmi',
                        'desc' => 'Kurikulum mengacu pada standar federasi dan regulasi Kementerian Perhubungan (DKUPPU/FASI).',
                    ],
                    [
                        'stat' => 'Instruktur Pro',
                        'title' => 'Didampingi Expert',
                        'desc' => 'Belajar langsung dari pilot instruktur senior dengan ribuan jam terbang di berbagai medan ekstrem.',
                    ],
                    [
                        'stat' => 'Modul Lengkap',
                        'title' => 'Pertanian & Pemetaan',
                        'desc' => 'Spesialisasi materi mencakup penerbangan otonom, penyemprotan presisi, hingga pengolahan data geospasial.',
                    ],
                ],
                'deepFeatures' => [
                    [
                        'tag' => 'Kurikulum Berstandar Nasional',
                        'title' => 'Pemahaman Regulasi, Keselamatan, & Manuver Presisi',
                        'description' => 'Menjadi pilot drone bukan sekadar menggerakkan tuas remote. Peserta diajarkan mitigasi risiko hilangnya sinyal (Fail-Safe), pemahaman cuaca mikro, aerodinamika, serta hukum ruang udara Indonesia.',
                        'image' => 'https://images.unsplash.com/photo-1524758631624-e2822e304c36?auto=format&fit=crop&w=1200&q=85',
                        'bullets' => [
                            'Regulasi PM 37/2020 dan CASR Part 107',
                            'Manajemen baterai LiPo dan perawatan perangkat',
                            'Manuver angka 8, orbit manual, dan pendaratan darurat',
                        ],
                    ],
                    [
                        'tag' => 'Corporate Training',
                        'title' => 'Pelatihan Khusus Tim Lapangan Perusahaan & Perkebunan',
                        'description' => 'Tingkatkan kapabilitas tim internal Anda. Kami menyediakan program pelatihan in-house yang disesuaikan langsung dengan armada dan kebutuhan operasional perusahaan di lokasi kerja Anda.',
                        'image' => 'https://images.unsplash.com/photo-1508614589041-895b88991e3e?auto=format&fit=crop&w=1200&q=85',
                        'bullets' => [
                            'Pelatihan operasional drone semprot pertanian kapasitas besar',
                            'Pembuatan jalur terbang otonom waypoint untuk survei lahan berkala',
                            'Ujian kompetensi tertulis dan evaluasi praktik lapangan',
                        ],
                    ],
                ],
                'workflow' => [
                    [
                        'step' => '01',
                        'title' => 'Pendaftaran & Kelas Teori',
                        'desc' => 'Pembelajaran materi dasar penerbangan, regulasi hukum, dan sistem avionik di kelas interaktif.',
                    ],
                    [
                        'step' => '02',
                        'title' => 'Sesi Simulator',
                        'desc' => 'Latihan refleks koordinasi tuas kendali dan simulasi cuaca ekstrem menggunakan perangkat simulator canggih.',
                    ],
                    [
                        'step' => '03',
                        'title' => 'Praktik Lapangan (Flight Camp)',
                        'desc' => 'Penerbangan langsung di lapangan terbuka dengan pendampingan one-on-one bersama instruktur senior.',
                    ],
                    [
                        'step' => '04',
                        'title' => 'Uji Kompetensi & Sertifikat',
                        'desc' => 'Ujian tertulis dan uji manuver lapangan untuk penyerahan sertifikat kelulusan pilot drone resmi.',
                    ],
                ],
                'specs' => [
                    ['label' => 'Durasi Program', 'value' => 'Reguler: 2–3 Hari | Corporate Intensive: 4–5 Hari'],
                    ['label' => 'Unit Drone yang Digunakan', 'value' => 'Drone Mechatron Agri H-Series, DJI Mavic Series, DJI Enterprise'],
                    ['label' => 'Fasilitas Peserta', 'value' => 'Buku Panduan, Unit Praktik, Konsumsi, Lapangan Terbang, Kaos Resmi'],
                    ['label' => 'Sertifikat', 'value' => 'Sertifikat Kelulusan Pilot Drone Mechatron & Bantuan Lisensi FASI'],
                    ['label' => 'Lokasi Pelatihan', 'value' => 'Training Ground Mechatron atau In-House di Lokasi Perusahaan Anda'],
                ],
                'faqs' => [
                    [
                        'q' => 'Apakah pemula tanpa pengalaman terbang bisa mengikuti pelatihan ini?',
                        'a' => 'Sangat bisa! Kurikulum kami dirancang mulai dari tingkat dasar (zero knowledge) hingga mahir dengan rasio instruktur yang intensif.',
                    ],
                    [
                        'q' => 'Apakah peserta harus membawa drone sendiri?',
                        'a' => 'Tidak wajib. Mechatron menyediakan unit drone praktik lengkap beserta baterai dan perlengkapannya untuk seluruh peserta.',
                    ],
                ],
            ],
            'perawatandrone' => [
                'id' => 'perawatandrone',
                'slug' => 'perawatandrone',
                'path' => '/services/perawatandrone',
                'group' => 'Teknologi Terkini Di Layanan Kami.',
                'groupSubtitle' => 'Ekosistem Rental & Sertifikasi',
                'category' => 'Engineering & Maintenance',
                'title' => 'Perawatan Drone',
                'headline' => 'Servis Resmi & Kalibrasi Komponen',
                'tagline' => 'Layanan Perbaikan, Servis Berkala, dan Kalibrasi Sensor Standar Pabrikan Mechatron',
                'description' => 'Layanan perbaikan dan perawatan drone untuk menjaga kinerja optimal melalui penggantian komponen, kalibrasi, dan pembaruan perangkat lunak',
                'longDescription' => 'Armada drone yang beroperasi secara konsisten memerlukan pemeliharaan berkala untuk mencegah kegagalan terbang mendadak. Divisi Servis Mechatron didukung oleh teknisi berpengalaman dan laboratorium diagnostik modern untuk menangani perbaikan struktural, pembaruan subsistem avionik, kalibrasi gimbal IMU, hingga uji coba terbang (flight test) komprehensif.',
                'image' => 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=1400&q=85',
                'highlights' => [
                    [
                        'stat' => 'Original Parts',
                        'title' => 'Suku Cadang Resmi',
                        'desc' => 'Jaminan penggantian suku cadang orisinil bersertifikasi pabrikan untuk ketahanan maksimal.',
                    ],
                    [
                        'stat' => '24-Point Check',
                        'title' => 'Inspeksi Menyeluruh',
                        'desc' => 'Pengecekan mendalam mulai dari motor brushless, ESC, antena transmisi, hingga kesehatan baterai.',
                    ],
                    [
                        'stat' => 'Precision Tool',
                        'title' => 'Kalibrasi IMU & Gimbal',
                        'desc' => 'Penyetelan sensor kompas, sensor obstacle, dan stabilitas gimbal menggunakan alat uji presisi.',
                    ],
                    [
                        'stat' => 'Garansi Servis',
                        'title' => 'Proteksi Pasca Perbaikan',
                        'desc' => 'Setiap unit yang diperbaiki mendapatkan garansi servis dan pengujian terbang resmi sebelum serah terima.',
                    ],
                ],
                'deepFeatures' => [
                    [
                        'tag' => 'Standar Keselamatan Teruji',
                        'title' => 'Diagnostik Cepat dan Solusi Komponen Akurat',
                        'description' => 'Kegagalan sistem di udara dapat berakibat fatal. Tim teknisi Mechatron melakukan pembacaan log penerbangan (Flight Black Box Log Analysis) untuk mendeteksi anomali sinyal, voltase baterai, dan getaran motor secara ilmiah.',
                        'image' => 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=1200&q=85',
                        'bullets' => [
                            'Penggantian arm armatur serat karbon dan motor brushless',
                            'Penyolderan sirkuit motherboard dan perbaikan modul transmisi daya',
                            'Servis pompa dan nozzle sistem semprot drone pertanian',
                        ],
                    ],
                    [
                        'tag' => 'Paket Kontrak Perawatan',
                        'title' => 'Dukungan Rutin untuk Armada Industri & Pertanian',
                        'description' => 'Bagi perusahaan dengan armada drone operasional intensif, kami menyediakan opsi kontrak pemeliharaan terjadwal agar operasional bisnis Anda tidak pernah terhenti (zero downtime).',
                        'image' => 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=1200&q=85',
                        'bullets' => [
                            'Inspeksi berkala setiap 50 & 100 jam terbang',
                            'Penyediaan unit pengganti sementara (backup unit)',
                            'Prioritas antrian servis dan diskon suku cadang',
                        ],
                    ],
                ],
                'workflow' => [
                    [
                        'step' => '01',
                        'title' => 'Penerimaan & Check-In',
                        'desc' => 'Pencatatan nomor seri unit, keluhan pengguna, dan riwayat penerbangan drone di pusat servis.',
                    ],
                    [
                        'step' => '02',
                        'title' => 'Diagnosa & Estimasi',
                        'desc' => 'Pemeriksaan teknis menyeluruh dan penyampaian rincian estimasi biaya serta suku cadang yang dibutuhkan.',
                    ],
                    [
                        'step' => '03',
                        'title' => 'Pengerjaan Servis',
                        'desc' => 'Penggantian komponen orisinil, perakitan presisi, kalibrasi sensor, dan pembaruan firmware.',
                    ],
                    [
                        'step' => '04',
                        'title' => 'Flight Test & Serah Terima',
                        'desc' => 'Uji terbang di area khusus Mechatron untuk memastikan kestabilan 100% sebelum dikembalikan ke pemilik.',
                    ],
                ],
                'specs' => [
                    ['label' => 'Merek / Tipe yang Ditangani', 'value' => 'Drone Mechatron Agri, DJI Enterprise & Consumer, Custom FPV'],
                    ['label' => 'Layanan Kalibrasi', 'value' => 'Gimbal 3-Axis, IMU, Kompas Digital, Vision Sensor'],
                    ['label' => 'Inspeksi Baterai', 'value' => 'Pengujian Cycle Count, Internal Resistance, & Cell Balance'],
                    ['label' => 'Waktu Pengerjaan Servis', 'value' => 'Servis Ringan: 1–3 Hari | Servis Berat: 3–7 Hari Kerja'],
                    ['label' => 'Garansi Perbaikan', 'value' => 'Garansi Servis hingga 30 Hari'],
                ],
                'faqs' => [
                    [
                        'q' => 'Apakah unit drone yang pernah jatuh (crash) parah masih bisa diperbaiki?',
                        'a' => 'Bisa. Teknisi kami akan menganalisis integritas frame dan sirkuit elektronik utama terlebih dahulu untuk menentukan apakah perbaikan layak secara teknis dan ekonomis.',
                    ],
                    [
                        'q' => 'Berapa biaya estimasi awal untuk pengecekan unit?',
                        'a' => 'Biaya estimasi awal gratis jika Anda menyetujui perbaikan yang diajukan oleh tim teknisi kami.',
                    ],
                ],
            ],
        ];
    }

    public static function get(?string $slug): ?array
    {
        if (!$slug) return null;
        $normalized = strtolower(str_replace('-', '', $slug));
        $all = self::all();
        if (isset($all[$slug])) return $all[$slug];
        foreach ($all as $key => $service) {
            if (strtolower(str_replace('-', '', $service['slug'])) === $normalized ||
                strtolower(str_replace('-', '', $service['id'])) === $normalized) {
                return $service;
            }
        }
        return null;
    }

    public static function byGroup(string $group): array
    {
        return array_filter(self::all(), fn($s) => $s['group'] === $group);
    }
}
