<?php

namespace Database\Seeders;

use App\Models\JenisKegiatan;
use Illuminate\Database\Seeder;

class JenisKegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisKegiatan::create([
            'nama' => 'Pertukaran Pelajar Nasional (non-sks)',
            'ref_point' => '10',
            'kategori_kegiatan_id' => '1',
        ]);
        JenisKegiatan::create([
            'nama' => 'Pertukaran Pelajar International (non-sks)',
            'ref_point' => '20',
            'kategori_kegiatan_id' => '1',
        ]);
        JenisKegiatan::create([
            'nama' => 'Pertukaran Pelajar Nasional (sks diakui)',
            'ref_point' => '30',
            'kategori_kegiatan_id' => '1',
        ]);
        JenisKegiatan::create([
            'nama' => 'Pertukaran Pelajar International (sks diakui)',
            'ref_point' => '50',
            'kategori_kegiatan_id' => '1',
        ]);
        JenisKegiatan::create([
            'nama' => 'Magang Industri Nasional',
            'ref_point' => '30',
            'kategori_kegiatan_id' => '2',
        ]);
        JenisKegiatan::create([
            'nama' => 'Magang Industri International',
            'ref_point' => '50',
            'kategori_kegiatan_id' => '2',
        ]);
        JenisKegiatan::create([
            'nama' => 'Kegiatan Mengajar MBKM Provinsi',
            'ref_point' => '10',
            'kategori_kegiatan_id' => '3',
        ]);
        JenisKegiatan::create([
            'nama' => 'Kegiatan Mengajar MBKM Nasional',
            'ref_point' => '30',
            'kategori_kegiatan_id' => '3',
        ]);
        JenisKegiatan::create([
            'nama' => 'Kegiatan Mengajar MBKM International',
            'ref_point' => '50',
            'kategori_kegiatan_id' => '3',
        ]);
        JenisKegiatan::create([
            'nama' => 'Penelitian Bersama Dosen atau Kelompok Riset',
            'ref_point' => '50',
            'kategori_kegiatan_id' => '4',
        ]);
        JenisKegiatan::create([
            'nama' => 'Pengabdian Kepada Masyarakat Bersama Dosen',
            'ref_point' => '30',
            'kategori_kegiatan_id' => '5',
        ]);
        JenisKegiatan::create([
            'nama' => 'Proyek/Relawan Kemanusiaan/Bela Negara Bersama Organisasi Luar Kampus',
            'ref_point' => '25',
            'kategori_kegiatan_id' => '6',
        ]);
        JenisKegiatan::create([
            'nama' => 'Mengajukan proposal Kegiatan PWM/PKM Tingkat Lokal',
            'ref_point' => '10',
            'kategori_kegiatan_id' => '7',
        ]);
        JenisKegiatan::create([
            'nama' => 'Mengajukan proposal Kegiatan PWM/PKM Tingkat Nasional',
            'ref_point' => '15',
            'kategori_kegiatan_id' => '7',
        ]);
        JenisKegiatan::create([
            'nama' => 'Mengajukan proposal Kegiatan PWM/PKM Tingkat International',
            'ref_point' => '20',
            'kategori_kegiatan_id' => '7',
        ]);
        JenisKegiatan::create([
            'nama' => 'Kegiatan PWM/PKM yang Didanai Tingkat Lokal',
            'ref_point' => '30',
            'kategori_kegiatan_id' => '7',
        ]);
        JenisKegiatan::create([
            'nama' => 'Kegiatan PWM/PKM yang Didanai Tingkat National',
            'ref_point' => '50',
            'kategori_kegiatan_id' => '7',
        ]);
        JenisKegiatan::create([
            'nama' => 'Kegiatan PWM/PKM yang Didanai Tingkat International',
            'ref_point' => '100',
            'kategori_kegiatan_id' => '7',
        ]);
        JenisKegiatan::create([
            'nama' => 'Proyek Independen Mahasiswa',
            'ref_point' => '5 - 60',
            'kategori_kegiatan_id' => '8',
        ]);
        JenisKegiatan::create([
            'nama' => 'Pendaftaran Paten',
            'ref_point' => '100',
            'kategori_kegiatan_id' => '9',
        ]);
        JenisKegiatan::create([
            'nama' => 'Hak Cipta',
            'ref_point' => '80',
            'kategori_kegiatan_id' => '9',
        ]);
        JenisKegiatan::create([
            'nama' => 'Juri/Pelatih Internasional',
            'ref_point' => '60',
            'kategori_kegiatan_id' => '9',
        ]);
        JenisKegiatan::create([
            'nama' => 'Juri/Pelatih Nasional',
            'ref_point' => '40',
            'kategori_kegiatan_id' => '9',
        ]);
        JenisKegiatan::create([
            'nama' => 'Sebagai Pemakalah pada Seminar Internasional',
            'ref_point' => '60',
            'kategori_kegiatan_id' => '9',
        ]);
        JenisKegiatan::create([
            'nama' => 'Sebagai Pemakalah pada Seminar Nasional',
            'ref_point' => '40',
            'kategori_kegiatan_id' => '9',
        ]);
        JenisKegiatan::create([
            'nama' => 'Peserta Pameran Internasional',
            'ref_point' => '60',
            'kategori_kegiatan_id' => '9',
        ]);
        JenisKegiatan::create([
            'nama' => 'Peserta Pameran Nasional',
            'ref_point' => '40',
            'kategori_kegiatan_id' => '9',
        ]);
        JenisKegiatan::create([
            'nama' => 'Karya Cipta/Seni yang Dipublikasikan/Diakui',
            'ref_point' => '40',
            'kategori_kegiatan_id' => '9',
        ]);
        JenisKegiatan::create([
            'nama' => 'Publikasi Jurnal/Prosiding Nasional (Sinta 3-4)',
            'ref_point' => '30',
            'kategori_kegiatan_id' => '9',
        ]);
        JenisKegiatan::create([
            'nama' => 'Publikasi Jurnal/Prosiding Nasional (Sinta 1-2)',
            'ref_point' => '50',
            'kategori_kegiatan_id' => '9',
        ]);
        JenisKegiatan::create([
            'nama' => 'Publikasi Jurnal/Prosiding Internasional Terindeks',
            'ref_point' => '70',
            'kategori_kegiatan_id' => '9',
        ]);
        JenisKegiatan::create([
            'nama' => 'Mengikuti Pelatihan Sertifikasi Kompetensi',
            'ref_point' => '10',
            'kategori_kegiatan_id' => '10',
        ]);
        JenisKegiatan::create([
            'nama' => 'Memperoleh Sertifikasi Kompetensi Tingkat Nasional',
            'ref_point' => '25',
            'kategori_kegiatan_id' => '10',
        ]);
        JenisKegiatan::create([
            'nama' => 'Memperoleh Sertifikasi Kompetensi Tingkat Internasional',
            'ref_point' => '40',
            'kategori_kegiatan_id' => '10',
        ]);
        JenisKegiatan::create([
            'nama' => 'Membuat Sebuah Konten yang Dipublikasikan Melalui Sosial Media PS',
            'ref_point' => '3',
            'kategori_kegiatan_id' => '11',
        ]);
        JenisKegiatan::create([
            'nama' => 'Mempromosikan PS Ke Sekolah Asal',
            'ref_point' => '5',
            'kategori_kegiatan_id' => '11',
        ]);
        JenisKegiatan::create([
            'nama' => 'Membuat Video Profil PS',
            'ref_point' => '15',
            'kategori_kegiatan_id' => '11',
        ]);
        JenisKegiatan::create([
            'nama' => 'Mengikuti Kegiatan Seminar/Webinar Tingkat Lokal',
            'ref_point' => '3',
            'kategori_kegiatan_id' => '12',
        ]);
        JenisKegiatan::create([
            'nama' => 'Mengikuti Kegiatan Seminar/Webinar Tingkat Nasional',
            'ref_point' => '5',
            'kategori_kegiatan_id' => '12',
        ]);
        JenisKegiatan::create([
            'nama' => 'Mengikuti Kegiatan Seminar/Webinar Tingkat Internasional',
            'ref_point' => '10',
            'kategori_kegiatan_id' => '12',
        ]);
        JenisKegiatan::create([
            'nama' => 'Menjadi Anggota Panitia Kegiatan Kemahasiswaan',
            'ref_point' => '2',
            'kategori_kegiatan_id' => '13',
        ]);
        JenisKegiatan::create([
            'nama' => 'Menjadi Koordinator Divisi Kegiatan Kemahasiswaan',
            'ref_point' => '5',
            'kategori_kegiatan_id' => '13',
        ]);
        JenisKegiatan::create([
            'nama' => 'Menjadi Ketua Kegiatan Kemahasiswaan',
            'ref_point' => '10',
            'kategori_kegiatan_id' => '13',
        ]);
        JenisKegiatan::create([
            'nama' => 'Menjadi Anggota pada Salah Satu Bidang Himpunan Kemahasiswaan',
            'ref_point' => '10',
            'kategori_kegiatan_id' => '13',
        ]);
        JenisKegiatan::create([
            'nama' => 'Menjadi Koordinator pada Salah Satu Bidang Himpunan Kemahasiswaan',
            'ref_point' => '30',
            'kategori_kegiatan_id' => '13',
        ]);
        JenisKegiatan::create([
            'nama' => 'Menjadi Ketua Himpunan Kemahasiswaan',
            'ref_point' => '60',
            'kategori_kegiatan_id' => '13',
        ]);
        JenisKegiatan::create([
            'nama' => 'Keikutsertaan dalam Lomba Tingkat Lokal',
            'ref_point' => '2',
            'kategori_kegiatan_id' => '14',
        ]);
        JenisKegiatan::create([
            'nama' => 'Menjadi Finalis dalam Lomba Tingat Lokal',
            'ref_point' => '3',
            'kategori_kegiatan_id' => '14',
        ]);
        JenisKegiatan::create([
            'nama' => 'Menjadi Juara Harapan dalam Lomba Tingkat Lokal',
            'ref_point' => '5',
            'kategori_kegiatan_id' => '14',
        ]);
        JenisKegiatan::create([
            'nama' => 'Menjadi Juara III dalam Lomba Tingkat Lokal',
            'ref_point' => '8',
            'kategori_kegiatan_id' => '14',
        ]);
        JenisKegiatan::create([
            'nama' => 'Menjadi Juara II dalam Lomba Tingkat Lokal',
            'ref_point' => '15',
            'kategori_kegiatan_id' => '14',
        ]);
        JenisKegiatan::create([
            'nama' => 'Menjadi Juara I dalam Lomba Tingkat Lokal',
            'ref_point' => '20',
            'kategori_kegiatan_id' => '14',
        ]);
        JenisKegiatan::create([
            'nama' => 'Keikutsertaan dalam Lomba Tingkat Provinsi',
            'ref_point' => '3',
            'kategori_kegiatan_id' => '15',
        ]);
        JenisKegiatan::create([
            'nama' => 'Menjadi Finalis dalam Lomba Tingat Provinsi',
            'ref_point' => '5',
            'kategori_kegiatan_id' => '15',
        ]);
        JenisKegiatan::create([
            'nama' => 'Menjadi Juara Harapan dalam Lomba Tingkat Provinsi',
            'ref_point' => '7',
            'kategori_kegiatan_id' => '15',
        ]);
        JenisKegiatan::create([
            'nama' => 'Menjadi Juara III dalam Lomba Tingkat Provinsi',
            'ref_point' => '10',
            'kategori_kegiatan_id' => '15',
        ]);
        JenisKegiatan::create([
            'nama' => 'Menjadi Juara II dalam Lomba Tingkat Provinsi',
            'ref_point' => '20',
            'kategori_kegiatan_id' => '15',
        ]);
        JenisKegiatan::create([
            'nama' => 'Menjadi Juara I dalam Lomba Tingkat Provinsi',
            'ref_point' => '30',
            'kategori_kegiatan_id' => '15',
        ]);
        JenisKegiatan::create([
            'nama' => 'Keikutsertaan dalam Lomba Tingkat Nasional',
            'ref_point' => '5',
            'kategori_kegiatan_id' => '16',
        ]);
        JenisKegiatan::create([
            'nama' => 'Menjadi Finalis dalam Lomba Tingat Nasional',
            'ref_point' => '10',
            'kategori_kegiatan_id' => '16',
        ]);
        JenisKegiatan::create([
            'nama' => 'Menjadi Juara Harapan dalam Lomba Tingkat Nasional',
            'ref_point' => '20',
            'kategori_kegiatan_id' => '16',
        ]);
        JenisKegiatan::create([
            'nama' => 'Menjadi Juara III dalam Lomba Tingkat Nasional',
            'ref_point' => '30',
            'kategori_kegiatan_id' => '16',
        ]);
        JenisKegiatan::create([
            'nama' => 'Menjadi Juara II dalam Lomba Tingkat Nasional',
            'ref_point' => '40',
            'kategori_kegiatan_id' => '16',
        ]);
        JenisKegiatan::create([
            'nama' => 'Menjadi Juara I dalam Lomba Tingkat Nasional',
            'ref_point' => '50',
            'kategori_kegiatan_id' => '16',
        ]);
        JenisKegiatan::create([
            'nama' => 'Keikutsertaan dalam Lomba Tingkat International',
            'ref_point' => '10',
            'kategori_kegiatan_id' => '17',
        ]);
        JenisKegiatan::create([
            'nama' => 'Menjadi Finalis dalam Lomba Tingat International',
            'ref_point' => '20',
            'kategori_kegiatan_id' => '17',
        ]);
        JenisKegiatan::create([
            'nama' => 'Menjadi Juara Harapan dalam Lomba Tingkat International',
            'ref_point' => '30',
            'kategori_kegiatan_id' => '17',
        ]);
        JenisKegiatan::create([
            'nama' => 'Menjadi Juara III dalam Lomba Tingkat International',
            'ref_point' => '60',
            'kategori_kegiatan_id' => '17',
        ]);
        JenisKegiatan::create([
            'nama' => 'Menjadi Juara II dalam Lomba Tingkat International',
            'ref_point' => '70',
            'kategori_kegiatan_id' => '17',
        ]);
        JenisKegiatan::create([
            'nama' => 'Menjadi Juara I dalam Lomba Tingkat International',
            'ref_point' => '80',
            'kategori_kegiatan_id' => '17',
        ]);
    }
}
