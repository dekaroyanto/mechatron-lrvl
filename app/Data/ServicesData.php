<?php

namespace App\Data;

class ServicesData
{
    public static function all(): array
    {
        return [
            'pelatihanpilot' => [
                'id' => 'pelatihanpilot',
                'slug' => 'pelatihanpilot',
                'path' => '/services/pelatihanpilot',
                'group' => 'Layanan Utama Mechatron',
                'groupSubtitle' => 'Akademi & Sertifikasi Resmi',
                'title' => 'Pelatihan Pilot Drone',
                'tagline' => 'Akademi Resmi Pilot Drone Profesional dari Teori Regulasi hingga Manuver Lapangan',
                'description' => 'Pelatihan pilot drone untuk meningkatkan keterampilan terbang dan pengoperasian secara profesional',
                'longDescription' => 'Mengoperasikan drone berstandar industri memerlukan keterampilan khusus, pemahaman mendalam tentang keselamatan ruang udara, serta prosedur darurat. Mechatron Drone Academy menyelenggarakan program pelatihan terstruktur bagi individu maupun tim korporat untuk mencetak penerbang drone yang kompeten, bersertifikat, dan siap kerja di sektor pertanian, survei, maupun industri kreatif.',
                'image' => '/images/service_pelatihan_pilot.jpg',
                'deepFeatures' => [
                    [
                        'tag' => 'Kurikulum Berstandar Nasional',
                        'title' => 'Pemahaman Regulasi, Keselamatan, & Manuver Presisi',
                        'description' => 'Menjadi pilot drone bukan sekadar menggerakkan tuas remote. Peserta diajarkan mitigasi risiko hilangnya sinyal (Fail-Safe), pemahaman cuaca mikro, aerodinamika, serta hukum ruang udara Indonesia.',
                        'image' => '/images/service_pelatihan_pilot.jpg',
                        'bullets' => [
                            'Pemahaman regulasi dan hukum ruang udara Indonesia',
                            'Keselamatan penerbangan, mitigasi risiko, dan prosedur darurat',
                            'Manuver presisi, waypoint otonom, dan pengoperasian payload',
                        ],
                    ],
                    [
                        'tag' => 'Corporate Training',
                        'title' => 'Pelatihan Khusus Tim Lapangan Perusahaan & Perkebunan',
                        'description' => 'Tingkatkan kapabilitas tim internal Anda. Kami menyediakan program pelatihan in-house yang disesuaikan langsung dengan armada dan kebutuhan operasional perusahaan di lokasi kerja Anda.',
                        'image' => '/images/service_pelatihan_pilot_dampingi.jpg',
                        'bullets' => [
                            'Pelatihan operasional drone semprot pertanian kapasitas besar',
                            'Pembuatan jalur terbang otonom waypoint untuk survei lahan berkala',
                            'Ujian kompetensi tertulis dan evaluasi praktik lapangan',
                        ],
                    ],
                    [
                        'tag' => 'Trainer Berpengalaman & Bersertifikat',
                        'title' => 'Trainer terlatih & Berpengalaman',
                        'description' => 'Instruktur kami adalah pilot bersertifikat FASI dan berpengalaman di berbagai proyek pertanian, survei, dan pemetaan. Mereka akan membimbing peserta dari teori hingga praktik lapangan dengan pendekatan one-on-one.',
                        'image' => '/images/service_pelatihan_pilot_profesional.jpg',
                        'bullets' => [
                            'Pilot berpengalaman di proyek pertanian & survei',
                            'Pendampingan one-on-one untuk setiap peserta selama sesi praktik',
                            'Evaluasi kompetensi dan umpan balik langsung untuk peningkatan keterampilan',
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
                'title' => 'Perawatan Drone',
                'tagline' => 'Layanan Perbaikan, Servis Berkala, dan Kalibrasi Sensor Standar Pabrikan Mechatron',
                'description' => 'Layanan perbaikan dan perawatan drone untuk menjaga kinerja optimal melalui penggantian komponen, kalibrasi, dan pembaruan perangkat lunak',
                'longDescription' => 'Armada drone yang beroperasi secara konsisten memerlukan pemeliharaan berkala untuk mencegah kegagalan terbang mendadak. Divisi Servis Mechatron didukung oleh teknisi berpengalaman dan laboratorium diagnostik modern untuk menangani perbaikan struktural, pembaruan subsistem avionik, kalibrasi gimbal IMU, hingga uji coba terbang (flight test) komprehensif.',
                'image' => '/images/service_perawatan_drone.jpg',
                'deepFeatures' => [
                    [
                        'tag' => 'Standar Perbaikan Memadai',
                        'title' => 'Perbaikan Presisi dengan Toolkit Standar dan SOP Ketat',
                        'description' => 'Kegagalan sistem di udara dapat berakibat fatal. Setiap perbaikan dikerjakan dengan toolkit standar dan berkualitas serta mengikuti prosedur dan SOP yang ketat. Tim teknisi Mechatron melakukan pembacaan log penerbangan (Flight Black Box Log Analysis) untuk mendeteksi anomali sinyal, voltase baterai, dan getaran motor secara ilmiah.',
                        'image' => '/images/service_perawatan_drone_toolkit.jpg',
                        'bullets' => [
                            'Penggantian arm serat karbon dan motor brushless dengan toolkit standar pabrikan',
                            'Penyolderan sirkuit motherboard dan perbaikan modul transmisi daya sesuai SOP ketat',
                            'Servis pompa dan nozzle sistem semprot drone pertanian dengan alat ukur terkalibrasi',
                        ],
                    ],
                    [
                        'tag' => 'Inspeksi Menyeluruh Komponen & Sistem',
                        'title' => 'Inspeksi Terjadwal Menyeluruh untuk Setiap Unit Drone',
                        'description' => 'Pada setiap unit drone yang diservis, kami melakukan inspeksi menyeluruh pada seluruh komponen dan sistem secara terjadwal untuk mendeteksi keausan sejak dini, sehingga performa dan keandalan drone Anda tetap optimal.',
                        'image' => '/images/service_perawatan_drone_inspeksi.jpg',
                        'bullets' => [
                            'Pemeriksaan menyeluruh struktur rangka, motor, dan sistem propulsi setiap 50 & 100 jam terbang',
                            'Pengujian sistem kelistrikan, baterai, dan modul transmisi sesuai SOP ketat',
                            'Kalibrasi sensor dan uji fungsi sistem secara berkala dengan alat ukur terkalibrasi',
                        ],
                    ],
                    [
                        'tag' => 'Teknisi Berpengalaman & Expertise',
                        'title' => 'Teknisi Tersertifikasi & Kalibrasi Uji Terbang',
                        'description' => 'Ditangani langsung oleh teknisi avionik bersertifikasi dengan fasilitas uji terbang khusus (flight test area). Kami memastikan setiap sensor, kompas IMU, dan sistem failsafe bekerja dengan toleransi nol sebelum unit diserahkan kembali.',
                        'image' => '/images/service_perawatan_drone_hati.jpg',
                        'bullets' => [
                            'Kalibrasi IMU 6-axis, kompas elektronik, dan sensor obstacle avoidance',
                            'Simulasi penerbangan fail-safe, return-to-home, dan payload drop test',
                            'Laporan sertifikat kelaikan terbang (airworthiness checklist) pasca servis',
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
                        'tag' => 'Panen Mudah & Efisien',
                        'title' => 'Panen mudah, efisien, dan maksimalkan produktivitas',
                        'description' => 'Sewa drone pertanian untuk mendukung panen padi, jagung, dan perkebunan kelapa sawit dengan biaya operasional yang lebih efisien dibandingkan membeli unit baru. Kami menyediakan opsi sewa harian, mingguan, hingga bulanan sesuai kebutuhan proyek Anda.',
                        'image' => '/images/service_sewa_drone_panen.jpg',
                        'bullets' => [
                            'Sewa drone pertanian untuk panen padi, jagung, dan kelapa sawit',
                            'Opsi sewa harian, mingguan, hingga bulanan sesuai kebutuhan proyek',
                            'Dukungan teknis dan unit pengganti jika terjadi kendala di lapangan',
                        ],
                    ],
                    [
                        'tag' => 'Unit Siap Terbang Sepanjang Hari',
                        'title' => 'Unit Siap Terbang Sepanjang Hari',
                        'description' => 'Setiap unit disewa lengkap dengan baterai cadangan, charger cepat, dan kotak penyimpanan tahan benturan (hardcase) untuk memastikan operasional di lapangan tidak terganggu.',
                        'image' => '/images/service_sewa_drone_unit_handal.jpg',
                        'bullets' => [
                            'Setiap unit disewa lengkap dengan 3–6 baterai cadangan dan hub charger cepat',
                            'Kotak penyimpanan hardcase tahan benturan untuk transportasi aman ke lokasi proyek',
                            'Unit drone diperiksa dan dikalibrasi sebelum diserahkan untuk memastikan performa optimal',
                        ],
                    ],
                    [
                        'tag' => 'Dukungan Teknis & Pilot Profesional',
                        'title' => 'Teknis Standby & Pilot Profesional',
                        'description' => 'Dukungan teknis standby selama masa sewa dan opsi pilot profesional berpengalaman untuk memastikan operasional drone berjalan lancar di lapangan.',
                        'image' => '/images/service_sewa_drone.jpg',
                        'bullets' => [
                            'Dukungan teknis standby selama masa sewa untuk mengatasi kendala operasional',
                            'Opsi pilot profesional berpengalaman untuk mendampingi penerbangan drone di lapangan',
                            'Pelatihan singkat bagi tim internal jika memilih opsi Dry Rental (unit saja)',
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
        return array_filter(self::all(), fn($s) => $s['group'] === $group);
    }
}
