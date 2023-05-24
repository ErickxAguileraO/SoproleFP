@extends('layout.web')

@section('title', 'Formularios')

@section('content')
@include('web.cliente.spinner')

    <div class="contenido">
        <section class="formularios">
            <h2>{{$titulo}}</h2>
            <iframe style="width: 100%; height:{{$alto}}px;border: 0px solid;"  src="{{$url}}">Your browser isn't compatible</iframe>
        </section>
    </div>

    @push('extra-js')
        <script src="{{ asset('public/web/js/contacto/index.js?v=' . rand()) }}"></script>
    @endpush

@endsection
