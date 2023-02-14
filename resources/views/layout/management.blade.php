<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soprole | @yield('title')</title>

    @stack('extra-css')

    <!-- Favi icon -->
    <link href="{{ asset('public/favsoprolechile.png') }}" rel="icon">
    <!-- Icons Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Alertifyjs -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/management/css/style.css') }}">
    <!-- Devexpress -->
    <link rel="stylesheet" type="text/css" href="https://cdn3.devexpress.com/jslib/21.2.4/css/dx.light.css" />
    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap"
        rel="stylesheet">
    {{-- Nice Select --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/web/js/niceselect/nice-select.css') }}">
    {{-- FontAwesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <style>
        .bg-info {
            background-color: #386bc0 !important;
        }
    </style>
</head>

<body>
    <div id="spinner-div" class="pt-5">
        <div class="spinner-border text-danger" role="status">
        </div>
    </div>
    <div id="wrapper">
        @if (!isset($header))
            <div class="container-fluid">
                <!-- NAVBAR -->
                <div class="row navbar-row">
                    <div class="col">
                        <nav class="navbar navbar-dark fixed-top flex-md-nowrap shadow">
                            <figure class="navbar-brand">
                                <a href="{{ route('administracion.index') }}">
                                    <h1 class="display-6 mx-3 mt-3 text-uppercase">
                                        <img src="{{ asset('/public/web/imagenes/logo-soprole.png') }}" alt=""
                                            style="width: 100px;padding: 0px 0px 0px 25px;">
                                    </h1>
                                </a>
                            </figure>
                            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button"
                                data-toggle="collapse" data-target="#sidebarMenu" aria-controls="navbarCollapse"
                                aria-expanded="false" aria-label="Toggle navigation"> <span
                                    class="navbar-toggler-icon"></span> </button>

                            <div class="dropdown dropdown-dashboard">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </button>
                                <ul class="dropdown-menu dropdown-menu-admin" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href=""><i class="bi bi-person-fill"></i> Mi
                                            cuenta</a></li>
                                    <li><a class="dropdown-item" id="logoutLink"><i class="bi bi-box-arrow-left"></i>
                                            Cerrar sesión</a></li>
                                    <form action="{{ route('logout') }}" method="POST" id="logoutForm" class="oculto">
                                        @csrf</form>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-2">
                        <nav id="sidebarMenu"
                            class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse sideBarMenuSecciones">
                            <div class="accordion my-3" id="accordionExampleY">
                                <div class="accordion-item">
                                    <p class="text-center bg-info text-white mb-0 rounded-top"><i
                                            class="bi bi-house-door"></i>&nbsp;&nbsp;&nbsp;Home</p>
                                </div>
                                <div class="list-group list-group-light accordion-item">
                                    <a href="{{ route('administracion.slider.index') }}"
                                        class="list-group-item list-group-item-action px-5 border-0"
                                        style="padding-left: 2rem !important;">
                                        <i class="bi bi-caret-right"></i>
                                        &nbsp;Slider
                                    </a>
                                </div>
                                <div class="list-group list-group-light accordion-item">
                                    <a href="{{ route('administracion.editable.index') }}"
                                        class="list-group-item list-group-item-action px-5 border-0"
                                        style="padding-left: 2rem !important;">
                                        <i class="bi bi-caret-right"></i>
                                        &nbsp;Editables
                                    </a>
                                </div>
                                <div class="list-group list-group-light accordion-item">
                                    <a href="{{ route('administracion.alianza.index') }}"
                                        class="list-group-item list-group-item-action px-5 border-0"
                                        style="padding-left: 2rem !important;">
                                        <i class="bi bi-caret-right"></i>
                                        &nbsp;Alianzas
                                    </a>
                                </div>
                            </div>
                        </nav>
                        <nav id="sidebarMenu"
                            class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse sideBarMenuSecciones">
                            <div class="accordion my-3" id="accordionExampleY">
                                <div class="accordion-item">
                                    <p class="text-center bg-info text-white mb-0 rounded-top"><i
                                            class="bi bi-box-seam"></i>&nbsp;&nbsp;&nbsp;Productos</p>
                                </div>
                                <div class="list-group list-group-light accordion-item">
                                    <a href="{{route('administracion.producto.index')}}" class="list-group-item list-group-item-action px-5 border-0"
                                        style="padding-left: 2rem !important;">
                                        <i class="bi bi-caret-right"></i>
                                        &nbsp;Productos
                                    </a>
                                </div>
                                <div class="list-group list-group-light accordion-item">
                                    <a href="{{route('administracion.categoria.index')}}" class="list-group-item list-group-item-action px-5 border-0"
                                        style="padding-left: 2rem !important;">
                                        <i class="bi bi-caret-right"></i>
                                        &nbsp;Categorias
                                    </a>
                                </div>
                                <div class="list-group list-group-light accordion-item">
                                    <a href="{{ route("administracion.receta.index")}}" class="list-group-item list-group-item-action px-5 border-0"
                                        style="padding-left: 2rem !important;">
                                        <i class="bi bi-caret-right"></i>
                                        &nbsp;Recetas
                                    </a>
                                </div>
                                <div class="list-group list-group-light accordion-item">
                                    <a href="{{route('administracion.segmento.index')}}" class="list-group-item list-group-item-action px-5 border-0"
                                        style="padding-left: 2rem !important;">
                                        <i class="bi bi-caret-right"></i>
                                        &nbsp;Segmentos
                                    </a>
                                </div>
                                <div class="list-group list-group-light accordion-item">
                                    <a href="{{route('administracion.academia.index')}}" class="list-group-item list-group-item-action px-5 border-0"
                                        style="padding-left: 2rem !important;">
                                        <i class="bi bi-caret-right"></i>
                                        &nbsp;Academia
                                    </a>
                                </div>
                            </div>
                        </nav>
                        <nav id="sidebarMenu"
                            class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse sideBarMenuSecciones">
                            <div class="accordion my-3" id="accordionExampleY">
                                <div class="accordion-item">
                                    <p class="text-center bg-info text-white mb-0 rounded-top"><i
                                            class="bi bi-newspaper"></i>&nbsp;&nbsp;&nbsp;Noticias</p>
                                </div>
                                <div class="list-group list-group-light accordion-item">
                                    <a href="{{ route('administracion.noticia.index') }}" class="list-group-item list-group-item-action px-5 border-0"
                                        style="padding-left: 2rem !important;">
                                        <i class="bi bi-caret-right"></i>
                                        &nbsp;Noticias
                                    </a>
                                </div>
                            </div>
                        </nav>
                        <nav id="sidebarMenu"
                            class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse sideBarMenuSecciones">
                            <div class="accordion my-3" id="accordionExampleY">
                                <div class="accordion-item">
                                    <p class="text-center bg-info text-white mb-0 rounded-top"><i
                                            class="bi bi-person-lines-fill"></i>&nbsp;&nbsp;&nbsp;Formularios</p>
                                </div>
                            
                                <div class="list-group list-group-light accordion-item">
                                    <a href="{{route('administracion.contacto.index')}}" class="list-group-item list-group-item-action px-5 border-0"
                                        style="padding-left: 2rem !important;">
                                        <i class="bi bi-caret-right"></i>
                                        &nbsp;Contactos
                                    </a>
                                </div>
                            </div>
                        </nav>
                        <nav id="sidebarMenu"
                            class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse sideBarMenuSecciones">
                            <div class="accordion my-3" id="accordionExampleY">
                                <div class="accordion-item">
                                    <p class="text-center bg-info text-white mb-0 rounded-top"><i
                                            class="bi bi-gear-wide-connected"></i>&nbsp;&nbsp;&nbsp;Configuración</p>
                                </div>
                                <div class="list-group list-group-light accordion-item">
                                    <a href="{{ route('administracion.tipo.negocio.index') }}" class="list-group-item list-group-item-action px-5 border-0"
                                        style="padding-left: 2rem !important;">
                                        <i class="bi bi-caret-right"></i>
                                        &nbsp;Tipo de negocios
                                    </a>
                                </div>
                                <div class="list-group list-group-light accordion-item">
                                    <a href="{{route('administracion.subsegmento.index')}}" class="list-group-item list-group-item-action px-5 border-0"
                                        style="padding-left: 2rem !important;">
                                        <i class="bi bi-caret-right"></i>
                                        &nbsp;Sub-segmentos
                                    </a>
                                </div>
                                <div class="list-group list-group-light accordion-item">
                                    <a href="{{route('administracion.cliente.index')}}" class="list-group-item list-group-item-action px-5 border-0"
                                        style="padding-left: 2rem !important;">
                                        <i class="bi bi-caret-right"></i>
                                        &nbsp;Clientes
                                    </a>
                                </div>
                                <div class="list-group list-group-light accordion-item">
                                    <a href="{{ route('administracion.usuarios.index') }}"
                                        class="list-group-item list-group-item-action px-5 border-0"
                                        style="padding-left: 2rem !important;">
                                        <i class="bi bi-caret-right"></i>
                                        &nbsp;Usuarios
                                    </a>
                                </div>

                            </div>
                        </nav>
                    </div>


                    <div class="col-10">
                        @yield('content')
                    </div>
                </div>
            </div>
        @else
            <div class="container my-4">
                @yield('content')
            </div>
        @endif
    </div>

    <!-- Alertifyjs -->
    <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- Jquery-->
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <!-- Devexpress -->
    <script type="text/javascript" src="https://cdn3.devexpress.com/jslib/22.1.6/js/dx.all.js"></script>
    <!-- Select2 -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>
    <!-- Ckeditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.1/classic/ckeditor.js"></script>
    {{-- Select --}}
    <script src="{{ asset('/public/web/js/niceselect/jquery.nice-select.min.js') }}"></script>
    {{-- MOMENTJS --}}
    <script src="{{ asset('/public/management/js/moment.js') }}"></script>

    <script>
        $('select').niceSelect();
    </script>

    <!-- Script -->
    <script src="{{ asset('/public/management/js/app.js') }}"></script>
    <script src="{{ asset('/public/management/js/header.js') }}"></script>
    <script>
        $('.container-fluid').find('.list-group-item').each(function(indice, elemento) {
            if ($(this).attr('href') == window.location.href || $(this).attr('href') == window.location.pathname) {
                $(this).addClass('active')
                $(this).parent().parent().parent().parent().children().children().click()
            }
        });
    </script>

    <!-- Configuración global alertify -->
    <script src="{{ asset('public/js/configuracion_global_alertify.js') }}"></script>

    @stack('extra-js')
</body>

</html>
