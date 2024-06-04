<?php

namespace App\Domain\Parametres\Actions;

use GuzzleHttp\Client;

class AuthorizationTokenRequestAction
{
    public static function execute()
    {
        $token_url = 'https://accounts.spotify.com/api/token';
        $client_id = config('app.client_id');
        $client_secret = config('app.client_secret');

        $client = new Client();

        $response = $client->post($token_url, [
            'form_params' => [
                'grant_type' => 'client_credentials',
                'client_id' => $client_id,
                'client_secret' => $client_secret
            ]
        ]);

        if ($response->getStatusCode() !== 200) {
            die('Ошибка при отправке запроса.');
        }

        $result = json_decode($response->getBody(), true);

        return $result["access_token"];
    }
}