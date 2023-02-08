@extends('layout.management')

@section('title', 'Creación usuario')

@section('content')
<div class="formulario-admin-secciones">
    <a href="{{ route('administracion.usuarios.index') }}"
        class="enlace btn btn-primary my-3"><i class="bi bi-arrow-bar-left"></i> 
        volver al listado
    </a>
    <h1>Crear usuario</h1>

    <form id="formCreacionUsuario" class="formulario">
     @csrf
        <fieldset class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <div class="form-floating my-3">
                        <input type="text" name="nombre" class="form-control" 
                        placeholder="nombre" value="" required>
                        <label for="nombre">Nombre</label>
                    </div>
                    <div class="form-floating my-3">
                        <input type="text" name="email" class="form-control" id="email" 
                        placeholder="email" value="" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating my-3">
                        <input type="password" name="password" class="form-control" 
                        placeholder="contraseña" value="" required>
                        <i class="bi bi-eye iconoVerPw"></i>
                        <label for="password">Contraseña</label>
                    </div>
                    <div class="form-floating my-3">
                        <input type="password" name="password_confirmation" class="form-control" 
                        placeholder="confirmación contraseña" value="" required>
                        <i class="bi bi-eye iconoVerPw"></i>
                        <label for="password_confirmation">Repita la contraseña</label>
                    </div>
                </div>
                <button id="registrarButton" class="btn-agregar-seccion">Registrar</button>
        </div>           
    </form>
</div>

@push('extra-js')
    <script src="{{ asset('public/management/js/usuarios/form_crear_usuario.js') }}"></script>
@endpush
   
@endsection