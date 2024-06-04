<?php

use App\Http\ApiV1\Modules\Parametres\Controllers\SpotifyController;
//use App\Http\ApiV1\Modules\Parametres\Controllers\SendController;
use App\Http\Web\Controllers\HealthCheck;
use App\Http\Web\Controllers\OasController;
use Illuminate\Support\Facades\Route;

Route::get('top5parametres', [SpotifyController::class, 'getTop5Tracks']);

//Route::get('send_parametres', [SendController::class, 'sendTrackData']);

Route::get('health', HealthCheck::class);

Route::get('/', [OasController::class, 'list']);
