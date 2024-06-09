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
        //     'spesialis' => 'Neurologist',
        //     'jenis_kelamin' => 'L',
        //     'no_hp' => '081234567890',
        // ]);

        Dokter::create([
            'nama_dokter' => 'Dr. Budi',
            'spesialis' => 'Cardiologist',
            'jenis_kelamin' => 'L',
            'no_hp' => '081234567891',
        ]);

        Dokter::create([
            'nama_dokter' => 'Dr. Citra',
            'spesialis' => 'Dermatologist',
            'jenis_kelamin' => 'P',
            'no_hp' => '081234567892',
        ]);
    }
}
