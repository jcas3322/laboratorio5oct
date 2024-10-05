<?php

namespace App\Http\Controllers\Controladores;

use App\Cruds\CRUDContacto\ContactoCrud;
use App\Http\Controllers\Controller;
use App\Models\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactoController extends Controller
{
    public function index(){
        return view('contacto.create');
    }

    public function store(Request $request, ContactoCrud $crudContacto){
        $nombre = $request->input('nombre');
        $telefono = $request->input('telefono');
        $correo = $request->input('correo');
        $motivo = $request->input('motivo');

        if(empty($nombre) || empty($telefono) || empty($correo) || empty($motivo)){
            Session::flash('error', 'Tienes campos sin llenar, por favor verifica');
            return redirect()->back()->withInput();
        }

        $crudContacto->create(
            $nombre,
            $correo,
            $telefono,
            $motivo
        );

        Session::flash('exito', 'Solicitud registrada correctamente');
        return redirect()->route('home');
    }

    public function edit($id, ContactoCrud $crudContacto){
        $data = $crudContacto->edit($id);
        return view('contacto.edit', compact('data'));
    }

    public function update($id, Request $request, ContactoCrud $crudContacto){
        $nombre = $request->input('nombre');
        $telefono = $request->input('telefono');
        $correo = $request->input('correo');
        $motivo = $request->input('motivo');

        if(empty($nombre) || empty($telefono) || empty($correo) || empty($motivo)){
            Session::flash('error', 'Tienes campos sin llenar, por favor verifica');
            return redirect()->back()->withInput();
        }

        $crudContacto->update($id, $nombre, $telefono, $correo, $motivo);
        Session::flash('exito', 'Solicitud actualizada correctamente');
        return redirect()->route('home');
    }

    public function destroy($id){
        Contacto::destroy($id);
        Session::flash('exito', 'Solicitud actualizada correctamente');
        return redirect()->route('home');
    }
}
