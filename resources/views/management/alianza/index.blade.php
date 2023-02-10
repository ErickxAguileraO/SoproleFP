@extends('layout.management')

@section('title', 'Alianzas')

@section('content')

    <a class="btn btn-primary float-right" href="{{ route('administracion.alianza.crear') }}">Crear</a>

    <h1>Alianzas</h1>
    @csrf
    <div class="dx-viewport demo-container">
        <div id="grid-container"></div>
    </div>

    @push('extra-js')
        <script src="{{ asset('public/management/js/alianza/index.js?v=' . rand()) }}"></script>
    @endpush
@endsection
