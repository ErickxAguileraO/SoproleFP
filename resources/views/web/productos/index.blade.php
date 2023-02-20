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
                <div>
                    <label for="">Segmento</label>
                    <select name="" id="">
                        <option value="">value 1</option>
                        <option value="">value 2</option>
                    </select>
                </div>

                <div>
                    <label for="">Categoría</label>
                    <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
                        <option value="">value 1</option>
                        <option value="">value 2</option>
                    </select>
                </div>

                <div>
                    <a href="" style="color: #1362B6;">Limpiar filtros</a>
                </div>
            </div>
            <br>
        </section>

        <section class="seccion-home seccion-listas">
            <div class="cuadros-info cuadros-row-4">
                <a href="/producto-detalle" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-1.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="/producto-detalle" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-2.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="/producto-detalle" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-1.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="/producto-detalle" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-2.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="/producto-detalle" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-1.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="/producto-detalle" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-2.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="/producto-detalle" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-1.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="/producto-detalle" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-2.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="/producto-detalle" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-1.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="/producto-detalle" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-2.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="/producto-detalle" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-1.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="/producto-detalle" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-2.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="/producto-detalle" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-1.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="/producto-detalle" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-2.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="/producto-detalle" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-1.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="/producto-detalle" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-2.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>
            </div>
        </section>
        <div class="numeros-pag">
            <a href="" class="numero-antes-despues"  style="margin-right: 35px">Anterior</a>
            <a href="" class="numero-antes-despues-movil"  style="margin-right: 35px"><img src="{{ asset('web/imagenes/i-antes.svg') }}" alt=""></a>
            <a href="" class="numero numero-seleccionado">1</a>
            <a href="" class="numero">2</a>
            <a href="" class="numero-antes-despues" style="margin-left: 35px">Siguiente</a>
            <a href="" class="numero-antes-despues-movil"  style="margin-left: 35px"><img src="{{ asset('web/imagenes/i-despues.svg') }}" alt=""></a>
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
        <script>
            $(document).ready(function() {
                $('.js-example-basic-multiple').select2();
            });
        </script>
    @endpush

@endsection
