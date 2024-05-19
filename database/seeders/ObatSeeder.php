<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('obat')->insert([
            [
                'nama obat' => 'Paracetamol',
                'jenis obat' => 'Tablet',
                'penyakit' => 'Demam',
                'harga' => 5000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama obat' => 'Amoxicillin',
                'jenis obat' => 'Capsule',
                'penyakit' => 'Infeksi',
                'harga' => 15000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama obat' => 'Cetirizine',
                'jenis obat' => 'Tablet',
                'penyakit' => 'Alergi',
                'harga' => 8000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama obat' => 'Omeprazole',
                'jenis obat' => 'Capsule',
                'penyakit' => 'Asam Lambung',
                'harga' => 20000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama obat' => 'Ibuprofen',
                'jenis obat' => 'Tablet',
                'penyakit' => 'Nyeri',
                'harga' => 10000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
