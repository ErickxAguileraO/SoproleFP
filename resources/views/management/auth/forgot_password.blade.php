@extends('layouts.management', ['header' => false])

@section('title', 'Olvidaste contraseña')

@section('content')

    <!-- contenido -->
    <div id="login">
        <figure>
            <a href="{{ route('login') }}">
                <img src="{{ asset('/public/web/images/logo-soprole.png') }}" class="logo" />
            </a>
        </figure>

        <h2 class="text-center my-2">Actualizar Contraseña</h2>
        
        <form class="form-horizontal my-4" action="">
            @csrf
            <input type="hidden" id="token" name="token" value="{{ $request->route('token') }}">
                <fieldset>
                    <div class="form-floating mb-3">
                        <input type="text" id="email" name="email" class="form-control" id="floatingInputEmail" placeholder="Email"  value="{{ $request->email }}" readonly>
                        <label for="floatingInputEmail">Email</label>
                    </div>
                </fieldset>    
                <fieldset>
                    <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control" id="password" placeholder="">
                        <i class="bi bi-eye iconoVerPw"></i>
                        <label for="password">Nueva Contraseña</label>
                    </div>
                </fieldset>

                <fieldset>
                    <div class="form-floating mb-3">
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="">
                        <i class="bi bi-eye iconoVerPw"></i>
                        <label for="password_confirmation">Confirmación Contraseña</label>
                    </div>
                </fieldset>
                
                <div class="text-center">
                    <ul class="list-rules-password">
                        <li>Tu contraseña debe tener al menos 8 caracteres.</li>
                    </ul>
                </div>

                <div class="text-center">
                    <input type="button" id="actualizarPasswordButton" class="btn btn-danger mx-auto d-block" value="Actualizar Contraseña">
                </div>
            
        </form>
    </div>

    @push('extra-js')
        <script src="{{ asset('public/management/js/auth/reset_password.js') }}"></script>
    @endpush

@endsection
