<?php

namespace Database\Seeders;
use App\Models\JadwalDokter;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JadwalDokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JadwalDokter::create([
            'dokter_id' => 1,
            'hari' => 'Senin',
            'jam_mulai' => '08:00:00',
            'jam_selesai' => '12:00:00',
        ]);

        JadwalDokter::create([
            'dokter_id' => 1,
            'hari' => 'Selasa',
            'jam_mulai' => '09:00:00',
            'jam_selesai' => '13:00:00',
        ]);

        JadwalDokter::create([
            'dokter_id' => 1,
            'hari' => 'Rabu',
            'jam_mulai' => '10:00:00',
            'jam_selesai' => '14:00:00',
        ]);
    }
}
