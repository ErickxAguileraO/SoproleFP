@extends('layout.management')

@section('title', 'Tipos de negocio')

@section('content')

    <a class="btn btn-primary float-right" href="{{ route('administracion.tipo.negocio.crear') }}">Crear</a>

    <h1>Tipos de negocios</h1>
    @csrf
    <div class="dx-viewport demo-container">
        <div id="grid-container"></div>
    </div>

    @push('extra-js')
        <script src="{{ asset('public/management/js/tipo_negocio/index.js?v=' . rand()) }}"></script>
    @endpush
@endsection
