@extends('layout.web')

@section('title', 'Academia')

@section('content')
    @push('extra-css')
    @endpush
    <div class="portada">
        <img class="ocultar-movil" src="{{ asset('/public/web/imagenes/banners/portada_academia.png') }}" alt="">
        <img class="ocultar-escritorio" src="{{ asset('/public/web/imagenes/portada-academia-movil.svg') }}" alt="">
    </div>
    <div class="contenido"> 
        <section class="filtros">
            <div class="select-filtros">
                <div class="ocultar-nice-select div-filtro">
                    <label for="">Segmento</label>
                    <select class="selectpicker" multiple title="Seleccione segmento" data-live-search="true" name="filtro_segmento" id="filtro_segmento">
                        @foreach ($segmentos as $item)
                            <option value="{{$item->seg_id}}">{{$item->seg_nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="div-filtro">
                    <a href="{{route('web.academia.index')}}" style="color: #1362B6;">Limpiar filtros</a>
                </div>
            </div>
        </section>

        <section class="data seccion-home" id="data">
            @include('web.academia.data')
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
                    var url = '{{ route("web.academia.index") }}';
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
