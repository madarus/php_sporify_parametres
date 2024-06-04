<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpotifyParametersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spotify_parameters')->insert([
            'user_id' => 1,
            'top_5_tracks' => json_encode([
                '1Rt5f1CktdvBOLX2RfBO6K',
                '0wRc4hpab040vqOgjIkYpb',
                '0E9kGKtSm8btX8qPUvIsyT',
                '6Ac8Byr6GByGr3wDH7JjYh',
                '1jVNuUELoDSPSIKctXmFTL'
            ]),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

