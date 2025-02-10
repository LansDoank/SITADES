<?php

namespace Database\Seeders;

use App\Models\VisitType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VisitTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VisitType::create([
            'name' => 'Koordinasi'
        ]);
        VisitType::create([
            'name' => 'Cari Informasi'
        ]);
        VisitType::create([
            'name' => 'Pembinaan'
        ]);
        VisitType::create([
            'name' => 'Studi Banding'
        ]);
        VisitType::create([
            'name' => 'Lainnya'
        ]);
    }
}
