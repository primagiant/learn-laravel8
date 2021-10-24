<?php

namespace Database\Seeders;

use App\Models\Angkatan;
use Illuminate\Database\Seeder;

class AngkatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Angkatan::create([
            'tahun' => '2017',
        ]);
        Angkatan::create([
            'tahun' => '2018',
        ]);
        Angkatan::create([
            'tahun' => '2019',
        ]);
        Angkatan::create([
            'tahun' => '2020',
        ]);
        Angkatan::create([
            'tahun' => '2021',
        ]);
    }
}
