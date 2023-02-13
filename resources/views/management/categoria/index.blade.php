@extends('layout.management')

@section('title', 'categorias')

@section('content')

    <a class="btn btn-primary float-right" href="{{ route('administracion.categoria.crear') }}">Crear</a>

    <h1>Categorias</h1>
    @csrf
    <div class="dx-viewport demo-container">
        <div id="grid-container"></div>
    </div>

    @push('extra-js')
        <script src="{{ asset('public/management/js/categoria/index.js?v=' . rand()) }}"></script>
    @endpush
@endsection
