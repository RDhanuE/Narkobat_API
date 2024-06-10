<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ObatResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this -> id,
            'nama obat' => $this -> nama_obat,
            'jenis obat' => $this -> jenis_obat,
            'penyakit' => $this -> penyakit,
            'harga' => $this -> harga
        ];
    }
}
