<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obat extends Model
{
    use HasFactory;
    protected $table = 'obat';
    protected $fillable = ['nama obat', 'jenis obat', 'penyakit', 'harga'];
}
