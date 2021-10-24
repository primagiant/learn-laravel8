<?php

namespace Database\Seeders;

use App\Models\Prodi;
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prodi::create([
            'display_name' => "Pendidikan Teknik Informatika",
            'description' => 'PTI',
            'fakultas_id' => 1,
        ]);
        Prodi::create([
            'display_name' => "Sistem Informasi",
            'description' => 'SI',
            'fakultas_id' => 1,
        ]);
        Prodi::create([
            'display_name' => "Ilmu Komputer",
            'description' => 'ILKOM',
            'fakultas_id' => 1,
        ]);
        Prodi::create([
            'display_name' => "Management Informatika",
            'description' => 'MI',
            'fakultas_id' => 1,
        ]);
    }
}
