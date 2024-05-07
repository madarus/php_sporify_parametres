<?php

namespace App\Domain\Parametres\Actions;

use App\Domain\Parametres\Models\Parametres;

class CreateParametresAction
{
    public function execute(array $fields): Parametres
    {
        $parametres = new Parametres();
        $parametres->fill($fields);
        $parametres->save();

        return $parametres;
    }
}