<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Apotik;

class ApotikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $apotiks = [
            [
                'nama_apotik' => 'Apotek K-24 Jogja',
                'alamat' => 'Jl. Malioboro No.1, Yogyakarta',
            ],
            [
                'nama_apotik' => 'Apotek Kimia Farma Jogja',
                'alamat' => 'Jl. Jend. Sudirman No.15, Yogyakarta',
            ],
            [
                'nama_apotik' => 'Apotek Guardian Jogja',
                'alamat' => 'Jl. Margo Utomo No.8, Yogyakarta',
            ],
            [
                'nama_apotik' => 'Apotek Roxy Jogja',
                'alamat' => 'Jl. Solo No.7, Yogyakarta',
            ],
            [
                'nama_apotik' => 'Apotek Century Jogja',
                'alamat' => 'Jl. Gejayan No.10, Yogyakarta',
            ],
        ];

        foreach ($apotiks as $apotikData) {
            $apotik = Apotik::create(array_merge($apotikData, [
                'created_at' => now(),
                'updated_at' => now(),
            ]));

            $plainTextToken = $apotik->createToken('apitoken')->plainTextToken;

            $tokenParts = explode('|', $plainTextToken);
            $token = $tokenParts[1] ?? $plainTextToken;
            
            $apotik->update(['token' => $token]);
        }
    }
}
