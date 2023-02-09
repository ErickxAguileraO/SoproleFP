@extends('layout.management')

@section('title', 'Editables')

@section('content')

    <a class="btn btn-primary float-right" href="{{ route('administracion.editable.crear') }}">Crear</a>

    <h1>Editables</h1>
    @csrf
    <div class="dx-viewport demo-container">
        <div id="grid-container"></div>
    </div>

    @push('extra-js')
        <script src="{{ asset('public/management/js/editable/index.js?v=' . rand()) }}"></script>
    @endpush
@endsection
