@extends('layout.web')

@section('title', 'Noticias y tendencias')

@section('content')
    @push('extra-css')
    <style>
        .seccion-home {
            padding-top: 0px;
        }
    </style>
    @endpush
    <div class="contenido" id="todito">
        <div class="flexslider-seccion">
            <ul class="slides">

                @foreach ($ultimasnoticias as $item)
                    @if (isset($item->not_slider))
                        <li style=" z-index:0; opacity: 1;" class="li-slider">
                            <a href="{{route('web.noticia.detalle', $item->not_id).'-'.$item->not_url}}">
                                <img class="ocultar-movil" src="{{ asset($item->not_slider) }}" alt="">
                                <img class="ocultar-escritorio" src="{{ asset($item->not_slider) }}" alt="">
                            </a>
                        </li>
                    @endif
                @endforeach
    
                {{-- <li style=" z-index:0; opacity: 1;" class="li-slider">
                    <img class="ocultar-movil" src="{{ asset('/public/web/imagenes/portada-noticias-escritorio.svg') }}" alt="">
                    <img class="ocultar-escritorio" src="{{ asset('/public/web/imagenes/portada-noticias-movil.svg') }}" alt="">
                </li> --}}
            </ul>
        </div>
        <br>
        <br>
        <section class="filtros">
            <div class="select-filtros" style="margin-bottom: 50px;">
                <div class="ocultar-nice-select div-filtro">
                    <label for="">Segmento</label>
                    <select class="selectpicker" multiple title="Seleccione segmento" data-live-search="true" name="filtro_segmento" id="filtro_segmento">
                        @foreach ($segmentos as $item)
                            <option value="{{$item->seg_id}}">{{$item->seg_nombre}}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="div-filtro">
                    <a href="{{route('web.noticia.index')}}" style="color: #1362B6;">Limpiar filtros</a>
                </div>
            </div>
        </section>

        <section class="seccion-home">
            <section class="data" id="data">
                @include('web.noticias.data')
            </section>
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

                $("#filtro_segmento").change(function(){
                    var url = '{{ route("web.noticia.index") }}';
                    jQuery.ajax({
                        url: url,
                        method: 'get',
                        data: {segmentoId: $("#filtro_segmento").val()},
                        success: function(result){
                            $('#data').empty().html(result);
                        }
                    });
                });

            });
        </script>
    @endpush

@endsection
