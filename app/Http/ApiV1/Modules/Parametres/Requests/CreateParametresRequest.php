<?php

namespace App\Http\ApiV1\Modules\Parametres\Requests;

use App\Http\ApiV1\Support\Requests\BaseFormRequest;

class CreateParametresRequest extends BaseFormRequest
{
    public function rules(): array
    {
        return [
            'user_name' => ['required', 'string'],
            'top_5_tracks' => ['required', 'string'],
        ];
    }
}