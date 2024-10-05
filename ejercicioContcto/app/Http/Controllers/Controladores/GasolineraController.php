<?php

namespace App\Http\Controllers\Controladores;

use App\Gasolinera\ConsultarGasolinera;
use App\Gasolinera\RegistrarVenta;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GasolineraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ConsultarGasolinera $consultarGasolinera)
    {
        $data = $consultarGasolinera->consultar();

        return view('gasolinera.index')
            ->with('item', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gasolinera.registrar_venta');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, RegistrarVenta $registrarVenta)
    {
        $tipo = $request->input('tipo_gasolina');
        $cantidad = $request->input('cantidad');

        $registrarVenta->registrarVenta($tipo, $cantidad);
        Session::flash('exito', 'Venta registrada correctamente');
        return redirect()->route('gasolina.index');
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
