<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';

    protected $fillable = [
        'nombre',
        'direccion',
        'telefono'
    ];

    public $timestamps = false;
}
