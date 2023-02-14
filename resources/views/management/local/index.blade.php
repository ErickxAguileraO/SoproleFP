@extends('layout.management')

@section('title', 'Locales')

@section('content')

    <a class="btn btn-primary float-right" href="{{ route('administracion.local.crear') }}">Crear</a>

    <h1>Locales</h1>
    @csrf
    <div class="dx-viewport demo-container">
        <div id="grid-container"></div>
    </div>

    @push('extra-js')
        <script src="{{ asset('public/management/js/local/index.js?v=' . rand()) }}"></script>
    @endpush
@endsection
