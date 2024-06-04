<?php

namespace App\Http\ApiV1\Modules\Parametres\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Domain\Parametres\Actions\SpotifyTrackMetrics;

class SpotifyController extends Controller
{
    public function getTop5Tracks(Request $request): \Illuminate\Http\JsonResponse
    {
        // Получение user_id из запроса
        $userId = $request->input('user_id');

        // Использование Query Builder для извлечения данных
        $spotifyParameter = DB::table('spotify_parameters')
            ->where('user_id', $userId)
            ->first();

        if ($spotifyParameter) {
            $top5Tracks = json_decode($spotifyParameter->top_5_tracks, true);

            // Получение метрик для каждого трека
            $trackMetrics = [];
            foreach ($top5Tracks as $trackId) {
                $metrics = SpotifyTrackMetrics::getTrackMetrics($trackId);
                $trackMetrics = array_merge($trackMetrics, $metrics);
            }

            return response()->json($trackMetrics);
        } else {
            // Обработка случая, когда запись не найдена
            return response()->json(['message' => 'User not found'], 404);
        }
    }
}


