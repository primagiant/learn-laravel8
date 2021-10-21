<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleUpdateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::find(2);
        $role->display_name = 'Pembimbing Akademik';
        $role->description = 'Pembimbing Akademik';
        $role->save();
    }
}
