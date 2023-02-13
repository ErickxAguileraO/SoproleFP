@extends('layout.management')

@section('title', 'Productos')

@section('content')

    <a class="btn btn-primary float-right" href="{{ route('administracion.producto.crear') }}">Crear</a>

    <h1>Productos</h1>
    @csrf
    <div class="dx-viewport demo-container">
        <div id="grid-container"></div>
    </div>

    @push('extra-js')
        <script src="{{ asset('public/management/js/producto/index.js?v=' . rand()) }}"></script>
    @endpush
@endsection
