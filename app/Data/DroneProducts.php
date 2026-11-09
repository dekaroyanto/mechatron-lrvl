<?php

namespace App\Data;

class DroneProducts
{
    /**
     * @return array<string, array{slug: string, name: string, description: string}>
     */
    public static function categories(): array
    {
        if (app()->getLocale() === 'en') {
            return [
                'all' => [
                    'slug' => 'all',
                    'name' => 'All Categories',
                    'description' => 'Explore Mechatron\'s complete aerial technology solutions, from agricultural drone fleets, smart logistics, precision surveillance systems, to genuine spare parts.',
                ],
                'agrikultur' => [
                    'slug' => 'pertanian',
                    'name' => 'Agricultural Drones',
                    'description' => 'Smart Solutions for Precision Agriculture.',
                ],
                'pengawasan' => [
                    'slug' => 'pengawasan',
                    'name' => 'Surveillance Drones',
                    'description' => 'Real-Time Aerial Security Monitoring.',
                ],
                'pengiriman' => [
                    'slug' => 'Pengiriman',
                    'name' => 'Delivery Drones',
                    'description' => 'Fast and Efficient Aerial Delivery.',
                ],
                'suku-cadang' => [
                    'slug' => 'suku-cadang',
                    'name' => 'Spare Parts',
                    'description' => 'Genuine and High-Quality Spare Parts.',
                ],
            ];
        }

        return [
            'all' => [
                'slug' => 'all',
                'name' => 'Semua Kategori',
                'description' => 'Jelajahi seluruh solusi teknologi udara Mechatron, mulai dari armada drone pertanian, logistik cerdas, sistem pengawasan presisi, hingga suku cadang orisinal.',
            ],
            'agrikultur' => [
                'slug' => 'pertanian',
                'name' => 'Drone Pertanian',
                'description' => 'Solusi Cerdas untuk Pertanian Modern.',
            ],
            'pengawasan' => [
                'slug' => 'pengawasan',
                'name' => 'Drone Pengawasan',
                'description' => 'Pengawasan Real-Time dan Pemetaan Presisi',
            ],
            'pengiriman' => [
                'slug' => 'Kargo',
                'name' => 'Drone Kargo',
                'description' => 'Pengiriman Cepat dan Efisien Melalui Udara.',
            ],
            'suku-cadang' => [
                'slug' => 'suku-cadang',
                'name' => 'Suku Cadang',
                'description' => 'Suku Cadang Berkualitas.',
            ],
        ];
    }

    /**
     * @return array<string, array<string, mixed>>
     */
    public static function all(): array
    {
        if (app()->getLocale() === 'en') {
            return self::allEnglish();
        }

        return self::allIndonesian();
    }

