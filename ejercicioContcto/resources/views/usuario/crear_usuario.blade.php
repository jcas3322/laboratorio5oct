@extends('layout.app')

@section('title', 'Crear usuario')

@section('content')

    <br/>
    <form role="form" action="{{ route('usuario.store') }}" method="post">
        @csrf
        @method('POST')
        <div class="card">
            <div class="card-header">
                <h3 class="h3 text-bg-light">Registrar usuario</h3>
            </div>
            <div class="card-body">
                @include('usuario.partial.formulario_usuario', [
                    'data' => null,
                ])
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
        </div>
    </form>
@endsection

@push('scripts')
@endpush
