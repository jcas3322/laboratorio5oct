<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Poste extends Model
{
    protected $table = 'poste';

    protected $fillable = [
        'numero_poste',
        'fecha_registro',
        'direccion',
        'departamento',
        'municipio',
        'referencia',
        'latitud',
        'longitud',
        ];
    public $timestamps = false;

}
