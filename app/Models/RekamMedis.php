<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    use HasFactory;

    protected $table = 'rekam_medis';

    protected $fillable = [
        'pasiens_id',
        'rawat_jalans_id',
        'diagnosa',
    ];

    public function rawatJalan()
    {
        return $this->belongsTo(RawatJalan::class,'rawat_jalans_id');
    }

    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'pasiens_id');
    }

}
