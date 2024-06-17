<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RawatJalan extends Model
{
    use HasFactory;

    protected $table = 'rawat_jalans';

    protected $fillable = [
        'spesialis_id',
        'pasiens_id',
        'jadwal_dokters_id',
        'tanggal_pemeriksaan',
        'antrian', // Tambahkan antrian ke fillable agar bisa diisi secara otomatis
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // Dapatkan nomor antrian tertinggi untuk spesialis dan jadwal dokter yang sama
            $maxAntrian = RawatJalan::where('spesialis_id', $model->spesialis_id)
                                    ->where('jadwal_dokters_id', $model->jadwal_dokters_id)
                                    ->max('antrian');

            // Set antrian dengan increment dari antrian tertinggi
            $model->antrian = $maxAntrian + 1;
        });
    }

    public function rekamMedis()
    {
        return $this->hasOne(RekamMedis::class, 'rawat_jalan_id');
    }

    public function jadwalDokter()
    {
        return $this->belongsTo(JadwalDokter::class);
    }
}
