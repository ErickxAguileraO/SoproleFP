@extends('layout.management')

@section('title', 'Noticias')

@section('content')

    <a class="btn btn-primary float-right" href="{{ route('administracion.noticia.crear') }}">Crear</a>

    <h1>Noticias</h1>
    @csrf
    <div class="dx-viewport demo-container">
        <div id="grid-container"></div>
    </div>

    @push('extra-js')
        <script src="{{ asset('public/management/js/noticias/index.js?v=' . rand()) }}"></script>
    @endpush
@endsection
