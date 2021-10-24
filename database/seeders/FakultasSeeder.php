<?php

namespace Database\Seeders;

use App\Models\Fakultas;
use Illuminate\Database\Seeder;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fakultas::create([
            "display_name" => 'Fakultas Teknik dan Kejuruan',
            "description" => 'FTK',
        ]);
    }
}
