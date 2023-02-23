@extends('layout.management')

@section('title', 'Ver contacto  - Hazte Cliente')

@section('content')
    <div class="formulario-admin-secciones">
        <a href="{{ route('administracion.hazte.cliente.index') }}" class="enlace btn btn-primary my-3"><i
                class="bi bi-arrow-bar-left"></i> volver
            al listado</a>
        <div class="row">
            <h1>Ver contacto - Hazte Cliente</h1>
        </div>
        <form name="formSubmit" class="formulario" id="formSubmit" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">

                        <label for="">Razón social</label>
                        <div class="form-floating my-3">
                            <input type="text" readonly class="form-control" value="{{$cliente->fhc_razon_social}}"
                                required>
                        </div>

                        <label for="">Rut</label>
                        <div class="form-floating my-3">
                            <input type="text" readonly class="form-control" value="{{$cliente->fhc_rut}}"
                                required>
                        </div>

                        <label for="">Tipo</label>
                        <div class="form-floating my-3">
                            <input type="text" readonly class="form-control" value="{{$cliente->Tipo->tne_nombre}}"
                                required>
                        </div>

                        <label for="">Cual?</label>
                        <div class="form-floating my-3">
                            <input type="text" readonly class="form-control" value="{{$cliente->fhc_cual}}"
                                required>
                        </div>

                        <label for="">Dirección</label>
                        <div class="form-floating my-3">
                            <input type="text" readonly class="form-control" value="{{$cliente->fhc_direccion}}"
                                required>
                        </div>

                        <label for="">Número</label>
                        <div class="form-floating my-3">
                            <input type="text" readonly class="form-control" value="{{$cliente->fhc_numero}}"
                                required>
                        </div>

                        <label for="">Región</label>
                        <div class="form-floating my-3">
                            <input type="text" readonly class="form-control" value="{{$cliente->Comuna->Region->reg_nombre}}"
                                required>
                        </div>


                        <label for="">Comuna</label>
                        <div class="form-floating my-3">
                            <input type="text" readonly class="form-control" value="{{$cliente->Comuna->com_nombre}}"
                                required>
                        </div>

                        <label for="">Nombre</label>
                        <div class="form-floating my-3">
                            <input type="text" readonly class="form-control" value="{{$cliente->fhc_nombre}}"
                                required>
                        </div>

                        <label for="">Teléfono</label>
                        <div class="form-floating my-3">
                            <input type="text" readonly class="form-control" value="{{$cliente->fhc_telefono}}"
                                required>
                        </div>

                        <label for="">Correo</label>
                        <div class="form-floating my-3">
                            <input type="text" readonly class="form-control" value="{{$cliente->fhc_correo}}"
                                required>
                        </div>
                        <a href="{{ route('administracion.hazte.cliente.index') }}" class="btn btn-success">Volver</a>
                    </div>
                </div>
            </div>
        </form>

    </div>
@endsection
