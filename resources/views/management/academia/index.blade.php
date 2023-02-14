@extends('layout.management')

@section('title', 'Academias')

@section('content')

    <a class="btn btn-primary float-right" href="{{ route('administracion.academia.crear') }}">Crear</a>

    <h1>Academias</h1>
    @csrf
    <div class="dx-viewport demo-container">
        <div id="grid-container"></div>
    </div>

    @push('extra-js')
        <script src="{{ asset('public/management/js/academia/index.js?v=' . rand()) }}"></script>
    @endpush
@endsection
