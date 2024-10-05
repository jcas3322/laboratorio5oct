@extends('layout.app')

@section('title', 'Editar usuario')

@section('content')
    <br/>
    <form role="form" action="{{ route('usuario.update', $data->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-header">
                <h3 class="h3 text-bg-warning">Editar usuario</h3>
            </div>
            <div class="card-body">
                @include('usuario.partial.formulario_usuario', [
                    'data' => $data
                ])
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-warning">Actualizar</button>
            </div>
        </div>
    </form>
@endsection

@push('scripts')
@endpush
