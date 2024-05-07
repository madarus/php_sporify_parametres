<?php

namespace App\Http\ApiV1\Modules\Parametres\Controllers;

use App\Domain\Parametres\Actions\CreateParametresAction;
use App\Http\ApiV1\Modules\Parametres\Queries\ParametresQuery;
use App\Http\ApiV1\Modules\Parametres\Requests\CreateParametresRequest;
use App\Http\ApiV1\Modules\Parametres\Resources\ParametresResource;

class ParametresController
{
    public function create(CreateParametresRequest $request, CreateParametresAction $action): ParametresResource
    {
        return new ParametresResource($action->execute($request->validated()));
    }

    public function get(int $id, ParametresQuery $query): ParametresResource
    {
        return new ParametresResource($query->findOrFail($id));
    }
}
