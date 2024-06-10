<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StockResource extends JsonResource
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
            'nama apotik' => new ApotikResource($this->apotik),
            'nama obat' => new ObatResource($this->obat),
            'stok' => $this -> stok,
        ];
    }
}