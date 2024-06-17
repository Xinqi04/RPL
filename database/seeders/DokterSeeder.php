<?php

namespace Database\Seeders;
use App\Models\Dokter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\QueryException;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Dokter::create([
        //     'nama_dokter' => 'Dr. Andi',
        //     'spesialis' => '1',
        //     'jenis_kelamin' => 'L',
        //     'no_hp' => '081234567890',
        // ]);

        // Dokter::create([
        //     'nama_dokter' => 'Dr. Budi',
        //     'id_spesialis' => '2',
        //     'jenis_kelamin' => 'L',
        //     'no_hp' => '081234567891',
        // ]);

        Dokter::create([
            'nama_dokter' => 'Dr. Raka',
            'spesialis_id' => '6',
            'jenis_kelamin' => 'L',
            'no_hp' => '081234569876',
        ]);
    }
}
