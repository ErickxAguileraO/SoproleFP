@extends('layout.management')

@section('title', 'Dashboard')

@push('extra-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/management/css/tableHome.css') }}">
@endpush

@section('content')
    <div class="miCuenta">
        <h1>Home</h1>
        <hr>

        <p>Bienvenido a la administración de <span class="fw-bold">{{ env('APP_NAME') }}</span>.</p>
        <p> En el menú lateral podrá
            encontrar las diferentes secciones para poder administrar el sitio web, puede dirigirse a este con el siguiente
            <a target="_blank" href="{{ env('APP_URL') }}">enlace <i class="bi bi-box-arrow-up-right"></i></a>.
        </p>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>Sección</th>
                    <th>Registros</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td id="cont_slider">Sliders</td>
                    <td><img class="spinner" src="/public/web/imagenes/loading_icon.svg"/></td>
                </tr>
                <tr>
                    <td id="cont_editable">Editables</td>
                    <td><img class="spinner" src="/public/web/imagenes/loading_icon.svg"/></td>
                </tr>
                <tr>
                    <td id="cont_alianza">Alianzas</td>
                    <td><img class="spinner" src="/public/web/imagenes/loading_icon.svg"/></td>
                </tr>
                <tr>
                    <td id="cont_producto">Productos</td>
                    <td><img class="spinner" src="/public/web/imagenes/loading_icon.svg"/></td>
                </tr>
                <tr>
                    <td id="cont_categoria">Categorías</td>
                    <td><img class="spinner" src="/public/web/imagenes/loading_icon.svg"/></td>
                </tr>
                <tr>
                    <td id="cont_receta">Recetas</td>
                    <td><img class="spinner" src="/public/web/imagenes/loading_icon.svg"/></td>
                </tr>
                <tr>
                    <td id="cont_segmento">Segmentos</td>
                    <td><img class="spinner" src="/public/web/imagenes/loading_icon.svg"/></td>
                </tr>
                <tr>
                    <td id="cont_academia">Academias</td>
                    <td><img class="spinner" src="/public/web/imagenes/loading_icon.svg"/></td>
                </tr>
                <tr>
                    <td id="cont_noticia">Noticias</td>
                    <td><img class="spinner" src="/public/web/imagenes/loading_icon.svg"/></td>
                </tr>
                <tr>
                    <td id="cont_contacto">Contactos</td>
                    <td><img class="spinner" src="/public/web/imagenes/loading_icon.svg"/></td>
                </tr>
                <tr>
                    <td id="cont_tipo_negocio">Tipos de negocio</td>
                    <td><img class="spinner" src="/public/web/imagenes/loading_icon.svg"/></td>
                </tr>
                <tr>
                    <td id="cont_subsegmento">Sub-segmentos</td>
                    <td><img class="spinner" src="/public/web/imagenes/loading_icon.svg"/></td>
                </tr>
                <tr>
                    <td id="cont_cliente">Clientes</td>
                    <td><img class="spinner" src="/public/web/imagenes/loading_icon.svg"/></td>
                </tr>
                <tr>
                    <td id="cont_local">Locales</td>
                    <td><img class="spinner" src="/public/web/imagenes/loading_icon.svg"/></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
@push('extra-js')
    <script src="{{ asset('public/management/js/home/index.js?v=' . rand()) }}"></script>
@endpush
