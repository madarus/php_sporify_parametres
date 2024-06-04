<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Domain\Parametres\Models\SpotifyParameter;

class SpotifyParametersTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test if spotify_parameters table is created and can store data.
     *
     * @return void
     */
    public function test_spotify_parameters_table()
    {
        // Create a new record
        $spotifyParameter = SpotifyParameter::create([
            'user_id' => 1,
            'top_5_tracks' => ['track1', 'track2', 'track3', 'track4', 'track5'],
        ]);

        // Check if the record is stored in the database
        $this->assertDatabaseHas('spotify_parameters', [
            'user_id' => 1,
            'top_5_tracks' => json_encode(['track1', 'track2', 'track3', 'track4', 'track5']),
        ]);

        // Retrieve the record and check the data
        $retrievedSpotifyParameter = SpotifyParameter::find(1);
        $this->assertEquals(1, $retrievedSpotifyParameter->user_id);
        $this->assertEquals(['track1', 'track2', 'track3', 'track4', 'track5'], $retrievedSpotifyParameter->top_5_tracks);
    }
}

