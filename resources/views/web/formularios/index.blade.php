@extends('layout.web')

@section('title', 'Formularios')

@section('content')
@include('web.cliente.spinner')

    <div class="contenido">
        <section class="formularios">
            <h2>Titulo de formulario</h2>
            {{-- La clase "tamano-formulario-iframe" para controlar dinamicamente el height del formulario --}}
            <iframe class="tamano-formulario-iframe" src="https://forms.zohopublic.com/soprole/form/Quierosercliente2/formperma/zUj9dv0bSImShA6CEIv9yHZQjQhIs3NiVZoaH9OD9no?canal=Web%20FP" frameborder="0"></iframe>
        </section>
    </div>

    @push('extra-js')
        <script src="{{ asset('public/web/js/contacto/index.js?v=' . rand()) }}"></script>
    @endpush

@endsection
