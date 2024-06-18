<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratorium extends Model
{
    use HasFactory;

    protected $table = 'laboratoriums';

    protected $fillable = [
        'pasiens_id',
        'kategori',
        'tanggal_pemeriksaan',
        'antrian'
    ];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'pasiens_id');
    }


    public static function boot()
    {
        parent::boot();

        static::creating(function ($labolatorium) {
            $sameCategoryAndDateCount = Laboratorium::where('kategori', $labolatorium->kategori)
                ->where('tanggal_pemeriksaan', $labolatorium->tanggal_pemeriksaan)
                ->count();
            $labolatorium->antrian = $sameCategoryAndDateCount + 1;
        });
    }
}
