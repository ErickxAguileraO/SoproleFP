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
                </div>
                <div class="menu-op">
                    <a href="/conocenos">Conócenos</a>
                    <a href="/academia">Academia</a>
                    <a href="/productos">Productos</a>
                    <a href="/nuestras-recetas">Recetas</a>
                    <a href="/noticias-tendencias">Noticias y tendencias</a>
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
