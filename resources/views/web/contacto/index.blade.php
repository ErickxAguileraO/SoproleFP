@extends('layout.web')

@section('title', 'Contactanos')

@section('content')
    @push('extra-css')
    @endpush
    
    <div class="contenido">
       <section class="hazte-cliente">
            <h2>Contáctanos</h2>
            <form action="">
                <div class="form-row-2">
                    <div class="form-input-n">
                        <label for="">Teléfono</label>
                        <input type="text">
                    </div>

                    <div class="form-input-n">
                        <label for="">Correo</label>
                        <input type="email">
                    </div>
                    <div  class="form-input-n">
                        <label for="">Ingrese aquí su consulta</label>
                        <textarea name="" id=""></textarea>
                    </div>
                </div>
                <br>
                <div class="flex-boton">
                    <button>Enviar mensajeS</button>
                </div>
            </form>
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
    @endpush

@endsection
