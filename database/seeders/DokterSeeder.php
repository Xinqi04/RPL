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
        //     'spesialis_id' => '1',
        //     'jenis_kelamin' => 'L',
        //     'no_hp' => '081234567890',
        // ]);

        // Dokter::create([
        //     'nama_dokter' => 'Dr. Pratiwi',
        //     'spesialis_id' => '1',
        //     'jenis_kelamin' => 'P',
        //     'no_hp' => '089876543210',
        // ]);

        // Dokter::create([
        //     'nama_dokter' => 'Dr. Prayoga',
        //     'spesialis_id' => '1',
        //     'jenis_kelamin' => 'L',
        //     'no_hp' => '087584923546',
        // ]);

        Dokter::create([
            'nama_dokter' => 'Dr. Budi',
            'spesialis_id' => '2',
            'jenis_kelamin' => 'L',
            'no_hp' => '081234567891',
        ]);

        Dokter::create([
            'nama_dokter' => 'Dr. Bintang',
            'spesialis_id' => '2',
            'jenis_kelamin' => 'L',
            'no_hp' => '081287462937',
        ]);

        Dokter::create([
            'nama_dokter' => 'Dr. Eka',
            'spesialis_id' => '2',
            'jenis_kelamin' => 'P',
            'no_hp' => '089364730938',
        ]);

        Dokter::create([
            'nama_dokter' => 'Dr. Rakabooming',
            'spesialis_id' => '3',
            'jenis_kelamin' => 'L',
            'no_hp' => '084276584038',
        ]);

        Dokter::create([
            'nama_dokter' => 'Dr. Sapa',
            'spesialis_id' => '3',
            'jenis_kelamin' => 'P',
            'no_hp' => '0842765840434',
        ]);

        Dokter::create([
            'nama_dokter' => 'Dr. Raden',
            'spesialis_id' => '3',
            'jenis_kelamin' => 'L',
            'no_hp' => '084276584076',
        ]);

        Dokter::create([
            'nama_dokter' => 'Dr. Tatang',
            'spesialis_id' => '4',
            'jenis_kelamin' => 'L',
            'no_hp' => '084274584038',
        ]);

        Dokter::create([
            'nama_dokter' => 'Dr. Yudi',
            'spesialis_id' => '4',
            'jenis_kelamin' => 'L',
            'no_hp' => '089674584038',
        ]);

        Dokter::create([
            'nama_dokter' => 'Dr. Yudhistira',
            'spesialis_id' => '4',
            'jenis_kelamin' => 'L',
            'no_hp' => '084276584038',
        ]);

        Dokter::create([
            'nama_dokter' => 'Dr. Eva',
            'spesialis_id' => '5',
            'jenis_kelamin' => 'P',
            'no_hp' => '084274589838',
        ]);

        Dokter::create([
            'nama_dokter' => 'Dr. Yuli',
            'spesialis_id' => '5',
            'jenis_kelamin' => 'P',
            'no_hp' => '084467389838',
        ]);

        Dokter::create([
            'nama_dokter' => 'Dr. Tito',
            'spesialis_id' => '5',
            'jenis_kelamin' => 'L',
            'no_hp' => '084976389838',
        ]);

        Dokter::create([
            'nama_dokter' => 'Dr. Raka',
            'spesialis_id' => '6',
            'jenis_kelamin' => 'L',
            'no_hp' => '081234569876',
        ]);

        Dokter::create([
            'nama_dokter' => 'Dr. Putri',
            'spesialis_id' => '6',
            'jenis_kelamin' => 'P',
            'no_hp' => '081234569763',
        ]);

        Dokter::create([
            'nama_dokter' => 'Dr. Wahyu',
            'spesialis_id' => '6',
            'jenis_kelamin' => 'L',
            'no_hp' => '081233504876',
        ]);
    }
}
