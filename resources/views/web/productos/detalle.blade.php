@extends('layout.web')

@section('title', 'Nuestros productos')

@section('content')
    @push('extra-css')
    @endpush
    <div class="contenido">
        <div class="vista-previa-producto-receta">
            <div class="vista-previa">
                <div class="img-principal">
                    <img class="main_img" src="{{ asset('/web/imagenes/portada-productos-escritorio.svg') }}" alt="">
                </div>
        
                <div class="thumbnail_container">
                    <div class="active"><img class="thumbnail" src="{{ asset('/web/imagenes/portada-productos-escritorio.svg') }}" alt=""></div>
                    <div class=""><img class="thumbnail" src="{{ asset('/web/imagenes/portada-productos-escritorio.svg') }}" alt=""></div>
                    <div class=""><img class="thumbnail" src="{{ asset('/web/imagenes/portada-productos-escritorio.svg') }}" alt=""></div>
                    <div class=""><img class="thumbnail" src="{{ asset('/web/imagenes/portada-productos-escritorio.svg') }}" alt=""></div>

                </div>
            </div>
        </div>
    </div>
    
    @push('extra-js')
        <script>
            // Flex Slider
            $(document).ready(function(){
                $('.flexslider-seccion').flexslider({
                    animation: "slide",
                });
            });
        </script>
    @endpush

@endsection
