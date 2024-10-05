@extends('layout.app')

@section('title', 'Crear registro')

@section('content')

    <br/>
    <form role="form" action="{{ route('poste.store') }}" method="post">
        @csrf
        @method('POST')
        <div class="card">
            <div class="card-header">
                <h3 class="h3 text-bg-light">Registrar poste</h3>
            </div>
            <div class="card-body">
                @include('poste.partial.formulario_poste', [
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
