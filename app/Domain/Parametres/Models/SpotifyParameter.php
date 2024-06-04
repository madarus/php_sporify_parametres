<?php

namespace App\Domain\Parametres\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpotifyParameter extends Model
{
    use HasFactory;

    protected $table = 'spotify_parameters';

    protected $casts = [
        'top_5_tracks' => 'array',
    ];
}

