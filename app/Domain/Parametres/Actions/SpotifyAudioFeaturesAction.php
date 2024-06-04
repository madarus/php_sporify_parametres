<?php

namespace App\Domain\Parametres\Actions;

use GuzzleHttp\Client;

class SpotifyAudioFeaturesAction
{
    public static function getAudioFeatures($trackId)
    {
        $accessToken = AuthorizationTokenRequestAction::execute();

        $client = new Client();
        $url = 'https://api.spotify.com/v1/audio-features/' . $trackId;

        $response = $client->get($url, [
            'headers' => [
                'Authorization' => 'Bearer ' . $accessToken
            ]
        ]);

        if ($response->getStatusCode() !== 200) {
            die('Ошибка при отправке запроса.');
        }

        return json_decode($response->getBody(), true);
    }
}
