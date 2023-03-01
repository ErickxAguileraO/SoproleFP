@extends('layout.management')

@section('title', 'Editables')

@section('content')
    <h1>Editables</h1>
    @csrf
    <div class="dx-viewport demo-container">
        <div id="grid-container"></div>
    </div>

    @push('extra-js')
        <script src="{{ asset('public/management/js/editable/index.js?v=' . rand()) }}"></script>
    @endpush
@endsection
