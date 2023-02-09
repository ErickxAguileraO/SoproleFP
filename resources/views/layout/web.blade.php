<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Metas -->
    <meta name="author" content="Magotteaux">
    <meta name="title" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!-- Title -->
    <title>Soprole FP | @yield('title')</title>
    <!-- Jquery-->
    <script src="{{ asset('/public/web/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('/public/web/js/jquery-ui.js') }}"></script>

    <!-- Estilos -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/web/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/web/js/niceselect/nice-select.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/web/js/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/web/js/flexslider/flexslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/web/js/fresco/fresco.css') }}">

    @stack('extra-css')
</head>

<body>
    <header>
        {{-- Menu escritorio --}}
        <div class="flex-menu">
            <div class="menu">
                <div class="rrss-header">
                    <a href=""><img src="{{ asset('/public/web/imagenes/i-insta-azul.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/public/web/imagenes/i-facebook-azul.svg') }}" alt=""></a>
                    <a href="https://www.soprole.cl/" target="_blank"><img src="{{ asset('/public/web/imagenes/i-soprole.svg') }}" alt=""></a>

                </div>
                <div class="menu-op">
                    <div class="dropdown">
                        <a href="/conocenos" class="dropbtn">Conócenos</a> 
                    </div>
                    
                    <div class="dropdown">
                        <a href="/academia" class="dropbtn">Academia</a> 
                    </div>

                    <div class="dropdown">
                        <a class="dropbtn">Productos</a> 
                        <div class="dropdown-content">
                            <div class="contenido-drop">
                               <div>
                                    <div class="titulo-drop">
                                        <h5>Segmentos</h5>
                                        <a href="/productos" class="boton-ver-op bg-red">Ver mas</a>
                                    </div>
                                    <div class="opcion-drop-n btn-color-panaderia">
                                        <img style="width: 36px;" src="{{ asset('/public/web/imagenes/i-pasteleria.svg') }}" alt="">
                                        <p class="color-panaderia">Pastelería</p>
                                        <img src="{{ asset('/public/web/imagenes/i-flecha-deracha-1.svg') }}" alt="">
                                        <div class="sub-content-drop">
                                            <div class="titulo-drop">
                                                <h5>Productos</h5>
                                                <a href="/" class="boton-ver-op bg-red">Ver mas</a>
                                            </div>
                                            <a href="/producto-detalle" class="link-op color-panaderia">Producto 1</a>
                                            <a href="/producto-detalle" class="link-op color-panaderia">Producto 2</a>
                                            <a href="/producto-detalle" class="link-op color-panaderia">Producto 3</a>
                                            <a href="/producto-detalle" class="link-op color-panaderia">Producto 4</a>
                                            <a href="/producto-detalle" class="link-op color-panaderia">Producto 5</a>
                                        </div>
                                    </div>

                                    <div class="opcion-drop-n btn-color-italiana">
                                        <img style="width: 36px;" src="{{ asset('/public/web/imagenes/i-citaliana.svg') }}" alt="">
                                        <p class="color-italiana">Comida Italiana</p>
                                        <img src="{{ asset('/public/web/imagenes/i-flecha-deracha-1.svg') }}" alt="">
                                        <div class="sub-content-drop">
                                            <div class="titulo-drop">
                                                <h5>Productos</h5>
                                                <a href="/" class="boton-ver-op bg-red">Ver mas</a>
                                            </div>
                                            <a href="/producto-detalle" class="link-op color-italiana">Producto 1</a>
                                            <a href="/producto-detalle" class="link-op color-italiana">Producto 2</a>
                                            <a href="/producto-detalle" class="link-op color-italiana">Producto 3</a>
                                            <a href="/producto-detalle" class="link-op color-italiana">Producto 4</a>
                                        </div>
                                    </div>

                                    <div class="opcion-drop-n btn-color-rapida">
                                        <img style="width: 36px;" src="{{ asset('/public/web/imagenes/i-crapida.svg') }}" alt="">
                                        <p class="color-rapida">Comida Rápida</p>
                                        <img src="{{ asset('/public/web/imagenes/i-flecha-deracha-1.svg') }}" alt="">
                                        <div class="sub-content-drop">
                                            <div class="titulo-drop">
                                                <h5>Productos</h5>
                                                <a href="/" class="boton-ver-op bg-red">Ver mas</a>
                                            </div>
                                            <a href="/producto-detalle" class="link-op color-rapida">Producto 1</a>
                                            <a href="/producto-detalle" class="link-op color-rapida">Producto 2</a>
                                            <a href="/producto-detalle" class="link-op color-rapida">Producto 3</a>
                                            <a href="/producto-detalle" class="link-op color-rapida">Producto 4</a>
                                            <a href="/producto-detalle" class="link-op color-rapida">Producto 5</a>
                                        </div>
                                    </div>

                                    <div class="opcion-drop-n btn-color-cafeteria">
                                        <img style="width: 36px;" src="{{ asset('/public/web/imagenes/i-cafeteria.svg') }}" alt="">
                                        <p class="color-cafeteria">Cafetería</p>
                                        <img src="{{ asset('/public/web/imagenes/i-flecha-deracha-1.svg') }}" alt="">
                                        <div class="sub-content-drop">
                                            <div class="titulo-drop">
                                                <h5>Productos</h5>
                                                <a href="/" class="boton-ver-op bg-red">Ver mas</a>
                                            </div>
                                            <a href="/producto-detalle" class="link-op color-cafeteria">Producto 1</a>
                                            <a href="/producto-detalle" class="link-op color-cafeteria">Producto 2</a>
                                            <a href="/producto-detalle" class="link-op color-cafeteria">Producto 3</a>
                                        </div>
                                    </div>

                                    <div class="opcion-drop-n btn-color-servicios">
                                        <img style="width: 36px;" src="{{ asset('/public/web/imagenes/i-salimentacion.svg') }}" alt="">
                                        <p class="color-servicios">Servicios de alimentación</p>
                                        <img src="{{ asset('/public/web/imagenes/i-flecha-deracha-1.svg') }}" alt="">
                                        <div class="sub-content-drop">
                                            <div class="titulo-drop">
                                                <h5>Productos</h5>
                                                <a href="/" class="boton-ver-op bg-red">Ver mas</a>
                                            </div>
                                            <a href="/producto-detalle" class="link-op color-servicios">Producto 1</a>
                                            <a href="/producto-detalle" class="link-op color-servicios">Producto 2</a>
                                            <a href="/producto-detalle" class="link-op color-servicios">Producto 3</a>
                                            <a href="/producto-detalle" class="link-op color-servicios">Producto 4</a>
                                        </div>
                                    </div>
                               </div>
                               <div class="linea-op-drop"></div>
                               <div></div>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown">
                        <a href="/nuestras-recetas" class="dropbtn">Recetas</a> 
                    </div>

                    <div class="dropdown dropdown-noticias ">
                        <a class="dropbtn">Noticias y tendencias</a> 
                        <div class="dropdown-content dropdown-content-noticias">
                            <div class="contenido-drop contenido-drop-noticias">
                               <div>
                                    <div class="titulo-drop">
                                        <h5>Noticias y tendencias</h5>
                                        <a href="/productos" class="boton-ver-op bg-red">Ver mas</a>
                                    </div>
                                    <div class="opcion-drop-n btn-color-panaderia">
                                        <img style="width: 36px;" src="{{ asset('/public/web/imagenes/i-pasteleria.svg') }}" alt="">
                                        <p class="color-panaderia">Pastelería</p>
                                    </div>

                                    <div class="opcion-drop-n btn-color-italiana">
                                        <img style="width: 36px;" src="{{ asset('/public/web/imagenes/i-citaliana.svg') }}" alt="">
                                        <p class="color-italiana">Comida Italiana</p>
                                    </div>

                                    <div class="opcion-drop-n btn-color-rapida">
                                        <img style="width: 36px;" src="{{ asset('/public/web/imagenes/i-crapida.svg') }}" alt="">
                                        <p class="color-rapida">Comida Rápida</p>
                                    </div>

                                    <div class="opcion-drop-n btn-color-cafeteria">
                                        <img style="width: 36px;" src="{{ asset('/public/web/imagenes/i-cafeteria.svg') }}" alt="">
                                        <p class="color-cafeteria">Cafetería</p>
                                    </div>

                                    <div class="opcion-drop-n btn-color-servicios">
                                        <img style="width: 36px;" src="{{ asset('/public/web/imagenes/i-salimentacion.svg') }}" alt="">
                                        <p class="color-servicios">Servicios de alimentación</p>
                                    </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="botones-header">
                    <a href="" class="tienda">
                        <img src="{{ asset('/public/web/imagenes/i-carro.svg') }}" alt="">
                        <p>Ir a la tienda</p>
                    </a>
                    <a href="/hazte-cliente" class="cliente">
                        <img src="{{ asset('/public/web/imagenes/i-user.svg') }}" alt="">
                        <p>Hazte cliente</p>
                    </a>
                </div>
            </div>

            <div class="logo-txt">
                <a href="/"><img src="{{ asset('/public/web/imagenes/logo.svg') }}" alt=""></a>
                <div><h2>Apasionados por el desarrollo de tu negocio gastronómico</h2></div>
            </div>
        </div>
        {{-- Menu movil --}}
        <div class="flex-bar-menu-movil">
            <div class="bar-menu-movil">
                <a href="/"><img width="130px" src="{{ asset('/public/web/imagenes/logo.svg') }}" alt=""></a>
                <div><img src="{{ asset('/public/web/imagenes/i-bar.svg') }}" alt=""></div>
            </div>
        </div>
       
    </header>
    
    @yield('content')

    <footer>
        <div class="linea-footer">
        </div>
        
        <div class="contenido-footer">
            <div class="logo-footer">
                <a href="/"><img src="{{ asset('/public/web/imagenes/logo.svg') }}" alt=""></a>
                <div>
                    <img src="{{ asset('/public/web/imagenes/i-correo.svg') }}" alt="">   
                    <a href="">soproleFP@soprole.cl</a>
                </div>
                <div>
                    <img src="{{ asset('/public/web/imagenes/i-telefono.svg') }}" alt="">
                    <h3>600 600 6600</h3>
                </div>
            </div>
            <div class="linea-columna"></div>
            <div class="menu-footer-1">
                <a href="">Pastelería</a>
                <a href="">Cocina Italiana</a>
                <a href="">Comida Rápida</a>
                <a href="">Cafetería</a>
                <a href="">Servicios de alimentación</a>
            </div>
            <div class="linea-columna"></div>
            <div class="menu-footer-2">
                <a href="/contacto">Contáctenos</a>
                <a href="/academia">Academia</a>
                <a href="/productos">Productos</a>
                <a href="/nuestras-recetas">Recetas</a>
                <a href="/noticias-tendencias">Tendencias y noticias</a>
                <a href="/hazte-cliente">Hazte cliente</a>
                <a href="">Ir a la tienda</a>
            </div>
            <div class="rrss-footer">
                <div>
                    <p>Encuéntranos en redes sociales</p>
                    <div class="logos-rrrss-footer">
                        <a href=""><img src="{{ asset('/public/web/imagenes/i-insta-azul.svg') }}" alt=""></a>
                        <a href=""><img src="{{ asset('/public/web/imagenes/i-facebook-azul.svg') }}" alt=""></a>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="sub-footer">
            <p>©2023 Fonterra Co-operative Group</p>
            <div class="linea-footer-2"></div>
            <div>
                <a href="/politicas-de-privacidad">Políticas de privacidad</a>
                <p>|</p>
                <a href="/informacion-consumidor">Información del Consumidor</a>
                <p>|</p>
                <a href="/terminos-condiciones">Términos y Condiciones</a>
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="{{ asset('/public/web/js/niceselect/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('/public/web/js/slick/slick.min.js') }}"></script>
    <script src="{{ asset('/public/web/js/fresco/fresco.min.js') }}"></script>
    <script src="{{ asset('/public/web/js/flexslider/jquery.flexslider.js') }}"></script>
    <script src="{{ asset('/public/web/js/product-viewer.js') }}"></script>

    <script src="{{ asset('/public/web/js/script.js') }}"></script>
    <script>
        $('select').niceSelect();
    </script>
    
    @stack('extra-js')

</body>
</html>
