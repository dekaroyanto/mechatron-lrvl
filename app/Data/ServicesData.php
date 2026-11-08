<?php

namespace App\Data;

class ServicesData
{
    /**
     * Layanan resmi Mechatron:
     * 1. Pelatihan Pilot Drone (Gambar 1)
     * 2. Perawatan Drone (Gambar 2)
     * 3. Sewa Drone (Gambar 3)
     *
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
                'video' => '',
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

            'servicedrone' => [
                'id' => 'servicedrone',
                'slug' => 'servicedrone',
                'path' => '/services/servicedrone',
                'group' => 'Layanan Utama Mechatron',
                'groupSubtitle' => 'Perawatan & Servis Pabrikan',
                'title' => 'Perawatan Drone',
                'tagline' => 'Layanan Perbaikan, Servis Berkala, dan Kalibrasi Sensor Standar Pabrikan Mechatron',
                'description' => 'Layanan perbaikan dan perawatan drone untuk menjaga kinerja optimal melalui penggantian komponen, kalibrasi, dan pembaruan perangkat lunak',
                'longDescription' => 'Armada drone yang beroperasi secara konsisten memerlukan pemeliharaan berkala untuk mencegah kegagalan terbang mendadak. Divisi Servis Mechatron didukung oleh teknisi berpengalaman dan laboratorium diagnostik modern untuk menangani perbaikan struktural, pembaruan subsistem avionik, kalibrasi gimbal IMU, hingga uji coba terbang (flight test) komprehensif.',
                'image' => '/images/service_perawatan_drone.jpg',
                'video' => '/videos/service-drone.webm',
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
                'video' => '',
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

    /**
     * @return array<string, array<string, mixed>>
     */
    private static function allEnglish(): array
    {
        return [
            'pelatihanpilot' => [
                'id' => 'pelatihanpilot',
                'slug' => 'pelatihanpilot',
                'path' => '/services/pelatihanpilot',
                'group' => 'Mechatron Core Services',
                'groupSubtitle' => 'Official Academy & Certification',
                'title' => 'Drone Pilot Training',
                'tagline' => 'Official Professional Drone Pilot Academy from Regulatory Theory to Field Maneuvers',
                'description' => 'Professional drone pilot training to elevate flight skills and safe operational mastery',
                'longDescription' => 'Operating industrial-grade drones requires specialized skills, deep understanding of airspace safety, and emergency procedures. Mechatron Drone Academy delivers structured training programs for both individuals and corporate teams to produce competent, certified, and field-ready drone pilots across agriculture, surveying, and creative industries.',
                'image' => '/images/service_pelatihan_pilot.jpg',
                'video' => '',
                'deepFeatures' => [
                    [
                        'tag' => 'National Standard Curriculum',
                        'title' => 'Regulatory Mastery, Flight Safety, & Precision Maneuvers',
                        'description' => 'Being a professional drone pilot goes far beyond moving control sticks. Trainees learn signal-loss risk mitigation (Fail-Safe), micro-weather assessment, aerodynamics, and Indonesian airspace law.',
                        'image' => '/images/service_pelatihan_pilot.jpg',
                        'bullets' => [
                            'PM 37/2020 and CASR Part 107 airspace regulations',
                            'LiPo battery management and pre/post-flight hardware care',
                            'Figure-8 maneuvers, manual orbits, and emergency landings',
                        ],
                    ],
                    [
                        'tag' => 'Corporate Training',
                        'title' => 'Dedicated Training for Corporate & Plantation Field Teams',
                        'description' => 'Upgrade your internal team\'s capabilities. We provide customized in-house training programs tailored directly to your company\'s fleet and operational needs at your own work site.',
                        'image' => '/images/service_pelatihan_pilot_dampingi.jpg',
                        'bullets' => [
                            'Operational training for high-capacity agricultural spraying drones',
                            'Autonomous waypoint mission planning for periodic land surveys',
                            'Written competency exams and hands-on field evaluations',
                        ],
                    ],
                    [
                        'tag' => 'Experienced & Certified Instructors',
                        'title' => 'Trained & Experienced Instructors',
                        'description' => 'Our instructors are FASI-certified pilots with extensive experience across agricultural, surveying, and mapping projects. They guide participants from theory all the way to field practice with a one-on-one approach.',
                        'image' => '/images/service_pelatihan_pilot_profesional.jpg',
                        'bullets' => [
                            'Pilots experienced in agricultural & surveying projects',
                            'One-on-one mentoring for every participant during practice sessions',
                            'Competency evaluation and real-time feedback for continuous skill improvement',
                        ],
                    ],
                ],
                'workflow' => [
                    [
                        'step' => '01',
                        'title' => 'Registration & Ground School',
                        'desc' => 'Interactive classroom sessions covering aviation fundamentals, legal regulations, and avionics systems.',
                    ],
                    [
                        'step' => '02',
                        'title' => 'Simulator Sessions',
                        'desc' => 'Stick coordination reflex training and extreme weather simulations using advanced flight simulators.',
                    ],
                    [
                        'step' => '03',
                        'title' => 'Field Flight Camp',
                        'desc' => 'Live open-field flight sessions with one-on-one mentoring from senior instructors.',
                    ],
                    [
                        'step' => '04',
                        'title' => 'Competency Exam & Certificate',
                        'desc' => 'Written tests and field maneuver evaluations leading to official drone pilot certification.',
                    ],
                ],
                'specs' => [
                    ['label' => 'Program Duration', 'value' => 'Regular: 2–3 Days | Corporate Intensive: 4–5 Days'],
                    ['label' => 'Training Fleet Used', 'value' => 'Mechatron Agri H-Series, Commercial & Photography Drones'],
                    ['label' => 'Participant Facilities', 'value' => 'Handbook, Practice Drone Unit, Meals, Airfield Access, Official Jersey'],
                    ['label' => 'Certificate', 'value' => 'Mechatron Drone Pilot Graduation Certificate & FASI License Assistance'],
                    ['label' => 'Training Location', 'value' => 'Mechatron Training Ground or In-House at Your Company Site'],
                ],
                'faqs' => [
                    [
                        'q' => 'Can beginners with zero flying experience join this training?',
                        'a' => 'Absolutely! Our curriculum is structured from zero knowledge up to advanced proficiency with an intensive instructor-to-trainee ratio.',
                    ],
                    [
                        'q' => 'Do participants need to bring their own drone?',
                        'a' => 'Not required. Mechatron provides complete practice drone units along with batteries and ground equipment for all participants.',
                    ],
                ],
            ],

            'servicedrone' => [
                'id' => 'servicedrone',
                'slug' => 'servicedrone',
                'path' => '/services/servicedrone',
                'group' => 'Mechatron Core Services',
                'groupSubtitle' => 'Factory-Standard Maintenance & Repair',
                'title' => 'Drone Maintenance',
                'tagline' => 'Factory-Standard Repair, Periodic Maintenance, and Sensor Calibration Services by Mechatron',
                'description' => 'Comprehensive drone repair and maintenance services to sustain peak performance through component replacement, calibration, and firmware updates',
                'longDescription' => 'Drone fleets operating consistently require scheduled maintenance to prevent unexpected in-flight failures. Mechatron\'s Service Division is backed by experienced avionics technicians and a modern diagnostic laboratory to handle structural repairs, avionics subsystem updates, IMU gimbal calibration, and comprehensive flight testing.',
                'image' => '/images/service_perawatan_drone.jpg',
                'video' => '/videos/service-drone.webm',
                'deepFeatures' => [
                    [
                        'tag' => 'Rigorous Repair Standards',
                        'title' => 'Precision Repairs with Standardized Toolkits and Strict SOPs',
                        'description' => 'In-flight system failures can be costly. Every repair is performed using high-grade standardized toolkits and strict Standard Operating Procedures. Mechatron engineers perform Flight Black Box Log Analysis to scientifically detect signal anomalies, battery voltage drops, and motor vibrations.',
                        'image' => '/images/service_perawatan_drone_toolkit.jpg',
                        'bullets' => [
                            'Carbon fiber arm and brushless motor replacement using factory-standard toolkits',
                            'Motherboard circuit micro-soldering and power distribution module repairs under strict SOPs',
                            'Agricultural spraying pump and nozzle servicing with calibrated measurement instruments',
                        ],
                    ],
                    [
                        'tag' => 'Comprehensive Component & System Inspection',
                        'title' => 'Scheduled End-to-End Inspection for Every Drone Unit',
                        'description' => 'For every drone unit serviced, we conduct a scheduled multi-point inspection across all mechanical and electronic systems to detect wear early—keeping your drone\'s performance and reliability at their peak.',
                        'image' => '/images/service_perawatan_drone_inspeksi.jpg',
                        'bullets' => [
                            'Full structural airframe, motor, and propulsion inspection at 50 & 100 flight-hour intervals',
                            'Electrical harness, smart battery, and transmission module testing under strict SOPs',
                            'Periodic sensor calibration and functional system checks using calibrated instruments',
                        ],
                    ],
                    [
                        'tag' => 'Certified Technicians & Expertise',
                        'title' => 'Certified Avionics Technicians & Flight Test Calibration',
                        'description' => 'Handled directly by certified avionics technicians with a dedicated flight test area. We verify that every sensor, IMU compass, and failsafe system operates with zero tolerance before the unit is handed back.',
                        'image' => '/images/service_perawatan_drone_hati.jpg',
                        'bullets' => [
                            '6-axis IMU, electronic compass, and obstacle avoidance sensor calibration',
                            'Fail-safe flight simulation, return-to-home verification, and payload drop testing',
                            'Post-service airworthiness checklist certificate report',
                        ],
                    ],
                ],
                'workflow' => [
                    [
                        'step' => '01',
                        'title' => 'Intake & Check-In',
                        'desc' => 'Logging unit serial numbers, operator reports, and flight history at our service center.',
                    ],
                    [
                        'step' => '02',
                        'title' => 'Diagnostics & Estimate',
                        'desc' => 'Thorough technical inspection and transparent breakdown of required spare parts and service costs.',
                    ],
                    [
                        'step' => '03',
                        'title' => 'Precision Servicing',
                        'desc' => 'Genuine part replacement, precision assembly, sensor calibration, and firmware updates.',
                    ],
                    [
                        'step' => '04',
                        'title' => 'Flight Test & Handover',
                        'desc' => 'Test flights at Mechatron\'s dedicated airfield to ensure 100% flight stability before return.',
                    ],
                ],
                'specs' => [
                    ['label' => 'Supported Models', 'value' => 'Mechatron Agri Drones, Commercial & Photography Drones, Custom FPV'],
                    ['label' => 'Calibration Services', 'value' => '3-Axis Gimbal, IMU, Digital Compass, Vision Sensors'],
                    ['label' => 'Battery Diagnostics', 'value' => 'Cycle Count, Internal Resistance, & Cell Balance Testing'],
                    ['label' => 'Turnaround Time', 'value' => 'Minor Service: 1–3 Days | Major Repair: 3–7 Working Days'],
                    ['label' => 'Service Warranty', 'value' => 'Up to 30-Day Repair Warranty'],
                ],
                'faqs' => [
                    [
                        'q' => 'Can a severely crashed drone still be repaired?',
                        'a' => 'Yes. Our technicians first inspect the airframe integrity and core electronic boards to determine whether repair is technically and economically viable.',
                    ],
                    [
                        'q' => 'How much is the initial diagnostic inspection fee?',
                        'a' => 'The initial diagnostic fee is waived (free) when you proceed with the repair recommended by our engineering team.',
                    ],
                ],
            ],

            'sewadrone' => [
                'id' => 'sewadrone',
                'slug' => 'sewadrone',
                'path' => '/services/sewadrone',
                'group' => 'Mechatron Core Services',
                'groupSubtitle' => 'Professional Fleet Rental',
                'category' => 'Fleet Rental & Equipment',
                'title' => 'Drone Rental',
                'tagline' => 'Flexible Daily, Weekly, and Monthly Rental Plans with Prime Fleet Support',
                'description' => 'Professional drone fleet rental with tailored specifications to match your operational workload',
                'longDescription' => 'Project demands often require specialized high-performance drones without heavy upfront capital expenditure. Mechatron provides a complete drone rental fleet—ranging from heavy-lift agricultural sprayers (Mechatron Agri H30 & H15) to professional photography drones—complete with backup battery sets, generators, and standby pilot options.',
                'image' => '/images/service_sewa_drone.jpg',
                'video' => '',
                'highlights' => [
                    [
                        'stat' => 'Ready Fleet',
                        'title' => 'Always Flight-Ready',
                        'desc' => 'Regularly maintained units with 100% prime battery health and latest firmware.',
                    ],
                    [
                        'stat' => 'Full Package',
                        'title' => 'Accessories & Chargers',
                        'desc' => 'Every rental includes a smart display controller, at least 3 backup batteries, and a fast charger.',
                    ],
                    [
                        'stat' => 'Pilot Options',
                        'title' => 'With / Without Operator',
                        'desc' => 'Choose unit-only rental (Dry Rental) or include an experienced certified pilot (Wet Rental).',
                    ],
                    [
                        'stat' => 'Backup Unit',
                        'title' => 'Uptime Guarantee',
                        'desc' => 'Replacement unit support in the event of technical issues in the field during your rental period.',
                    ],
                ],
                'deepFeatures' => [
                    [
                        'tag' => 'Easy & Efficient Harvesting',
                        'title' => 'Easy, efficient harvesting that maximizes productivity',
                        'description' => 'Agricultural drone rental to support rice, corn, and oil palm harvests with far more efficient operating costs than buying a new unit. We provide daily, weekly, and monthly rental options tailored to your project needs.',
                        'image' => '/images/service_sewa_drone_panen.jpg',
                        'bullets' => [
                            'Agricultural drone rental for rice, corn, and oil palm harvests',
                            'Daily, weekly, and monthly rental options according to project needs',
                            'Technical support and replacement units if field issues arise',
                        ],
                    ],
                    [
                        'tag' => 'Flight-Ready Unit All Day Long',
                        'title' => 'Flight-Ready Unit All Day Long',
                        'description' => 'Every rented unit comes complete with backup batteries, a fast charger, and an impact-resistant hardcase for storage—ensuring field operations are never interrupted.',
                        'image' => '/images/service_sewa_drone_unit_handal.jpg',
                        'bullets' => [
                            'Every unit includes 3–6 backup batteries and a fast charging hub',
                            'Impact-resistant hardcase storage boxes for safe transport to the project site',
                            'Drones are inspected and calibrated before handover to ensure optimal performance',
                        ],
                    ],
                    [
                        'tag' => 'Technical Support & Professional Pilots',
                        'title' => 'Standby Technicians & Professional Pilots',
                        'description' => 'Standby technical support throughout the rental period, plus experienced professional pilot options to keep drone operations running smoothly in the field.',
                        'image' => '/images/service_sewa_drone.jpg',
                        'bullets' => [
                            'Standby technical support throughout the rental period to resolve operational issues',
                            'Experienced professional pilot options to accompany drone flights in the field',
                            'Brief training for internal teams when choosing the Dry Rental option (unit only)',
                        ],
                    ],
                ],
                'workflow' => [
                    [
                        'step' => '01',
                        'title' => 'Select Unit & Duration',
                        'desc' => 'Consult your project scope to receive the best drone model recommendation.',
                    ],
                    [
                        'step' => '02',
                        'title' => 'Verification & Agreement',
                        'desc' => 'Verification of corporate/individual legal documents and signing of the rental agreement.',
                    ],
                    [
                        'step' => '03',
                        'title' => 'Unit Pickup / Delivery',
                        'desc' => 'Joint physical inspection and functional test flight before deploying to the field.',
                    ],
                    [
                        'step' => '04',
                        'title' => 'Full Support & Return',
                        'desc' => 'Standby technical support throughout the rental period and smooth checkout upon return.',
                    ],
                ],
                'specs' => [
                    ['label' => 'Agricultural Fleet Options', 'value' => 'Mechatron Agri H30 (30L Tank) & Agri H15 (15L Tank)'],
                    ['label' => 'Photo / Video Unit Options', 'value' => '4K / 50MP Cinematic Camera Drones with Stabilizer Gimbal'],
                    ['label' => 'Battery Package', 'value' => 'Includes 3–6 Smart Battery Packs + Fast Charging Hub'],
                    ['label' => 'Rental Scheme Options', 'value' => 'Dry Hire (Unit Only) / Wet Hire (Includes Pilot & Crew)'],
                    ['label' => 'Minimum Rental Duration', 'value' => 'Starting from 1 Day (24 Hours)'],
                    ['label' => 'Deposit & Protection', 'value' => 'Optional unit damage protection coverage available'],
                ],
                'faqs' => [
                    [
                        'q' => 'What are the requirements for renting a drone without a pilot (Dry Hire)?',
                        'a' => 'Renters must provide an active drone pilot license (FASI/DKUPPU), official identification (ID/NPWP), and a security deposit corresponding to the rented model.',
                    ],
                    [
                        'q' => 'Does Mechatron provide drone rentals outside Java?',
                        'a' => 'Yes, we ship rental units across Sumatra, Kalimantan, Sulawesi, and other regions throughout Indonesia.',
                    ],
                ],
            ],
        ];
    }

    public static function get(?string $slug): ?array
    {
        if (! $slug) {
            return null;
        }
        $normalized = strtolower(str_replace('-', '', $slug));
        $all = self::all();
        if (isset($all[$slug])) {
            return $all[$slug];
        }
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
        $filtered = array_filter(self::all(), fn ($s) => $s['group'] === $group);

        return ! empty($filtered) ? $filtered : self::all();
    }
}
