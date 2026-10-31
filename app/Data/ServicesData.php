<?php

namespace App\Data;

class ServicesData
{
    /**
     * Layanan resmi Mechatron:
     * 1. Pelatihan Pilot Drone (Gambar 1)
     * 2. Perawatan Drone (Gambar 2)
     * 3. Sewa Drone (Gambar 3)
     */
    public static function all(): array
    {
        return [
            'pelatihanpilot' => [
                'id' => 'pelatihanpilot',
                'slug' => 'pelatihanpilot',
                'path' => '/services/pelatihanpilot',
                'group' => 'Layanan Utama Mechatron',
                'groupSubtitle' => 'Akademi & Sertifikasi Resmi',
                'category' => 'Professional Academy',
                'title' => 'Pelatihan Pilot Drone',
                'headline' => 'Sertifikasi & Keterampilan Lapangan',
                'tagline' => 'Akademi Resmi Pilot Drone Profesional dari Teori Regulasi hingga Manuver Lapangan',
                'description' => 'Pelatihan pilot drone untuk meningkatkan keterampilan terbang dan pengoperasian secara profesional',
                'longDescription' => 'Mengoperasikan drone berstandar industri memerlukan keterampilan khusus, pemahaman mendalam tentang keselamatan ruang udara, serta prosedur darurat. Mechatron Drone Academy menyelenggarakan program pelatihan terstruktur bagi individu maupun tim korporat untuk mencetak penerbang drone yang kompeten, bersertifikat, dan siap kerja di sektor pertanian, survei, maupun industri kreatif.',
                'image' => '/images/service_pelatihan_pilot.jpg',
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
                        'image' => '/images/service_pelatihan_pilot.jpg',
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
                        'image' => '/images/service_sewa_drone.jpg',
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
                    ['label' => 'Unit Drone yang Digunakan', 'value' => 'Drone Mechatron Agri H-Series, Drone Fotografi & Komersial'],
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
                'group' => 'Layanan Utama Mechatron',
                'groupSubtitle' => 'Perawatan & Servis Pabrikan',
                'category' => 'Engineering & Maintenance',
                'title' => 'Perawatan Drone',
                'headline' => 'Servis Resmi & Kalibrasi Komponen',
                'tagline' => 'Layanan Perbaikan, Servis Berkala, dan Kalibrasi Sensor Standar Pabrikan Mechatron',
                'description' => 'Layanan perbaikan dan perawatan drone untuk menjaga kinerja optimal melalui penggantian komponen, kalibrasi, dan pembaruan perangkat lunak',
                'longDescription' => 'Armada drone yang beroperasi secara konsisten memerlukan pemeliharaan berkala untuk mencegah kegagalan terbang mendadak. Divisi Servis Mechatron didukung oleh teknisi berpengalaman dan laboratorium diagnostik modern untuk menangani perbaikan struktural, pembaruan subsistem avionik, kalibrasi gimbal IMU, hingga uji coba terbang (flight test) komprehensif.',
                'image' => '/images/service_perawatan_drone.jpg',
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
                        'image' => '/images/service_perawatan_drone.jpg',
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
                        'image' => '/images/service_pelatihan_pilot.jpg',
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
                    ['label' => 'Merek / Tipe yang Ditangani', 'value' => 'Drone Mechatron Agri, Drone Fotografi & Komersial, Custom FPV'],
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

            'sewadrone' => [
                'id' => 'sewadrone',
                'slug' => 'sewadrone',
                'path' => '/services/sewadrone',
                'group' => 'Layanan Utama Mechatron',
                'groupSubtitle' => 'Rental Armada Profesional',
                'category' => 'Fleet Rental & Equipment',
                'title' => 'Sewa Drone',
                'headline' => 'Armada Profesional Siap Pakai',
                'tagline' => 'Fleksibilitas Sewa Harian, Mingguan, dan Bulanan dengan Dukungan Unit Prima',
                'description' => 'Sewa drone untuk pengguna profesional dengan pilihan spesifikasi yang sesuai kebutuhan kerja Anda',
                'longDescription' => 'Kebutuhan proyek seringkali membutuhkan drone berspesifikasi khusus tanpa harus mengeluarkan investasi kapital besar di awal. Mechatron menyediakan rental armada drone terlengkap — mulai dari drone pertanian berkapasitas tangki besar (Mechatron Agri H30 & H15) hingga drone fotografi profesional — lengkap dengan set baterai cadangan, generator, dan opsi operator standby.',
                'image' => '/images/service_sewa_drone.jpg',
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
                        'image' => '/images/service_sewa_drone.jpg',
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
                        'image' => '/images/service_perawatan_drone.jpg',
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
                    ['label' => 'Pilihan Unit Pertanian', 'value' => 'Mechatron Agri H30 (Tangki 30L) & Agri H15 (Tangki 15L)'],
                    ['label' => 'Pilihan Unit Foto / Video', 'value' => 'Drone Kamera 4K / 50MP Sinematik dengan Gimbal Stabilizer'],
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
        $filtered = array_filter(self::all(), fn($s) => $s['group'] === $group);
        return !empty($filtered) ? $filtered : self::all();
    }
}
