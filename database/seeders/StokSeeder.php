<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                'stok' => 10
            ],
            [
                'id_obat' => 1, 
                'id_apotik' => 2,
                'stok' => 15
            ],
            [
                'id_obat' => 2, 
                'id_apotik' => 2,
                'stok' => 20
            ],
            [
                'id_obat' => 2, 
                'id_apotik' => 3,
                'stok' => 25
            ],
            [
                'id_obat' => 3, 
                'id_apotik' => 1,
                'stok' => 30
            ],
        ]);
    }
}
