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
            background-color: #13355D !important;
        }
        .list-group-light .active {
            background-color: #d1d9e6;
            font-weight: bold;
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
                                    <li><a class="dropdown-item" href="{{route('administracion.usuarios.editar.cuenta')}}"><i class="bi bi-person-fill"></i> Mi
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
                                    <p class="text-center bg-info text-white mb-0 rounded-top"></i>Home</p>
                                </div>
                                <div class="list-group list-group-light accordion-item">
                                    <a href="{{ route('administracion.slider.index') }}"
                                        class="list-group-item list-group-item-action px-5 border-0"
                                        style="padding-left: 2rem !important;">
                                        <i class="bi bi-card-image"></i>
                                        &nbsp;Slider
                                    </a>
                                </div>
                                <div class="list-group list-group-light accordion-item">
                                    <a href="{{ route('administracion.editable.index') }}"
                                        class="list-group-item list-group-item-action px-5 border-0"
                                        style="padding-left: 2rem !important;">
                                        <i class="bi bi-columns"></i>
                                        &nbsp;Editables
                                    </a>
                                </div>
                                <div class="list-group list-group-light accordion-item">
                                    <a href="{{ route('administracion.alianza.index') }}"
                                        class="list-group-item list-group-item-action px-5 border-0"
                                        style="padding-left: 2rem !important;">
                                        <i class="bi bi-people"></i>
                                        &nbsp;Alianzas
                                    </a>
                                </div>
                            </div>
                        </nav>
                        <nav id="sidebarMenu"
                            class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse sideBarMenuSecciones">
                            <div class="accordion my-3" id="accordionExampleY">
                                <div class="accordion-item">
                                    <p class="text-center bg-info text-white mb-0 rounded-top"></i>Productos</p>
                                </div>
                                <div class="list-group list-group-light accordion-item">
                                    <a href="{{ route('administracion.producto.index') }}"
                                        class="list-group-item list-group-item-action px-5 border-0"
                                        style="padding-left: 2rem !important;">
                                        <i class="bi bi-box-seam"></i>
                                        &nbsp;Productos
                                    </a>
                                </div>
                                <div class="list-group list-group-light accordion-item">
                                    <a href="{{ route('administracion.categoria.index') }}"
                                        class="list-group-item list-group-item-action px-5 border-0"
                                        style="padding-left: 2rem !important;">
                                        <i class="bi bi-columns"></i>
                                        &nbsp;Categorias
                                    </a>
                                </div>
                                <div class="list-group list-group-light accordion-item">
                                    <a href="{{ route('administracion.receta.index') }}"
                                        class="list-group-item list-group-item-action px-5 border-0"
                                        style="padding-left: 2rem !important;">
                                        <i class="bi bi-list-check"></i>
                                        &nbsp;Recetas
                                    </a>
                                </div>
                                <div class="list-group list-group-light accordion-item">
                                    <a href="{{ route('administracion.segmento.index') }}"
                                        class="list-group-item list-group-item-action px-5 border-0"
                                        style="padding-left: 2rem !important;">
                                        <i class="bi bi-columns-gap"></i>
                                        &nbsp;Segmentos
                                    </a>
                                </div>
                                <div class="list-group list-group-light accordion-item">
                                    <a href="{{ route('administracion.academia.index') }}"
                                        class="list-group-item list-group-item-action px-5 border-0"
                                        style="padding-left: 2rem !important;">
                                        <i class="bi bi-mortarboard"></i>
                                        &nbsp;Academia
                                    </a>
                                </div>
                            </div>
                        </nav>
                        <nav id="sidebarMenu"
                            class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse sideBarMenuSecciones">
                            <div class="accordion my-3" id="accordionExampleY">
                                <div class="accordion-item">
                                    <p class="text-center bg-info text-white mb-0 rounded-top"></i>Noticias</p>
                                </div>
                                <div class="list-group list-group-light accordion-item">
                                    <a href="{{ route('administracion.noticia.index') }}"
                                        class="list-group-item list-group-item-action px-5 border-0"
                                        style="padding-left: 2rem !important;">
                                        <i class="bi bi-newspaper"></i>
                                        &nbsp;Noticias
                                    </a>
                                </div>
                            </div>
                        </nav>
                        <nav id="sidebarMenu"
                            class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse sideBarMenuSecciones">
                            <div class="accordion my-3" id="accordionExampleY">
                                <div class="accordion-item">
                                    <p class="text-center bg-info text-white mb-0 rounded-top"></i>Formularios</p>
                                </div>


                                

                                <div class="list-group list-group-light accordion-item">
                                    <a href="{{ route('administracion.hazte.cliente.index') }}"
                                        class="list-group-item list-group-item-action px-5 border-0"
                                        style="padding-left: 2rem !important;">
                                        <i class="bi bi-person-check"></i>
                                        &nbsp;Hazte cliente
                                    </a>
                                </div>

                                <div class="list-group list-group-light accordion-item">
                                    <a href="{{ route('administracion.contacto.index') }}"
                                        class="list-group-item list-group-item-action px-5 border-0"
                                        style="padding-left: 2rem !important;">
                                        <i class="bi bi-person-lines-fill"></i>
                                        &nbsp;Contactos
                                    </a>
                                </div>
                            </div>
                        </nav>
                        <nav id="sidebarMenu"
                            class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse sideBarMenuSecciones">
                            <div class="accordion my-3" id="accordionExampleY">
                                <div class="accordion-item">
                                    <p class="text-center bg-info text-white mb-0 rounded-top"></i>Configuraciones</p>
                                </div>
                                <div class="list-group list-group-light accordion-item">
                                    <a href="{{ route('administracion.tipo.negocio.index') }}"
                                        class="list-group-item list-group-item-action px-5 border-0"
                                        style="padding-left: 2rem !important;">
                                        <i class="bi bi-ui-radios"></i>
                                        &nbsp;Tipo de negocios
                                    </a>
                                </div>
                                <div class="list-group list-group-light accordion-item">
                                    <a href="{{ route('administracion.cliente.index') }}"
                                        class="list-group-item list-group-item-action px-5 border-0"
                                        style="padding-left: 2rem !important;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-person-vcard" viewBox="0 0 16 16">
                                            <path
                                                d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5ZM9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8Zm1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Z" />
                                            <path
                                                d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96c.026-.163.04-.33.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1.006 1.006 0 0 1 1 12V4Z" />
                                        </svg>
                                        &nbsp;Clientes
                                    </a>
                                </div>
                                <div class="list-group list-group-light accordion-item">
                                    <a href="{{ route('administracion.local.index') }}"
                                        class="list-group-item list-group-item-action px-5 border-0"
                                        style="padding-left: 2rem !important;">
                                        <i class="bi bi-shop"></i>
                                        &nbsp;Locales
                                    </a>
                                </div>
                                <div class="list-group list-group-light accordion-item">
                                    <a href="{{ route('administracion.usuarios.index') }}"
                                        class="list-group-item list-group-item-action px-5 border-0"
                                        style="padding-left: 2rem !important;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-person-gear" viewBox="0 0 16 16">
                                            <path
                                                d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm.256 7a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Zm3.63-4.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
                                        </svg>
                                        &nbsp;Usuarios
                                    </a>
                                </div>
                                <div class="list-group list-group-light accordion-item">
                                    <a href="{{ route('administracion.configuracion.index') }}"
                                        class="list-group-item list-group-item-action px-5 border-0"
                                        style="padding-left: 2rem !important;">
                                        <i class="bi bi-gear-wide-connected"></i>
                                        &nbsp;Configuracion General
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
            if (this.href.substring(this.href.lastIndexOf('/') + 1) == "{{ Request::segment(2) }}") {
                $(this).addClass('active')
                $(this).parent().parent().parent().parent().children().children().click()
            }
        });
    </script>

    <!-- Configuración global alertify -->
    <script src="{{ asset('public/js/configuracion_global_alertify.js') }}"></script>
    <style>
          .nice-select .list {
        overflow-y: scroll !important;
        max-height: 400px !important;
    }
    </style>
    @stack('extra-js')
</body>

</html>
