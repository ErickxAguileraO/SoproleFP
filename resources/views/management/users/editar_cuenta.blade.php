@extends('layout.management')

@section('title', 'Modificación usuario')

@section('content')
    <div class="formulario-admin-secciones">
        <h1>Mi cuenta</h1>

        <form name="formSubmit" class="formulario">
            @csrf
            <fieldset class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <div class="form-floating my-3">
                            <input type="text" name="nombre" class="form-control" placeholder="nombre"
                                value="{{ $usuario->name }}" required>
                        </div>
                        <label for="email">Email</label>
                        <div class="form-floating my-3">
                            <input type="text" name="email" class="form-control" id="email" placeholder="email"
                                value="{{ $usuario->email }}" required>
                        </div>
                        <label for="password">Contraseña</label>
                        <div class="form-floating my-3">
                            <input type="password" name="password" class="form-control" placeholder="contraseña"
                                value="" required>
                            <i class="bi bi-eye iconoVerPw"></i>
                        </div>
                        <label for="password_confirmation">Repita la contraseña</label>
                        <div class="form-floating my-3">
                            <input type="password" name="password_confirmation" class="form-control"
                                placeholder="confirmación contraseña" value="" required>
                            <i class="bi bi-eye iconoVerPw"></i>

                        </div>
                    </div>
                    <button class="btn-agregar-seccion btn-agregar">Actualizar</button>
                </div>
        </form>
    </div>

    @push('extra-js')
        <script src="{{ asset('public/management/js/usuarios/editar.js') }}"></script>
    @endpush

@endsection
