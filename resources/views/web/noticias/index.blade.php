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
                    @if (isset($item->imagenes[0]->ino_imagen))
                        <li style=" z-index:0; opacity: 1;" class="li-slider">
                            <img class="ocultar-movil" style="max-height: 360px;" src="{{ asset($item->imagenes[0]->ino_imagen) }}" alt="">
                            <img class="ocultar-escritorio" style="max-height: 360px;" src="{{ asset($item->imagenes[0]->ino_imagen) }}" alt="">
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
                    <a href="" style="color: #1362B6;">Limpiar filtros</a>
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

                var select = $("#filtro_segmento")[0];
                var values = "";
                Array.prototype.forEach.call(select.options, function(option, index) {
                    url_string = decodeURI(window.location.href);
                    url = new URL(url_string);
                    options = url.searchParams.getAll("segmentoId["+index+"]");
                    if ($("#old_filtro_segmento").val().includes('"'+options[0]+'"')) {
                        values = values + ',' + options[0];
                        $("#filtro_segmento").val(values.split(','));
                        $('#filtro_segmento').trigger('change');
                    }
                });
                

                $("#filtro_segmento").change(function(){
                    var url = '{{ route("webnoticia.index") }}';
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
