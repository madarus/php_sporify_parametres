<?php

namespace App\Domain\Parametres\Actions;

class SpotifyTrackMetrics
{
    public static function getTrackMetrics($trackId): array
    {
        $audioFeatures = SpotifyAudioFeaturesAction::getAudioFeatures($trackId);

        $metrics = [
            [
                "seed_tracks" => $audioFeatures['id'],
                "target_danceability" => $audioFeatures['danceability'],
                "target_energy" => $audioFeatures['energy'],
                "target_speechiness" => $audioFeatures['speechiness'],
                "target_tempo" => $audioFeatures['tempo'],
                "target_valence" => $audioFeatures['valence'],
            ],
        ];

        return $metrics;
    }
}
