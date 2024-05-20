<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApotikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('apotik')->insert([
            [
                'nama_apotik' => 'Apotek K-24 Jogja',
                'alamat' => 'Jl. Malioboro No.1, Yogyakarta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_apotik' => 'Apotek Kimia Farma Jogja',
                'alamat' => 'Jl. Jend. Sudirman No.15, Yogyakarta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_apotik' => 'Apotek Guardian Jogja',
                'alamat' => 'Jl. Margo Utomo No.8, Yogyakarta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_apotik' => 'Apotek Roxy Jogja',
                'alamat' => 'Jl. Solo No.7, Yogyakarta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_apotik' => 'Apotek Century Jogja',
                'alamat' => 'Jl. Gejayan No.10, Yogyakarta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
