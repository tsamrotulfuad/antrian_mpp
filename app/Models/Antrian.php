<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Antrian extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_layanan',
        'no_antrian',
        'nama_layanan',
    ];
}
