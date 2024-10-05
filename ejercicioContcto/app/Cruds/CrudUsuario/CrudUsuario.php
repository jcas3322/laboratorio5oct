<?php

namespace App\Cruds\CrudUsuario;

use App\Models\Usuario;

class CrudUsuario
{

    public function __construct()
    {
        //
    }

    public function listarUsuarios()
    {
        return Usuario::query()
            ->orderBy('id', 'ASC')
            ->get();
    }

    public function registrarUsuario(
        string $nombre,
        string $direccion,
        string $telefono,
    ): bool
    {
        $usuario = new Usuario();
        $usuario->fill([
            'nombre' => $nombre,
            'direccion' => $direccion,
            'telefono' => $telefono,
        ]);

        $usuario->save();

        return true;
    }

    public function buscarUsuario($id): ?Usuario
    {
        return Usuario::query()
            ->where('id', $id)
            ->first();
    }

    public function eliminarUsuario($id): bool
    {
        $usuario = $this->buscarUsuario($id);
        $usuario->delete();
        return true;
    }

    public function actualizarUsuario($id, string $nombre, string $direccion, string $telefono): bool
    {
        $usuario = $this->buscarUsuario($id);
        $usuario->fill([
            'nombre' => $nombre,
            'direccion' => $direccion,
            'telefono' => $telefono,
        ]);
        $usuario->update();
        return true;
    }
}
