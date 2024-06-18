<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RekamMedis;

class RekamMedisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // RekamMedis::create([
        //     'pasiens_id' => 1,
        //     'rawat_jalans_id' => 1,
        //     'diagnosa' => 'Jantung Koroner'
        // ]);

        RekamMedis::create([
            'pasien_id' => 1,
            'rawat_jalans_id' => 3,
            'diagnosa' => 'Patah Tulang'
        ]);
    }
}
