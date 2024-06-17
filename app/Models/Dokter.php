<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Dokter extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nama_dokter', 'spesialis', 'jenis_kelamin', 'no_hp'];

    // Define the relationship to the JadwalDokter model
    public function jadwal()
    {
        return $this->hasMany(JadwalDokter::class);
    }

    public function spesialis()
    {
        return $this->belongsTo(Spesialis::class);
    }

    
}
