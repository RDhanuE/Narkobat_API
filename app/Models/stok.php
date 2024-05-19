<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stok extends Model
{
    use HasFactory;
    protected $table = 'stok';
    protected $fillable = ['id obat', 'id apotik', 'stok'];

    public function obat(){
        return $this->hasMany(obat::class);
    }

    public function apotik(){
        return $this->hasMany(apotik::class);
    }
}
