@extends('layout.management')

@section('title', 'Editar categoria')

@section('content')
    <div class="formulario-admin-secciones">
        <a href="{{ route('administracion.categoria.index') }}" class="enlace btn btn-primary my-3"><i
                class="bi bi-arrow-bar-left"></i> volver
            al listado</a>
        <div class="row">
            <h1>Editar categoría</h1>
        </div>
        <form name="formSubmit" class="formulario" id="formSubmit" enctype="multipart/form-data" method="post">
            @csrf
            <input type="hidden" name="categoria_id" value="{{ $categoria->cat_id }}" />
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <div class="form-floating my-3">
                            <input type="text" name="nombre" class="form-control" id="pro_nombre"
                                placeholder="pro_nombre" autocomplete="new-password" value="{{ $categoria->cat_nombre }}"
                                required>

                        </div>

                        

                        <label for="orden">Orden</label>
                        <div class="form-floating my-3">
                            <input type="text" name="orden" class="form-control" id="orden" placeholder="orden"
                                autocomplete="new-password" value="{{$categoria->cat_orden}}" required
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                        </div>


                        <label for="estado">Estado</label>
                        <div class="row mb-3">
                            <div class="form-floating my-3">

                                <select name="estado" id="estado" class="tipo-seleccion">
                                    <option {{ $categoria->cat_estado == 1 ? 'selected' : false }} value="1">Activo
                                    </option>
                                    <option {{ $categoria->cat_estado == 0 ? 'selected' : false }} value="0">Inactivo</option>
                                </select>
                            </div>

                        </div>
                        <button class="btn btn-success btn-agregar">Actualizar</button>
                    </div>
                </div>
            </div>
        </form>

    </div>
@endsection
@push('extra-js')
    <script src="{{ asset('public/management/js/categoria/editar.js?v=' . rand()) }}"></script>
@endpush
