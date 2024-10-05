<?php

namespace App\Poste;

use App\Models\Poste;

class RegistrarPoste
{
    public function __construct()
    {
        //
    }

    public function registrarPoste(
        $numero_poste,
        $fecha,
        $direccion,
        $departamento,
        $municipio,
        $referencia,
        $latitud,
        $longitud,
    ){
        $poste = new Poste();
        $poste->fill([
            'numero_poste' => $numero_poste,
            'fecha_registro' => $fecha,
            'direccion' => $direccion,
            'departamento' => $departamento,
            'municipio' => $municipio,
            'referencia' => $referencia,
            'latitud' => $latitud,
            'longitud' => $longitud,
        ]);

        $poste->save();
    }
}
