<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Sanctum\HasApiTokens;

class apotik extends Model
{
    use HasFactory, HasApiTokens;
    protected $table = 'apotik';
    protected $fillable = ['nama_apotik', 'alamat'];

    public function user() {
        return $this->hasMany(User::class, 'id_apotik', 'id');
    }
}
