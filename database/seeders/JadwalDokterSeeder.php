<?php

namespace Database\Seeders;
use App\Models\JadwalDokter;

use App\Models\RawatJalan;
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
            'dokter_id' => 4,
            'hari' => 'Senin',
            'jam_mulai' => '09:00:00',
            'jam_selesai' => '13:00:00',
        ]);

        JadwalDokter::create([
            'dokter_id' => 7,
            'hari' => 'Senin',
            'jam_mulai' => '10:00:00',
            'jam_selesai' => '14:00:00',
        ]);

        JadwalDokter::create([
            'dokter_id' => 10,
            'hari' => 'Senin',
            'jam_mulai' => '11:00:00',
            'jam_selesai' => '15:00:00',
        ]);

        JadwalDokter::create([
            'dokter_id' => 13,
            'hari' => 'Senin',
            'jam_mulai' => '12:00:00',
            'jam_selesai' => '16:00:00',
        ]);

        JadwalDokter::create([
            'dokter_id' => 16,
            'hari' => 'Senin',
            'jam_mulai' => '13:00:00',
            'jam_selesai' => '17:00:00',
        ]);

        JadwalDokter::create([
            'dokter_id' => 1,
            'hari' => 'Selasa',
            'jam_mulai' => '08:00:00',
            'jam_selesai' => '12:00:00',
        ]);

        JadwalDokter::create([
            'dokter_id' => 4,
            'hari' => 'Selasa',
            'jam_mulai' => '09:00:00',
            'jam_selesai' => '13:00:00',
        ]);

        JadwalDokter::create([
            'dokter_id' => 7,
            'hari' => 'Selasa',
            'jam_mulai' => '10:00:00',
            'jam_selesai' => '14:00:00',
        ]);

        JadwalDokter::create([
            'dokter_id' => 10,
            'hari' => 'Selasa',
            'jam_mulai' => '11:00:00',
            'jam_selesai' => '15:00:00',
        ]);

        JadwalDokter::create([
            'dokter_id' => 13,
            'hari' => 'Selasa',
            'jam_mulai' => '12:00:00',
            'jam_selesai' => '16:00:00',
        ]);
        JadwalDokter::create([
            'dokter_id' => 16,
            'hari' => 'Selasa',
            'jam_mulai' => '13:00:00',
            'jam_selesai' => '17:00:00',
        ]);

        JadwalDokter::create([
            'dokter_id' => 2,
            'hari' => 'Rabu',
            'jam_mulai' => '08:00:00',
            'jam_selesai' => '12:00:00',
        ]);

        JadwalDokter::create([
            'dokter_id' => 5,
            'hari' => 'Rabu',
            'jam_mulai' => '09:00:00',
            'jam_selesai' => '13:00:00',
        ]);

        JadwalDokter::create([
            'dokter_id' => 8,
            'hari' => 'Rabu',
            'jam_mulai' => '10:00:00',
            'jam_selesai' => '14:00:00',
        ]);

        JadwalDokter::create([
            'dokter_id' => 11,
            'hari' => 'Rabu',
            'jam_mulai' => '11:00:00',
            'jam_selesai' => '15:00:00',
        ]);

        JadwalDokter::create([
            'dokter_id' => 14,
            'hari' => 'Rabu',
            'jam_mulai' => '12:00:00',
            'jam_selesai' => '16:00:00',
        ]);

        JadwalDokter::create([
            'dokter_id' => 17,
            'hari' => 'Rabu',
            'jam_mulai' => '13:00:00',
            'jam_selesai' => '17:00:00',
        ]);

        JadwalDokter::create([
            'dokter_id' => 2,
            'hari' => 'Kamis',
            'jam_mulai' => '08:00:00',
            'jam_selesai' => '12:00:00',
        ]);

        JadwalDokter::create([
            'dokter_id' => 5,
            'hari' => 'Kamis',
            'jam_mulai' => '09:00:00',
            'jam_selesai' => '13:00:00',
        ]);

        JadwalDokter::create([
            'dokter_id' => 8,
            'hari' => 'Kamis',
            'jam_mulai' => '10:00:00',
            'jam_selesai' => '14:00:00',
        ]);

        JadwalDokter::create([
            'dokter_id' => 11,
            'hari' => 'Kamis',
            'jam_mulai' => '11:00:00',
            'jam_selesai' => '15:00:00',
        ]);

        JadwalDokter::create([
            'dokter_id' => 14,
            'hari' => 'Kamis',
            'jam_mulai' => '12:00:00',
            'jam_selesai' => '16:00:00',
        ]);

        JadwalDokter::create([
            'dokter_id' => 17,
            'hari' => 'Kamis',
            'jam_mulai' => '13:00:00',
            'jam_selesai' => '17:00:00',
        ]);

        JadwalDokter::create([
            'dokter_id' => 3,
            'hari' => 'Jumat',
            'jam_mulai' => '08:00:00',
            'jam_selesai' => '12:00:00',
        ]);

        JadwalDokter::create([
            'dokter_id' => 6,
            'hari' => 'Jumat',
            'jam_mulai' => '09:00:00',
            'jam_selesai' => '13:00:00',
        ]);

        JadwalDokter::create([
            'dokter_id' => 9,
            'hari' => 'Jumat',
            'jam_mulai' => '10:00:00',
            'jam_selesai' => '14:00:00',
        ]);

        JadwalDokter::create([
            'dokter_id' => 12,
            'hari' => 'Jumat',
            'jam_mulai' => '11:00:00',
            'jam_selesai' => '15:00:00',
        ]);

        JadwalDokter::create([
            'dokter_id' =>15,
            'hari' => 'Jumat',
            'jam_mulai' => '12:00:00',
            'jam_selesai' => '16:00:00',
        ]);

        JadwalDokter::create([
            'dokter_id' => 18,
            'hari' => 'Jumat',
            'jam_mulai' => '13:00:00',
            'jam_selesai' => '17:00:00',
        ]);
    }
}
