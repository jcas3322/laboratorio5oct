<?php

namespace App\Http\Controllers\Controladores;

use App\Cruds\CrudUsuario\CrudUsuario;
use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class UsuarioControlador extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CrudUsuario $crudUsuario)
    {
        $data = $crudUsuario->listarUsuarios();
        return view('usuario.mostrar_usuarios')
            ->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuario.crear_usuario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, CrudUsuario $crudUsuario)
    {
        $nombre = $request->input('nombre') ?? null;
        $direccion = $request->input('direccion') ?? null;
        $telefono = $request->input('telefono') ?? null;

        if ($crudUsuario->registrarUsuario($nombre, $direccion, $telefono)) {
            Session::flash('exito', 'Usuario registrado exitosamente');
        }else{
            Session::flash('error', 'Error al registrar el usuario');
        }

        return redirect()->route('usuario.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id, CrudUsuario $crudUsuario)
    {
        $data = $crudUsuario->buscarUsuario($id);
        return view('usuario.editar_usuario')
            ->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id, CrudUsuario $crudUsuario)
    {
        $nombre = $request->input('nombre') ?? null;
        $direccion = $request->input('direccion') ?? null;
        $telefono = $request->input('telefono') ?? null;
        if ($crudUsuario->actualizarUsuario($id, $nombre, $direccion, $telefono)) {
            Session::flash('exito', 'Usuario actualizado exitosamente');
        }else{
            Session::flash('error', 'Error al actualizar el usuario');
        }
        return redirect()->route('usuario.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $crudUsuario = new CrudUsuario();
        if ($crudUsuario->eliminarUsuario($id)) {
            Session::flash('exito', 'Usuario eliminado exitosamente');
        }else{
            Session::flash('error', 'Error al eliminar el usuario');
        }

        return redirect()->route('usuario.index');
    }
}
