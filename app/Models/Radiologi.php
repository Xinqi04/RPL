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

    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'pasiens_id');
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($radiologi) {
            $sameCategoryAndDateCount = Radiologi::where('kategori', $radiologi->kategori)
                ->where('tanggal_pemeriksaan', $radiologi->tanggal_pemeriksaan)
                ->count();
            $radiologi->antrian = $sameCategoryAndDateCount + 1;
        });
    }
}
