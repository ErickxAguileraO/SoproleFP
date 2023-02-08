@extends('layout.management', ['header' => false])

@section('title', 'Login')

@section('content')

    <!-- contenido -->
    <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <div id="login">
            
            <a href="#">
                <h1 class="display-2 text-center d-block my-4 text-uppercase"> <img src="{{ asset('/public/web/imagenes/logo-soprole.png') }}" alt=""></h1>
            </a>    
            <form class="form-horizontal" id="form-login" action="" autocomplete="off">
                @csrf
                <div class="input-group mb-3 ">
                    <span class="input-group-text height-58" id="basic-addon1"><i class="bi bi-person"></i></span>

                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="super@aeurus.cl" autocomplete="new-password">
                        <label for="new_password">Email</label>
                    </div>
                    <span class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text height-58" id="basic-addon1"><i class="bi bi-key"></i></span>
                    <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Contraseña" value="" autocomplete="current-password">
                        <i class="bi bi-eye iconoVerPw"></i>
                        <label for="password">Contraseña</label>
                    </div>
                    <span class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="loading-buttons">
                    <button type="button" class="btn btnLogin btn-danger mx-auto d-block" id="btnLogin"><i class="bi bi-box-arrow-right"></i> Iniciar sesión</button>
                </div>
            </form>

            <button type="button" class="btn btn-link mx-auto d-block my-3" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
                Olvidaste tu constraseña?
            </button>
        </div>
    </div>

    <!-- Restore Password -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Recuperar contraseña</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form role="form">
                        @csrf
                        <div class="modal-body">
                            <div class="form-floating mb-3">
                                <input type="text" id="emailRecuperacion" name="emailRecuperacion" class="form-control" id="floatingInputEmail" placeholder="Email" value="super@aeurus.cl" autocomplete="new-password">
                                <label for="floatingInputEmail">Email</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Cerrar</button>
                    <button type="button" id="recupararPassBoton" class="btn btn-primary btnRestorePassword">Enviar</button>
                </div>
            </div>
        </div>
    </div>

    @push('extra-js')
        <script src="{{ asset('public/management/js/auth/login.js') }}"></script>
    @endpush

@endsection
