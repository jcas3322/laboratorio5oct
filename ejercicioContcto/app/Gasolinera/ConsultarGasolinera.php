<?php

namespace App\Gasolinera;

use App\Models\ReporteGasolinera;
use PhpParser\Node\Arg;

class ConsultarGasolinera
{
    public function __construct()
    {
        //
    }

    public function consultar(): array
    {
        $totalRegular = ReporteGasolinera::query()
            ->where('tipo_combustible', '=', ReporteGasolinera::TIPO_COMBUSTIBLE_REGULAR)
            ->sum('cantidad_litros');

        $totalSuper = ReporteGasolinera::query()
            ->where('tipo_combustible', '=', ReporteGasolinera::TIPO_COMBUSTIBLE_SUPER)
            ->sum('cantidad_litros');

        $totalDiesel = ReporteGasolinera::query()
            ->where('tipo_combustible', '=', ReporteGasolinera::TIPO_COMBUSTIBLE_DIESEL)
            ->sum('cantidad_litros');

        $totalVentaRegular = 0;
        $totalVentaSuper = 0;
        $totalVentaDiesel = 0;

        if ($totalRegular > 100) {
            $totalVentaRegular = $totalRegular * 36.57;
        }else{
            $totalVentaRegular = $totalRegular * 31.57;
        }

        if($totalSuper > 100){
            $totalVentaSuper = $totalSuper * 37.82;
        }else{
            $totalVentaSuper = $totalSuper * 32.82;
        }

        if($totalDiesel > 100){
            $totalVentaDiesel = $totalDiesel * 36.75;
        }else{
            $totalVentaDiesel = $totalDiesel * 29.75;
        }

        return [
            'totalRegular' => $totalRegular,
            'totalSuper' => $totalSuper,
            'totalDiesel' => $totalDiesel,
            'totalVentaRegular' => 'Q.' . number_format($totalVentaRegular, 2, '.', ','),
            'totalVentaSuper' => 'Q.' . number_format($totalVentaSuper, 2, '.', ','),
            'totalVentaDiesel' => 'Q.' . number_format($totalVentaDiesel, 2, '.', ','),
        ];
    }
}
