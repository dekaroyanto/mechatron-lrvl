<?php

namespace App\Data;

class DroneProducts
{
    /**
     * @return array<string, array{slug: string, name: string, description: string}>
     */
    public static function categories(): array
    {
        return [
            'all' => [
                'slug' => 'all',
                'name' => 'Semua Kategori',
                'description' => 'Seluruh jajaran armada drone industri, sensor pemetaan presisi, kargo otonom, dan ekosistem suku cadang Mechatron.',
            ],
            'agrikultur' => [
                'slug' => 'agrikultur',
                'name' => 'Agrikultur',
                'description' => 'Solusi drone semprot dan sebar presisi tinggi untuk perkebunan kelapa sawit, persawahan, dan lahan hortikultura.',
            ],
            'survey-pemetaan' => [
                'slug' => 'survey-pemetaan',
                'name' => 'Survey & Pemetaan',
                'description' => 'Drone fotogrametri udara dan sensor LiDAR 3D untuk pemodelan kontur topografi tingkat sentimeter.',
            ],
            'pengiriman' => [
                'slug' => 'pengiriman',
                'name' => 'Pengiriman',
                'description' => 'Drone kargo logistik muatan berat dan kurir otonom untuk transportasi cepat di area terpencil dan darurat medis.',
            ],
            'suku-cadang' => [
                'slug' => 'suku-cadang',
                'name' => 'Suku Cadang',
                'description' => 'Baterai cerdas, generator fast charger, remote kontrol RTK, baling-baling karbon, dan aksesoris resmi Mechatron.',
            ],
        ];
    }

