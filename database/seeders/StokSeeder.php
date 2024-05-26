<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stok')->insert([
            [
                'id_obat' => 1,
                'id_apotik' => 1,
                'stok' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_obat' => 1,
                'id_apotik' => 2,
                'stok' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_obat' => 2,
                'id_apotik' => 2,
                'stok' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_obat' => 2,
                'id_apotik' => 3,
                'stok' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_obat' => 3,
                'id_apotik' => 1,
                'stok' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
