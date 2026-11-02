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
                'description' => 'Jelajahi seluruh solusi teknologi udara Mechatron, mulai dari armada drone pertanian, logistik cerdas, sistem pengawasan presisi, hingga suku cadang orisinal.',
            ],
            'agrikultur' => [
                'slug' => 'pertanian',
                'name' => 'Drone Pertanian',
                'description' => 'Solusi Cerdas untuk Pertanian Presisi.',
            ],
            'pengawasan' => [
                'slug' => 'pengawasan',
                'name' => 'Drone Pengawasan',
                'description' => 'Pemantauan Keamanan Udara Real-time',
            ],
            'pengiriman' => [
                'slug' => 'Pengiriman',
                'name' => 'Drone Pengiriman',
                'description' => 'Pengiriman Cepat dan Efisien Melalui Udara.',
            ],
            'suku-cadang' => [
                'slug' => 'suku-cadang',
                'name' => 'Suku Cadang',
                'description' => 'Suku Cadang Asli dan Berkualitas.',
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
                    'modelCode' => 'Agri H30',
                    'name' => 'Mechatron AGRI H30',
                    'category' => 'Pertanian',
                    'categorySlug' => 'agrikultur',
                    'categoryDetail' => 'Drone Pertanian Hexacopter 30 Liter',
                    'subtitle' => 'Drone Pertanian Kapasitas 30 Liter', // Diambil dari image_5a9266.jpg
                    'tagline' => 'Dirancang dengan stabilitas 6 rotor dan teknologi penyemprotan presisi untuk memaksimalkan efisiensi kerja harian di lahan pertanian.', // Diambil dari image_5a9266.jpg
                    'capacity' => '30 Liter', // Disesuaikan dengan image_5a92a6.jpg
                    'image' => '/images/featured_drone_h30.jpg',
                    'gallery' => [
                        '/images/featured_drone_h30.jpg',
                        '/images/featured_remote_kit.jpg',
                    ],
                    'whatsappNumber' => '6281112143111',
                    
                    // PEMBARUAN SPESIFIKASI BERDASARKAN BROSUR (image_5a8f7d.jpg)
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

                    // PEMBARUAN FITUR (Merujuk pada ikon image_5a92a6.jpg dan detail image_5a8f9e.jpg)
                    'features' => [
                                    [
                                        'title' => 'Rangka Karbon Kokoh & Ringan', 
                                        'desc' => 'Dibuat dari serat karbon berkualitas tinggi. Sangat tangguh dan awet untuk pemakaian jangka panjang, namun tetap ringan saat bermanuver di udara.'
                                    ],
                                    [
                                        'title' => 'Desain Lipat, Muat di Bagasi Mobil', 
                                        'desc' => 'Lengan drone dirancang agar mudah dilipat menjadi sangat ringkas. Lebih praktis dibawa ke lahan mana saja hanya dengan mobil biasa.'
                                    ],
                                    [
                                        'title' => 'Fungsi 2-in-1 (Semprot & Tebar)', 
                                        'desc' => 'Beli 1 drone, dapat 2 fungsi! Tangki dirancang agar sangat mudah dibongkar-pasang dan diganti secara bergantian untuk menyemprot cairan maupun menebar pupuk butiran.'
                                    ],
                                    [
                                        'title' => 'Kerja Otomatis (Auto Spray & Spread)', 
                                        'desc' => 'Cukup atur pola di layar, drone akan terbang dan bekerja secara otomatis. Cairan atau pupuk tersebar jauh lebih merata ke seluruh area lahan.'
                                    ],
                                    [
                                        'title' => 'Radar Pintar Anti-Nabrak', 
                                        'desc' => 'Terbang lebih tenang dan aman. Dilengkapi sensor cerdas yang otomatis mendeteksi rintangan seperti pohon atau tiang, lalu menghindarinya sendiri.'
                                    ],
                                    [
                                        'title' => 'Sangat Mudah Dioperasikan', 
                                        'desc' => 'Menggunakan remote kontrol pintar dengan tampilan layar dan bahasa yang sangat simpel. Pemula sekalipun bisa dengan cepat belajar menerbangkannya.'
                                    ],
                                ],

                    // PEMBARUAN ISI PAKET BERDASARKAN BROSUR (image_5a8f7d.jpg)
                    'packageIncludes' => [
                        'Unit Drone (termasuk Kotak Penyimpanan)',
                        'Pengendali Jarak Jauh (Remote Control) & Tas Pelindung',
                        '2 Buah Baterai', // Disertakan 2 PCS baterai berdasarkan gambar
                        'Set Pengisi Daya',
                        '2 Buah Antena Jarak Jauh',
                        'Aksesori Pendukung',
                    ],
                    
                    // PEMBARUAN GAMBARAN PENGGUNAAN LAPANGAN (image_5a8f9e.jpg)
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
                'categoryDetail' => 'Drone Pertanian Hexacopter 15 Liter', // Diubah ke bahasa Indonesia
                'subtitle' => 'Drone Pertanian Kapasitas 15 Liter',
                'tagline' => 'Solusi Cerdas untuk Setiap Misi — Ringkas, Lincah, & Efisiensi Maksimal untuk Segala Medan Pertanian.', // Diubah ke bahasa Indonesia
                'capacity' => '15 Liter',
                'image' => '/images/featured_drone_h15.jpg',
                'gallery' => [
                    '/images/featured_drone_h15.jpg',
                    '/images/carbon_propellers.jpg',
                ],
                'whatsappNumber' => '6281112143111',
                
                'specifications' => [
                    ['label' => 'Fungsi', 'value' => 'Penyemprot & Penebar'], // Disederhanakan ke bahasa Indonesia
                    ['label' => 'Waktu Terbang', 'value' => 'Hingga 10 menit'],
                    ['label' => 'Kecepatan Maksimal', 'value' => 'Hingga 5.5 m/s'],
                    ['label' => 'Produktivitas', 'value' => 'Hingga 4.1 ha/jam'], // Penyesuaian ejaan baku
                    ['label' => 'Jarak Jangkauan Kendali', 'value' => 'Hingga 2 km LOS'], // Penyesuaian bahasa Indonesia
                    ['label' => 'Sensor', 'value' => 'Laju Aliran, Pendeteksi Kontur Tanah, Penghindar Halangan'],
                    ['label' => 'Dosis Penyemprotan', 'value' => '40 - 60 L/ha'], // Mengubah 'Spraying' menjadi 'Penyemprotan'
                    ['label' => 'Dimensi Lipat (mm)', 'value' => '803 x 884 x 718'],
                    ['label' => 'Dimensi Terbuka (mm)', 'value' => '1700 x 1484 x 718'], 
                ],

                'features' => [
                                [
                                    'title' => 'Rangka Karbon Kokoh & Ringan', 
                                    'desc' => 'Dibuat dari serat karbon berkualitas tinggi. Sangat tangguh dan awet untuk pemakaian jangka panjang, namun tetap ringan saat bermanuver di udara.'
                                ],
                                [
                                    'title' => 'Desain Lipat, Muat di Bagasi Mobil', 
                                    'desc' => 'Lengan drone dirancang agar mudah dilipat menjadi sangat ringkas. Lebih praktis dibawa ke lahan mana saja hanya dengan mobil biasa.'
                                ],
                                [
                                    'title' => 'Fungsi 2-in-1 (Semprot & Tebar)', 
                                    'desc' => 'Beli 1 drone, dapat 2 fungsi! Tangki dirancang agar sangat mudah dibongkar-pasang dan diganti secara bergantian untuk menyemprot cairan maupun menebar pupuk butiran.'
                                ],
                                [
                                    'title' => 'Kerja Otomatis (Auto Spray & Spread)', 
                                    'desc' => 'Cukup atur pola di layar, drone akan terbang dan bekerja secara otomatis. Cairan atau pupuk tersebar jauh lebih merata ke seluruh area lahan.'
                                ],
                                [
                                    'title' => 'Radar Pintar Anti-Nabrak', 
                                    'desc' => 'Terbang lebih tenang dan aman. Dilengkapi sensor cerdas yang otomatis mendeteksi rintangan seperti pohon atau tiang, lalu menghindarinya sendiri.'
                                ],
                                [
                                    'title' => 'Sangat Mudah Dioperasikan', 
                                    'desc' => 'Menggunakan remote kontrol pintar dengan tampilan layar dan bahasa yang sangat simpel. Pemula sekalipun bisa dengan cepat belajar menerbangkannya.'
                                ],
                            ],

                'packageIncludes' => [
                    'Unit Drone (termasuk Kotak Penyimpanan)', // Penyesuaian ke bahasa Indonesia
                    'Pengendali Jarak Jauh (Remote Control) & Tas Pelindung', // Penyesuaian bahasa Indonesia
                    '4 Buah Baterai', // Pcs diubah menjadi Buah
                    'Set Pengisi Daya',
                    '2 Buah Antena Jarak Jauh', // Pcs dan Longrange diubah
                    'Aksesori Pendukung', // Accesories diubah ke ejaan baku Aksesori
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
            // KATEGORI 2: DRONE FOTOGRAFI
            // ==========================================
            'surveillance-q1' => [
                'id' => 'surveillance-q1',
                'modelCode' => 'Survey Q1',
                'name' => 'Mechatron Survey Q1',
                'category' => 'Pengawasan',
                'categorySlug' => 'pengawasan',
                'categoryDetail' => 'Drone Pengawasan Data Real-Time',
                'subtitle' => 'Drone Pengawasan Real-Time Siang dan Malam',
                'tagline' => 'Solusi Pengawasan Cerdas — Pemantauan udara dengan data real-time dan kemudahan pengoperasian.',
                'capacity' => 'Radius 3 km / 20 Menit',
                'image' => '/images/drone_survei.jpeg', // Sesuaikan gambar jika ada yang baru
                'gallery' => [
                    '/images/surv-Q1-2.jpg', // Sesuaikan gambar jika ada yang baru
                    '/images/surv-Q1-1.jpg', // Sesuaikan gambar jika ada yang baru
                    '/images/surv-Q1-3.png', // Sesuaikan gambar jika ada yang baru
                    '/images/surv-Q1-4.jpg', // Sesuaikan gambar jika ada yang baru
                ],
                'whatsappNumber' => '6281112143111',
                
                'specifications' => [
                    ['label' => 'Tipe', 'value' => 'BMT-31'], //[cite: 10]
                    ['label' => 'Sensor Gambar', 'value' => 'Ketinggian, kecepatan, Jarak'], //[cite: 10]
                    ['label' => 'Resolusi Gambar', 'value' => '1080p'], //[cite: 10]
                    ['label' => 'Konektivitas', 'value' => '5.8 GHz'], //[cite: 10]
                    ['label' => 'Kapasitas Baterai', 'value' => '10 000mAh'], //[cite: 10]
                    ['label' => 'Penyimpanan (Storage)', 'value' => '32GB'], //[cite: 10]
                    ['label' => 'Radius Jangkauan', 'value' => '3 Km'], //[cite: 10]
                    ['label' => 'Waktu Terbang (Flight time)', 'value' => '20 menit'], //[cite: 10]
                    ['label' => 'Kecepatan Terbang', 'value' => '80 k m/h'], //[cite: 10]
                    ['label' => 'Dimensi per Produk', 'value' => 'P 55 cm x L 55 cm x T 40 cm'], //[cite: 10]
                    ['label' => 'Berat per Produk', 'value' => '5.000,00 gr'], //[cite: 10]
                ],

                'features' => [
                    [
                        'title' => 'Pengawasan Data Real-Time',
                        'desc' => 'Drone ini dirancang khusus untuk memberikan data pengawasan secara real-time, memastikan pemantauan yang cepat dan akurat.' //[cite: 10]
                    ],
                    [
                        'title' => 'Radius & Kecepatan Optimal',
                        'desc' => 'Mampu menjangkau radius hingga 3 km dengan kecepatan tetap 80 km/jam, ideal untuk mencakup area luas dengan cepat.' //[cite: 10]
                    ],
                    [
                        'title' => 'Fleksibilitas Operasional',
                        'desc' => 'Dapat beroperasi selama 20 menit dan menawarkan fleksibilitas pengendalian baik secara manual maupun otomatis sesuai kebutuhan misi.' //[cite: 10]
                    ],
                    [
                        'title' => 'Operasi Siang & Malam',
                        'desc' => 'Dirancang untuk dapat beroperasi optimal baik pada siang hari maupun malam hari, mendukung pengawasan 24 jam.' //[cite: 10]
                    ],
                    [
                        'title' => 'Aplikasi Remote Kontrol Mandiri',
                        'desc' => 'Menggunakan software aplikasi remote control yang dikembangkan sendiri, sehingga sangat familier dan mudah digunakan bahkan oleh operator awam.' //[cite: 10]
                    ],
                    [
                        'title' => 'Resolusi Gambar Tajam',
                        'desc' => 'Dilengkapi dengan resolusi gambar 1080p, memastikan detail visual yang jelas untuk keperluan identifikasi dan analisis.' //[cite: 10]
                    ],
                ],

                'packageIncludes' => [
                    'Unit drone', //[cite: 10]
                    'Remote kontrol', //[cite: 10]
                    'Baterai', //[cite: 10]
                    'Charger', //[cite: 10]
                    'Hardcase box unit', //[cite: 10]
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
                        ['label' => 'Tipe', 'value' => 'BMT-41'], //[cite: 10]
                        ['label' => 'Kapasitas Beban Maksimal', 'value' => '1,5 kg'], //[cite: 10]
                        ['label' => 'Radius Jelajah', 'value' => '3 km'], //[cite: 10]
                        ['label' => 'Kecepatan Terbang', 'value' => '80 km/h'], //[cite: 10]
                        ['label' => 'Waktu Terbang (Maksimal)', 'value' => '12 menit'], //[cite: 10]
                        ['label' => 'Konfigurasi', 'value' => 'Hexacopter'], //[cite: 10]
                        ['label' => 'Sensor Gambar', 'value' => 'GPRS'], //[cite: 10]
                        ['label' => 'Konektivitas', 'value' => '2,4 dan 5.8 GHz'], //[cite: 10]
                        ['label' => 'Kapasitas Baterai', 'value' => '19000 mAh'], //[cite: 10]
                        ['label' => 'Dimensi per Produk', 'value' => '110 cm x 45 cm x 35 cm'], //[cite: 10]
                        ['label' => 'Berat per Produk', 'value' => '6.000,00 gr'], //[cite: 10]
                    ],

                    'features' => [
                        [
                            'title' => 'Pengiriman Point-to-Point Otomatis',
                            'desc' => 'Drone beroperasi secara otomatis untuk mengantarkan barang tepat sasaran sesuai dengan titik koordinat pada sistem GPRS.' //[cite: 10]
                        ],
                        [
                            'title' => 'Kecepatan Tinggi',
                            'desc' => 'Mampu terbang dengan kecepatan tetap hingga 80 km/jam, memastikan paket tiba di tujuan dengan cepat dan efisien.' //[cite: 10]
                        ],
                        [
                            'title' => 'Performa Hexacopter Stabil',
                            'desc' => 'Desain 6 rotor (hexacopter) memberikan stabilitas ekstra saat membawa beban maksimal 1,5 kg selama penerbangan.' //[cite: 10]
                        ],
                        [
                            'title' => 'Aplikasi Remote Kontrol Mandiri',
                            'desc' => 'Dilengkapi dengan perangkat lunak (software) aplikasi remote kontrol yang dikembangkan secara internal untuk keamanan dan keandalan optimal.' //[cite: 10]
                        ],
                        [
                            'title' => 'Kapasitas Baterai Besar',
                            'desc' => 'Didukung oleh baterai berkapasitas 19000 mAh yang memungkinkan waktu terbang maksimal hingga 12 menit per misi pengiriman.' //[cite: 10]
                        ],
                        [
                            'title' => 'Penyimpanan Internal 64 GB',
                            'desc' => 'Memiliki kapasitas penyimpanan bawaan sebesar 64 GB untuk mendukung kebutuhan sistem operasional.' //[cite: 10]
                        ],
                    ],

                    'packageIncludes' => [
                        'Unit Drone BMT-41', //[cite: 10]
                        'Remote Kontrol', //[cite: 10]
                        'Baterai', //[cite: 10]
                        'Charger', //[cite: 10]
                        'Hardcase Box Unit', //[cite: 10]
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
                        ['label' => 'Tipe', 'value' => 'BMT-41'], //[cite: 10]
                        ['label' => 'Kapasitas Beban Maksimal', 'value' => '1,5 kg'], //[cite: 10]
                        ['label' => 'Radius Jelajah', 'value' => '3 km'], //[cite: 10]
                        ['label' => 'Kecepatan Terbang', 'value' => '80 km/h'], //[cite: 10]
                        ['label' => 'Waktu Terbang (Maksimal)', 'value' => '12 menit'], //[cite: 10]
                        ['label' => 'Konfigurasi', 'value' => 'Hexacopter'], //[cite: 10]
                        ['label' => 'Sensor Gambar', 'value' => 'GPRS'], //[cite: 10]
                        ['label' => 'Konektivitas', 'value' => '2,4 dan 5.8 GHz'], //[cite: 10]
                        ['label' => 'Kapasitas Baterai', 'value' => '19000 mAh'], //[cite: 10]
                        ['label' => 'Dimensi per Produk', 'value' => '110 cm x 45 cm x 35 cm'], //[cite: 10]
                        ['label' => 'Berat per Produk', 'value' => '6.000,00 gr'], //[cite: 10]
                    ],

                    'features' => [
                        [
                            'title' => 'Pengiriman Point-to-Point Otomatis',
                            'desc' => 'Drone beroperasi secara otomatis untuk mengantarkan barang tepat sasaran sesuai dengan titik koordinat pada sistem GPRS.' //[cite: 10]
                        ],
                        [
                            'title' => 'Kecepatan Tinggi',
                            'desc' => 'Mampu terbang dengan kecepatan tetap hingga 80 km/jam, memastikan paket tiba di tujuan dengan cepat dan efisien.' //[cite: 10]
                        ],
                        [
                            'title' => 'Performa Hexacopter Stabil',
                            'desc' => 'Desain 6 rotor (hexacopter) memberikan stabilitas ekstra saat membawa beban maksimal 1,5 kg selama penerbangan.' //[cite: 10]
                        ],
                        [
                            'title' => 'Aplikasi Remote Kontrol Mandiri',
                            'desc' => 'Dilengkapi dengan perangkat lunak (software) aplikasi remote kontrol yang dikembangkan secara internal untuk keamanan dan keandalan optimal.' //[cite: 10]
                        ],
                        [
                            'title' => 'Kapasitas Baterai Besar',
                            'desc' => 'Didukung oleh baterai berkapasitas 19000 mAh yang memungkinkan waktu terbang maksimal hingga 12 menit per misi pengiriman.' //[cite: 10]
                        ],
                        [
                            'title' => 'Penyimpanan Internal 64 GB',
                            'desc' => 'Memiliki kapasitas penyimpanan bawaan sebesar 64 GB untuk mendukung kebutuhan sistem operasional.' //[cite: 10]
                        ],
                    ],

                    'packageIncludes' => [
                        'Unit Drone BMT-41', //[cite: 10]
                        'Remote Kontrol', //[cite: 10]
                        'Baterai', //[cite: 10]
                        'Charger', //[cite: 10]
                        'Hardcase Box Unit', //[cite: 10]
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
                'name' => 'Suku Cadang & Komponen Drone Original',
                'category' => 'Suku Cadang',
                'categorySlug' => 'suku-cadang',
                'categoryDetail' => 'Komponen Asli Impor Langsung dari Pabrikan',
                'subtitle' => 'Jaminan 100% Barang Original & Stok Ready di Indonesia',
                'tagline' => 'Impor Langsung dari Pabrikan Utama — Kami menyetok komponen asli untuk memastikan perbaikan dan perawatan armada drone Anda berjalan tanpa inden.',
                'capacity' => 'Stok Lokal Siap Kirim',
                'image' => '/images/sparepart.jpeg',
                'gallery' => [
                    '/images/sparepart.jpeg',
                ],
                'whatsappNumber' => '6281112143111',
                
                // DETAIL KETERANGAN BARANG & LAYANAN (Bukan Spesifikasi Drone)
                'specifications' => [
                    ['label' => 'Asal Barang', 'value' => 'Impor Langsung dari Pabrikan Resmi (Direct OEM)'],
                    ['label' => 'Jaminan Kualitas', 'value' => '100% Original & Baru (Bukan Rekondisi)'],
                    ['label' => 'Ketersediaan', 'value' => 'Stok Ready di Gudang Indonesia (Tanpa Inden)'],
                    ['label' => 'Kategori Komponen', 'value' => 'Propulsi, Elektronik, Sensor, Gimbal, & Mekanikal'],
                    ['label' => 'Material Utama', 'value' => 'Serat Karbon Aviasi & Logam Presisi Tinggi'],
                    ['label' => 'Dukungan Armada', 'value' => 'Drone Pertanian, Pengiriman, & Pengawasan'],
                ],

                // 6 CARD SALES POINT SUKU CADANG
                'features' => [
                    [
                        'title' => 'Impor Langsung dari Pabrikan', 
                        'desc' => 'Seluruh komponen dijamin 100% original langsung dari produsen resmi. Bebas dari barang palsu atau kualitas rakitan lokal yang berisiko.'
                    ],
                    [
                        'title' => 'Stok Ready di Indonesia (Tanpa Inden)', 
                        'desc' => 'Kami menyetok spare part secara berkala di gudang lokal. Saat drone Anda butuh penggantian part, barang siap dikirim hari itu juga.'
                    ],
                    [
                        'title' => 'Baling-Baling & Motor Karbon Tangguh', 
                        'desc' => 'Tersedia baling-baling serat karbon asli dan motor brushless berkekuatan tinggi yang tahan terhadap beban kerja ekstrem.'
                    ],
                    [
                        'title' => 'Modul Sensor & Kamera Gimbal Asli', 
                        'desc' => 'Menyediakan replacement part untuk sistem kamera, sensor optik, hingga modul navigasi dengan tingkat presisi sesuai bawaan pabrik.'
                    ],
                    [
                        'title' => 'Sistem Kontrol Terbang & Board Utama', 
                        'desc' => 'Komponen vital seperti Flight Controller, ESC, dan Power Board tersedia lengkap dan siap pasang (plug and play).'
                    ],
                    [
                        'title' => 'Dukungan Konsultasi & Garansi Part', 
                        'desc' => 'Tim teknisi kami siap membantu memastikan kompatibilitas suku cadang yang Anda butuhkan sebelum proses pembelian.'
                    ],
                ],

                // DAFTAR KATEGORI PART YANG DIBERIKAN DI GAMBAR
                'packageIncludes' => [
                    'Baling-Baling (Propeller) Serat Karbon',
                    'Motor Brushless & ESC Module',
                    'Kamera Gimbal & Modul Sensor Visual',
                    'Flight Controller & Modul GPS/Navigasi',
                    'Servo Motors & Kabel Kelistrikan (Wiring)',
                    'Rangkaian Frame Karbon & Aksesori Baut Presisi',
                ],
                
                // MANFAAT BAGI PEMBELI
                'fieldApplications' => [
                    [
                        'title' => 'Perawatan Rutin Tanpa Hambatan',
                        'desc' => 'Menjaga armada drone selalu aman terbang dengan mengganti part wear-and-tear tepat waktu menggunakan barang original.',
                    ],
                    [
                        'title' => 'Perbaikan Cepat Saat Terjadi Kerusakan',
                        'desc' => 'Meminimalisir waktu henti kerja (downtime) operasional proyek berkat ketersediaan stok komponen yang selalu siap kirim.',
                    ],
                    [
                        'title' => 'Kebutuhan Komponen Cadangan Tim Lapangan',
                        'desc' => 'Kemudahan bagi tim operasional untuk menyetok part mandiri (seperti baling-baling cadangan) langsung dari distributor resmi.',
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
