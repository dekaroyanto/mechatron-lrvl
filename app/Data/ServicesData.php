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
                        'image' => '/images/capacity-building-b4t.jpeg',
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
                        'image' => '/images/capacity-building-b4t.jpeg',
                        'bullets' => [
                            'Operational training for high-capacity agricultural spraying drones',
                            'Autonomous waypoint mission planning for periodic land surveys',
                            'Written competency exams and hands-on field evaluations',
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

            'perawatandrone' => [
                'id' => 'perawatandrone',
                'slug' => 'perawatandrone',
                'path' => '/services/perawatandrone',
                'group' => 'Mechatron Core Services',
                'groupSubtitle' => 'Factory-Standard Maintenance & Repair',
                'title' => 'Drone Maintenance',
                'tagline' => 'Factory-Standard Repair, Periodic Maintenance, and Sensor Calibration Services by Mechatron',
                'description' => 'Comprehensive drone repair and maintenance services to sustain peak performance through component replacement, calibration, and firmware updates',
                'longDescription' => 'Drone fleets operating consistently require scheduled maintenance to prevent unexpected in-flight failures. Mechatron\'s Service Division is backed by experienced avionics technicians and a modern diagnostic laboratory to handle structural repairs, avionics subsystem updates, IMU gimbal calibration, and comprehensive flight testing.',
                'image' => '/images/service_perawatan_drone.jpg',
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
                'longDescription' => 'Project demands often require specialized high-performance drones without heavy upfront capital expenditure. Mechatron provides a complete drone rental fleet—ranging from heavy-lift agricultural sprayers (Mechatron Agri H30 & H15) to professional mapping and surveillance drones—complete with backup battery sets, generators, and standby pilot options.',
                'image' => '/images/service_sewa_drone.jpg',
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
                        'tag' => 'Operational Cost Efficiency',
                        'title' => 'Flexible Rental Schemes for Any Project Scale',
                        'description' => 'Preserve your company\'s capital expenditure budget. Access cutting-edge drone technology for planting seasons, periodic survey projects, or commercial operations with predictable rental plans.',
                        'image' => '/images/service_sewa_drone.jpg',
                        'bullets' => [
                            'Daily Rental for short events and visual production needs',
                            'Weekly Rental for periodic surveying and mapping projects',
                            'Monthly / Seasonal Contracts for oil palm plantations and rice farming',
                        ],
                    ],
                    [
                        'tag' => 'Full Field Support',
                        'title' => 'Backed by Experienced Technicians & Abundant Batteries',
                        'description' => 'We ensure your rented drone works all day long—supported by high-output fast-charging sets so flight cycles continue without battery downtime.',
                        'image' => '/images/service_perawatan_drone.jpg',
                        'bullets' => [
                            'Spare propellers and impact-resistant hardcase storage boxes included',
                            'Concise operational and safety briefing for your field crew',
                            'Direct fleet delivery and pickup service to your project location',
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
                    ['label' => 'Surveillance / Mapping Options', 'value' => 'Mechatron Survey Q1 & High-Precision Aerial Cameras'],
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
