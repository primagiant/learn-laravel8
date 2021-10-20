<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Dummy Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('!SsiHq7McUPa3hT'),
        ]);
        $user->attachRole("admin");
    }
}
