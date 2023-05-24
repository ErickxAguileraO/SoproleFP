@extends('layout.management')

@section('title', 'Editar editable')

@section('content')
    <div class="formulario-admin-secciones">
        <div class="row">
            <h1>Editar editable</h1>
        </div>
        <form name="formSubmit" class="formulario" id="formSubmit" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <div class="form-floating my-3">
                            <input type="text" name="titulo" class="form-control" id="titulo" placeholder="titulo"
                                autocomplete="new-password" value="{{$result->forcon_titulo}}" required>
                        </div>

                        <label for="contenido">Contenido</label>
                        <div class="form-floating my-3">
                            <textarea id="contenido" class="form-control" name="contenido" rows="4" cols="50">{{$result->forcon_contenido}}</textarea>
                        </div>


                        <label for="titulo">Formulario de contacto</label>
                        <div class="form-floating my-3">
                            <input type="text" name="formulario_contacto" class="form-control" 
                                autocomplete="new-password" value="{{$result->forcon_formulario_contacto}}" required>
                        </div>

                        <label for="titulo">Formulario para aceptar</label>
                        <div class="form-floating my-3">
                            <input type="text" name="formulario_aceptar" class="form-control"
                                autocomplete="new-password" value="{{$result->forcon_formulario_aceptar}}" required>
                        </div>


                        <label for="titulo">Formulario de rechazo</label>
                        <div class="form-floating my-3">
                            <input type="text" name="formulario_rechazo" class="form-control"
                                autocomplete="new-password" value="{{$result->forcon_formulario_rechazar}}" required>
                        </div>

                        <button class="btn btn-success btn-agregar">Actualizar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@push('extra-js')
    <script src="{{ asset('public/management/js/formularioContacto/editar.js?v=' . rand()) }}"></script>
@endpush
