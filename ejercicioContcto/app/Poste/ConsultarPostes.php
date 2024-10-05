<?php

namespace App\Poste;

use App\Models\Poste;

class ConsultarPostes
{
    public function __construct()
    {
        //
    }

    public function consultar()
    {
        return Poste::all();
    }
}
