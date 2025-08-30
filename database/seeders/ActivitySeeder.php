<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menghapus data lama
        Activity::truncate();

        // Data Kegiatan 1
        Activity::create([
            'title' => 'Unit Kegiatan Mahasiswa Fotografi "Lensa"',
            'slug' => Str::slug('Unit Kegiatan Mahasiswa Fotografi Lensa'),
            'image' => 'images/activities/1.png',
            'category' => 'UKM',
            'excerpt' => 'Wadah bagi para pencinta fotografi untuk belajar dan berkarya bersama.',
            'body' => 'UKM Lensa merupakan komunitas fotografi terbesar di kampus. Kegiatan rutinnya meliputi hunting foto bersama, workshop editing, pameran, dan seminar dari fotografer profesional. Pendaftaran anggota baru dibuka setiap awal semester.',
        ]);
        
        // Data Kegiatan 2
        Activity::create([
            'title' => 'Laboratorium Riset Artificial Intelligence',
            'slug' => Str::slug('Laboratorium Riset Artificial Intelligence'),
            'image' => 'images/activities/2.png',
            'category' => 'Lab',
            'excerpt' => 'Pusat pengembangan dan penelitian di bidang kecerdasan buatan.',
            'body' => 'Lab AI terbuka bagi mahasiswa yang ingin terlibat dalam proyek-proyek riset inovatif. Topik riset mencakup machine learning, computer vision, dan natural language processing. Mahasiswa dapat bergabung sebagai asisten peneliti.',
        ]);
        
        // Data Kegiatan 3
        Activity::create([
            'title' => 'Badan Eksekutif Mahasiswa (BEM) Campus Portal',
            'slug' => Str::slug('Badan Eksekutif Mahasiswa BEM Campus Portal'),
            'image' => 'images/activities/3.png',
            'category' => 'Organisasi',
            'excerpt' => 'Lembaga eksekutif mahasiswa tingkat universitas yang menaungi aspirasi mahasiswa.',
            'body' => 'BEM bertanggung jawab dalam menyelenggarakan berbagai program kerja untuk mahasiswa, mulai dari advokasi, pengabdian masyarakat, hingga acara-acara besar seperti orientasi mahasiswa baru dan festival seni tahunan.',
        ]);
        
        // Data Kegiatan 4
        Activity::create([
            'title' => 'Riset Group: Renewable Energy',
            'slug' => Str::slug('Riset Group Renewable Energy'),
            'image' => 'images/activities/4.png',
            'category' => 'Riset',
            'excerpt' => 'Kelompok riset yang fokus pada pengembangan sumber energi terbarukan.',
            'body' => 'Grup riset ini meneliti berbagai potensi energi alternatif, seperti panel surya efisiensi tinggi dan konversi biomassa. Mahasiswa yang tertarik dengan isu keberlanjutan dan energi hijau dapat bergabung untuk tugas akhir atau proyek penelitian.',
        ]);
        
        // Data Kegiatan 5
        Activity::create([
            'title' => 'UKM Pecinta Alam "Everest"',
            'slug' => Str::slug('UKM Pecinta Alam Everest'),
            'image' => 'images/activities/5.png',
            'category' => 'UKM',
            'excerpt' => 'Komunitas untuk mahasiswa yang gemar kegiatan luar ruangan dan peduli lingkungan.',
            'body' => 'Kegiatan utama UKM Everest meliputi pendakian gunung, panjat tebing, susur gua, dan konservasi alam. Selain mengasah fisik dan mental, anggota juga dibekali dengan pengetahuan tentang survival dan pelestarian lingkungan hidup.',
        ]);

        // Data Kegiatan 6
        Activity::create([
            'title' => 'Laboratorium Jaringan Komputer',
            'slug' => Str::slug('Laboratorium Jaringan Komputer'),
            'image' => 'images/activities/6.png',
            'category' => 'Lab',
            'excerpt' => 'Fasilitas untuk praktikum dan sertifikasi di bidang jaringan.',
            'body' => 'Lab Jaringan dilengkapi dengan perangkat router, switch, dan server dari Cisco dan Mikrotik. Lab ini menjadi pusat pelatihan untuk mahasiswa yang ingin mengambil sertifikasi internasional seperti CCNA dan MTCNA.',
        ]);

        // Data Kegiatan 7
        Activity::create([
            'title' => 'Himpunan Mahasiswa Jurusan Ilmu Komunikasi',
            'slug' => Str::slug('Himpunan Mahasiswa Jurusan Ilmu Komunikasi'),
            'image' => 'images/activities/7.png',
            'category' => 'Organisasi',
            'excerpt' => 'Organisasi yang mewadahi seluruh mahasiswa program studi Ilmu Komunikasi.',
            'body' => 'Himpunan ini aktif mengadakan acara-acara yang relevan dengan dunia komunikasi, seperti seminar public speaking, workshop penyiaran radio, dan kompetisi pembuatan film pendek antar angkatan.',
        ]);

        // Data Kegiatan 8
        Activity::create([
            'title' => 'UKM Paduan Suara "Gita Suara"',
            'slug' => Str::slug('UKM Paduan Suara Gita Suara'),
            'image' => 'images/activities/8.png',
            'category' => 'UKM',
            'excerpt' => 'Harmoni suara mahasiswa yang telah memenangkan berbagai kompetisi paduan suara.',
            'body' => 'Gita Suara adalah UKM bagi mahasiswa yang memiliki bakat dan minat di dunia tarik suara, khususnya paduan suara. Mereka rutin berlatih dan sering diundang untuk tampil di acara-acara resmi universitas serta mengikuti kompetisi nasional dan internasional.',
        ]);
        
        // Data Kegiatan 9
        Activity::create([
            'title' => 'Riset Pengembangan Game Edukasi',
            'slug' => Str::slug('Riset Pengembangan Game Edukasi'),
            'image' => 'images/activities/9.png',
            'category' => 'Riset',
            'excerpt' => 'Proyek riset interdisipliner untuk menciptakan media pembelajaran yang menyenangkan.',
            'body' => 'Tim riset ini menggabungkan keahlian dari prodi DKV, Informatika, dan Psikologi untuk membangun game yang tidak hanya seru tetapi juga memiliki muatan edukasi. Proyek ini terbuka bagi mahasiswa yang ingin berkontribusi sebagai desainer, programmer, atau tester.',
        ]);
        
        // Data tersebut adalah dummy.
    }
}
