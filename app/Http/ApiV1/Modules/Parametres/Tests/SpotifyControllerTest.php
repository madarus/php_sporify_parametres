<?php

use App\Http\ApiV1\Support\Tests\ApiV1ComponentTestCase;
use Illuminate\Support\Facades\Artisan;

use function Pest\Laravel\getJson;

uses(ApiV1ComponentTestCase::class);
uses()->group('component');

//beforeEach(function () {
//    Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\SpotifyParameterSeeder']);
//});

test('GET /api/v1/parametres/spotify?user_id=1 get tracks success', function () {
    $expectedResponse = [
        [
            "seed_tracks" => "1Rt5f1CktdvBOLX2RfBO6K",
            "target_danceability" => 0.743,
            "target_energy" => 0.731,
            "target_speechiness" => 0.103,
            "target_tempo" => 123.989,
            "target_valence" => 0.337,
        ],
        [
            "seed_tracks" => "0wRc4hpab040vqOgjIkYpb",
            "target_danceability" => 0.533,
            "target_energy" => 0.546,
            "target_speechiness" => 0.0447,
            "target_tempo" => 97.083,
            "target_valence" => 0.241,
        ],
        [
            "seed_tracks" => "0E9kGKtSm8btX8qPUvIsyT",
            "target_danceability" => 0.602,
            "target_energy" => 0.762,
            "target_speechiness" => 0.0347,
            "target_tempo" => 92.02,
            "target_valence" => 0.113,
        ],
        [
            "seed_tracks" => "6Ac8Byr6GByGr3wDH7JjYh",
            "target_danceability" => 0.8,
            "target_energy" => 0.526,
            "target_speechiness" => 0.0416,
            "target_tempo" => 149.991,
            "target_valence" => 0.729,
        ],
        [
            "seed_tracks" => "1jVNuUELoDSPSIKctXmFTL",
            "target_danceability" => 0.633,
            "target_energy" => 0.808,
            "target_speechiness" => 0.134,
            "target_tempo" => 80.042,
            "target_valence" => 0.184,
        ],
    ];

    getJson('/api/v1/parametres/spotify?user_id=1')
        ->assertStatus(200)
        ->assertJson($expectedResponse);
});

test('GET /api/v1/parametres/spotify?user_id=999 user not found', function () {
    getJson('/api/v1/parametres/spotify?user_id=999')
        ->assertStatus(404)
        ->assertJson(['message' => 'User not found']);
});
