<?php

namespace App\Cruds\CRUDContacto;

use App\Models\Contacto;

class ContactoCrud
{
    public function create(
        string $nombre,
        string $correo,
        string $telefono,
        string $motivo
    )
    {
        $contacto = new Contacto();
        $contacto->fill([
            'nombre' => $nombre,
            'correo' => $correo,
            'telefono' => $telefono,
            'motivo' => $motivo
        ]);

        $contacto->save();
    }

    public function edit(?int $id)
    {
        return Contacto::query()->find($id);
    }

    public function listAll()
    {
        return Contacto::all();
    }

    public function update($id,  $nombre, $correo, $telefono, $motivo)
    {
        $contacto = Contacto::query()->find($id);
        $contacto->fill([
            'nombre' => $nombre,
            'correo' => $correo,
            'telefono' => $telefono,
            'motivo' => $motivo
        ]);
        $contacto->update();
    }
}