    /**
     * @return array<string, array<string, mixed>>
     */
    public static function all(): array
    {
        return [
            // ==========================================
            // KATEGORI 1: AGRIKULTUR
            // ==========================================
            'agri-h30' => [
                'id' => 'agri-h30',
                'modelCode' => 'BMT-1525',
                'name' => 'MECHATRON AGRI H-30',
                'category' => 'Agrikultur',
                'categorySlug' => 'agrikultur',
                'categoryDetail' => '30-Litre Hexacopter Agriculture Drone',
                'subtitle' => 'Drone Pertanian Kapasitas Besar 30 Liter',
                'tagline' => 'Smart Solutions for Every Mission — Heavy Payload 30L untuk Efisiensi Perkebunan Skala Besar.',
                'capacity' => '30 Liter / 35 kg',
                'image' => '/images/featured_drone_h30.jpg',
                'whatsappNumber' => '6281112143111',
                'specifications' => [
                    ['label' => 'Model Unit', 'value' => 'BMT-1525 H30'],
                    ['label' => 'Kategori Produk', 'value' => 'Agrikultur (Sprayer & Spreader)'],
                    ['label' => 'Kapasitas Tangki Semprot', 'value' => '30 Liter (Cairan Pupuk & Pestisida)'],
                    ['label' => 'Kapasitas Tangki Sebar', 'value' => '40 Liter / 35 kg (Pupuk Granular & Benih)'],
                    ['label' => 'Konfigurasi Rangka', 'value' => '6-Rotor Hexacopter (High-Grade Carbon Fiber Arms)'],
                    ['label' => 'Fungsi Utama (Function)', 'value' => 'Sprayer & Spreader (Dual-Purpose Modular)'],
                    ['label' => 'Waktu Terbang (Flight Time)', 'value' => '10 - 15 Menit (Muatan Penuh)'],
                    ['label' => 'Kecepatan Terbang Maksimal', 'value' => '7 m/s (25 km/jam)'],
                    ['label' => 'Produktivitas Lahan', 'value' => '6.5 - 8.0 Hektar / Jam'],
                    ['label' => 'Jarak Kendali (Remote Distance)', 'value' => '2 - 5 km LOS (Frekuensi Ganda)'],
                    ['label' => 'Sistem Sensor & Radar', 'value' => 'Radar Penghindar Rintangan 360° & Terrain Following'],
                    ['label' => 'Lebar Semprot Efektif', 'value' => '6 - 9 Meter'],
                    ['label' => 'Dimensi Terlipat (Folded)', 'value' => '1104 x 1147 x 806 mm'],
                    ['label' => 'Dimensi Terbuka (Unfolded)', 'value' => '2058 x 1484 x 806 mm'],
                    ['label' => 'Sertifikasi Proteksi', 'value' => 'IP67 Tahan Air, Debu, & Kimia Pertanian'],
                ],
                'features' => [
                    ['title' => 'Muatan Besar 30 Liter', 'desc' => 'Kapasitas muatan optimal untuk operasional cepat di perkebunan kelapa sawit dan persawahan luas.'],
                    ['title' => 'Cakupan Cepat 6.5 Ha/Jam', 'desc' => 'Kecepatan semprot terarah menghemat waktu operasional hingga 40x dibanding metode manual.'],
                    ['title' => 'Dual-Purpose Modular', 'desc' => 'Dapat diganti dengan cepat antara tangki semprot cairan dan tangki penyebar butiran pupuk/benih.'],
                    ['title' => 'Radar 360° & Terrain Follow', 'desc' => 'Sensor kontur medan real-time dan radar anti tabrak otomatis mendeteksi pepohonan dan tiang.'],
                    ['title' => 'Navigasi RTK Sentimeter', 'desc' => 'Sistem pemetaan otonom dengan presisi jalur terbang tingkat sentimeter tanpa tumpang tindih.'],
                    ['title' => 'Rangka Karbon Ultra Tangguh', 'desc' => 'Struktur serat karbon aviasi dengan lengan yang dapat dilipat untuk transportasi mudah di lapangan.'],
                ],
                'packageIncludes' => [
                    'Unit Drone Hexacopter BMT-1525 H30 Lengkap',
                    'Heavy-Duty Flight Case Logam Khusus Transportasi Lahan',
                    'Sprayer Tank 30L dengan Nozel Sentrifugal Atomisasi Halus',
                    'Spreader Tank 40L untuk Butiran Pupuk & Benih',
                    'Mechatron Smart GCS Remote Controller dengan Layar HD Ultra-Bright',
                    '2 Unit Baterai Cerdas High-Capacity Quick Swap',
                    'Generator Smart Fast Charger Station',
                    'Toolkit Perawatan, Suku Cadang Baling-Baling Cadangan, & Buku Manual Resmi',
                ],
                'fieldApplications' => [
                    [
                        'title' => 'Penyemprotan Kelapa Sawit & Perkebunan',
                        'desc' => 'Penyemprotan herbisida, fungisida, dan pupuk cair daun di tajuk tanaman perkebunan secara merata berkat downwash propeller bertenaga tinggi.',
                    ],
                    [
                        'title' => 'Penebaran Pupuk Granular & Benih Padi',
                        'desc' => 'Penebaran pupuk urea/NPK butiran atau penebaran benih padi di hamparan sawah tanpa merusak tanaman yang sudah tumbuh.',
                    ],
                    [
                        'title' => 'Navigasi Medan Berbukit & Terasering',
                        'desc' => 'Radar terrain-following otomatis menjaga ketinggian konstan dari permukaan tanah berlereng untuk hasil semprot yang konsisten.',
                    ],
                ],
            ],

            'agri-h15' => [
                'id' => 'agri-h15',
                'modelCode' => 'BMT-1323',
                'name' => 'MECHATRON AGRI H-15',
                'category' => 'Agrikultur',
                'categorySlug' => 'agrikultur',
                'categoryDetail' => '15-Litre Hexacopter Agriculture Drone',
                'subtitle' => 'Drone Pertanian Lipat Efisiensi Tinggi 15 Liter',
                'tagline' => 'Smart Solutions for Every Mission — Ringkas, Lincah, & Efisiensi Maksimal untuk Segala Medan Pertanian.',
                'capacity' => '15 Liter / 18 kg',
                'image' => '/images/featured_drone_h15.jpg',
                'whatsappNumber' => '6281112143111',
                'specifications' => [
                    ['label' => 'Model Unit', 'value' => 'BMT-1323 H15'],
                    ['label' => 'Kategori Produk', 'value' => 'Agrikultur (Sprayer & Spreader)'],
                    ['label' => 'Kapasitas Tangki Semprot', 'value' => '15 Liter (Cairan Pupuk & Pestisida)'],
                    ['label' => 'Kapasitas Tangki Sebar', 'value' => '20 Liter / 18 kg (Pupuk Granular & Benih)'],
                    ['label' => 'Konfigurasi Rangka', 'value' => '6-Rotor Hexacopter (Carbon Fiber Arms)'],
                    ['label' => 'Fungsi Utama (Function)', 'value' => 'Sprayer & Spreader (Dual-Purpose)'],
                    ['label' => 'Waktu Terbang (Flight Time)', 'value' => '10 - 12 Menit'],
                    ['label' => 'Kecepatan Maksimal', 'value' => '5.5 m/s (20 km/jam)'],
                    ['label' => 'Produktivitas Lahan', 'value' => '4.1 Hektar / Jam'],
                    ['label' => 'Jarak Kendali (Remote Distance)', 'value' => '2 km LOS'],
                    ['label' => 'Lebar Semprot Efektif', 'value' => '4.5 - 6 Meter'],
                    ['label' => 'Dimensi Terlipat (Folded)', 'value' => '803 x 884 x 718 mm'],
                    ['label' => 'Dimensi Terbuka (Unfolded)', 'value' => '1700 x 1484 x 718 mm'],
                    ['label' => 'Sertifikasi Proteksi', 'value' => 'IP67 Tahan Cuaca Ekstrem & Debu Lapangan'],
                ],
                'features' => [
                    ['title' => 'Desain Ringkas & Mudah Dibawa', 'desc' => 'Dapat dilipat cepat hingga berukuran kompak, muat di bagasi mobil atau bak motor operasional.'],
                    ['title' => 'Produktivitas 4.1 Ha/Jam', 'desc' => 'Cocok untuk lahan pertanian hortikultura, persawahan terasering, dan kebun sayur buah.'],
                    ['title' => 'Atomisasi Kabut Halus', 'desc' => 'Nozel semprot presisi memastikan cairan obat menempel sempurna di kedua sisi daun tanpa boros air.'],
                    ['title' => 'Sensor Terrain & Anti Rintangan', 'desc' => 'Menjaga jarak semprot stabil otomatis pada kontur berbukit dan menghindari halangan pohon.'],
                ],
                'packageIncludes' => [
                    'Unit Drone Hexacopter BMT-1323 H15 Lengkap',
                    'Heavy-Duty Flight Box Logam Portabel',
                    'Sprayer Tank 15L & Sistem Selang Presisi',
                    'Spreader Tank 20L untuk Pupuk Butiran',
                    'Smart Drone Remote Controller dengan Display HD Terang',
                    '2 Unit Baterai Cerdas High-Capacity',
                    'Smart Charger Set Cepat',
                ],
                'fieldApplications' => [
                    [
                        'title' => 'Lahan Persawahan & Tanaman Pangan',
                        'desc' => 'Penyemprotan tanaman padi, jagung, dan kedelai tanpa merusak galengan sawah atau memadatkan tanah.',
                    ],
                    [
                        'title' => 'Kebun Hortikultura & Sayuran',
                        'desc' => 'Penyemprotan presisi tinggi pada tanaman cabai, bawang, melon, dan sayuran dengan kabut mikro merata.',
                    ],
                ],
            ],

            'agri-t100' => [
                'id' => 'agri-t100',
                'modelCode' => 'BMT-2050',
                'name' => 'MECHATRON AGRI T-100 MAX',
                'category' => 'Agrikultur',
                'categorySlug' => 'agrikultur',
                'categoryDetail' => '50-Litre Enterprise Ultra-Heavy Sprayer Drone',
                'subtitle' => 'Drone Pertanian Ultra-Kapasitas 50 Liter Enterprise',
                'tagline' => 'Unrivaled Capacity & Giant Field Coverage — Kapasitas Raksasa 50L untuk Korporasi Perkebunan.',
                'capacity' => '50 Liter / 60 kg',
                'image' => '/images/agras-t100.jpg',
                'whatsappNumber' => '6281112143111',
                'specifications' => [
                    ['label' => 'Model Unit', 'value' => 'BMT-2050 T100 MAX'],
                    ['label' => 'Kategori Produk', 'value' => 'Agrikultur (Heavy Industrial Enterprise)'],
                    ['label' => 'Kapasitas Tangki Semprot', 'value' => '50 Liter (Dual Pressure High-Flow Pump)'],
                    ['label' => 'Kapasitas Tangki Sebar', 'value' => '70 Liter / 60 kg (High-Speed Rotary Disc)'],
                    ['label' => 'Konfigurasi Rangka', 'value' => '8-Rotor Coaxial Octocopter Heavy-Duty'],
                    ['label' => 'Produktivitas Lahan', 'value' => '12 - 16 Hektar / Jam'],
                    ['label' => 'Waktu Terbang (Flight Time)', 'value' => '12 - 18 Menit'],
                    ['label' => 'Lebar Semprot Efektif', 'value' => '8 - 12 Meter'],
                    ['label' => 'Sistem Sensor & Radar', 'value' => 'Active Phased Array Radar 360° + Binocular Vision'],
                    ['label' => 'Sertifikasi Proteksi', 'value' => 'IP67 Waterproof & Anti-Corrosion'],
                ],
                'features' => [
                    ['title' => 'Kapasitas Raksasa 50 Liter', 'desc' => 'Volume muatan terbesar untuk menyelesaikan blok perkebunan sawit dan tebu dalam rotasi minimal.'],
                    ['title' => 'Pompa Tekanan Ganda High-Flow', 'desc' => 'Aliran semprot mencapai 24 L/menit dengan partikel atomisasi yang menembus kanopi rapat.'],
                    ['title' => 'Radar Active Phased Array', 'desc' => 'Deteksi kontur medan 3D dan rintangan kabel listrik hingga jarak 50 meter secara akurat.'],
                    ['title' => 'Sistem Pengisian Otomatis', 'desc' => 'Dukungan stasiun pengisian cepat dan dok cairan otomatis di bak kendaraan operasional.'],
                ],
                'packageIncludes' => [
                    'Unit Drone Coaxial Octocopter BMT-2050 T100 MAX',
                    'Tangki Semprot Cairan 50L & Tangki Sebar Butiran 70L',
                    'Mechatron Enterprise GCS Touchscreen Remote Controller',
                    '4x Ultra-High Capacity Smart Flight Battery',
                    'Generator Inverter Dual-Fast Charging 12000W',
                    'Sertifikat Kalibrasi Pabrik & Layanan Pelatihan Operator Lapangan',
                ],
                'fieldApplications' => [
                    [
                        'title' => 'Perkebunan Kelapa Sawit & Karet Luas',
                        'desc' => 'Optimal untuk konsesi ratusan hektar dengan efisiensi semprotan yang merata dari puncak hingga tajuk tengah.',
                    ],
                    [
                        'title' => 'Perkebunan Tebu & Hutan Tanaman Industri',
                        'desc' => 'Menuntaskan pemupukan dan pengendalian hama skala masif dengan kecepatan terbang konstan berjarak jelajah tinggi.',
                    ],
                ],
            ],

            // ==========================================
            // KATEGORI 2: SURVEY & PEMETAAN
            // ==========================================
            'survey-m400' => [
                'id' => 'survey-m400',
                'modelCode' => 'MS-400-RTK',
                'name' => 'MECHATRON SURVEY M-400 RTK',
                'category' => 'Survey & Pemetaan',
                'categorySlug' => 'survey-pemetaan',
                'categoryDetail' => 'Enterprise RTK Mapping & Photogrammetry Drone',
                'subtitle' => 'Drone Pemetaan Topografi & Fotogrametri Presisi Sentimeter',
                'tagline' => 'Millimeter Precision Aerial Mapping — Solusi Survei Topografi, Kadaster, & Konstruksi Sipil.',
                'capacity' => 'Akurasi 1 cm RTK',
                'image' => '/images/matrice-400-hero.png',
                'whatsappNumber' => '6281112143111',
                'specifications' => [
                    ['label' => 'Model Unit', 'value' => 'Mechatron Survey M-400 RTK'],
                    ['label' => 'Kategori Produk', 'value' => 'Survey & Pemetaan (Geospasial)'],
                    ['label' => 'Modul Navigasi', 'value' => 'Dual RTK + GNSS Multi-Konstelasi (GPS/GLONASS/BeiDou/Galileo)'],
                    ['label' => 'Akurasi Penentuan Posisi', 'value' => 'Horizontal 1 cm + 1 ppm, Vertikal 1.5 cm + 1 ppm'],
                    ['label' => 'Sensor Kamera Bawaan', 'value' => '45MP Full-Frame Mechanical Shutter (Anti-Jello Distortion)'],
                    ['label' => 'Waktu Terbang (Flight Time)', 'value' => 'Hingga 45 Menit per Baterai'],
                    ['label' => 'Cakupan Survei Sekali Terbang', 'value' => 'Hingga 250 Hektar pada GSD 3 cm/pixel'],
                    ['label' => 'Jarak Kendali & Video HD', 'value' => 'Hingga 8 km LOS (O3 Enterprise Transmission)'],
                    ['label' => 'Dukungan Payload Eksternal', 'value' => 'Kamera Multispektral 5-Band, Sensor Termal, & LiDAR Modular'],
                    ['label' => 'Sertifikasi Proteksi', 'value' => 'IP55 Tahan Hujan Ringan & Debu Konstruksi'],
                ],
                'features' => [
                    ['title' => 'Sensor Full-Frame 45 MP', 'desc' => 'Mechanical shutter berkecepatan 1/2000 detik menghasilkan foto ortofoto tajam bebas blur gerak.'],
                    ['title' => 'Akurasi Sentimeter Bebas GCP', 'desc' => 'Dukungan RTK real-time meminimalkan kebutuhan titik kontrol tanah (GCP) hingga 80%.'],
                    ['title' => 'Durasi Terbang Ekstra 45 Menit', 'desc' => 'Waktu terbang panjang memastikan efisiensi pemetaan blok wilayah luas tanpa sering mendarat.'],
                    ['title' => 'Misi Jalur 3D Otomatis', 'desc' => 'Perencanaan misi koridor sungai, jalan tol, dan topografi berbukit dengan kontur adaptif.'],
                ],
                'packageIncludes' => [
                    'Unit Drone Mechatron Survey M-400 RTK',
                    'Kamera Full-Frame 45MP dengan Lensa Pemetaan Khusus',
                    'Base Station RTK Portabel & Tripod Karbon Presisi',
                    'Smart Controller Enterprise dengan Layar 7" Ultra-Terang',
                    '4x Intelligent Flight Battery & Charging Hub',
                    'Lisensi Perangkat Lunak Mechatron OrthoMap 3D (1 Tahun)',
                    'Hardcase Standar Penerbangan Anti-Air',
                ],
                'fieldApplications' => [
                    [
                        'title' => 'Pemetaan Batas Kadaster & Agraria',
                        'desc' => 'Pemetaan batas kepemilikan tanah dan sertifikasi lahan dengan koordinat geospasial presisi hukum resmi.',
                    ],
                    [
                        'title' => 'Monitoring Konstruksi Sipil & Tambang',
                        'desc' => 'Perhitungan volume cut & fill galian tambang, progres proyek jalan tol, dan model elevasi digital (DEM/DSM).',
                    ],
                ],
            ],

            'survey-lidar-v1' => [
                'id' => 'survey-lidar-v1',
                'modelCode' => 'MLS-3D-SCAN',
                'name' => 'MECHATRON LIDAR SCANNER V-1',
                'category' => 'Survey & Pemetaan',
                'categorySlug' => 'survey-pemetaan',
                'categoryDetail' => 'Airborne Laser LiDAR & 3D Point Cloud System',
                'subtitle' => 'Sensor LiDAR Udara Pemindai Kanopi Hutan & Kontur Tanah',
                'tagline' => 'Penetrate Deep Forest Canopies — Pemetaan Laser 3D Real-Time untuk Kehutanan & Infrastruktur.',
                'capacity' => '240.000 pts/detik',
                'image' => '/images/dji-lito-series.jpg',
                'whatsappNumber' => '6281112143111',
                'specifications' => [
                    ['label' => 'Model Unit', 'value' => 'Mechatron LiDAR Scanner V-1 (MLS-3D)'],
                    ['label' => 'Kategori Produk', 'value' => 'Survey & Pemetaan (Sensor Laser 3D)'],
                    ['label' => 'Kecepatan Titik Laser (Point Rate)', 'value' => '240.000 titik/detik (Hingga 3 Target Pantulan Ganda)'],
                    ['label' => 'Jangkauan Deteksi Laser', 'value' => 'Hingga 250 Meter pada Reflektifitas 80%'],
                    ['label' => 'Akurasi Ketinggian Vertikal', 'value' => '± 3 cm pada Ketinggian Terbang 100 Meter'],
                    ['label' => 'Sensor IMU Internal', 'value' => 'Tingkat Industri Navigasi Inersial Presisi 0.05°'],
                    ['label' => 'Kamera RGB Terintegrasi', 'value' => '20MP untuk Pewarnaan Point Cloud 3D Real-Time (True Color)'],
                    ['label' => 'Kompatibilitas Wahana', 'value' => 'Mechatron Survey M-400 & Wahana Drone Multirotor Enterprise'],
                    ['label' => 'Format Output Data', 'value' => 'LAS, LAZ, PLY, PCD, GeoTIFF, & CAD DXF'],
                ],
                'features' => [
                    ['title' => 'Penetrasi Kanopi Lebat', 'desc' => 'Sinar laser berulang mampu menembus celah rimbun dedaunan hingga merekam permukaan tanah asli (DTM).'],
                    ['title' => 'Point Cloud Warna Nyata (True Color)', 'desc' => 'Kamera RGB 20MP secara otomatis mewarnai setiap titik laser dengan warna objek foto sebenarnya.'],
                    ['title' => 'Pemrosesan Cepat Satu Klik', 'desc' => 'Hasil survei langsung diproses menjadi model 3D, kontur tanah, dan garis elevasi tanpa software rumit.'],
                    ['title' => 'Bobot Ringan & Efisien', 'desc' => 'Desain kompak aerodinamis hemat daya tidak mengorbankan durasi terbang wahana drone pembawa.'],
                ],
                'packageIncludes' => [
                    'Modul Sensor Mechatron LiDAR Scanner V-1',
                    'Gimbal Stabilizer 3-Axis Khusus Kalibrasi Pabrik',
                    'Kabel Interkoneksi Daya & Telemetri Enterprise',
                    'Lisensi Software Mechatron LiDAR Studio Pro',
                    'Hard Pelindung Busa Khusus & Perlengkapan Kalibrasi',
                ],
                'fieldApplications' => [
                    [
                        'title' => 'Inventarisasi Hutan & Perkebunan',
                        'desc' => 'Menghitung tinggi pohon, kerapatan biomassa, dan volume kayu tanpa harus menebang atau menyusuri hutan lebat.',
                    ],
                    [
                        'title' => 'Inspeksi Jalur Transmisi SUTET & Saluran Pipa',
                        'desc' => 'Mendeteksi jarak bahaya dahan pohon ke kabel listrik tegangan tinggi secara otomatis berakurasi sentimeter.',
                    ],
                ],
            ],

            // ==========================================
            // KATEGORI 3: PENGIRIMAN (LOGISTIK & KARGO)
            // ==========================================
            'cargo-c50' => [
                'id' => 'cargo-c50',
                'modelCode' => 'MC-50-HEAVY',
                'name' => 'MECHATRON CARGO C-50',
                'category' => 'Pengiriman',
                'categorySlug' => 'pengiriman',
                'categoryDetail' => 'Heavy-Lift Autonomous Logistics & Delivery Drone',
                'subtitle' => 'Drone Kargo Logistik Berat & Bantuan Darurat 50 kg',
                'tagline' => 'Heavy-Lift Logistics Everywhere — Pengiriman Logistik Industri & Bantuan Medis Lintas Medan Sulit.',
                'capacity' => 'Payload 50 kg / 30 km',
                'image' => '/images/cargo_drone_c50.jpg',
                'whatsappNumber' => '6281112143111',
                'specifications' => [
                    ['label' => 'Model Unit', 'value' => 'Mechatron Cargo C-50 (MC-50)'],
                    ['label' => 'Kategori Produk', 'value' => 'Pengiriman (Heavy Logistics)'],
                    ['label' => 'Kapasitas Muatan Beban (Payload)', 'value' => 'Maksimal 50 kg (Box Kargo Logistik / Winch Cable)'],
                    ['label' => 'Volume Boks Kargo', 'value' => '70 Liter (Weatherproof Seal & Quick Release)'],
                    ['label' => 'Jarak Tempuh Jelajah (Range)', 'value' => 'Hingga 30 km (Muatan 30 kg) / 20 km (Muatan 50 kg)'],
                    ['label' => 'Kecepatan Jelajah Operasional', 'value' => 'Hingga 72 km/jam (20 m/s)'],
                    ['label' => 'Mekanisme Penurunan Muatan', 'value' => 'Smart Winch Cable Otomatis (Penurunan Tanpa Mendarat) / Pendaratan Langsung'],
                    ['label' => 'Sistem Tenaga & Baterai', 'value' => 'Dual Redundant Battery System (Pemberitahuan Darurat Fail-Safe)'],
                    ['label' => 'Navigasi & Komunikasi', 'value' => 'Koneksi Seluler 4G/5G LTE + Radio Link 20 km + Parasut Darurat'],
                    ['label' => 'Sertifikasi Proteksi', 'value' => 'IP66 Tahan Angin Kencang (Level 7) & Hujan Tropis Deras'],
                ],
                'features' => [
                    ['title' => 'Muatan Angkut Hingga 50 kg', 'desc' => 'Daya angkut masif untuk suku cadang mesin tambang, suplai medis mendesak, dan logistik perairan pulau.'],
                    ['title' => 'Sistem Smart Winch Otomatis', 'desc' => 'Menurunkan boks barang secara lembut dengan tali kawat otomatis tanpa perlu drone menyentuh tanah.'],
                    ['title' => 'Dual Sistem Redundansi Aman', 'desc' => 'Dilengkapi baterai ganda, motor redundan, dan parasut balistik darurat otomatis demi keselamatan maksimal.'],
                    ['title' => 'Operasi Otonom Jarak Jauh', 'desc' => 'Rute terbang terjadwal dari titik A ke titik B dengan stasiun pendaratan presisi berpemandu optik.'],
                ],
                'packageIncludes' => [
                    'Unit Wahana Heavy-Lift Cargo Drone C-50 Lengkap',
                    'Boks Kargo Aerodinamis Logam Tertutup Anti-Air',
                    'Modul Smart Winch Cable System dengan Sensor Berat Otomatis',
                    'Stasiun Kontrol GCS Jarak Jauh dengan Konektivitas Satelit & 4G',
                    '4 Unit Smart Flight Battery High-Discharge',
                    'Generator Inverter Pengisian Daya Cepat Khusus',
                    'Parasut Balistik Keselamatan Darurat Terpasang',
                ],
                'fieldApplications' => [
                    [
                        'title' => 'Logistik Pertambangan & Anjungan Lepas Pantai',
                        'desc' => 'Mengirimkan sampel laboratorium batuan, suku cadang alat berat, dan peralatan kritis melintasi area tambang raksasa.',
                    ],
                    [
                        'title' => 'Bantuan Medis Darurat Bencana Alam',
                        'desc' => 'Menembus desa terisolir akibat jembatan putus atau tanah longsor untuk mendrop darah, obat, dan plasma penyelamat nyawa.',
                    ],
                ],
            ],

            'delivery-x10' => [
                'id' => 'delivery-x10',
                'modelCode' => 'MAX-10-AIR',
                'name' => 'MECHATRON AIR COURIER X-10',
                'category' => 'Pengiriman',
                'categorySlug' => 'pengiriman',
                'categoryDetail' => 'Autonomous Rapid Courier & Parcel Delivery Drone',
                'subtitle' => 'Drone Kurir Ekspres Otonom Jarak Jauh 15 km',
                'tagline' => 'Fast, Silent, & Direct Delivery — Pengiriman Paket Ekspres Cepat Antar Fasilitas Bisnis.',
                'capacity' => 'Payload 10 kg / 15 km',
                'image' => '/images/card_avata_360.jpg',
                'whatsappNumber' => '6281112143111',
                'specifications' => [
                    ['label' => 'Model Unit', 'value' => 'Mechatron Air Courier X-10'],
                    ['label' => 'Kategori Produk', 'value' => 'Pengiriman (Autonomous Courier)'],
                    ['label' => 'Kapasitas Muatan Beban', 'value' => '10 kg (Kompartemen Kargo Bersuhu Terkendali)'],
                    ['label' => 'Jarak Tempuh Operasional', 'value' => '15 km (Perjalanan Pulang-Pergi)'],
                    ['label' => 'Kecepatan Terbang Maksimal', 'value' => '60 km/jam'],
                    ['label' => 'Waktu Terbang (Flight Time)', 'value' => '25 - 30 Menit'],
                    ['label' => 'Tingkat Kebisingan Suara', 'value' => '< 58 dB (Propeller Desain Senyap untuk Lingkungan Perkotaan)'],
                    ['label' => 'Kompartemen Khusus', 'value' => 'Insulasi Termal untuk Sampel Medis & Makanan Panas/Dingin'],
                    ['label' => 'Sertifikasi Proteksi', 'value' => 'IP55 Tahan Hujan Sedang & Angin Kencang'],
                ],
                'features' => [
                    ['title' => 'Pengantaran Cepat Tanpa Macet', 'desc' => 'Menghubungkan kantor pusat dan pabrik manufaktur dalam hitungan menit tanpa hambatan lalu lintas darat.'],
                    ['title' => 'Kompartemen Pendingin Medis', 'desc' => 'Suhu ruang kargo dapat distabilkan untuk menjaga integritas sampel darah dan vaksin sensitif suhu.'],
                    ['title' => 'Suara Senyap Ramah Lingkungan', 'desc' => 'Baling-baling akustik generasi baru meminimalisir kebisingan sehingga aman terbang di dekat permukiman.'],
                    ['title' => 'Sensor LiDAR Hindar Kabel Listrik', 'desc' => 'Sensor optik canggih mendeteksi kabel tiang listrik dan pohon secara otomatis dalam radius 30 meter.'],
                ],
                'packageIncludes' => [
                    'Unit Drone Mechatron Air Courier X-10',
                    'Kompartemen Kargo Pintar dengan Kunci Digital QR Code',
                    'Smart Controller Ground Base Station',
                    '2 Unit Baterai Cerdas Li-Ion Kerapatan Tinggi',
                    'Stasiun Pengisi Daya Dinding Cepat (Fast Wall Charger)',
                ],
                'fieldApplications' => [
                    [
                        'title' => 'Pengiriman Antar Cabang Rumah Sakit',
                        'desc' => 'Pengantaran sampel darah, reagen uji lab, dan berkas donor antar gedung rumah sakit dalam hitungan 5 menit.',
                    ],
                    [
                        'title' => 'Distribusi Dokumen & Perkakas Industri',
                        'desc' => 'Menghubungkan fasilitas pelabuhan, gudang logistik, dan kapal sandar secara cepat dan efisien.',
                    ],
                ],
            ],

            // ==========================================
            // KATEGORI 4: SUKU CADANG & AKSESORIS
            // ==========================================
            'mechatron-ground-station' => [
                'id' => 'mechatron-ground-station',
                'modelCode' => 'GCS-PRO-RTK',
                'name' => 'MECHATRON SMART GCS CONTROLLER',
                'category' => 'Suku Cadang',
                'categorySlug' => 'suku-cadang',
                'categoryDetail' => 'Dual-RTK High-Brightness Ground Station Remote',
                'subtitle' => 'Ground Control Station dengan Layar Ultra-Terang & Dual RTK',
                'tagline' => 'Precision Control in Your Hands — Kendali Penuh Armada Drone Pertanian dalam Satu Genggaman.',
                'capacity' => 'Layar 5.5" 1000 nits',
                'image' => '/images/featured_remote_kit.jpg',
                'whatsappNumber' => '6281112143111',
                'specifications' => [
                    ['label' => 'Model Unit', 'value' => 'Mechatron Smart GCS Pro (V2)'],
                    ['label' => 'Kategori Produk', 'value' => 'Suku Cadang & Kontroler'],
                    ['label' => 'Spesifikasi Layar', 'value' => '5.5 Inci Full HD IPS (1000 nits Ultra-Bright)'],
                    ['label' => 'Sistem Operasi', 'value' => 'Mechatron Agriculture OS (Android Custom Secure)'],
                    ['label' => 'Jarak Transmisi', 'value' => 'Hingga 5 km LOS (Sistem Dual-Antena Frekuensi Ganda)'],
                    ['label' => 'Kapasitas Baterai', 'value' => 'Baterai Internal 5000 mAh + Eksternal Quick Swap (Hingga 8 Jam)'],
                    ['label' => 'Modul Navigasi RTK', 'value' => 'Dual RTK Sentimeter Terintegrasi'],
                    ['label' => 'Konektivitas Eksternal', 'value' => 'USB Type-C, Slot MicroSD, Port HDMI Out, Slot SIM Card 4G LTE'],
                    ['label' => 'Ketahanan Fisik', 'value' => 'IP54 Tahan Cipratan Air, Debu, & Jatuh Ringan'],
                ],
                'features' => [
                    ['title' => 'Layar Super Terang 1000 Nits', 'desc' => 'Tetap terlihat sangat jelas dan tajam di bawah terik sinar matahari langsung tanpa tudung pelindung.'],
                    ['title' => 'Perencanaan Jalur Otomatis', 'desc' => 'Tandai sudut-sudut lahan di peta satelit, rute semprot otomatis dihitung dalam hitungan detik.'],
                    ['title' => 'Transmisi Stabil Jarak 5 Km', 'desc' => 'Teknologi frekuensi ganda tahan interferensi sinyal di area perkebunan terpencil.'],
                    ['title' => 'Baterai Hot-Swap Tahan Seharian', 'desc' => 'Dapat diganti baterai tambahan tanpa perlu mematikan kontroler saat sedang beroperasi.'],
                ],
                'packageIncludes' => [
                    'Unit Smart GCS Remote Controller Mechatron',
                    'Hard Carrying Case Khusus dengan Bantalan Busa Presisi',
                    '2x Baterai Eksternal Tambahan',
                    'Dual Antena High-Gain Ekstra',
                    'Charger Cepat USB Type-C & Kabel Data Industri',
                    'Tali Lanyard Leher Ergonomis & Penutup Port Silikon',
                ],
                'fieldApplications' => [
                    [
                        'title' => 'Kendali Terbang Otonom Penuh',
                        'desc' => 'Mengoperasikan armada Mechatron Agri H-30, H-15, dan Survey Series secara otomatis dengan telemetri visual real-time.',
                    ],
                ],
            ],

            'mechatron-power-kit' => [
                'id' => 'mechatron-power-kit',
                'modelCode' => 'PCK-GEN-9000',
                'name' => 'MECHATRON POWER COMBO KIT',
                'category' => 'Suku Cadang',
                'categorySlug' => 'suku-cadang',
                'categoryDetail' => '9000W Inverter Generator & Fast Charging Station',
                'subtitle' => 'Generator Fast Charging 9000W & Smart Battery System',
                'tagline' => 'Non-Stop Agricultural Flight Mission — Pengisian Daya Ultra Cepat 10 Menit untuk Rotasi Terbang Tanpa Jeda.',
                'capacity' => 'Fast Charge 10 Menit',
                'image' => '/images/featured_combo_kit.jpg',
                'whatsappNumber' => '6281112143111',
                'specifications' => [
                    ['label' => 'Model Unit', 'value' => 'Mechatron Power Combo Kit 9000W'],
                    ['label' => 'Kategori Produk', 'value' => 'Suku Cadang & Catu Daya'],
                    ['label' => 'Tipe Mesin Generator', 'value' => 'Inverter Bensin 4-Tak Khusus Drone Pertanian'],
                    ['label' => 'Daya Output Maksimal', 'value' => '9000 Watt / 220V Pure Sine Wave Stabil'],
                    ['label' => 'Waktu Pengisian Baterai', 'value' => '10 - 12 Menit per Baterai (Fast Charge)'],
                    ['label' => 'Saluran Pengisian Daya', 'value' => 'Dual Channel (Sanggup Mengisi 2 Baterai Sekaligus)'],
                    ['label' => 'Sistem Pendingin Baterai', 'value' => 'Air-Cooling Heat Sink Otomatis Selama Pengisian'],
                    ['label' => 'Kapasitas Tangki Bahan Bakar', 'value' => '25 Liter (Konsumsi Efisien hingga 10 Jam Kerja)'],
                ],
                'features' => [
                    ['title' => 'Fast Charging 10 Menit', 'desc' => 'Baterai terisi penuh dalam 10 menit, seimbang dengan durasi terbang drone sehingga kerja tanpa jeda.'],
                    ['title' => 'Dual Channel Pengisian', 'desc' => 'Dua baterai dapat dicharge berbarengan dengan manajemen arus pintar individual.'],
                    ['title' => 'Hemat Bahan Bakar Hingga 30%', 'desc' => 'Teknologi inverter secara otomatis menyesuaikan putaran mesin dengan beban kebutuhan daya baterai.'],
                ],
                'packageIncludes' => [
                    'Unit Generator Inverter 9000W Heavy-Duty Beroda',
                    'Stasiun Dual-Channel Smart Fast Charger Mechatron',
                    'Kabel Koneksi Daya Baterai Tahan Panas Tinggi',
                    'Corong Bahan Bakar, Toolset Perawatan Mesin, & Buku Panduan',
                ],
                'fieldApplications' => [
                    [
                        'title' => 'Operasi di Perkebunan Terpencil',
                        'desc' => 'Menyediakan pasokan listrik mandiri di tengah kebun sawit atau sawah yang jauh dari jaringan listrik PLN.',
                    ],
                ],
            ],

            'smart-battery-b30' => [
                'id' => 'smart-battery-b30',
                'modelCode' => 'BAT-30K-SMART',
                'name' => 'MECHATRON SMART BATTERY B-30',
                'category' => 'Suku Cadang',
                'categorySlug' => 'suku-cadang',
                'categoryDetail' => 'High-Density 30,000mAh Intelligent Li-Po Flight Battery',
                'subtitle' => 'Baterai Cerdas 30000mAh Tahan Siklus Tinggi & Quick-Swap',
                'tagline' => 'High-Density Power for Extreme Demands — Ketahanan Hingga 1.500 Siklus Terbang Bergaransi.',
                'capacity' => '30.000 mAh / 51.8V',
                'image' => '/images/smart_battery_b30.jpg',
                'whatsappNumber' => '6281112143111',
                'specifications' => [
                    ['label' => 'Model Unit', 'value' => 'Mechatron Smart Battery B-30'],
                    ['label' => 'Kategori Produk', 'value' => 'Suku Cadang & Baterai'],
                    ['label' => 'Kapasitas Nominal', 'value' => '30.000 mAh (1554 Wh)'],
                    ['label' => 'Tegangan Nominal', 'value' => '51.8 V (Konfigurasi Sel 14S Li-Po High-Discharge)'],
                    ['label' => 'Siklus Pengisian Daya (Life Cycles)', 'value' => 'Hingga 1.500 Siklus dengan Kapasitas Terjaga > 80%'],
                    ['label' => 'Sistem Manajemen Baterai (BMS)', 'value' => 'BMS Pintar dengan Proteksi Overcharge, Overheat, & Sel Seimbang'],
                    ['label' => 'Fitur Heat Sink Pendingin', 'value' => 'Aluminium Casing Heatsink Terintegrasi Aliran Udara Cepat'],
                    ['label' => 'Waktu Pengisian Fast Charging', 'value' => '9 - 12 Menit dengan Mechatron Generator Fast Charger'],
                    ['label' => 'Sertifikasi Proteksi', 'value' => 'IP67 Tahan Cairan Kimia, Air, & Debu Pertanian'],
                ],
                'features' => [
                    ['title' => 'Daya Tahan 1.500 Siklus', 'desc' => 'Sel kimia kelas industri memberikan investasi hemat biaya operasional jangka panjang.'],
                    ['title' => 'BMS Cerdas Berlayar LED', 'desc' => 'Lampu LED indikator menampilkan level kapasitas baterai dan deteksi kesehatan sel baterai.'],
                    ['title' => 'Mekanisme Kunci Quick Swap', 'desc' => 'Pelepasan dan pemasangan baterai ke unit drone selesai dalam waktu kurang dari 15 detik.'],
                ],
                'packageIncludes' => [
                    'Unit Baterai Cerdas Mechatron Smart Battery B-30',
                    'Tutup Pelindung Terminal Emas Anti-Debu & Korosi',
                    'Kartu Garansi Resmi Mechatron 1.000 Siklus',
                ],
                'fieldApplications' => [
                    [
                        'title' => 'Baterai Cadangan Rotasi Terbang',
                        'desc' => 'Memastikan armada drone Mechatron Agri H-30 dan Cargo C-50 bekerja nonstop tanpa jeda menunggu pengisian.',
                    ],
                ],
            ],

            'carbon-propeller-kit' => [
                'id' => 'carbon-propeller-kit',
                'modelCode' => 'PROP-CF-30',
                'name' => 'MECHATRON CARBON PROPELLER KIT',
                'category' => 'Suku Cadang',
                'categorySlug' => 'suku-cadang',
                'categoryDetail' => 'High-Grade Folding Carbon Fiber Propeller & Motor Set',
                'subtitle' => 'Set Baling-Baling Serat Karbon Lipat & Motor Brushless',
                'tagline' => 'Aerodynamic Efficiency & Quiet Operation — Serat Karbon Aviasi Ringan, Kuat, & Tahan Benturan.',
                'capacity' => 'Carbon Fiber 33 Inci',
                'image' => '/images/carbon_propellers.jpg',
                'whatsappNumber' => '6281112143111',
                'specifications' => [
                    ['label' => 'Model Unit', 'value' => 'Mechatron Carbon Propeller Kit CF-30'],
                    ['label' => 'Kategori Produk', 'value' => 'Suku Cadang & Propeller'],
                    ['label' => 'Material Bilah', 'value' => '100% Toray Carbon Fiber T700 dengan Resin Tahan UV'],
                    ['label' => 'Ukuran Diameter', 'value' => '33 x 11 Inci (Bilah Lipat Foldable)'],
                    ['label' => 'Kompatibilitas Unit', 'value' => 'Mechatron Agri H-30, Agri H-15, dan Drone Heavy-Lift'],
                    ['label' => 'Keseimbangan Dinamis', 'value' => 'Kalibrasi Presisi Tinggi Pabrik (Zero Vibration Balancing)'],
                    ['label' => 'Mekanisme Pemasangan', 'value' => 'Quick-Release Lock Paduan Aluminium Aviasi CNC'],
                    ['label' => 'Ketahanan Suhu', 'value' => '-20°C hingga +65°C Cuaca Tropis'],
                ],
                'features' => [
                    ['title' => 'Serat Karbon Toray 100%', 'desc' => 'Bobot sangat ringan namun memiliki keteguhan struktural luar biasa menghadapi dorongan angin kencang.'],
                    ['title' => 'Bebas Getaran (Zero Vibration)', 'desc' => 'Setiap bilah telah melewati penyeimbangan dinamis laser untuk penerbangan halus dan motor awet.'],
                    ['title' => 'Desain Bilah Lipat Kompak', 'desc' => 'Mudah dilipat saat pengangkutan sehingga tidak memakan ruang dan meminimalisir risiko patah.'],
                ],
                'packageIncludes' => [
                    '2x Pasang Baling-Baling Karbon CW (Clockwise)',
                    '2x Pasang Baling-Baling Karbon CCW (Counter-Clockwise)',
                    'Set Dudukan Adaptor Quick-Release CNC Aluminium',
                    'Baut Pemasangan Titanium Tahan Karat & Kunci L Presisi',
                ],
                'fieldApplications' => [
                    [
                        'title' => 'Suku Cadang Rutin Lapangan',
                        'desc' => 'Penggantian cepat di lapangan saat bilah propeller terkena ranting atau benda keras selama misi operasional.',
                    ],
                ],
            ],
        ];
    }

