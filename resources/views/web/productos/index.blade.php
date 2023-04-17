@extends('layout.web')

@section('title', 'Nuestros productos')

@section('content')
    @push('extra-css')
        <style>
            .numeros-pag {
                width: 100%;
            }
        </style>
    @endpush
    <div class="portada">
        <img class="ocultar-movil" src="{{ asset('/public/web/imagenes/banners/portada_productos.png') }}" alt="">
        <img class="ocultar-escritorio" src="{{ asset('/public/web/imagenes/portada-productos-movil.svg') }}" alt="">
    </div>
    <div class="contenido">
        <section class="filtros">
            <div class="select-filtros">
                <div class="ocultar-nice-select div-filtro">
                    @csrf
                    <label for="">Segmento</label>
                    <select class="selectpicker" id="filtro_segmento" name="filtro_segmento" multiple
                        title="Seleccione Segmento" data-live-search="true">
                        @foreach ($segmentos as $seg)
                            <option value="{{ $seg->seg_id }}">{{ $seg->seg_nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="ocultar-nice-select div-filtro">
                    <label for="">Categoría</label>
                    <select class="selectpicker" multiple id="filtro_categoria" title="Seleccione Categoría"
                        data-live-search="true">
                        @foreach ($categorias as $cat)
                            <option value="{{ $cat->cat_id }}">{{ $cat->cat_nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <a href="javascript:void(0)" id="limpiarFiltros" style="color: #1362B6;">Limpiar filtros</a>
                </div>
            </div>
            <br>
            <img class="spinner" style="display:none;margin-top:150px" src="/public/web/imagenes/loading_icon.svg" />
        </section>
        <section class="seccion-home seccion-listas" id="contenidorProductos">
            @include('web.productos.dinamico')
        </section>
    </div>
    @push('extra-js')
        <script src="{{ asset('public/web/js/producto/index.js?v=' . rand()) }}"></script>
    @endpush
@endsection
