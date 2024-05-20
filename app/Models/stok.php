<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stok extends Model
{
    use HasFactory;
    protected $table = 'stok';
    protected $fillable = ['id_obat', 'id_apotik', 'stok'];

    public function obat(){
        return $this->belongsTo(obat::class, 'id_obat');
    }

    public function apotik(){
        return $this->belongsTo(apotik::class, 'id_apotik');
    }
}
