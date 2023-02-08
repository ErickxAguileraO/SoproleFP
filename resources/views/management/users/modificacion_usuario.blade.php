@extends('layout.management')

@section('title', 'Modificación usuario')

@section('content')
    <div class="formulario-admin-secciones">
        <a href="{{ route('administracion.usuarios.index') }}" class="enlace btn btn-primary my-3"><i
                class="bi bi-arrow-bar-left"></i>
            volver al listado
        </a>
        <h1>Modificar usuario</h1>

        <form id="formModificacionUsuario" class="formulario">
            @csrf
            <fieldset class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <div class="form-floating my-3">
                            <input type="text" name="nombre" class="form-control" placeholder="nombre"
                                value="{{ old('nombre') != null ? old('nombre') : $usuario->name }}" required>
                            <label for="nombre">Nombre</label>
                        </div>
                        <div class="form-floating my-3">
                            <input type="text" name="email" class="form-control" id="email" placeholder="email"
                                value="{{ old('email') != null ? old('email') : $usuario->email }}" required>
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <button id="actualizarButton" class="btn-agregar-seccion">Actualizar</button>
                    <input type="hidden" name="idUsuario" value="{{ $usuario->id }}">
                </div>
        </form>
    </div>

    @push('extra-js')
        <script src="{{ asset('public/management/js/usuarios/form_modificar_usuario.js') }}"></script>
    @endpush

@endsection
