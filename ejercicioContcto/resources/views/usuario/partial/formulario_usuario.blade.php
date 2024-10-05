<div class="row">
    <div class="col-4">
        <label class="col-form-label">Nombre:</label>
        <input class="form-control" value="{{ $data ? $data->nombre : '' }}"
         required name="nombre" placeholder="Ingrese el nombre del usuario...">
    </div>
    <div class="col-4">
        <label class="col-form-label">Direccion:</label>
        <input class="form-control" value="{{ $data ? $data->direccion : '' }}"
          required name="direccion" placeholder="Ingrese la direccion del usuario...">
    </div>
    <div class="col-4">
        <label class="col-form-label">Telefono:</label>
        <input class="form-control" value="{{ $data ? $data->telefono : '' }}"
          required name="telefono" placeholder="Ingrese el telefono del usuario...">
    </div>
</div>
