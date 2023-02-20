<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opd extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_opd',
        'slug', 
        'nama_opd',
    ];

    public function layanans()
    {
        return $this->hasMany(Layanan::class);
    }
}
