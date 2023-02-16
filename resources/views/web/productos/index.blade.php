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
            <div class="encabezado-titulo-btn">
                <h2>Pastelería</h2>
                <div>
                    <a href="" class="boton bg-blue ocultar-movil">Ver todo pastelería</a>
                    <a href="" class="boton bg-blue ocultar-escritorio">Ver todos</a>
                </div>
            </div>
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
            </div>
        </section>

        <section class="seccion-home seccion-listas">
            <div class="encabezado-titulo-btn">
                <h2>Comida Italiana</h2>
                <div>
                    <a href="" class="boton bg-blue ocultar-movil">Ver todo comida italiana</a>
                    <a href="" class="boton bg-blue ocultar-escritorio">Ver todos</a>
                </div>
            </div>
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
            </div>
        </section>

        <section class="seccion-home seccion-listas">
            <div class="encabezado-titulo-btn">
                <h2>Comida Rápida</h2>
                <div>
                    <a href="" class="boton bg-blue ocultar-movil">Ver todo comida rapida</a>
                    <a href="" class="boton bg-blue ocultar-escritorio">Ver todos</a>
                </div>
            </div>
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
            </div>
        </section>

        <section class="seccion-home seccion-listas">
            <div class="encabezado-titulo-btn">
                <h2>Cafetería</h2>
                <div>
                    <a href="" class="boton bg-blue ocultar-movil">Ver todo cafetería</a>
                    <a href="" class="boton bg-blue ocultar-escritorio">Ver todos</a>
                </div>
            </div>
            <div class="cuadros-info cuadros-row-4">
                <a href="/producto-detalle" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-1.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>
            </div>
        </section>

        <section class="seccion-home seccion-listas">
            <div class="encabezado-titulo-btn">
                <h2>Servicios de alimentación</h2>
                <div>
                    <a href="" class="boton bg-blue ocultar-movil">Ver todo servicios de alimentación</a>
                    <a href="" class="boton bg-blue ocultar-escritorio">Ver todos</a>
                </div>
            </div>
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
            </div>
        </section>
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
