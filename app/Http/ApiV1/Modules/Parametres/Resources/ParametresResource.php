<?php

namespace App\Http\ApiV1\Modules\Parametres\Resources;

use App\Domain\Parametres\Models\Parametres;
use App\Http\ApiV1\Support\Resources\BaseJsonResource;

/**
 * @mixin Parametres
 */
class ParametresResource extends BaseJsonResource
{
    public function toArray($request): array
    {
        return [
            'user_id' => $this->user_id,
            'top_5_tracks' => $this->top_5_tracks,
            'user_name' => $this->user_name,
            'token' => $this->token,
            'updated_at' => $this->updated_at,
            'created_at' => $this->created_at,
        ];
    }
}