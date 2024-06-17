<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RawatJalan;

class RawatJalanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RawatJalan::create([
            'spesialis_id' => 1,
            'pasiens_id' => 1,
            'jadwal_dokters_id' => 1,
        ]);

        RawatJalan::create([
            'spesialis_id' => 1,
            'pasiens_id' => 2,
            'jadwal_dokters_id' => 1,
        ]);

        RawatJalan::create([
            'spesialis_id' => 1,
            'pasiens_id' => 3,
            'jadwal_dokters_id' => 1,
        ]);

        RawatJalan::create([
            'spesialis_id' => 1,
            'pasiens_id' => 4,
            'jadwal_dokters_id' => 2,
        ]);

        RawatJalan::create([
            'spesialis_id' => 1,
            'pasiens_id' => 10,
            'jadwal_dokters_id' => 1,
            'tanggal_pemeriksaan' => '2024-05-10',
        ]);

        RawatJalan::create([
            'spesialis_id' => 2,
            'pasiens_id' => 10,
            'jadwal_dokters_id' => 2,
            'tanggal_pemeriksaan' => '2024-05-11',
        ]);

        RawatJalan::create([
            'spesialis_id' => 1,
            'pasiens_id' => 1,
            'jadwal_dokters_id' => 1,
            'tanggal_pemeriksaan' => '2024-05-10',
        ]);
    }
}
