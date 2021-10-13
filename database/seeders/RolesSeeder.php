<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin',
            'display_name' => 'Admin',
            'description' => 'Admin',
        ]);
        Role::create([
            'name' => 'pa',
            'display_name' => 'Pembimbing Akademik',
            'description' => 'Pembimbing Akademik',
        ]);
        Role::create([
            'name' => 'mahasiswa',
            'display_name' => 'Mahasiswa',
            'description' => 'Mahasiswa',
        ],);
    }
}
