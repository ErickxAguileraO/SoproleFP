@extends('layout.web')

@section('title', 'Nuestras recetas')

@section('content')
    @push('extra-css')
    @endpush
    <div class="portada">
        <img class="ocultar-movil" src="{{ asset('/public/web/imagenes/banners/portada_recetas.png') }}" alt="">
        <img class="ocultar-escritorio" src="{{ asset('/public/web/imagenes/portada-recetas-movil.svg') }}" alt="">
    </div>
    <div class="contenido">
        <section class="filtros">
            <div class="select-filtros">
                <div class="ocultar-nice-select div-filtro">
                    <label for="">Segmento</label>
                    <select class="selectpicker" multiple title="Seleccione Segmento" data-live-search="true" id="filtro_segmento" name="filtro_segmento">
                        @foreach ($segmentos as $item)
                            <option value="{{$item->seg_id}}">{{$item->seg_nombre}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="ocultar-nice-select div-filtro">
                    <label for="">Producto</label>
                    <select class="selectpicker" multiple title="Seleccione Producto" data-live-search="true" id="filtro_producto" name="filtro_producto">
                        @foreach ($productos as $item)
                            <option value="{{$item->pro_id}}">{{$item->pro_titulo}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <a href="{{route('web.receta.index')}}" style="color: #1362B6;">Limpiar filtros</a>
                </div>
            </div>
            {{-- <h2 style="margin-top: 50px">Filtrado por: <p>Leche</p> </h2> --}}
        </section>

        <section class="data seccion-home" id="data">
            @include('web.recetas.data')
        </section>
    </div>
    
    @push('extra-js')
        <script>
            // Flex Slider
            $(document).ready(function(){
                $('.flexslider-seccion').flexslider({
                    animation: "slide",
                });

                var old_filtro_segmento = $("#old_filtro_segmento").val().replace('[', '').replace(']', '').replace(/"/g, '');
                if (old_filtro_segmento) {
                    $("#filtro_segmento").val(old_filtro_segmento.split(','));
                    $('#filtro_segmento').trigger('change');
                }

                var old_filtro_producto = $("#old_filtro_producto").val().replace('[', '').replace(']', '').replace(/"/g, '');
                if (old_filtro_producto) {
                    $("#filtro_producto").val(old_filtro_producto.split(','));
                    $('#filtro_producto').trigger('change');
                }
                
                $("#filtro_segmento, #filtro_producto").change(function(){
                    var url = '{{ route("web.receta.index") }}';
                    jQuery.ajax({
                        url: url,
                        method: 'get',
                        data: {segmentoId: $("#filtro_segmento").val(), productoId: $("#filtro_producto").val()},
                        success: function(result){
                            $('#data').empty().html(result);
                        }
                    });
                });

            });
        </script>
    @endpush

@endsection
