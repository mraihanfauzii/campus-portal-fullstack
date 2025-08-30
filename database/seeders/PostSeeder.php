<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {
        // Menghapus data lama untuk menghindari duplikasi
        Post::truncate();

        // Data Berita 1
        Post::create([
            'title' => 'Campus Portal Meraih Penghargaan Website Edukasi Terbaik 2025',
            'slug' => Str::slug('Campus Portal Meraih Penghargaan Website Edukasi Terbaik 2025'),
            'image' => 'images/posts/1.png',
            'excerpt' => 'Sebuah kebanggaan bagi kami, Campus Portal dianugerahi sebagai website edukasi paling inovatif dan user-friendly tahun ini.',
            'body' => 'Dalam ajang bergengsi National Education Awards 2025, Campus Portal berhasil menyisihkan ratusan kompetitor dan meraih juara pertama. Penilaian didasarkan pada desain antarmuka, kemudahan akses informasi, dan dampak positif bagi komunitas akademik. Rektor mengungkapkan rasa syukurnya dan berjanji akan terus mengembangkan platform ini.',
            'created_at' => now()->subDays(1),
        ]);

        // Data Berita 2
        Post::create([
            'title' => 'Program Studi Teknik Informatika Membuka Peminatan Baru: Cyber Security',
            'slug' => Str::slug('Program Studi Teknik Informatika Membuka Peminatan Baru Cyber Security'),
            'image' => 'images/posts/2.png',
            'excerpt' => 'Menjawab tantangan zaman, kini mahasiswa dapat mendalami bidang keamanan siber secara lebih spesifik.',
            'body' => 'Mulai semester ganjil tahun ajaran 2025/2026, Program Studi Teknik Informatika secara resmi meluncurkan peminatan Cyber Security. Peminatan ini dirancang untuk mencetak para ahli keamanan digital yang siap berkarir di industri. Kurikulumnya mencakup etika peretasan, kriptografi, hingga forensik digital.',
            'created_at' => now()->subDays(3),
        ]);

        // Data Berita 3
        Post::create([
            'title' => 'Mahasiswa Kembangkan Aplikasi Deteksi Dini Penyakit Jantung Berbasis AI',
            'slug' => Str::slug('Mahasiswa Kembangkan Aplikasi Deteksi Dini Penyakit Jantung Berbasis AI'),
            'image' => 'images/posts/3.png',
            'excerpt' => 'Inovasi dari tim Fakultas Kedokteran dan Teknik yang berpotensi menyelamatkan banyak nyawa.',
            'body' => 'Tiga mahasiswa lintas fakultas berhasil menciptakan sebuah aplikasi mobile yang mampu menganalisis data rekam medis dan memberikan prediksi risiko penyakit jantung dengan akurasi tinggi. Proyek ini didanai oleh hibah penelitian nasional dan sedang dalam tahap uji klinis.',
            'created_at' => now()->subDays(5),
        ]);

        // Data Berita 4
        Post::create([
            'title' => 'Perpustakaan Pusat Kini Buka 24 Jam Selama Pekan Ujian Akhir Semester',
            'slug' => Str::slug('Perpustakaan Pusat Kini Buka 24 Jam Selama Pekan Ujian Akhir Semester'),
            'image' => 'images/posts/4.png',
            'excerpt' => 'Fasilitas tambahan diberikan untuk mendukung mahasiswa dalam persiapan menghadapi UAS.',
            'body' => 'Untuk memberikan kenyamanan dan ruang belajar yang maksimal, pihak rektorat memutuskan untuk membuka Perpustakaan Pusat selama 24 jam non-stop, mulai dari tanggal 1 hingga 14 Desember 2025. Fasilitas seperti Wi-Fi, stop kontak, dan ruang diskusi dapat digunakan sepenuhnya.',
            'created_at' => now()->subDays(7),
        ]);

        // Data Berita 5
        Post::create([
            'title' => 'Tim Debat Bahasa Inggris Juarai Kompetisi Tingkat Asia Tenggara',
            'slug' => Str::slug('Tim Debat Bahasa Inggris Juarai Kompetisi Tingkat Asia Tenggara'),
            'image' => 'images/posts/5.png',
            'excerpt' => 'Prestasi membanggakan kembali diukir oleh mahasiswa Campus Portal di kancah internasional.',
            'body' => 'Tim debat "The Argonauts" berhasil membawa pulang piala kemenangan setelah mengalahkan tim dari universitas ternama di final Southeast Asian English Debate Championship. Kemenangan ini merupakan hasil dari latihan intensif selama enam bulan di bawah bimbingan para dosen ahli.',
            'created_at' => now()->subDays(10),
        ]);

        // Data Berita 6
        Post::create([
            'title' => 'Pendaftaran Beasiswa Unggulan Semester Genap Telah Dibuka',
            'slug' => Str::slug('Pendaftaran Beasiswa Unggulan Semester Genap Telah Dibuka'),
            'image' => 'images/posts/6.png',
            'excerpt' => 'Kesempatan bagi mahasiswa berprestasi untuk mendapatkan bantuan biaya pendidikan.',
            'body' => 'Direktorat Kemahasiswaan mengumumkan bahwa pendaftaran untuk Beasiswa Unggulan periode semester genap 2025/2026 telah dibuka hingga akhir bulan ini. Beasiswa ini mencakup pembebasan biaya UKT dan tunjangan buku bagi mahasiswa yang memenuhi kriteria akademik dan non-akademik.',
            'created_at' => now()->subDays(12),
        ]);

        // Data Berita 7
        Post::create([
            'title' => 'Fakultas Desain Komunikasi Visual Gelar Pameran Tugas Akhir "VISUALIZE 2025"',
            'slug' => Str::slug('Fakultas Desain Komunikasi Visual Gelar Pameran Tugas Akhir VISUALIZE 2025'),
            'image' => 'images/posts/7.png',
            'excerpt' => 'Menampilkan karya-karya terbaik dari para calon desainer grafis, animator, dan videografer.',
            'body' => 'Pameran tahunan "VISUALIZE 2025" akan diselenggarakan di galeri seni kampus selama satu minggu penuh. Acara ini terbuka untuk umum dan menjadi ajang bagi mahasiswa tingkat akhir untuk memamerkan portofolio mereka kepada publik dan para pelaku industri kreatif.',
            'created_at' => now()->subDays(15),
        ]);

        // Data Berita 8
        Post::create([
            'title' => 'Program Pertukaran Mahasiswa ke Jepang Kembali Dibuka',
            'slug' => Str::slug('Program Pertukaran Mahasiswa ke Jepang Kembali Dibuka'),
            'image' => 'images/posts/8.png',
            'excerpt' => 'Raih pengalaman belajar selama satu semester di universitas mitra di Tokyo dan Kyoto.',
            'body' => 'Kantor Urusan Internasional membuka pendaftaran bagi mahasiswa semester 4 hingga 6 yang tertarik mengikuti program pertukaran pelajar ke Jepang. Program ini menawarkan kesempatan untuk belajar budaya, bahasa, dan mengambil mata kuliah yang dapat ditransfer kreditnya.',
            'created_at' => now()->subDays(18),
        ]);

        // Data Berita 9
        Post::create([
            'title' => 'Pembangunan Gedung Laboratorium Terpadu Tahap Akhir',
            'slug' => Str::slug('Pembangunan Gedung Laboratorium Terpadu Tahap Akhir'),
            'image' => 'images/posts/9.png',
            'excerpt' => 'Fasilitas riset modern segera hadir untuk menunjang kegiatan penelitian dosen dan mahasiswa.',
            'body' => 'Proyek pembangunan Gedung Laboratorium Terpadu setinggi delapan lantai telah mencapai 90% penyelesaian. Gedung ini nantinya akan menjadi pusat riset multidisiplin yang dilengkapi dengan peralatan canggih dan laboratorium berstandar internasional. Diperkirakan gedung ini akan mulai beroperasi pada awal tahun depan.',
            'created_at' => now()->subDays(20),
        ]);
        // Data tersebut adalah dummy.
    }
}
