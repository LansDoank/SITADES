<?php

namespace Database\Seeders;

use App\Models\District;
use App\Models\Province;
use App\Models\Role;
use App\Models\SubDistrict;
use App\Models\User;
use App\Models\Village;
use App\Models\Visitor;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([RoleSeeder::class,VisitTypeSeeder::class,VisitorSeeder::class,ProvinceSeeder::class,DistrictSeeder::class,SubDistrictSeeder::class,VillageSeeder::class,UserSeeder::class,]);
        User::factory(10)->recycle([
            Role::all(),
            Province::all(),
            District::all(),
            SubDistrict::all(),
            Village::all()
        ])->create();

        Visitor::factory(100)->create();
        
    }
}
