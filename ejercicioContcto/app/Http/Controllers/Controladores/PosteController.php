<?php

namespace App\Http\Controllers\Controladores;

use App\Http\Controllers\Controller;
use App\Poste\ConsultarPostes;
use App\Poste\RegistrarPoste;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PosteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ConsultarPostes $consultarPostes)
    {
        $data = $consultarPostes->consultar();
        return view('poste.index')
            ->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('poste.registrar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, RegistrarPoste  $registrarPoste)
    {
        $numero_poste = $request->input('numero_poste');
        $fecha = $request->input('fecha');
        $direccion = $request->input('direccion');
        $departamento = $request->input('departamento');
        $municipio = $request->input('municipio');
        $referencia = $request->input('referencia');
        $latitud = $request->input('latitud');
        $longitud = $request->input('longitud');

        $registrarPoste->registrarPoste(
            $numero_poste,
            $fecha,
            $direccion,
            $departamento,
            $municipio,
            $referencia,
            $latitud,
            $longitud
        );
        Session::flash('exito', 'Registro exitoso');
        return redirect()->route('poste.index');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
