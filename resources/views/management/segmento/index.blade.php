@extends('layout.management')

@section('title', 'Segmentos')

@section('content')

    <a class="btn btn-primary float-right" href="{{ route('administracion.segmento.crear') }}">Crear</a>

    <h1>Segmentos</h1>
    @csrf
    <div class="dx-viewport demo-container">
        <div id="grid-container"></div>
    </div>

    @push('extra-js')
        <script src="{{ asset('public/management/js/segmento/index.js?v=' . rand()) }}"></script>
    @endpush
@endsection
