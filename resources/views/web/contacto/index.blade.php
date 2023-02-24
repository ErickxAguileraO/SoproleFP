@extends('layout.web')

@section('title', 'Contactanos')

@section('content')
@include('web.cliente.spinner')

    <div class="contenido">
        <section class="hazte-cliente">
            <h2>Contáctanos</h2>
            <form action="" method="POST" id="formSubmit" name="formSubmit">
                @csrf
                <div class="form-row-2">
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
                    <div class="form-input-n">
                        <label for="">Ingrese aquí su consulta</label>
                        <textarea name="consulta" id="consultar"></textarea>
                        <p class="help-block" style="color: red" id="consulta_error">&nbsp;</p>
                    </div>
                </div>
                <br>
                <div class="flex-boton">
                    <button class="btn-agregar">Enviar mensaje</button>
                </div>
            </form>
        </section>
    </div>

    @push('extra-js')
        <script src="{{ asset('public/web/js/contacto/index.js?v=' . rand()) }}"></script>
    @endpush

@endsection