    /**
     * @return array<string, array<string, mixed>>
     */
    public static function byCategory(?string $categorySlug = null): array
    {
        $all = self::all();

        if (! $categorySlug || $categorySlug === 'all') {
            return $all;
        }

        $categorySlug = strtolower(trim($categorySlug));

        return array_filter($all, function ($item) use ($categorySlug) {
            return ($item['categorySlug'] ?? '') === $categorySlug;
        });
    }

    public static function get(?string $id): ?array
    {
        if (! $id) {
            return null;
        }

        $id = strtolower(trim($id));
        $all = self::all();

        if (isset($all[$id])) {
            return $all[$id];
        }

        // Fuzzy matching for various slug formats
        if (str_contains($id, 't100') || str_contains($id, '2050')) {
            return $all['agri-t100'] ?? null;
        }
        if (str_contains($id, 'h30') || str_contains($id, '1525')) {
            return $all['agri-h30'];
        }
        if (str_contains($id, 'h15') || str_contains($id, '1323')) {
            return $all['agri-h15'];
        }
        if (str_contains($id, 'm400') || str_contains($id, 'matrice') || str_contains($id, 'survey-m400')) {
            return $all['survey-m400'] ?? null;
        }
        if (str_contains($id, 'lidar')) {
            return $all['survey-lidar-v1'] ?? null;
        }
        if (str_contains($id, 'cargo') || str_contains($id, 'c50')) {
            return $all['cargo-c50'] ?? null;
        }
        if (str_contains($id, 'courier') || str_contains($id, 'delivery') || str_contains($id, 'x10')) {
            return $all['delivery-x10'] ?? null;
        }
        if (str_contains($id, 'battery') || str_contains($id, 'b30')) {
            return $all['smart-battery-b30'] ?? null;
        }
        if (str_contains($id, 'propeller') || str_contains($id, 'baling')) {
            return $all['carbon-propeller-kit'] ?? null;
        }
        if (str_contains($id, 'ground') || str_contains($id, 'gcs') || str_contains($id, 'remote')) {
            return $all['mechatron-ground-station'];
        }
        if (str_contains($id, 'power') || str_contains($id, 'combo') || str_contains($id, 'kit') || str_contains($id, 'generator')) {
            return $all['mechatron-power-kit'];
        }

        return null;
    }
}
