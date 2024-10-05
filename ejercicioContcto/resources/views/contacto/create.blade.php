@extends('layout.app')

@section('title', 'CONTACTO')

@section('content')

    <br/>
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
            <h3 class="text-dark">CONTACTO</h3>
        </div>
        <div class="card-body">

            <form action="{{ route('contacto.store') }}" method="post">
                @csrf
                @method('POST')
                <br/>
                @include('contacto.parcial.include_contacto', [
                    'data' => null
                ])
                <br/>
                <button type="submit" class="btn btn-primary">Registrar solicitud</button>
            </form>

        </div>
        <div class="card-footer">
            <h3 class="text-info">En breve atenderemos tu solicitud</h3>
        </div>
    </div>

@endsection

@push('scripts')
@endpush
