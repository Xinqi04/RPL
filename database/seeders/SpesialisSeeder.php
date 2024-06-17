<?php

namespace Database\Seeders;

use App\Models\Spesialis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpesialisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Spesialis::create([
            'nama_spesialis' => 'Cardiologist',
        ]);

        Spesialis::create([
            'nama_spesialis' => 'Dermatologist',
        ]);

        Spesialis::create([
            'nama_spesialis' => 'Neurologist',
        ]);

        Spesialis::create([
            'nama_spesialis' => 'Orthopedic',
        ]);

        Spesialis::create([
            'nama_spesialis' => 'Pediatrician',
        ]);

        Spesialis::create([
            'nama_spesialis' => 'Psychiatrist',
        ]);
    }
}
