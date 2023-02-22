@extends('layout.web')

@section('title', 'Hazte cliente')

@section('content')

    @include('web.cliente.spinner')


    <!-- <div class="flex-ventana-locales">
                        <div class="ventana-locales">
                            <div class="encabezado-ventana">
                                <h6>Si no tienes iniciación de actividades, adquiere nuestros productos en:</h6>
                                <img class="cerrar-ventana-ubicacion" src="{{ asset('/public/web/imagenes/x-black.svg') }}" alt="">
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
                                <div class="ubicaciones">

                                    <div class="ubicacion-n">
                                        <div class="drop-down">
                                            <p>Supermercado Mayorista 10, Los Ángeles</p>
                                            <img src="{{ asset('/public/web/imagenes/i-flecha-abajo.svg') }}" alt="">
                                        </div>
                                        <div class="ocultar-acordeon">
                                            <div class="grid-ocultar-acordeon">
                                                <div>
                                                    <span>Dirección</span>
                                                    <p>Calle 1, Local 2</p>
                                                </div>

                                                <div>
                                                    <span>Horario</span>
                                                    <p>09:00 a 21:00 hrs</p>
                                                </div>

                                                <div>
                                                    <span>Contacto</span>
                                                    <p>Pepito Gutiérrez</p>
                                                </div>

                                                <div>
                                                    <span>Teléfono</span>
                                                    <p>+56 9 1122 3344</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="ubicacion-n">
                                        <div class="drop-down">
                                            <p>Supermercado Mayorista 10, Los Ángeles</p>
                                            <img src="{{ asset('/public/web/imagenes/i-flecha-abajo.svg') }}" alt="">
                                        </div>
                                        <div class="ocultar-acordeon">
                                            <div class="grid-ocultar-acordeon">
                                                <div>
                                                    <span>Dirección</span>
                                                    <p>Calle 1, Local 2</p>
                                                </div>

                                                <div>
                                                    <span>Horario</span>
                                                    <p>09:00 a 21:00 hrs</p>
                                                </div>

                                                <div>
                                                    <span>Contacto</span>
                                                    <p>Pepito Gutiérrez</p>
                                                </div>

                                                <div>
                                                    <span>Teléfono</span>
                                                    <p>+56 9 1122 3344</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="ubicacion-n">
                                        <div class="drop-down">
                                            <p>Supermercado Mayorista 10, Los Ángeles</p>
                                            <img src="{{ asset('/public/web/imagenes/i-flecha-abajo.svg') }}" alt="">
                                        </div>
                                        <div class="ocultar-acordeon">
                                            <div class="grid-ocultar-acordeon">
                                                <div>
                                                    <span>Dirección</span>
                                                    <p>Calle 1, Local 2</p>
                                                </div>

                                                <div>
                                                    <span>Horario</span>
                                                    <p>09:00 a 21:00 hrs</p>
                                                </div>

                                                <div>
                                                    <span>Contacto</span>
                                                    <p>Pepito Gutiérrez</p>
                                                </div>

                                                <div>
                                                    <span>Teléfono</span>
                                                    <p>+56 9 1122 3344</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="ubicacion-n">
                                        <div class="drop-down">
                                            <p>Supermercado Mayorista 10, Los Ángeles</p>
                                            <img src="{{ asset('/public/web/imagenes/i-flecha-abajo.svg') }}" alt="">
                                        </div>
                                        <div class="ocultar-acordeon">
                                            <div class="grid-ocultar-acordeon">
                                                <div>
                                                    <span>Dirección</span>
                                                    <p>Calle 1, Local 2</p>
                                                </div>

                                                <div>
                                                    <span>Horario</span>
                                                    <p>09:00 a 21:00 hrs</p>
                                                </div>

                                                <div>
                                                    <span>Contacto</span>
                                                    <p>Pepito Gutiérrez</p>
                                                </div>

                                                <div>
                                                    <span>Teléfono</span>
                                                    <p>+56 9 1122 3344</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="ubicacion-n">
                                        <div class="drop-down">
                                            <p>Supermercado Mayorista 10, Los Ángeles</p>
                                            <img src="{{ asset('/public/web/imagenes/i-flecha-abajo.svg') }}" alt="">
                                        </div>
                                        <div class="ocultar-acordeon">
                                            <div class="grid-ocultar-acordeon">
                                                <div>
                                                    <span>Dirección</span>
                                                    <p>Calle 1, Local 2</p>
                                                </div>

                                                <div>
                                                    <span>Horario</span>
                                                    <p>09:00 a 21:00 hrs</p>
                                                </div>

                                                <div>
                                                    <span>Contacto</span>
                                                    <p>Pepito Gutiérrez</p>
                                                </div>

                                                <div>
                                                    <span>Teléfono</span>
                                                    <p>+56 9 1122 3344</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="numeros-pag">
                                    <a href="" class="numero-antes-despues" style="margin-right: 35px">Anterior</a>
                                    <a href="" class="numero-antes-despues-movil" style="margin-right: 35px"><img
                                            src="{{ asset('web/imagenes/i-antes.svg') }}" alt=""></a>
                                    <a href="" class="numero numero-seleccionado">1</a>
                                    <a href="" class="numero">2</a>
                                    <a href="" class="numero-antes-despues" style="margin-left: 35px">Siguiente</a>
                                    <a href="" class="numero-antes-despues-movil" style="margin-left: 35px"><img
                                            src="{{ asset('web/imagenes/i-despues.svg') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>-->

    <div class="contenido">
        <section class="hazte-cliente">
            <h2>Hazte cliente</h2>
            <p>Si tienes iniciación de actividades, y quieres que te atendamos de forma directa, llena los siguientes datos
            </p>
            <form action="" method="POST" id="formSubmit" name="formSubmit">
                @csrf
                <h6>Datos iniciales</h6>
                <div class="form-row-3">
                    <div class="form-input-n">
                        <label for="">¿Tienes iniciación de actividades?</label>
                        <select name="" id="iniciacion-actividades">
                            <option value="">Seleccione una opción</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <div class="form-input-n">
                        <label for="">Razón social</label>
                        <input type="text" id="razon_social" name="razon_social" maxlength="100">
                        <p class="help-block" style="color: red" id="razon_social_error">&nbsp;</p>
                    </div>

                    <div class="form-input-n">
                        <label for="rut">RUT del negocio</label>
                        <input type="text" id="rut" name="rut" maxlength="13">
                        <p class="help-block" style="color: red" id="rut_error">&nbsp;</p>
                    </div>

                    <div class="form-input-n">
                        <label for="">Tipo de negocio</label>
                        <select name="tipo_negocio" id="tipo_negocio">
                            <option value="">Seleccione</option>
                            @foreach ($tiposNegocio as $tipoNegocio)
                                <option value="{{ $tipoNegocio->tne_id }}">{{ $tipoNegocio->tne_nombre }}</option>
                            @endforeach
                        </select>
                        <p class="help-block" style="color: red" id="tipo_negocio_error">&nbsp;</p>
                    </div>

                    <div class="form-input-n">
                        <label for="">¿Cuál?</label>
                        <input type="text" id="cual" name="cual" maxlength="100">
                        <p class="help-block" style="color: red" id="cual_error">&nbsp;</p>
                    </div>
                </div>
                <br>
                <br>
                <h6>Dirección</h6>
                <div class="form-row-3">
                    <div class="form-input-n">
                        <label for="">Calle del negocio</label>
                        <input type="text" id="calle" name="calle" maxlength="100">
                        <p class="help-block" style="color: red" id="calle_error">&nbsp;</p>
                    </div>

                    <div class="form-input-n">
                        <label for="">Número (casa, local, etc)</label>
                        <input type="text" id="numero" name="numero" maxlength="100">
                        <p class="help-block" style="color: red" id="numero_error">&nbsp;</p>
                    </div>

                    <div class="form-input-n">
                        <label for="region">Región</label>
                        <select name="region" id="region">
                            <option value="">Seleccione</option>
                            @foreach ($regiones as $region)
                                <option value="{{ $region->reg_id }}">{{ $region->reg_nombre }}</option>
                            @endforeach
                        </select>
                        <p class="help-block" style="color: red" id="region_error">&nbsp;</p>
                    </div>

                    <div class="form-input-n">
                        <label for="comuna">Comuna</label>
                        <select name="comuna" id="comuna">
                            <option value="">Seleccione una región</option>
                        </select>
                        <p class="help-block" style="color: red" id="comuna_error">&nbsp;</p>
                    </div>
                </div>
                <br>
                <br>
                <h6>Datos iniciales</h6>
                <div class="form-row-3">
                    <div class="form-input-n">
                        <label for="">Nombre del contacto</label>
                        <input type="text" id="nombre" name="nombre" maxlength="100">
                        <p class="help-block" style="color: red" id="nombre_error">&nbsp;</p>
                    </div>

                    <div class="form-input-n">
                        <label for="">Teléfono</label>
                        <input type="text" id="telefono" onkeypress="return isNumberKey(event)" name="telefono"
                            maxlength="12">
                            <p class="help-block" style="color: red" id="telefono_error">&nbsp;</p>
                    </div>

                    <div class="form-input-n">
                        <label for="">Correo</label>
                        <input type="email" id="correo" name="correo" maxlength="100">
                        <p class="help-block" style="color: red" id="correo_error">&nbsp;</p>
                    </div>
                </div>
                <br>
                <div class="flex-boton">
                    <button class="btn-agregar">Enviar solicitud</button>
                </div>
            </form>
        </section>


    </div>

    @push('extra-js')
        <script src="{{ asset('public/web/js/hazte_cliente/index.js?v=' . rand()) }}"></script>
    @endpush

@endsection
