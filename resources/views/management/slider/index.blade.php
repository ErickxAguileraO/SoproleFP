@extends('layout.management')

@section('title', 'Sliders')

@section('content')

    <a class="btn btn-primary float-right" href="{{ route('administracion.slider.crear') }}">Crear</a>

    <h1>Sliders</h1>
    @csrf
    <div class="dx-viewport demo-container">
        <div id="grid-container"></div>
    </div>

    @push('extra-js')
        <script src="{{ asset('public/management/js/slider/index.js?v=' . rand()) }}"></script>
    @endpush
@endsection
