@extends('layout.app')

@section('title', 'Registrar venta')

@section('content')

    <br/>
    <form role="form" action="{{ route('gasolina.store') }}" method="post">
        @csrf
        @method('POST')
        <div class="card">
            <div class="card-header">
                <h3 class="h3 text-bg-light">Registrar venta</h3>
            </div>
            <div class="card-body">
                @include('gasolinera.partial.formulario_gasolinea', [
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
