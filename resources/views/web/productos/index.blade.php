@extends('layout.web')

@section('title', 'Nuestros productos')

@section('content')
    @push('extra-css')
    @endpush
    <div class="portada">
        <img class="ocultar-movil" src="{{ asset('/public/web/imagenes/portada-productos-escritorio.svg') }}" alt="">
        <img class="ocultar-escritorio" src="{{ asset('/public/web/imagenes/portada-productos-movil.svg') }}" alt="">
    </div>
    <div class="contenido">
        <section class="filtros">
            <div class="select-filtros">
                <div class="ocultar-nice-select div-filtro">
                    @csrf
                    <label for="">Segmento</label>
                    <select class="selectpicker" id="segmentosSeleccionados" multiple title="Seleccione Segmento" data-live-search="true">
                        @foreach ($segmentos as $seg)
                        <option value="{{$seg->seg_id}}">{{$seg->seg_nombre}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="ocultar-nice-select div-filtro">
                    <label for="">Categoría</label>
                    <select class="selectpicker" multiple id="categoriasSeleccionadas" title="Seleccione Categoría" data-live-search="true">
                        @foreach ($categorias as $cat)
                        <option value="{{$cat->cat_id}}">{{$cat->cat_nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <a href="javascript:void(0)" id="limpiarFiltros" style="color: #1362B6;">Limpiar filtros</a>
                </div>
            </div>
            <br>
        </section>

        <section class="seccion-home seccion-listas">
            <img class="spinner" style="display:none" src="/public/web/imagenes/loading_icon.svg" />
            <div id="contenidorProductos" class="cuadros-info cuadros-row-4">        
            </div>
        </section>

        <!--<div class="numeros-pag">
            <a href="" class="numero-antes-despues"  style="margin-right: 35px">Anterior</a>
            <a href="" class="numero-antes-despues-movil"  style="margin-right: 35px"><img src="{{ asset('web/imagenes/i-antes.svg') }}" alt=""></a>
            <a href="" class="numero numero-seleccionado">1</a>
            <a href="" class="numero">2</a>
            <a href="" class="numero-antes-despues" style="margin-left: 35px">Siguiente</a>
            <a href="" class="numero-antes-despues-movil"  style="margin-left: 35px"><img src="{{ asset('web/imagenes/i-despues.svg') }}" alt=""></a>
        </div>-->
    </div>
    
    <script src="{{ asset('public/web/js/producto/index.js?v=' . rand()) }}"></script>
    @push('extra-js')
        <script>
            $(document).ready(function(){
                $('.flexslider-seccion').flexslider({
                    animation: "slide",
                });
            });
        </script>
    @endpush

@endsection