    /**
     * @return array<string, array<string, mixed>>
     */
    private static function allIndonesian(): array
    {
        return [
            // ==========================================
            // KATEGORI 1: AGRIKULTUR
            // ==========================================
            'agri-h30' => [
                'id' => 'agri-h30',
                'modelCode' => 'Agri H30',
                'name' => 'Mechatron AGRI H30',
                'category' => 'Pertanian',
                'categorySlug' => 'agrikultur',
                'categoryDetail' => 'Drone Pertanian Hexacopter 30 Liter',
                'subtitle' => 'Drone Pertanian Kapasitas 30 Liter',
                'tagline' => 'Dirancang dengan stabilitas 6 rotor dan teknologi penyemprotan presisi untuk memaksimalkan efisiensi kerja harian di lahan pertanian.',
                'capacity' => '30 Liter',
                'image' => '/images/featured_drone_h30.jpg',
                'gallery' => [
                    '/images/featured_drone_h30.jpg',
                    '/images/IMG_2250.JPG',
                    '/images/IMG_8841.JPG',
                    '/images/IMG_8951.JPG',
                    '/images/IMG_9050.JPG',
                    '/images/IMG_9150.JPG',
                    '/images/featured_remote_kit.jpg',
                ],
                'whatsappNumber' => '6281112143111',
                'specifications' => [
                    ['label' => 'Fungsi', 'value' => 'Penyemprot & Penebar'],
                    ['label' => 'Waktu Terbang', 'value' => 'Hingga 10 menit'],
                    ['label' => 'Kecepatan Maksimal', 'value' => 'Hingga 7 m/s'],
                    ['label' => 'Produktivitas', 'value' => 'Hingga 6.5 ha/jam'],
                    ['label' => 'Jarak Jangkauan Kendali', 'value' => 'Hingga 2 km LOS'],
                    ['label' => 'Sensor', 'value' => 'Laju Aliran, Pendeteksi Kontur Tanah, Penghindar Halangan'],
                    ['label' => 'Dosis Penyemprotan', 'value' => '40 - 60 L/ha'],
                    ['label' => 'Dimensi Lipat (mm)', 'value' => '1104 x 1147 x 806'],
                    ['label' => 'Dimensi Terbuka (mm)', 'value' => '2058 x 1484'],
                ],
                'features' => [
                    [
                        'title' => 'Rangka Karbon Kokoh & Ringan',
                        'desc' => 'Dibuat dari serat karbon berkualitas tinggi. Sangat tangguh dan awet untuk pemakaian jangka panjang, namun tetap ringan saat bermanuver di udara.',
                    ],
                    [
                        'title' => 'Desain Lipat, Muat di Bagasi Mobil',
                        'desc' => 'Lengan drone dirancang agar mudah dilipat menjadi sangat ringkas. Lebih praktis dibawa ke lahan mana saja hanya dengan mobil biasa.',
                    ],
                    [
                        'title' => 'Fungsi 2-in-1 (Semprot & Tebar)',
                        'desc' => 'Beli 1 drone, dapat 2 fungsi! Tangki dirancang agar sangat mudah dibongkar-pasang dan diganti secara bergantian untuk menyemprot cairan maupun menebar pupuk butiran.',
                    ],
                    [
                        'title' => 'Kerja Otomatis (Auto Spray & Spread)',
                        'desc' => 'Cukup atur pola di layar, drone akan terbang dan bekerja secara otomatis. Cairan atau pupuk tersebar jauh lebih merata ke seluruh area lahan.',
                    ],
                    [
                        'title' => 'Radar Pintar Anti-Nabrak',
                        'desc' => 'Terbang lebih tenang dan aman. Dilengkapi sensor cerdas yang otomatis mendeteksi rintangan seperti pohon atau tiang, lalu menghindarinya sendiri.',
                    ],
                    [
                        'title' => 'Sangat Mudah Dioperasikan',
                        'desc' => 'Menggunakan remote kontrol pintar dengan tampilan layar dan bahasa yang sangat simpel. Pemula sekalipun bisa dengan cepat belajar menerbangkannya.',
                    ],
                ],
                'packageIncludes' => [
                    'Unit Drone (termasuk Kotak Penyimpanan)',
                    'Pengendali Jarak Jauh (Remote Control) & Tas Pelindung',
                    '2 Buah Baterai',
                    'Set Pengisi Daya',
                    '2 Buah Antena Jarak Jauh',
                    'Aksesori Pendukung',
                ],
                'fieldApplications' => [
                    [
                        'title' => 'Penyemprotan Tanaman Presisi',
                        'desc' => 'Penyemprotan cairan pupuk dan pestisida secara merata di area perkebunan atau persawahan dengan dosis terukur 40-60 L/ha.',
                    ],
                    [
                        'title' => 'Penyebaran Butiran & Benih',
                        'desc' => 'Penyebaran pupuk butiran (granular) atau benih tanaman secara cepat dan merata tanpa merusak area lahan.',
                    ],
                    [
                        'title' => 'Operasi Mengikuti Kontur Lahan',
                        'desc' => 'Penerbangan otomatis yang mengikuti kontur bukit atau perbukitan untuk menjaga konsistensi jarak semprot dari tajuk tanaman.',
                    ],
                    [
                        'title' => 'Penghindaran Rintangan Otomatis',
                        'desc' => 'Navigasi aman di lahan terbuka yang memiliki pepohonan, tiang listrik, atau struktur lain secara otomatis.',
                    ],
                    [
                        'title' => 'Efisiensi Skala Besar',
                        'desc' => 'Pengerjaan lahan seluas 4,1 hingga 6,5 hektar hanya dalam waktu satu jam, menghemat waktu dan biaya tenaga kerja secara signifikan.',
                    ],
                ],
            ],

            'agri-h15' => [
                'id' => 'agri-h15',
                'modelCode' => 'Agri H15',
                'name' => 'Mechatron AGRI H15',
                'category' => 'Pertanian',
                'categorySlug' => 'agrikultur',
                'categoryDetail' => 'Drone Pertanian Hexacopter 15 Liter',
                'subtitle' => 'Drone Pertanian Kapasitas 15 Liter',
                'tagline' => 'Solusi Cerdas untuk Pertanian Modern — Ringkas, Lincah, & Efisiensi Maksimal untuk Segala Medan Pertanian.',
                'capacity' => '15 Liter',
                'image' => '/images/featured_drone_h15.jpg',
                'gallery' => [
                    '/images/featured_drone_h15.jpg',
                    '/images/IMG_2286.JPG',
                    '/images/IMG_2281.JPG',
                    '/images/IMG_2270.JPG',
                    '/images/IMG_2294.JPG',
                ],
                'whatsappNumber' => '6281112143111',
                'specifications' => [
                    ['label' => 'Fungsi', 'value' => 'Penyemprot & Penebar'],
                    ['label' => 'Waktu Terbang', 'value' => 'Hingga 10 menit'],
                    ['label' => 'Kecepatan Maksimal', 'value' => 'Hingga 5.5 m/s'],
                    ['label' => 'Produktivitas', 'value' => 'Hingga 4.1 ha/jam'],
                    ['label' => 'Jarak Jangkauan Kendali', 'value' => 'Hingga 2 km LOS'],
                    ['label' => 'Sensor', 'value' => 'Laju Aliran, Pendeteksi Kontur Tanah, Penghindar Halangan'],
                    ['label' => 'Dosis Penyemprotan', 'value' => '40 - 60 L/ha'],
                    ['label' => 'Dimensi Lipat (mm)', 'value' => '803 x 884 x 718'],
                    ['label' => 'Dimensi Terbuka (mm)', 'value' => '1700 x 1484 x 718'],
                ],
                'features' => [
                    [
                        'title' => 'Rangka Karbon Kokoh & Ringan',
                        'desc' => 'Dibuat dari serat karbon berkualitas tinggi. Sangat tangguh dan awet untuk pemakaian jangka panjang, namun tetap ringan saat bermanuver di udara.',
                    ],
                    [
                        'title' => 'Desain Lipat, Muat di Bagasi Mobil',
                        'desc' => 'Lengan drone dirancang agar mudah dilipat menjadi sangat ringkas. Lebih praktis dibawa ke lahan mana saja hanya dengan mobil biasa.',
                    ],
                    [
                        'title' => 'Fungsi 2-in-1 (Semprot & Tebar)',
                        'desc' => 'Beli 1 drone, dapat 2 fungsi! Tangki dirancang agar sangat mudah dibongkar-pasang dan diganti secara bergantian untuk menyemprot cairan maupun menebar pupuk butiran.',
                    ],
                    [
                        'title' => 'Kerja Otomatis (Auto Spray & Spread)',
                        'desc' => 'Cukup atur pola di layar, drone akan terbang dan bekerja secara otomatis. Cairan atau pupuk tersebar jauh lebih merata ke seluruh area lahan.',
                    ],
                    [
                        'title' => 'Radar Pintar Anti-Nabrak',
                        'desc' => 'Terbang lebih tenang dan aman. Dilengkapi sensor cerdas yang otomatis mendeteksi rintangan seperti pohon atau tiang, lalu menghindarinya sendiri.',
                    ],
                    [
                        'title' => 'Sangat Mudah Dioperasikan',
                        'desc' => 'Menggunakan remote kontrol pintar dengan tampilan layar dan bahasa yang sangat simpel. Pemula sekalipun bisa dengan cepat belajar menerbangkannya.',
                    ],
                ],
                'packageIncludes' => [
                    'Unit Drone (termasuk Kotak Penyimpanan)',
                    'Pengendali Jarak Jauh (Remote Control) & Tas Pelindung',
                    '4 Buah Baterai',
                    'Set Pengisi Daya',
                    '2 Buah Antena Jarak Jauh',
                    'Aksesori Pendukung',
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

            // ==========================================
            // KATEGORI 2: DRONE PENGAWASAN
            // ==========================================
            'surveillance-q1' => [
                'id' => 'surveillance-q1',
                'modelCode' => 'Survey Q1',
                'name' => 'Mechatron Survey Q1',
                'category' => 'Pengawasan',
                'categorySlug' => 'pengawasan',
                'categoryDetail' => 'Drone Pengawasan Data Real-Time',
                'subtitle' => 'Pengawasan Real-Time dan Pemetaan Presisi',
                'tagline' => 'Solusi Pengawasan Cerdas — Pemantauan udara dengan data real-time dan kemudahan pengoperasian.',
                'capacity' => 'Radius 3 km / 20 Menit',
                'image' => '/images/drone_survei_cinematic.jpg',
                'gallery' => [
                    '/images/surv-Q1-2.jpg',
                    '/images/surv-Q1-1.jpg',
                    '/images/surv-Q1-3.png',
                    '/images/surv-Q1-4.jpg',
                ],
                'whatsappNumber' => '6281112143111',
                'specifications' => [
                    ['label' => 'Tipe', 'value' => 'BMT-31'],
                    ['label' => 'Sensor Gambar', 'value' => 'Ketinggian, kecepatan, Jarak'],
                    ['label' => 'Resolusi Gambar', 'value' => '1080p'],
                    ['label' => 'Konektivitas', 'value' => '5.8 GHz'],
                    ['label' => 'Kapasitas Baterai', 'value' => '10 000mAh'],
                    ['label' => 'Penyimpanan (Storage)', 'value' => '32GB'],
                    ['label' => 'Radius Jangkauan', 'value' => '3 Km'],
                    ['label' => 'Waktu Terbang (Flight time)', 'value' => '20 menit'],
                    ['label' => 'Kecepatan Terbang', 'value' => '80 km/h'],
                    ['label' => 'Dimensi per Produk', 'value' => 'P 55 cm x L 55 cm x T 40 cm'],
                    ['label' => 'Berat per Produk', 'value' => '5.000,00 gr'],
                ],
                'features' => [
                    [
                        'title' => 'Pengawasan Data Real-Time',
                        'desc' => 'Drone ini dirancang khusus untuk memberikan data pengawasan secara real-time, memastikan pemantauan yang cepat dan akurat.',
                    ],
                    [
                        'title' => 'Radius & Kecepatan Optimal',
                        'desc' => 'Mampu menjangkau radius hingga 3 km dengan kecepatan tetap 80 km/jam, ideal untuk mencakup area luas dengan cepat.',
                    ],
                    [
                        'title' => 'Fleksibilitas Operasional',
                        'desc' => 'Dapat beroperasi selama 20 menit dan menawarkan fleksibilitas pengendalian baik secara manual maupun otomatis sesuai kebutuhan misi.',
                    ],
                    [
                        'title' => 'Operasi Siang & Malam',
                        'desc' => 'Dirancang untuk dapat beroperasi optimal baik pada siang hari maupun malam hari, mendukung pengawasan 24 jam.',
                    ],
                    [
                        'title' => 'Aplikasi Remote Kontrol Mandiri',
                        'desc' => 'Menggunakan software aplikasi remote control yang dikembangkan sendiri, sehingga sangat familier dan mudah digunakan bahkan oleh operator awam.',
                    ],
                    [
                        'title' => 'Resolusi Gambar Tajam',
                        'desc' => 'Dilengkapi dengan resolusi gambar 1080p, memastikan detail visual yang jelas untuk keperluan identifikasi dan analisis.',
                    ],
                ],
                'packageIncludes' => [
                    'Unit drone',
                    'Remote kontrol',
                    'Baterai',
                    'Charger',
                    'Hardcase box unit',
                ],
                'fieldApplications' => [
                    [
                        'title' => 'Pemantauan Keamanan Area',
                        'desc' => 'Patroli udara untuk memantau batas wilayah, fasilitas penting, atau area publik dengan penyampaian informasi situasi secara seketika.',
                    ],
                    [
                        'title' => 'Inspeksi & Pemetaan Cepat',
                        'desc' => 'Melakukan inspeksi visual awal pada area yang sulit dijangkau atau berbahaya bagi personel darat dalam waktu singkat.',
                    ],
                ],
            ],

            // ==========================================
            // KATEGORI 3: PENGIRIMAN (LOGISTIK & KARGO)
            // ==========================================
            'delivery-h2' => [
                'id' => 'delivery-h2',
                'modelCode' => 'Deliv H2',
                'name' => 'Mechatron Deliv H2',
                'category' => 'Pengiriman',
                'categorySlug' => 'pengiriman',
                'categoryDetail' => 'Drone Hexacopter Pengiriman Point to Point',
                'subtitle' => 'Drone Kurir Point-to-Point Otomatis',
                'tagline' => 'Solusi Logistik Cepat dan Akurat — Pengiriman paket otomatis berbasis koordinat dengan kecepatan tinggi.',
                'capacity' => '1.5 kg / 3 km',
                'image' => '/images/drone_delivery.jpeg',
                'gallery' => [
                    '/images/delivH2-1.jpeg',
                    '/images/delivH2-2.jpeg',
                    '/images/delivH2-3.jpeg',
                ],
                'whatsappNumber' => '6281112143111',
                'specifications' => [
                    ['label' => 'Tipe', 'value' => 'BMT-41'],
                    ['label' => 'Kapasitas Beban Maksimal', 'value' => '1,5 kg'],
                    ['label' => 'Radius Jelajah', 'value' => '3 km'],
                    ['label' => 'Kecepatan Terbang', 'value' => '80 km/h'],
                    ['label' => 'Waktu Terbang (Maksimal)', 'value' => '12 menit'],
                    ['label' => 'Konfigurasi', 'value' => 'Hexacopter'],
                    ['label' => 'Sensor Gambar', 'value' => 'GPRS'],
                    ['label' => 'Konektivitas', 'value' => '2,4 dan 5.8 GHz'],
                    ['label' => 'Kapasitas Baterai', 'value' => '19000 mAh'],
                    ['label' => 'Dimensi per Produk', 'value' => '110 cm x 45 cm x 35 cm'],
                    ['label' => 'Berat per Produk', 'value' => '6.000,00 gr'],
                ],
                'features' => [
                    [
                        'title' => 'Pengiriman Point-to-Point Otomatis',
                        'desc' => 'Drone beroperasi secara otomatis untuk mengantarkan barang tepat sasaran sesuai dengan titik koordinat pada sistem GPRS.',
                    ],
                    [
                        'title' => 'Kecepatan Tinggi',
                        'desc' => 'Mampu terbang dengan kecepatan tetap hingga 80 km/jam, memastikan paket tiba di tujuan dengan cepat dan efisien.',
                    ],
                    [
                        'title' => 'Performa Hexacopter Stabil',
                        'desc' => 'Desain 6 rotor (hexacopter) memberikan stabilitas ekstra saat membawa beban maksimal 1,5 kg selama penerbangan.',
                    ],
                    [
                        'title' => 'Aplikasi Remote Kontrol Mandiri',
                        'desc' => 'Dilengkapi dengan perangkat lunak (software) aplikasi remote kontrol yang dikembangkan secara internal untuk keamanan dan keandalan optimal.',
                    ],
                    [
                        'title' => 'Kapasitas Baterai Besar',
                        'desc' => 'Didukung oleh baterai berkapasitas 19000 mAh yang memungkinkan waktu terbang maksimal hingga 12 menit per misi pengiriman.',
                    ],
                    [
                        'title' => 'Penyimpanan Internal 64 GB',
                        'desc' => 'Memiliki kapasitas penyimpanan bawaan sebesar 64 GB untuk mendukung kebutuhan sistem operasional.',
                    ],
                ],
                'packageIncludes' => [
                    'Unit Drone BMT-41',
                    'Remote Kontrol',
                    'Baterai',
                    'Charger',
                    'Hardcase Box Unit',
                ],
                'fieldApplications' => [
                    [
                        'title' => 'Pengiriman Barang Darurat & Medis',
                        'desc' => 'Cocok untuk mengirimkan suplai medis ringan atau komponen kritis dengan cepat antar fasilitas dalam radius 3 km.',
                    ],
                    [
                        'title' => 'Logistik Antar Gedung Perkantoran',
                        'desc' => 'Solusi cepat untuk memindahkan dokumen atau paket kecil antar gedung tanpa terjebak hambatan lalu lintas.',
                    ],
                ],
            ],

            'delivery-h1' => [
                'id' => 'delivery-h1',
                'modelCode' => 'Deliv H1',
                'name' => 'Mechatron Deliv H1',
                'category' => 'Pengiriman',
                'categorySlug' => 'pengiriman',
                'categoryDetail' => 'Drone Hexacopter Pengiriman Point to Point',
                'subtitle' => 'Drone Kurir Point-to-Point Otomatis',
                'tagline' => 'Solusi Logistik Cepat dan Akurat — Pengiriman paket otomatis berbasis koordinat dengan kecepatan tinggi.',
                'capacity' => '1.5 kg / 3 km',
                'image' => '/images/h1-1.jpeg',
                'gallery' => [
                    '/images/h1-1.jpeg',
                    '/images/h1-2.jpeg',
                    '/images/h1-3.jpeg',
                ],
                'whatsappNumber' => '6281112143111',
                'specifications' => [
                    ['label' => 'Tipe', 'value' => 'BMT-41'],
                    ['label' => 'Kapasitas Beban Maksimal', 'value' => '1,5 kg'],
                    ['label' => 'Radius Jelajah', 'value' => '3 km'],
                    ['label' => 'Kecepatan Terbang', 'value' => '80 km/h'],
                    ['label' => 'Waktu Terbang (Maksimal)', 'value' => '12 menit'],
                    ['label' => 'Konfigurasi', 'value' => 'Hexacopter'],
                    ['label' => 'Sensor Gambar', 'value' => 'GPRS'],
                    ['label' => 'Konektivitas', 'value' => '2,4 dan 5.8 GHz'],
                    ['label' => 'Kapasitas Baterai', 'value' => '19000 mAh'],
                    ['label' => 'Dimensi per Produk', 'value' => '110 cm x 45 cm x 35 cm'],
                    ['label' => 'Berat per Produk', 'value' => '6.000,00 gr'],
                ],
                'features' => [
                    [
                        'title' => 'Pengiriman Point-to-Point Otomatis',
                        'desc' => 'Drone beroperasi secara otomatis untuk mengantarkan barang tepat sasaran sesuai dengan titik koordinat pada sistem GPRS.',
                    ],
                    [
                        'title' => 'Kecepatan Tinggi',
                        'desc' => 'Mampu terbang dengan kecepatan tetap hingga 80 km/jam, memastikan paket tiba di tujuan dengan cepat dan efisien.',
                    ],
                    [
                        'title' => 'Performa Hexacopter Stabil',
                        'desc' => 'Desain 6 rotor (hexacopter) memberikan stabilitas ekstra saat membawa beban maksimal 1,5 kg selama penerbangan.',
                    ],
                    [
                        'title' => 'Aplikasi Remote Kontrol Mandiri',
                        'desc' => 'Dilengkapi dengan perangkat lunak (software) aplikasi remote kontrol yang dikembangkan secara internal untuk keamanan dan keandalan optimal.',
                    ],
                    [
                        'title' => 'Kapasitas Baterai Besar',
                        'desc' => 'Didukung oleh baterai berkapasitas 19000 mAh yang memungkinkan waktu terbang maksimal hingga 12 menit per misi pengiriman.',
                    ],
                    [
                        'title' => 'Penyimpanan Internal 64 GB',
                        'desc' => 'Memiliki kapasitas penyimpanan bawaan sebesar 64 GB untuk mendukung kebutuhan sistem operasional.',
                    ],
                ],
                'packageIncludes' => [
                    'Unit Drone BMT-41',
                    'Remote Kontrol',
                    'Baterai',
                    'Charger',
                    'Hardcase Box Unit',
                ],
                'fieldApplications' => [
                    [
                        'title' => 'Pengiriman Barang Darurat & Medis',
                        'desc' => 'Cocok untuk mengirimkan suplai medis ringan atau komponen kritis dengan cepat antar fasilitas dalam radius 3 km.',
                    ],
                    [
                        'title' => 'Logistik Antar Gedung Perkantoran',
                        'desc' => 'Solusi cepat untuk memindahkan dokumen atau paket kecil antar gedung tanpa terjebak hambatan lalu lintas.',
                    ],
                ],
            ],

            // ==========================================
            // KATEGORI 4: SUKU CADANG & AKSESORIS
            // ==========================================
            'original-parts' => [
                'id' => 'original-parts',
                'modelCode' => 'PARTS-ORIGINAL',
                'name' => 'Suku Cadang & Komponen Drone Berkualitas',
                'category' => 'Suku Cadang',
                'categorySlug' => 'suku-cadang',
                'categoryDetail' => 'Komponen  Berkualitas Tinggi',
                'subtitle' => 'Jaminan 100% Barang Berkualitas & Stok Tersedia di Indonesia',
                'tagline' => 'Kami menyetok komponen berkualitas untuk memastikan perbaikan dan perawatan armada drone Anda berjalan tanpa hambatan.',
                'capacity' => 'Stok Tersedia Siap Kirim',
                'image' => '/images/sparepart.jpeg',
                'gallery' => [
                    '/images/sparepart.jpeg',
                ],
                'whatsappNumber' => '6281112143111',
                'specifications' => [],
                'features' => [],
                'packageIncludes' => [],
                'fieldApplications' => [],
            ],
        ];
    }

    /**
     * @return array<string, array<string, mixed>>
     */
    private static function allEnglish(): array
    {
        return [
            'agri-h30' => [
                'id' => 'agri-h30',
                'modelCode' => 'Agri H30',
                'name' => 'Mechatron AGRI H30',
                'category' => 'Agriculture',
                'categorySlug' => 'agrikultur',
                'categoryDetail' => '30-Liter Hexacopter Agricultural Drone',
                'subtitle' => '30-Liter Capacity Agricultural Drone',
                'tagline' => 'Engineered with 6-rotor stability and precision spraying technology to maximize daily operational efficiency across agricultural fields.',
                'capacity' => '30 Liters',
                'image' => '/images/featured_drone_h30.jpg',
                'gallery' => [
                    '/images/featured_drone_h30.jpg',
                    '/images/featured_remote_kit.jpg',
                ],
                'whatsappNumber' => '6281112143111',
                'specifications' => [
                    ['label' => 'Function', 'value' => 'Sprayer & Spreader'],
                    ['label' => 'Flight Time', 'value' => 'Up to 10 minutes'],
                    ['label' => 'Max Speed', 'value' => 'Up to 7 m/s'],
                    ['label' => 'Productivity', 'value' => 'Up to 6.5 ha/hour'],
                    ['label' => 'Control Range', 'value' => 'Up to 2 km LOS'],
                    ['label' => 'Sensors', 'value' => 'Flow Rate, Terrain Following Radar, Obstacle Avoidance'],
                    ['label' => 'Spraying Dosage', 'value' => '40 - 60 L/ha'],
                    ['label' => 'Folded Dimensions (mm)', 'value' => '1104 x 1147 x 806'],
                    ['label' => 'Unfolded Dimensions (mm)', 'value' => '2058 x 1484'],
                ],
                'features' => [
                    [
                        'title' => 'Rigid & Lightweight Carbon Frame',
                        'desc' => 'Built from high-grade aviation carbon fiber. Extremely tough and durable for long-term field operations while remaining agile in flight.',
                    ],
                    [
                        'title' => 'Foldable Design, Fits in Car Trunk',
                        'desc' => 'Drone arms fold quickly into a compact footprint, making it practical to transport to any plantation using a standard vehicle.',
                    ],
                    [
                        'title' => '2-in-1 Function (Spray & Spread)',
                        'desc' => 'One drone, two capabilities! The quick-swap tank system switches effortlessly between liquid spraying and granular fertilizer spreading.',
                    ],
                    [
                        'title' => 'Autonomous Operation (Auto Spray & Spread)',
                        'desc' => 'Simply configure the route on screen and the drone flies and sprays autonomously for uniform coverage across the entire field.',
                    ],
                    [
                        'title' => 'Smart Anti-Collision Radar',
                        'desc' => 'Fly with confidence. Intelligent radar sensors automatically detect obstacles such as trees or utility poles and navigate around them.',
                    ],
                    [
                        'title' => 'Intuitive & Easy to Operate',
                        'desc' => 'Equipped with a smart display controller featuring a clean, beginner-friendly interface so operators can master flight operations quickly.',
                    ],
                ],
                'packageIncludes' => [
                    'Drone Unit (including Storage Case)',
                    'Remote Controller & Protective Carrying Case',
                    '2 Smart Flight Batteries',
                    'Fast Charger Set',
                    '2 Long-Range Antennas',
                    'Supporting Accessories',
                ],
                'fieldApplications' => [
                    [
                        'title' => 'Precision Crop Spraying',
                        'desc' => 'Uniform application of liquid fertilizers and pesticides across plantations or paddy fields at a calibrated 40-60 L/ha dosage.',
                    ],
                    [
                        'title' => 'Granular & Seed Spreading',
                        'desc' => 'Fast, even distribution of granular fertilizers or crop seeds without compacting or damaging the soil.',
                    ],
                    [
                        'title' => 'Terrain-Following Operations',
                        'desc' => 'Automated flight that follows hilly contours to maintain a consistent spraying height above the crop canopy.',
                    ],
                    [
                        'title' => 'Automated Obstacle Avoidance',
                        'desc' => 'Safe navigation across open fields containing trees, utility poles, or other structures.',
                    ],
                    [
                        'title' => 'Large-Scale Efficiency',
                        'desc' => 'Covers 4.1 to 6.5 hectares in a single hour, significantly reducing time and labor costs.',
                    ],
                ],
            ],

            'agri-h15' => [
                'id' => 'agri-h15',
                'modelCode' => 'Agri H15',
                'name' => 'Mechatron AGRI H15',
                'category' => 'Agriculture',
                'categorySlug' => 'agrikultur',
                'categoryDetail' => '15-Liter Hexacopter Agricultural Drone',
                'subtitle' => '15-Liter Capacity Agricultural Drone',
                'tagline' => 'Smart Solution for Every Mission — Compact, Agile, & Maximum Efficiency for All Agricultural Terrains.',
                'capacity' => '15 Liters',
                'image' => '/images/featured_drone_h15.jpg',
                'gallery' => [
                    '/images/featured_drone_h15.jpg',
                    '/images/carbon_propellers.jpg',
                ],
                'whatsappNumber' => '6281112143111',
                'specifications' => [
                    ['label' => 'Function', 'value' => 'Sprayer & Spreader'],
                    ['label' => 'Flight Time', 'value' => 'Up to 10 minutes'],
                    ['label' => 'Max Speed', 'value' => 'Up to 5.5 m/s'],
                    ['label' => 'Productivity', 'value' => 'Up to 4.1 ha/hour'],
                    ['label' => 'Control Range', 'value' => 'Up to 2 km LOS'],
                    ['label' => 'Sensors', 'value' => 'Flow Rate, Terrain Following Radar, Obstacle Avoidance'],
                    ['label' => 'Spraying Dosage', 'value' => '40 - 60 L/ha'],
                    ['label' => 'Folded Dimensions (mm)', 'value' => '803 x 884 x 718'],
                    ['label' => 'Unfolded Dimensions (mm)', 'value' => '1700 x 1484 x 718'],
                ],
                'features' => [
                    [
                        'title' => 'Rigid & Lightweight Carbon Frame',
                        'desc' => 'Built from high-grade aviation carbon fiber. Extremely tough and durable for long-term field operations while remaining agile in flight.',
                    ],
                    [
                        'title' => 'Foldable Design, Fits in Car Trunk',
                        'desc' => 'Drone arms fold quickly into a compact footprint, making it practical to transport to any plantation using a standard vehicle.',
                    ],
                    [
                        'title' => '2-in-1 Function (Spray & Spread)',
                        'desc' => 'One drone, two capabilities! The quick-swap tank system switches effortlessly between liquid spraying and granular fertilizer spreading.',
                    ],
                    [
                        'title' => 'Autonomous Operation (Auto Spray & Spread)',
                        'desc' => 'Simply configure the route on screen and the drone flies and sprays autonomously for uniform coverage across the entire field.',
                    ],
                    [
                        'title' => 'Smart Anti-Collision Radar',
                        'desc' => 'Fly with confidence. Intelligent radar sensors automatically detect obstacles such as trees or utility poles and navigate around them.',
                    ],
                    [
                        'title' => 'Intuitive & Easy to Operate',
                        'desc' => 'Equipped with a smart display controller featuring a clean, beginner-friendly interface so operators can master flight operations quickly.',
                    ],
                ],
                'packageIncludes' => [
                    'Drone Unit (including Storage Case)',
                    'Remote Controller & Protective Carrying Case',
                    '4 Smart Flight Batteries',
                    'Fast Charger Set',
                    '2 Long-Range Antennas',
                    'Supporting Accessories',
                ],
                'fieldApplications' => [
                    [
                        'title' => 'Rice Paddies & Food Crops',
                        'desc' => 'Precision spraying for rice, corn, and soybean fields without damaging bunds or compacting soil.',
                    ],
                    [
                        'title' => 'Horticulture & Vegetable Farms',
                        'desc' => 'High-precision micro-mist spraying for chili, onion, melon, and vegetable crops.',
                    ],
                ],
            ],

            'surveillance-q1' => [
                'id' => 'surveillance-q1',
                'modelCode' => 'Survey Q1',
                'name' => 'Mechatron Survey Q1',
                'category' => 'Surveillance',
                'categorySlug' => 'pengawasan',
                'categoryDetail' => 'Real-Time Data Surveillance Drone',
                'subtitle' => 'Day & Night Real-Time Surveillance Drone',
                'tagline' => 'Smart Surveillance Solution — Real-time aerial monitoring with effortless operation.',
                'capacity' => '3 km Radius / 20 Mins',
                'image' => '/images/drone_survei_cinematic.jpg',
                'gallery' => [
                    '/images/surv-Q1-2.jpg',
                    '/images/surv-Q1-1.jpg',
                    '/images/surv-Q1-3.png',
                    '/images/surv-Q1-4.jpg',
                ],
                'whatsappNumber' => '6281112143111',
                'specifications' => [
                    ['label' => 'Type', 'value' => 'BMT-31'],
                    ['label' => 'Telemetry Sensors', 'value' => 'Altitude, Speed, Distance'],
                    ['label' => 'Video Resolution', 'value' => '1080p'],
                    ['label' => 'Connectivity', 'value' => '5.8 GHz'],
                    ['label' => 'Battery Capacity', 'value' => '10,000 mAh'],
                    ['label' => 'Onboard Storage', 'value' => '32 GB'],
                    ['label' => 'Operating Radius', 'value' => '3 km'],
                    ['label' => 'Flight Time', 'value' => '20 minutes'],
                    ['label' => 'Cruising Speed', 'value' => '80 km/h'],
                    ['label' => 'Product Dimensions', 'value' => 'L 55 cm x W 55 cm x H 40 cm'],
                    ['label' => 'Product Weight', 'value' => '5,000 g'],
                ],
                'features' => [
                    [
                        'title' => 'Real-Time Surveillance Data',
                        'desc' => 'Purpose-built to stream live aerial telemetry and video data, ensuring rapid and accurate situational awareness.',
                    ],
                    [
                        'title' => 'Optimal Range & Cruising Speed',
                        'desc' => 'Covers a 3 km operational radius at a steady 80 km/h cruising speed, ideal for monitoring wide perimeters quickly.',
                    ],
                    [
                        'title' => 'Operational Flexibility',
                        'desc' => 'Operates for up to 20 minutes per sortie with seamless switching between manual and autonomous waypoint control.',
                    ],
                    [
                        'title' => 'Day & Night Operations',
                        'desc' => 'Engineered to perform reliably during both daytime and nighttime missions for 24-hour security coverage.',
                    ],
                    [
                        'title' => 'In-House Ground Control App',
                        'desc' => 'Powered by Mechatron\'s proprietary remote control software, making flight control intuitive even for first-time operators.',
                    ],
                    [
                        'title' => 'Crisp 1080p Imaging',
                        'desc' => 'Delivers clear 1080p visual detail for rapid field identification and post-flight analysis.',
                    ],
                ],
                'packageIncludes' => [
                    'Drone Unit',
                    'Remote Controller',
                    'Flight Battery',
                    'Charger',
                    'Hardcase Storage Box',
                ],
                'fieldApplications' => [
                    [
                        'title' => 'Area Security Patrol',
                        'desc' => 'Aerial patrols to monitor perimeters, critical infrastructure, or public areas with instant situational reporting.',
                    ],
                    [
                        'title' => 'Rapid Inspection & Mapping',
                        'desc' => 'Conduct quick visual inspections over hard-to-reach or hazardous zones safely from the air.',
                    ],
                ],
            ],

            'delivery-h2' => [
                'id' => 'delivery-h2',
                'modelCode' => 'Deliv H2',
                'name' => 'Mechatron Deliv H2',
                'category' => 'Delivery',
                'categorySlug' => 'pengiriman',
                'categoryDetail' => 'Point-to-Point Hexacopter Delivery Drone',
                'subtitle' => 'Autonomous Point-to-Point Courier Drone',
                'tagline' => 'Fast and Accurate Logistics Solution — High-speed coordinate-based automated package delivery.',
                'capacity' => '1.5 kg / 3 km',
                'image' => '/images/drone_delivery.jpeg',
                'gallery' => [
                    '/images/delivH2-1.jpeg',
                    '/images/delivH2-2.jpeg',
                    '/images/delivH2-3.jpeg',
                ],
                'whatsappNumber' => '6281112143111',
                'specifications' => [
                    ['label' => 'Type', 'value' => 'BMT-41'],
                    ['label' => 'Max Payload Capacity', 'value' => '1.5 kg'],
                    ['label' => 'Operating Radius', 'value' => '3 km'],
                    ['label' => 'Cruising Speed', 'value' => '80 km/h'],
                    ['label' => 'Max Flight Time', 'value' => '12 minutes'],
                    ['label' => 'Configuration', 'value' => 'Hexacopter'],
                    ['label' => 'Navigation System', 'value' => 'GPRS Coordinates'],
                    ['label' => 'Connectivity', 'value' => '2.4 & 5.8 GHz'],
                    ['label' => 'Battery Capacity', 'value' => '19,000 mAh'],
                    ['label' => 'Product Dimensions', 'value' => '110 cm x 45 cm x 35 cm'],
                    ['label' => 'Product Weight', 'value' => '6,000 g'],
                ],
                'features' => [
                    [
                        'title' => 'Automated Point-to-Point Delivery',
                        'desc' => 'Flies autonomously to deliver packages accurately to target coordinates using its onboard GPRS navigation system.',
                    ],
                    [
                        'title' => 'High-Speed Transit',
                        'desc' => 'Cruises at speeds up to 80 km/h, ensuring urgent payloads arrive at their destination quickly and efficiently.',
                    ],
                    [
                        'title' => 'Stable Hexacopter Performance',
                        'desc' => 'Six-rotor hexacopter layout provides extra flight stability while carrying up to 1.5 kg of payload.',
                    ],
                    [
                        'title' => 'In-House Remote Control Software',
                        'desc' => 'Equipped with internally developed flight control software for optimal operational security and reliability.',
                    ],
                    [
                        'title' => 'High-Capacity 19,000 mAh Battery',
                        'desc' => 'Powered by a 19,000 mAh battery pack supporting up to 12 minutes of flight time per delivery mission.',
                    ],
                    [
                        'title' => '64 GB Internal Storage',
                        'desc' => 'Includes 64 GB of built-in storage to support mission logging and operational systems.',
                    ],
                ],
                'packageIncludes' => [
                    'BMT-41 Drone Unit',
                    'Remote Controller',
                    'Flight Battery',
                    'Charger',
                    'Hardcase Storage Box',
                ],
                'fieldApplications' => [
                    [
                        'title' => 'Emergency & Medical Supply Delivery',
                        'desc' => 'Ideal for transporting lightweight medical supplies or critical parts rapidly between facilities within a 3 km radius.',
                    ],
                    [
                        'title' => 'Inter-Building Corporate Logistics',
                        'desc' => 'Fast solution for moving documents or small parcels between industrial or office buildings without traffic delays.',
                    ],
                ],
            ],

            'delivery-h1' => [
                'id' => 'delivery-h1',
                'modelCode' => 'Deliv H1',
                'name' => 'Mechatron Deliv H1',
                'category' => 'Delivery',
                'categorySlug' => 'pengiriman',
                'categoryDetail' => 'Point-to-Point Hexacopter Delivery Drone',
                'subtitle' => 'Autonomous Point-to-Point Courier Drone',
                'tagline' => 'Fast and Accurate Logistics Solution — High-speed coordinate-based automated package delivery.',
                'capacity' => '1.5 kg / 3 km',
                'image' => '/images/h1-1.jpeg',
                'gallery' => [
                    '/images/h1-1.jpeg',
                    '/images/h1-2.jpeg',
                    '/images/h1-3.jpeg',
                ],
                'whatsappNumber' => '6281112143111',
                'specifications' => [
                    ['label' => 'Type', 'value' => 'BMT-41'],
                    ['label' => 'Max Payload Capacity', 'value' => '1.5 kg'],
                    ['label' => 'Operating Radius', 'value' => '3 km'],
                    ['label' => 'Cruising Speed', 'value' => '80 km/h'],
                    ['label' => 'Max Flight Time', 'value' => '12 minutes'],
                    ['label' => 'Configuration', 'value' => 'Hexacopter'],
                    ['label' => 'Navigation System', 'value' => 'GPRS Coordinates'],
                    ['label' => 'Connectivity', 'value' => '2.4 & 5.8 GHz'],
                    ['label' => 'Battery Capacity', 'value' => '19,000 mAh'],
                    ['label' => 'Product Dimensions', 'value' => '110 cm x 45 cm x 35 cm'],
                    ['label' => 'Product Weight', 'value' => '6,000 g'],
                ],
                'features' => [
                    [
                        'title' => 'Automated Point-to-Point Delivery',
                        'desc' => 'Flies autonomously to deliver packages accurately to target coordinates using its onboard GPRS navigation system.',
                    ],
                    [
                        'title' => 'High-Speed Transit',
                        'desc' => 'Cruises at speeds up to 80 km/h, ensuring urgent payloads arrive at their destination quickly and efficiently.',
                    ],
                    [
                        'title' => 'Stable Hexacopter Performance',
                        'desc' => 'Six-rotor hexacopter layout provides extra flight stability while carrying up to 1.5 kg of payload.',
                    ],
                    [
                        'title' => 'In-House Remote Control Software',
                        'desc' => 'Equipped with internally developed flight control software for optimal operational security and reliability.',
                    ],
                    [
                        'title' => 'High-Capacity 19,000 mAh Battery',
                        'desc' => 'Powered by a 19,000 mAh battery pack supporting up to 12 minutes of flight time per delivery mission.',
                    ],
                    [
                        'title' => '64 GB Internal Storage',
                        'desc' => 'Includes 64 GB of built-in storage to support mission logging and operational systems.',
                    ],
                ],
                'packageIncludes' => [
                    'BMT-41 Drone Unit',
                    'Remote Controller',
                    'Flight Battery',
                    'Charger',
                    'Hardcase Storage Box',
                ],
                'fieldApplications' => [
                    [
                        'title' => 'Emergency & Medical Supply Delivery',
                        'desc' => 'Ideal for transporting lightweight medical supplies or critical parts rapidly between facilities within a 3 km radius.',
                    ],
                    [
                        'title' => 'Inter-Building Corporate Logistics',
                        'desc' => 'Fast solution for moving documents or small parcels between industrial or office buildings without traffic delays.',
                    ],
                ],
            ],

            'quality-parts' => [
                'id' => 'quality-parts',
                'modelCode' => 'PARTS-QUALITY',
                'name' => 'High Quality Drone Spare Parts & Components',
                'category' => 'Spare Parts',
                'categorySlug' => 'suku-cadang',
                'categoryDetail' => 'High Quality Factory-Direct OEM Components',
                'subtitle' => '100% Genuine Guarantee & Ready Stock in Indonesia',
                'tagline' => 'Direct from Primary Manufacturers — We stock high quality components locally to ensure your drone fleet maintenance and repairs run without backorder delays.',
                'capacity' => 'Ready Local Stock',
                'image' => '/images/sparepart.jpeg',
                'gallery' => [
                    '/images/sparepart.jpeg',
                ],
                'whatsappNumber' => '6281112143111',
                'specifications' => [],
                'features' => [],
                'packageIncludes' => [],
                'fieldApplications' => [],
            ],
        ];
    }

    /**
     * @return array<string, array<string, mixed>>
     */
    public static function allSpareparts(): array
    {
        if (app()->getLocale() === 'en') {
            return self::allSparepartsEnglish();
        }

        return self::allSparepartsIndonesian();
    }

    private static function allSparepartsIndonesian(): array
    {
        return [
            'motor' => [
                'title' => 'Motor BLDC',
                'img' => [
                    '/images/spareparts/t-motor.jpg',
                    '/images/spareparts/sunnysky.jpg',
                    '/images/spareparts/dualsky.jpg',
                ],
                'desc' => "Kami menyediakan motor BLDC berkualitas tinggi dari merek terkenal seperti T-Motor, SunnySky, dan Dual Sky. Motor ini dirancang untuk memberikan dorongan yang kuat, stabilitas, dan daya tahan bagi drone Anda.\n\nDengan sistem pendingin yang efisien, motor ini beroperasi secara optimal tanpa mengalami panas berlebih, mendukung manuver cepat dan penerbangan dalam berbagai kondisi.",
                'brands' => ['T-Motor', 'SunnySky', 'DualSky'],
                'link' => ['https://store.tmotor.com/', 'https://sunnyskyusa.com/', 'http://dualsky.com/'],
            ],
            'propeller' => [
                'title' => 'Baling-Baling (Propeller)',
                'img' => [
                    '/images/spareparts/falcon-propeller.png',
                    '/images/spareparts/apc-propeller.jpg',
                ],
                'desc' => "Baling-baling dari merek terkemuka seperti Falcon Propeller dan APC Propellers dirancang untuk memberikan daya angkat dan performa yang efisien bagi drone Anda.\n\nDengan berbagai ukuran dan konfigurasi, baling-baling ini memastikan karakteristik penerbangan yang optimal dalam berbagai kondisi.",
                'brands' => ['Falcon Propeller', 'APC Propellers'],
                'link' => ['https://www.falconpropellers.com/', 'https://www.apcprop.com/'],
            ],
            'flight-controller' => [
                'title' => 'Flight Controller',
                'img' => [
                    'images/spareparts/pixhawk6c.png',
                    'images/spareparts/matek_h743.jpg',
                ],
                'desc' => "Flight controller dari merek terkemuka seperti Pixhawk dan Matek dirancang untuk mendukung navigasi otonom, manajemen sensor, dan kontrol penerbangan canggih.\n\nDengan kompatibilitas luas dan fitur canggih, flight controller ini ideal untuk berbagai aplikasi drone, mulai dari proyek hobi hingga penggunaan profesional.",
                'brands' => ['Pixhawk', 'Matek'],
                'link' => ['https://pixhawk.org/', 'https://mateksys.com/'],
            ],
        ];
    }

    /**
     * @return array<string, array<string, mixed>>
     */
    private static function allSparepartsEnglish(): array
    {
        return [
            'motor' => [
                'title' => 'Motor',
                'img' => [
                    '/images/spareparts/t-motor.jpg',
                    '/images/spareparts/sunnysky.jpg',
                    '/images/spareparts/dualsky.jpg',
                ],
                'desc' => "We offer high-quality motors from renowned brands such as T-Motor, SunnySky, and Dual Sky. These motors are designed to deliver strong thrust, stability, and durability for your drone.\n\nWith efficient cooling systems, they operate optimally without overheating, supporting swift maneuvers and flights under various conditions.",
                'brands' => ['T-Motor', 'SunnySky', 'DualSky'],
                'link' => ['https://store.tmotor.com/', 'https://sunnyskyusa.com/', 'http://dualsky.com/'],
            ],
            'propeller' => [
                'title' => 'Propeller',
                'img' => [
                    '/images/spareparts/falcon-propeller.png',
                    '/images/spareparts/apc-propeller.jpg',
                ],
                'desc' => "Propellers from leading brands such as Falcon Propeller and APC Propellers are designed to provide efficient lift and performance for your drone.\n\nWith a wide range of sizes and configurations, these propellers ensure optimal flight characteristics under various conditions.",
                'brands' => ['Falcon Propeller', 'APC Propellers'],
                'link' => ['https://www.falconpropellers.com/', 'https://www.apcprop.com/'],
            ],
            'flight-controller' => [
                'title' => 'Flight Controller',
                'img' => [
                    'images/spareparts/pixhawk6c.png',
                    'images/spareparts/matek_h743.jpg',
                ],
                'desc' => "Flight controllers from leading brands such as Pixhawk and Matek are designed to support autonomous navigation, sensor management, and advanced flight control.\n\nWith wide compatibility and sophisticated features, they are ideal for a variety of drone applications, from hobbyist projects to professional use.",
                'brands' => ['Pixhawk', 'Matek'],
                'link' => ['https://pixhawk.org/', 'https://mateksys.com/'],
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

        $product = null;

        if (isset($all[$id])) {
            $product = $all[$id];
        } elseif (str_contains($id, 't100') || str_contains($id, '2050')) {
            $product = $all['agri-t100'] ?? null;
        } elseif (str_contains($id, 'h30') || str_contains($id, '1525')) {
            $product = $all['agri-h30'] ?? null;
        } elseif (str_contains($id, 'h15') || str_contains($id, '1323')) {
            $product = $all['agri-h15'] ?? null;
        } elseif (str_contains($id, 'm400') || str_contains($id, 'matrice') || str_contains($id, 'photo') || str_contains($id, 'foto') || str_contains($id, 'survey-m400')) {
            $product = $all['photo-m400'] ?? ($all['survey-m400'] ?? null);
        } elseif (str_contains($id, 'cargo') || str_contains($id, 'c50')) {
            $product = $all['cargo-c50'] ?? null;
        } elseif (str_contains($id, 'courier') || str_contains($id, 'delivery') || str_contains($id, 'x10')) {
            $product = $all['delivery-x10'] ?? null;
        } elseif (str_contains($id, 'battery') || str_contains($id, 'b30')) {
            $product = $all['smart-battery-b30'] ?? null;
        } elseif (str_contains($id, 'propeller') || str_contains($id, 'baling')) {
            $product = $all['carbon-propeller-kit'] ?? null;
        } elseif (str_contains($id, 'ground') || str_contains($id, 'gcs') || str_contains($id, 'remote')) {
            $product = $all['mechatron-ground-station'] ?? null;
        } elseif (str_contains($id, 'power') || str_contains($id, 'combo') || str_contains($id, 'kit') || str_contains($id, 'generator')) {
            $product = $all['mechatron-power-kit'] ?? null;
        }

        if ($product) {
            if (empty($product['gallery'])) {
                $product['gallery'] = [$product['image']];
            }
        }

        return $product;
    }
}
