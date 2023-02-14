@extends('layout.management')

@section('title', 'Crear cliente')

@section('content')
    <div class="formulario-admin-secciones">
        <a href="{{ route('administracion.cliente.index') }}" class="enlace btn btn-primary my-3"><i
                class="bi bi-arrow-bar-left"></i> volver
            al listado</a>
        <div class="row">
            <h1>Crear</h1>
        </div>
        <form name="formSubmit" class="formulario" id="formSubmit" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">

                        <label for="razon_social">Razón social</label>
                        <div class="form-floating my-3">
                            <input type="text" name="razon_social" class="form-control" id="razon_social"
                                placeholder="razon_social"  value="" required>
                        </div>
                        <label for="rut">Rut</label>
                        <div class="form-floating my-3">
                            <input type="text" name="rut" class="form-control" id="rut"  value="" required>
                        </div>

                        <label for="otro_tipo">Otro tipo</label>
                        <div class="form-floating my-3">
                            <input type="text" name="otro_tipo" class="form-control" id="otro_tipo"  value="" required>
                        </div>

                        <label for="calle">Direccion: Calle</label>
                        <div class="form-floating my-3">
                            <input type="text" name="calle" class="form-control" id="calle"  value="" required>
                        </div>

                        <label for="numero">Direccion: Número</label>
                        <div class="form-floating my-3">
                            <input type="text" name="numero" class="form-control" id="numero"  value="" required  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                        </div>

                        <label for="nombre_contacto">Nombre contacto</label>
                        <div class="form-floating my-3">
                            <input type="text" name="nombre_contacto" class="form-control" id="nombre_contacto"  value="" required>
                        </div>

                        <label for="telefono_contacto">Teléfono contacto</label>
                        <div class="form-floating my-3">
                            <input type="text" name="telefono_contacto" class="form-control" id="telefono_contacto"  value="" required>
                        </div>

                        <label for="correo_contacto">Correo contacto</label>
                        <div class="form-floating my-3">
                            <input type="text" name="correo_contacto" class="form-control" id="correo_contacto"  value="" required>
                        </div>

                        <label for="estado">Estado</label>
                        <div class="row mb-3">
                            <div class="form-floating my-3">
                                <select name="estado" id="estado" class="tipo-seleccion">
                                    <option value="1">Activo</option>
                                    <option value="0">Inactivo</option>
                                </select>
                            </div>
                        </div>
                        <button class="btn btn-success btn-agregar">Agregar</button>
                    </div>
                </div>
            </div>
        </form>

    </div>
@endsection
@push('extra-js')
    <script src="{{ asset('public/management/js/cliente/crear.js?v=' . rand()) }}"></script>
@endpush
