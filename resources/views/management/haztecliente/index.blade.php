@extends('layout.management')

@section('title', 'Contactos  - Hazte Cliente')

@section('content')

    <h1>Contactos  - Hazte Cliente</h1>
    @csrf
    <div class="dx-viewport demo-container">
        <div id="grid-container"></div>
    </div>

    @push('extra-js')
        <script src="{{ asset('public/management/js/haztecliente/index.js?v=' . rand()) }}"></script>
    @endpush
@endsection
