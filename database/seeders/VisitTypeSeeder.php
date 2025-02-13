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
            'qr_code' => 'https://sitamu/form/3205072003',
            'name' => 'Desa Sukarasa',
            'province_code' => '32',
            'district_code' => '3205',
            'subdistrict_code' => '320507',
            'village_code' => '3205072003'
        ]);
        VisitType::create([
            'qr_code' => 'https://sitamu/form/3205072005',
            'name' => 'Desa Cikedokan',
            'province_code' => '32',
            'district_code' => '3205',
            'subdistrict_code' => '320507',
            'village_code' => '3205072005'
        ]);
        VisitType::create([
            'qr_code' => 'https://sitamu/form/3205082006',
            'name' => 'Desa Sukaasih',
            'province_code' => '32',
            'district_code' => '3205',
            'subdistrict_code' => '320508',
            'village_code' => '3205082006'
        ]);
    }
}
