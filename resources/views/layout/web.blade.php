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
    <script src="{{ asset('/web/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('/web/js/jquery-ui.js') }}"></script>

    <!-- Estilos -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/web/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/web/js/niceselect/nice-select.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/web/js/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/web/js/fresco/fresco.css') }}">

    @stack('extra-css')
</head>

<body>
    <header>Soy header</header>
    
    @yield('content')

    <footer>
        
    </footer>
    <!-- Scripts -->
    <script src="{{ asset('web/js/niceselect/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('web/js/slick/slick.min.js') }}"></script>
    <script src="{{ asset('web/js/fresco/fresco.min.js') }}"></script>
    
    <script src="{{ asset('web/js/script.js') }}"></script>
    <script>
        $('select').niceSelect();
    </script>
    
    @stack('extra-js')

</body>
</html>
