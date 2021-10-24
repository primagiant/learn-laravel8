<?php

namespace Database\Seeders;

use App\Models\KategoriKegiatan;
use Illuminate\Database\Seeder;

class KategoriKegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KategoriKegiatan::create([
            'nama' => 'Pertukaran Pelajar'
        ]);
        KategoriKegiatan::create([
            'nama' => 'Magang Industri MBKM'
        ]);
        KategoriKegiatan::create([
            'nama' => 'Kegiatan Mengajar MBKM'
        ]);
        KategoriKegiatan::create([
            'nama' => 'Penelitian Bersama Dosen atau Kelompok Riset'
        ]);
        KategoriKegiatan::create([
            'nama' => 'Pengabdian Kepada Masyarakat Bersama Dosen'
        ]);
        KategoriKegiatan::create([
            'nama' => 'Proyek/Relawan Kemanusiaan/Bela Negara Bersama Organisasi Luar Kampus'
        ]);
        KategoriKegiatan::create([
            'nama' => 'Kegiatan Wirausaha (PMW) / Program Kreativitas Mahasiswa (PKM)'
        ]);
        KategoriKegiatan::create([
            'nama' => 'Proyek Independen Mahasiswa'
        ]);
        KategoriKegiatan::create([
            'nama' => 'Kegiatan yang Menghasilkan Rekognisi'
        ]);
        KategoriKegiatan::create([
            'nama' => 'Program Sertifikasi Kompetensi'
        ]);
        KategoriKegiatan::create([
            'nama' => 'Kegiatan Informasi Program Studi ke Masyarakat'
        ]);
        KategoriKegiatan::create([
            'nama' => 'Kegiatan Seminar'
        ]);
        KategoriKegiatan::create([
            'nama' => 'Kegiatan Kemahasiswaan'
        ]);
        KategoriKegiatan::create([
            'nama' => 'Keikutsertaan dalam Lomba Tingkat Lokal'
        ]);
        KategoriKegiatan::create([
            'nama' => 'Keikutsertaan dalam Lomba Tingkat Provinsi'
        ]);
        KategoriKegiatan::create([
            'nama' => 'Keikutsertaan dalam Lomba Tingkat Nasional'
        ]);
        KategoriKegiatan::create([
            'nama' => 'Keikutsertaan dalam Lomba Tingkat Internasional'
        ]);
    }
}
