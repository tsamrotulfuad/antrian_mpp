<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_petugas',
        'layanan_id',
    ];

    public function layanan()
    {
        return $this->belongsTo(Layanan::class);
    }

    public function petugas()
    {
        return $this->hasMany(Layanan::class);
    }
}
