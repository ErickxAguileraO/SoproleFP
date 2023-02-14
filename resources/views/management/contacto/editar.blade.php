@extends('layout.management')

@section('title', 'Ver contacto')

@section('content')
    <div class="formulario-admin-secciones">
        <a href="{{ route('administracion.contacto.index') }}" class="enlace btn btn-primary my-3"><i
                class="bi bi-arrow-bar-left"></i> volver
            al listado</a>
        <div class="row">
            <h1>Ver contacto</h1>
        </div>
        <form name="formSubmit" class="formulario" id="formSubmit" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">

                        <label for="">Nombre</label>
                        <div class="form-floating my-3">
                            <input type="text" readonly class="form-control" value="{{ $contacto->con_nombre }}"
                                required>
                        </div>

                        <label for="">Teléfono</label>
                        <div class="form-floating my-3">
                            <input type="text" readonly class="form-control" value="{{ $contacto->con_telefono }}"
                                required>
                        </div>
                        <label for="">Correo</label>
                        <div class="form-floating my-3">
                            <input type="text" readonly class="form-control" value="{{ $contacto->con_email }}" required>
                        </div>
                        <label for="">Empresa</label>
                        <div class="form-floating my-3">
                            <input type="text" readonly class="form-control" value="{{ $contacto->con_empresa }}"
                                required>
                        </div>
                        <label for="">Calle</label>
                        <div class="form-floating my-3">
                            <input type="text" readonly class="form-control" value="{{ $contacto->con_calle }}" required>
                        </div>
                        <label for="">Ciudad</label>
                        <div class="form-floating my-3">
                            <input type="text" readonly class="form-control" value="{{ $contacto->con_ciudad }}"
                                required>
                        </div>

                        <a href="{{ route('administracion.contacto.index') }}" class="btn btn-success">Volver</a>
                    </div>
                </div>
            </div>
        </form>

    </div>
@endsection
