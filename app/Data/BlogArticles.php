<?php

namespace App\Data;

class BlogArticles
{
    /**
     * @return array<int, array<string, mixed>>
     */
    public static function all(): array
    {
        if (app()->getLocale() === 'en') {
            return self::allEnglish();
        }

        return self::allIndonesian();
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    private static function allIndonesian(): array
    {
        return [
            [
                'id' => 1,
                'slug' => 'mechatron-resmi-menerima-sertifikat-sni-9199-2023-untuk-drone-pertanian',
                'title' => 'Mechatron Resmi Menerima Sertifikat SNI 9199:2023 untuk Drone Pertanian',
                'excerpt' => 'PT Bandung Mekatronika Teknologi (Mechatron) berhasil memperoleh sertifikat SNI 9199:2023 Pesawat Udara Nirawak (Drone) pertanian - Penyemprotan - Syarat mutu dan metode uji dari Badan Standardisasi Nasional (BSN) Republik Indonesia.',
                'date' => '14 November 2025',
                'readTime' => '3 menit baca',
                'category' => 'Sertifikasi SNI',
                'author' => [
                    'name' => 'TIM MECHATRON',
                    'role' => 'Divisi Publikasi & Riset Agrikultur',
                    'avatar' => '/images/mechatron_logo.png',
                ],
                'image' => '/images/drone-sni.jpeg',
                'tags' => ['Sertifikat SNI 9199:2023', 'Drone Pertanian Bersertifikat', 'BSN'],
                'content' => [
                    [
                        'type' => 'paragraph',
                        'text' => 'PT Bandung Mekatronika Teknologi (BMT) secara resmi menerima sertifikat SNI 9199:2023, menjadikan Drone Mechatron produsen drone pertanian pertama dan satu-satunya Indonesia yang mencapai sertifikasi prestisius ini. Pencapaian eksklusif ini memposisikan Drone Mechatron sebagai solusi drone pertanian bersertifikat terkemuka di Indonesia. Standar SNI 9199:2023 menetapkan persyaratan kualitas paling ketat untuk drone penyemprot pertanian Indonesia, memastikan standar keselamatan, performa, dan keandalan yang komprehensif.',
                    ],
                    [
                        'type' => 'heading',
                        'text' => 'Standar Mutu dan Efisiensi yang Terverifikasi Sertifikasi SNI 9199:2023',
                    ],
                    [
                        'type' => 'paragraph',
                        'text' => 'Sertifikasi SNI 9199:2023 adalah standar kualitas nasional Indonesia khusus untuk drone penyemprot pertanian. Sertifikasi memverifikasi bahwa Drone Mechatron memenuhi kriteria kualitas seragam, berkinerja andal di berbagai lingkungan pertanian dan kondisi iklim Indonesia yang beragam, mendistribusikan pestisida dan pupuk dengan presisi akurat (varians ±5%), beroperasi dengan aman dalam kondisi normal dan buruk, dan mempertahankan standar performa konsisten. Sertifikasi eksklusif Drone Mechatron memastikan petani menerima teknologi drone pertanian yang paling ketat teruji dan bersertifikat secara nasional.',
                    ],
                    [
                        'type' => 'quote',
                        'text' => 'Sertifikat SNI 9199:2023 ini membuktikan Drone Mechatron telah lulus pengujian mutu, keselamatan, dan performa paling ketat di Indonesia—bukan sekadar klaim, melainkan standar yang terverifikasi secara nasional oleh BSN.',
                    ],
                    [
                        'type' => 'heading',
                        'text' => 'Akses Eksklusif ke Pengadaan Pemerintah dan Program Food Estate',
                    ],
                    [
                        'type' => 'paragraph',
                        'text' => 'Sebagai satu-satunya drone pertanian bersertifikat SNI Indonesia, Drone Mechatron menempati posisi pasar eksklusif untuk pengadaan pemerintah dan pembeli institusional. Sertifikasi SNI membuat Drone Mechatron satu-satunya drone yang memenuhi syarat untuk program pertanian pemerintah, subsidi, inisiatif Food Estate, dan pengadaan institusional yang secara khusus mensyaratkan kepatuhan SNI. Eksklusivitas ini memposisikan Drone Mechatron sebagai teknologi wajib dimiliki bagi petani dan organisasi yang mencari solusi drone pertanian bersertifikat dan terpercaya.',
                    ],
                    [
                        'type' => 'list',
                        'items' => [
                            'Satu-satunya drone pertanian yang memenuhi syarat program dan subsidi pertanian pemerintah.',
                            'Prioritas pengadaan untuk inisiatif Food Estate dan proyek lumbung pangan nasional.',
                            'Memenuhi persyaratan kepatuhan SNI untuk pengadaan institusional, dinas pertanian, dan BUMN pangan.',
                            'Jaminan mutu, keselamatan, dan performa yang telah tervalidasi secara nasional oleh BSN.',
                        ],
                    ],
                    [
                        'type' => 'heading',
                        'text' => 'Proses Pengujian Komprehensif Bersama PT TÜV Nord Indonesia',
                    ],
                    [
                        'type' => 'paragraph',
                        'text' => 'Meraih sertifikasi SNI 9199:2023 untuk Drone Mechatron memerlukan ketelitian teknik komprehensif dan protokol pengujian ekstensif. Proses sertifikasi mencakup verifikasi integritas struktural, penilaian stabilitas penerbangan di berbagai iklim Indonesia, validasi akurasi sistem spray, pengujian kapasitas beban, dan evaluasi fitur keselamatan. Drone Mechatron lulus semua persyaratan pengujian dari PT TÜV Nord Indonesia, mengkonfirmasi statusnya sebagai drone pertanian bersertifikat SNI eksklusif Indonesia yang memenuhi standar kualitas tertinggi nasional.',
                    ],
                    [
                        'type' => 'takeaway',
                        'title' => 'Intisari Berita',
                        'text' => 'Sertifikasi SNI 9199:2023 menjadikan Drone Mechatron sebagai drone pertanian bersertifikat nasional pertama dan satu-satunya di Indonesia. Pencapaian ini menjamin mutu, keselamatan, dan performa yang telah teruji ketat, sekaligus membuka akses penuh ke program dan pengadaan pemerintah.',
                    ],
                ],
            ],
            [
                'id' => 2,
                'slug' => 'mechatron-hadir-dalam-bulan-mutu-nasional-2025',
                'title' => 'MECHATRON Hadir dalam Bulan Mutu Nasional 2025',
                'excerpt' => 'PT Bandung Mekatronika Teknologi menampilkan Drone Mechatron, solusi drone pertanian domestik pertama dan paling canggih Indonesia, sebagai bukti budaya mutu dan kemandirian teknologi bangsa pada ajang Bulan Mutu Nasional 2025.',
                'date' => '26 November 2025',
                'readTime' => '2 menit baca',
                'category' => 'Inovasi & Mutu Nasional',
                'author' => [
                    'name' => 'TIM MECHATRON',
                    'role' => 'Divisi Publikasi & Riset Agrikultur',
                    'avatar' => '/images/mechatron_logo.png',
                ],
                'image' => '/images/bulan-mutu-nasional-2025.jpeg',
                'tags' => ['Bulan Mutu Nasional 2025', 'Drone Mechatron', 'TKDN', 'Inovasi Dalam Negeri'],
                'content' => [
                    [
                        'type' => 'paragraph',
                        'text' => 'PT Bandung Mekatronika Teknologi (BMT) mencapai sejarah pada acara Bulan Mutu Nasional 2025 yang prestisius, menampilkan Drone Mechatron – solusi drone pertanian domestik pertama dan paling canggih Indonesia. Perayaan tonggak sejarah Drone Mechatron ini menggarisbawahi komitmen bangsa terhadap inovasi teknologi pertanian dan kemandirian lokal. Drone Mechatron merepresentasikan pergeseran paradigma dalam pertanian presisi Indonesia, menggabungkan teknologi otomasi terdepan dengan standar kualitas ketat dan integrasi komponen domestik maksimal (TKDN).',
                    ],
                    [
                        'type' => 'heading',
                        'text' => 'Teknologi Presisi Buatan Dalam Negeri: Navigasi AI, GPS-RTK, hingga LiDAR',
                    ],
                    [
                        'type' => 'paragraph',
                        'text' => 'Drone Mechatron mengintegrasikan navigasi berbasis AI, monitoring kesehatan tanaman real-time, dan sistem spray otomatis yang mengirimkan pestisida dan nutrisi dengan presisi milimeter. Platform ini dilengkapi teknologi GPS-RTK (Real-Time Kinematic) untuk pemetaan dan penerbangan otonomi, pencitraan LiDAR untuk analisis kanopi tanaman, dan konektivitas IoT untuk manajemen pertanian berbasis data. Berbeda dengan solusi drone impor, Drone Mechatron dirancang khusus untuk iklim tropis Indonesia, jenis tanah beragam, dan praktik pertanian bervariasi, dengan kapasitas semprotan 15 liter dan jangkauan penerbangan 25 kilometer.',
                    ],
                    [
                        'type' => 'quote',
                        'text' => 'Kehadiran Drone Mechatron di Bulan Mutu Nasional 2025 membuktikan produk teknologi pertanian buatan Indonesia mampu bersaing dengan standar mutu tertinggi, sekaligus menegakkan kemandirian teknologi bangsa.',
                    ],
                    [
                        'type' => 'heading',
                        'text' => 'TKDN Tertinggi dan Hasil Nyata di Lahan Petani',
                    ],
                    [
                        'type' => 'paragraph',
                        'text' => 'Drone Mechatron diposisikan strategis sebagai solusi otomasi pertanian profesional paling hemat biaya untuk petani Indonesia. Dengan peringkat TKDN tertinggi dan sertifikasi SNI 9199:2023, Drone Mechatron memenuhi syarat program subsidi pertanian pemerintah, membuat teknologi drone premium dapat diakses oleh pertanian skala kecil dan menengah. Petani adopter awal melaporkan pengurangan penggunaan pestisida 60-70%, peningkatan hasil panen 40%, dan penghematan waktu operasional lahan 80%. Petani Drone Mechatron dapat memproses 30-40 hektar per hari dibandingkan metode tradisional yang memerlukan 2-3 minggu.',
                    ],
                    [
                        'type' => 'list',
                        'items' => [
                            'Tingkat Komponen Dalam Negeri (TKDN) tertinggi di kelas drone pertanian Indonesia.',
                            'Pengurangan penggunaan pestisida hingga 60-70% berkat sistem spray presisi.',
                            'Peningkatan hasil panen hingga 40% dengan aplikasi nutrisi tepat sasaran.',
                            'Kapasitas kerja 30-40 hektar per hari, jauh melampaui metode tradisional.',
                        ],
                    ],
                    [
                        'type' => 'takeaway',
                        'title' => 'Kebanggaan Inovasi Nasional',
                        'text' => 'Partisipasi Mechatron dalam Bulan Mutu Nasional 2025 menegaskan posisi drone pertanian buatan dalam negeri sebagai bukti nyata budaya mutu dan kemandirian teknologi Indonesia menuju swasembada pangan.',
                    ],
                ],
            ],
            [
                'id' => 3,
                'slug' => 'mechatron-drone-pertama-di-indonesia-yang-meraih-sertifikasi-sni',
                'title' => 'Mechatron! Drone Pertama di Indonesia yang Meraih Sertifikasi SNI',
                'excerpt' => 'Di bawah kepemimpinan Hermanu, PT Bandung Mekatronika Teknologi mencatat sejarah sebagai produsen drone pertanian buatan dalam negeri pertama yang meraih sertifikasi SNI 9199:2023—sebuah kemenangan inovasi lokal Indonesia.',
                'date' => '17 Desember 2025',
                'readTime' => '2 menit baca',
                'category' => 'Inovasi & Mutu Nasional',
                'author' => [
                    'name' => 'TIM MECHATRON',
                    'role' => 'Divisi Publikasi & Riset Agrikultur',
                    'avatar' => '/images/mechatron_logo.png',
                ],
                'image' => '/images/sertifikat-kesesuaian.jpg',
                'tags' => ['Drone Pertama Bersertifikat SNI', 'Karya Anak Bangsa', 'Hermanu', 'Kemandirian Teknologi'],
                'content' => [
                    [
                        'type' => 'paragraph',
                        'text' => 'Di bulan Desember 2025, Indonesia mencapai tonggak sejarah penting dalam inovasi teknologi pertanian. PT Bandung Mekatronika Teknologi (BMT), di bawah kepemimpinan Hermanu, mengumumkan penghargaan drone pertanian buatan domestik pertama Indonesia yang menerima sertifikasi SNI 9199:2023—standar nasional Indonesia untuk drone penyemprot pertanian. Pencapaian ini mewakili jauh lebih dari sekadar peluncuran produk; ini melambangkan kemenangan inovasi lokal, keunggulan teknis, dan visi kewirausahaan dalam memajukan sektor teknologi pertanian Indonesia.',
                    ],
                    [
                        'type' => 'heading',
                        'text' => 'Perjalanan Sang Pendiri: Dari Industri Elektronika hingga Mendirikan BMT',
                    ],
                    [
                        'type' => 'paragraph',
                        'text' => 'Jalan Hermanu menuju pendirian BMT dimulai dengan passion terhadap teknologi drone dan koneksi mendalam dalam komunitas drone Indonesia. Perjalanannya dibentuk oleh 25 tahun pengalaman profesional—15 tahun di industri elektronika dan 10 tahun di testing, inspection, and certification (TIC). Latar belakang beragam ini terbukti instrumental dalam menciptakan perusahaan yang unik diposisikan untuk menjembatani kesenjangan antara teknologi terdepan dan keharusan pertanian. Pada tahun 2022, Hermanu bermitra dengan rekan-rekan kuliahnya untuk mendirikan PT Bandung Mekatronika Teknologi, berfokus pada desain dan produksi drone yang dirancang khusus untuk sektor pertanian Indonesia.',
                    ],
                    [
                        'type' => 'quote',
                        'text' => 'Sertifikasi SNI ini bukan sekadar pencapaian teknis, melainkan bukti bahwa anak bangsa mampu menghadirkan teknologi drone pertanian berstandar nasional tanpa bergantung pada produk impor.',
                    ],
                    [
                        'type' => 'heading',
                        'text' => 'Mengakhiri Ketergantungan pada Drone Impor',
                    ],
                    [
                        'type' => 'paragraph',
                        'text' => 'Sebelum inovasi Mechatron, sektor pertanian Indonesia sangat bergantung pada drone impor—ketergantungan yang menciptakan berbagai tantangan. Drone impor datang dengan spare part mahal, dukungan teknis lokal terbatas, pengaturan garansi rumit, dan desain yang tidak memperhitungkan kondisi iklim tropis unik Indonesia dan kondisi tanah. Inisiatif pemerintah mendukung keamanan pangan domestik dan modernisasi pertanian menyoroti kebutuhan mendesak akan teknologi pertanian yang diproduksi secara lokal. Penyelarasan kebutuhan pasar ini dengan dukungan kebijakan memberikan Mechatron dengan peluang untuk mengembangkan solusi asli untuk tantangan pertanian Indonesia.',
                    ],
                    [
                        'type' => 'list',
                        'items' => [
                            'Drone pertanian buatan dalam negeri pertama yang bersertifikat SNI 9199:2023.',
                            'Ketersediaan suku cadang dan dukungan teknis lokal tanpa bergantung pada produk impor.',
                            'Desain yang disesuaikan khusus untuk iklim tropis dan kondisi tanah Indonesia.',
                            'Mendukung program pemerintah untuk kemandirian teknologi dan ketahanan pangan nasional.',
                        ],
                    ],
                    [
                        'type' => 'takeaway',
                        'title' => 'Kemenangan Inovasi Lokal',
                        'text' => 'Keberhasilan Mechatron meraih sertifikasi SNI 9199:2023 sebagai drone pertanian buatan dalam negeri pertama menandai tonggak kemandirian teknologi Indonesia, sekaligus membuka jalan bagi modernisasi pertanian berbasis karya anak bangsa.',
                    ],
                ],
            ],
            [
                'id' => 4,
                'slug' => 'kemenhub-rilis-koridor-ruang-udara-khusus-permudah-operasional-drone-agrikultur',
                'title' => 'Capacity Building Balai Besar Bahan dan Barang Teknik (B4T): Mechatron Ambil Peran Strategis dalam Verifikasi Drone Pertanian SNI',
                'excerpt' => 'Dalam kegiatan capacity building bersama B4T, Mechatron resmi dipilih sebagai mitra verifikator pengujian Drone Pertanian SNI, memperkuat sistem pengujian dan sertifikasi drone pertanian berstandar nasional di Indonesia.',
                'date' => '21 Februari 2026',
                'readTime' => '2 menit baca',
                'category' => 'Sertifikasi SNI',
                'author' => [
                    'name' => 'TIM MECHATRON',
                    'role' => 'Divisi Publikasi & Riset Agrikultur',
                    'avatar' => '/images/mechatron_logo.png',
                ],
                'image' => '/images/capacity-building-b4t.jpeg',
                'tags' => ['Capacity Building', 'B4T', 'Verifikasi SNI', 'Drone Pertanian'],
                'content' => [
                    [
                        'type' => 'paragraph',
                        'text' => 'Bandung, Senin 21 Februari 2026 – Kegiatan capacity building dalam rangka penambahan lingkup uji drone pertanian dilaksanakan di kantor PT. Bandung Mekatronika Teknologi (BMT). Kegiatan ini menjadi langkah strategis dalam penguatan sistem pengujian dan sertifikasi Drone Pertanian berstandar SNI di Indonesia. Dalam kegiatan tersebut, Mechatron secara resmi dipilih sebagai mitra verifikator pengujian Drone Pertanian SNI. Penunjukan ini didasarkan pada rekam jejak Mechatron sebagai produsen drone pertanian pertama di Indonesia yang memenuhi Standar Nasional Indonesia (SNI).',
                    ],
                    [
                        'type' => 'heading',
                        'text' => 'Penguatan Parameter Uji: Payload, Stabilitas Terbang, hingga Keselamatan Operasional',
                    ],
                    [
                        'type' => 'paragraph',
                        'text' => 'Tim teknis B4T bersama tim PT BMT melakukan pembahasan mendalam terkait penguatan parameter uji drone pertanian. Sesi ini mencakup uji kapasitas angkut (payload) dan stabilitas terbang, evaluasi performa sistem penyemprotan dan keseragaman distribusi cairan, penilaian ketahanan struktur dan sistem propulsi, serta verifikasi keselamatan operasional dan keandalan sistem kendali. Fokus signifikan diberikan pada harmonisasi prosedur verifikasi SNI untuk memastikan metodologi pengujian selaras dengan standar nasional sambil mempertahankan aplikabilitas praktis terhadap operasional lapangan.',
                    ],
                    [
                        'type' => 'quote',
                        'text' => 'Harmonisasi prosedur verifikasi SNI menjadi kunci agar metodologi pengujian selaras dengan standar nasional, namun tetap aplikatif terhadap kebutuhan nyata operasional drone pertanian di lapangan.',
                    ],
                    [
                        'type' => 'heading',
                        'text' => 'Suara Hermanu: Tanggung Jawab Memperkuat Industri Drone Nasional',
                    ],
                    [
                        'type' => 'paragraph',
                        'text' => 'Direktur PT. Bandung Mekatronika Teknologi, Hermanu, menyatakan bahwa kolaborasi ini merupakan tanggung jawab dan peluang yang signifikan: "Sebagai produsen drone pertanian SNI pertama di Indonesia, kami memiliki tanggung jawab besar untuk memastikan standar pengujian benar-benar mencerminkan kebutuhan teknis dan keselamatan operasional di lapangan. Kolaborasi ini menjadi langkah penting untuk memperkuat industri drone pertanian nasional. Kami berkomitmen untuk mendukung pengembangan skema uji yang lebih komprehensif yang akan menguntungkan seluruh sektor drone pertanian."',
                    ],
                    [
                        'type' => 'list',
                        'items' => [
                            'Penguatan sistem pengujian dan sertifikasi drone pertanian berstandar SNI nasional.',
                            'Penambahan lingkup uji meliputi payload, stabilitas terbang, dan keseragaman penyemprotan.',
                            'Harmonisasi metodologi pengujian agar selaras dengan standar nasional dan kebutuhan lapangan.',
                            'Penguatan industri drone pertanian dalam negeri melalui skema uji yang lebih komprehensif.',
                        ],
                    ],
                    [
                        'type' => 'takeaway',
                        'title' => 'Penguatan Ekosistem Sertifikasi',
                        'text' => 'Penunjukan Mechatron sebagai mitra verifikator pengujian Drone Pertanian SNI menegaskan peran strategis produsen dalam negeri dalam membangun ekosistem sertifikasi yang kredibel sekaligus memperkuat industri drone pertanian nasional.',
                    ],
                ],
            ],
            [
                'id' => 5,
                'slug' => 'mechatron-dan-prof-jamrud-aminuddin-lakukan-serah-terima-unit-drone-riset',
                'title' => 'Mechatron dan Prof. Jamrud Aminuddin Lakukan Serah Terima Unit Drone Riset',
                'excerpt' => 'Mechatron menyerahkan unit drone riset kepada Prof. Jamrud Aminuddin, menandai kemitraan kolaboratif industri dan akademis dalam pengembangan sistem drone survei maritim jangkauan jauh buatan dalam negeri.',
                'date' => '25 Oktober 2025',
                'readTime' => '2 menit baca',
                'category' => 'Riset & Kolaborasi',
                'author' => [
                    'name' => 'TIM MECHATRON',
                    'role' => 'Divisi Publikasi & Riset Agrikultur',
                    'avatar' => '/images/mechatron_logo.png',
                ],
                'image' => '/images/serahterima-jamrud.jpg',
                'tags' => ['Drone Riset', 'Prof. Jamrud Aminuddin', 'Drone Maritim', 'Kolaborasi Akademis'],
                'content' => [
                    [
                        'type' => 'paragraph',
                        'text' => 'Mechatron secara resmi melakukan serah terima unit drone riset kepada Prof. Jamrud Aminuddin, menandai pencapaian penting dalam kemitraan riset kolaboratif mereka. Serah terima ini menandakan kelanjutan dan kemajuan pengembangan sistem drone survei maritim jangkauan jauh.',
                    ],
                    [
                        'type' => 'heading',
                        'text' => 'Kolaborasi Industri dan Akademis untuk Teknologi Drone Maritim',
                    ],
                    [
                        'type' => 'paragraph',
                        'text' => 'Kemitraan antara Mechatron dan Prof. Jamrud Aminuddin mewakili kolaborasi kuat antara industri dan akademis. Bersama-sama, mereka memajukan teknologi drone Indonesia melalui penelitian yang ketat, pengembangan, dan aplikasi praktis dalam operasi pemetaan maritim dan survei kelautan.',
                    ],
                    [
                        'type' => 'quote',
                        'text' => 'Kolaborasi riset antara industri dan akademisi adalah fondasi untuk melahirkan teknologi drone maritim buatan Indonesia yang benar-benar teruji secara ilmiah dan aplikatif di lapangan.',
                    ],
                    [
                        'type' => 'heading',
                        'text' => 'Memperkuat Posisi Mechatron sebagai Penyedia Drone Maritim Domestik',
                    ],
                    [
                        'type' => 'paragraph',
                        'text' => 'Kolaborasi ini memperkuat posisi MECHATRON sebagai penyedia solusi drone maritim domestik paling canggih Indonesia. Kombinasi keahlian tim teknis Mechatron dan kemampuan penelitian akademis Prof. Aminuddin menciptakan kekuatan yang kuat untuk kemajuan teknologi.',
                    ],
                    [
                        'type' => 'list',
                        'items' => [
                            'Pengembangan sistem drone survei maritim jangkauan jauh buatan dalam negeri.',
                            'Sinergi keahlian teknis Mechatron dengan kemampuan riset akademis Prof. Jamrud Aminuddin.',
                            'Penguatan kemitraan industri dan perguruan tinggi dalam inovasi teknologi drone nasional.',
                            'Aplikasi praktis untuk operasi pemetaan maritim dan survei kelautan Indonesia.',
                        ],
                    ],
                    [
                        'type' => 'takeaway',
                        'title' => 'Sinergi Riset dan Industri',
                        'text' => 'Serah terima unit drone riset ini menegaskan komitmen Mechatron membangun sinergi industri dan akademis, mendorong kemajuan teknologi drone maritim domestik melalui penelitian yang ketat dan aplikatif.',
                    ],
                ],
            ],
            [
                'id' => 6,
                'slug' => 'lini-quadcopter-mechatron-lolos-uji-sni',
                'title' => 'Lini Quadcopter Mechatron Lolos Uji SNI',
                'excerpt' => 'Lini quadcopter Mechatron mulai Q5 hingga Q21 dinyatakan lulus uji Standar Nasional Indonesia (SNI), memperkuat jajaran drone pertanian penyemprot yang teruji mutu, keselamatan, dan keandalannya.',
                'date' => '17 April 2026',
                'readTime' => '2 menit baca',
                'category' => 'Sertifikasi SNI',
                'author' => [
                    'name' => 'TIM MECHATRON',
                    'role' => 'Divisi Publikasi & Riset Agrikultur',
                    'avatar' => '/images/mechatron_logo.png',
                ],
                'image' => '/images/sni-quad.jpg',
                'tags' => ['Quadcopter', 'Uji SNI', 'Drone Penyemprot', 'Mechatron Q-Series'],
                'content' => [
                    [
                        'type' => 'paragraph',
                        'text' => 'PT Bandung Mekatronika Teknologi (Mechatron) terus memperkuat pengembangan drone pertanian melalui lini quadcopter yang telah dinyatakan lulus uji Standar Nasional Indonesia (SNI).',
                    ],
                    [
                        'type' => 'heading',
                        'text' => 'Empat Model Teruji: Q5, Q10, Q16, hingga Q21',
                    ],
                    [
                        'type' => 'paragraph',
                        'text' => 'Berdasarkan ruang lingkup pengujian dalam sertifikat kesesuaian, beberapa model quadcopter Mechatron yang telah memenuhi standar tersebut meliputi Q5 (5 liter), Q10 (10 liter), Q16 (16 liter), hingga Q21 (21 liter). Pengujian dilakukan untuk memastikan aspek mutu, keselamatan, serta keandalan operasional drone pertanian, khususnya untuk aplikasi penyemprotan. Seluruh model dalam lini quadcopter ini telah melalui evaluasi teknis sesuai metode uji yang ditetapkan dalam standar SNI.',
                    ],
                    [
                        'type' => 'quote',
                        'text' => 'Lolosnya seluruh lini quadcopter dalam uji SNI membuktikan setiap model Mechatron, dari Q5 hingga Q21, memenuhi standar mutu, keselamatan, dan keandalan operasional di lahan pertanian.',
                    ],
                    [
                        'type' => 'heading',
                        'text' => 'Pengembangan Frame dan Sistem yang Memenuhi Standar Teknis',
                    ],
                    [
                        'type' => 'paragraph',
                        'text' => 'Keberhasilan ini menunjukkan bahwa pengembangan frame dan sistem pada drone quadcopter Mechatron telah memenuhi persyaratan teknis yang berlaku, sekaligus memperluas pilihan model yang siap digunakan di lapangan sesuai kebutuhan kapasitas operasional.',
                    ],
                    [
                        'type' => 'list',
                        'items' => [
                            'Empat model quadcopter bersertifikat: Q5 (5 liter), Q10 (10 liter), Q16 (16 liter), dan Q21 (21 liter).',
                            'Pengujian mutu, keselamatan, dan keandalan operasional khusus untuk aplikasi penyemprotan.',
                            'Pengembangan frame dan sistem yang memenuhi persyaratan teknis metode uji SNI.',
                            'Pilihan kapasitas beragam sesuai kebutuhan operasional di lapangan.',
                        ],
                    ],
                    [
                        'type' => 'takeaway',
                        'title' => 'Jaminan Mutu Lini Quadcopter',
                        'text' => 'Lolosnya lini quadcopter Mechatron dalam uji SNI menegaskan kesiapan produk drone pertanian dalam negeri yang teruji mutu dan keselamatannya, dengan pilihan kapasitas yang semakin lengkap untuk petani Indonesia.',
                    ],
                ],
            ],
            [
                'id' => 7,
                'slug' => 'mechatron-siap-hadir-di-bandung-innovation-week-2026',
                'title' => 'Mendorong Ekosistem Teknologi: Mechatron Siap Hadir di Bandung Innovation Week 2026',
                'excerpt' => 'PT Bandung Mekatronika Teknologi (Mechatron) akan hadir dalam Bandung Innovation Week (BIW) 2026 di Summarecon Mall Bandung. Mechatron siap memamerkan teknologi drone pertanian buatan dalam negeri yang berstandar nasional dan didukung sistem kendali terintegrasi.',
                'date' => '2 November 2026',
                'readTime' => '2 menit baca',
                'category' => 'Pameran & Inovasi',
                'author' => [
                    'name' => 'TIM MECHATRON',
                    'role' => 'Divisi Publikasi',
                    'avatar' => '/images/mechatron_logo.png',
                ],
                'image' => '/images/biw.jpeg',
                'tags' => ['Bandung Innovation Week 2026', 'Drone Pertanian', 'TKDN & SNI', 'Otomasi Industri', 'Summarecon Mall Bandung'],
                'content' => [
                    [
                        'type' => 'paragraph',
                        'text' => 'Dalam upaya terus mendorong adopsi teknologi di sektor industri dan publik, PT Bandung Mekatronika Teknologi (Mechatron) dengan bangga mengumumkan partisipasinya dalam ajang Bandung Innovation Week (BIW) 2026. Pameran teknologi bergengsi ini akan diselenggarakan di Summarecon Mall Bandung pada tanggal 12 hingga 15 November 2026 mendatang.',
                    ],
                    [
                        'type' => 'paragraph',
                        'text' => 'Diinisiasi oleh Teknovasi Robotika Seluruh Indonesia, BIW 2026 mengusung semangat "Innovate, Collaborate, Elevate" sebagai wadah pertemuan strategis antara inovator, pelaku industri, akademisi, dan pemerintah. Acara ini dirancang untuk menunjukkan bahwa inovasi teknologi bukan sekadar konsep, melainkan solusi nyata yang memberikan dampak positif bagi masyarakat.',
                    ],
                    [
                        'type' => 'heading',
                        'text' => 'Fokus Inovasi Agrikultur di Koridor Ageung',
                    ],
                    [
                        'type' => 'paragraph',
                        'text' => 'Sebagai salah satu pionir teknologi drone di tanah air, Mechatron diundang secara khusus untuk tampil dalam pameran berskala nasional ini. Para pengunjung dapat menemukan booth Mechatron di area Koridor Ageung, yang secara khusus didedikasikan sebagai zona Innovation Expo & Creative Showcase.',
                    ],
                    [
                        'type' => 'list',
                        'items' => [
                            'Melihat Langsung Drone Pertanian Karya Anak Bangsa: Armada drone penyemprot dan penebar pupuk yang dirancang khusus untuk karakter medan pertanian Nusantara, mengedepankan kemandirian teknologi (TKDN) serta kepatuhan terhadap standar mutu dan keamanan nasional (SNI).',
                            'Integrasi Perangkat & Sistem Kendali Terpadu: Pengembangan ekosistem kendali penerbangan yang terintegrasi secara internal untuk antarmuka pengoperasian yang intuitif, kemudahan navigasi, serta jaminan keamanan sistem operasional.',
                            'Sesi Konsultasi Terbuka: Tim ahli dan teknisi Mechatron siap berdiskusi langsung, menjawab kebutuhan teknis, hingga memberikan panduan modernisasi lahan pertanian berbasis teknologi drone.',
                        ],
                    ],
                    [
                        'type' => 'quote',
                        'text' => 'Kehadiran Mechatron di BIW 2026 adalah cerminan dari semangat kami untuk terus tumbuh bersama ekosistem teknologi di Indonesia serta mendorong kemandirian inovasi agrikultur nasional.',
                    ],
                    [
                        'type' => 'heading',
                        'text' => 'Membuka Ruang Kolaborasi Lintas Sektor',
                    ],
                    [
                        'type' => 'paragraph',
                        'text' => 'Bagi Mechatron, kehadiran di BIW 2026 adalah cerminan dari semangat kami untuk terus tumbuh bersama ekosistem teknologi di Indonesia. Kami percaya bahwa modernisasi di sektor pertanian dapat dipercepat melalui sinergi yang kuat antar-pemangku kepentingan.',
                    ],
                    [
                        'type' => 'takeaway',
                        'title' => 'Kunjungi Booth Mechatron di BIW 2026',
                        'text' => 'Mari bersama-sama mengeksplorasi potensi teknologi dan mewujudkan masa depan pertanian Indonesia yang lebih efisien dan mandiri di booth Mechatron (Koridor Ageung, Summarecon Mall Bandung) pada 12–15 November 2026.',
                    ],
                ],
            ],
        ];
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    private static function allEnglish(): array
    {
        return [
            [
                'id' => 1,
                'slug' => 'mechatron-resmi-menerima-sertifikat-sni-9199-2023-untuk-drone-pertanian',
                'title' => 'Mechatron Officially Receives SNI 9199:2023 Certification for Agricultural Drones',
                'excerpt' => 'PT Bandung Mekatronika Teknologi (Mechatron) has officially obtained the SNI 9199:2023 certification for Agricultural Unmanned Aerial Vehicles (Drones) - Spraying - Quality requirements and test methods from the National Standardization Agency (BSN) of the Republic of Indonesia.',
                'date' => '14 November 2025',
                'readTime' => '3 min read',
                'category' => 'SNI Certification',
                'author' => [
                    'name' => 'MECHATRON TEAM',
                    'role' => 'Publication & Agricultural Research Division',
                    'avatar' => '/images/mechatron_logo.png',
                ],
                'image' => '/images/drone-sni.jpeg',
                'tags' => ['SNI 9199:2023 Certificate', 'Certified Agricultural Drone', 'BSN'],
                'content' => [
                    [
                        'type' => 'paragraph',
                        'text' => 'PT Bandung Mekatronika Teknologi (BMT) has officially received the SNI 9199:2023 certificate, making Mechatron the first and only Indonesian agricultural drone manufacturer to achieve this prestigious certification. This milestone positions Mechatron as the leading certified agricultural drone solution in Indonesia. The SNI 9199:2023 standard establishes strict quality requirements for agricultural spraying drones, ensuring comprehensive safety, performance, and reliability standards.',
                    ],
                    [
                        'type' => 'heading',
                        'text' => 'Quality and Efficiency Standards Verified by SNI 9199:2023',
                    ],
                    [
                        'type' => 'paragraph',
                        'text' => 'SNI 9199:2023 is Indonesia\'s national quality standard specifically for agricultural spraying drones. It verifies that Mechatron drones meet uniform quality criteria, perform reliably across Indonesia\'s diverse farming environments and tropical climates, distribute pesticides and fertilizers with high precision (±5% variance), operate safely in both normal and challenging conditions, and maintain consistent performance standards.',
                    ],
                    [
                        'type' => 'quote',
                        'text' => 'This SNI 9199:2023 certificate proves that Mechatron drones have passed the most rigorous quality, safety, and performance testing in Indonesia—not merely a claim, but a nationally verified standard by BSN.',
                    ],
                    [
                        'type' => 'heading',
                        'text' => 'Exclusive Access to Government Procurement and Food Estate Programs',
                    ],
                    [
                        'type' => 'paragraph',
                        'text' => 'As Indonesia\'s first SNI-certified agricultural drone, Mechatron holds a strategic position for government procurement and institutional buyers. SNI certification qualifies Mechatron drones for government agricultural programs, subsidies, Food Estate initiatives, and institutional procurements that mandate SNI compliance.',
                    ],
                    [
                        'type' => 'list',
                        'items' => [
                            'Qualified for government agricultural programs and national subsidy initiatives.',
                            'Priority procurement readiness for Food Estate and national food security projects.',
                            'Meets SNI compliance mandates for institutional buyers, agricultural agencies, and state-owned enterprises.',
                            'Quality, safety, and performance nationally validated by BSN.',
                        ],
                    ],
                    [
                        'type' => 'heading',
                        'text' => 'Comprehensive Testing Process with PT TÜV Nord Indonesia',
                    ],
                    [
                        'type' => 'paragraph',
                        'text' => 'Achieving SNI 9199:2023 certification required rigorous engineering discipline and extensive testing protocols—covering structural integrity verification, flight stability across tropical conditions, spray system accuracy validation, payload capacity testing, and safety system evaluations conducted with PT TÜV Nord Indonesia.',
                    ],
                    [
                        'type' => 'takeaway',
                        'title' => 'Key Takeaway',
                        'text' => 'SNI 9199:2023 certification establishes Mechatron as Indonesia\'s first nationally certified agricultural drone—guaranteeing tested quality, safety, and performance while unlocking full access to government procurement programs.',
                    ],
                ],
            ],
            [
                'id' => 2,
                'slug' => 'mechatron-hadir-dalam-bulan-mutu-nasional-2025',
                'title' => 'MECHATRON Showcases Innovation at National Quality Month 2025',
                'excerpt' => 'PT Bandung Mekatronika Teknologi showcased Mechatron Drones—Indonesia\'s first and most advanced domestic agricultural drone solution—demonstrating a culture of quality and national technological independence at National Quality Month 2025.',
                'date' => '26 November 2025',
                'readTime' => '2 min read',
                'category' => 'National Innovation & Quality',
                'author' => [
                    'name' => 'MECHATRON TEAM',
                    'role' => 'Publication & Agricultural Research Division',
                    'avatar' => '/images/mechatron_logo.png',
                ],
                'image' => '/images/bulan-mutu-nasional-2025.jpeg',
                'tags' => ['National Quality Month 2025', 'Mechatron Drone', 'TKDN', 'Domestic Innovation'],
                'content' => [
                    [
                        'type' => 'paragraph',
                        'text' => 'PT Bandung Mekatronika Teknologi (BMT) marked a milestone at the prestigious National Quality Month (Bulan Mutu Nasional) 2025 event, showcasing Mechatron Drones—Indonesia\'s pioneering domestic agricultural drone solution. Mechatron represents a paradigm shift in Indonesian precision agriculture, combining advanced automation with strict quality standards and high domestic component integration (TKDN).',
                    ],
                    [
                        'type' => 'heading',
                        'text' => 'Domestically Engineered Precision: AI Navigation, GPS-RTK, and LiDAR',
                    ],
                    [
                        'type' => 'paragraph',
                        'text' => 'Mechatron Drones integrate AI-assisted navigation, real-time crop monitoring, and automated spraying systems that deliver pesticides and nutrients with millimeter precision. Equipped with GPS-RTK for autonomous flight, LiDAR canopy analysis, and IoT connectivity, Mechatron is purpose-built for Indonesia\'s tropical climate and diverse farming terrains.',
                    ],
                    [
                        'type' => 'quote',
                        'text' => 'Mechatron\'s presence at National Quality Month 2025 proves that Indonesian-made agricultural technology can compete at the highest quality standards while upholding national technological independence.',
                    ],
                    [
                        'type' => 'heading',
                        'text' => 'High TKDN Rating and Tangible Results in Farmers\' Fields',
                    ],
                    [
                        'type' => 'paragraph',
                        'text' => 'With a high TKDN domestic content rating and SNI 9199:2023 certification, Mechatron delivers cost-effective professional agricultural automation. Early adopters report significant reductions in pesticide usage, higher crop yields, and up to 80% savings in field operating time.',
                    ],
                    [
                        'type' => 'list',
                        'items' => [
                            'Leading Domestic Component Level (TKDN) in the Indonesian agricultural drone class.',
                            'Up to 60–70% reduction in pesticide usage through precision spraying.',
                            'Up to 40% yield improvement via targeted nutrient application.',
                            'High daily field coverage compared to traditional manual spraying.',
                        ],
                    ],
                    [
                        'type' => 'takeaway',
                        'title' => 'National Innovation Pride',
                        'text' => 'Mechatron\'s participation in National Quality Month 2025 reaffirms the role of domestically built agricultural drones as tangible proof of Indonesia\'s quality culture and technological self-reliance.',
                    ],
                ],
            ],
            [
                'id' => 3,
                'slug' => 'mechatron-drone-pertama-di-indonesia-yang-meraih-sertifikasi-sni',
                'title' => 'Mechatron! The First Drone in Indonesia to Achieve SNI Certification',
                'excerpt' => 'Under the leadership of Hermanu, PT Bandung Mekatronika Teknologi made history as the first domestic agricultural drone manufacturer to earn SNI 9199:2023 certification—a triumph for local Indonesian innovation.',
                'date' => '17 December 2025',
                'readTime' => '2 min read',
                'category' => 'National Innovation & Quality',
                'author' => [
                    'name' => 'MECHATRON TEAM',
                    'role' => 'Publication & Agricultural Research Division',
                    'avatar' => '/images/mechatron_logo.png',
                ],
                'image' => '/images/sertifikat-kesesuaian.jpg',
                'tags' => ['First SNI Certified Drone', 'Made in Indonesia', 'Hermanu', 'Tech Independence'],
                'content' => [
                    [
                        'type' => 'paragraph',
                        'text' => 'In December 2025, Indonesia reached a historic milestone in agricultural technology innovation. PT Bandung Mekatronika Teknologi (BMT), under the leadership of Hermanu, announced Indonesia\'s first domestically manufactured agricultural drone to receive SNI 9199:2023 certification.',
                    ],
                    [
                        'type' => 'heading',
                        'text' => 'The Founder\'s Journey: From Electronics Industry to Founding BMT',
                    ],
                    [
                        'type' => 'paragraph',
                        'text' => 'Hermanu\'s path to founding BMT was shaped by 25 years of professional experience—15 years in the electronics industry and 10 years in testing, inspection, and certification (TIC). In 2022, he partnered with university colleagues to establish PT Bandung Mekatronika Teknologi, focusing on designing and manufacturing drones tailored specifically for Indonesia\'s agricultural sector.',
                    ],
                    [
                        'type' => 'quote',
                        'text' => 'This SNI certification is not merely a technical achievement—it is proof that Indonesian engineers can deliver national-standard agricultural drone technology without relying on imported products.',
                    ],
                    [
                        'type' => 'heading',
                        'text' => 'Ending Dependence on Imported Drones',
                    ],
                    [
                        'type' => 'paragraph',
                        'text' => 'Before Mechatron\'s innovation, Indonesia\'s agricultural sector relied heavily on imported drones that came with costly spare parts, limited local technical support, and complex warranty processes. Mechatron bridges this gap with locally manufactured, tropical-ready drones backed by ready spare parts in Indonesia.',
                    ],
                    [
                        'type' => 'list',
                        'items' => [
                            'First domestically built agricultural drone certified under SNI 9199:2023.',
                            'Local spare parts availability and direct technical support without import delays.',
                            'Engineered specifically for Indonesia\'s tropical climate and diverse soil conditions.',
                            'Supports national programs for technological independence and food security.',
                        ],
                    ],
                    [
                        'type' => 'takeaway',
                        'title' => 'Triumph of Local Innovation',
                        'text' => 'Mechatron\'s achievement in earning SNI 9199:2023 certification as Indonesia\'s first domestic agricultural drone marks a milestone in national technological self-reliance.',
                    ],
                ],
            ],
            [
                'id' => 4,
                'slug' => 'kemenhub-rilis-koridor-ruang-udara-khusus-permudah-operasional-drone-agrikultur',
                'title' => 'B4T Capacity Building: Mechatron Takes a Strategic Role in SNI Agricultural Drone Verification',
                'excerpt' => 'During a capacity building program with B4T, Mechatron was officially selected as a testing verifier partner for SNI Agricultural Drones, strengthening national-standard drone testing and certification in Indonesia.',
                'date' => '21 February 2026',
                'readTime' => '2 min read',
                'category' => 'SNI Certification',
                'author' => [
                    'name' => 'MECHATRON TEAM',
                    'role' => 'Publication & Agricultural Research Division',
                    'avatar' => '/images/mechatron_logo.png',
                ],
                'image' => '/images/capacity-building-b4t.jpeg',
                'tags' => ['Capacity Building', 'B4T', 'SNI Verification', 'Agricultural Drone'],
                'content' => [
                    [
                        'type' => 'paragraph',
                        'text' => 'Bandung, February 21, 2026 – A capacity building program to expand agricultural drone testing scope was held at the office of PT Bandung Mekatronika Teknologi (BMT). During the event, Mechatron was officially appointed as a testing verifier partner for SNI Agricultural Drones based on its track record as Indonesia\'s first SNI-certified agricultural drone manufacturer.',
                    ],
                    [
                        'type' => 'heading',
                        'text' => 'Strengthening Test Parameters: Payload, Flight Stability, and Operational Safety',
                    ],
                    [
                        'type' => 'paragraph',
                        'text' => 'The B4T technical team and PT BMT engineers conducted in-depth sessions covering payload capacity and flight stability testing, spraying uniformity evaluation, structural and propulsion endurance assessment, and control system safety verification.',
                    ],
                    [
                        'type' => 'quote',
                        'text' => 'Harmonizing SNI verification procedures is key to ensuring testing methodologies align with national standards while remaining practical for real-world agricultural drone operations.',
                    ],
                    [
                        'type' => 'heading',
                        'text' => 'Hermanu\'s Vision: Responsibility to Strengthen the National Drone Industry',
                    ],
                    [
                        'type' => 'paragraph',
                        'text' => 'Director of PT Bandung Mekatronika Teknologi, Hermanu, stated: "As Indonesia\'s first SNI agricultural drone manufacturer, we carry a vital responsibility to ensure testing standards truly reflect technical and operational safety needs in the field."',
                    ],
                    [
                        'type' => 'list',
                        'items' => [
                            'Strengthening national SNI testing and certification systems for agricultural drones.',
                            'Expanding test scope across payload, flight stability, and spraying uniformity.',
                            'Harmonizing test methodologies with national standards and real-world field requirements.',
                            'Empowering the domestic agricultural drone industry through comprehensive testing schemes.',
                        ],
                    ],
                    [
                        'type' => 'takeaway',
                        'title' => 'Strengthening the Certification Ecosystem',
                        'text' => 'Mechatron\'s appointment as an SNI Agricultural Drone testing verifier partner underscores the strategic role of domestic manufacturers in building a credible national certification ecosystem.',
                    ],
                ],
            ],
            [
                'id' => 5,
                'slug' => 'mechatron-dan-prof-jamrud-aminuddin-lakukan-serah-terima-unit-drone-riset',
                'title' => 'Mechatron and Prof. Jamrud Aminuddin Hold Handover of Research Drone Unit',
                'excerpt' => 'Mechatron handed over a research drone unit to Prof. Jamrud Aminuddin, marking a collaborative industry-academia partnership in developing a domestically built long-range maritime survey drone system.',
                'date' => '25 October 2025',
                'readTime' => '2 min read',
                'category' => 'Research & Collaboration',
                'author' => [
                    'name' => 'MECHATRON TEAM',
                    'role' => 'Publication & Agricultural Research Division',
                    'avatar' => '/images/mechatron_logo.png',
                ],
                'image' => '/images/serahterima-jamrud.jpg',
                'tags' => ['Research Drone', 'Prof. Jamrud Aminuddin', 'Maritime Drone', 'Academic Collaboration'],
                'content' => [
                    [
                        'type' => 'paragraph',
                        'text' => 'Mechatron officially handed over a research drone unit to Prof. Jamrud Aminuddin, marking an important milestone in their collaborative research partnership and advancing the development of a long-range maritime survey drone system.',
                    ],
                    [
                        'type' => 'heading',
                        'text' => 'Industry and Academia Collaboration for Maritime Drone Technology',
                    ],
                    [
                        'type' => 'paragraph',
                        'text' => 'The partnership between Mechatron and Prof. Jamrud Aminuddin represents a strong synergy between industry and academia—advancing Indonesian drone technology through rigorous research, development, and practical applications in maritime mapping and ocean surveys.',
                    ],
                    [
                        'type' => 'quote',
                        'text' => 'Research collaboration between industry and academia is the foundation for creating Indonesian-made maritime drone technology that is scientifically tested and field-ready.',
                    ],
                    [
                        'type' => 'heading',
                        'text' => 'Strengthening Mechatron\'s Position as a Domestic Maritime Drone Provider',
                    ],
                    [
                        'type' => 'paragraph',
                        'text' => 'Combining the engineering expertise of Mechatron\'s technical team with Prof. Aminuddin\'s academic research capabilities accelerates domestic maritime UAV innovation.',
                    ],
                    [
                        'type' => 'list',
                        'items' => [
                            'Development of a domestically built long-range maritime survey drone system.',
                            'Synergy between Mechatron\'s engineering team and Prof. Jamrud Aminuddin\'s academic research.',
                            'Strengthening industry-university partnerships in national drone innovation.',
                            'Practical applications for Indonesian maritime mapping and coastal survey operations.',
                        ],
                    ],
                    [
                        'type' => 'takeaway',
                        'title' => 'Research & Industry Synergy',
                        'text' => 'This research drone handover highlights Mechatron\'s commitment to industry-academia collaboration in advancing domestic maritime drone technology.',
                    ],
                ],
            ],
            [
                'id' => 6,
                'slug' => 'lini-quadcopter-mechatron-lolos-uji-sni',
                'title' => 'Mechatron Quadcopter Lineup Passes SNI Testing',
                'excerpt' => 'Mechatron\'s quadcopter lineup from Q5 to Q21 has officially passed Indonesian National Standard (SNI) testing, strengthening its family of quality-, safety-, and reliability-verified agricultural spraying drones.',
                'date' => '17 April 2026',
                'readTime' => '2 min read',
                'category' => 'SNI Certification',
                'author' => [
                    'name' => 'MECHATRON TEAM',
                    'role' => 'Publication & Agricultural Research Division',
                    'avatar' => '/images/mechatron_logo.png',
                ],
                'image' => '/images/sni-quad.jpg',
                'tags' => ['Quadcopter', 'SNI Testing', 'Spraying Drone', 'Mechatron Q-Series'],
                'content' => [
                    [
                        'type' => 'paragraph',
                        'text' => 'PT Bandung Mekatronika Teknologi (Mechatron) continues to expand its agricultural drone portfolio with its quadcopter lineup officially passing Indonesian National Standard (SNI) testing.',
                    ],
                    [
                        'type' => 'heading',
                        'text' => 'Four Certified Models: Q5, Q10, Q16, and Q21',
                    ],
                    [
                        'type' => 'paragraph',
                        'text' => 'Under the certificate of conformity testing scope, the Mechatron quadcopter models meeting SNI standards include the Q5 (5 liters), Q10 (10 liters), Q16 (16 liters), and Q21 (21 liters). Each model underwent rigorous technical evaluation to verify quality, safety, and operational reliability for agricultural spraying.',
                    ],
                    [
                        'type' => 'quote',
                        'text' => 'Passing SNI testing across the entire quadcopter lineup proves that every Mechatron model, from Q5 to Q21, meets strict quality, safety, and operational reliability standards in agricultural fields.',
                    ],
                    [
                        'type' => 'heading',
                        'text' => 'Airframe and System Engineering Meeting National Standards',
                    ],
                    [
                        'type' => 'paragraph',
                        'text' => 'This achievement demonstrates that Mechatron\'s quadcopter airframe and flight control systems meet applicable national technical requirements while offering diverse tank capacities tailored to farmers\' operational needs.',
                    ],
                    [
                        'type' => 'list',
                        'items' => [
                            'Four certified quadcopter models: Q5 (5L), Q10 (10L), Q16 (16L), and Q21 (21L).',
                            'Quality, safety, and operational reliability tested specifically for spraying applications.',
                            'Airframe and avionics engineered to meet SNI testing method standards.',
                            'Flexible capacity options tailored to diverse field sizes.',
                        ],
                    ],
                    [
                        'type' => 'takeaway',
                        'title' => 'Quadcopter Lineup Quality Assurance',
                        'text' => 'Passing SNI testing across the Mechatron quadcopter lineup underscores the readiness of domestically manufactured agricultural drones with comprehensive capacity choices for Indonesian farmers.',
                    ],
                ],
            ],
            [
                'id' => 7,
                'slug' => 'mechatron-siap-hadir-di-bandung-innovation-week-2026',
                'title' => 'Driving the Tech Ecosystem: Mechatron Ready to Join Bandung Innovation Week 2026',
                'excerpt' => 'PT Bandung Mekatronika Teknologi (Mechatron) will participate in Bandung Innovation Week (BIW) 2026 at Summarecon Mall Bandung, showcasing national-standard domestic agricultural drones and integrated flight control systems.',
                'date' => '2 November 2026',
                'readTime' => '2 min read',
                'category' => 'Exhibition & Innovation',
                'author' => [
                    'name' => 'MECHATRON TEAM',
                    'role' => 'Publication Division',
                    'avatar' => '/images/mechatron_logo.png',
                ],
                'image' => '/images/biw.jpeg',
                'tags' => ['Bandung Innovation Week 2026', 'Agricultural Drone', 'TKDN & SNI', 'Industrial Automation', 'Summarecon Mall Bandung'],
                'content' => [
                    [
                        'type' => 'paragraph',
                        'text' => 'Continuing to drive technology adoption across industrial and public sectors, PT Bandung Mekatronika Teknologi (Mechatron) proudly announces its participation in Bandung Innovation Week (BIW) 2026 at Summarecon Mall Bandung from November 12 to 15, 2026.',
                    ],
                    [
                        'type' => 'paragraph',
                        'text' => 'Initiated by Teknovasi Robotika Seluruh Indonesia, BIW 2026 carries the theme "Innovate, Collaborate, Elevate" as a strategic meeting ground for innovators, industry players, academics, and government institutions.',
                    ],
                    [
                        'type' => 'heading',
                        'text' => 'Agricultural Innovation Spotlight at Koridor Ageung',
                    ],
                    [
                        'type' => 'paragraph',
                        'text' => 'As one of Indonesia\'s drone technology pioneers, Mechatron has been specially invited to exhibit at this national showcase. Visitors can find the Mechatron booth at Koridor Ageung, dedicated to the Innovation Expo & Creative Showcase zone.',
                    ],
                    [
                        'type' => 'list',
                        'items' => [
                            'Experience Indonesian-Made Agricultural Drones Firsthand: Spraying and spreading drone fleets purpose-built for Indonesian agricultural terrains with high TKDN and SNI certification.',
                            'Integrated Hardware & Flight Control Ecosystem: In-house flight control development delivering an intuitive operator interface, seamless navigation, and operational safety.',
                            'Open Consultation Sessions: Mechatron engineers and specialists ready to discuss technical requirements and agricultural modernization strategies.',
                        ],
                    ],
                    [
                        'type' => 'quote',
                        'text' => 'Mechatron\'s presence at BIW 2026 reflects our spirit to grow alongside Indonesia\'s technology ecosystem and drive national agricultural innovation independence.',
                    ],
                    [
                        'type' => 'heading',
                        'text' => 'Opening Cross-Sector Collaboration Opportunities',
                    ],
                    [
                        'type' => 'paragraph',
                        'text' => 'We believe agricultural modernization can be accelerated through strong synergy across stakeholders—bringing together engineering innovation and real-world farming needs.',
                    ],
                    [
                        'type' => 'takeaway',
                        'title' => 'Visit the Mechatron Booth at BIW 2026',
                        'text' => 'Explore the future of efficient, self-reliant Indonesian agriculture at the Mechatron booth (Koridor Ageung, Summarecon Mall Bandung) on November 12–15, 2026.',
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
        $normalized = strtolower(trim($slug));
        foreach (self::all() as $article) {
            if (strtolower($article['slug']) === $normalized) {
                return $article;
            }
        }

        return null;
    }

    public static function sorted(): array
    {
        $articles = self::all();

        usort($articles, fn ($a, $b) => self::dateValue($b['date']) <=> self::dateValue($a['date']));

        return $articles;
    }

    public static function latest(int $limit = 3): array
    {
        return array_slice(self::sorted(), 0, $limit);
    }

    private static function dateValue(string $date): int
    {
        $months = [
            'januari' => 1, 'january' => 1,
            'februari' => 2, 'february' => 2,
            'maret' => 3, 'march' => 3,
            'april' => 4,
            'mei' => 5, 'may' => 5,
            'juni' => 6, 'june' => 6,
            'juli' => 7, 'july' => 7,
            'agustus' => 8, 'august' => 8,
            'september' => 9,
            'oktober' => 10, 'october' => 10,
            'november' => 11,
            'desember' => 12, 'december' => 12,
        ];

        $parts = preg_split('/\s+/', trim($date));
        if (count($parts) !== 3) {
            return 0;
        }

        [$day, $month, $year] = $parts;
        $monthNum = $months[strtolower($month)] ?? 0;

        return ((int) $year) * 10000 + $monthNum * 100 + ((int) $day);
    }

    public static function related(string $currentSlug, int $limit = 3): array
    {
        $filtered = array_filter(self::all(), fn ($a) => $a['slug'] !== $currentSlug);

        return array_slice($filtered, 0, $limit);
    }
}
