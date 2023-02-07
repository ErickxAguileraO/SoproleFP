@extends('layout.web')

@section('title', 'Políticas de privacidad')

@section('content')
    @push('extra-css')
    @endpush
    <div class="flex-ventana-locales">
        <div class="ventana-locales">
            <div class="encabezado-ventana">
                <h6>Si no tienes iniciación de actividades, adquiere nuestros productos  en:</h6>
                <img class="cerrar-ventana-ubicacion" src="{{ asset('/web/imagenes/x-black.svg') }}" alt="">
            </div>
            <div class="contenido-ventana-ubicacion">
                <form action="" class="form-row-2">
                    <div class="form-input-n">
                        <label for="">Región</label>
                        <select name="" id="">
                            <option value="">Seleccione una opción</option>
                        </select>
                    </div>

                    <div class="form-input-n">
                        <label for="">Comuna</label>
                        <select name="" id="">
                            <option value="">Seleccione una opción</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div class="contenido">
       <section class="hazte-cliente">
            <h2>Hazte cliente</h2>
            <p>Si tienes iniciación de actividades, y quieres que te atendamos de forma directa, llena los siguientes datos</p>
            <form action="">
                <h6>Datos iniciales</h6>
                <div class="form-row-3">
                    <div class="form-input-n">
                        <label for="">¿Tienes iniciación de actividades?</label>
                        <select name="" id="iniciacion-actividades">
                            <option value="">Seleccione una opción</option>
                            <option value="">Si</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <div class="form-input-n">
                        <label for="">Razón social</label>
                        <input type="text">
                    </div>

                    <div class="form-input-n">
                        <label for="">RUT del negocio</label>
                        <input type="text">
                    </div>

                    <div class="form-input-n">
                        <label for="">Tipo de negocio</label>
                        <select name="" id="">
                            <option value="">value 1</option>
                        </select>
                    </div>

                    <div class="form-input-n">
                        <label for="">¿Cuál?</label>
                        <input type="text">
                    </div>
                </div>
                <br>
                <br>
                <h6>Dirección</h6>
                <div class="form-row-4">
                    <div class="form-input-n">
                        <label for="">Calle del negocio</label>
                        <input type="text">
                    </div>

                    <div class="form-input-n">
                        <label for="">Número (casa, local, etc)</label>
                        <input type="text">
                    </div>

                    <div class="form-input-n">
                        <label for="">Región</label>
                        <select name="" id="">
                            <option value="">value 1</option>
                        </select>
                    </div>

                    <div class="form-input-n">
                        <label for="">Comuna</label>
                        <select name="" id="">
                            <option value="">value 1</option>
                        </select>
                    </div>
                </div>
                <br>
                <br>
                <h6>Datos iniciales</h6>
                <div class="form-row-3">
                    <div class="form-input-n">
                        <label for="">Nombre del contacto</label>
                        <input type="text">
                    </div>

                    <div class="form-input-n">
                        <label for="">Teléfono</label>
                        <input type="text">
                    </div>

                    <div class="form-input-n">
                        <label for="">Correo</label>
                        <input type="email">
                    </div>
                </div>
                <br>
                <div class="flex-boton">
                    <button>Enviar solicitud</button>
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
