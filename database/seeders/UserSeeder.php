<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'photo' => '/img/facebook.png',
            'username' => 'admin',
            'password' => bcrypt('admin123'),
            'province_code' => 1,
            'district_code' => 1,
            'sub_district_code' => 1,
            'village_code' => 1,
            'role_id' => 1,
        ]);

        // User::factory(10)->create();
    }
}
