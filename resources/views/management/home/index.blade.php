@extends('layout.management')

@section('title', 'Dashboard')

@section('content')
    <div class="miCuenta">
        <h1>Home</h1>
        <hr>

        <p>Bienvenido a la administración de <span class="fw-bold">{{ env('APP_NAME') }}</span>.</p> 
        <p> En el menú lateral podrá
            encontrar las diferentes secciones para poder administrar el sitio web, puede dirigirse a este con el siguiente
            <a target="_blank" href="{{ env('APP_URL') }}">enlace <i class="bi bi-box-arrow-up-right"></i></a>.</p>
    </div>

@endsection
