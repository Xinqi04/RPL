<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Pasien extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama',
        'tanggal_lahir',
        'no_hp',
        'image',
        'user_id'
    ];

    public function rekamMedis()
    {
        return $this->hasMany(RekamMedis::class);
    }
}
