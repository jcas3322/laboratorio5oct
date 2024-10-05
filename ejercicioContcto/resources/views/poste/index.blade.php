@extends('layout.app')

@section('title', 'Mostrar Registros')

@section('content')

    <br/>
    @if(\Illuminate\Support\Facades\Session::has('error'))
        <div class="alert alert-danger">
            <h5>{{ \Illuminate\Support\Facades\Session::get('error') }}</h5>
        </div>
    @endif
    @if(\Illuminate\Support\Facades\Session::has('exito'))
        <div class="alert alert-success">
            <h5>{{ \Illuminate\Support\Facades\Session::get('exito') }}</h5>
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h3 class="h3 text-dark">Listado de postes</h3>
                <a type="button" class="btn btn-success" href="{{ route('poste.create') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                    </svg>
                    Nuevo
                </a>
            </div>
        </div>
        <div class="card-body">
            <br/>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr class="table-info">
                            <td>#POSTE</td>
                            <td>FECHA</td>
                            <td>DIRECCION</td>
                            <td>DEPARTAMENTO</td>
                            <td>MUNICIPIO</td>
                            <td>REFERENCIA</td>
                            <td>LATITUD</td>
                            <td>LONGITUD</td>
                        </tr>
                    </thead>
                    <tbody>
                        @if( count($data) <= 0 )
                            <tr>
                                <td colspan="8">Sin registros...</td>
                            </tr>
                        @endif

                    @foreach($data as $item)
                        <tr>
                            <td>{{ $item->numero_poste }}</td>
                            <td>{{ $item->fecha_registro }}</td>
                            <td>{{ $item->direccion }}</td>
                            <td>{{ $item->departamento }}</td>
                            <td>{{ $item->municipio }}</td>
                            <td>{{ $item->referencia }}</td>
                            <td>{{ $item->latitud }}</td>
                            <td>{{ $item->longitud }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        const validarEliminar = id =>{
            event.preventDefault();
            let confirmar = confirm('Seguro que desea eliminar al usuario?');
            if (confirmar){
                document.getElementById(id).submit();
            }
        }
    </script>
@endpush
