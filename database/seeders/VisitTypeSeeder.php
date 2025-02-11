<?php

namespace Database\Seeders;

use App\Models\VisitType;
use Illuminate\Database\Seeder;

class VisitTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // VisitType::create([
        //     'name' => 'Koordinasi'
        // ]);
        // VisitType::create([
        //     'name' => 'Cari Informasi'
        // ]);
        // VisitType::create([
        //     'name' => 'Pembinaan'
        // ]);
        // VisitType::create([
        //     'name' => 'Studi Banding'
        // ]);
        // VisitType::create([
        //     'name' => 'Lainnya'
        // ]);
        VisitType::create([
            'qr_code' => '32.01.01.2001',
            'name' => 'Desa Cikedokan',
            'province_code' => '32',
            'district_code' => '32.01',
            'subdistrict_code' => '32.01.01',
            'village_code' => '32.01.01.2001'
        ]);
        VisitType::create([
            'qr_code' => '32.01.01.2002',
            'name' => 'Desa Sukarasa',
            'province_code' => '32',
            'district_code' => '32.01',
            'subdistrict_code' => '32.01.01',
            'village_code' => '32.01.01.2002'
        ]);
    }
}
