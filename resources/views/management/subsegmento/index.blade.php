@extends('layout.management')

@section('title', 'Subsegmentos')

@section('content')

    <a class="btn btn-primary float-right" href="{{ route('administracion.subsegmento.crear') }}">Crear</a>

    <h1>Subsegmentos</h1>
    @csrf
    <div class="dx-viewport demo-container">
        <div id="grid-container"></div>
    </div>

    @push('extra-js')
        <script src="{{ asset('public/management/js/subsegmento/index.js?v=' . rand()) }}"></script>
    @endpush
@endsection
