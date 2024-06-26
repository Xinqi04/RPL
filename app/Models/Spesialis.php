<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spesialis extends Model
{
    use HasFactory;

    protected $fillable = ['nama_spesialis'];

    public function dokters()
    {
        return $this->hasMany(Dokter::class);
    }
}
