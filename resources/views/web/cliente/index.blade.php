@extends('layout.web')

@section('title', 'Hazte cliente')

@section('content')

@include('web.cliente.spinner')


    <div class="flex-ventana-locales">
        <div class="ventana-locales">
            <div class="encabezado-ventana">
                <div>
                    <h6>Si no tienes iniciación de actividades, adquiere nuestros productos en:</h6>
                    <p>El stock de cada uno de los productos en los distintos locales, depende exclusivamente de dichos locales, no de Soprole.</p>
                </div>
                
                <img class="cerrar-ventana-ubicacion" src="{{ asset('/public/web/imagenes/x-black.svg') }}" alt="">
            </div>
            <div class="contenido-ventana-ubicacion">
                <form action="" class="form-row-2">
                    <div class="form-input-n">
                        <label for="">Región</label>
                        <select name="regionModal" id="regionModal">
                            <option value="0">Seleccione una opción</option>
                            @foreach ($regiones as $region)
                                <option value="{{ $region->reg_id }}">{{ $region->reg_nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-input-n">
                        <label for="">Comuna</label>
                        <select name="comunaModal" id="comunaModal">
                            <option value="0">Seleccione una opción</option>
                        </select>
                    </div>
                </form>
                <div class="ubicaciones" id="ubicaciones">
            
                </div>
            </div>
        </div>
    </div>

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
                        <p class="help-block" style="color: red" id="actividades_error">&nbsp;</p>
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
                <h6>Datos de contacto</h6>
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
        <script src="{{ asset('public/web/js/hazte_cliente/paginador.js?v=' . rand()) }}"></script>
        <script src="{{ asset('public/web/js/hazte_cliente/index.js?v=' . rand()) }}"></script>
        <script src="{{ asset('public/web/js/hazte_cliente/modal.js?v=' . rand()) }}"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.6/jquery.simplePagination.js"></script>

    @endpush

@endsection
