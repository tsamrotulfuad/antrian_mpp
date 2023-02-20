<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_layanan',
        'nama_layanan',
        'opd_id',
    ];

    public function opd()
    {
        return $this->belongsTo(Opd::class, 'opd_id', 'id');
    }

    public function petugas()
    {
        return $this->belongsTo(Petugas::class, 'layanan_id', 'id');
    }

}
