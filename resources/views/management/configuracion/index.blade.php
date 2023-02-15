@extends('layout.management')

@section('title', 'Configuraciones')

@section('content')

    <a class="btn btn-primary float-right" href="{{ route('administracion.configuracion.crear') }}">Crear</a>

    <h1>Configuraciones</h1>
    @csrf
    <div class="dx-viewport demo-container">
        <div id="grid-container"></div>
    </div>

    @push('extra-js')
        <script src="{{ asset('public/management/js/configuracion/index.js?v=' . rand()) }}"></script>
    @endpush
@endsection
