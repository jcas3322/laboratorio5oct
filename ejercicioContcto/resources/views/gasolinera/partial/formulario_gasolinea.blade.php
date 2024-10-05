<div class="row">
    <div class="col-4">
        <label class="col-form-label">Tipo:</label>
        <select class="form-control" name="tipo_gasolina">
            <option value="{{\App\Models\ReporteGasolinera::TIPO_COMBUSTIBLE_REGULAR}}">REGULAR</option>
            <option value="{{\App\Models\ReporteGasolinera::TIPO_COMBUSTIBLE_SUPER}}">SUPER</option>
            <option value="{{\App\Models\ReporteGasolinera::TIPO_COMBUSTIBLE_DIESEL}}">DIESEL</option>
        </select>
    </div>
    <div class="col-4">
        <label class="col-form-label">Cantidad:</label>
        <input type="number" placeholder="Ingrese cantidad en numeros"
                name="cantidad" step="0.1" class="form-control">
    </div>
</div>
