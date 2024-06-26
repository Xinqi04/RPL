<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalDokter extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_dokter', 'hari', 'jam_mulai', 'jam_selesai'];

    // Define the relationship to the Dokter model
    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }

    public function rawatJalans()
    {
        return $this->hasMany(RawatJalan::class, 'jadwal_dokters_id');
    }

}
