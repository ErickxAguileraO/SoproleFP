@extends('layout.management')

@push('extra-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/management/css/checkbox.css') }}">
@endpush


@section('title', 'Crear producto')

@section('content')
    <div class="formulario-admin-secciones">
        <a href="{{ route('administracion.producto.index') }}" class="enlace btn btn-primary my-3"><i
                class="bi bi-arrow-bar-left"></i> volver
            al listado</a>
        <div class="row">
            <h1>Crear producto</h1>
        </div>
        <form name="formSubmit" class="formulario" id="formSubmit" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <div class="form-floating my-3">
                            <input type="text" name="titulo" class="form-control" id="titulo" value=""
                                required>
                        </div>
                        <label for="sku">SKU</label>
                        <div class="form-floating my-3">
                            <input type="text" name="sku" class="form-control" id="sku" value=""
                                required>
                        </div>
                        <label for="formato">Formato</label>
                        <div class="form-floating my-3">
                            <input type="text" name="formato" class="form-control" id="formato" value=""
                                required>
                        </div>

                        <label for="">Contenido</label>
                        <div class="form-floating my-3">
                            <textarea id="contenido" class="form-control" name="contenido" rows="4" cols="50"></textarea>
                        </div>

                        <label for="">Conservación</label>
                        <div class="form-floating my-3">
                            <textarea id="conservacion" class="form-control" name="conservacion" rows="4" cols="50"></textarea>
                        </div>

                        <label for="categoria">Categorias</label>
                        <div class="row mb-3">
                            <div class="form-floating my-3">
                                <select name="categoria" id="categoria" class="tipo-seleccion">
                                    <option value="">Seleccione</option>
                                    @foreach ($categorias as $categoria)
                                        <option value="{{ $categoria->cat_id }}">{{ $categoria->cat_nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <label for="vida_util">Vida útil</label>
                        <div class="form-floating my-3">
                            <input type="text" name="vida_util" class="form-control" id="vida_util" value=""
                                required>
                        </div>


                        <label for="imagen">Imagen listado ({{ $ancho ."px ancho x ".$alto."px alto"}})</label>
                        <div class="row mb-3">
                            <div class="form-floating my-3">
                                <input type="file" class="input-img-solo" id="imagen" name="imagen">
                            </div>
                        </div>

                        <div class="wp-documentos-right tipo-img-txt">
                            <label for="">Imagenes</label>
                            <div id="galeria_imagenes">
                                <div>
                                    <input type="file" name="imagenes[]"
                                        class="input-img-admin validador-medidas-img-dinamicas" accept="image/*">
                                </div>
                            </div>
                            <div class="flex-btn-file-img">
                                <div class="btn-file-img" id="agregar-imagenes">Agregar</div>
                            </div>
                        </div>


                        <label for="imagen">Ficha</label>
                        <div class="row mb-3">
                            <div class="form-floating my-3">
                                <input type="file" class="input-img-solo" id="archivo" name="archivo">
                            </div>
                        </div>


                        <label for="orden">Orden</label>
                        <div class="form-floating my-3">
                            <input type="text" name="orden" class="form-control" id="orden" placeholder="orden"
                                autocomplete="new-password" value="" required
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                        </div>

                        <label for="estado">Estado</label>
                        <div class="row mb-3">
                            <div class="form-floating my-3">
                                <select name="estado" id="estado" class="tipo-seleccion">
                                    <option value="1">Activo
                                    </option>
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
    <script src="{{ asset('public/management/js/producto/crear.js?v=' . rand()) }}"></script>
    <script src="{{ asset('public/management/js/producto/imagenes.js?v=' . rand()) }}"></script>
    <script>
        let ancho = {{ $ancho }}
        let alto = {{ $alto }}
    </script>
@endpush
