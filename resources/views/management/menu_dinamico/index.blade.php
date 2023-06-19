@extends('layout.management')

@section('title', 'menu dinamico')

@section('content')


    <h1>Menú dinámico</h1>
    @csrf
    <div class="dx-viewport demo-container">
        <div id="grid-container"></div>
    </div>

    @push('extra-js')
        <script src="{{ asset('public/management/js/menu_dinamico/index.js?v=' . rand()) }}"></script>
    @endpush
@endsection
