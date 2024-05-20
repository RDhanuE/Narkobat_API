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
                'nama_obat' => 'Paracetamol',
                'jenis_obat' => 'Tablet',
                'penyakit' => 'Demam',
                'harga' => 5000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_obat' => 'Amoxicillin',
                'jenis_obat' => 'Capsule',
                'penyakit' => 'Infeksi',
                'harga' => 15000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_obat' => 'Cetirizine',
                'jenis_obat' => 'Tablet',
                'penyakit' => 'Alergi',
                'harga' => 8000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_obat' => 'Omeprazole',
                'jenis_obat' => 'Capsule',
                'penyakit' => 'Asam Lambung',
                'harga' => 20000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_obat' => 'Ibuprofen',
                'jenis_obat' => 'Tablet',
                'penyakit' => 'Nyeri',
                'harga' => 10000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
