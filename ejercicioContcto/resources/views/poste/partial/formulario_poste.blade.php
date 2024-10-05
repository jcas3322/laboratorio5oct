<div class="row">
    <div class="col-4">
        <label class="col-form-label">Numero poste:</label>
        <input class="form-control" value="{{ $data ? $data->nombre : '' }}"
         required name="numero_poste" placeholder="Ingrese el numero de poste...">
    </div>
    <div class="col-4">
        <label class="col-form-label">Fecha:</label>
        <input class="form-control" value="{{ $data ? $data->direccion : '' }}"
          required name="fecha" type="date">
    </div>
    <div class="col-4">
        <label class="col-form-label">Direccion:</label>
        <input class="form-control" value="{{ $data ? $data->telefono : '' }}"
               required name="direccion" placeholder="Ingrese la direccion...">
    </div>
    <div class="col-4">
        <label class="col-form-label">Departamento:</label>
        <input class="form-control" value="{{ $data ? $data->telefono : '' }}"
               required name="departamento" placeholder="Ingrese el departamento...">
    </div>
    <div class="col-4">
        <label class="col-form-label">Municipio:</label>
        <input class="form-control" value="{{ $data ? $data->telefono : '' }}"
               required name="municipio" placeholder="Ingrese el municipio...">
    </div>
    <div class="col-4">
        <label class="col-form-label">Referencia:</label>
        <input class="form-control" value="{{ $data ? $data->telefono : '' }}"
               required name="referencia" placeholder="Ingrese la referencia...">
    </div>
    <div class="col-4">
        <label class="col-form-label">Latitud:</label>
        <input class="form-control" value="{{ $data ? $data->telefono : '' }}"
               required name="latitud" placeholder="Ingrese la latitud...">
    </div>
    <div class="col-4">
        <label class="col-form-label">Longitud:</label>
        <input class="form-control" value="{{ $data ? $data->telefono : '' }}"
               required name="longitud" placeholder="Ingrese la longitud...">
    </div>
</div>
