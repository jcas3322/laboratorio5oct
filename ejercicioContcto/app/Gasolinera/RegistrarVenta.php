<?php

namespace App\Gasolinera;

use App\Models\ReporteGasolinera;

class RegistrarVenta
{
    public  function __contruct()
    {
        //
    }

    public function registrarVenta($tipo, $cantidad)
    {
        $reporteGasolinera = new ReporteGasolinera();
        $reporteGasolinera->fill([
            'tipo_combustible' => $tipo,
            'cantidad_litros' => $cantidad,
        ]);
        $reporteGasolinera->save();
    }
}
