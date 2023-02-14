@extends('layout.management')

@section('title', 'clientes')

@section('content')

    <a class="btn btn-primary float-right" href="{{ route('administracion.cliente.crear') }}">Crear</a>

    <h1>Clientes</h1>
    @csrf
    <div class="dx-viewport demo-container">
        <div id="grid-container"></div>
    </div>

    @push('extra-js')
        <script src="{{ asset('public/management/js/cliente/index.js?v=' . rand()) }}"></script>
    @endpush
@endsection
