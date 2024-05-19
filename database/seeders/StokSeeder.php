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
                'id obat' => 1, 
                'id apotik' => 1,
                'stok' => 10
            ],
            [
                'id obat' => 1, 
                'id apotik' => 2,
                'stok' => 15
            ],
            [
                'id obat' => 2, 
                'id apotik' => 2,
                'stok' => 20
            ],
            [
                'id obat' => 2, 
                'id apotik' => 3,
                'stok' => 25
            ],
            [
                'id obat' => 3, 
                'id apotik' => 1,
                'stok' => 30
            ],
        ]);
    }
}
