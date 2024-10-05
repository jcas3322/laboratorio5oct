<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReporteGasolinera extends Model
{
    const TIPO_COMBUSTIBLE_REGULAR = 1;
    const TIPO_COMBUSTIBLE_SUPER = 2;
    const TIPO_COMBUSTIBLE_DIESEL = 3;

    protected $table = 'reporte_gasolinera';
    protected $fillable = [
        'tipo_combustible',
        'cantidad_litros'
    ];

    public $timestamps = false;
}
