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
    <link rel="StyleSheet" href="{{ asset('/public/web/css/bootstrap.min.css') }}">

    <!-- Bootstrap Select css -->
    <link rel="StyleSheet" href="{{ asset('/public/web/js/bootstrap-select/bootstrap-select.css') }}">
    <link rel="StyleSheet" href="{{ asset('/public/web/css/animate.css') }}">
    <link rel="StyleSheet" href="{{ asset('/public/web/css/style.css') }}">

    {{-- Favicon --}}
    <link href="{{ asset('/public/favicon.ico') }}" rel="icon">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6MF3F4LGDF"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-6MF3F4LGDF');
    </script>

    @stack('extra-css')
</head>

<body>
    @include('layout.web_header')
    <!-- incluye el header -->
    @yield('content')
    @include('layout.web_footer')
    <!-- incluye el footer -->

    <!-- Scripts -->

    <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>
    <script src="{{ asset('/public/web/js/niceselect/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('/public/web/js/slick/slick.min.js') }}"></script>
    <script src="{{ asset('/public/web/js/fresco/fresco.min.js') }}"></script>
    <script src="{{ asset('/public/web/js/flexslider/jquery.flexslider.js') }}"></script>
    <script src="{{ asset('/public/web/js/product-viewer.js') }}"></script>
    <script src="{{ asset('/public/web/js/bootstrap.min.js') }}"></script>


    <script src="{{ asset('/public/web/js/script.js') }}"></script>
    <script>
        $('select').niceSelect();
    </script>

    <!-- Bootstrap Select -->
    <script src="{{ asset('/public/web/js/bootstrap-select/bootstrap-select.js') }}"></script>

    @stack('extra-js')

</body>

</html>
