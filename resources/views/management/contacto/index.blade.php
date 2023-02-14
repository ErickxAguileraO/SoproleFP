@extends('layout.management')

@section('title', 'Contactos')

@section('content')

    <h1>Contactos</h1>
    @csrf
    <div class="dx-viewport demo-container">
        <div id="grid-container"></div>
    </div>

    @push('extra-js')
        <script src="{{ asset('public/management/js/contacto/index.js?v=' . rand()) }}"></script>
    @endpush
@endsection
