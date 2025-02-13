<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([RoleSeeder::class,VisitTypeSeeder::class,UserSeeder::class,VisitorSeeder::class,ProvinceSeeder::class,DistrictSeeder::class,SubDistrictSeeder::class,VillageSeeder::class]);
        User::factory(10)->recycle([
            Role::all(),
        ])->create();

        
    }
}
