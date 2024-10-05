<div class="row">
    <div class="col-4">
        <label class="col-form-label">Ingresa tu nombre (*):</label>
        <input class="form-control" value="{{ old('nombre', $data ? $data->nombre : '') }}"
               name="nombre" placeholder="Ingresa tu nombre...">
    </div>
    <div class="col-4">
        <label class="col-form-label">Ingresa tu correo (*):</label>
        <input type="text" class="form-control" value=""{{ old('correo', $data ? $data->correo : '') }}"
               name="correo" placeholder="Ingresa tu correo...">
    </div>
    <div class="col-4">
        <label class="col-form-label">Ingresa tu telefono (*):</label>
        <input class="form-control" value="{{ old('telefono', $data ? $data->telefono : '') }}"
               name="telefono" placeholder="Ingresa tu telefono...">
    </div>
    <div class="col-12">
        <label class="col-form-label">Ingresa tu motivo (*):</label>
        <textarea class="form-control" name="motivo" rows="5">{{ old('motivo', $data ? $data->motivo : '') }}
        </textarea>
    </div>
</div>
