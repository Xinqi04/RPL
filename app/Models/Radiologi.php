<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Radiologi extends Model
{
    use HasFactory;

    protected $table = 'radiologis';

    protected $fillable = [
        'pasiens_id',
        'kategori',
        'tanggal_pemeriksaan',
    ];
}
